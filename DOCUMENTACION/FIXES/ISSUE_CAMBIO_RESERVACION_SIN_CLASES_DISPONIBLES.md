# ISSUE: Cambio de Reservacion - sesiones futuras con control de reflujo

**Estado:** Pendiente de implementacion tecnica  
**Prioridad:** Alta  
**Fecha detectado:** 09 de Marzo de 2026  
**Ultima actualizacion:** 11 de Marzo de 2026  
**Jira:** SCRUM-23  
**Sprint:** Sprint 1 (9-16 Marzo 2026)

---

## 1. Objetivo

Permitir que el usuario cambie su reservacion a sesiones futuras y que la lista muestre solamente sesiones que tambien serian elegibles en la pantalla normal de reservar clase.

Adicionalmente, aplicar un parche de seguridad de flujo para impedir dobles operaciones sobre la misma reservacion despues de un cambio:

1. No permitir un segundo cambio de sesion sobre la misma reservacion.
2. No permitir cancelacion de esa reservacion dentro del mismo flujo ya cambiado.

Todo esto sin agregar migraciones nuevas.

---

## 2. Problema actual

1. El cambio de reservacion filtra sesiones de forma mas restrictiva que la reserva normal.
2. En varios casos el usuario ve "Lo sentimos, no hay clases disponibles" aun cuando si hay sesiones elegibles.
3. No existe bloqueo funcional para evitar reintentos de cambio/cancelacion tras un cambio ya ejecutado.

---

## 3. Requerimiento funcional confirmado (sin bloqueo DG)

### 3.1 Sesiones mostradas para cambio

El listado de cambio debe usar los mismos criterios que la pantalla normal de reservar clase:

1. Mismas reglas de elegibilidad y disponibilidad.
2. Sesiones futuras validas (no solo del mismo dia).
3. Mantener exclusion de la sesion original de la reservacion que se esta cambiando.

### 3.2 Control de reflujo usando auditoria

Si una reservacion ya tiene un cambio registrado, bloquear:

1. Otro cambio de sesion.
2. Cancelacion posterior de esa misma reservacion en ese flujo.

La validacion se basa en `session_audit` y no requiere cambios de esquema.

---

## 4. Estrategia tecnica propuesta (sin nueva migracion)

### 4.1 Fuente de verdad

Usar `session_audit` con:

1. `reservation_id`
2. `audit_type` en `user_changed_from`, `user_changed_to`, `user_changed` (historico)

### 4.2 Verificacion en repositorio de auditoria

Agregar metodo en `src/Repository/SessionAuditRepository.php`:

```php
public function hasReservationBeenChanged(int $reservationId): bool
```

Comportamiento esperado:

1. Buscar por `reservationId`.
2. Filtrar `auditType IN ('user_changed_from', 'user_changed_to', 'user_changed')`.
3. Retornar `true` si existe al menos un registro.

### 4.3 Aplicacion de la regla

Aplicar el check antes de ejecutar acciones en `src/Controller/ProfileController.php`:

1. `reservationChangeSession()`
2. `reservationCancel()`

Si la reservacion ya fue cambiada:

1. Bloquear la accion.
2. Mostrar mensaje claro al usuario.
3. Registrar log de control para soporte.

### 4.4 Ajuste del listado de sesiones para cambio

Actualizar `src/Repository/SessionRepository.php` (metodo `getForChange(...)`) para que no quede limitado al mismo dia y mantenga la misma elegibilidad de la reserva normal.

Recomendacion:

1. Reutilizar o alinear el mismo filtro/base query de la pantalla de reserva normal.
2. Aplicar ventana de fechas futuras segun configuracion de negocio (ej. 30 dias).
3. Mantener ordenamiento por fecha/hora/sucursal y estatus abierto.

---

## 5. Criterios de aceptacion

1. Al intentar cambiar una reservacion, se listan sesiones futuras validas.
2. La lista coincide con las sesiones elegibles de la pantalla normal de reserva.
3. Si la reservacion ya fue cambiada, se bloquea un nuevo cambio.
4. Si la reservacion ya fue cambiada, se bloquea la cancelacion en ese flujo.
5. No se crea ninguna migracion nueva de DB.
6. Se mantiene compatibilidad con auditorias historicas `user_changed`.

---

## 6. Plan de pruebas

1. Reservacion vigente -> cambio exitoso a sesion futura.
2. Misma reservacion -> intentar segundo cambio (debe bloquear).
3. Misma reservacion ya cambiada -> intentar cancelacion (debe bloquear).
4. Verificar que la lista de cambio coincide con reserva normal para el mismo usuario/escenario.
5. Verificar que el flujo historico con `user_changed` tambien queda protegido.

---

## 7. Archivos probables

1. `src/Repository/SessionRepository.php`
2. `src/Repository/SessionAuditRepository.php`
3. `src/Controller/ProfileController.php`
4. `src/Service/ReservationCancellationService.php` (si centralizamos validacion)
5. `templates/profile/reservation_change.html.twig` (mensajes de bloqueo)

---

## 8. Riesgos y mitigaciones

1. Riesgo: permitir sesiones no elegibles por divergencia de filtros.
   Mitigacion: compartir misma logica de elegibilidad con la reserva normal.

2. Riesgo: falso positivo de bloqueo por auditoria historica.
   Mitigacion: limitar filtro por `reservation_id` y tipos definidos.

3. Riesgo: mensajes ambiguos al usuario.
   Mitigacion: textos explicitos para "ya fue cambiada" y "no se permite cancelar despues del cambio".

---

## 9. Referencias

1. Jira: https://devpbstudio.atlassian.net/browse/SCRUM-23
2. Documento de auditoria relacionado: `FIXES/ISSUE_MODULO_AUDITORIA_RESERVACIONES_CONSOLIDADO.md`
