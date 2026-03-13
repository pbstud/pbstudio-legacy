# DOCUMENTACION PBStudio81

Ultima actualizacion: 13 Marzo 2026

Este indice organiza la documentacion tecnica y operativa del proyecto para consulta rapida en el repositorio.

## Inicio rapido

1. Estado ejecutivo: [RESUMEN.md](RESUMEN.md)
2. Plan tecnico y backlog: [PLAN_ACCION.md](PLAN_ACCION.md)
3. Progreso consolidado: [progreso.md](progreso.md)

## Documentos principales

| Documento | Uso principal | Publico objetivo |
|---|---|---|
| [PLAN_ACCION.md](PLAN_ACCION.md) | Backlog tecnico, severidades, estado por issue | Tech Lead, Dev, QA |
| [progreso.md](progreso.md) | Bitacora consolidada de avances | Todo el equipo |
| [AUDITORIA_TECNICA_INTEGRAL.md](AUDITORIA_TECNICA_INTEGRAL.md) | Revision completa de arquitectura, seguridad y datos | Arquitectura, Dev, DevOps |
| [ARQUITECTURA_FLUJO_DATOS.md](ARQUITECTURA_FLUJO_DATOS.md) | Flujo end-to-end de negocio y sistema | Dev, QA, onboarding |
| [GUIA_TECNICA_DESARROLLO.md](GUIA_TECNICA_DESARROLLO.md) | Setup local, comandos y convenciones | Dev |
| [GUIA_DESPLIEGUE_NUEVO_SERVIDOR.md](GUIA_DESPLIEGUE_NUEVO_SERVIDOR.md) | Runbook de despliegue y verificaciones | DevOps |
| [RESUMEN_EJECUTIVO_DG_SPRINT_Y_HISTORICO_12-03-2026.md](RESUMEN_EJECUTIVO_DG_SPRINT_Y_HISTORICO_12-03-2026.md) | Estado ejecutivo para direccion | Direccion, PM |
| [CONSULTA_DIRECTOR_GENERAL_FEATURES_PENDIENTES.md](CONSULTA_DIRECTOR_GENERAL_FEATURES_PENDIENTES.md) | Alcance de features pendientes | Direccion, Producto |

## Documentacion extensa de contexto

- [DOCUMENTACION_COMPLETA.md](DOCUMENTACION_COMPLETA.md)
- [DOCUMENTACION_EXPANSION_COMPLETA.md](DOCUMENTACION_EXPANSION_COMPLETA.md)
- [DIAGRAMA_RELACIONES.md](DIAGRAMA_RELACIONES.md)

## Carpetas operativas

- [FIXES/](FIXES)
  - Evidencia tecnica de issues y features ya implementadas.
- [FIXES_PENDIENTES/](FIXES_PENDIENTES)
  - Definiciones de alcance y propuestas aun no cerradas.
- [JIRA/](JIRA)
  - Scripts, JSON de resultados y guias de integracion con Jira.
- [scripts/](scripts)
  - Scripts auxiliares de operacion documental.

## Ruta de lectura recomendada por rol

### Developer

1. [RESUMEN.md](RESUMEN.md)
2. [PLAN_ACCION.md](PLAN_ACCION.md)
3. [GUIA_TECNICA_DESARROLLO.md](GUIA_TECNICA_DESARROLLO.md)
4. [AUDITORIA_TECNICA_INTEGRAL.md](AUDITORIA_TECNICA_INTEGRAL.md)

### QA

1. [RESUMEN.md](RESUMEN.md)
2. [PLAN_ACCION.md](PLAN_ACCION.md)
3. [ARQUITECTURA_FLUJO_DATOS.md](ARQUITECTURA_FLUJO_DATOS.md)

### DevOps

1. [GUIA_DESPLIEGUE_NUEVO_SERVIDOR.md](GUIA_DESPLIEGUE_NUEVO_SERVIDOR.md)
2. [PLAN_ACCION.md](PLAN_ACCION.md)
3. [AUDITORIA_TECNICA_INTEGRAL.md](AUDITORIA_TECNICA_INTEGRAL.md)

### Direccion y producto

1. [RESUMEN_EJECUTIVO_DG_SPRINT_Y_HISTORICO_12-03-2026.md](RESUMEN_EJECUTIVO_DG_SPRINT_Y_HISTORICO_12-03-2026.md)
2. [RESUMEN.md](RESUMEN.md)
3. [CONSULTA_DIRECTOR_GENERAL_FEATURES_PENDIENTES.md](CONSULTA_DIRECTOR_GENERAL_FEATURES_PENDIENTES.md)

## Estado documental actual

- Plan tecnico y auditoria actualizados a corte 13/03/2026.
- Migraciones actualizadas en auditoria (7/7 registradas).
- Resumen de hallazgos y pendientes criticos consolidado.

## Mantenimiento de este indice

Actualizar este archivo cuando ocurra cualquiera de estos eventos:

- Se agregue un nuevo documento raiz referenciado desde [README.md](README.md)
- Cambie el estado de issues criticos en [PLAN_ACCION.md](PLAN_ACCION.md)
- Se cierre una nueva tanda de tickets Jira y se consolide en documentos ejecutivos
