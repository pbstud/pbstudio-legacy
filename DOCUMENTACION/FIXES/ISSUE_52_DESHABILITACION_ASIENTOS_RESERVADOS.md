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

*Documento análisis Issue #52*  
*Creado: 2026-03-05*  
*Estado: 🔍 ANÁLISIS TÉCNICO COMPLETO - PENDIENTE DECISIÓN DE IMPLEMENTACIÓN*
