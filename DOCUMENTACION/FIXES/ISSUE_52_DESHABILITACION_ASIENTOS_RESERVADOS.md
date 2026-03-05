# 🔴 ISSUE #52: Deshabilitación de Asientos Reservados sin Confirmación - ANÁLISIS CRÍTICO

**Fecha:** 2026-03-05  
**Estado:** 🔍 ANÁLISIS Y DOCUMENTACIÓN (DETECTADO EN REVISIÓN)  
**Severidad:** 🔴 CRÍTICA (Impacto en reservaciones de clientes)  
**Issue #:** 52 (Nuevo - Hallazgo en revisión de backend)  
**Estimado:** 3-4h (análisis + implementación + notificaciones)

---

## 📑 ÍNDICE

1. [Resumen Ejecutivo](#1-resumen-ejecutivo)
2. [Problema Identificado](#2-problema-identificado)
3. [Análisis Técnico del Flujo](#3-análisis-técnico-del-flujo)
4. [Casos de Use/Escenarios](#4-casos-de-use--escenarios)
5. [Impacto en el Usuario](#5-impacto-en-el-usuario)
6. [Análisis de Código](#6-análisis-de-código)
7. [Soluciones Propuestas](#7-soluciones-propuestas)

---

## 1) Resumen Ejecutivo

### Problema Core

**Cuando un administrador deshabilita un asiento en una clase que YA TIENE RESERVACIONES, el sistema:**
- ❌ NO notifica al usuario que tenía la reserva
- ❌ NO pide confirmación
- ❌ NO explica qué pasará con su reservación
- ❌ NO registra quién ni cuándo hizo el cambio
- ⚠️ SIMPLEMENTE DESHABILITA EL ASIENTO

### Impacto

**Para el Usuario (cliente):**
- Llega a la clase con su reservación confirmada
- Le dicen que su asiento ya no existe
- No sabe qué pasó
- Pierde la clase o debe cambiar de asiento

**Para el Negocio:**
- Pérdida de confianza del cliente
- Posible reclamación/reembolso
- Sin trazabilidad de cambios

**Riesgo Legal:**
- El cliente puede reclamar que fue engañado
- Sin registro de por qué se deshabilitó el asiento

---

## 2) Problema Identificado

### 2.1 ¿Dónde ocurre?

**Panel de Administración → Backend**
- Ruta: `/backend/session/{id}/edit`
- Archivo: `src/Controller/Backend/SessionController.php`
- Formulario: `src/Form/Backend/SessionType.php`
- Campo: `placesNotAvailable` (textarea con tags)

**Flujo visual:**
```
Admin accede a: /backend/session/123/edit
              ↓
Ve formulario con campos:
  - Fecha inicio
  - Hora inicio
  - Salón
  - Capacidad del salón
  - "Asientos No Disponibles" ← AQUÍ
              ↓
Admin escribe/borra números: "1,3,5" → "" (vacío)
              ↓
Admin hace click: "Guardar"
              ↓
Sistema guarda y LISTO
              ↓
Usuario nunca se entere...
```

### 2.2 ¿Qué dato se modifica?

**En la Base de Datos - Tabla `session`:**
```sql
-- Estado inicial
UPDATE session SET places_not_available = '1,2,3' WHERE id = 123;

-- Admin borra asiento 3 porque "es peligroso"
UPDATE session SET places_not_available = '1,2' WHERE id = 123;

-- Pero... ¿qué pasó con la reservación en el asiento 3?
SELECT * FROM reservation 
WHERE session_id = 123 AND place_number = 3;
-- RESULTADO: Reservación ACTIVA para usuario X
```

### 2.3 Lógica de "Asiento No Disponible"

**En la BD ahora hay:**
```
Session #123:
  - places_not_available: [1, 2, 3]
  - capacity: 20

Reservation para Usuario "Juan García":
  - session_id: 123
  - place_number: 3        ← PROBLEMA: Está en places_not_available
  - is_available: true     ← Pero la reserva dice que SÍ está disponible
  - paid: true

¿Inconsistencia?
  ✗ ¿Su asiento existe?    NO (está en places_not_available)
  ✓ ¿Pagó su reserva?      SÍ
  ✓ ¿La reserva es válida? SÍ

RESULTADO: Estado INDEFINIDO
```

---

## 3) Análisis Técnico del Flujo

### 3.1 Código Actual - SessionType.php (línea 67-76)

```php
->add('placesNotAvailable', TextType::class, [
    'label' => 'label.places_not_available',
    'required' => false,
    'attr' => [
        'data-role' => 'tagsinput',  // jQuery tags input
    ],
])
```

**Análisis:**
- ✅ Campo TextType simple
- ❌ Sin validación de conflictos
- ❌ Sin confirmación
- ❌ Sin histórico
- ❌ Sin notificaciones

### 3.2 Código Actual - SessionController.php (línea 220-238)

```php
public function edit(
    Request $request,
    Session $session,
    EntityManagerInterface $em,
): Response {
    // ...
    if ($editForm->isSubmitted() && $editForm->isValid()) {
        $session->updateAvailableCapacity();
        $em->flush();  // ← SIMPLEMENTE GUARDA
        
        $this->addFlash('success', 'La Clase ha sido actualizada.');
        // ...
    }
}
```

**Problemas:**
1. **No detecta cambios en placesNotAvailable** entre versión anterior y nueva
2. **No chequea si hay reservaciones** en asientos que se están deshabilitando
3. **No notifica a usuarios** afectados
4. **No requiere confirmación** si hay conflictos
5. **updateAvailableCapacity()** solo actualiza capacidad, no valida

### 3.3 Entidades Involucradas

**Session.php:**
```php
#[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
private ?array $placesNotAvailable = [];

#[ORM\OneToMany(mappedBy: 'session', targetEntity: Reservation::class)]
private Collection $reservations;
```

**Reservation.php:**
```php
#[ORM\Column(type: Types::SMALLINT)]
private ?int $placeNumber = null;

#[ORM\Column]
private ?bool $isAvailable = true;
```

**Issue:** No hay validación en nivel Doctrine que verifique que `placeNumber` NO esté en `placesNotAvailable`.

### 3.4 Vistas del Backend

**Archivo:** `templates/backend/session/edit.html.twig`

El formulario probablemente tiene algo como:
```html
<div class="form-group">
    <label>Asientos No Disponibles</label>
    <input type="text" 
           name="session_form[placesNotAvailable]" 
           data-role="tagsinput">
    <small>Ej: 1,3,5</small>
</div>
```

**Problema visual:**
- No muestra qué asientos tienen reservaciones
- No advierte si vas a deshabilitar asientos reservados
- UI demasiado simple para operación crítica

---

## 4) Casos de Use / Escenarios

### Escenario 1: "Admin desactiva accidentalmente asiento reservado"

```
Viernes 15:00 - Clase con 20 asientos
  J. García → Asiento 7 (PAGADO)
  C. López → Asiento 12 (PAGADO)
  
Admin nota que asiento 7 tiene vista obstruida. Edita la clase:
  - Deshabilita asientos 5,6,7,8 (fila problemática)
  - Guarda
  
Lunes - Cliente J. García llega a clase:
  - Quiere ver su reservación → CONFLICTO
  - Asiento 7 no existe en la sala
  - ¿Reembolso? ¿Cambio de horario? ¿Compensación?
  - CERO DOCUMENTACIÓN de por qué se deshabilitó
```

### Escenario 2: "Admin deshabilita por mantenimiento no coordinado"

```
Miércoles - Instructor reporta:
  "El asiento 10 tiene la pata rota"
  
Admin rápidamente deshabilita asiento 10 sin consultar:
  - Clase Jueves 18:00 → Usuario A tiene reserva en asiento 10
  - Clase Viernes 10:00 → Usuario B tiene reserva en asiento 10
  
Nadie avisa a Users A y B. Llegan al día siguiente:
  - SORPRESA: Su asiento no existe
  - Sistema no tiene registro de por qué
```

### Escenario 3: "Cambio de configuración de sala"

```
Se compra nuevo equipo para sala X. Cambian distribución:
  - Antes: 20 asientos
  - Ahora: 18 asientos (se removieron 2)
  
Admin edita y desabilita asientos 19 y 20.
Pero hay 15 usuarios en próximas 2 semanas con reservas en esos asientos.

Result: Mass frustration sin notificaciones.
```

---

## 5) Impacto en el Usuario

### 5.1 Frontend - Para usuario con reservación

**¿Qué ve el cliente cuando llega a clase?**

En su dashboard/reservaciones:
```html
Mi Clase Pilates
Jueves 18:00
Salón: Studio A
Asiento: 7  ← Sistema dice que tiene este asiento
Pagado: SÍ  ← Muestra que pagó
```

Llega a la sala:
- Busca asiento número 7
- No existe (fue deshabilitado)
- Pregunta a instructor:
  - "¿Dónde está el asiento 7?"
  - Instructor doesn't know
  - Awkward conversation
  - Reputación del negocio ↓

### 5.2 Impacto de Ingresos

**Pérdidas potenciales:**
1. Cliente insatisfecho no vuelve (-$$$)
2. Necesita reembolso o crédito ($$$)
3. Mala reseña en internet ($$$$)
4. Perdida de referencias ($$$$)

---

## 6) Análisis de Código

### 6.1 Flujo Actual de Deshabilitación

```
Admin envía POST a /backend/session/123/edit
                    ↓
SessionController::edit()
                    ↓
$editForm->handleRequest($request)  ← Form mapea placesNotAvailable
                    ↓
if ($editForm->isSubmitted() && $editForm->isValid())
                    ↓
$session->updateAvailableCapacity()  ← Solo actualiza capacidad
                    ↓
$em->flush()  ← GUARDA A BD SIN VALIDACIONES
                    ↓
addFlash('success', 'La Clase ha sido actualizada')
                    ↓
Redirige a /backend/session/123/edit (reload form)

Usuarios afectados: NUNCA SON NOTIFICADOS
```

### 6.2 Qué Debería Pasar

```
Admin envía POST a /backend/session/123/edit
                    ↓
SessionController::edit()
                    ↓
$editForm->handleRequest($request)
                    ↓
if ($editForm->isSubmitted() && $editForm->isValid())
                    ↓
// NUEVO: Detectar cambios en placesNotAvailable
$oldPlaces = $session->getPlacesNotAvailable();  ← Original
$newPlaces = $editForm->getData()->getPlacesNotAvailable();  ← Nueva
$disabledPlaces = array_diff($newPlaces, $oldPlaces);
                    ↓
// NUEVO: Chequear si hay reservaciones en asientos deshabilitados
$affectedReservations = $reservationRepository
    ->findBySessionAndPlaces($session, $disabledPlaces);
                    ↓
if (count($affectedReservations) > 0):
    // NUEVO: Mostrar confirmación
    return $this->render('backend/session/edit_confirm.html.twig', [
        'affectedReservations' => $affectedReservations,
        'session' => $session,
        // ... otros datos
    ]);
else:
    // No hay conflictos, guardar normalmente
    $session->updateAvailableCapacity();
    $em->flush();
```

### 6.3 Métodos Que Faltan

**En ReservationRepository:**
```php
public function findBySessionAndPlaces(Session $session, array $places): array
{
    return $this->createQueryBuilder('r')
        ->andWhere('r.session = :session')
        ->andWhere('r.placeNumber IN (:places)')
        ->andWhere('r.isAvailable = true')  // Solo reservaciones activas
        ->setParameter('session', $session)
        ->setParameter('places', $places)
        ->getQuery()
        ->getResult();
}
```

**En Session o SessionService:**
```php
public function getDisabledPlaces(array $oldPlaces, array $newPlaces): array
{
    return array_diff($newPlaces, $oldPlaces);
}
```

---

## 7) Soluciones Propuestas

### 7.1 Solución Full (Recomendada)
**Impacto: ALTO | Complejidad: ALTA | Tiempo: 3-4h**

```
1. [FORMA]   Agregar validación en formulario SessionType
             - Mostrar asientos con reservaciones
             - Advertencia si se deshabilitarán asientos reservados
             
2. [LÓGICA]  Crear QueryBuilder para detectar conflictos
             - Antes de guardar, identificar cambios
             - Encontrar reservaciones en asientos deshabilitados
             
3. [PÁGINA]  Crear página de confirmación de cambios
             - Listar usuarios afectados
             - Pedir confirmación de admin
             - Opción: "Enviar EMAIL a cliente", "Cambiar automático de asiento"
             
4. [NOTIFY]  Sistema de notificación a usuarios
             - Email a usuario afectado
             - Explicar qué pasó
             - Ofrecer opciones: reembolso, cambio, crédito
             
5. [AUDIT]   Registrar el cambio en histórico
             - Quién hizo el cambio
             - Cuándo
             - Por qué (campo "motivo": "mantenimiento", "error", etc)
             - Qué usuarios fueron afectados
```

### 7.2 Solución Medium (Rápida)
**Impacto: MEDIO | Complejidad: MEDIA | Tiempo: 1.5-2h**

```
1. [VALIDAR] Mostrar alerta en formulario:
             "⚠️ Esta acción afectará a X reservaciones de usuarios"
             
2. [Popup]   Confirmación antes de guardar:
             "¿Continuar? Se deshabilitarán N asientos con reservaciones"
             
3. [EMAIL]   Email automático a usuarios:
             "Su asiento #{N} fue deshabilitado debido a {motivo}"
             
4. [LOG]     Registrar en tabla de auditoría
             - Quién hizo el cambio
             - Cuándo
             - Qué cambió
```

### 7.3 Solución Mínima (Patch rápido)
**Impacto: BAJO | Complejidad: BAJA | Tiempo: 30 min**

```
1. [ALERTA]  Mensaje en formulario:
             "⚠️ Editar asientos puede afectar reservaciones existentes"
             
2. [MODAL]   Confirmación simple:
             "¿Estás seguro de guardar estos cambios?"
```

---

## 8) Especificación Detallada - Solución Full

### 8.1 Base de Datos - Tabla Auditoría (NUEVA)

```sql
CREATE TABLE session_audit (
    id INT PRIMARY KEY AUTO_INCREMENT,
    session_id INT NOT NULL,
    changed_by INT NOT NULL,  -- FK: User (admin)
    changed_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    change_type ENUM('place_disabled', 'place_enabled', 'date_changed', 'room_changed'),
    affected_places JSON,  -- {"disabled": [1,3,5], "reason": "maintenance"}
    affected_reservations INT,  -- Cantidad de reservaciones afectadas
    ACTION VARCHAR(255),  -- 'notified', 'moved', 'refunded'
    FOREIGN KEY (session_id) REFERENCES (session)(id),
    FOREIGN KEY (changed_by) REFERENCES (user)(id)
);
```

### 8.2 Notificación Email - Template

**Archivo:** `templates/email/session_place_disabled.html.twig`

```html
<h2>Un cambio en tu clase</h2>

<p>Hola {{ user.firstname }},</p>

<p>Hemos realizado cambios en tu clase reservada:</p>

<div class="session-details">
    <strong>Clase:</strong> {{ session.discipline.name }}<br>
    <strong>Instructor:</strong> {{ session.instructor.fullname }}<br>
    <strong>Fecha/Hora:</strong> {{ session.dateStart|date('d/m/Y') }} a las {{ session.timeStart|date('H:i') }}<br>
    <strong>Salón:</strong> {{ session.exerciseRoom.name }}<br>
</div>

<p style="background: #fff3cd; padding: 10px; border-left: 4px solid #ff9800;">
    <strong>⚠️ Asiento {{ reservation.placeNumber }} ya no está disponible</strong><br>
    {{ reason }}
</p>

<h3>¿Qué ocurre con mi reservación?</h3>

<p>Tienes 3 opciones:</p>

<ol>
    <li><strong>Cambiar de asiento:</strong> 
        <a href="{{ url('frontend_reservation_change', {id: reservation.id}) }}">
            Ver asientos disponibles
        </a>
    </li>
    <li><strong>Cambiar de horario:</strong> 
        <a href="{{ url('frontend_session_list') }}">
            Ver otras clases
        </a>
    </li>
    <li><strong>Solicitar reembolso:</strong> 
        <a href="{{ url('frontend_contact', {type: 'refund'}) }}">
            Contactar con nosotros
        </a>
    </li>
</ol>

<p>Disculpa cualquier inconveniente. Si tienes dudas, no dudes en contactarnos.</p>
```

### 8.3 Controlador Modificado - SessionController.php

```php
public function edit(
    Request $request,
    Session $session,
    EntityManagerInterface $em,
    ReservationRepository $reservationRepository,
    UserMailer $userMailer,
    EventDispatcherInterface $eventDispatcher,
): Response {
    // Antes de procesar, guardar estado anterior
    $oldPlaces = $session->getPlacesNotAvailable();
    
    $cancelForm = $this->createCancelForm($session);
    $editForm = $this->createForm(SessionType::class, $session);
    $editForm->handleRequest($request);

    if ($editForm->isSubmitted() && $editForm->isValid()) {
        // NUEVO: Detectar cambios
        $newPlaces = $session->getPlacesNotAvailable();
        $disabledPlaces = array_diff($newPlaces, $oldPlaces);
        
        // NUEVO: Buscar reservaciones afectadas
        if (!empty($disabledPlaces)) {
            $affectedReservations = $reservationRepository
                ->findBySessionAndPlaces($session, $disabledPlaces);
            
            if (count($affectedReservations) > 0) {
                // MOSTRAR CONFIRMACIÓN
                return $this->render('backend/session/edit_confirm.html.twig', [
                    'session' => $session,
                    'affectedReservations' => $affectedReservations,
                    'disabledPlaces' => $disabledPlaces,
                    'edit_form' => $editForm->createView(),
                ]);
            }
        }
        
        // GUARDAR normalmente si no hay conflictos
        $session->updateAvailableCapacity();
        
        // NUEVO: Registrar auditoría
        $this->sessionAuditService->logChange(
            session: $session,
            changedBy: $this->getUser(),
            changeType: 'place_disabled',
            affectedPlaces: $disabledPlaces,
            affectedReservationsCount: 0
        );
        
        $em->flush();

        $this->addFlash('success', 'La Clase ha sido actualizada.');

        return $this->redirectToRoute('backend_session_edit', [
            'id' => $session->getId(),
        ]);
    }

    return $this->render('backend/session/edit.html.twig', [
        'session' => $session,
        'edit_form' => $editForm->createView(),
        'cancel_form' => $cancelForm->createView(),
    ]);
}

// NUEVO: Método para confirmar y aplicar cambios con notificaciones
#[Route('/{id}/confirm-changes', name: 'backend_session_confirm_changes', methods: ['POST'])]
public function confirmChanges(
    Request $request,
    Session $session,
    EntityManagerInterface $em,
    UserMailer $userMailer,
): Response {
    // Procesar cambios confirmados
    $session->updateAvailableCapacity();
    
    // Obtener reservaciones afectadas (desde session stored data)
    $affectedReservations = json_decode($request->request->get('affected_reservations', '[]'));
    
    // NOTIFICAR a usuarios
    foreach ($affectedReservations as $reservation) {
        $userMailer->sendSessionPlaceDisabledEmail(
            user: $reservation->getUser(),
            session: $session,
            reservation: $reservation,
            reason: $request->request->get('reason', 'Cambios de configuración de la sala')
        );
        
        // Disparar evento para que se registre
        $eventDispatcher->dispatch(
            new ReservationPlaceDisabledEvent($reservation, $session)
        );
    }
    
    // Registrar auditoría
    $this->sessionAuditService->logChange(
        session: $session,
        changedBy: $this->getUser(),
        changeType: 'place_disabled',
        affectedPlaces: $affectedPlaces,
        affectedReservationsCount: count($affectedReservations),
        action: 'notified'
    );
    
    $em->flush();

    $this->addFlash('success', sprintf(
        'Cambios guardados. %d usuarios han sido notificados.',
        count($affectedReservations)
    ));

    return $this->redirectToRoute('backend_session_edit', ['id' => $session->getId()]);
}
```

---

## 9) Archivos a Modificar/Crear

| Tipo | Archivo | Acción | Prioridad |
|------|---------|--------|-----------|
| Controlador | `src/Controller/Backend/SessionController.php` | Modificar método `edit()` | ALTA |
| Repositorio | `src/Repository/ReservationRepository.php` | Agregar método `findBySessionAndPlaces()` | ALTA |
| Formulario | `src/Form/Backend/SessionType.php` | Agregar validación/advertencia | MEDIA |
| Vista | `templates/backend/session/edit.html.twig` | Mostrar advertencia | MEDIA |
| Vista | `templates/backend/session/edit_confirm.html.twig` | NUEVA - Página de confirmación | ALTA |
| Email | `templates/email/session_place_disabled.html.twig` | NUEVA - Template email | ALTA |
| Entity | `src/Entity/SessionAudit.php` | NUEVA - Entidad de auditoría | MEDIA |
| Service | `src/Service/SessionAuditService.php` | NUEVA - Servicio de auditoría | MEDIA |
| Event | `src/Event/ReservationPlaceDisabledEvent.php` | NUEVA - Evento para auditoría | BAJA |
| Migración | `migrations/Version*.php` | NUEVA - Crear tabla session_audit | ALTA |

---

## 10) Riesgos y Consideraciones

| Riesgo | Probabilidad | Impacto | Mitigación |
|--------|-------------|--------|-----------|
| Email spam si notificamos siempre | Alta | Bajo | Permitir opt-out en preferencias |
| Impacto en ingresos (reembolsos) | Media | Alto | Documentar todas las acciones |
| Cambio de comportamiento (admin espera que sea rápido) | Media | Medio | Opción simple sin confirmación |
| Performance si hay muchas reservaciones | Baja | Medio | Usar índices en BD |

---

## 11) Próximos Pasos

1. **Revisión de Especificación:** ¿Está de acuerdo con este análisis?
2. **Prioridad:** ¿Full, Medium o Mínima solución?
3. **Timeline:** ¿Cuándo hacerlo?
4. **Testing:** ¿Cómo validar cambios?

---

## 12) DECISIÓN DE IMPLEMENTACIÓN - SOLUCIÓN ACORDADA ✅

### Fecha de Decisión: 2026-03-05

**Después de revisión, se acordó implementar 3 componentes principales:**

### 12.1 Componente 1: Alerta y Confirmación (ALTA PRIORIDAD)

**Objetivo:** Prevenir deshabilitación accidental de asientos reservados

**Comportamiento:**
```
Admin edita Session y cambia placesNotAvailable
              ↓
Sistema detecta: ¿Algún asiento deshabilitado tiene reservación activa?
              ↓
SI hay conflictos:
    → Mostrar ALERTA con lista de usuarios afectados
    → Pedir CONFIRMACIÓN explícita:
      "⚠️ Esta acción afectará a [N] reservaciones activas"
      "Usuarios: Juan García (asiento 3), María López (asiento 7)"
      [ ] Confirmo que deseo continuar
      [Cancelar] [Guardar de todas formas]
              ↓
NO hay conflictos:
    → Guardar normalmente
```

**Implementación:**
- Modificar `SessionController::edit()`
- Crear método `ReservationRepository::findBySessionAndPlaces()`
- Crear vista `backend/session/edit_confirm.html.twig`
- JavaScript para modal de confirmación

**Criterios de Aceptación:**
- ✅ AC-1: Sistema detecta asientos con reservaciones antes de guardar
- ✅ AC-2: Muestra modal con usuarios afectados
- ✅ AC-3: Requiere confirmación explícita (checkbox + botón)
- ✅ AC-4: Permite cancelar operación

---

### 12.2 Componente 2: Notificación al Usuario + Devolución de Cuota (MEDIA PRIORIDAD)

**Objetivo:** Informar al cliente sobre cambio en su reservación y ofrecer opciones

**Comportamiento Fase 1 (Implementación inmediata):**
```
Admin confirma deshabilitación de asientos con reservaciones
              ↓
Sistema automáticamente:
    1. Marca reservación como "afectada" (nuevo campo)
    2. Registra motivo del cambio
    3. DEVUELVE automáticamente el crédito de la clase
    4. Estado de reservación: "cancelada_por_admin"
              ↓
Usuario ve en su panel:
    "Tu reservación fue cancelada debido a: [motivo]"
    "Se ha devuelto 1 crédito a tu cuenta"
    "Puedes reservar otra clase aquí: [botón]"
```

**Comportamiento Fase 2 (Futuro - Sistema de emails):**
```
(COMENTADO POR AHORA - Implementar cuando esté listo sistema de emails)

Sistema envía email al usuario:
    - Asunto: "Cambio en tu clase reservada"
    - Mensaje: Asiento deshabilitado + motivo
    - Opciones: 
      * Cambiar de asiento en misma clase (si hay disponibles)
      * Cambiar a otra clase
      * Devolución procesada (ya hecha automáticamente)
```

**Implementación Fase 1:**
- Modificar `Reservation` entity: agregar campo `cancellation_reason`
- Crear método `Transaction::refundClass()` para devolver crédito
- Actualizar panel de usuario para mostrar reservaciones canceladas
- Crear servicio `ReservationCancellationService`

**Implementación Fase 2 (futuro):**
- Template `templates/email/session_place_disabled.html.twig`
- Integración con `UserMailer`
- Sistema de preferencias de notificaciones

**Criterios de Aceptación Fase 1:**
- ✅ AC-5: Reservación se marca como cancelada automáticamente
- ✅ AC-6: Crédito/clase se devuelve a la cuenta del usuario
- ✅ AC-7: Usuario ve motivo de cancelación en su panel
- ✅ AC-8: Usuario puede reservar otra clase con crédito devuelto

**Criterios de Aceptación Fase 2 (futuro):**
- 📧 AC-9: Email enviado automáticamente (cuando sistema esté listo)
- 📧 AC-10: Email incluye opciones de cambio de clase

---

### 12.3 Componente 3: Registro de Auditoría (ALTA PRIORIDAD)

**Objetivo:** Trazabilidad completa de cambios administrativos

**Información a Registrar:**

```sql
-- Nueva tabla: session_place_change_log
CREATE TABLE session_place_change_log (
    id INT PRIMARY KEY AUTO_INCREMENT,
    session_id INT NOT NULL,
    changed_by_staff_id INT NOT NULL,  -- FK: Staff (admin/instructor)
    changed_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    
    -- Datos del cambio
    old_places_not_available TEXT,  -- "1,2,3"
    new_places_not_available TEXT,  -- "1,2,3,4,5"
    disabled_places VARCHAR(255),   -- "4,5" (los que se agregaron)
    
    -- Motivo y contexto
    reason VARCHAR(500) NOT NULL,   -- "Mantenimiento", "Reconfigiguración", etc.
    notes TEXT NULL,                -- Notas adicionales del admin
    
    -- Reservaciones afectadas
    affected_reservations_count INT DEFAULT 0,
    affected_users TEXT NULL,       -- JSON: [{"user_id": 123, "name": "Juan García", "place": 4}]
    
    -- Acciones tomadas
    action_taken ENUM('refunded', 'moved', 'pending') DEFAULT 'refunded',
    
    FOREIGN KEY (session_id) REFERENCES session(id),
    FOREIGN KEY (changed_by_staff_id) REFERENCES staff(id)
);
```

**Comportamiento:**
```
Admin confirma cambios en placesNotAvailable
              ↓
Antes de guardar, sistema registra:
    - ¿Quién? → $this->getUser() (Staff logueado)
    - ¿Cuándo? → new \DateTime() (Timestamp actual)
    - ¿Qué cambió? → Comparar old vs new placesNotAvailable
    - ¿Por qué? → Campo obligatorio "Motivo" en formulario
    - ¿A quién afectó? → Lista de usuarios con reservaciones
              ↓
Guardar en tabla session_place_change_log
              ↓
Disponible para:
    - Reporte de auditoría en backend
    - Historial de cambios por sesión
    - Investigación de incidentes
```

**Implementación:**
- Crear entidad `SessionPlaceChangeLog`
- Crear migración para nueva tabla
- Modificar formulario: agregar campo "Motivo del cambio" (required)
- Crear servicio `SessionAuditService::logPlaceChange()`
- Crear vista backend: "Historial de cambios de asientos"

**Criterios de Aceptación:**
- ✅ AC-11: Campo "Motivo" es obligatorio al deshabilitar asientos con reservaciones
- ✅ AC-12: Se registra quién hizo el cambio (Staff)
- ✅ AC-13: Se registra fecha/hora exacta
- ✅ AC-14: Se guardan asientos antes y después del cambio
- ✅ AC-15: Se registran usuarios afectados con sus datos
- ✅ AC-16: Admin puede ver historial de cambios de una sesión
- ✅ AC-17: Admin puede generar reporte de auditoría

---

## 13) PLAN DE IMPLEMENTACIÓN DETALLADO

### Fase 1: Base de Datos y Entidades (1h)

**Archivos a crear:**
1. `migrations/VersionXXX_CreateSessionPlaceChangeLog.php`
   ```php
   public function up(Schema $schema): void
   {
       $this->addSql('CREATE TABLE session_place_change_log (...)');
   }
   ```

2. `src/Entity/SessionPlaceChangeLog.php`
   ```php
   class SessionPlaceChangeLog
   {
       private ?int $id = null;
       private ?Session $session = null;
       private ?Staff $changedBy = null;
       private ?\DateTimeInterface $changedAt = null;
       // ... campos completos
   }
   ```

**Archivos a modificar:**
3. `src/Entity/Reservation.php`
   ```php
   #[ORM\Column(length: 500, nullable: true)]
   private ?string $cancellationReason = null;
   
   #[ORM\Column(length: 50, nullable: true)]
   private ?string $cancellationSource = null; // 'user', 'admin', 'system'
   ```

**Tests:**
```bash
php bin/console doctrine:migrations:migrate
php bin/console doctrine:schema:validate
```

---

### Fase 2: Servicios de Negocio (1.5h)

**Archivos a crear:**

1. `src/Service/SessionAuditService.php`
   ```php
   class SessionAuditService
   {
       public function logPlaceChange(
           Session $session,
           Staff $changedBy,
           array $oldPlaces,
           array $newPlaces,
           string $reason,
           array $affectedReservations = []
       ): SessionPlaceChangeLog
       {
           $log = new SessionPlaceChangeLog();
           $log->setSession($session);
           $log->setChangedBy($changedBy);
           $log->setOldPlacesNotAvailable(implode(',', $oldPlaces));
           $log->setNewPlacesNotAvailable(implode(',', $newPlaces));
           
           $disabledPlaces = array_diff($newPlaces, $oldPlaces);
           $log->setDisabledPlaces(implode(',', $disabledPlaces));
           
           $log->setReason($reason);
           $log->setAffectedReservationsCount(count($affectedReservations));
           
           // Guardar datos de usuarios afectados
           $affectedUsers = [];
           foreach ($affectedReservations as $reservation) {
               $affectedUsers[] = [
                   'user_id' => $reservation->getUser()->getId(),
                   'name' => $reservation->getUser()->getFullName(),
                   'place' => $reservation->getPlaceNumber(),
               ];
           }
           $log->setAffectedUsers(json_encode($affectedUsers));
           
           $this->em->persist($log);
           $this->em->flush();
           
           return $log;
       }
   }
   ```

2. `src/Service/ReservationCancellationService.php`
   ```php
   class ReservationCancellationService
   {
       public function cancelByAdmin(
           Reservation $reservation,
           string $reason,
           bool $refund = true
       ): void
       {
           $reservation->setCancellationAt(new \DateTime());
           $reservation->setCancellationReason($reason);
           $reservation->setCancellationSource('admin');
           $reservation->setIsAvailable(false);
           
           if ($refund) {
               $this->refundClass($reservation);
           }
           
           $this->em->flush();
       }
       
       private function refundClass(Reservation $reservation): void
       {
           $transaction = $reservation->getTransaction();
           if ($transaction) {
               // Devolver 1 clase al paquete del usuario
               $transaction->incrementRemainingClasses();
               
               // Registrar en histórico
               // ... log de devolución
           }
       }
   }
   ```

**Archivos a modificar:**

3. `src/Repository/ReservationRepository.php`
   ```php
   public function findActiveBySessionAndPlaces(
       Session $session,
       array $places
   ): array
   {
       return $this->createQueryBuilder('r')
           ->andWhere('r.session = :session')
           ->andWhere('r.placeNumber IN (:places)')
           ->andWhere('r.isAvailable = true')
           ->andWhere('r.cancellationAt IS NULL')
           ->setParameter('session', $session)
           ->setParameter('places', $places)
           ->getQuery()
           ->getResult();
   }
   ```

---

### Fase 3: Formulario y Validación (1h)

**Archivos a modificar:**

1. `src/Form/Backend/SessionType.php`
   ```php
   public function buildForm(FormBuilderInterface $builder, array $options): void
   {
       // ... código existente ...
       
       if ($session->getId()) {
           $builder
               // ... campos existentes ...
               
               // NUEVO: Campo de motivo (se muestra condicionalmente)
               ->add('placeChangeReason', TextareaType::class, [
                   'label' => 'Motivo del cambio',
                   'required' => false,  // Se validará en controlador
                   'mapped' => false,
                   'attr' => [
                       'rows' => 3,
                       'placeholder' => 'Ej: Mantenimiento del asiento, Reconfiguración de sala, etc.',
                   ],
               ])
           ;
       }
   }
   ```

**Validación JavaScript (optional pero recomendado):**
```javascript
// assets/js/backend/session-edit.js
$('#session_form_placesNotAvailable').on('change', function() {
    // Si hay cambios, mostrar campo de motivo
    $('#place-change-reason-group').show();
    $('#session_form_placeChangeReason').prop('required', true);
});
```

---

### Fase 4: Controlador y Lógica Principal (2h)

**Archivos a modificar:**

1. `src/Controller/Backend/SessionController.php`
   ```php
   #[Route('/{id}/edit', name: 'backend_session_edit', methods: ['GET', 'POST'])]
   public function edit(
       Request $request,
       Session $session,
       EntityManagerInterface $em,
       ReservationRepository $reservationRepository,
       SessionAuditService $auditService,
       ReservationCancellationService $cancellationService,
   ): Response {
       // GUARDAR estado anterior antes de procesar form
       $oldPlaces = $session->getPlacesNotAvailable() ?? [];
       
       $cancelForm = $this->createCancelForm($session);
       $editForm = $this->createForm(SessionType::class, $session);
       $editForm->handleRequest($request);

       if ($editForm->isSubmitted() && $editForm->isValid()) {
           // DETECTAR cambios en placesNotAvailable
           $newPlaces = $session->getPlacesNotAvailable() ?? [];
           $disabledPlaces = array_diff($newPlaces, $oldPlaces);
           
           if (!empty($disabledPlaces)) {
               // BUSCAR reservaciones afectadas
               $affectedReservations = $reservationRepository
                   ->findActiveBySessionAndPlaces($session, $disabledPlaces);
               
               if (count($affectedReservations) > 0) {
                   // Verificar si ya vino desde confirmación
                   $confirmed = $request->request->get('confirmed', false);
                   
                   if (!$confirmed) {
                       // PRIMERA VEZ: Mostrar confirmación
                       return $this->render('backend/session/edit_confirm.html.twig', [
                           'session' => $session,
                           'affectedReservations' => $affectedReservations,
                           'disabledPlaces' => $disabledPlaces,
                           'oldPlaces' => $oldPlaces,
                           'newPlaces' => $newPlaces,
                           'edit_form' => $editForm->createView(),
                       ]);
                   }
                   
                   // CONFIRMADO: Procesar cambios
                   $reason = $editForm->get('placeChangeReason')->getData();
                   
                   if (empty($reason)) {
                       $this->addFlash('error', 'El motivo del cambio es obligatorio cuando hay reservaciones afectadas.');
                       return $this->redirectToRoute('backend_session_edit', ['id' => $session->getId()]);
                   }
                   
                   // 1. CANCELAR reservaciones afectadas
                   foreach ($affectedReservations as $reservation) {
                       $cancellationService->cancelByAdmin(
                           reservation: $reservation,
                           reason: $reason,
                           refund: true  // Siempre devolver crédito
                       );
                   }
                   
                   // 2. REGISTRAR en auditoría
                   $auditService->logPlaceChange(
                       session: $session,
                       changedBy: $this->getUser(),
                       oldPlaces: $oldPlaces,
                       newPlaces: $newPlaces,
                       reason: $reason,
                       affectedReservations: $affectedReservations
                   );
                   
                   $this->addFlash('success', sprintf(
                       'Cambios guardados. %d reservaciones canceladas y créditos devueltos.',
                       count($affectedReservations)
                   ));
               }
           }
           
           // GUARDAR (con o sin conflictos)
           $session->updateAvailableCapacity();
           $em->flush();

           return $this->redirectToRoute('backend_session_edit', [
               'id' => $session->getId(),
           ]);
       }

       return $this->render('backend/session/edit.html.twig', [
           'session' => $session,
           'edit_form' => $editForm->createView(),
           'cancel_form' => $cancelForm->createView(),
       ]);
   }
   ```

---

### Fase 5: Vistas y UI (1.5h)

**Archivos a crear:**

1. `templates/backend/session/edit_confirm.html.twig`
   ```twig
   {% extends 'backend/layout.html.twig' %}

   {% block content %}
   <div class="container">
       <div class="alert alert-warning">
           <h3>⚠️ Confirmación Requerida</h3>
           <p>
               Estás a punto de <strong>deshabilitar {{ disabledPlaces|length }} asiento(s)</strong> 
               que tienen <strong>{{ affectedReservations|length }} reservación(es) activa(s)</strong>.
           </p>
       </div>

       <div class="card">
           <div class="card-header">
               <h4>Usuarios Afectados</h4>
           </div>
           <div class="card-body">
               <table class="table">
                   <thead>
                       <tr>
                           <th>Usuario</th>
                           <th>Email</th>
                           <th>Asiento</th>
                           <th>Estado Pago</th>
                       </tr>
                   </thead>
                   <tbody>
                       {% for reservation in affectedReservations %}
                       <tr>
                           <td>{{ reservation.user.fullName }}</td>
                           <td>{{ reservation.user.email }}</td>
                           <td><span class="badge badge-primary">{{ reservation.placeNumber }}</span></td>
                           <td>
                               {% if reservation.transaction %}
                                   <span class="badge badge-success">Pagado</span>
                               {% else %}
                                   <span class="badge badge-secondary">Pendiente</span>
                               {% endif %}
                           </td>
                       </tr>
                       {% endfor %}
                   </tbody>
               </table>
           </div>
       </div>

       <form method="post" action="{{ path('backend_session_edit', {id: session.id}) }}">
           <input type="hidden" name="confirmed" value="1">
           
           {# Re-incluir todos los datos del form #}
           {{ form_widget(edit_form._token) }}
           <input type="hidden" name="session_form[placesNotAvailable]" value="{{ newPlaces|join(',') }}">
           
           <div class="form-group">
               <label for="placeChangeReason">
                   Motivo del cambio <span class="text-danger">*</span>
               </label>
               {{ form_widget(edit_form.placeChangeReason, {
                   'attr': {'required': 'required'}
               }) }}
               <small class="form-text text-muted">
                   Este motivo se mostrará a los usuarios afectados y quedará registrado en el sistema.
               </small>
           </div>

           <div class="alert alert-info">
               <h5>Al confirmar:</h5>
               <ul>
                   <li>✅ Las {{ affectedReservations|length }} reservaciones serán <strong>canceladas automáticamente</strong></li>
                   <li>✅ Los créditos/clases serán <strong>devueltos a las cuentas</strong> de los usuarios</li>
                   <li>✅ Los usuarios verán el motivo en su panel de reservaciones</li>
                   <li>✅ Se registrará esta acción en el historial de auditoría</li>
               </ul>
           </div>

           <div class="form-group">
               <div class="custom-control custom-checkbox">
                   <input type="checkbox" class="custom-control-input" id="confirmCheck" required>
                   <label class="custom-control-label" for="confirmCheck">
                       Confirmo que deseo continuar con esta acción
                   </label>
               </div>
           </div>

           <div class="d-flex justify-content-between">
               <a href="{{ path('backend_session_edit', {id: session.id}) }}" class="btn btn-secondary">
                   Cancelar
               </a>
               <button type="submit" class="btn btn-danger">
                   Confirmar y Guardar Cambios
               </button>
           </div>
       </form>
   </div>
   {% endblock %}
   ```

**Archivos a modificar:**

2. `templates/backend/session/edit.html.twig`
   ```twig
   {# Agregar ayuda contextual #}
   <div class="form-group">
       {{ form_label(edit_form.placesNotAvailable) }}
       {{ form_widget(edit_form.placesNotAvailable) }}
       
       <small class="form-text text-muted">
           ⚠️ Si deshabilitas asientos que tienen reservaciones activas, 
           se te pedirá confirmación y motivo.
       </small>
       {{ form_errors(edit_form.placesNotAvailable) }}
   </div>
   
   {# Campo de motivo (oculto inicialmente, se muestra con JS si hay cambios) #}
   <div id="place-change-reason-group" class="form-group" style="display:none;">
       {{ form_label(edit_form.placeChangeReason) }}
       {{ form_widget(edit_form.placeChangeReason) }}
       {{ form_errors(edit_form.placeChangeReason) }}
   </div>
   ```

3. `templates/profile/reservations.html.twig` (o vista de usuario)
   ```twig
   {% for reservation in reservations %}
   <div class="reservation-card {% if reservation.cancellationAt %}cancelled{% endif %}">
       <h4>{{ reservation.session.discipline.name }}</h4>
       <p>{{ reservation.session.dateStart|date('d/m/Y') }} - {{ reservation.session.timeStart|date('H:i') }}</p>
       
       {% if reservation.cancellationAt %}
           <div class="alert alert-warning">
               <strong>Reservación Cancelada</strong><br>
               Motivo: {{ reservation.cancellationReason }}<br>
               <small>{{ reservation.cancellationAt|date('d/m/Y H:i') }}</small>
               
               {% if reservation.cancellationSource == 'admin' %}
                   <p class="mt-2">
                       ✅ Se ha devuelto 1 crédito a tu cuenta.<br>
                       <a href="{{ path('reservation_index') }}" class="btn btn-sm btn-primary">
                           Reservar otra clase
                       </a>
                   </p>
               {% endif %}
           </div>
       {% else %}
           <p>Asiento: <strong>{{ reservation.placeNumber }}</strong></p>
       {% endif %}
   </div>
   {% endfor %}
   ```

---

### Fase 6: Página de Historial de Auditoría (1h - OPCIONAL)

**Archivos a crear:**

1. `src/Controller/Backend/SessionAuditController.php`
   ```php
   #[Route('/backend/session/{id}/audit', name: 'backend_session_audit')]
   public function audit(
       Session $session,
       SessionPlaceChangeLogRepository $logRepository
   ): Response {
       $logs = $logRepository->findBy(
           ['session' => $session],
           ['changedAt' => 'DESC']
       );
       
       return $this->render('backend/session/audit.html.twig', [
           'session' => $session,
           'logs' => $logs,
       ]);
   }
   ```

2. `templates/backend/session/audit.html.twig`
   ```twig
   <h2>Historial de Cambios - Clase {{ session.discipline.name }}</h2>
   
   <table class="table">
       <thead>
           <tr>
               <th>Fecha/Hora</th>
               <th>Modificado por</th>
               <th>Cambios</th>
               <th>Motivo</th>
               <th>Usuarios Afectados</th>
           </tr>
       </thead>
       <tbody>
           {% for log in logs %}
           <tr>
               <td>{{ log.changedAt|date('d/m/Y H:i') }}</td>
               <td>{{ log.changedBy.fullName }}</td>
               <td>
                   <del>{{ log.oldPlacesNotAvailable }}</del><br>
                   <ins>{{ log.newPlacesNotAvailable }}</ins><br>
                   <small class="text-muted">Deshabilitados: {{ log.disabledPlaces }}</small>
               </td>
               <td>{{ log.reason }}</td>
               <td>
                   {% if log.affectedReservationsCount > 0 %}
                       <span class="badge badge-warning">
                           {{ log.affectedReservationsCount }} reservación(es)
                       </span>
                       <button class="btn btn-sm btn-link" 
                               data-toggle="collapse" 
                               data-target="#users-{{ log.id }}">
                           Ver detalles
                       </button>
                       <div id="users-{{ log.id }}" class="collapse">
                           <small>{{ log.affectedUsers|json_decode }}</small>
                       </div>
                   {% else %}
                       <span class="text-muted">N/A</span>
                   {% endif %}
               </td>
           </tr>
           {% endfor %}
       </tbody>
   </table>
   ```

---

## 14) TESTING Y VALIDACIÓN

### 14.1 Tests Manuales

**Test 1: Deshabilitar asiento SIN reservaciones**
```
1. Ir a /backend/session/123/edit
2. Cambiar placesNotAvailable: "" → "1,2,3"
3. Click "Guardar"

Resultado esperado:
  ✅ Guarda sin mostrar confirmación
  ✅ Flash: "La Clase ha sido actualizada"
  ✅ NO se crea registro de auditoría (no hubo conflicto)
```

**Test 2: Deshabilitar asiento CON reservaciones (sin confirmar)**
```
1. Crear reservación activa: Usuario Juan → Asiento 5
2. Ir a /backend/session/123/edit
3. Cambiar placesNotAvailable: "" → "5"
4. Click "Guardar"

Resultado esperado:
  ✅ Muestra página de confirmación
  ✅ Lista "Juan García - Asiento 5 - Pagado"
  ✅ Campo "Motivo" visible y required
  ✅ Botones: [Cancelar] [Confirmar y Guardar]
```

**Test 3: Confirmar deshabilitación CON motivo**
```
1. Desde test anterior (página de confirmación)
2. Escribir motivo: "Mantenimiento del asiento"
3. Marcar checkbox "Confirmo que deseo continuar"
4. Click "Confirmar y Guardar"

Resultado esperado:
  ✅ Guarda cambios
  ✅ Reservación de Juan: cancellationAt = NOW
  ✅ Reservación de Juan: cancellationReason = "Mantenimiento del asiento"
  ✅ Reservación de Juan: cancellationSource = "admin"
  ✅ Transaction de Juan: +1 clase devuelta
  ✅ Registro en session_place_change_log
  ✅ Flash: "Cambios guardados. 1 reservaciones canceladas y créditos devueltos."
```

**Test 4: Usuario ve cancelación en su panel**
```
1. Login como Juan García
2. Ir a "Mis Reservaciones"

Resultado esperado:
  ✅ Ve clase con estado "Cancelada"
  ✅ Ve motivo: "Mantenimiento del asiento"
  ✅ Ve mensaje: "Se ha devuelto 1 crédito a tu cuenta"
  ✅ Botón "Reservar otra clase" visible
```

**Test 5: Historial de auditoría**
```
1. Ir a /backend/session/123/audit

Resultado esperado:
  ✅ Lista todos los cambios de la sesión
  ✅ Muestra: fecha, admin, cambios, motivo, usuarios
  ✅ Puede expandir detalles de usuarios afectados
```

### 14.2 Tests Automatizados (PHPUnit)

```php
// tests/Service/ReservationCancellationServiceTest.php
class ReservationCancellationServiceTest extends KernelTestCase
{
    public function testCancelByAdminRefundsCredit(): void
    {
        // Arrange
        $reservation = $this->createReservation();
        $initialCredits = $reservation->getTransaction()->getRemainingClasses();
        
        // Act
        $this->cancellationService->cancelByAdmin(
            reservation: $reservation,
            reason: 'Test reason',
            refund: true
        );
        
        // Assert
        $this->assertNotNull($reservation->getCancellationAt());
        $this->assertEquals('Test reason', $reservation->getCancellationReason());
        $this->assertEquals('admin', $reservation->getCancellationSource());
        $this->assertEquals(
            $initialCredits + 1, 
            $reservation->getTransaction()->getRemainingClasses()
        );
    }
}

// tests/Repository/ReservationRepositoryTest.php
class ReservationRepositoryTest extends KernelTestCase
{
    public function testFindActiveBySessionAndPlaces(): void
    {
        // Arrange
        $session = $this->createSession();
        $this->createReservation($session, placeNumber: 3);
        $this->createReservation($session, placeNumber: 5);
        $this->createReservation($session, placeNumber: 7, isActive: false); // cancelled
        
        // Act
        $result = $this->repository->findActiveBySessionAndPlaces($session, [3, 5, 7]);
        
        // Assert
        $this->assertCount(2, $result); // Solo 3 y 5 (7 está cancelada)
    }
}
```

---

## 15) ESTIMACIÓN DE TIEMPO TOTAL

| Fase | Descripción | Tiempo Estimado |
|------|-------------|-----------------|
| 1 | BD y Entidades | 1h |
| 2 | Servicios de Negocio | 1.5h |
| 3 | Formulario y Validación | 1h |
| 4 | Controlador y Lógica | 2h |
| 5 | Vistas y UI | 1.5h |
| 6 | Historial Auditoría (opcional) | 1h |
| **SUBTOTAL DESARROLLO** | | **8h** |
| Testing Manual | | 1h |
| Testing Automatizado | | 1h |
| Ajustes y Refinamiento | | 1h |
| **TOTAL** | | **~11h** |

**Dividido en sesiones de trabajo:**
- Sesión 1 (3h): Fases 1 + 2 (BD + Servicios)
- Sesión 2 (3h): Fase 3 + 4 (Forms + Controller)
- Sesión 3 (3h): Fase 5 + Testing
- Sesión 4 (2h): Refinamiento + Historial Auditoría

---

## 16) CRITERIOS DE ACEPTACIÓN FINALES

### Componente 1: Alerta y Confirmación
- ✅ AC-1: Sistema detecta asientos con reservaciones antes de guardar
- ✅ AC-2: Muestra modal con usuarios afectados
- ✅ AC-3: Requiere confirmación explícita (checkbox + botón)
- ✅ AC-4: Permite cancelar operación

### Componente 2: Devolución de Cuota
- ✅ AC-5: Reservación se marca como cancelada automáticamente
- ✅ AC-6: Crédito/clase se devuelve a la cuenta del usuario
- ✅ AC-7: Usuario ve motivo de cancelación en su panel
- ✅ AC-8: Usuario puede reservar otra clase con crédito devuelto

### Componente 3: Auditoría
- ✅ AC-11: Campo "Motivo" es obligatorio al deshabilitar asientos con reservaciones
- ✅ AC-12: Se registra quién hizo el cambio (Staff)
- ✅ AC-13: Se registra fecha/hora exacta
- ✅ AC-14: Se guardan asientos antes y después del cambio
- ✅ AC-15: Se registran usuarios afectados con sus datos
- ✅ AC-16: Admin puede ver historial de cambios de una sesión
- ✅ AC-17: Admin puede generar reporte de auditoría

### Componente Futuro: Emails (Fase 2)
- 📧 AC-9: Email enviado automáticamente (CUANDO Sistema ESTÉ LISTO)
- 📧 AC-10: Email incluye opciones de cambio de clase (CUANDO Sistema ESTÉ LISTO)

---

## 🎯 DECISIÓN FINAL DE IMPLEMENTACIÓN (05/03/2026)

### Alcance Definido - QUÉ SE VA A HACER AHORA

**✅ 1. ALERTA Y CONFIRMACIÓN EN BACKEND**
- Detectar cuando se deshabilita asiento con reservación activa
- Mostrar modal/página de confirmación
- Listar usuarios afectados
- Pedir confirmación explícita + motivo obligatorio

**✅ 2. MANEJO DE ESTADO DE RESERVACIONES**
- Cancelar automáticamente reservaciones (`cancellation_at = NOW`)
- Marcar `is_available = false`
- Devolver cupón/crédito consumido a Transaction del usuario
- Incrementar `available_sessions` en paquete del usuario

**✅ 3. REGISTRO DE AUDITORÍA**
- Tabla `session_audit` con:
  - Quién hizo el cambio (admin user)
  - Cuándo (fecha/hora exacta)
  - Por qué (campo "motivo" del form)
  - Qué usuarios fueron afectados
  - Qué asientos se deshabilitaron

**❌ NO SE HACE AHORA (FASE FUTURA):**
- Panel frontend para usuario elegir nueva clase
- Notificaciones por email (código comentado para futuro)
- Sistema automático de compensación

---

## 📝 ESPECIFICACIÓN TÉCNICA SIMPLIFICADA

### Archivos a Crear/Modificar

| Archivo | Acción | Estimado |
|---------|--------|----------|
| `src/Controller/Backend/SessionController.php` | Modificar método `edit()` | 60 min |
| `src/Repository/ReservationRepository.php` | Agregar `findActiveBySessionAndPlaces()` | 15 min |
| `src/Service/ReservationCancellationService.php` | NUEVO - Cancelar + devolver crédito | 45 min |
| `src/Entity/SessionAudit.php` | NUEVA - Entity auditoría | 30 min |
| `templates/backend/session/edit_confirm.html.twig` | NUEVA - Página confirmación | 45 min |
| `migrations/VersionXXXX.php` | NUEVA - Tabla session_audit | 15 min |
| **TOTAL ESTIMADO** | | **3.5 horas** |

### Base de Datos - session_audit

```sql
CREATE TABLE session_audit (
    id INT PRIMARY KEY AUTO_INCREMENT,
    session_id INT NOT NULL,
    admin_user_id INT NOT NULL,
    audit_type VARCHAR(50) NOT NULL,
    reason TEXT NOT NULL,
    disabled_places JSON,
    affected_reservations_count INT DEFAULT 0,
    affected_users JSON,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    
    FOREIGN KEY (session_id) REFERENCES session(id),
    FOREIGN KEY (admin_user_id) REFERENCES user(id),
    INDEX idx_session (session_id),
    INDEX idx_created (created_at)
);
```

### Flujo de Ejecución

```
1. Admin edita Session → cambia placesNotAvailable de [1,2] a [1,2,3,7]
                    ↓
2. Sistema detecta: Asientos 3 y 7 son NUEVOS en places_not_available
                    ↓
3. Query: ¿Hay reservaciones activas en asientos 3 y 7?
   Resultado: SÍ - 2 reservaciones (Juan en asiento 3, María en asiento 7)
                    ↓
4. Mostrar página de confirmación:
   - Lista de usuarios afectados
   - Campo "Motivo" obligatorio
   - Botones: [Cancelar] [Confirmar y Procesar]
                    ↓
5. Admin ingresa motivo: "Asientos con daño estructural"
   Admin click: "Confirmar y Procesar"
                    ↓
6. Sistema ejecuta:
   - reservation (Juan, asiento 3):
     * cancellation_at = 2026-03-05 14:30:00
     * is_available = false
   - reservation (María, asiento 7):
     * cancellation_at = 2026-03-05 14:30:00
     * is_available = false
   - transaction (Juan): available_sessions++ (de 5 a 6)
   - transaction (María): available_sessions++ (de 2 a 3)
   - session_audit: Registro completo del cambio
                    ↓
7. Flash message: "✅ 2 asientos deshabilitados. 2 reservaciones canceladas. Créditos devueltos."
                    ↓
8. (FUTURO: Enviar emails a Juan y María notificando cancelación)
```

### Código Clave - ReservationCancellationService.php

```php
namespace App\Service;

use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;

class ReservationCancellationService
{
    public function __construct(
        private EntityManagerInterface $em,
    ) {
    }

    /**
     * Cancela reservación y devuelve crédito
     */
    public function cancelAndRefund(Reservation $reservation, string $reason): bool
    {
        // 1. Cancelar reservación
        $reservation->setCancellationAt(new \DateTime());
        $reservation->setIsAvailable(false);
        
        // 2. Devolver crédito
        $transaction = $reservation->getTransaction();
        if ($transaction) {
            $current = $transaction->getAvailableSessions();
            $transaction->setAvailableSessions($current + 1);
        }
        
        $this->em->flush();
        return true;
    }
    
    /**
     * Batch cancelación
     */
    public function cancelMultiple(array $reservations, string $reason): array
    {
        $success = 0;
        $failed = 0;
        
        foreach ($reservations as $reservation) {
            if ($this->cancelAndRefund($reservation, $reason)) {
                $success++;
            } else {
                $failed++;
            }
        }
        
        return ['success' => $success, 'failed' => $failed];
    }
}
```

### Validaciones Importantes

**❗ Antes de cancelar, validar:**
- Reservación debe estar activa (`is_available = true`)
- Reservación NO debe estar ya cancelada (`cancellation_at IS NULL`)
- Transacción debe existir (para devolver crédito)

**❗ Al devolver crédito:**
- NO modificar `sessions_total` (total comprado)
- SOLO incrementar `sessions_available` (disponibles para usar)
- Verificar que no supere el total: `available <= total`

---

## 🧪 PLAN DE TESTING

### Test 1: Deshabilitar asiento SIN reservación
```
GIVEN: Session con places_not_available = [1, 2]
       NO hay reservaciones en asiento 3
WHEN:  Admin agrega asiento 3 a places_not_available
THEN:  Sistema guarda SIN mostrar confirmación
```

### Test 2: Deshabilitar asiento CON reservación
```
GIVEN: Session con places_not_available = [1, 2]
       Usuario Juan tiene reservación en asiento 3
WHEN:  Admin agrega asiento 3 a places_not_available
THEN:  Sistema muestra página de confirmación
       Lista incluye: "Juan García - Asiento 3"
       Campo "Motivo" está presente y requerido
```

### Test 3: Confirmar cancelación
```
GIVEN: Página de confirmación visible
       Usuario Juan con 5 clases disponibles en su paquete
WHEN:  Admin ingresa motivo "Mantenimiento"
       Admin click "Confirmar y Procesar"
THEN:  - Reservación de Juan: cancellation_at = NOW, is_available = false
       - Transaction de Juan: available_sessions = 6
       - session_audit creada con motivo "Mantenimiento"
       - Flash message: "1 reservación cancelada. Crédito devuelto."
```

### Test 4: Cancelar operación
```
GIVEN: Página de confirmación visible
WHEN:  Admin click "Cancelar"
THEN:  Redirige a edit form
       NO se guardan cambios
       places_not_available permanece sin cambios
```

### Test 5: Auditoría completa
```
GIVEN: Admin "María López" deshabilita asientos [3, 7]
       Afecta a 2 usuarios: Juan (asiento 3), Pedro (asiento 7)
WHEN:  Se confirma la operación
THEN:  session_audit contiene:
       - admin_user_id = ID de María López
       - audit_type = "place_disabled"
       - reason = texto ingresado
       - disabled_places = [3, 7]
       - affected_reservations_count = 2
       - affected_users = [{user_id: Juan, place: 3}, {user_id: Pedro, place: 7}]
       - created_at = timestamp actual
```

---

## 📋 CRITERIOS DE ACEPTACIÓN FINALES

### Backend - Detección
- [ ] AC-1: Detecta cuando asiento deshabilitado tiene reservación activa
- [ ] AC-2: Compara places_not_available anterior vs. nueva
- [ ] AC-3: Query eficiente para encontrar reservaciones afectadas

### Backend - Confirmación
- [ ] AC-4: Muestra página/modal con lista de usuarios afectados
- [ ] AC-5: Campo "Motivo" es obligatorio (no puede estar vacío)
- [ ] AC-6: Botón "Confirmar" solo activo si motivo != ""
- [ ] AC-7: Botón "Cancelar" devuelve sin cambios

### Backend - Procesamiento
- [ ] AC-8: Al confirmar, marca `cancellation_at` y `is_available = false`
- [ ] AC-9: Devuelve crédito incrementando `available_sessions`
- [ ] AC-10: NO modifica `sessions_total` del paquete
- [ ] AC-11: Flash message indica cuántas reservaciones fueron canceladas

### Backend - Auditoría
- [ ] AC-12: Crea registro en `session_audit`
- [ ] AC-13: Incluye todos los datos: quién, cuándo, por qué, afectados
- [ ] AC-14: Puede consultar historial de cambios de una sesión

### Backward Compatibility
- [ ] AC-15: Si NO hay reservaciones, guarda normalmente (sin confirmación)
- [ ] AC-16: Usuarios existentes pueden seguir usando su crédito devuelto

---

## 💬 COMENTARIOS EN CÓDIGO PARA FUTURO

**En lugares donde se implementará email/panel:**

```php
// TODO: Issue #XX - Cuando sistema de emails esté listo
// $this->userMailer->sendReservationCancelled($user, $reservation, $reason);

// TODO: Issue #XX - Panel de usuario para cambio de clase
// Aquí el usuario podrá ver opciones de cambio automático
```

---

*Documento análisis Issue #52 - VERSIÓN FINAL SIMPLIFICADA*  
*Creado: 2026-03-05*  
*Actualizado: 2026-03-05 (Decisión final con usuario)*  
*Estado: ✅ ESPECIFICACIÓN COMPLETA - LISTO PARA IMPLEMENTACIÓN*  
*Alcance: Backend (alerta + confirmación + cancelación + devolución + auditoría)*  
*NO incluye: Panel usuario, emails (fase futura)*
