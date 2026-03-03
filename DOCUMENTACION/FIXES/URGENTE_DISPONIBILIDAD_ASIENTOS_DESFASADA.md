# 🔧 URGENTE: Disponibilidad de asientos desfasada y sin agrupar

**Rama objetivo:** `main` (crear rama de fix dedicada antes de implementar)  
**Fecha de análisis:** 03/03/2026  
**Última actualización:** 03/03/2026 12:40  
**Estado:** 🟠 REPORTADO Y REPRODUCIDO  
**Severidad:** Alta  
**Impacto:** Reserva de lugares, UX de selección de asientos, consistencia de disponibilidad

---

## 📌 Resumen ejecutivo

Se confirmó un problema en la carga de disponibilidad para selección de asientos: la información puede mostrarse desfasada respecto al estado real y además llega sin estructura de agrupación para renderizado avanzado.

En la revisión técnica se detectaron tres focos principales:

1. **Riesgo de concurrencia (doble reservación del mismo lugar)** en el flujo de reserva.
2. **Respuesta de disponibilidad plana/sin metadatos de agrupación** en el endpoint de lugares.
3. **Mismo usuario con doble reservación en la misma sesión (asientos distintos)**.

Estos tres puntos explican el síntoma observado en backend/frontend.

---

## ✅ Reproducción observada

- Caso validado manualmente en backend: la disponibilidad mostrada no siempre coincide con estado real esperado.
- El comportamiento contrasta con lo descrito como esperado en diagnóstico funcional.
- El listado de asientos se entrega como arreglo plano de lugares (sin bloques/grupos por criterio visual o de sala).

### Evidencia capturada en local (03/03/2026 ~11:26)

1. **Ruta de confirmación ejecutada en logs**
  - `request.INFO`: route `reservation_confirm`
  - URI: `POST /reservacion-clase/69999`

2. **Persistencia de reserva registrada en logs Doctrine**
  - `INSERT INTO reservation (...)`
  - Datos relevantes del insert:
    - `session_id = 69999`
    - `place_number = 11`
    - `user_id = 14567`
    - `created_at = 2026-03-03 11:26:54`

3. **Verificación directa en BD (caso reproducido)**
  - Reserva guardada para caso puntual:
    - `session_id=69999`, `place_number=11`, `is_available=1` → **1 registro activo**

4. **Posible fuente de desfase en campo `available_capacity`**
  - `exercise_room_capacity = 50`
  - `places_not_available = 7`
  - `reservados_activos = 2`
  - `available_capacity` persistido = **43** (= `50 - 7`)
  - Esto indica que `available_capacity` **no descuenta reservaciones activas** y funciona como capacidad neta estructural.
  - Si alguna vista usa ese campo como disponibilidad en tiempo real, se produce percepción de desfase.

5. **Consulta global de colisiones activas por asiento/sesión**
  - Histórico activo (sin filtrar fecha): existen múltiples pares `session_id + place_number` con `COUNT(*) > 1`
  - Al filtrar sesiones futuras (`s.date_start >= CURDATE()`): sin duplicados en el corte ejecutado

6. **Nueva evidencia: mismo usuario, misma sesión, dos asientos distintos**
  - Caso detectado en BD (activo):
    - `user_id = 14567`
    - `session_id = 69999`
    - `total_reservas = 2`
    - `asientos_distintos = 2` (`1,11`)
  - Evidencia en logs:
    - `POST /reservacion-clase/69999` a las `11:26:24`
    - `INSERT` de `place_number=1` (`11:26:25`)
    - Segundo `POST /reservacion-clase/69999` a las `11:26:54`
    - `INSERT` de `place_number=11` (`11:26:54`)
  - Ambos inserts con mismo:
    - `user_id=14567`
    - `transaction_id=62953`
    - `session_id=69999`
  - Conclusión: hoy es posible que una misma persona tome más de un asiento en la misma clase.

---

## 🔍 Evidencia técnica encontrada

## 1) Flujo de reserva no atómico (condición de carrera)

### Archivo: `src/Service/Reservation/ReservationService.php`
Método: `reservate(...)`

Hallazgos:
- Se valida capacidad con conteo previo:
  - `getTotalReservationsForSession($session) + 1`
- Después de validaciones y búsqueda de transacción, se persiste la reservación y se hace `flush()`.
- **No existe lock transaccional explícito** durante la validación+inserción.
- Bajo concurrencia, dos requests pueden pasar validación casi simultánea y competir por el mismo asiento.

Riesgo:
- Doble reservación lógica de `placeNumber` en una misma sesión.
- Doble reservación por la misma persona en la misma sesión (con distinto `placeNumber`).
- Desfase entre disponibilidad mostrada y estado real tras commits concurrentes.

---

## 2) Falta de restricción única de integridad en BD/ORM

### Archivo: `src/Entity/Reservation.php`

Hallazgos:
- Existe índice normal sobre `place_number`.
- **No existe `UniqueConstraint` compuesto** para blindar `session + place_number`.

Riesgo:
- Si falla la validación en aplicación por carrera, la base puede aceptar duplicados funcionales.
- La base también permite múltiples filas activas para `user_id + session_id` si no se valida en aplicación.
- El problema de disponibilidad se agrava porque la fuente de verdad no impide colisiones.

---

## 3) Endpoint de disponibilidad sin agrupación explícita

### Archivo: `src/Controller/Backend/SessionController.php`
Ruta: `GET /backend/session/{id}/places`
Método: `places(Session $session)`

Hallazgos:
- Construye respuesta plana:
  - `[{ place: n, is_available: bool }, ...]`
- Marca indisponibles por:
  - `placesNotAvailable`
  - reservaciones activas de `session->getReservations()`
- **No devuelve estructura agrupada** (filas/bloques/sala), solo lista secuencial por índice.

Riesgo:
- Front/back deben inferir agrupación por su cuenta, con potencial inconsistencia de orden/render.
- UX percibe “sin agrupar” aunque los datos estén completos.

Nota adicional:
- Esta ruta no muestra `IsGranted` en el método actual (revisión de seguridad pendiente, ya registrada en urgentes).

---

## 4) Dependencias relacionadas detectadas

- `src/Service/WaitingList/WaitingListService.php` llama `ReservationService::reservate(...)` en `checkAndReserve(...)`.
- Esto comparte el mismo riesgo de concurrencia cuando un lugar se libera y se reasigna desde waiting list.

---

## 5) Regla de negocio no reforzada para usuario/sesión

Hallazgo funcional:
- El comportamiento esperado del negocio es **1 reservación por usuario por clase**.
- Hoy el flujo permite una segunda reservación de la misma persona en la misma sesión si cambia el asiento.

Evidencia concreta:
- `user_id=14567`, `session_id=69999`, asientos `1` y `11`, ambos activos.

Riesgo:
- Sobreocupación por usuario y bloqueo injusto de lugares para otros clientes.
- Distorsión en métricas de ocupación y reglas comerciales (especialmente paquetes ilimitados).

---

## 🧠 Hipótesis de causa raíz consolidada

1. **Concurrencia sin control atómico** en reserva de asiento.
2. **Sin constraint única** para impedir colisión de asiento por sesión.
3. **Sin validación fuerte de unicidad por `user + session`** en todos los escenarios.
4. **Contrato JSON insuficiente** para agrupación visual de asientos.
5. Posible diferencia temporal entre colección Doctrine en memoria y estado persistido en escenarios de alta simultaneidad.

---

## 🎯 Alcance técnico estimado para el fix

- `src/Service/Reservation/ReservationService.php`
  - Encapsular validación+persistencia en transacción con lock apropiado.
  - Validar ocupación específica de `placeNumber` de forma atómica.

- `src/Repository/ReservationRepository.php`
  - Agregar método de verificación de ocupación por sesión+lugar (consulta específica y/o lock).
  - Agregar verificación fuerte de existencia por usuario+sesión en estado activo.

- `src/Entity/Reservation.php` + nueva migración
  - Añadir restricción única compuesta (`session_id`, `place_number`) según regla de negocio (reservas activas).
  - Evaluar restricción adicional de negocio para evitar duplicidad `user_id + session_id` en reservas activas.

- `src/Controller/Backend/SessionController.php`
  - Definir contrato de salida agrupada (si el frontend lo requiere) o exponer metadatos de agrupación.

---

## ✅ Criterios de aceptación del fix

1. No se puede reservar el mismo `placeNumber` dos veces en la misma sesión (ni con requests simultáneos).
2. No se puede reservar más de un asiento por usuario en la misma sesión.
3. La disponibilidad reportada por `/backend/session/{id}/places` coincide con estado real persistido.
4. La respuesta de lugares soporta agrupación requerida por UI (estructura o metadatos explícitos).
5. Waiting list respeta la misma regla de no colisión.
6. Prueba de concurrencia controlada no produce duplicados.

---

## 📋 Plan de implementación recomendado (siguiente paso)

1. Crear rama de fix urgente para disponibilidad/concurrencia.
2. Implementar protección transaccional en `ReservationService::reservate`.
3. Agregar constraint única en DB y manejar excepción de colisión con mensaje funcional.
4. Ajustar endpoint `places` para agrupación/contrato claro.
5. Validar en backend con casos reproducidos y documentar evidencia en `DOCUMENTACION/progreso.md`.

---

## 🧾 Estado de documentación (cerrado)

- ✅ Problema reproducido y descrito funcionalmente.
- ✅ Evidencia en logs y BD agregada (con IDs, timestamps y sesión).
- ✅ Causa raíz técnica consolidada en 3 frentes.
- ✅ Criterios de aceptación definidos para implementación/QA.
- ✅ Próximos pasos documentados para ejecución en rama de fix.

---

## 📚 Referencias

- https://www.doctrine-project.org/projects/doctrine-orm/en/latest/reference/transactions-and-concurrency.html
- https://www.doctrine-project.org/projects/doctrine-orm/en/latest/reference/annotations-reference.html#uniqueconstraint
- https://symfony.com/doc/current/doctrine.html
