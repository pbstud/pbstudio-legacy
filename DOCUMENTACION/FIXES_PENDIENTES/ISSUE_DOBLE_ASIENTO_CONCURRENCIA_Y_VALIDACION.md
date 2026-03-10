# ISSUE: Doble Asiento por Concurrencia y Falta de Validacion

**Estado:** En curso  
**Prioridad:** Alta  
**Fecha Detectado:** 10 de Marzo de 2026  
**Ultima actualizacion:** 10 de Marzo de 2026  
**Jira:** SCRUM-24  
**Sprint:** Sprint 1 (09-16 Marzo 2026)

## 1. Resumen ejecutivo

Este issue cubre dos causas distintas que pueden generar doble asiento o sobreocupacion en una misma sesion:

1. Concurrencia: dos requests simultaneos pueden confirmar el mismo `placeNumber`.
2. Validacion funcional faltante: aun sin concurrencia, el flujo permite escenarios invalidos (por ejemplo doble asiento por usuario en la misma sesion) si no se valida de forma explicita.

Objetivo: cerrar ambos huecos en un solo plan tecnico para evitar inconsistencias de reservas.

## 2. Contexto tecnico actual

Archivos principales:

- `src/Service/Reservation/ReservationService.php`
- `src/Repository/ReservationRepository.php`
- `src/Entity/Reservation.php`

Observaciones actuales:

1. `reservate()` y `change()` validan capacidad total, pero no validan de forma explicita ocupacion del asiento destino antes de persistir.
2. No existe una restriccion unica efectiva para proteger asientos activos por sesion en base de datos.
3. Existe riesgo funcional y de concurrencia en los endpoints:
   - `/reservacion-clase/{id}`
   - `/reservacion/{id}/cambiar/{sessionId}`

## 3. Casos que se deben cubrir

### Caso A: Concurrencia

Dos requests al mismo asiento llegan casi al mismo tiempo, ambos pasan validaciones y terminan creando conflicto.

### Caso B: Sin concurrencia (validacion funcional)

Un usuario o flujo repetido puede terminar con estado invalido por falta de validaciones previas (doble asiento por usuario en misma sesion o colision de asiento no detectada a tiempo).

## 4. Plan de implementacion

### Fase 1 - Validaciones de aplicacion (obligatoria)

1. En `ReservationService::reservate()`:
   - Validar si el asiento destino ya esta ocupado en esa sesion.
   - Validar si el usuario ya tiene reservacion activa en esa misma sesion.
   - Si falla cualquiera, responder con `ReservationException` y mensaje claro.

2. En `ReservationService::change()`:
   - Validar que el asiento destino no este ocupado por otro usuario.
   - Validar que el usuario no quede con doble asiento en la sesion destino.
   - Mantener consistencia al mover la reservacion actual.

3. Repositorio (`ReservationRepository`):
   - Agregar metodos de consulta explicitos para existencia de conflictos activos por sesion/asiento y usuario/sesion.

### Fase 2 - Hardening de integridad en BD (recomendada)

1. Definir estrategia de restriccion unica para evitar colisiones de asiento activo por sesion.
2. Verificar compatibilidad con el modelo actual de cancelacion (soft-cancel) para no romper reutilizacion de asiento.
3. Implementar migracion Doctrine y validar datos existentes antes de aplicar constraint.

Nota: esta fase debe ejecutarse con validacion previa de datos historicos para evitar fallos de migracion.

### Fase 3 - Pruebas

1. Prueba secuencial: reservar el mismo asiento dos veces debe fallar en la segunda.
2. Prueba funcional: mismo usuario no puede quedar con dos asientos en la misma sesion.
3. Prueba de cambio: `change()` no permite mover a asiento ocupado.
4. Prueba concurrente: dos requests simultaneos al mismo asiento -> solo una reservacion exitosa.
5. Prueba de cancelacion y reutilizacion de asiento: debe seguir funcionando segun regla de negocio.

## 5. Criterios de aceptacion

1. No existe doble `placeNumber` activo en una misma sesion.
2. Un usuario no puede tener doble asiento activo en una misma sesion.
3. Los conflictos se reportan con mensaje controlado, sin 500.
4. Flujo de cambio de reservacion conserva integridad de asientos.
5. Validacion verificada por pruebas automatizadas y prueba manual QA.

## 6. Query de auditoria recomendada

Verificar colisiones activas por asiento:

```sql
SELECT session_id, place_number, COUNT(*) AS total
FROM reservation
WHERE is_available = 1
GROUP BY session_id, place_number
HAVING COUNT(*) > 1;
```

Verificar doble asiento por usuario en una misma sesion:

```sql
SELECT user_id, session_id, COUNT(*) AS total
FROM reservation
WHERE is_available = 1
GROUP BY user_id, session_id
HAVING COUNT(*) > 1;
```

## 7. Resultado esperado

Con este plan, SCRUM-24 cubre en un solo ticket:

- el riesgo tecnico por concurrencia,
- y el riesgo funcional por falta de validaciones de negocio,

eliminando sobreocupacion y estados inconsistentes de asientos.
