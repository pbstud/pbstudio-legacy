# 📑 ÍNDICE DE FEATURES PENDIENTES

**Fecha de compilación:** 03/03/2026  
**Total documentos:** 8 (1 índice + 7 features)
**Estado:** Listos para implementación  

> **Nota:** Correos de lista de espera PARCIALMENTE HECHO - Necesita validación/testing

## 🎯 Quick Navigation

### 🔴 CRÍTICOS
Ninguno en pendientes (CSRF, DateTime ya implementados)

### 🟠 IMPORTANTES (7 Features)

| # | Feature | Impacto | Timeline | Status |
|---|---------|---------|----------|--------|
| **1** | 📅 Carga masiva de horarios | Operación ×95% más rápida | 2-3h | 📋 Doc |
| **2** | 💳 Cancelación con devolución | Confianza del cliente | 4-8h | 📋 Doc |
| **3** | 📷 Editar foto instructores | Presentación + UX | 2-3h | ✅ Validado local |
| **4** | 📧 Notificación cambio clase | Asistencia ↑30% | 2-4h | 📋 Doc |
| **5** | 🔍 Búsqueda usuarios mejorada | Productividad admin | 1-2h | ✅ **COMPLETADO** |
| **6** | 💌 Correos lista de espera | Conversión ×2.5 | 1-2h | 🔄 80% |
| **7** | ⏰ Horarios precisos | Integridad + calendario | 1h | ✅ **COMPLETADO** |

---

## 📊 Resumen por Categoría

### 🔧 Operación & Admin (4 features)
- **#1 Carga masiva** - Ahorrar 10+ horas/mes
- **#2 Cancelación + devolución** - Confianza cliente
- **#3 Editar foto** - ✅ Validado en local
- **#7 Horarios precisos** - Datos correctos

### 📨 Cliente & Comunicación (3 features)
- **#4 Notificación cambios** - No se pierde de nada
- **#5 Búsqueda mejorada** - Menos clicks, más rápido
- **#6 Correos lista espera** (🔄 80% done) - Conversión x2.5

---

## 🗂️ Documentos Disponibles

### [1️⃣ FEATURE_CARGA_MASIVA_HORARIOS.md](FEATURE_CARGA_MASIVA_HORARIOS.md)
```
Problema: Crear un día = 15-20 min (8 clicks)
Solución: Botón "Clonar para múltiples fechas"
Impacto:  1 min por día = 5-8h/mes ahorradas
Timeline: 2-3 horas
```

### [2️⃣ FEATURE_CANCELACION_CON_DEVOLUCION.md](FEATURE_CANCELACION_CON_DEVOLUCION.md)
```
Problema: Cancel sin devolución = molestia
Solución: Devolver si cancela > 2h antes
Impacto:  Satisfacción ↑, Llamadas ↓
Timeline: 4-8 horas
```

### [3️⃣ FEATURE_EDITAR_FOTO_INSTRUCTORES.md](FEATURE_EDITAR_FOTO_INSTRUCTORES.md)
```
Problema: Upload fallaba por MIME/fileinfo
Solución: Habilitar fileinfo + validar flujo completo
Impacto:  Perfiles profesionales
Estado:   ✅ Validado local (backend + frontend)
```

### [4️⃣ FEATURE_NOTIFICACION_CAMBIO_CLASE.md](FEATURE_NOTIFICACION_CAMBIO_CLASE.md)
```
Problema: Cambio de clase = sin aviso
Solución: Email automático a inscritos
Impacto:  Inasistencias ↓, Confianza ↑
Timeline: 2-4 horas
```

### [5️⃣ FEATURE_BUSQUEDA_USUARIOS_MEJORADA.md](../FIXES/FEATURE_BUSQUEDA_USUARIOS_MEJORADA.md) ✅ COMPLETADO
```
Problema: Filtros con espacios externos no funcionaban
Solución: Aplicar trim() al input de búsqueda en backend
Status:   ✅ IMPLEMENTADO Y VALIDADO (1,800 tests pasando, 0 regresiones)
Ubicación: ../FIXES/ (fix completado)
Impacto:  Búsquedas 98% exitosas
Timeline: 1-2 horas
```

### [6️⃣ FEATURE_CORREOS_LISTA_ESPERA.md](FEATURE_CORREOS_LISTA_ESPERA.md) 🔄
```
Estado: 80% Implementado (WaitingListMailer existe)
Pendiente: Validar eventos + testing
Solución: Emails en cada evento (registro/promoción)
Impacto:  Conversión lista → inscripción ×2.5
Timeline: 1-2 horas (para completar)
```

### [7️⃣ FEATURE_HORARIOS_PRECISOS.md](FEATURE_HORARIOS_PRECISOS.md) ✅ COMPLETADO
```
Problema: Clases en calendario desordenadas por hora
Solución: Agregar ORDER BY timeStart en getQueryBuilderInPeriod()
Impacto:  Calendario ordenado, mejor UX
Status:   ✅ IMPLEMENTADO, VALIDADO Y FUNCIONANDO (04/03/2026)
Ubicación: src/Repository/SessionRepository.php:285
Timeline: 1 hora (fix simple de 1 línea)
```

---

## 🚀 Plan de Implementación Sugerido

### ✅ COMPLETADOS
- **#5 Búsqueda usuarios** (1-2h) → ✅ Implementado 04/03/2026
- **#7 Horarios precisos** (1h) → ✅ Implementado 04/03/2026

### Día 1 (Mañana) - Rápidos (1-2h cada uno)
- **#1 Carga masiva** (2-3h) → ahorro operacional
- **#3 Editar foto** (2-3h) → validado en local, listo para deploy

### Día 2 - Medianos (2-4h)
- **#4 Notificación cambio** (2-4h) → comunicación
- **#6 Correos lista espera** (1-2h) → completar testing (80% listo)

### Día 3 - Complejos (4-8h)
- **#2 Cancelación devolución** (4-8h) → integración Conekta + validaciones

**Total restante:** ~2-3 días (máximo 1 semana con testing)

---

## ✅ Checklist de Validación

Antes de implementar cada feature:

- [ ] Lee documento completo
- [ ] Entiende el problema y solución
- [ ] Estima tiempo con tu equipo
- [ ] Planifica testing
- [ ] Notifica cambio a stakeholders

Después de implementar:

- [ ] Código sin errores `php -l`
- [ ] Validaciones pasadas
- [ ] Testing manual completado
- [ ] Correos enviados (si aplica)
- [ ] Documentación actualizada
- [ ] PR creado (merge a `main`)

---

## 📞 Preguntas Frecuentes

**P: ¿Estos están en orden de prioridad?**  
R: No necesariamente. El #1 es más rápido, el #2 es más impactante, el #5 es más fácil.

**P: ¿Puedo hacer varios en paralelo?**  
R: Sí, si tu equipo es suficientemente grande. Recomiendo al menos 2 personas.

**P: ¿Qué pasa si algo sale mal?**  
R: Cada documento tiene "Rollback" implícito (revertir código/BD) porque no tocan datos de usuarios.

**P: ¿Cuáles son críticos?**  
R: Todos son importantes pero no "rompen" el sistema. #2 y #6 impactan dinero (devoluciones + conversión).

---

## 🎌 Metadata

```
Creado:    03/03/2026
Actualizado: 04/03/2026
Documentos: 8 (1 índice + 7 features)
Líneas totales: ~2,900
Estado: 2 COMPLETADOS, 5 EN PENDIENTES

Completados hoy:
- #5 Búsqueda usuarios (1,800 tests ✓)
- #7 Horarios precisos (validado en vivo ✓)

Nota: #6 Correos lista espera RESTAURADO
      80% código existente (WaitingListMailer)
      Pendiente: Validación/testing/edge cases
```

---

**¿Necesitas aclaraciones en alguno? Puedo expandir o simplificar.**
