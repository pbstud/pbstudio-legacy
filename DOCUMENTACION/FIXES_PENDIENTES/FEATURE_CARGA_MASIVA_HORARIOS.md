# 📅 FEATURE: Carga Masiva de Horarios por Día

**Fecha de documentación:** 03/03/2026  
**Prioridad:** 🟠 IMPORTANTE  
**Impacto:** Operación diaria + UX backend  
**Timeline estimado:** 2-4 horas  
**Estado:** 📋 DOCUMENTADO - PENDIENTE IMPLEMENTACIÓN

---

## 📌 Resumen Ejecutivo

Actualmente, crear las clases de un día completo requiere ir una por una seleccionando:
- Horario (09:00, 10:00, 11:00, etc.)
- Salón
- Instructor
- Tipo (individual/grupal)

**Queremos:** Un botón que permita "clonar" un día existente (con todos sus horarios) a nuevas fechas, ahorrando tiempo y errores operacionales.

---

## ❌ Problema Actual

### Cómo se crea hoy un día de clases

1. Admin va a `/backend/session-day/new`
2. Selecciona UNA fecha
3. Se muestra formulario con campos para crear UNA sesión:
   - Horario (10:00 AM)
   - Salón (Sala A)
   - Instructor
   - Tipo
4. Hace clic en "Guardar"
5. Vuelve a `/backend/session-day/new` para la SIGUIENTE sesión del mismo día
6. **Repite pasos 2-5 de 6 a 8 veces** por día

### Problemas asociados

- ⏱️ **Lento:** 15-20 minutos para un día completo (8 sesiones)
- 🐛 **Propenso a errores:** Olvida salones, confunde horarios, repite datos
- 😤 **UX frustrante:** Muchos clicks, mucho scrolling, muchas confirmaciones
- 📊 **Operación diaria:** A veces cambia solo un instructor o un salón, pero debe recrear TODO

---

## ✅ Solución Propuesta

### Concepto: "Clonar un Día"

Permitir al admin:

1. **Seleccionar un día base que funcione bien** (ej: Lunes 25/Feb)
   - Tiene 8 sesiones configuradas
   - Horarios, salones e instructores ideales
   - Constructor de calendario diario que funciona

2. **Hacer clic en "Clonar para múltiples fechas"**
   - Se abre popup/modal con selector de fechas
   - Ej: "Aplicar a: Lunes 3 Marzo, Lunes 10 Marzo, Lunes 17 Marzo"

3. **Sistema copia TODAS las sesiones**
   - Mismos horarios
   - Mismos salones
   - Mismos instructores
   - Mismo tipo (individual/grupal)
   - **NUEVAS fechas** seleccionadas

4. **Resultado:**
   - En **< 1 minuto**, se crean 8 sesiones × 3 fechas = **24 sesiones**
   - Sin errores de configuración

---

## 🎯 Flujo Deseado en UI/UX

### Paso 1: Vista de Sesiones del Día
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
│  ✓ 17:00 PM - Yoga (Sala B)      [Instructor: María]  │
│  ✓ 18:00 PM - Zumba (Sala C)     [Instructor: Sofia]  │
│                                                          │
│  [+Agregar Sesión]  [Editar Día]  [CLONAR PARA...]   │
└────────────────────────────────────────────────────────┘
```

### Paso 2: Modal de Clonación
```
┌─ CLONAR DÍA ────────────────────────────────────────┐
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
│ Resumen:                                             │
│ • Horarios: 09:00 - 18:00 (8 sesiones)              │
│ • Salones: Sala A, B, C                              │
│ • Instructores: 4 asignados                          │
│                                                       │
│ [Cancelar]  [CLONAR AHORA]                           │
└───────────────────────────────────────────────────────┘
```

### Paso 3: Confirmación
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

## 🔧 Cómo Implementar (Vista Simple)

### Cambios Necesarios

#### 1️⃣ **Agregar botón en el template** (backend/session_day/edit.html.twig)
- En la lista de sesiones del día
- Botón llamado "Clonar para Múltiples Fechas"
- Que abra un modal con selector de fechas

#### 2️⃣ **Crear formulario de clonación** (nueva forma Symfony)
- Campo: "Fechas Destino" (múltiples checkboxes o date picker)
- Validar que no sea una fecha pasada
- Validar que no existan ya sesiones en esa fecha

#### 3️⃣ **Crear servicio/lógica de clonación** 
- Leer todas las sesiones del día ORIGEN
- Por cada fecha destino seleccionada:
  - Crear nueva Session para cada una
  - Copiar: horario, salón, instructor, tipo
  - **Cambiar:** dateStart (la fecha destino)

#### 4️⃣ **Agregar ruta POST en controller**
- `/backend/session-day/clone` (POST)
- Recibe: fecha origen, fechas destino
- Valida permisos (solo ADMIN)
- Ejecuta clonación
- Retorna resultado (cuántas sesiones se crearon)

#### 5️⃣ **Validaciones**
- ✓ Fecha origen debe tener sesiones
- ✓ Fechas destino no pueden ser pasadas
- ✓ Fechas destino no deben tener las mismas sesiones ya
- ✓ Solo admin puede clonar

---

## 💡 Casos de Uso

### Caso 1: Un Instructor Activo
```
Admin: "Mi instructor María dicta los lunes"
1. Crea lunes 25 Feb con 4 clases de María
2. Hace clic "Clonar para Múltiples Fechas"
3. Selecciona: 3 Marzo, 10 Marzo, 17 Marzo, 24 Marzo
4. ✅ Done: 20 clases de María creadas en 30 segundos
```

### Caso 2: Cambio Menor en un Patrón Existente
```
Admin: "Necesito el mismo día, pero cambiar un instructor"
1. Busca el lunes que funciona bien
2. Clic "Editar Día"
3. Cambia instructor en UNA sesión
4. Clic "Clonar para Múltiples Fechas"
   - Sistema copia la versión actualizada
5. ✅ Done: Aplica el cambio a múltiples fechas
```

### Caso 3: Temporada Alta (Ej: Enero)
```
Admin: "Necesito replicar la semana de diciembre para enero"
1. Selecciona cualquier lunes de diciembre (ya funcionando)
2. Clic "Clonar para Múltiples Fechas"
3. Selecciona: TODOS los lunes de enero (4-5 lunes)
4. ✅ Done: Calendario de enero completo en < 1 minuto
```

---

## 📊 Beneficios Esperados

| Aspecto | Antes | Después | Mejora |
|---------|-------|---------|--------|
| **Tiempo para un día (8 sesiones)** | 15-20 min | 1 min | **95% más rápido** |
| **Errores de configuración** | 2-3 por día | 0 | **100% reducción** |
| **Clics necesarios** | 40+ | 5 | **87% menos** |
| **Frustración del operador** | Alta | Nula | **Operación fluida** |
| **Tiempo setup mensual** | 5-8 horas | 30-45 min | **90% reducción** |

---

## 🔍 Consideraciones Técnicas (Resumen Simple)

### ¿Qué data se copia?
- Horario (timeStart)
- Salón (exerciseRoom)
- Instructor (staff)
- Tipo (type: individual/grupal)
- Capacidad (inherited from exerciseRoom)

### ¿Qué NO se copia?
- Reservaciones (no queremos copiar inscritos)
- Status (siempre comienza en OPEN)
- Números de lugar (se generan nuevos)

### ¿Qué se valida?
- Que la fecha destino no sea pasada
- Que no existan ya 8 sesiones en esa fecha para ese salón/horario
- Que el instructor esté disponible (validación opcional)

---

## ⚡ Ventajas de Esta Solución

✅ **Fácil de usar:** Un botón y seleccionar fechas  
✅ **Fácil de implementar:** ~100 líneas de código backend  
✅ **Sin dependencias:** Usa módulos Symfony existentes  
✅ **Segurazo:** Admin-only, no afecta usuarios  
✅ **Reversible:** Si se clonan mal, se eliminan manualmente  
✅ **Escalable:** Funciona para 1 fecha o 100 fechas  

---

## 📅 Propuesta de Timeline

- **Análisis:** 30 min (entender entidades Session/SessionDay)
- **Frontend (UI):** 45 min (modal + formulario)
- **Backend (Lógica):** 60 min (servicio + validaciones)
- **Testing:** 30 min (crear, validar, eliminar)
- **Documentación:** 15 min

**Total:** 2.5 - 3.5 horas

---

## 🎌 Estado Actual

- 📋 Documentado ✅
- 💾 Pendiente implementación
- 🧪 Sin testing
- 📦 No merged a main

---

## ✍️ Notas para Implementación

1. Revisar cómo se crea actualmente una sesión en `SessionDayController::new()`
2. Estudiar entidad `Session` (relaciones con ExerciseRoom, Staff, etc.)
3. Crear servicio reutilizable (no solo en controller)
4. Agregar feedback visual (progress/success messages)
5. Contemplar scenario de "clonar y editar después"
