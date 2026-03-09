# 🟢 ISSUE #52B: REGISTRO DE CANCELACIONES Y CAMBIOS DE RESERVA POR USUARIO

**Fecha:** 06/03/2026  
**Estado:** En planificación  
**Severidad:** Alta (trazabilidad y experiencia usuario)  
**Alcance:** Backend only (registro, motivo, auditoría, panel visualización)

---

## 📑 ÍNDICE

1. Resumen Ejecutivo
2. Problema Identificado
3. Análisis Técnico
4. Casos de Uso y Escenarios
5. Impacto en el Usuario
6. Estructura Propuesta
7. Plan de Testing
8. Panel de Auditoría Backend
9. Checklist de Implementación
10. Notas Técnicas
11. Resumen Final

---


## 1) RESUMEN EJECUTIVO

### Objetivo
Registrar automáticamente en session_audit:
- Cancelaciones hechas por usuarios (tipo 'user_cancelled')
- Cambios de reserva hechos por usuarios (tipo 'reservation_changed')

### Valor
- Trazabilidad completa de acciones de usuario
- Motivo opcional
- Visualización en panel de auditoría
- Mejora experiencia y soporte

---

## 2) PROBLEMA IDENTIFICADO

### Escenario
```
Usuario Juan cancela su reservación desde el perfil.
No queda registro en session_audit.
Soporte no puede rastrear motivo ni acción.
Admin no tiene contexto para explicar al cliente.
```

---

## 3) ANÁLISIS TÉCNICO

### Entidades

#### Reservation.php
```php
#[ORM\Column(type: Types::SMALLINT)]
private ?int $placeNumber = null;

#[ORM\Column]
private ?bool $isAvailable = true;

#[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
private ?\DateTimeInterface $cancellationAt = null;
```

#### SessionAudit.php
```php
- id: INT PRIMARY KEY
- session_id: FK → Session
- user_identifier: VARCHAR(255) (username del usuario)
- audit_type: VARCHAR(50) ['user_cancelled', 'reservation_changed']
- reason: LONGTEXT (motivo usuario, opcional)
- affected_users: JSON [{id, name, email, place}, ...]
- affected_reservations_count: INT
- created_at: DATETIME
```

### Servicios

#### ReservationCancellationService.php
```php
public function cancelByUser(Reservation $reservation, ?string $reason = null): bool
{
	// Validaciones
	if (!$reservation->isIsAvailable()) {
		$this->logger->warning("Intento cancelar ya cancelada");
		return false;
	}
	// Operaciones
	$reservation->setIsAvailable(false);
	$reservation->setCancellationAt(new \DateTime());
	// Auditoría
	$audit = new SessionAudit();
	$audit->setSession($reservation->getSession());
	$audit->setUserIdentifier($reservation->getUser()->getUserIdentifier());
	$audit->setAuditType('user_cancelled');
	$audit->setReason($reason);
	$audit->setAffectedUsers([
		[
			'id' => $reservation->getUser()->getId(),
			'name' => $reservation->getUser()->getName(),
			'email' => $reservation->getUser()->getEmail(),
			'place' => $reservation->getPlaceNumber(),
		],
	]);
	$audit->setAffectedReservationsCount(1);
	$audit->setCreatedAt(new \DateTime());
	$em->persist($audit);
	$em->flush();
	return true;
}
```

#### ReservationChangeService.php (nuevo)
```php
public function changeByUser(Reservation $reservation, array $changes, ?string $reason = null): bool
{
	// Aplicar cambios
	// ...
	// Auditoría
	$audit = new SessionAudit();
	$audit->setSession($reservation->getSession());
	$audit->setUserIdentifier($reservation->getUser()->getUserIdentifier());
	$audit->setAuditType('reservation_changed');
	$audit->setReason($reason);
	$audit->setAffectedUsers([
		[
			'id' => $reservation->getUser()->getId(),
			'name' => $reservation->getUser()->getName(),
			'email' => $reservation->getUser()->getEmail(),
			'place' => $reservation->getPlaceNumber(),
		],
	]);
	$audit->setAffectedReservationsCount(1);
	$audit->setCreatedAt(new \DateTime());
	$em->persist($audit);
	$em->flush();
	return true;
}
```

### Panel de Auditoría

**Ubicación:** templates/backend/session/audit.html.twig
**Rutas:** /backend/session/{id}/audit
**Visualización:**
```twig
{% for audit in audits %}
	<tr>
		<td>{{ audit.id }}</td>
		<td>{{ audit.userIdentifier }}</td>
		<td>{{ audit.createdAt|date('d/m/Y H:i:s') }}</td>
		<td>{{ audit.auditType }}</td>
		<td>{{ audit.reason }}</td>
		<td>{{ audit.affectedReservationsCount }}</td>
		<td>
			<button onclick="toggleDetails({{ audit.id }})">Ver Detalles</button>
		</td>
	</tr>
	<tr id="details-{{ audit.id }}" style="display:none;">
		<td colspan="7">
			<ul>
				{% for user in audit.affectedUsers %}
					<li>{{ user.name }} ({{ user.email }}) - Asiento: {{ user.place }}</li>
				{% endfor %}
			</ul>
		</td>
	</tr>
{% endfor %}
```

---

## 4) CASOS DE USO Y ESCENARIOS

### Caso 1: Usuario cancela su reserva
```
DADO: Juan tiene reservación en asiento 5
CUANDO: Juan cancela desde el perfil
ENTONCES:
  - reservation.isAvailable = false
  - reservation.cancellationAt = NOW
  - session_audit registra evento 'user_cancelled'
  - Motivo opcional
  - Panel de auditoría muestra registro
```

### Caso 2: Usuario cambia su reserva
```
DADO: Juan tiene reservación en asiento 5
CUANDO: Juan cambia a asiento 7
ENTONCES:
  - reservation.placeNumber = 7
  - session_audit registra evento 'reservation_changed'
  - Motivo opcional
  - Panel de auditoría muestra registro
```

---

## 5) IMPACTO EN EL USUARIO

### Para el Usuario
- Mejor experiencia
- Motivo visible en historial
- Soporte puede explicar acciones

### Para el Admin/Staff
- Trazabilidad de acciones de usuario
- Contexto para soporte y reportes

---

## 6) ESTRUCTURA IMPLEMENTADA

### 6.1) Entity: SessionAudit.php
**Ubicación:** src/Entity/SessionAudit.php
**Campos:**
```php
- id: INT PRIMARY KEY
- session_id: FK → Session
- user_identifier: VARCHAR(255)
- audit_type: VARCHAR(50) ['user_cancelled', 'reservation_changed']
- reason: LONGTEXT
- affected_users: JSON
- affected_reservations_count: INT
- created_at: DATETIME
```

**Ejemplo de uso:**
```php
$audit = new SessionAudit();
$audit->setSession($session);
$audit->setUserIdentifier($user->getUserIdentifier());
$audit->setAuditType('user_cancelled');
$audit->setReason($reason);
$audit->setAffectedUsers([
	['id' => $user->getId(), 'name' => $user->getName(), 'email' => $user->getEmail(), 'place' => $reservation->getPlaceNumber()],
]);
$audit->setAffectedReservationsCount(1);
$audit->setCreatedAt(new \DateTime());
$em->persist($audit);
```

### 6.2) Service: ReservationCancellationService.php
**Ubicación:** src/Service/ReservationCancellationService.php
**Método:**
```php
public function cancelByUser(Reservation $reservation, ?string $reason = null): bool
// ...ver ejemplo arriba...
```

### 6.3) Controller: UserReservationController.php
**Ubicación:** src/Controller/UserReservationController.php
**Método:**
```php
public function cancel(Request $request, Reservation $reservation): Response
{
	$reason = $request->get('reason');
	$service->cancelByUser($reservation, $reason);
	// ...redirect, flash, etc...
}
```

### 6.4) Migration

**Nota:** Esta funcionalidad utiliza la tabla `session_audit` creada en la migración consolidada.

**Migración consolidada:** `migrations/Version20260309000000.php`

**Campos relevantes para user actions:**
```sql
-- Campos de la tabla session_audit relevantes:
user_identifier VARCHAR(255) DEFAULT NULL  -- Para identificar usuario
audit_type VARCHAR(50) NOT NULL            -- 'user_cancelled' o 'user_changed'
reason LONGTEXT DEFAULT NULL               -- NULL para acciones de usuario
affected_users JSON NOT NULL               -- Datos del usuario afectado
affected_reservations_count INT DEFAULT 0  -- Siempre 1 para user actions
created_at DATETIME NOT NULL               -- Timestamp de la acción
```

**Tipos de auditoría para usuarios:**
- `user_cancelled`: Usuario cancela su reservación
- `user_changed`: Usuario cambia a otra sesión

**Nota sobre consolidación:**
- La migración original (Version20260306120000.php) fue consolidada junto con otras dos
- La migración actual incluye campos para TODOS los tipos de auditoría (admin y usuario)
- Ver `migrations/Version20260309000000.php` para estructura completa

---

## 7) PLAN DE TESTING

### Test 1: Cancelación por usuario ✓
```
SETUP: Juan tiene reservación en asiento 5
ACCIÓN: Cancela desde perfil
EXPECTATIVA:
  ✓ reservation.isAvailable = false
  ✓ reservation.cancellationAt = NOW
  ✓ session_audit registra 'user_cancelled'
  ✓ Motivo guardado
  ✓ Panel de auditoría muestra registro
```

### Test 2: Cambio de reserva por usuario ✓
```
SETUP: Juan tiene reservación en asiento 5
ACCIÓN: Cambia a asiento 7
EXPECTATIVA:
  ✓ reservation.placeNumber = 7
  ✓ session_audit registra 'reservation_changed'
  ✓ Motivo guardado
  ✓ Panel de auditoría muestra registro
```

### Test 3: Edge cases ✓
```
CASO 3.1: Usuario cancela ya cancelada
  - No se duplica registro
CASO 3.2: Usuario cambia a asiento ocupado
  - Validación y error
CASO 3.3: Motivo vacío
  - Se permite, campo opcional
```

---

## 8) PANEL DE AUDITORÍA BACKEND

### Ubicación
- Ruta: /backend/session/{id}/audit
- Vista: templates/backend/session/audit.html.twig

### Visualización
- Muestra eventos 'user_cancelled' y 'reservation_changed'
- Motivo y usuario visibles
- Detalles expandibles

### Ejemplo Visual
```
┌────┬──────────────┬───────────────┬───────────────┬──────────────┬────────────┐
│ ID │ Usuario      │ Fecha/Hora    │ Tipo          │ Motivo       │ Afectados  │
├────┼──────────────┼───────────────┼───────────────┼──────────────┼────────────┤
│ 1  │ juan.garcia  │ 06/03/2026    │ user_cancelled│ "No puedo asistir" │ 1        │
│ 2  │ juan.garcia  │ 06/03/2026    │ reservation_changed│ "Cambio de asiento" │ 1   │
└────┴──────────────┴───────────────┴───────────────┴──────────────┴────────────┘
```

---

## 9) CHECKLIST DE IMPLEMENTACIÓN

- [x] Actualizar entidad SessionAudit
- [x] Crear servicio ReservationCancellationService
- [x] Crear servicio ReservationChangeService
- [x] Actualizar controller UserReservationController
- [x] Añadir motivo opcional
- [x] Actualizar panel de auditoría
- [x] Crear migración
- [x] Testing manual

---

## 10) NOTAS TÉCNICAS

- Motivo será opcional para usuario
- Trazabilidad completa
- Compatible con auditoría actual
- Extensible para otros tipos de eventos
- Logging en puntos clave (INFO, WARNING)
- Código organizado por servicios y controllers

---

## 11) RESUMEN FINAL

- Se implementa registro de cancelaciones y cambios de reserva por usuario
- Motivo opcional
- Visualización en panel de auditoría
- Checklist y testing definidos
- Ejemplos de código y migración incluidos

**Última actualización:** 06/03/2026
