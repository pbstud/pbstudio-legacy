# ISSUE #42: Actualizacion de capacidad con errores silenciados

**Estado:** Implementado en rama `fix/scrum-83-capacidad-errores-silenciados` - Pendiente QA  
**Prioridad:** Alta  
**Fecha detectado:** 11/03/2026  
**Ultima actualizacion:** 11/03/2026  
**Jira:** SCRUM-83 (tipo Error, ligada a epica SCRUM-32)

---

## 1. Resumen ejecutivo

Al editar un salon en backend, el sistema intenta actualizar en lote la capacidad de sesiones futuras asociadas al salon.  
Si ese update masivo falla, la excepcion queda silenciada y el flujo muestra exito al usuario.

Resultado: se puede guardar el salon y mostrar "El Salon ha sido actualizado", pero dejar sesiones con capacidad desactualizada sin evidencia operativa inmediata.

---

## 2. Contexto tecnico

Archivos involucrados:

1. `src/Repository/SessionRepository.php`
2. `src/Controller/Backend/ExerciseRoomController.php`

Flujo:

1. Admin edita salon en `/backend/exerciseroom/{id}/edit`.
2. Controller ejecuta `SessionRepository::updateCapacity($exerciseRoom)`.
3. `updateCapacity()` hace update DQL sobre sesiones futuras.
4. Si falla, entra en `catch` vacio y continua el proceso.
5. El controller hace `flush()` y muestra flash de exito.

---

## 3. Evidencia actual en codigo

En `SessionRepository::updateCapacity()` existe manejo de excepcion silencioso:

```php
try {
    // update masivo de capacidades
    $qb->getQuery()->execute();
} catch (\Exception $e) {
    // Nothing
}
```

Esto confirma que el Issue #42 sigue vigente en el estado actual del codigo.

---

## 4. Impacto

1. Riesgo de inconsistencia entre capacidad del salon y capacidad de sesiones futuras.
2. Posible sobreventa/overbooking por datos de disponibilidad no alineados.
3. Soporte sin trazabilidad: no hay log ni alerta de que el update masivo fallo.
4. UX engañosa: se muestra exito aunque una parte critica haya fallado.

---

## 5. Diferenciacion respecto al fix de Carga Masiva

Aunque el incidente de Carga Masiva (403/404) fue resuelto, ese fix corresponde a parseo/route handling en `SessionDayController` y no corrige el `catch` silencioso de `SessionRepository::updateCapacity()`.

Conclusion: Issue #42 no queda cubierto por el fix de Carga Masiva.

---

## 6. Plan de solucion propuesto

### Fase 1 - Observabilidad minima (obligatoria)

1. Registrar excepcion en log con contexto:
   - `exerciseRoomId`
   - capacidad objetivo
   - timestamp
   - mensaje y stacktrace

2. Evitar catch vacio.

### Fase 2 - Feedback funcional (obligatoria)

1. Hacer que `updateCapacity()`:
   - lance excepcion controlada, o
   - retorne resultado (`bool`) indicando exito/fallo.

2. En `ExerciseRoomController::edit()`:
   - mostrar flash `danger` cuando falle update masivo,
   - evitar mensaje de exito total cuando hay fallo parcial,
   - definir comportamiento (abort total o guardado parcial informado).

### Fase 3 - Robustez de datos (recomendada)

1. Revisar si la actualizacion debe ir en transaccion unica para mantener atomicidad.
2. Validar formula de `availableCapacity` cuando hay `placesNotAvailable`.
3. Agregar test automatizado que cubra fallo en update masivo.

---

## 7. Criterios de aceptacion

1. Ninguna excepcion de `updateCapacity()` queda silenciosa.
2. Cualquier error queda registrado en `dev.log` / `prod.log` con contexto.
3. El backend informa al admin cuando el update masivo no se pudo aplicar.
4. No se muestra exito total cuando existe fallo en la sincronizacion de capacidades.
5. Casos de prueba manual y automatizada validados.

---

## 8. Pruebas recomendadas

1. Simular fallo de query en `updateCapacity()` y verificar log.
2. Editar salon y confirmar flash de error controlado.
3. Verificar que capacidades de sesiones futuras no quedan en estado ambiguo sin alerta.
4. Ejecutar flujo exitoso y validar que se mantiene el mensaje de exito normal.

---

## 9. Implementacion aplicada (11/03/2026)

1. `SessionRepository::updateCapacity()`:
   - Se elimino el `catch` silencioso.
   - Ahora retorna el numero de sesiones actualizadas (`int`).
   - Cualquier error se propaga al controller.

2. `ExerciseRoomController::edit()`:
   - Se agrego manejo `try/catch` para la sincronizacion de capacidad.
   - Se registra log de error estructurado con contexto (`exerciseRoomId`, capacidad, lugares no disponibles, clase/mensaje de excepcion).
   - Se muestra flash `danger` al usuario cuando falla la sincronizacion.
   - Se evita confirmar exito cuando el update masivo falla.

3. Logging de exito:
   - Se registra cuantas sesiones futuras fueron sincronizadas correctamente.

## 10. Estado actual

- Ticket Jira creado: SCRUM-83.
- Fix implementado en rama tecnica.
- Pendiente QA funcional en backend (`/backend/exerciseroom/{id}/edit`).

