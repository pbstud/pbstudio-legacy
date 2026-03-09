# ISSUE: Cambio de Reservación - No aparecen clases disponibles

**Estado:** Pendiente  
**Prioridad:** Alta  
**Fecha Detectado:** 09 de Marzo de 2026  
**Reportado por:** Usuario (pruebas funcionales)  
**Jira:** SCRUM-23  
**Sprint:** Sprint 1 (9-16 Marzo 2026)  
**⚠️ BLOQUEANTE:** Requiere confirmación del modelo de negocio con Director General

## Descripción del Problema

Cuando un usuario intenta cambiar una reservación existente (en lugar de cancelarla), el sistema no muestra clases alternativas disponibles para realizar el cambio, mostrando el mensaje "Lo sentimos, no hay clases disponibles."

## ⚠️ CONFIRMACIÓN REQUERIDA CON DIRECTOR GENERAL

Antes de implementar el fix técnico, se requiere validar el MODELO DE NEGOCIO con el Director General:

### Preguntas para el DG:

1. **Rango de fechas:** ¿Está correcto mostrar clases de los próximos 30 días para cambiar?
   - ¿O debería ser 7 días? ¿15 días? ¿60 días?
   
2. **Restricciones de cambio:** ¿El usuario puede cambiar a CUALQUIER clase disponible o hay restricciones?
   - ¿Solo clases de la misma disciplina? (Ej: Yoga → solo Yoga)
   - ¿Solo en la misma sucursal?
   - ¿Solo del mismo paquete/tipo?
   
3. **Límite de cambios:** ¿Cuántas veces puede un usuario cambiar su reservación?
   - ¿Ilimitado?
   - ¿Máximo 1 cambio por reservación?
   - ¿Máximo N cambios por semana/mes?
   
4. **Ventana de tiempo:** ¿El usuario puede cambiar hasta cuándo?
   - ¿Hasta 2h antes de la clase original?
   - ¿Hasta 24h antes?
   - ¿Sin límite?

5. **Costo del cambio:** ¿El cambio de reservación tiene costo adicional?
   - ¿Gratuito?
   - ¿Cargo por cambio?

### Impacto de la Decisión

La respuesta del DG determinará:
- Lógica de filtrado en `SessionRepository::getForChange()`
- Validaciones adicionales en `ProfileController::reservationChange()`
- Mensajes al usuario sobre restricciones
- Posibles cambios en la UI

---

## Comportamiento Actual

1. Usuario ve sus próximas clases
2. Selecciona opción "Cambiar" en una reservación
3. Sistema carga la página de cambio pero **no muestra ninguna clase disponible**
4. Muestra mensaje de error: "Lo sentimos, no hay clases disponibles"

## Causa Raíz

El método `SessionRepository::getForChange()` tiene una consulta incorrecta que solo busca sesiones del **mismo día** (using `=` operator):

```php
// Línea 256 en SessionRepository.php
->where('s.dateStart = :dateStart')  // ❌ PROBLEMA: solo busca el mismo día
```

Cuando debería buscar sesiones **futuras** (próximos 30 días).

## Ubicación del Código

**Archivo:** `src/Repository/SessionRepository.php`  
**Método:** `getForChange(\DateTimeInterface $dateStart): array`  
**Línea:** 246-265

## Solución Propuesta

Modificar la consulta para buscar sesiones en un rango de fechas (próximos 30 días):

```php
public function getForChange(\DateTimeInterface $dateStart): array
{
    // Calcular fecha límite (30 días desde hoy)
    $dateEnd = \DateTime::createFromInterface($dateStart)->modify('+30 days');
    
    $qb = $this->createQueryBuilder('s');
    $qb
        ->addSelect('e', 'd', 'i', 'ip', 'b')
        ->join('s.exerciseRoom', 'e')
        ->join('s.discipline', 'd')
        ->join('s.instructor', 'i')
        ->join('i.profile', 'ip')
        ->join('e.branchOffice', 'b')
        ->where('s.dateStart >= :dateStart')        // ✅ Desde hoy
        ->andWhere('s.dateStart <= :dateEnd')       // ✅ Hasta +30 días
        ->andWhere('s.status = :statusOpen')
        ->orderBy('s.dateStart', 'ASC')             // ✅ Ordenar por fecha
        ->addOrderBy('s.timeStart', 'ASC')          // ✅ Luego por hora
        ->addOrderBy('s.branchOffice', 'ASC')
        ->setParameter('dateStart', $dateStart)
        ->setParameter('dateEnd', $dateEnd)         // ✅ Nuevo parámetro
        ->setParameter('statusOpen', Session::STATUS_OPEN)
    ;

    return $qb->getQuery()->getResult();
}
```

## Cambios Necesarios

### 1. Archivo: `src/Repository/SessionRepository.php`

**Cambiar:**
```php
->where('s.dateStart = :dateStart')
->andWhere('s.status = :statusOpen')
->orderBy('s.timeStart')
->addOrderBy('s.branchOffice')
->setParameter('dateStart', $dateStart)
->setParameter('statusOpen', Session::STATUS_OPEN)
```

**Por:**
```php
$dateEnd = \DateTime::createFromInterface($dateStart)->modify('+30 days');

// ...

->where('s.dateStart >= :dateStart')
->andWhere('s.dateStart <= :dateEnd')
->andWhere('s.status = :statusOpen')
->orderBy('s.dateStart', 'ASC')
->addOrderBy('s.timeStart', 'ASC')
->addOrderBy('s.branchOffice', 'ASC')
->setParameter('dateStart', $dateStart)
->setParameter('dateEnd', $dateEnd)
->setParameter('statusOpen', Session::STATUS_OPEN)
```

## Impacto

- **Usuarios Afectados:** Todos los usuarios que intentan cambiar una reservación
- **Funcionalidad Bloqueada:** Sistema de cambio de reservaciones completamente inoperativo
- **Workaround Actual:** Los usuarios deben cancelar y crear una nueva reservación (perdiendo el beneficio del cambio)

## Archivos Relacionados

- `src/Repository/SessionRepository.php` - Contiene el método defectuoso
- `src/Controller/ProfileController.php` - Método `reservationChange()` que usa `getForChange()`
- `templates/profile/reservation_change.html.twig` - Vista que mostraría las clases

## Testing Necesario

Después de implementar el fix:

1. ✅ Verificar que aparezcan clases de los próximos 30 días
2. ✅ Confirmar que NO aparezca la clase actual (que se está cambiando)
3. ✅ Verificar que solo aparezcan clases con status OPEN
4. ✅ Confirmar ordenamiento correcto (fecha, hora, sucursal)
5. ✅ Probar cambio completo: seleccionar nueva clase y confirmar

## Notas Adicionales

- El filtrado adicional en `ProfileController::reservationChange()` (línea 251-254) ya excluye:
  - Sesiones en el pasado
  - La sesión actual de la reservación
- El límite de 30 días es razonable para mantener el rendimiento de la consulta
- Considerar agregar índice en `(dateStart, status)` si la tabla crece mucho

## Referencias

- **Jira:** [SCRUM-23](https://devpbstudio.atlassian.net/browse/SCRUM-23)
- **Sprint:** Sprint 1 (9-16 Marzo 2026)
- **Conversación:** 09 de Marzo 2026
- **Log analizado:** No hay INSERT a session_audit porque el flujo nunca llega a completarse
- **Controller:** ProfileController::reservationChange() línea 224
- **Repository:** SessionRepository::getForChange() línea 246-265

---

## 🚨 SIGUIENTE PASO

**ANTES DE IMPLEMENTAR:** Agendar reunión con Director General para validar modelo de negocio de cambio de reservaciones.
