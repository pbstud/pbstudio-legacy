# MODULO DE AUDITORIA DE RESERVACIONES (CONSOLIDADO)

**Fecha de consolidacion:** 11/03/2026  
**Ultima actualizacion tecnica:** 11/03/2026  
**Estado general:** Implementado — auditoria bidireccional completa (SCRUM-81 cerrado)  
**Prioridad actual:** Cerrado  
**Jira relacionados:** SCRUM-12, SCRUM-15, SCRUM-16, SCRUM-17, SCRUM-18, SCRUM-19, SCRUM-81

---

## 1. Objetivo y alcance del documento

Este documento consolida en un solo lugar:

1. Que problemas resolvio el modulo y por que existian.
2. Que cambios reales se implementaron en codigo y datos.
3. Que limitacion sigue vigente hoy y por que ocurre.
4. Como se debe cerrar la brecha con el siguiente scrum (SCRUM-81).

Documentos consolidados en este archivo:
- `ISSUE_52_DESHABILITACION_ASIENTOS_RESERVADOS.md`
- `ISSUE_52_REGISTRO_CANCELACIONES_CAMBIOS_USUARIO.md`
- `ISSUE_AUDITORIA_CAMBIO_RESERVA_BIDIRECCIONAL.md`

---

## 2. Problemas historicos y por que ocurrian

### 2.1 Problema original (resuelto): deshabilitar asientos reservados sin control

**Situacion previa:**
- Un admin podia deshabilitar asientos ya reservados sin confirmacion.
- El sistema no dejaba trazabilidad suficiente para soporte.

**Causa raiz tecnica previa:**
- Flujo de edicion de sesion sin verificacion de impacto sobre reservaciones activas.
- No existia una auditoria estructurada por evento en `session_audit` para este caso.

**Resultado de negocio previo:**
- Reclamaciones por cancelaciones no transparentes.
- Dificultad para explicar que paso, cuando paso y quien lo ejecuto.

### 2.2 Problema vigente (pendiente): trazabilidad incompleta en cambios de sesion por usuario

**Sintoma operativo actual:**
- Cuando un usuario cambia su reservacion de sesion A a sesion B, la auditoria visible en backend queda solo en la sesion A.
- En la sesion B no aparece evento espejo del mismo flujo.

**Impacto real actual:**
- Soporte no puede reconstruir el flujo completo solo desde panel.
- Se pierde trazabilidad bilateral (salida/origen y entrada/destino).
- No existe correlacion unica para unir ambos lados del cambio.

---

## 3. Linea de tiempo de cambios del modulo

### 3.1 Fase base admin (completada)

Tickets asociados: SCRUM-12

Implementado:
- Confirmacion previa al guardar si hay reservaciones afectadas.
- Cancelacion controlada de reservaciones impactadas.
- Devolucion de credito por regla de transaccion.
- Registro de auditoria tipo `place_disabled`.
- Vista backend de auditoria por sesion.

### 3.2 Fase acciones de usuario (completada)

Tickets asociados: SCRUM-15, SCRUM-16, SCRUM-17, SCRUM-18, SCRUM-19

Implementado:
- Auditoria `user_cancelled` para cancelacion iniciada por usuario.
- Auditoria `user_changed` para cambio de reservacion iniciado por usuario.
- Integracion en flujo de perfil y visualizacion en backend.

### 3.3 Fase evolutiva (completada — SCRUM-81)

Ticket: SCRUM-81  
Rama: `fix/scrum-81-auditoria-bidireccional`  
Commit: `d1329fd6`

Implementado:
- Correlacion bilateral de cambios entre sesiones con `change_flow_id`.
- Eventos `user_changed_from` (origen) y `user_changed_to` (destino) en flush atomico.
- Nuevos campos en `session_audit`: `change_flow_id`, `reservation_id`, `from_session_id`, `to_session_id`, `from_place`, `to_place`.
- Vista backend con detalle de flujo, enlaces a sesiones y perfil de usuario.
- Compatibilidad retroactiva para registros `user_changed` historicos.
- Migracion consolidada en `Version20260309000000.php` (una sola migracion para toda la tabla).

---

## 4. Cambios implementados en codigo (detalle tecnico)

### 4.1 Modelo de datos de auditoria

Entidad: `src/Entity/SessionAudit.php`

Campos:
- `session` (FK obligatoria)
- `adminUserIdentifier`
- `userIdentifier`
- `auditType`
- `reason`
- `disabledPlaces` (JSON)
- `affectedUsers` (JSON)
- `affectedReservationsCount`
- `changeFlowId` — UUID de correlacion por par de cambio
- `reservationId` — ID de la reservacion afectada
- `fromSessionId` — sesion origen del cambio
- `toSessionId` — sesion destino del cambio
- `fromPlace` — asiento origen
- `toPlace` — asiento destino
- `createdAt`

Tipos soportados:
- `place_disabled`
- `user_cancelled`
- `user_changed` (historico — compatibilidad retroactiva)
- `user_changed_from` (nuevo — evento en sesion origen)
- `user_changed_to` (nuevo — evento en sesion destino)

Migracion unica consolidada:
- `migrations/Version20260309000000.php`
- Crea tabla `session_audit` completa con todos los campos e indices: `idx_session`, `idx_audit_type`, `idx_created`, `idx_change_flow`.

### 4.2 Flujo admin de deshabilitacion

Controlador:
- `src/Controller/Backend/SessionController.php`
- Ruta de auditoria: `/{id}/audit` (`backend_session_audit`)

Servicio:
- `src/Service/ReservationCancellationService.php`
- Metodo `cancelMultipleAndAudit(...)`

Comportamiento implementado:
1. Cancela reservaciones afectadas.
2. Devuelve credito cuando aplica.
3. Persiste auditoria `place_disabled` con motivo y usuarios afectados.

### 4.3 Flujo usuario de cancelacion

Controlador:
- `src/Controller/ProfileController.php`
- Metodo `reservationCancel()`

Servicio:
- `ReservationCancellationService::auditUserCancellation(...)`

Comportamiento implementado:
1. Se cancela la reservacion.
2. Se crea auditoria `user_cancelled` para la sesion de la reservacion.

### 4.4 Flujo usuario de cambio de sesion (implementado SCRUM-81)

Controlador:
- `src/Controller/ProfileController.php`
- Metodo `reservationChangeSession()`

Secuencia implementada:
1. Captura `previousSession` y `previousPlace` antes del cambio.
2. Ejecuta `ReservationService::change(...)` (muta la reservacion a nueva sesion y nuevo asiento).
3. Ejecuta `ReservationCancellationService::auditUserChange($reservation, $previousSession, $previousPlace, $reason)`.

Servicio:
- `ReservationCancellationService::auditUserChange(...)`

Comportamiento implementado:
- Genera un `changeFlowId` (UUID-like) de correlacion unico.
- Persiste dos eventos en un solo flush atomico:
  - `user_changed_from` asociado a `previousSession` (origen).
  - `user_changed_to` asociado a la nueva sesion (destino).
- Ambos eventos comparten `changeFlowId`, `reservationId`, `fromSessionId`, `toSessionId`, `fromPlace`, `toPlace`.

### 4.5 Vista backend de auditoria

Template:
- `templates/backend/session/audit.html.twig`

Estado actual de UI:
- `place_disabled`: tabla clasica backend con detalle expandible (motivo, asientos, usuarios afectados con enlace a perfil).
- `user_changed_from` y `user_changed_to`: detalle expandible de flujo con enlaces clicables a sesion origen, sesion destino y perfil de usuario.
- `user_changed` (historico): soportado con fallback visual.
- Scrollbar vertical al superar 600px de altura de tabla.
- Estilo alineado con panel Editar/Reservaciones del backend (tabla striped, well, sin labels con fondo).

---

## 5. Causa raiz del error actual de trazabilidad

La brecha actual no es de "falla de guardado" sino de **diseño de trazabilidad incompleto**.

### 5.1 Registro unilateral en cambio de sesion

En `auditUserChange(...)` se guarda solo un registro asociado a la sesion origen (`previousSession`).

Consecuencia:
- El panel de la sesion destino no tiene evidencia del mismo cambio.

### 5.2 Consulta del panel por una sola sesion

`backend_session_audit` consulta por `session_id`.

Consecuencia:
- Aunque el cambio exista en origen, no hay forma nativa de verlo en destino si no hay un evento espejo.

### 5.3 Falta de identificador de correlacion

No existe `change_flow_id` en `session_audit`.

Consecuencia:
- No se puede unir de forma robusta origen y destino del mismo cambio.

### 5.4 Detalle visual limitado para eventos de usuario

En `audit.html.twig` el detalle expandible esta orientado a `place_disabled`.

Consecuencia:
- La auditoria de usuario existe, pero no muestra contexto completo de flujo entre sesiones.

### 5.5 Hallazgo adicional de calidad tecnica

En `ProfileController::reservationChangeSession()`, se registra `has_reason` en logs antes de asignar `$reason`.
No rompe el flujo principal, pero puede introducir ruido de logging.

---

## 6. Evidencia de reproduccion del problema vigente

### 6.1 Escenario reproducible

1. Usuario tiene reservacion activa en sesion A (asiento X).
2. Usuario cambia a sesion B (asiento Y) desde perfil.
3. Cambio se aplica correctamente en la reservacion.
4. Se crea auditoria `user_changed` en sesion A.
5. Al abrir auditoria de sesion B, no aparece el evento espejo del cambio.

### 6.2 Resultado observado vs esperado

Observado hoy:
- Trazabilidad parcial (solo origen).

Esperado de negocio:
- Trazabilidad completa en ambas sesiones + correlacion unica del mismo cambio.

---

## 7. SCRUM-81 — Implementacion completada

### 7.1 Objetivo logrado

Trazabilidad bidireccional de cambios de reservacion entre sesiones implementada y disponible en backend.

### 7.2 Eventos implementados

Por cada cambio A -> B se crean dos registros correlacionados:

1. `user_changed_from` en sesion origen (A).
2. `user_changed_to` en sesion destino (B).

Ambos comparten `change_flow_id` generado en el mismo flush.

### 7.3 Archivos modificados

1. `src/Controller/ProfileController.php`
   - Captura `previousPlace` antes del `change()`.
   - Llama nueva firma `auditUserChange($reservation, $previousSession, $previousPlace, $reason)`.

2. `src/Service/ReservationCancellationService.php`
   - `auditUserChange(...)` genera dos eventos correlacionados en flush atomico.
   - Helper `generateChangeFlowId()` para UUID interno.

3. `src/Entity/SessionAudit.php`
   - Nuevos campos: `changeFlowId`, `reservationId`, `fromSessionId`, `toSessionId`, `fromPlace`, `toPlace`.
   - Indice declarado: `idx_change_flow`.

4. `src/Repository/SessionAuditRepository.php`
   - Fix `findByAdminUser` (usa `adminUserIdentifier`).
   - Nuevo metodo `findByChangeFlowId`.

5. `templates/backend/session/audit.html.twig`
   - Soporte para `user_changed_from`, `user_changed_to`, `user_changed` (historico).
   - Detalle expandible con enlaces a sesiones y perfil de usuario.
   - Estilo backend clasico alineado con panel Editar.

6. `migrations/Version20260309000000.php`
   - Migración consolidada (unica) que crea `session_audit` completa.
   - Incluye todos los campos nuevos e indice `idx_change_flow`.

### 7.4 Compatibilidad retroactiva

- Registros `user_changed` historicos se muestran con fallback visual.
- Panel funcional con o sin `change_flow_id`.

---

## 8. Plan de pruebas recomendado

1. Cambio normal A -> B
- Deben existir dos eventos correlacionados y visibles en ambos paneles.

2. Cambio con motivo vacio
- Debe guardar ambos eventos con `reason = null`.

3. Cambio fallido por asiento ocupado
- No debe persistir evento parcial.

4. Compatibilidad historica
- Registros `user_changed` previos deben seguir visibles.

5. Consulta por correlacion
- Buscar por `change_flow_id` debe devolver exactamente el par origen/destino.

---

## 9. Riesgos y mitigaciones

1. Persistencia parcial (solo origen o solo destino)
- Mitigacion: una sola transaccion y flush atomico.

2. Ruptura visual del panel por nuevos tipos
- Mitigacion: fallback para tipos no reconocidos.

3. Crecimiento de tabla de auditoria
- Mitigacion: indices por `session_id`, `created_at`, `audit_type`, `change_flow_id`.

4. Desalineacion entidad/migracion
- Mitigacion: validar `doctrine:schema:validate` y cerrar diferencias antes de despliegue.

---

## 10. Estado consolidado final

### Completado

- Fase base admin: confirmacion + cancelacion + devolucion + auditoria `place_disabled`.
- Fase usuario: auditorias `user_cancelled` y `user_changed` integradas en flujo de perfil.
- Panel backend por sesion operativo.

### Pendiente

- Trazabilidad bidireccional de cambio de reservacion (SCRUM-81).
- Correlacion por flujo (`change_flow_id`) y visualizacion espejo origen/destino.

### Resultado esperado al cerrar SCRUM-81

El equipo podra seguir de punta a punta cualquier cambio de reservacion entre sesiones, desde ambos paneles de auditoria, con correlacion explicita y sin depender de logs externos.
