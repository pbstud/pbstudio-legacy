# ISSUE #55: Mapa de Asientos en Modo Ajedrez Editable con Drag & Drop (MVP Opcion B)

**Fecha de documentacion:** 11/03/2026  
**Actualizado:** 12/03/2026 (tamaño tablero, diseño editor, puntos de entrada)  
**Prioridad:** Alta  
**Estado:** Documentado - SCRUM-84 creado, pendiente implementacion  
**Jira:** SCRUM-84 (11/03/2026)

---

## 1. Resumen ejecutivo

Se define como decision tecnica implementar un mapa de asientos en modo tablero de ajedrez EDITABLE CON DRAG & DROP. Admin arrastra asientos numerados y los suelta en celdas del grid para posicionarlos. Dejar la experiencia totalmente libre sin grid como evolucion posterior.

Objetivo del MVP:

1. Permitir al admin configurar posicion visual de lugares mediante drag & drop intuitivo.
2. Asientos se representan como OBJETOS arrastables con numeros visibles.
3. Mantener compatibilidad total con el modelo actual de reservacion por numero de asiento.
4. Reducir riesgo de regresiones operativas en reservas, cambios y cancelaciones.

---

## 2. Decision de arquitectura

### 2.1 Opcion elegida (ahora)

**Tablero de Ajedrez con Drag & Drop de Asientos**

1. El admin define capacidad y ve un grid determinisitco (filas/columnas).
2. Ve lista de asientos disponibles (1, 2, 3, ..., N) como objetos draggables.
3. Arrastra cada asiento a una celda del grid.
4. Al soltar, se registra la posicion (row, col) y se calcula el placeNumber.
5. Asientos NO colocados en grid quedan como no disponibles.
6. Se guarda mapeo de asientos a posiciones en Session.

### 2.2 Opcion diferida (futuro)

**Opcion A - Canvas Total Libre (Fase 3)**

1. Posicionar asientos en cualquier coordenada del canvas (no grid).
2. Multiples layouts personalizados por salon con versionado.
3. Edicion mas flexible pero con mayor complejidad.

---

## 2.5 Decisiones de implementacion (12/03/2026)

### 2.5.1 Tamaño del tablero

- **Grid fijo: 10 × 10** (100 celdas) para todos los salones en el MVP.
- Las celdas con número de asiento > `capacity` del salón se muestran sombreadas e inactivas ("fuera de rango"). No son reservables ni configurables.
- Ejemplo: capacidad 20 → solo las primeras 20 celdas (llenando fila por fila) son activas; las 80 restantes están deshabilitadas visualmente.
- Se revisará ajustar el tamaño por salón en Fase 2 si la capacidad máxima del negocio lo requiere.

### 2.5.2 Diseño del editor (UI clásica)

El editor se abre como un **modal de Bootstrap** dentro del admin, sin abandonar la página actual. Diseño:

```
┌─────────────────────────────────────────────────────────────┐
│  Disposición de Asientos — Salón "Sala A"        [×] Cerrar │
├─────────────────────────────────────────────────────────────┤
│  Capacidad: 20   Disponibles: 17   No disponibles: 3        │
├──────────────────────────────────┬──────────────────────────┤
│                                  │  Asientos disponibles:   │
│   TABLERO 10×10                  │  ┌──┐ ┌──┐ ┌──┐ ┌──┐   │
│                                  │  │ 1│ │ 2│ │ 3│ │ 4│   │
│  [ 1][ 2][██][██][ 5][ 6][ 7]   │  └──┘ └──┘ └──┘ └──┘   │
│  [ 8][ 9][10][11][12][13][14]   │                          │
│  [15][16][17][18][19][20][  ]   │  Asientos no coloc.:     │
│  [  ][  ][  ][  ][  ][  ][  ]   │  ┌──┐ ┌──┐             │
│  ... (celdas fuera de rango      │  │██│ │██│  (no disp.) │
│       sombreadas en gris)        │  └──┘ └──┘             │
│                                  │                          │
│  [ ] celda vacía                 │  [ Auto-llenar ]         │
│  [N] asiento N colocado          │  [ Limpiar todo ]        │
│  [██] asiento deshabilitado      │                          │
│  [  ] fuera de capacidad         │                          │
├──────────────────────────────────┴──────────────────────────┤
│  [Cancelar]                              [Guardar cambios]  │
└─────────────────────────────────────────────────────────────┘
```

**Interacción:**
- Fase 1 MVP: **click en celda activa** para habilitar/deshabilitar asiento (toggle). Sin drag & drop en esta fase.
- Celda activa disponible → click → queda marcada como **no disponible** (fondo rojo/oscuro).
- Celda activa no disponible → click → queda **disponible** nuevamente.
- Celdas fuera del rango de capacidad → no interactivas, fondo gris apagado.
- El contador de disponibles/no disponibles se actualiza en tiempo real.
- "Auto-llenar": marca todos los asientos 1..N como disponibles (limpia los no disponibles).
- "Limpiar todo": marca todos como no disponibles.
- Al guardar, se escribe en el `<input>` oculto del formulario padre con la lista de asientos no disponibles.

**Nota Fase 2:** El panel lateral de arrastre (drag & drop) se añadirá en Fase 2 sobre esta misma base.

### 2.5.3 Puntos de entrada del editor

Hay **dos contextos** desde donde se llama al editor. En ambos reemplaza el campo tagsinput actual:

#### Entrada A — Editar Salón (`backend_exerciseroom_edit`)

- **Archivo:** `templates/backend/exerciseroom/_form.html.twig`
- **Contexto:** El admin configura el **diseño por defecto** del salón. Lo que se guarda aquí (`ExerciseRoom.placesNotAvailable`) se copia automáticamente a todas las sesiones nuevas que se creen en ese salón.
- **Dónde se añade:** En lugar del campo `form.placesNotAvailable` (tagsinput actual), se muestra un botón **"Configurar disposición de asientos"** que abre el modal del editor.
- **Al guardar en el modal:** Actualiza `ExerciseRoom.placesNotAvailable` → es el nuevo default del salón.

#### Entrada B — Editar Clase (`backend_session_edit`)

- **Archivo:** `templates/backend/session/_form.html.twig` y `templates/backend/session/edit.html.twig`
- **Contexto:** El admin ajusta la distribución de una clase específica, sin tocar el diseño por defecto del salón (excepto si activa la opción de guardarlo como default — ver Fase 2).
- **Dónde se añade:** En la plantilla de edición de sesión, debajo de los campos de capacidad, un botón **"Editar disposición de asientos"** que abre el modal cargado con `Session.placesNotAvailable` actual.
- **Al guardar en el modal:** Actualiza solo `Session.placesNotAvailable` de esa clase. No afecta el salón ni otras sesiones.
- **Fase 2:** Al guardar aparecerá un checkbox "Establecer como distribución por defecto del salón" (ya documentado en sección 12).

#### Entrada C — Nueva Clase (`backend_session_new`) — **Fase 2**

- La nueva clase hereda `placesNotAvailable` del salón al momento de crearla (comportamiento actual).
- En MVP no se muestra el editor al crear; el admin edita después si necesita ajustar.
- En Fase 2 se puede añadir el editor también en la pantalla de creación.

---

## 3. Base tecnica actual (compatibilidad obligatoria)

El sistema hoy ya opera con asientos numericos y capacidad calculada:

1. `Reservation.placeNumber` es entero (`SMALLINT`) - identidad canonica del asiento.
2. `Session.placesNotAvailable` guarda lugares no disponibles como array.
3. `Session.exerciseRoomCapacity` y `Session.availableCapacity` sostienen el conteo operativo.

Implicacion:

- El MVP usa numero de asiento (1-N) como identidad principal.
- Pos grid (row, col) es DERIVADA de placeNumber mediante formula.
- Admin coloca asientos; el sistema calcula y persiste los placeNumbers resultantes.

---

## 4. Alcance funcional del MVP (Opcion B - Drag & Drop)

### 4.1 Backend admin (creacion/edicion de clase)

1. Selector de capacidad total (rango 1-50).
2. Grid visual tipo tablero de ajedrez (filas x columnas, determinisitco, inmutable).
3. Panel lateral: Lista de asientos disponibles como OBJETOS arrastrable (1, 2, 3, ..., N).
4. **Drag & Drop**: Admin arrastra asiento numerado a una celda del grid.
5. Al soltar asiento en celda:
   - Sistema calcula (row, col) de la celda
   - Convierte a placeNumber mediante formula: placeNumber = (row * cols) + col + 1
   - Registra que asiento X esta en placeNumber Y
   - Asiento se posiciona visualmente en la celda del grid
   - Asiento desaparece de la lista "disponibles"
6. **Asientos NO colocados** en grid quedan como NO DISPONIBLES (se agregan a placesNotAvailable).
7. Acciones rapidas:
   - "Auto-llenar": Sistema coloca automaticamente todos asientos 1-N en orden row-by-row
   - "Limpiar": Remueve todos los asientos del grid, los retorna a lista disponibles
   - "Restaurar default": Recalcula basado en capacidad y recoloca segun formula
8. **Persistencia**: Guarda mapeo completo seat_positions {1: {row:0, col:0}, 2: {row:0, col:1}, ...}

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
3. **NUEVO**: `seat_positions` JSON para registrar donde esta cada asiento en el grid.

Ejemplo de persistencia Session:
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
    "4": {"row": 0, "col": 3},
    "5": {"row": 0, "col": 4},
    "6": {"row": 1, "col": 0},
    "10": {"row": 1, "col": 4},
    "15": {"row": 2, "col": 4}
  },
  "places_not_available": [11, 12, 13, 14, 16, 17, 18, 19, 20]
}
```

### 5.2 Mapeo bidireccional grid <-> asiento

Formula deterministica para validar/calcular posiciones:

- `placeNumber = (row * cols) + col + 1` (calcular numero desde posicion)
- `row = floor((placeNumber - 1) / cols)` (calcular fila desde numero)
- `col = (placeNumber - 1) % cols` (calcular columna desde numero)
- **Uso**: Validar que drag & drop esten dentro de rango [1..capacity]
- **Validacion**: Si admin suelta asiento fuera de rango, rechazar y retornar a lista

### 5.3 Dimension del grid y distribucion de asientos

1. Admin define capacidad; sistema calcula grid recomendado (aproximadamente rectangular).
   - Ejemplos: capacidad 20 → 4x5 o 5x4, capacidad 15 → 3x5 o 5x3
2. O admin puede forzar filas/columnas explicitamente si capacidad es atipica.
3. Validacion: `rows * cols >= capacity` (celdas excedentes quedan vacias, no reservables).
4. Al usar "Auto-llenar": se carga la ultima versionado de la distribucion.
5. **Calculo de capacidad disponible**: availableCapacity = (total colocados) - (ocupadas por reservas)

### 5.4 Compatibilidad con reservacion actual

Al guardar configuracion del grid:
- Extraer lista de asientos NO en seat_positions → agregar a `placesNotAvailable`
- Ejemplo: si capacidad=20 pero solo colocaste asientos 1-15 en grid, entonces placesNotAvailable=[16,17,18,19,20]
- Esto mantiene compatibilidad con validacion existente: `placeNumber NOT IN Session.placesNotAvailable`
- ReservationService ya rechaza reservaciones en placesNotAvailable, sin cambios requeridos

---

## 6. Contratos funcionales (propuesta)

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
   - **Nota (12/03/2026):** Al editar la distribución de asientos de una sesión específica, el admin tendrá dos opciones:
     - **Solo para esta clase**: Guarda la distribución solo en esa sesión. El diseño por defecto del salón (`ExerciseRoom.placesNotAvailable`) NO se modifica. Las demás clases no se ven afectadas.
     - **Establecer como distribución por defecto del salón**: Además de guardar en la sesión, actualiza `ExerciseRoom.placesNotAvailable` con el nuevo diseño. Las clases futuras que se creen en ese salón heredarán esta distribución. Las clases ya existentes **no** se modifican.
   - Esta opción se implementará como un checkbox/toggle en el formulario de edición de la distribución de asientos, **no** en el formulario general de la sesión.
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
