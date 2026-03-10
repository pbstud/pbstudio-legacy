# 📋 JIRA - Gestión del Proyecto

Esta carpeta contiene toda la documentación y recursos relacionados con la gestión del proyecto en Jira.

---

## 📂 Contenido de la Carpeta

### 📄 Documentación

1. **JIRA_GUIA_UNICA_JSON_API.md**
   - Guía técnica completa de la API REST de Jira
   - Endpoints disponibles
   - Ejemplos de uso con PowerShell
   - Referencia de campos personalizados

2. **TAREAS_SUBTAREAS_EPICA_PERFORMANCE.md**
   - Estructura completa de la épica de Performance en Caja/Pagos
   - 8 historias (SCRUM-34 a SCRUM-41)
   - 24 tareas detalladas
   - 61 subtareas con pasos específicos
   - Guía para creación manual en Jira

### 🔧 Scripts de Automatización

1. **create_epic_simple.ps1**
   - Script para crear épica + historias en Jira
   - Versión simplificada y funcional

2. **create_epic_structure.ps1**
   - Script completo para crear épica + historias + tareas + subtareas
   - Versión completa (requiere ajustes para evitar errores de buffer)

3. **create_stories.ps1**
   - Script para crear las 8 historias de la épica
   - Vinculación automática a épica padre

4. **link_to_epic.ps1**
   - Script para vincular historias existentes a una épica
   - Útil para correcciones o reorganización

---

## 🎯 Proyecto Actual en Jira

**Instancia:** https://devpbstudio.atlassian.net  
**Proyecto:** SCRUM  
**Board ID:** 1

### Sprints Activos:
- **Sprint 1** (ID: 34) - 9-16 Marzo 2026
- **Sprint 2** (ID: 35) - Siguiente iteración

---

## 🏗️ Estructura de Issues Creados

### Épicas Activas:

#### **SCRUM-33: Optimización de Consultas y Performance en Caja/Pagos**
- **Epic Name:** PERF-CAJA
- **Prioridad:** High
- **Labels:** performance, database, optimization, backend, caja-pagos
- **Estado:** En progreso

**Historias vinculadas:**
- SCRUM-34: Análisis y Diagnóstico de Performance (3h)
- SCRUM-35: Optimización de Índices en Base de Datos (4h)
- SCRUM-36: Refactorización de Queries con N+1 (6h)
- SCRUM-37: Implementación de Caché en Consultas Frecuentes (4h)
- SCRUM-38: Optimización de Paginación y Carga (3h)
- SCRUM-39: Testing y Validación de Performance (5h)
- SCRUM-40: Monitoreo y Métricas en Producción (4h)
- SCRUM-41: Documentación y Knowledge Transfer (3h)

### Otras Épicas Propuestas:

1. **Bugs en Usuario**
   - Correcciones de errores relacionados con gestión de usuarios
   - Issues de validación, permisos, y flujos de registro

2. **Gestión y Estabilización de Correos Transaccionales**
   - Correos de notificación
   - Lista de espera
   - Confirmaciones de reserva

3. **Estabilización General y Corrección de Errores Críticos**
   - Seguridad (CSRF, autenticación)
   - Validaciones y constraints
   - Performance general

---

## 🔑 Configuración de Autenticación

**Email:** desarrollo.pbstudio@outlook.com  
**Token API:** (Ver archivo de configuración seguro - no incluido en repo)

### Generar Nuevo Token:
1. Ir a: https://id.atlassian.com/manage-profile/security/api-tokens
2. Crear nuevo token API
3. Actualizar en scripts de PowerShell

---

## 📊 Issues Técnicos Registrados

### En Backlog (sin sprint asignado):
- **SCRUM-24:** Riesgo de concurrencia/doble reservación
- **SCRUM-25:** Endpoints backend sin control de acceso
- **SCRUM-26:** ADDTIME en DQL - compatibilidad MySQL
- **SCRUM-27:** WaitingList duplicados + eliminación GET insegura
- **SCRUM-29:** Queries N+1 en listados

### En Sprint Activo:
- (Por asignar según capacidad del equipo)

---

## 📝 Campos Personalizados de Jira

- **customfield_10011:** Epic Name
- **customfield_10014:** Epic Link (ID de la épica padre)
- **customfield_10020:** Sprint

---

## 🚀 Uso de Scripts

### Crear Historias:
```powershell
powershell -ExecutionPolicy Bypass -File "DOCUMENTACION\JIRA\create_stories.ps1"
```

### Vincular a Épica:
```powershell
powershell -ExecutionPolicy Bypass -File "DOCUMENTACION\JIRA\link_to_epic.ps1"
```

### Nota sobre PSReadLine:
Si los scripts dan error de buffer, ejecutar en background o usar archivos de output:
```powershell
$result = script... | Out-File "resultado.txt"
```

---

## 📖 Convenciones de Nomenclatura

### Issues:
- **Epic:** Nombre descriptivo del objetivo general
- **Story:** "Como [rol] quiero [acción] para [beneficio]"
- **Task:** Verbo infinitivo + objeto (ej: "Crear índices en tabla X")
- **Sub-task:** Paso específico y accionable

### Labels:
- Tecnología: `performance`, `database`, `security`, `frontend`, `backend`
- Tipo: `bug`, `feature`, `refactor`, `documentation`
- Módulo: `caja-pagos`, `reservaciones`, `usuarios`, `correos`
- Prioridad visual: `critico`, `importante`

---

## 🎯 Próximos Pasos

1. ✅ Épica SCRUM-33 creada y actualizada
2. ✅ 8 Historias creadas (SCRUM-34 a SCRUM-41)
3. ⏳ Vincular historias a épica manualmente en Jira UI
4. ⏳ Crear tareas para cada historia
5. ⏳ Crear subtareas para cada tarea
6. ⏳ Asignar a sprints según capacidad
7. ⏳ Definir estimaciones finales
8. ⏳ Asignar responsables

---

**Última actualización:** 09/03/2026  
**Responsable:** Equipo de desarrollo PB Studio
