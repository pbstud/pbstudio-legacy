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
2. Validacion funcional faltante: aun sin concurrencia, el flujo permite escenarios invalidos (por ejemplo duplicidad del mismo asiento por usuario o colision de asiento entre usuarios) si no se valida de forma explicita.

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

Un usuario o flujo repetido puede terminar con estado invalido por falta de validaciones previas (duplicidad del mismo asiento por usuario o colision de asiento no detectada a tiempo).

## 4. Plan de implementacion

### Fase 1 - Validaciones de aplicacion (obligatoria)

1. En `ReservationService::reservate()`:
   - Validar si el asiento destino ya esta ocupado en esa sesion.
   - Validar si el usuario intenta reservar nuevamente el mismo asiento en esa sesion.
   - Si falla cualquiera, responder con `ReservationException` y mensaje claro.

2. En `ReservationService::change()`:
   - Validar que el asiento destino no este ocupado por otro usuario.
   - Validar que el usuario no duplique el mismo asiento en la sesion destino.
   - Mantener consistencia al mover la reservacion actual.

3. Repositorio (`ReservationRepository`):
   - Mantener consultas de conflicto por sesion/asiento (actualmente con `findOneBy`) y evaluar metodos explicitos en hardening posterior.

### Fase 2 - Hardening de integridad en BD (recomendada)

1. Definir estrategia de restriccion unica para evitar colisiones de asiento activo por sesion.
2. Verificar compatibilidad con el modelo actual de cancelacion (soft-cancel) para no romper reutilizacion de asiento.
3. Implementar migracion Doctrine y validar datos existentes antes de aplicar constraint.

Nota: esta fase debe ejecutarse con validacion previa de datos historicos para evitar fallos de migracion.

### Fase 3 - Pruebas

1. Prueba secuencial: reservar el mismo asiento dos veces debe fallar en la segunda.
2. Prueba funcional: mismo usuario si puede reservar asientos distintos en la misma sesion, pero no repetir el mismo asiento.
3. Prueba de cambio: `change()` no permite mover a asiento ocupado.
4. Prueba concurrente: dos requests simultaneos al mismo asiento -> solo una reservacion exitosa.
5. Prueba de cancelacion y reutilizacion de asiento: debe seguir funcionando segun regla de negocio.

## 5. Criterios de aceptacion

1. No existe doble `placeNumber` activo en una misma sesion.
2. Un usuario puede tener multiples asientos activos en una misma sesion, pero no puede duplicar el mismo `placeNumber`.
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

Verificar duplicidad del mismo asiento por usuario en una misma sesion:

```sql
SELECT user_id, session_id, place_number, COUNT(*) AS total
FROM reservation
WHERE is_available = 1
GROUP BY user_id, session_id, place_number
HAVING COUNT(*) > 1;
```

## 7. Resultado esperado

Con este plan, SCRUM-24 cubre en un solo ticket:

- el riesgo tecnico por concurrencia,
- y el riesgo funcional por falta de validaciones de negocio,

eliminando sobreocupacion y duplicidad invalida de asientos.

## 8. Implementacion y constancia de pruebas (10-03-2026)

### Cambios aplicados

1. `ReservationService::reservate()`
   - Se valida ocupacion previa del asiento destino.
   - Si el asiento ya esta tomado por el mismo usuario, se rechaza como duplicidad.
   - Si el asiento ya esta tomado por otro usuario, se rechaza por colision.

2. `ReservationService::change()`
   - Se valida que el asiento destino no este ocupado por otro usuario.
   - Se valida que el usuario no duplique el mismo asiento en la sesion destino.

3. Pruebas automatizadas nuevas
   - Archivo: `tests/Service/Reservation/ReservationServiceTest.php`
   - Cobertura agregada para escenarios de conflicto y escenarios permitidos en `reservate()` y `change()`.

### Evidencia de ejecucion

1. Suite focalizada:
   - Comando: `php bin/phpunit tests/Service/Reservation/ReservationServiceTest.php`
   - Resultado: **OK (6 tests, 27 assertions)**

2. Suite completa del proyecto:
   - Comando: `php bin/phpunit`
   - Resultado: **22 tests ejecutados, 1 failure**
   - Failure reportado en: `App\Tests\Repository\UserRepositoryTest::testPartialSearchWithSpaces` (`tests/Repository/UserRepositoryTest.php:202`)
   - Nota: este failure ya existia fuera del alcance de `ReservationService`.

3. Validacion manual QA (backend):
   - Confirmada por el usuario en flujo real de backend para los cambios de reservacion y ocupacion de asientos.
