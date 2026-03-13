# JIRA - Operacion y Automatizacion

Esta carpeta fue depurada para mantener solo lo indispensable en la raiz y mover el material historico a una carpeta de archivo.

## Estructura actual (limpia)

Archivos activos en esta carpeta:

1. README.md
2. JIRA_GUIA_UNICA_JSON_API.md
3. TAREAS_SUBTAREAS_EPICA_PERFORMANCE.md
4. SCRUM_ISSUE_HORARIO_FLEXIBLE_CLASES_13-03-2026.md
5. create_tasks_subtasks.ps1
6. fix_and_improve.ps1
7. link_to_epic.ps1

Carpeta de historico:

- ARCHIVO_20260310/
- Contiene scripts de prueba, resultados puntuales, snapshots JSON y logs de ejecucion que ya no son necesarios para la operacion diaria.

## Criterio de limpieza aplicado

Se dejaron en raiz solo archivos que cumplen al menos uno de estos criterios:

1. Documentacion base del flujo Jira.
2. Script reutilizable para creacion/correccion operativa.
3. Referencia principal para la epica de performance.

Se movio a archivo historico todo lo demas:

1. Scripts one-shot (pruebas puntuales o retries de incidencias especificas).
2. Logs y resultados de corrida.
3. Snapshots intermedios y archivos auxiliares temporales.

## Estado operativo Jira (13/03/2026)

1. SCRUM-33 con historias SCRUM-34 a SCRUM-41 y subtareas optimizadas.
2. Issues de hardening revisados y con descripciones reforzadas.
3. SCRUM-20 movido a la epica correcta (SCRUM-32).
4. Primera subtask de arranque creada para SCRUM-20 (SCRUM-62).
5. Ticket SCRUM-103 creado para trazabilidad de horario flexible HH:mm en crear/editar/carga masiva de clases.

## Uso rapido

Crear estructura reducida de subtareas:

```powershell
powershell -ExecutionPolicy Bypass -File "DOCUMENTACION\JIRA\create_tasks_subtasks.ps1"
```

Aplicar lote de correcciones de calidad/prioridad/descripciones:

```powershell
powershell -ExecutionPolicy Bypass -File "DOCUMENTACION\JIRA\fix_and_improve.ps1"
```

Vincular historias o incidencias a epica cuando aplique:

```powershell
powershell -ExecutionPolicy Bypass -File "DOCUMENTACION\JIRA\link_to_epic.ps1"
```

## Nota tecnica

En consolas con errores de PSReadLine por buffer, preferir ejecucion por archivo .ps1 (no comandos largos en una sola linea) y/o redireccion de salida a archivo.

## Mantenimiento futuro

1. Mantener la raiz de esta carpeta con maximo 5-8 archivos activos.
2. Cualquier script temporal nuevo debe moverse a ARCHIVO_YYYYMMDD al finalizar.
3. Si un script temporal se vuelve reutilizable, promoverlo a la raiz y documentarlo aqui.

Ultima actualizacion: 13/03/2026
Responsable: Equipo de desarrollo PB Studio
