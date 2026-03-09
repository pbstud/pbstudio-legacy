# � ISSUE: Error en Carga Masiva de Horarios (Planeamiento Masivo)

**Fecha de documentación:** 03/03/2026  
**Actualización:** 09/03/2026  
**Prioridad:** 🔴 ALTA  
**Impacto:** Operación diaria bloqueada + UX backend  
**Timeline estimado:** 1-2 horas (debug + fix)  
**Estado:** 🔴 BUG REPORTADO - FUNCIONALIDAD IMPLEMENTADA PERO DA ERROR

---

## 📌 Resumen Ejecutivo

La funcionalidad de **planeamiento masivo** (clonar un día completo de clases a múltiples fechas) **YA ESTÁ IMPLEMENTADA** en el sistema, pero **arroja error** cuando se intenta usar.

**Síntoma:** Admin intenta usar la función de clonar/planear masivamente horarios y el sistema devuelve error en lugar de ejecutar la operación.

**Objetivo:** Identificar y corregir el error que impide que esta funcionalidad opere correctamente.

---

## 🔴 Problema Actual

### Comportamiento Esperado (Diseñado)

1. Admin selecciona un día base con sesiones configuradas
2. Hace clic en botón "Clonar para múltiples fechas" / "Planeamiento masivo"
3. Selecciona fechas destino (ej: próximos 4 lunes)
4. Sistema copia todas las sesiones del día base a las nuevas fechas
5. ✅ Confirmación: "X sesiones creadas en Y fechas"

### Comportamiento Real (Error)

1. Admin selecciona un día base con sesiones configuradas
2. Hace clic en botón de planeamiento masivo
3. Selecciona fechas destino
4. Hace clic en "Ejecutar" / "Confirmar"
5. ❌ **Sistema retorna ERROR**
6. No se crean las sesiones
7. Admin debe hacer el proceso manual (1 por 1)

### Impacto del Bug

- ⏱️ **Operación bloqueada:** Funcionalidad diseñada para ahorrar tiempo NO funciona
- 🐛 **Fallback manual:** Admin debe crear 6-8 sesiones × N fechas manualmente
- 😤 **UX frustrante:** Feature visible pero rota
- 📊 **Regresión operativa:** Volver al flujo lento original

---

## 🔍 Análisis del Error

### Ubicación de la Funcionalidad

**La funcionalidad YA está implementada en:**
- Controller: `src/Controller/Backend/SessionDayController.php` (probable)
- Template: `templates/backend/session_day/*.html.twig` (tiene botón de planeamiento masivo)
- Ruta: `/backend/session-day/clone` o similar (verificar en `config/routes/`)

### Hipótesis de Causa Raíz

Posibles causas del error (verificar en logs):

1. **Error de validación de datos**
   - Fechas destino en formato incorrecto
   - Validación de fechas pasadas fallando
   - Conflicto de constraint único (sesión ya existe en fecha destino)

2. **Error de entidad/relaciones**
   - Clonación de relaciones M:N incorrecta
   - ExerciseRoom/Staff no persistido antes de flush
   - Session sin BranchOffice asociado

3. **Error de permisos**
   - Token CSRF inválido/expirado
   - Rol insuficiente (aunque admin tenga acceso al botón)

4. **Error de transacción DB**
   - Constraint de integridad violado
   - Index único duplicado (session + dateStart + placeNumber)
   - Foreign key constraint fallando

### Pasos para Debugging

1. **Reproducir el error**
   ```
   - Login como admin
   - Ir a día con sesiones existentes
   - Intentar clonar a nueva fecha
   - Capturar error exacto (pantalla + logs)
   ```

2. **Revisar logs**
   ```bash
   tail -f var/log/dev.log | grep -i "error\|exception\|failed"
   ```

3. **Revisar código del controller**
   - Método que maneja POST de clonación
   - Validaciones pre-persist
   - Manejo de excepciones

4. **Verificar datos de prueba**
   - Fecha destino válida (futura)
   - Salones/instructores existen en BD
   - No hay sesiones duplicadas en fecha destino

---

## 🎯 Flujo Diseñado (Ya Implementado en UI)

La interfaz **ya existe** en el sistema pero el proceso falla en el paso final:

### Paso 1: Vista de Sesiones del Día ✅ EXISTE
```
┌─ Lunes 25 Febrero 2026 ────────────────────────────────┐
│                                                          │
│  Sesiones Creadas:                                     │
│  ✓ 09:00 AM - Yoga (Sala A)      [Instructor: María]  │
│  ✓ 10:00 AM - Pilates (Sala B)   [Instructor: Juan]   │
│  ✓ 11:00 AM - Zumba (Sala A)     [Instructor: Sofia]  │
│  ✓ 14:00 PM - Yoga (Sala B)      [Instructor: María]  │
│  ✓ 15:00 PM - Crossfit (Sala C)  [Instructor: Carlos] │
│  ✓ 16:00 PM - Pilates (Sala A)   [Instructor: Juan]   │
│  ✓ 17:00 PM - Yoga (Sala B)      [Instructor:  María]  │
│  ✓ 18:00 PM - Zumba (Sala C)     [Instructor: Sofia]  │
│                                                          │
│  [+Agregar Sesión]  [Editar Día]  [CLONAR/PLANEAR]   │ ✅ Botón existe
└────────────────────────────────────────────────────────┘
```

### Paso 2: Modal de Clonación ✅ EXISTE
```
┌─ CLONAR DÍA / PLANEAMIENTO MASIVO ──────────────────┐
│                                                       │
│ Se van a crear 8 sesiones en cada fecha             │
│                                                       │
│ Selecciona las fechas destino:                       │
│ ☐ Lunes, 3 Marzo 2026                               │
│ ☐ Lunes, 10 Marzo 2026                              │
│ ☐ Lunes, 17 Marzo 2026                              │
│ ☐ Lunes, 24 Marzo 2026                              │
│ ☐ Lunes, 31 Marzo 2026                              │
│                                                       │
│ [Cancelar]  [EJECUTAR]                               │ ✅ Formulario existe
└───────────────────────────────────────────────────────┘
```

### Paso 3: Error en Ejecución ❌ AQUÍ FALLA
```
❌ ERROR

[Mensaje de error específico - por determinar]

Posibles mensajes:
• "Error al crear sesiones"
• "Error de validación"
• "500 Internal Server Error"
• Pantalla blanca / Exception
```

**Resultado esperado (post-fix):**
```
✅ ¡Clonación completada!

Se crearon:
• 40 sesiones (8 por día × 5 fechas)
• Capacidad total: 320 lugares
• Instructores asignados: 4
• Tiempo: < 2 segundos

Ver calendario → Volver
```

---

## 🔧 Plan de Corrección

### Paso 1: Identificar Error Exacto

1. Reproducir el error con admin en ambiente de desarrollo
2. Capturar mensaje de error completo (pantalla + var/log/dev.log)
3. Identificar stack trace y línea exacta donde falla
4. Verificar variables/datos justo antes de la falla

### Paso 2: Revisar Código Existente

Ubicar y revisar:
- `SessionDayController::clone()` o método similar
- Validaciones de formulario de clonación
- Lógica de creación de nuevas sesiones
- Persist/flush de entidades relacionadas

### Paso 3: Corregir Bug Identificado

Posibles fixes según causa raíz:

#### Si es validación de datos:
```php
// Asegurar formato correcto de fechas
$targetDate = \DateTime::createFromFormat('Y-m-d', $dateString);
if (!$targetDate || $targetDate < new \DateTime('today')) {
    throw new \InvalidArgumentException('Fecha inválida o pasada');
}
```

#### Si es constraint de BD:
```php
// Verificar que no existan sesiones duplicadas antes de crear
$existing = $sessionRepo->findBy([
    'dateStart' => $targetDate,
    'exerciseRoom' => $session->getExerciseRoom(),
    'timeStart' => $session->getTimeStart()
]);
if ($existing) {
    $this->addFlash('warning', "Ya existe sesión en esa fecha/horario");
    continue; // Skip esta combinación
}
```

#### Si es relación M:N:
```php
// Clonar sesión correctamente
$newSession = (new Session())
    ->setDateStart($targetDate)
    ->setTimeStart($originalSession->getTimeStart())
    ->setExerciseRoom($originalSession->getExerciseRoom()) // Reusar entidad existente
    ->setStaff($originalSession->getStaff())
    ->setBranchOffice($originalSession->getBranchOffice());
    
$em->persist($newSession);
// flush después del loop, no dentro
```

### Paso 4: Testing

1. Probar clonación de 1 día a 1 fecha (caso simple)
2. Probar clonación de 1 día a 5 fechas (caso normal)
3. Probar error controlado (fecha ya ocupada)
4. Verificar que sesiones creadas tienen datos correctos
5. Verificar que no se crean reservaciones fantasma

---

## 💡 Casos de Uso (Post-Fix)

### Caso 1: Un Instructor Activo
```
Admin: "Mi instructor María dicta los lunes"
1. Crea lunes 25 Feb con 4 clases de María ✅
2. Hace clic "Clonar para Múltiples Fechas" ✅
3. Selecciona: 3 Marzo, 10 Marzo, 17 Marzo, 24 Marzo ✅
4. Clic "Ejecutar" ❌ ERROR ACTUAL
5. (Después del fix) ✅ 20 clases de María creadas en 30 segundos
```

### Caso 2: Cambio Menor en un Patrón Existente
```
Admin: "Necesito el mismo día, pero cambiar un instructor"
1. Busca el lunes que funciona bien ✅
2. Clic "Editar Día" ✅
3. Cambia instructor en UNA sesión ✅
4. Clic "Clonar para Múltiples Fechas" ✅
5. Sistema intenta copiar ❌ ERROR ACTUAL
6. (Después del fix) ✅ Aplica el cambio a múltiples fechas
```

### Caso 3: Temporada Alta (Ej: Enero)
```
Admin: "Necesito replicar la semana de diciembre para enero"
1. Selecciona cualquier lunes de diciembre ✅
2. Clic "Clonar para Múltiples Fechas" ✅
3. Selecciona: TODOS los lunes de enero (4-5 lunes) ✅
4. Sistema falla ❌ ERROR ACTUAL
5. (Después del fix) ✅ Calendario de enero completo en < 1 minuto
```

---

## 📊 Impacto Esperado del Fix

| Aspecto | Estado Actual (Bug) | Post-Fix | Mejora |
|---------|---------------------|----------|--------|
| **Crear 8 sesiones para 5 fechas** | ❌ Error - Fallback manual (2h) | ✅ 1-2 min | **98% más rápido** |
| **Errores de configuración** | Bug bloquea + errores manuales | 0 | **100% reducción** |
| **Feature implementada** | Visible pero rota | ✅ Funcional | **Restauración completa** |
| **Frustración del operador** | Alta (feature promete pero falla) | Baja | **UX restaurada** |
| **ROI de desarrollo** | ❌ Feature inútil | ✅ Feature productiva | **Valor recuperado** |

**Dato crítico:** El código YA fue desarrollado e invertido, solo necesita corrección del bug para entregar valor.

---

## 🔍 Timeline Estimado para Fix

- **Reproducción del error:** 15 min
- **Análisis de logs/stack trace:** 15 min
- **Identificación de causa raíz:** 20 min
- **Implementación del fix:** 30 min
- **Testing (casos normales + edge cases):** 20 min
- **Documentación del cambio:** 10 min

**Total:** 1.5 - 2 horas

---

## 🎌 Estado Actual

- 🔴 **Bug reportado:** Funcionalidad implementada pero genera error
- 💾 **Código existe:** Controller/template/ruta ya implementados
- 🧪 **Pendiente debug:** Necesita reproducción y análisis de error
- 📦 **No bloqueante de main:** Admin puede usar método manual mientras tanto

---

## ✍️ Información Necesaria para Debug

Para resolver este issue de manera eficiente, necesito:

1. **Error exacto mostrado en pantalla** (screenshot o mensaje de error)
2. **Logs de var/log/dev.log** del momento del error (últimas 50 líneas)
3. **Ruta exacta** donde está el botón de planeamiento masivo
4. **Datos de prueba usados:**
   - Fecha origen (día a clonar)
   - Fechas destino seleccionadas
   - Número de sesiones en día origen

5. **Controller/método exacto** que maneja esta funcionalidad (revisar `config/routes/`)

---

## 📋 Checklist de Validación Post-Fix

Una vez corregido el bug, validar:

- [ ] Clonar 1 día con 1 sesión a 1 fecha funciona
- [ ] Clonar 1 día con 8 sesiones a 1 fecha funciona
- [ ] Clonar 1 día a 5 fechas futuras funciona
- [ ] Error controlado si fecha destino ya tiene sesiones
- [ ] Error controlado si fecha destino es pasada
- [ ] Mensaje de éxito muestra cantidad correcta de sesiones creadas
- [ ] Sesiones creadas tienen todos los datos correctos (sala, instructor, horario)
- [ ] No se crean reservaciones/lugares duplicados
- [ ] Logs no muestran warnings/errores después de clonación exitosa

---

## 🛠️ Archivos Involucrados

### Controller (donde probablemente falla)
- `src/Controller/SessionDayController.php` o `src/Controller/Backend/SessionDayController.php`
  - Método de clonación/planeamiento masivo
  - Buscar acciones: `clone`, `mass`, `plan`, `duplicate`

### Entity
- `src/Entity/Session.php` - Entidad de sesiones
- `src/Entity/SessionDay.php` - Configuración diaria (si existe)
- `src/Entity/ExerciseRoom.php` - Relación con salas
- `src/Entity/Staff.php` - Relación con instructores

### Repository
- `src/Repository/SessionRepository.php` - Queries de consulta/verificación

### Templates
- `templates/backend/session_day/edit.html.twig` o similar
  - Botón "CLONAR/PLANEAR" 
  - Modal de selección de fechas

### Formularios
- `src/Form/SessionCloneType.php` (posible nombre)
  - Validaciones de fechas objetivo

### Routes
- `config/routes/backend.yaml` o `config/routes.yaml`
  - Ruta POST para clonación: `/backend/session-day/clone` (verificar nombre exacto)

---

## 📝 Notas del Análisis

### Verificaciones Necesarias

1. **¿Cuál es el mensaje de error exacto?**
   - Reproducir el bug y capturar output completo
   - Revisar var/log/dev.log durante la ejecución

2. **¿Dónde está el código de clonación?**
   - Buscar en SessionDayController o SessionController
   - Identificar método que maneja el POST del formulario

3. **¿Qué validaciones fallan?**
   - Constraint de BD (UNIQUE, NOT NULL, FK)
   - Validación de Symfony Forms
   - Lógica de negocio custom

4. **¿Cómo debería funcionar?**
   - Clonar propiedades de sesión (hora, sala, instructor)
   - Cambiar solo la fecha de destino
   - Crear múltiples sesiones en un solo hit

---

## 🔄 Próximos Pasos

1. **INMEDIATO:** Reproducir el error en dev y capturar logs completos
2. **DEBUG:** Identificar línea exacta del fallo con stack trace
3. **ANÁLISIS:** Determinar causa raíz (validación, constraint, lógica)
4. **FIX:** Implementar corrección según diagnóstico
5. **TESTING:** Validar que clonación funciona en casos simples y complejos
6. **REFACTOR (opcional):** Mejorar UX con mensajes claros y manejo de errores
7. **DEPLOY:** Merge a main una vez validado
8. **COMUNICAR:** Informar a admins que funcionalidad ya está operativa

---

## 📌 Referencias

- Epic en Jira: **[Por crear]**
- Issue en Jira: **[Por crear]**
- Prioridad: **🔴 ALTA** (funcionalidad core del admin)
- Impacto: Administradores no pueden planear horarios mensualmente (trabajo manual × 4)
- Tipo: **BUG** (funcionalidad implementada pero rota)
- Reporte: "Da error al intentar planeamiento masivo"
- Documento de arquitectura: [DOCUMENTACION/ARQUITECTURA_FLUJO_DATOS.md](../ARQUITECTURA_FLUJO_DATOS.md)
- Entidades relacionadas: Session, ExerciseRoom, Staff, BranchOffice
