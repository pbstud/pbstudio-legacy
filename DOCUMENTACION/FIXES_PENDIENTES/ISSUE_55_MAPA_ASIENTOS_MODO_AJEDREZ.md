# ISSUE #55: Mapa de Asientos en Modo Ajedrez Editable (MVP Opcion B)

**Fecha de documentacion:** 11/03/2026  
**Prioridad:** Alta  
**Estado:** Documentado - SCRUM-84 creado, pendiente implementacion  
**Jira:** SCRUM-84 (11/03/2026)

---

## 1. Resumen ejecutivo

Se define como decision tecnica implementar primero un mapa de asientos en modo tabla de ajedrez editable por celdas (Opcion B), y dejar la experiencia totalmente editable (Opcion A) como evolucion posterior.

Objetivo del MVP:

1. Permitir al admin configurar disponibilidad visual de lugares al crear/editar clase.
2. Mantener compatibilidad total con el modelo actual de reservacion por numero de asiento.
3. Reducir riesgo de regresiones operativas en reservas, cambios y cancelaciones.

---

## 2. Decision de arquitectura

### 2.1 Opcion elegida (ahora)

**Opcion B - Grid tipo ajedrez editable por celdas**

1. El admin define capacidad y ve un grid (filas/columnas).
2. Cada celda corresponde a un numero de asiento interno.
3. El admin activa/desactiva celdas para disponibilidad.
4. Se guarda usando estructuras ya existentes.

### 2.2 Opcion diferida (futuro)

**Opcion A - Editable total libre**

1. Drag and drop de asientos con coordenadas libres.
2. Multiples layouts por salon con edicion avanzada.
3. Se implementa en una fase posterior sin romper compatibilidad.

---

## 3. Base tecnica actual (compatibilidad obligatoria)

El sistema hoy ya opera con asientos numericos y capacidad calculada:

1. `Reservation.placeNumber` es entero (`SMALLINT`).
2. `Session.placesNotAvailable` guarda lugares no disponibles como lista.
3. `Session.exerciseRoomCapacity` y `Session.availableCapacity` sostienen el conteo operativo.

Implicacion:

- El MVP debe seguir usando numero de asiento como identidad canonica.
- El mapa visual es una capa de presentacion/control sobre esa identidad.

---

## 4. Alcance funcional del MVP (Opcion B)

### 4.1 Backend admin (creacion/edicion de clase)

1. Selector de capacidad total.
2. Grid visual de asientos con indexacion deterministica.
3. Click en celda para alternar estado disponible/no disponible.
4. Acciones rapidas:
   - Auto-llenar (todos disponibles)
   - Limpiar (todos no disponibles)
   - Restaurar default segun capacidad
5. Guardado de configuracion de la clase.

### 4.2 Frontend usuario (reservacion)

1. Render de mapa segun configuracion guardada.
2. Estados visuales minimos:
   - Disponible
   - Ocupado por otro usuario
   - Seleccionado por el usuario
   - Mi asiento actual (si aplica)
3. Solo asientos disponibles pueden seleccionarse.

### 4.3 Fuera de alcance en MVP

1. Arrastrar asientos libremente.
2. Rotacion/escala/manual canvas libre.
3. Multiples plantillas avanzadas por salon con versionado completo.

---

## 5. Modelo de datos propuesto para MVP (sin romper lo actual)

## 5.1 Persistencia principal

Se mantiene la persistencia operativa actual:

1. `placeNumber` como identificador de asiento reservado.
2. `placesNotAvailable` para asientos bloqueados/no habilitados.

### 5.2 Mapeo grid <-> asiento

Formula deterministica (0-based para UI, 1-based para asiento):

- `placeNumber = (row * cols) + col + 1`
- `row = floor((placeNumber - 1) / cols)`
- `col = (placeNumber - 1) % cols`

### 5.3 Dimension del grid

1. Se calcula por capacidad (aprox. rectangular balanceado), o
2. Se permite configurar filas/columnas con validacion `rows * cols >= capacity`.

### 5.4 Recomendacion de compatibilidad

Si `rows * cols > capacity`, las celdas excedentes deben marcarse como inexistentes/no reservables.

---

## 6. Contratos funcionales (propuesta)

### 6.1 Payload de configuracion (admin)

```json
{
  "capacity": 20,
  "grid": {
    "rows": 4,
    "cols": 5
  },
  "disabled_places": [3, 7, 8],
  "mode": "chessboard_v1"
}
```

### 6.2 Respuesta para render frontend

```json
{
  "session_id": 123,
  "mode": "chessboard_v1",
  "rows": 4,
  "cols": 5,
  "capacity": 20,
  "disabled_places": [3, 7, 8],
  "occupied_places": [2, 5],
  "my_places": [9]
}
```

---

## 7. Validaciones clave

1. No permitir guardar `capacity <= 0`.
2. No permitir `rows <= 0` o `cols <= 0`.
3. `disabled_places` debe estar dentro de `1..capacity`.
4. No reservar asientos en `disabled_places`.
5. Mantener reglas existentes de concurrencia/duplicidad de asiento.

---

## 8. Ruta evolutiva a Opcion A (editable total)

Para evolucionar sin romper MVP:

1. Mantener `placeNumber` como ID canonico de asiento.
2. Agregar metadato de layout avanzado en nueva estructura (`layout_json` versionado o tabla dedicada).
3. Introducir `layout_mode`:
   - `chessboard_v1` (MVP)
   - `freeform_v1` (futuro)
4. Migracion incremental:
   - Si no existe layout avanzado, render por formula de grid.
   - Si existe `freeform_v1`, render por coordenadas.

---

## 9. Criterios de aceptacion

1. Admin puede configurar disponibilidad de lugares desde panel visual en creacion/edicion.
2. Configuracion persiste y se refleja en frontend de reservacion.
3. No hay ruptura de flujo actual de reservacion por `placeNumber`.
4. Asientos bloqueados no pueden reservarse.
5. Estados visuales se muestran correctamente (disponible, ocupado, seleccionado, mi asiento).
6. Cobertura minima de pruebas manuales y automatizadas definida.

---

## 10. Plan de pruebas

### 10.1 Manual

1. Crear clase con capacidad 20, bloquear 5 lugares y guardar.
2. Abrir reservacion y verificar que los 5 lugares no son seleccionables.
3. Reservar lugar disponible y validar persistencia del `placeNumber`.
4. Editar clase y cambiar bloqueos, validar comportamiento posterior.

### 10.2 Automatizadas

1. Test de mapping `row/col <-> placeNumber`.
2. Test de validacion de payload (rangos y consistencia).
3. Test de rechazo de reservacion en asiento bloqueado.
4. Test de compatibilidad con reglas de doble asiento/concurrencia existentes.

---

## 11. Riesgos y mitigaciones

1. **Riesgo:** desalineacion entre grid y `placeNumber`.  
   **Mitigacion:** mapping deterministico + tests unitarios.

2. **Riesgo:** inconsistencia de capacidad vs celdas.  
   **Mitigacion:** validacion estricta `rows * cols >= capacity` y celdas excedentes inactivas.

3. **Riesgo:** regresion en reservas existentes.  
   **Mitigacion:** no cambiar identidad canonica de asiento ni flujo de reserva base.

---

## 12. Fases de implementacion sugeridas

### Fase 1 (MVP Opcion B)

1. UI grid editable por celdas en backend.
2. Persistencia compatible con `placesNotAvailable`.
3. Render frontend por grid + estados visuales.

### Fase 2 (hardening)

1. Plantilla por salon (default reusable).
2. Mejoras de UX (atajos, batch toggle, filtros de vista).
3. Telemetria de errores/uso de configuracion.

### Fase 3 (Opcion A futura)

1. Layout avanzado editable total.
2. Versionado de layout y migracion transparente.
3. Convivencia `chessboard_v1` y `freeform_v1`.

---

## 13. Decision final

Se aprueba iniciar con **Opcion B (modo ajedrez editable)** por menor riesgo y tiempo de entrega, preservando una ruta limpia para evolucionar a **Opcion A (editable total)** cuando el producto lo requiera.
