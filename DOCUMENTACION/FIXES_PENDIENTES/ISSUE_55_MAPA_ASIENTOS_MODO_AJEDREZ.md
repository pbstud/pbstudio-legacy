# ISSUE #55: Mapa de Asientos en Modo Ajedrez Editable con Drag & Drop (MVP Opcion B)

**Fecha de documentacion:** 11/03/2026  
**Actualizado:** 12/03/2026 (implementación real backend Asientos)  
**Prioridad:** Alta  
**Estado:** En implementación - Backend Asientos funcional; pendientes frontend de reservación y entrada A  
**Jira:** SCRUM-84 (11/03/2026)

---

## 1. Resumen ejecutivo

Se define como decision tecnica implementar un mapa de asientos en modo tablero de ajedrez EDITABLE CON DRAG & DROP. Admin arrastra asientos numerados y los suelta en celdas del grid para posicionarlos. Dejar la experiencia totalmente libre sin grid como evolucion posterior.

Objetivo del MVP:

1. Permitir al admin configurar posicion visual de lugares mediante drag & drop intuitivo.
2. Asientos se representan como OBJETOS arrastables con numeros visibles.
3. Mantener compatibilidad total con el modelo actual de reservacion por numero de asiento.
4. Reducir riesgo de regresiones operativas en reservas, cambios y cancelaciones.

### 1.1 Estado implementado al 12/03/2026

Implementado en código (estado real):

1. **Entrada B (clase)** implementada como pestaña `Asientos` dentro del perfil de sesión (`backend_session_seats`).
2. **Editor drag & drop activo** con tablero **6 × 6** (36 slots) y panel lateral temporal.
3. Tarjetas por estado visual (blanca/roja/gris), movibles durante diseño; clases cerradas/canceladas quedan en solo lectura.
4. Guardado de clase persiste `Session.seatLayout` (JSON) + `Session.placesNotAvailable` + `availableCapacity`.
5. Checkbox de guardado por defecto implementado: también actualiza `ExerciseRoom.seatLayout`, `ExerciseRoom.placesNotAvailable` y capacidad del salón.
6. Herencia para clases nuevas implementada (creación individual y por día) desde `ExerciseRoom`.
7. Si la vista carga desde default del salón, se muestra aviso; al guardar, la clase registra su layout propio.

Pendiente:

1. **Entrada A (editar salón)** con el mismo editor visual (hoy no existe pantalla dedicada de layout en salón).
2. Render de layout visual en frontend de reservación (usuario final).

Nota: las secciones 5 y 6 de este documento contienen parte del diseño histórico inicial; la implementación real actual usa `seat_layout` (mapa asiento->slot) en lugar de `seat_positions` por fila/columna.

---

## 2. Decision de arquitectura

### 2.1 Opcion elegida (ahora)

#### Tablero de Ajedrez con Drag & Drop de Asientos

1. El admin define capacidad y ve un grid determinisitco (filas/columnas).
2. Ve lista de asientos disponibles (1, 2, 3, ..., N) como objetos draggables.
3. Arrastra cada asiento a una celda del grid.
4. Al soltar, se registra la posicion (row, col) y se calcula el placeNumber.
5. Asientos NO colocados en grid quedan como no disponibles.
6. Se guarda mapeo de asientos a posiciones en Session.

### 2.2 Opcion diferida (futuro)

#### Opcion A - Canvas Total Libre (Fase 3)

1. Posicionar asientos en cualquier coordenada del canvas (no grid).
2. Multiples layouts personalizados por salon con versionado.
3. Edicion mas flexible pero con mayor complejidad.

---

## 2.5 Decisiones de implementacion (12/03/2026)

### 2.5.1 Tamaño del tablero

- **Grid fijo: 6 × 6** (36 slots visuales) para el editor actual.
- El layout persiste como mapa `seat_layout` (`asiento -> slot`) con slots válidos en rango `1..36`.
- Si la capacidad de la clase/salón es mayor a 36, los asientos excedentes pueden existir y quedar en el panel lateral temporal (sin slot visual en tablero).
- El fallback secuencial coloca automáticamente `1..min(capacity, 36)`.

### 2.5.2 Diseño del editor implementado

El editor se abre como una **pestaña Asientos** dentro del perfil de la clase (no modal).

Interacción actual:

1. Tablero 6×6 con drag & drop y panel lateral temporal.
2. Se generan tarjetas al abrir: libres (blanco), ocupadas (rojo), deshabilitadas (gris).
3. El admin organiza tarjetas entre tablero y panel durante el diseño.
4. Se muestran contadores de libres/ocupadas/deshabilitadas.
5. Acciones rápidas: llevar todas al tablero / llevar todas al panel.
6. Si la clase está cerrada o cancelada: solo lectura (sin botones de edición/guardado).
7. Si el layout proviene del default del salón, se muestra aviso; al guardar se fija layout propio en la clase.

### 2.5.3 Puntos de entrada del editor

Hay **dos contextos** desde donde se llama al editor. En ambos reemplaza el campo tagsinput actual:

#### Entrada A — Editar Salón (`backend_exerciseroom_edit`)

- **Archivo:** `templates/backend/exerciseroom/_form.html.twig`
- **Contexto:** El admin configura el **diseño por defecto** del salón. Lo que se guarda aquí (`ExerciseRoom.placesNotAvailable`) se copia automáticamente a todas las sesiones nuevas que se creen en ese salón.
- **Estado actual:** **Pendiente**. Aún no existe editor visual dedicado en la pantalla de salón.

#### Entrada B — Editar Clase (`backend_session_edit`)

- **Archivo:** `templates/backend/session/profile.html.twig` + `templates/backend/session/seats.html.twig`
- **Contexto:** El admin ajusta la distribución de una clase específica desde la pestaña **Asientos**.
- **Estado actual:** **Implementado**.
- **Guardado (solo clase):** persiste `Session.seatLayout` + `Session.placesNotAvailable`.
- **Guardado (como default):** además actualiza `ExerciseRoom.seatLayout`, `ExerciseRoom.placesNotAvailable` y capacidad del salón para clases futuras.

#### Entrada C — Nueva Clase (`backend_session_new`) — **Fase 2**

- **Comportamiento actual:** la nueva clase hereda `placesNotAvailable` y `seatLayout` del salón al crearse.
- En la creación no se muestra el editor visual; el ajuste se hace después en la pestaña Asientos.

---

## 3. Base tecnica actual (compatibilidad obligatoria)

El sistema hoy ya opera con asientos numericos y capacidad calculada:

1. `Reservation.placeNumber` es entero (`SMALLINT`) - identidad canonica del asiento.
2. `Session.placesNotAvailable` guarda lugares no disponibles como array.
3. `Session.seatLayout` guarda el layout visual (`JSON`, mapa `asiento -> slot`).
4. `ExerciseRoom.seatLayout` guarda la plantilla por defecto del salón (`JSON`).
5. `Session.exerciseRoomCapacity` y `Session.availableCapacity` sostienen el conteo operativo.

Implicacion:

- El MVP usa numero de asiento (1-N) como identidad principal.
- El layout visual se guarda por slot de tablero (1..36), no por coordenada libre.
- La validación de reservación sigue basada en `placeNumber` y `placesNotAvailable`.

---

## 4. Alcance funcional del MVP (Opcion B - Drag & Drop)

### 4.1 Backend admin (creacion/edicion de clase)

1. Editor en pestaña Asientos de la clase (perfil de sesión).
2. Tablero visual fijo 6×6 + panel lateral temporal.
3. Se generan tarjetas 1..N según capacidad; visualmente se distinguen libres/ocupadas/deshabilitadas.
4. **Drag & Drop** para organizar tarjetas entre tablero y panel.
5. Guardado siempre persiste `Session.seatLayout` (mapa `asiento -> slot`), `Session.placesNotAvailable` y `Session.availableCapacity`.
6. Opción "guardar como default" persiste además `ExerciseRoom.seatLayout`, `ExerciseRoom.placesNotAvailable` y `ExerciseRoom.capacity`.
7. Si la clase está cerrada/cancelada, la vista es solo lectura.

### 4.2 Frontend usuario (reservacion)

1. Render de grid segun configuracion guardada (posiciones de asientos).
2. Mostrar asientos FISICAMENTE en sus posiciones (row, col) dentro del grid.
3. Cada asiento muestra su NUMERO dentro del icono/celda.
4. Estados visuales:
   - **DISPONIBLE**: Asiento vacio (numero visible), fondo blanco, cursor pointer, clickable
   - **OCUPADO**: Asiento lleno (numero visible), fondo gris, no clickable
   - **SELECCIONADO**: color verde alrededor del objeto del asiento seleccionado
   - **MI_ASIENTO**: color verde completo "mi asiento" si usuario ya tiene reserva en esa clase
5. Click en asiento disponible lo selecciona para reservacion.
6. Grid responsive segun tamano de pantalla; asientos mantienen posiciones relativas.

### 4.3 Fuera de alcance en MVP

1. Rotacion/escala dinamica del grid en tiempo real.
2. Canvas completamente libre sin restriccion de grid (Opcion A futura).
3. Multiples plantillas avanzadas por salon con versionado.
4. Edicion de asientos individuales (agregar/quitar asientos en tiempo real).

---

## 5. Modelo de datos propuesto para MVP (sin romper lo actual)

### 5.1 Persistencia principal

Se mantiene la persistencia operativa actual mas mapeo de posiciones:

1. `placeNumber` como identificador CANONICO del asiento (1-N, nunca cambia).
2. `placesNotAvailable` para asientos NO colocados en grid (llenado al guardar).
3. **NUEVO**: `seat_layout` JSON para registrar la ubicación visual (`asiento -> slot`).

Ejemplo de persistencia Session:

```json
{
  "capacity": 20,
  "seat_layout": {
    "1": 1,
    "2": 2,
    "3": 3,
    "4": 6,
    "5": 10,
    "6": 12,
    "10": 21,
    "15": 32
  },
  "places_not_available": [11, 12, 13, 14, 16, 17, 18, 19, 20]
}
```

### 5.2 Mapeo bidireccional grid <-> asiento

Modelo actual implementado:

- Se usa `slot` de tablero en rango `1..36`.
- `seat_layout[seatNumber] = slotNumber`.
- Validación backend:
  - asiento dentro de `1..capacity`
  - slot dentro de `1..36`
  - sin colisiones de slot
- Si no existe layout propio de clase, la vista usa fallback del salón; si tampoco existe, fallback secuencial.

### 5.3 Dimension del grid y distribucion de asientos

1. El tablero visual es fijo en `6x6` (36 slots).
2. La capacidad operativa de clase/salón puede ser mayor, pero solo 36 asientos pueden tener slot visual simultáneo en tablero.
3. Asientos sin slot permanecen en el panel lateral temporal durante el diseño.
4. **Calculo de capacidad disponible** sigue basado en `placesNotAvailable` (compatibilidad con reservación actual).

### 5.4 Compatibilidad con reservacion actual

Al guardar configuracion del grid:

- Se mantiene y persiste `placesNotAvailable` como fuente para bloquear reserva de asientos.
- `seat_layout` solo define la posición visual del asiento, no reemplaza `placeNumber`.
- Esto mantiene compatibilidad con validacion existente: `placeNumber NOT IN Session.placesNotAvailable`
- ReservationService ya rechaza reservaciones en placesNotAvailable, sin cambios requeridos

---

## 6. Contratos funcionales (propuesta historica, no implementada tal cual)

### 6.1 Payload de configuracion admin (guardar layout)

```json
{
  "capacity": 20,
  "grid_config": {
    "rows": 4,
    "cols": 5,
    "mode": "chessboard_v1"
  },
  "seat_positions": {
    "1": {"row": 0, "col": 0},
    "2": {"row": 0, "col": 1},
    "3": {"row": 0, "col": 2},
    "10": {"row": 1, "col": 4},
    "15": {"row": 2, "col": 4}
  }
}
```

Backend calcula places_not_available = [4,5,6,7,8,9,11,12,13,14,16,17,18,19,20]

### 6.2 Respuesta para render frontend (obtener configuracion)

```json
{
  "session_id": 123,
  "mode": "chessboard_v1",
  "grid": {
    "rows": 4,
    "cols": 5,
    "capacity": 20
  },
  "seat_positions": {
    "1": {"row": 0, "col": 0},
    "2": {"row": 0, "col": 1},
    "3": {"row": 0, "col": 2},
    "10": {"row": 1, "col": 4},
    "15": {"row": 2, "col": 4}
  },
  "seat_status": {
    "1": "available",
    "2": "occupied",
    "3": "available",
    "5": "unavailable",
    "10": "available",
    "15": "my_seat"
  }
}
```

---

## 7. Validaciones clave

1. **Capacidad**: No guardar capacity <= 0.
2. **Grid**: No permitir rows <= 0 o cols <= 0.
3. **Posiciones**: Cada asiento arrastrado debe map a posicion valida [row < rows AND col < cols].
4. **Rango**: placeNumber derivado debe estar en [1..capacity].
5. **Colisiones**: No permitir 2 asientos en la misma celda (validar en drag & drop).
6. **Reservaciones**: No reservar asientos en places_not_available (validacion existente en ReservationService).
7. **Concurrencia**: Mantener reglas existentes: no doble asiento/session, cambios/cancelaciones reflejan en disponibles.

---

## 8. Ruta evolutiva a Opcion A (editable total)

Para evolucionar sin romper MVP:

1. Mantener `placeNumber` como ID canonico de asiento.
2. Agregar metadato de layout avanzado en nueva estructura (`layout_json` versionado).
3. Introducir `layout_mode`:
   - `chessboard_v1` (MVP actual)
   - `freeform_v2` (futuro - sin restriccion de grid)
4. Migracion incremental:
   - Si no existe freeform, render por formula de grid.
   - Si existe freeform, render por coordenadas libres (x, y).
5. Data existente (seat_positions) continua valido, freeform es opcion alternativa.

---

## 9. Criterios de aceptacion

1. Admin puede configurar disponibilidad de lugares mediante **drag & drop visual** sin escribir SQL o codigo.
2. Asientos se representan como **objetos numerados** arrastrables, visualmente intuitivos.
3. Configuracion persiste en base de datos y se refleja en frontend de reservacion.
4. No hay ruptura de flujo actual de reservacion por `placeNumber`.
5. Asientos no colocados no pueden reservarse (validacion en placesNotAvailable).
6. Estados visuales se muestran correctamente (disponible verde, ocupado rojo, seleccionado azul, mi asiento dorado).
7. **Drag & drop funciona** sin errores JavaScript; validacion del lado del cliente y servidor.
8. Cobertura minima de pruebas manuales y automatizadas definida.

---

## 10. Plan de pruebas

### 10.1 Manual

1. Crear clase capacidad 20, sistema calcula grid 4x5.
2. Drag asientos 1-15 a posiciones en grid, dejar 16-20 sin colocar.
3. Guardar y abrir reservacion: verificar que asientos 1-15 son clickables, 16-20 no aparecen.
4. Reservar asiento 5, verificar que pasa a ocupado (rojo) en frontend.
5. Editar clase, mover asiento 3 a otra posicion, guardar, verificar cambio en reservacion.

### 10.2 Automatizadas

1. **Test Mapeo**: row/col <-> placeNumber con multiples grid sizes (4x5, 5x4, 3x7, etc.)
2. **Test Drag**: Validacion de drop fuera de rango, colisiones duplicadas, posiciones validas.
3. **Test Persistencia**: seat_positions y places_not_available se calculan correctamente.
4. **Test Compatibilidad**: Reservaciones rechazadas en places_not_available, cambios/cancelaciones reflejan.
5. **Test Formulario**: Capacidad, auto-fill, limpiar, restore default sin errores.

---

## 11. Riesgos y mitigaciones

1. **Riesgo:** Desalineacion entre posicion arrastrada (row,col) y placeNumber calculado.  
   **Mitigacion:** Formula deterministica + tests unitarios + validacion en cliente y servidor.

2. **Riesgo:** Usuarios reservan asiento pero frontend muestra posicion incorrecta (desincronizacion).  
   **Mitigacion:** GET de configuracion desde backend cada vez que se abre reservacion, no cache local.

3. **Riesgo:** Regresion en reservas/cambios/cancelaciones existentes.  
   **Mitigacion:** No cambiar placeNumber identity ni ReservationService base, solo agregar validacion placesNotAvailable.

4. **Riesgo:** Admin arrastra asientos pero cambio no persiste (error al guardar).  
   **Mitigacion:** Validacion completa antes de persistir, transaccion atomica, mensaje error claro.

---

## 12. Fases de implementacion sugeridas

### Fase 1 (MVP Opcion B - Drag & Drop)

1. Backend: Formulario con grid visual y lista de asientos draggables.
2. Backend: Drag & drop handling (validacion, calculo placeNumber, persistencia).
3. Frontend: Render grid con asientos en posiciones guardadas.
4. Frontend: Estados visuales basados en status (disponible, ocupado, seleccionado, mi asiento).
5. Tests: Manuales (5 casos) + Automatizados (4+ categorias).

### Fase 2 (Hardening)

1. Plantilla por salon (default reusable, copiar entre clases).
   - **Estado actual (implementado en pestaña Asientos de clase):**
     - **Solo para esta clase**: Guarda `Session.seatLayout` + `Session.placesNotAvailable` en la sesión actual.
     - **Guardar como default del salón**: Además de guardar en la sesión, actualiza `ExerciseRoom.seatLayout`, `ExerciseRoom.placesNotAvailable` y capacidad del salón.
   - Las clases nuevas heredan el nuevo default. Las clases existentes no se actualizan en masa por esta acción.
2. Mejoras UX (auto-fill, limpiar, restaurar presets).
3. Telemetria/logs de cambios de configuracion.
4. Performance: Caching de GET configuracion, pagination si multiples clases.

### Fase 3 (Opcion A futura - Canvas Libre)

1. Layout avanzado editable total sin grid.
2. Versionado de layout y migracion transparente.
3. Convivencia chessboard_v1 y freeform_v2.

---

## 13. Decision final

Se aprueba iniciar con **Opcion B mejorada (tablero ajedrez con drag & drop de asientos)** por:

- Interfaz intuitiva y visual (UX superior a click simple)
- Menor riesgo que editable total libre
- Tiempo de entrega 3-5 horas (MVP)
- Preserva ruta limpia para evolucion a Opcion A (canvas libre) en Fase 3
