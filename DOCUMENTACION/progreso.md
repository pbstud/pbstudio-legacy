# 📋 PROGRESO DEL PROYECTO - PB STUDIO

**Última actualización:** 11/03/2026  
**Estado General:** 🟢 ACTIVO - Seguimiento consolidado y actualizado por documentación  
**Equipo:** Desarrollo + Technical Documentation  

---

## 🔎 PARTE 1 - ESTADO MAESTRO CONSOLIDADO (11/03/2026)

### Objetivo de esta actualización

Este bloque consolida el estado real del proyecto usando como fuente principal:

- `DOCUMENTACION/`
- `DOCUMENTACION/FIXES/`
- `DOCUMENTACION/FIXES_PENDIENTES/`

Notas importantes de control para este documento:

- Se mantiene el histórico anterior en el mismo archivo (no se borra).
- Este seguimiento es documental y técnico interno.
- No se agrega vínculo operativo con tableros externos en este reporte.

---

## 🧩 PARTE 2 - INVENTARIO DOCUMENTAL ACTUAL

### 2.1 Inventario de documentación general (`DOCUMENTACION/`)

Este bloque concentra los documentos de referencia transversal (arquitectura, auditoría, guías y planeación).

| Documento | Rol principal | Estado de vigencia | Observación de uso |
|---|---|---|---|
| `README.md` | Índice maestro de documentación | Vigente | Debe mantenerse sincronizado con estructura de carpetas |
| `RESUMEN.md` | Resumen ejecutivo de hallazgos | Vigente | Útil para visión rápida de estado y prioridades |
| `PLAN_ACCION.md` | Plan técnico de ejecución | Vigente | Base para tareas técnicas y checklist de ejecución |
| `progreso.md` | Bitácora maestra de avance | Vigente | Documento de seguimiento por partes |
| `AUDITORIA_TECNICA_INTEGRAL.md` | Auditoría técnica profunda | Vigente | Fuente de hallazgos técnicos estructurales |
| `ARQUITECTURA_FLUJO_DATOS.md` | Arquitectura y flujo end-to-end | Vigente | Referencia para onboarding y debugging de flujo |
| `ANALISIS_PROFUNDO_VALIDACIONES_04-03-2026.md` | Hallazgos de validación adicionales | Vigente | Contiene issues técnicos #47, #48, #49 |
| `DOCUMENTACION_COMPLETA.md` | Documento integral de proyecto | Vigente | Referencia general multi-área |
| `DOCUMENTACION_EXPANSION_COMPLETA.md` | Expansión de casos y troubleshooting | Vigente | Cobertura extensa de escenarios y operación |
| `GUIA_TECNICA_DESARROLLO.md` | Guía práctica para desarrollo | Vigente | Setup, comandos y patrones de trabajo |
| `DIAGRAMA_RELACIONES.md` | Modelo relacional documentado | Vigente | Soporte para decisiones de datos y queries |
| `CONSULTA_DIRECTOR_GENERAL_FEATURES_PENDIENTES.md` | Definiciones de negocio pendientes | Vigente | Insumo clave para cerrar reglas funcionales |
| `JIRA_GUIA_UNICA_JSON_API.md` | Guía operativa técnica de Jira | Vigente | Uso operativo, no como fuente de estado funcional |

Resumen de esta subparte:
- Documentos generales detectados: **13**
- Cobertura: arquitectura, operación, calidad, negocio y ejecución técnica

### 2.2 Inventario de fixes y estado real (`DOCUMENTACION/FIXES/`)

| Documento | Tipo | Estado según encabezado/documento | Avance estimado |
|---|---|---|---|
| `CSRF_PROTECTION_SECURITY_FIX.md` | Seguridad/Fix | Implementado y validado | 100% |
| `DATETIME_IMMUTABILITY_FIX.md` | Fix técnico | Completado | 100% |
| `FEATURE_BUSQUEDA_USUARIOS_MEJORADA.md` | Feature/Fix | Implementado y en producción | 100% |
| `FEATURE_EDITAR_FOTO_INSTRUCTORES.md` | Feature/Fix | Completado y desplegado | 100% |
| `FEATURE_HORARIOS_PRECISOS.md` | Feature/Fix | Completado y desplegado | 100% |
| `FEATURE_VALIDACION_REGISTRO_APELLIDO.md` | Feature | Análisis/pre-implementación | 30% |
| `ISSUE_MODULO_AUDITORIA_RESERVACIONES_CONSOLIDADO.md` | Issue/Fix | Fase base implementada + mejora bidireccional pendiente | 85% |

Resumen de esta subparte:
- Documentos revisados en `FIXES` (este bloque): **7**
- Implementados y estables: **5**
- En evolución o pre-implementación: **2**

### 2.3 Inventario de pendientes activos (`DOCUMENTACION/FIXES_PENDIENTES/`)

| Documento | Tipo | Prioridad | Estado funcional | Avance estimado | Bloqueante principal |
|---|---|---|---|---|---|
| `FIXES/ISSUE_CAMBIO_RESERVACION_SIN_CLASES_DISPONIBLES.md` | Issue | Alta | Pendiente de implementacion tecnica | 55% | Implementacion y validacion de regla anti reflujo |
| `FIXES/ISSUE_MODULO_AUDITORIA_RESERVACIONES_CONSOLIDADO.md` | Issue | Alta | Base implementada, pendiente trazabilidad bidireccional | 85% | Cierre de diseño bilateral + correlación por flujo |
| `FEATURE_NOTIFICACION_CAMBIO_CLASE.md` | Feature | Importante | Documentado, pendiente implementación | 35% | Validación real de correo en servidor |
| `FEATURE_CORREOS_LISTA_ESPERA.md` | Feature | Importante | Base parcial implementada | 80% | Cierre de validación integral y edge cases |

Archivo de control:
- `INDICE_FEATURES_PENDIENTES.md` (índice vigente de pendientes activos)

Resumen de esta subparte:
- Pendientes activos: **4**
- Issues: **2**
- Features: **2**
- Bloqueantes repetidos: implementacion tecnica pendiente y entorno de correo

### 2.4 Hallazgos de consistencia documental para seguimiento

1. Hay documentación histórica con estado antiguo que no debe usarse como estado actual de ejecución.
2. El estado real debe priorizarse desde:
   - encabezados de `FIXES` y `FIXES_PENDIENTES`
   - índice de pendientes vigente
   - este `progreso.md` en su sección consolidada
3. Cada cierre técnico debe actualizar primero el documento fuente del item y luego reflejarse aquí.

### 2.5 Listado maestro de issues (cruce `progreso.md` + `PLAN_ACCION.md`)

Este listado se construye por bloques para no perder issues por numeración reutilizada.

#### Bloque A - Issues técnicos base numerados (#1 a #46)

1. Issue #1 - DateTime Immutability (resuelto)
2. Issue #2 - Missing Database Indices
3. Issue #3 - PHP Memory Exhausted (resuelto)
4. Issue #4 - MAILER_DSN (fix de entorno ya aplicado)
5. Issue #5 - Phone Field / Privacy Compliance
6. Issue #6 - Logging & Audits (mejorado)
7. Issue #7 - Validaciones adicionales
8. Issue #8 - Riesgo de doble reservación (concurrencia)
9. Issue #9 - Mutación de dateStart en WaitingList (resuelto con #1)
10. Issue #10 - DATEADD en DQL (compatibilidad)
11. Issue #11 - Endpoints backend sin control de acceso
12. Issue #12 - Ruta debug expone phpinfo()
13. Issue #13 - Tipo de clase en ExerciseRoomController
14. Issue #14 - Reuso de DateTime en SessionDayController (resuelto con #1)
15. Issue #15 - ADDTIME en DQL (WaitingListRepository)
16. Issue #16 - getFirstPublic() puede retornar null
17. Issue #17 - Validación tipo `digit` en User
18. Issue #18 - IFELSE en DQL (TransactionRepository)
19. Issue #19 - WaitingList sin control de autenticación
20. Issue #20 - Contacto depende de configuración existente
21. Issue #21 - WaitingList duplicada → Jira: SCRUM-27 (combinado con #25, backlog)
22. Issue #22 - DATE/DAYNAME en DQL
23. Issue #23 - FormView no renderizado
24. Issue #24 - Nullable + NotBlank
25. Issue #25 - WaitingList remove por GET sin CSRF → Jira: SCRUM-27 (combinado con #21, backlog)
26. Issue #26 - Acciones POST sin CSRF
27. Issue #27 - Acciones sensibles por GET
28. Issue #28 - Falta de tests automatizados
29. Issue #29 - N+1 queries en listados
30. Issue #30 - Checkout sin usuario autenticado
31. Issue #31 - Enumeración de usuarios (reset password)
32. Issue #32 - Configuración sin CSRF
33. Issue #33 - Uploads sin validación en configuración
34. Issue #34 - TokenGenerator con fallback débil
35. Issue #35 - Fecha inválida rompe configuración
36. Issue #36 - Fechas inválidas rompen filtros
37. Issue #37 - Excepciones silenciadas
38. Issue #38 - Doble asiento por falta de validación
39. Issue #39 - Expiración sin hora en transacciones
40. Issue #40 - Reservas en sesiones cerradas/canceladas
41. Issue #41 - Cancelación reabre sesiones o deja status incorrecto
42. Issue #42 - Actualización de capacidad con errores silenciados
43. Issue #43 - Sesiones de hoy omitidas en agrupación
44. Issue #44 - SessionDay solo considera STATUS_OPEN
45. Issue #45 - Ruta backend session-day sin control de acceso
46. Issue #46 - Cupón no incrementa uso en transacción backend

#### Bloque B - Issues funcionales N (serie N-1 a N-7 en `PLAN_ACCION.md`)

1. Issue N-1 - Subir horario masivo del día
2. Issue N-2 - Cambiar o cancelar clase hasta 2h antes
3. Issue N-3 - Editar foto en backend
4. Issue N-4 - Correo por cambios en clase a asistentes
5. Issue N-5 - Buscar usuario con errores (tipografía)
6. Issue N-6 - Correo en lista de espera
7. Issue N-7 - Crear horario por hora (no por orden de ingreso)

#### Bloque C - Issues de mejora funcional/producto (numeración reutilizada #43 a #50)

1. Issue #43 - Ver quién canceló en la info de clase (backend)
2. Issue #44 - Prueba de correos (esperar servidor)
3. Issue #45 - Horario abierto en creación de clases (formateable)
4. Issue #46 - Confirmación al cambiar clase si tiene reservas
5. Issue #47 - Mapa interactivo de lugares (drag & drop)
6. Issue #48 - Mejorar info de foto de instructores (backend)
7. Issue #49 - Búsqueda de usuarios nombre + apellido (sin duplicados)
8. Issue #50 - Optimizar queries de caja/pagos (índices faltantes)

#### Bloque D - Issues técnicos adicionales documentados en análisis profundo

1. Issue #47 - `ReservationController::confirm()` null-unsafe
2. Issue #48 - Múltiples controllers con `find()` sin null-check
3. Issue #49 - `WaitingListService::checkAndReserve()` sin transacción atómica

#### Bloque E - Issues activos de ejecución inmediata (documentos de pendientes)

1. Issue: Cambio de reservación sin clases disponibles
2. Issue: Auditoría bidireccional de cambio de reservación

#### Nota de control de numeración

- Existen IDs repetidos en distintas capas del plan (ejemplo: #43-#49), por eso este reporte los separa por bloques.
- Para ejecución operativa se recomienda usar además el nombre del issue + bloque, no solo el número.

---

## 📊 PARTE 3 - MATRIZ DE PROGRESO (SEGÚN DOCUMENTACIÓN)

Base de seguimiento funcional/técnico (sin contar índices):

- Total items registrados: **12**
  - 8 en `FIXES`
  - 4 en `FIXES_PENDIENTES`

Distribución actual:

1. ✅ Completados/implementados: **8**
2. 🟡 En planificación/pre-implementación: **0**
3. 🔴 Pendientes activos: **4**

Avance estimado por estado documental:

- Completado: **66.6%**
- Planificación: **0%**
- Pendiente: **33.3%**

---

## 🚧 PARTE 4 - BLOQUEANTES VIGENTES

1. Confirmación de reglas de negocio (cambio de reservación)
   - Pendiente de validación directiva
   - Impacta implementación final del issue de cambio de reservación

2. Entorno de correo para validación real
   - En local no queda validado todo el flujo de notificaciones
   - Se requiere prueba en servidor para cerrar features de correo

3. Definición técnica de auditoría bilateral en cambios de reservación
   - Se debe registrar salida (origen) y entrada (destino) con correlación única
   - El panel backend debe permitir seguimiento del flujo completo en ambas sesiones

---

## 🗺️ PARTE 5 - PLAN DE EJECUCIÓN EN PARTES

### Parte A (inmediata)

1. Implementar auditoría bidireccional de cambios de reservación (origen/destino).
2. Definir y persistir correlación de flujo (`change_flow_id`) por cambio.
3. Actualizar panel de auditoría backend para visualizar ambos lados del cambio.

### Parte B (siguiente)

1. Validar infraestructura de correo en entorno servidor.
2. Completar feature de notificación de cambio de clase.
3. Cerrar validación end-to-end de correos de lista de espera.

### Parte C (consolidación)

1. Cerrar los 4 pendientes activos.
2. Mover documentación cerrada a bloque de completados.
3. Recalcular matriz de avance en este mismo archivo.

---

## ✅ PARTE 6 - CHECKLIST DE CONTROL DE ESTE REPORTE

- [x] Inventario documental actualizado.
- [x] Inventario de issues/features actualizado.
- [x] Estado por item documentado.
- [x] Bloqueantes explícitos listados.
- [x] Plan por etapas definido.
- [ ] Actualizar porcentaje al cerrar el siguiente issue activo.

---

## 🧠 PARTE 7 - DETALLE ITEM POR ITEM (SIN SALTOS)

### 7.1 ISSUE ACTIVO A - Auditoría bidireccional en cambio de reservación

Documento fuente: `FIXES/ISSUE_MODULO_AUDITORIA_RESERVACIONES_CONSOLIDADO.md`

Estado actual:
- Análisis técnico completado sobre flujo real de cambio de reservación.
- Detectada brecha: la auditoría actual registra solo la sesión de origen.

Qué ya está claro:
- El cambio se ejecuta en `ReservationService::change()` sobre la misma reservación.
- `auditUserChange()` persiste 1 solo registro en `session_audit` para la sesión anterior.
- El panel `/backend/session/{id}/audit` consulta por `session_id`, por lo que la sesión destino no ve el evento.

Qué falta cerrar:
1. Registrar 2 eventos por cambio: salida (origen) y entrada (destino).
2. Vincular ambos eventos con `change_flow_id`.
3. Exponer detalle completo en panel de auditoría para tipos de cambio de usuario.
4. Mantener compatibilidad con registros históricos `user_changed`.

Riesgo principal:
- Sin traza bilateral, soporte no puede reconstruir de forma confiable el flujo completo del cambio.

Criterio de cierre:
- Admin puede ver y seguir el cambio en ambas sesiones (origen/destino) desde el panel de auditoría.

---

### 7.2 ISSUE CERRADO B - Cambio de reservación sin clases disponibles (SCRUM-23)

Documento fuente: `FIXES/ISSUE_CAMBIO_RESERVACION_SIN_CLASES_DISPONIBLES.md`

Estado actual:
- Implementado al 100% — pendiente de commit y PR.

Qué se implemento:
- `SessionRepository::getForChange()`: ventana 30 dias, ordenado por fecha/hora/sucursal.
- `SessionAuditRepository::hasReservationBeenChanged()`: metodo anti-reflujo via `session_audit`.
- `ReservationService`: bloqueo de cancelacion si `changedAt != null`.
- `ProfileController`: anti-reflujo en cancel/change/changeSession; validacion server-side de sesion objetivo.
- `AppExtensionRuntime`: Twig ocultard botones de cambiar/cancelar para reservaciones ya cambiadas.
- `reservation_change.html.twig`: rediseño con grid de calendario semanal identico a pantalla normal de reserva.
- `session-change.js`: `updateEmptyDays()` oculta columnas/semanas vacias al filtrar.

Criterio de cierre:
- Cumplido: sesiones futuras listadas, mismo formato visual, anti-reflujo funcional sin nueva migracion.

---

### 7.3 FEATURE ACTIVA C - Notificación por cambio de clase

Documento fuente: `FIXES_PENDIENTES/FEATURE_NOTIFICACION_CAMBIO_CLASE.md`

Estado actual:
- Especificación funcional y técnica lista.
- Implementación pendiente.

Qué ya está claro:
- Deben notificarse cambios de horario/salón/instructor/cancelación/reprogramación.
- Se propone detección de cambios relevantes + listener + mailer dedicado.

Bloqueante técnico:
- Falta validación completa en entorno con correo operativo real.

Qué falta cerrar:
1. Implementar evento y listener final.
2. Completar plantilla de notificación.
3. Validar envíos reales y comportamiento ante fallas.

Riesgo principal:
- Sin notificación automática, suben inasistencias y quejas por cambios no comunicados.

Criterio de cierre:
- Cambio operativo de clase genera notificación consistente y trazable.

---

### 7.4 FEATURE ACTIVA D - Correos de lista de espera

Documento fuente: `FIXES_PENDIENTES/FEATURE_CORREOS_LISTA_ESPERA.md`

Estado actual:
- Base avanzada (mailer/listeners/eventos base identificados).
- Falta validación integral y pruebas de borde.

Qué ya está claro:
- Hay cobertura parcial, pero no está cerrado el ciclo completo.
- Faltan pruebas de promoción, expiración y robustez ante errores SMTP.

Qué falta cerrar:
1. Verificar eventos pendientes.
2. Validar templates finales.
3. Probar flujo completo registro -> promoción -> expiración.
4. Confirmar envío real y manejo de errores.

Riesgo principal:
- Creer que está terminado por tener 80% base sin validar la experiencia end-to-end.

Criterio de cierre:
- Flujo de lista de espera notifica correctamente en escenarios nominales y edge.

---

### 7.5 Items en planificación (no cerrados)

1. `FIXES/FEATURE_VALIDACION_REGISTRO_APELLIDO.md`
- Estado: análisis y diseño; falta pasar a ejecución.

2. `FIXES/ISSUE_MODULO_AUDITORIA_RESERVACIONES_CONSOLIDADO.md`
- Estado: **COMPLETADO** — auditoria bidireccional implementada (SCRUM-81, commit `d1329fd6`, rama `fix/scrum-81-auditoria-bidireccional`).

---

### 7.6 Items cerrados con estado estable

1. `FIXES/CSRF_PROTECTION_SECURITY_FIX.md`
2. `FIXES/DATETIME_IMMUTABILITY_FIX.md`
3. `FIXES/FEATURE_BUSQUEDA_USUARIOS_MEJORADA.md`
4. `FIXES/FEATURE_EDITAR_FOTO_INSTRUCTORES.md`
5. `FIXES/FEATURE_HORARIOS_PRECISOS.md`
6. `FIXES/ISSUE_MODULO_AUDITORIA_RESERVACIONES_CONSOLIDADO.md` (fase base cerrada)

Validación documental:
- Todos marcan estado de completado/implementado en su fase base; el módulo de auditoría mantiene mejora evolutiva pendiente.

---

## 🧭 PARTE 8 - CONTROL DE EJECUCIÓN Y ACTUALIZACIÓN CONTINUA

Frecuencia recomendada de actualización de este archivo:

- Diario, si hay ejecución técnica activa.
- Inmediato, cada vez que se cierre o re-clasifique un issue/feature.

Regla de actualización por cambio:

1. Actualizar estado del item en su documento fuente.
2. Reflejar el cambio en la matriz de este `progreso.md`.
3. Actualizar bloqueantes/riesgos si cambian.
4. Recalcular porcentajes de avance.

Formato recomendado de bitácora por avance nuevo:

- Fecha
- Item
- Cambio aplicado
- Evidencia técnica
- Estado resultante

---

## 🗃️ HISTÓRICO PREVIO (SE CONSERVA SIN BORRAR)

> Nota de vigencia: este bloque es histórico/archivado. El estado operativo vigente está en las Partes 1 a 8 de este mismo documento.

## 🎯 PLAN DETALLADO - LO QUE QUERÍAMOS HACER

### FASE 1: Preparación de Base de Datos
```
📌 OBJETIVO: Dejar BD limpia, actualizada y con datos consistentes

1.1 Limpiar todas las tablas existentes
    └─ Vaciar 20 tablas manteniendo estructura
    └─ Remover datos inconsistentes/corruptos
    └─ Resetear auto-increments

1.2 Importar nuevo backup
    └─ Localizar backup: pbstudio_15ene2026_back.sql.gz (54.46 MB)
    └─ Descomprimir archivo
    └─ Importar 230 statements SQL
    └─ Validar 488,789 registros importados

1.3 Verificar integridad de datos
    └─ Contar registros por tabla
    └─ Validar relaciones FK
    └─ Verificar índices
```

### FASE 2: Análisis Técnico Profundo
```
📌 OBJETIVO: Entender completamente la arquitectura del proyecto

2.1 Mapear estructura de entities (20 modelos)
    └─ User, Session, Reservation, Transaction
    └─ Package, Coupon, Staff, Discipline
    └─ + 12 más

2.2 Documentar flujos de negocio
    └─ Flujo: Registro → Reserva → Pago → Asistencia
    └─ Lista de espera y promoción
    └─ Expiración de paquetes
    └─ Cancelación de reservas

2.3 Identificar controllers y rutas
    └─ 13 controllers públicos
    └─ 7 controllers admin
    └─ 30+ rutas funcionales

2.4 Mapear servicios de negocio
    └─ ReservationService (core)
    └─ TransactionService (pagos)
    └─ ConektaService (integración)
    └─ Mailers (5 tipos)
```

### FASE 3: Documentación
```
📌 OBJETIVO: Generar documentación técnica completa (5 documentos)

3.1 DOCUMENTACION_COMPLETA.md
    └─ Overview del proyecto
    └─ Entities y relaciones
    └─ Controllers y rutas
    └─ Troubleshooting común
    └─ 1,200+ líneas

3.2 DIAGRAMA_RELACIONES.md
    └─ UML ASCII diagram
    └─ Todas las relaciones (FK)
    └─ Validadores y constraints
    └─ Record counts
    └─ 721 líneas (expandido de 458)

3.3 GUIA_TECNICA_DESARROLLO.md
    └─ Setup paso a paso
    └─ Estructura de carpetas
    └─ Patrones de coding
    └─ Troubleshooting técnico
    └─ 1,100+ líneas

3.4 GUIA_TECNICA_EXPANSION.md
    └─ Patterns avanzados
    └─ Exceptions personalizadas
    └─ Listeners y eventos
    └─ Debugging profundo
    └─ 4,500+ líneas NEW

3.5 DOCUMENTACION_EXPANSION_COMPLETA.md
    └─ Casos de uso end-to-end
    └─ Integración de capas
    └─ Flows detallados (Conekta, etc)
    └─ Troubleshooting de 12 problemas
    └─ CRON jobs y monitoreo
    └─ 8,000+ líneas NEW

### FASE 4: Testing y Validación
```
📌 OBJETIVO: Verificar que todo funciona correctamente

4.1 Sintaxis y errores PHP
    └─ Validar entities
    └─ Revisar controllers
    └─ Checks en services

4.2 Schema BD
    └─ Doctrine validation
    └─ Sincronización entities-BD
    └─ Índices presentes

4.3 Testing funcional
    └─ Rutas públicas
    └─ CRUD admin
    └─ Flujos de pago

### FASE 5: Deployment Readiness
```
📌 OBJETIVO: Dejar proyecto listo para producción

5.1 Configuración .env producción
5.2 CRON jobs configurados
5.3 Backups automatizados
5.4 Monitoreo activo
```

---

## ✅ LO QUE HICIMOS - LOGROS COMPLETADOS

### ✨ FASE 1: Base de Datos - 100% COMPLETO
```
✅ Limpieza de BD:
   └─ Script: clean_db.php
   └─ Truncated 20 tablas (FOREIGN_KEY_CHECKS=0)
   └─ Dropped y recreated índices
   └─ Status: LIMPIAS Y LISTAS

✅ Extracción de Backup:
   └─ Archivo: pbstudio_15ene2026_back.sql.gz (54.46 MB decompressed)
   └─ Script: extract_backup.php
   └─ Resultado: SQL puro listo para importar
   └─ Status: EXTRAÍDO

✅ Importación de Datos:
   └─ Script: import_backup.php
   └─ 230 SQL statements procesadas
   └─ Transacciones manejo automático
   └─ Resultado: 488,789 records importados
   └─ Status: ✅ COMPLETO

✅ Verificación de Datos:
   └─ Script: verify_data.php
   └─ Conteo por tabla:
      • user: 14,566
      • session: 69,982
      • reservation: 336,768
      • transaction: 62,929
      • + 16 más
   └─ Status: ✅ VALIDADO
```

### ✨ FASE 2: Análisis Técnico - 100% COMPLETO
```
✅ Entities Analizadas (20):
   ├─ Core: User, Session, Reservation, Transaction
   ├─ Business: Package, Coupon, CouponHistory, WaitingList
   ├─ Staff: Staff, StaffProfile, InstructorsDisciplines, StaffBranchOffice
   ├─ Structure: Discipline, BranchOffice, ExerciseRoom
   ├─ System: Post, Configuration, MessengerMessages, DoctrineMigration
   └─ Status: ✅ TODAS MAPEADAS

✅ Flujos de Negocio Documentados:
   ├─ Registro → Reserva → Pago → Asistencia
   ├─ Lista de Espera → Promoción
   ├─ Expiración de Paquetes (CRON)
   ├─ Cancelación de Reservas
   └─ Status: ✅ COMPLETO

✅ Controllers Mapeados (20):
   ├─ Frontend: 13 controllers públicos
   ├─ Backend: 7 controllers admin
   └─ Status: ✅ COMPLETO

✅ Servicios de Negocio (8+):
   ├─ ReservationService (100+ métodos)
   ├─ TransactionService
   ├─ WaitingListService
   ├─ CouponService
   ├─ ConektaService
   ├─ Mailers (5 tipos)
   └─ Status: ✅ IDENTIFICADOS
```

### ✨ FASE 3: Documentación Técnica - 100% COMPLETO
```
🔴 5 Documentos Generados (15,000+ palabras totales):

1. DOCUMENTACION_COMPLETA.md (1,200 líneas)
   ├─ Project vision y tech stack
   ├─ 20 entities fully documented
   ├─ 13 controllers mapped
   ├─ All services listed
   ├─ Troubleshooting section
   └─ Status: ✅ COMPLETO

2. DIAGRAMA_RELACIONES.md (721 líneas - EXPANDIDO)
   ├─ UML ASCII diagram (20 entities, 27 relationships)
   ├─ All relationship documented
   ├─ 45+ validation rules explicitas
   ├─ Record counts for all tables
   ├─ Implementation details
   └─ Status: ✅ COMPLETO

3. GUIA_TECNICA_DESARROLLO.md (1,100 líneas)
   ├─ Setup instructions
   ├─ Folder structure
   ├─ Coding patterns
   ├─ 30+ useful commands
   └─ Troubleshooting common errors

4. GUIA_TECNICA_EXPANSION.md (4,500+ líneas) ✨ NEW
   ├─ Complete entity patterns (Reservation, Transaction)
   ├─ Service layer with real code
   ├─ Exception handling (ReservationException)
   ├─ Events and listeners system
   ├─ Custom validators explained
   ├─ Debugging tools profundo
   ├─ Database migrations advanced
   ├─ Testing with WebTestCase
   ├─ Conekta payment integration
   └─ Optimized queries (N+1 prevention)

5. DOCUMENTACION_EXPANSION_COMPLETA.md (8,000+ líneas) ✨ NEW
   ├─ 3 Complete end-to-end use cases
   ├─ Layer integration architecture
   ├─ Real project configuration files
   ├─ 8-step Conekta payment flow (with JSON)
   ├─ Troubleshooting table (12 problems + solutions)
   ├─ Daily monitoring checklist
   ├─ CRON jobs configuration
   ├─ Best practices implemented
   └─ 25+ real code examples

STATUS HISTÓRICO (captura original): 15,000+ PALABRAS | 60+ EJEMPLOS | 20+ DIAGRAMAS (✅ 40% COMPLETO en ese corte)
```

### ✨ FASE 4: Identificación de Errores
```
🔍 Issues Found:
   └─ Session.php::getDateTimeStart() 
      • Error: "Undefined method 'setTime'"
      • Causa: DateTime/DateTimeImmutable inconsistency
      • Status: ✅ RESUELTO (02/03/2026) - pendiente solo en registro histórico original
   └─ PHP Memory Exhausted (pagos page)
      • Error: "Allowed memory size of 134217728 bytes exhausted"
      • Causa: Servidor usando memory_limit 128M (insuficiente para Twig)
      • Solución: Reiniciar servidor con php -d memory_limit=512M
      • Status: ✅ RESUELTO (02/03/2026)
   └─ Riesgo de doble reservación (concurrencia)
      • Caso: requests simultáneos ocupan el mismo placeNumber
      • Causa: falta validación/lock atómico
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN (en Jira: SCRUM-24)
   └─ Mutación de dateStart en WaitingList
      • Caso: validate() modifica dateStart sin clonar
      • Causa: setTime() sobre objeto original
      • Status: ✅ RESUELTO (02/03/2026) - incluido en fix DateTime Immutability
   └─ DATEADD en DQL (compatibilidad)
      • Caso: SessionRepository::getNotClosed() usa DATEADD
      • Causa: DQL puede fallar en MySQL sin función custom
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Endpoints backend sin control de acceso
         • Caso: backend/session/get, backend/session/{id}/places, backend/reservation/{id}/attended,
            backend/user/{id}/stats, backend/user/{id}/transactions, backend/user/{id}/reservations,
            backend/user/{id}/reservations/{reservation}, backend/coupon/validate
      • Causa: Falta IsGranted/roles en rutas
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN (en Jira: SCRUM-25)
   └─ Ruta debug expone phpinfo()
      • Caso: backend/test ejecuta phpinfo() y exit()
      • Causa: Ruta de pruebas sin restricción
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Tipo de clase en ExerciseRoomController
      • Caso: Uso de Exerciseroom en lugar de ExerciseRoom
      • Causa: Referencia de clase inconsistente
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Reuso de DateTime en SessionDayController
      • Caso: newDay/editDay usan el mismo DateTime para varias sesiones
      • Causa: Mutacion de objeto compartido
      • Status: ✅ RESUELTO (02/03/2026) - incluido en fix DateTime Immutability
   └─ ADDTIME en DQL (WaitingListRepository)
      • Caso: getAvailableForExpire() usa ADDTIME
      • Causa: DQL puede fallar en MySQL sin función custom
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN (en Jira: SCRUM-26)
   └─ getFirstPublic() sin manejo de null
      • Caso: BranchOfficeRepository::getFirstPublic() puede retornar null
      • Causa: Retorno no nullable
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Validacion Type('digit') en User
      • Caso: Assert\Type(type: 'digit') en phone/emergencyContactPhone
      • Causa: Tipo no valido en Symfony
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ IFELSE en DQL (TransactionRepository)
      • Caso: getGroupedByPackage() usa IFELSE
      • Causa: Funcion no estandar
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ WaitingList sin control de autenticacion
      • Caso: ReservationController::waitingList() no valida ROLE_USER
      • Causa: Falta IsGranted
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Contacto depende de configuracion existente
      • Caso: HandlerContactService::processForm() asume config general
      • Causa: No valida null
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ WaitingList duplicada
      • Caso: WaitingListService::add() no valida duplicados
      • Causa: Falta check en repo antes de persistir
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ WaitingList remove por GET (en Jira: SCRUM-27)
      • Caso: ProfileController::waitingListRemove() elimina por GET
      • Causa: Side-effects sin CSRF ni metodo seguro
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN (en Jira: SCRUM-27)
   └─ Acciones POST sin CSRF (en Jira)
      • Caso: reservation_confirm, reservation_waitinglist, reservation_cancel,
            reservation_change_session, package_checkout,
            backend_reservation_attended, backend_transaction_cancel/edit_expiration,
            resetting_send_email
      • Causa: Falta token CSRF en endpoints sensibles
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Reset password por GET (backend)
      • Caso: backend_user_reset_password modifica datos y hace flush via GET
      • Causa: Ruta sensible sin POST/CSRF
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Falta de tests automatizados
      • Caso: tests/ solo tiene bootstrap.php
      • Causa: No hay WebTestCase ni pruebas funcionales
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ N+1 queries en listados
      • Caso: getReservationsBySession / getByUser / getAllCompletedByUser sin joins
      • Causa: Lazy loading de relaciones en vistas clave
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN (en Jira: SCRUM-28/SCRUM-36)
   └─ Checkout sin usuario autenticado
      • Caso: package_checkout permite POST sin ROLE_USER
      • Causa: TransactionService::create usa getUser() y asume user no null
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Enumeracion de usuarios (reset password)
      • Caso: reset password responde "correo no existe"
      • Causa: Mensaje explicito en validateNonExistUser()
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Configuracion sin CSRF
      • Caso: backend_configuration_update usa forms HTML sin token
      • Causa: Formularios manuales sin CSRF
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Uploads sin validacion (config)
      • Caso: ConfigurationFileModel sin constraints
      • Causa: Falta validacion de tipo/tamano
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ TokenGenerator con fallback debil
      • Caso: generateToken() usa md5(uniqid()) en fallback
      • Causa: random_bytes exception -> token debil
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Fecha invalida rompe configuracion
      • Caso: castValues() usa createFromFormat()->format() sin validar
      • Causa: Falta validacion de fecha en settings
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Fechas invalidas rompen filtros
      • Caso: createFromFormat()->format() sin validar en filtros de reportes
      • Causa: Falta validacion de fecha en repositorios
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Excepciones silenciadas
      • Caso: sendNotification()/processForm() ignoran excepciones
      • Causa: Catch vacio sin logging
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Doble asiento por falta de validacion
      • Caso: reservate()/change() no validan placeNumber ocupado
      • Causa: No existe constraint unique por session/place
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Expiracion sin hora en transacciones
      • Caso: getExpired() compara expirationAt con fecha sin hora
      • Causa: Formato Y-m-d en lugar de DateTime completo
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Reservas en sesiones cerradas/canceladas
      • Caso: reservate()/change() no validan status de Session
      • Causa: Falta validacion de CLOSED/CANCEL en ReservationService
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Cancelacion reabre sesiones o deja status incorrecto
      • Caso: cancel() fuerza Session::STATUS_OPEN sin recalcular
      • Causa: No se respeta CLOSED/CANCEL (admin) ni se recalcula FULL en change()
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Actualizacion de capacidad con errores silenciados
      • Caso: updateCapacity() atrapa excepciones sin logging
      • Causa: Catch vacio en SessionRepository::updateCapacity()
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Sesiones de hoy omitidas en agrupacion
      • Caso: findAllGroupByDateStart() usa DateTime con hora
      • Causa: Comparacion contra DATE con hora actual excluye HOY
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ SessionDay solo considera STATUS_OPEN
      • Caso: index/editDay filtran sesiones por status OPEN
      • Causa: Consultas no incluyen FULL/CLOSED
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Ruta backend session-day sin control de acceso
      • Caso: newBranchOffice() sin IsGranted
      • Causa: Falta control de rol en endpoint admin
      • Status: 🟠 REPORTADO, PENDIENTE SOLUCIÓN
   └─ Cupon no incrementa uso en transaccion backend
      • Caso: backend_transaction_new aplica cupon pero no llama addHistory
      • Causa: Se dispara TransactionEvent en lugar de TransactionSuccessEvent
      • Status: 🟡 REPORTADO, PENDIENTE SOLUCIÓN

📊 Validaciones Ejecutadas:
   ✅ php -l src/Entity/Session.php → No syntax errors
   ✅ doctrine:schema:validate → Correct mapping
   ✅ doctrine:migrations:sync → Metadata storage OK
   ✅ DB counts (02/03/2026): users 14566, sessions 69982, reservations 336768, transactions 62929
   ✅ DB indices verificados: reservation.user_id/session_id/transaction_id, transaction.user_id, waiting_list.user_id/session_id
   ✅ DB checks (02/03/2026): sessions open/full = 30, waiting_list total = 3826, waiting_list disponibles = 0
   ✅ DB checks (02/03/2026): transactions paid = 53026, transactions activas = 112
```

---

## 🔴 LO QUE NOS FALTA - TAREAS PENDIENTES

### FASE 4: Testing y Validación - 30% COMPLETADO
```
🔴 ERRORES CRÍTICOS ENCONTRADOS (PRIORITY: HIGH):

1️⃣ Session.php::getDateTimeStart() - DateTime Immutability Issue
   ├─ Síntoma: "Undefined method 'setTime' on DateTimeImmutable" ← RESUELTO
   ├─ Causa Raíz: 
   │  • $this->dateStart es DateTimeImmutable (no DateTime mutable)
   │  • clone preserva la immutabilidad
   │  • setTime() retorna nueva instancia, no modifica en-place
   ├─ Impacto: 
   │  • Bloquea toda operación que requiere combinar date + time
   │  • Afecta: SessionRepository::getCalendar(), views del calendario
   │  • Rutina: Usuario no puede ver calendario ni hacer reserva
   ├─ Solución Técnica:
   │  └─ Cambiar: $dateStart->setTime(...)
   │     Por: $dateStart = $dateStart->setTime(...)
   │     Razón: Capturar el retorno (nueva instancia)
   ├─ Status: ✅ RESUELTO (02/03/2026 16:50)
   ├─ Validación: 3/3 tests PASS, 7 assertions OK
   ├─ Archivos corregidos: 7 cambios en 6 archivos
   ├─ Barrido global `setTime()` en `src/**/*.php`: 7 ocurrencias revisadas, 0 errores activos
   └─ Documentación: DOCUMENTACION/FIXES/DATETIME_IMMUTABILITY_FIX.md

2️⃣ Template Registro No Sale - Registration Form Missing
   ├─ Síntoma: 
   │  • GET /register muestra error 500 (antes)
   │  • Usuarios nuevos NO pueden completar registro
   │  • Error: "Environment variable not found: MAILER_DSN"
   ├─ Causa Raíz:
   │  • Variable de entorno MAILER_DSN no estaba definida en .env
   │  • Symfony MailerInterface requiere MAILER_DSN para funcionar
   │  • Sin esta variable, el DIC (Dependency Injection Container) fallaba al crear UserMailer
   ├─ Solución Técnica:
   │  └─ Agregar a .env: MAILER_DSN=null://default
   │     └─ null:// es un mailer de desarrollo que descarta emails
   │     └─ Para producción usar: smtp://usuario:contraseña@host:puerto
   ├─ Status: ✅ RESUELTO
   │  └─ Verificación: curl devuelve Status 200 en /register
   └─ Acción: Completar + documentar en .env.example

3️⃣ Errores de Mapeo en Flujo de Trabajo - Entity Relationship Issues
   ├─ Descripción General:
   │  • Algunas relaciones FK no se cargan correctamente
   │  • Posible mismatch entre Entity properties y BD columns
   │  • Validation errors no claramente reportados
   ├─ Escenarios Afectados:
   │  └─ Flujo Reserva (User → Session → Reservation → Transaction):
   │     ├─ User.reservations collection vacío (pero hay registros)
   │     ├─ Session.instructor no carga (staff null)
   │     ├─ Transaction.package relación rota en algunos casos
   │     └─ WaitingList.user nullable pero debería ser FK
   │
   │  └─ Flujo Pago (Conekta integration):
   │     ├─ Transaction fields con nombre diferente al DB
   │     ├─ Coupon.packages mapping bidireccional roto
   │     └─ CouponHistory.transaction puede ser null unexpectedly
   │
   │  └─ Flujo Admin (CRUD Sesiones):
   │     ├─ Session.exerciseRoom puede ser null (required para capacity)
   │     ├─ Staff.instructor flag no sincronizado con realidad
   │     └─ BranchOffice.sessions no está en Entity (OneToMany falta)
   ├─ Root Causes:
   │  ├─ Versión migrations out of sync
   │  ├─ Eager loading NO usado en queries
   │  ├─ Lazy loading permite nulls que rompen en controllers
   │  └─ Missing @JoinColumn constraints
   ├─ Impacto Cascada:
   │  • Usuarios ven datos vacíos en vistas
   │  • Validaciones silenciosas (no throw, solo null)
   │  • Admin reports incorrectos
   │  • Performance: Extra queries (N+1)
   ├─ Status: 🟡 MODERADO - Funciona parcialmente pero inestable
   └─ Acción: Mapping audit + schema validation + eager loading fix

🛠️ PLAN DE SOLUCIÓN CON LOGGING - Instrumentation Strategy
   
   Objetivo: Visibilidad completa en cada paso del workflow para diagnosticar errores
   
   FASE 1: Setup de Logger Centralizado
   ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
   
   Crear: LoggerFactory en app/Service/LoggerFactory.php
   ├─ Propósito: Centralizar logs con formato consistente
   ├─ Beneficio: Fácil de buscar/filtrar por contexto
   └─ Uso:
      $logger = $loggerFactory->createLogger('ReservationService');
      $logger->info('Validación iniciada', [
          'user_id' => $user->getId(),
          'session_id' => $session->getId(),
          'place_number' => $placeNumber
      ]);
   
   FASE 2: Logging en Controllers
   ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
   
   RegistrationController::register()
   ├─ LOG ENTRY (INFO): "Iniciando registro de usuario" + email
   ├─ LOG VALIDATION: "Validaciones POST data" + campos
   ├─ LOG DATABASE: "INSERT user" + ID creado
   ├─ LOG EMAIL: "Enviando welcome email" + status
   └─ LOG EXIT (SUCCESS/ERROR): "Usuario registrado OK" o "Error: {mensaje}"
   
   SecurityController::login()
   ├─ LOG ENTRY: "Intento de login" + email (sin password!)
   ├─ LOG VALIDATION: "Email/password válido?" + result
   ├─ LOG SECURITY: "Sesión iniciada" + session_id
   └─ LOG EXIT: "Login {usuario} exitoso" o "Login fallido"
   
   ReservationController::create()
   ├─ LOG ENTRY: "Crear reserva" + {user_id, session_id, place_number}
   ├─ LOG VALIDATION: "Lugar válido?" + "Disponible?" + results
   ├─ LOG DATABASE: "Reserva creada" + reservation_id
   ├─ LOG EVENT: "Evento ReservationSuccess disparado"
   └─ LOG EXIT: "Reserva OK" o "Error: {tipo validación fallida}"
   
   CheckoutController::paymentConekta()
   ├─ LOG ENTRY: "Pago Conekta iniciado" + amount + currency
   ├─ LOG VALIDATION: "Token válido?" + "Amount > 0?"
   ├─ LOG API_CALL: "Llamada a Conekta" + endpoint + request body
   ├─ LOG API_RESPONSE: "Respuesta Conekta" + {status, id, error si hay}
   ├─ LOG DATABASE: "Transaction creada/actualizada" + ID
   ├─ LOG EVENT: "Email enviado" + status
   └─ LOG EXIT: "Pago procesado" + final status
   
   FASE 3: Logging en Services
   ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
   
   ReservationService::reservate()
   ├─ LOG DEBUG (stack trace): "Iniciando reservate()"
   ├─ LOG VALIDATION: "Validación lugar: {place_number}" → "✓ OK"
   ├─ LOG VALIDATION: "Conteo actual: {count}" vs "Capacidad: {capacity}"
   ├─ LOG VALIDATION: "Usuario ya tiene reserva?" → "NO OK"
   ├─ LOG BUSINESS: "¿Será FULL?" → "status = {STATUS_FULL}"
   ├─ LOG DATABASE: "INSERT reservation" → "ID={id}"
   ├─ LOG EVENT: "Evento disparado: {event_name}"
   └─ LOG EXIT: "✓ Reserva creada exitosamente"
   
   TransactionService::markExpired()
   ├─ LOG BATCH: "Buscando transacciones expiradas..."
   ├─ LOG FOUND: "Encontradas {count} transacciones expiradas"
   ├─ FOR EACH transaction:
   │  ├─ LOG UPDATE: "Marcando expirada: transaction_id={id}"
   │  ├─ LOG RELEASE: "Liberando {n} reservas"
   │  └─ LOG EMAIL: "Notificando usuario"
   └─ LOG SUMMARY: "Total procesadas: {count}"
   
   FASE 4: Logging en Repositories
   ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
   
   SessionRepository::getCalendar()
   ├─ LOG QUERY: "SELECT sessions WHERE dateStart BETWEEN ? AND ?" + params
   ├─ LOG RESULT: "Retornando {count} sesiones"
   └─ LOG PERFORMANCE: "Query time: {ms}ms"
   
   ReservationRepository::getTotalReservationsForSession()
   ├─ LOG QUERY: "COUNT WHERE session_id = ?" + session_id
   ├─ LOG RESULT: "Total reservas: {count}"
   └─ LOG AVAILABLE: "Lugares disponibles: {availableCapacity - count}"
   
   FASE 5: Logging en Listeners
   ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
   
   ReservationSuccessListener::onReservationSuccess()
   ├─ LOG ENTRY: "Evento RecepcionSuccess recibido"
   ├─ LOG ACTION: "Enviando email de confirmación a {user_email}"
   ├─ LOG EMAIL_STATUS: "Email status: {SENT/FAILED}"
   └─ LOG EXIT: "Listener completado"
   
   ReservationCanceledListener::onReservationCanceled()
   ├─ LOG ENTRY: "Evento ReservationCanceled recibido"
   ├─ LOG ACTION: "Promoviendo siguiente de WaitingList"
   ├─ LOG PROMOTION: "Usuario {promoted_id} promovido de espera"
   ├─ LOG EMAIL: "Notificando a {count} usuarios en espera"
   └─ LOG EXIT: "Listener completado"
   
   FASE 6: Visualización de Logs
   ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
   
   Ubicación: var/log/app.log (desarrollo) + separate files por módulo
   
   Estructura de línea:
   [2026-02-27 14:35:22] app.RESERVATION.INFO: [Validación iniciada] user_id=1 session_id=5 place_number=8 {request_id}
   
   Buscar logs por contexto:
   └─ tail -f var/log/app.log | grep RESERVATION
   └─ tail -f var/log/app.log | grep CONEKTA
   └─ tail -f var/log/app.log | grep ERROR
   
   Dashboard tentativo (futura):
   └─ Crear view: /admin/logs
   └─ Real-time log viewer
   └─ Filtros por: módulo, nivel, usuario, fecha
   └─ Export a CSV/JSON
   
   STATUS: 🟠 A IMPLEMENTAR INMEDIATAMENTE
   └─ Habilitar debugging rápido de los 3 errores críticos arriba

🔄 Testing Funcional (70% falta):
   ├─ [ ] Validar rutas públicas
   │   └─ GET /reservar-clase (listado sesiones)
   │   └─ GET /carrito/checkout (ver paquetes)
   │   └─ POST /login (authentication)
   │
   ├─ [ ] CRUD Admin
   │   └─ POST /admin/sesiones (crear sesión)
   │   └─ PUT /admin/sesiones/{id} (editar)
   │   └─ DELETE /admin/sesiones/{id} (eliminar)
   │
   ├─ [ ] Flujos de Pago
   │   └─ POST /carrito/payment/conekta (simular pago)
   │   └─ Webhook callback handling
   │
   ├─ [ ] Lista de Espera
   │   └─ POST /lista-de-espera (agregar)
   │   └─ Promoción automática cuando se libera
   │
   └─ [ ] Casos Edge
       └─ Sesión llena pero hay lugares
       └─ Usuario doble reserva (validación)
       └─ Paquete expirado

📊 Validación de BD (50% falta):
   ├─ [ ] Verificar foreign keys
   ├─ [ ] Validar índices están presentes
   ├─ [ ] Contar registros vs esperados
   ├─ [ ] Revisar datos corruptos o inconsistentes
   └─ [ ] Backup automatizado funciona
```

### FASE 5: Features y Mejoras - 0% EMPEZADO
```
🔲 Funcionalidad Faltante:
   ├─ [ ] Sistema de notificaciones en tiempo real (WebSockets?)
   ├─ [ ] Dashboard estadísticas mejorado
   ├─ [ ] Export de reportes (PDF/Excel)
   ├─ [ ] Multi-idioma (i18n)
   ├─ [ ] Dark mode en admin
   └─ [ ] Mobile responsive mejorado

🔲 Security Hardening:
   ├─ [ ] Implementar rate limiting en login
   ├─ [ ] Validar CORS headers
   ├─ [ ] Setup SSL certificates
   ├─ [ ] Implementar 2FA
   └─ [ ] Security headers (CSP, X-Frame-Options)

🔲 Performance Optimization:
   ├─ [ ] Setup query caching
   ├─ [ ] Redis integration
   ├─ [ ] Asset CDN setup
   ├─ [ ] Database query optimization
   └─ [ ] Load testing

🔲 DevOps y Deployment:
   ├─ [ ] Docker configuration (Dockerfile)
   ├─ [ ] docker-compose.yaml setup
   ├─ [ ] CI/CD pipeline (GitHub Actions)
   ├─ [ ] Production environment setup
   ├─ [ ] SSL/Let's Encrypt
   └─ [ ] Monitoring (DataDog/New Relic)

🔲 Documentación Final:
   ├─ [ ] API documentation (OpenAPI/Swagger)
   ├─ [ ] Deployment guide
   ├─ [ ] Troubleshooting playbook
   ├─ [ ] Architecture decision records (ADR)
   └─ [ ] Team onboarding guide
```

### FASE 6: Producción Ready - 0% EMPEZADO
```
🔲 Pre-Launch Checklist:
   ├─ [ ] Full penetration testing
   ├─ [ ] Performance benchmarking
   ├─ [ ] Backup strategy validated
   ├─ [ ] Disaster recovery plan
   ├─ [ ] SLA agreements documented
   ├─ [ ] Support procedures defined
   └─ [ ] Training for ops team

🔲 Monitoring y Alerting:
   ├─ [ ] Error tracking (Sentry)
   ├─ [ ] Log aggregation (ELK/Datadog)
   ├─ [ ] Performance monitoring
   ├─ [ ] Database monitoring
   ├─ [ ] Uptime monitoring
   └─ [ ] Alert thresholds configured
```

---

## ⚠️ DEPRECATION WARNINGS - A TENER EN CUENTA (NO URGENTE)

**Nota:** Estas advertencias aparecen en logs del servidor pero **NO se van a resolver ahora**. Son para futuras actualizaciones del stack (Symfony 7.0, Doctrine 3.0).

**Fecha de análisis:** 02/03/2026  
**Total warnings:** 37 deprecations  
**Decisión:** Documentar pero NO actualizar componentes ni cambiar estructura del stack

---

### 🟡 CATEGORÍA 1: Type Hints Faltantes (Symfony 7.0)
```
⚠️ Severidad: MEDIA | Urgencia: Antes de Symfony 7.0 | Tiempo: 30 min

Archivos afectados:
• App\Command\SessionAutoClosingCommand - Falta `: int` en execute()
• App\Form\Backend\StaffCreateType - Falta `: void` en buildForm() y configureOptions()
• App\Form\Backend\StaffPasswordType - Falta `: void` en buildForm() y configureOptions()
• App\Form\ResettingFormType - Falta `: void` en buildForm()

Impacto: ❌ Romperá en Symfony 7.0
Estado: 🔵 DOCUMENTADO - No urgente mientras estemos en Symfony 6.x
```

---

### 🟠 CATEGORÍA 2: Extensión PHP intl
```
⚠️ Severidad: IMPORTANTE | Urgencia: Corto plazo | Tiempo: 5 min

Warning: "Please install the intl PHP extension for best performance"

Impacto:
• Performance reducido en internacionalización
• Funciones de locale/timezone limitadas

Solución futura:
  # php.ini
  extension=intl

Estado: 🔵 DOCUMENTADO - Proyecto funciona sin ella
```

---

### 🟡 CATEGORÍA 3: Doctrine ORM Auto-Mapping
```
⚠️ Severidad: MEDIA | Urgencia: Antes de Doctrine Bundle 3.0 | Tiempo: 5 min

Warning: "doctrine.orm.controller_resolver.auto_mapping" default cambiará de true a false

Solución futura:
  # config/packages/doctrine.yaml
  doctrine:
      orm:
          controller_resolver:
              auto_mapping: true  # Explícito

Estado: 🔵 DOCUMENTADO - Funciona con default actual
```

---

### 🟢 CATEGORÍA 4: MakerBundle Authenticator
```
⚠️ Severidad: BAJA | Urgencia: No urgente | Tiempo: -

Warning: "MakeAuthenticator class is deprecated, use Security\Make* instead"

Impacto: Solo comandos de generación (desarrollo)
Estado: 🔵 DOCUMENTADO - No afecta producción
```

---

### 🔴 CATEGORÍA 5: Knp\DoctrineBehaviors Subscribers → Listeners
```
⚠️ Severidad: ALTA | Urgencia: Antes de Symfony 7.0 | Tiempo: 2-3 horas
⚠️ Cantidad: 14 warnings (7 subscribers × 2 contextos)

Subscribers afectados:
1. BlameableEventSubscriber
2. LoggableEventSubscriber
3. SluggableEventSubscriber
4. SoftDeletableEventSubscriber
5. TimestampableEventSubscriber
6. TranslatableEventSubscriber
7. TreeEventSubscriber
8. UuidableEventSubscriber

Warning: "Registering as Doctrine subscriber is deprecated. Use #[AsDoctrineListener] instead"

Impacto: Paquete de terceros (knplabs/doctrine-behaviors)
Solución futura: Actualizar knplabs/doctrine-behaviors o migrar subscribers a listeners

Estado: 🔵 DOCUMENTADO - Requiere actualización de paquete tercero
```

---

### 🟡 CATEGORÍA 6: Security Bundle Alias
```
⚠️ Severidad: MEDIA | Urgencia: Antes de Symfony 7.0 | Tiempo: 15 min

Warning: "Symfony\Component\Security\Core\Security alias deprecated"
  Use "Symfony\Bundle\SecurityBundle\Security" instead

Archivo: Knp\DoctrineBehaviors\Provider\UserProvider

Impacto: Paquete de terceros
Solución futura: Actualizar knplabs/doctrine-behaviors

Estado: 🔵 DOCUMENTADO - Se resuelve actualizando paquete
```

---

### 🟡 CATEGORÍA 7: Liip\ImagineBundle Twig Mode
```
⚠️ Severidad: MEDIA | Urgencia: Antes de liip/imagine-bundle 3.0 | Tiempo: 5 min
⚠️ Cantidad: 2 warnings

Warning: "Liip\ImagineBundle\Templating classes deprecated"
  Configure "liip_imagine.twig.mode" to "lazy"

Solución futura:
  # config/packages/liip_imagine.yaml
  liip_imagine:
      twig:
          mode: lazy

Estado: 🔵 DOCUMENTADO - Funciona con modo actual
```

---

### 🔴 CATEGORÍA 8: Doctrine ORM getEntity() → getObject()
```
⚠️ Severidad: ALTA | Urgencia: Antes de Doctrine ORM 3.0 | Tiempo: 15 min

Warning: "Method getEntity() is deprecated. Use getObject() instead"
Archivo: TranslatableEventSubscriber.php:164 (knplabs/doctrine-behaviors)

Impacto: Paquete de terceros
Solución futura: Actualizar knplabs/doctrine-behaviors

Estado: 🔵 DOCUMENTADO - Se resuelve actualizando paquete
```

---

### 🟠 CATEGORÍA 9: DateTime Passing Null
```
⚠️ Severidad: IMPORTANTE | Urgencia: Corto plazo | Tiempo: 1 hora

Warning: "Passing null to parameter #2 ($dateType) of type int is deprecated"

Impacto: Código propio usando DateTimeType con null
Acción futura: Buscar formularios con DateTimeType y especificar tipo explícito

Estado: 🔵 DOCUMENTADO - Requiere revisión de formularios
```

---

### 📋 RESUMEN DE DEPRECATIONS

| Categoría | Severidad | Warnings | Tiempo | Origen |
|-----------|-----------|----------|--------|--------|
| Type Hints | 🟡 Media | 7 | 30 min | Código propio |
| intl extension | 🟠 Alta | 1 | 5 min | PHP config |
| Doctrine auto-mapping | 🟡 Media | 1 | 5 min | Config |
| MakerBundle | 🟢 Baja | 1 | - | Dev only |
| **Knp Subscribers** | 🔴 **Alta** | **14** | **2-3h** | **knplabs/doctrine-behaviors** |
| Security alias | 🟡 Media | 1 | 15 min | knplabs/doctrine-behaviors |
| Liip Twig mode | 🟡 Media | 2 | 5 min | Config |
| Doctrine getEntity | 🔴 Alta | 1 | 15 min | knplabs/doctrine-behaviors |
| DateTime null | 🟠 Alta | 1 | 1h | Código propio |
| **TOTAL** | | **37** | **~5h** | |

---

### 🎯 ESTRATEGIA FUTURA (NO IMPLEMENTAR AHORA)

**Cuando actualicemos stack (Symfony 7.0 / Doctrine 3.0):**

1. **Actualizar paquetes de terceros:**
   ```bash
   composer update knplabs/doctrine-behaviors
   composer update liip/imagine-bundle
   ```

2. **Configuraciones rápidas (20 min total):**
   - Habilitar `extension=intl` en php.ini
   - Configurar `liip_imagine.twig.mode: lazy`
   - Configurar `doctrine.orm.controller_resolver.auto_mapping: true`

3. **Código propio (2 horas total):**
   - Agregar type hints a Commands/Forms
   - Buscar y arreglar DateTimeType con null

4. **Si knplabs no actualiza:**
   - Migrar subscribers a listeners con `#[AsDoctrineListener]`
   - O reemplazar paquete por implementación propia

**Conclusión:** Proyecto funciona correctamente con Symfony 6.4. Estas deprecations son avisos para futuras versiones mayores (7.0/3.0).

---

## 📦 BLOQUES HISTÓRICOS DEPURADOS

Se removieron del histórico los siguientes bloques por duplicidad o desactualización:

- `ISSUES IDENTIFICADOS - FIXES PENDIENTES` (duplicado respecto a Partes 2.3, 2.5 y 7).
- `RESUMEN ESTADÍSTICO` con métricas antiguas (`~48%`, `0/1`, etc.).
- Dos versiones de `PRÓXIMOS PASOS` que repetían tareas ya resueltas o reemplazadas por la Parte 5 vigente.

El detalle vigente de pendientes y ejecución está consolidado en:

- Parte 2.3 (pendientes activos)
- Parte 2.5 (listado maestro de issues)
- Parte 5 (plan de ejecución por partes)
- Parte 7 (detalle item por item)

---

## 📝 NOTAS DE ACTUALIZACIÓN

**02/03/2026 - Resolución del Error #3 (PHP Memory Limit):**
- 🔍 Diagnosticado: Error "Allowed memory size of 134217728 bytes exhausted" en página de pagos
- 🔧 Causa: Servidor PHP usando memory_limit por defecto de 128M, insuficiente para templates Twig complejos
- ✅ Fix: Reiniciado servidor con `php -d memory_limit=512M -S 127.0.0.1:8000 -t public`
- ✅ Verificación: Servidor activo en puerto 8000 con límite de 512MB
- 📊 Progreso actualizado: 48% → 50% (3/3 errores críticos resueltos = 100%)
- 📋 Documentación: Actualizado progreso.md y guías técnicas con comando correcto

**27/02/2026 - Resolución del Error #2 (MAILER_DSN):**
- 🔍 Diagnosticado: POST /register devolvía 500 (Environment variable not found: MAILER_DSN)
- 🔧 Causa: Variable de entorno MAILER_DSN requerida por Symfony MailerInterface no estaba definida
- ✅ Fix: Agregado `MAILER_DSN=null://default` a .env (null:// es mailer de desarrollo)
- ✅ Verificación: curl devuelve Status 200 en /register avec XMLHttpRequest
- 📊 Progreso actualizado: 45% → 48% (2/3 errores críticos resueltos)
- 📋 Documentación: Actualizado progreso.md con solución y timeline

**27/02/2026 - Limpieza Anterior (Progreso Document):**
- ✅ Removido contenido duplicado (template viejo de 347 líneas)
- ✅ Consolidado progreso en 615 líneas claras y actionables
- ✅ Reorganizado "PRÓXIMOS PASOS" por urgencia
- ✅ Actualizado estado general y tabla de resumen

**Documentación Externa Referenciada:**
- [DOCUMENTACION_COMPLETA.md](DOCUMENTACION_COMPLETA.md) - Project overview
- [DIAGRAMA_RELACIONES.md](DIAGRAMA_RELACIONES.md) - Architecture & entities
- [GUIA_TECNICA_DESARROLLO.md](GUIA_TECNICA_DESARROLLO.md) - Development guide
- [GUIA_TECNICA_EXPANSION.md](GUIA_TECNICA_EXPANSION.md) - Advanced patterns
- [DOCUMENTACION_EXPANSION_COMPLETA.md](DOCUMENTACION_EXPANSION_COMPLETA.md) - Complete workflows

---

**OBJETIVO FINAL**: Transformar PB STUDIO de codebase raw → Production-Ready Platform con documentación completa, errores identificados/corregidos, testing validado, y monitoreo activo. 

## Estado actual del entorno

- PHP 8.2.30 (CLI) con extensiones habilitadas:
  - ✅ `pdo_mysql` (HABILITADO) para conexión a bases de datos MySQL
  - ✅ `curl`, `openssl`, `zip` para Composer y manejo de archivos
  - ✅ `ctype`, `iconv` (built-in, requeridas por Symfony)
  - ✅ `session`, `simplexml`, `tokenizer` (built-in)
  - ✅ Timezone configurado: `America/Mexico_City`
- Node.js 20.20.0 y npm 10.8.2
- MySQL 5.7 (servicio `MySQL57` activo en Windows, puerto 3306)
- Composer 2.7 (`composer.phar` en `C:\Users\yvasallo\AppData\Local\Programs\composer.phar`)
- Git instalado vía winget
- **Dependencias completadas:**
  - ✅ `composer install` — 121 paquetes (vendor/ listo)
  - ✅ `npm install` — 846 paquetes (node_modules/ listo, 42 vulnerabilidades a revisar)
  - ✅ Todos los plugins npm del `package.json` descargados (gentelella, select2, summernote, etc.)

## Dependencias principales

- PHP (requerido >=8.2) y un conjunto de bundles Symfony 6.4, Doctrine, Twig, monolog, etc.
- Plugins/paquetes usados: doctrineextensions, conekta API, knp-menu/paginator, liip/imagine, vich/uploader...
- JavaScript/Front-end: webpack-encore, Bootstrap 3, jQuery, select2, summernote, animate.css, etc.

## Extensiones recomendadas de VSCode

- PHP Intelephense
- Twig
- ESLint
- PHP CS Fixer
- Docker (si se utilizan contenedores)
- Symfony Support (opcional)
- YAML

## Instalación de MySQL 8.0 y otros requisitos

El proyecto originalmente requiere MySQL 8.0 o superior. En sistemas Windows el instalador puede fallar
si deja archivos bloqueados por el editor (por ejemplo, VS Code) abierto. Para evitar problemas:

1. Cierra VS Code y cualquier otro programa que pueda estar accediendo a la carpeta de instalación.
2. Ejecuta el instalador de MySQL con privilegios de administrador (clic derecho → "Ejecutar como administrador").
3. Elige un directorio fuera de tu workspace (`C:\MySQL`, por ejemplo) para no interferir con el código fuente.
4. Una vez instalado, asegúrate de que el servicio está en ejecución (`MySQL80` es el nombre del servicio predeterminado).
   Puedes comprobarlo con PowerShell:
   ```powershell
   Get-Service MySQL*
   Test-NetConnection -ComputerName 127.0.0.1 -Port 3306
   ```
5. Instala un cliente si lo necesitas (`mysql`, `mysqladmin`) o utiliza el servidor desde Symfony/Doctrine.
6. Actualiza el `DATABASE_URL` en tu `.env` y crea la base de datos con el cliente (`mysql -u root -p` …) o desde Symfony
   con `php bin/console doctrine:database:create`.

### Verificación de conectividad desde PHP

- Asegúrate de que la extensión PHP `pdo_mysql` esté habilitada en `php.ini` (busca y descomenta `extension=pdo_mysql`).
  Sin ella obtendrás el error `could not find driver` al ejecutar comandos Doctrine.
- Si usas un usuario distinto de `root`, crea la base y dale permisos adecuados.
- La URL en el `.env` debe ser algo como:
  ```env
  APP_ENV=dev
  APP_SECRET=some_secret
  DATABASE_URL="mysql://user:pass@127.0.0.1:3306/dbname"
  ```

Si al ejecutar `php bin/console` sigues viendo errores de formato, revisa que el `.env` no tenga BOM o
esté guardado en UTF‑8 sin byte‑order mark.

Si el servicio MySQL está activo pero Doctrine no puede conectarse, primero comprueba que el puerto 3306 no
esté bloqueado por un cortafuegos y que el usuario/contraseña son correctos.

## Instalación de plugins/dependencias adicionales

- PHP: además de los paquetes obligatorios listados arriba, comprueba el `composer.json` para identificar cualquier plugin
  extra (bundles de terceros, herramientas de desarrollo, etc.). Instálalos mediante `php composer.phar require <paquete>`.
- JavaScript: usa `npm install` o `yarn add` para componentes frontend, incluyendo los plugins de jQuery o de UI que el
  proyecto necesite. Asegúrate de que `webpack.config.js` está configurado para construirlos si se usan en el bundle.
- Extensiones de Symfony/Visual Studio Code: instálalas desde la paleta de comandos (`Ctrl+P`) o desde la vista de
  extensiones con los nombres indicados arriba.

Puedes documentar aquí cada plugin específico si necesitas instrucciones especiales de configuración o versiones
recomendadas.

## Completado: Instalación y configuración (27/Feb/2026)

### ✅ Fase 1 — Extensiones PHP y configuración
- Descomentada `extension=pdo_mysql` en `php.ini`
- Configurado `date.timezone = America/Mexico_City` en `php.ini`
- Verificación: `php -m` muestra `PDO` y `pdo_mysql` cargados

### ✅ Fase 2 — Dependencias PHP y JavaScript
- `php composer.phar install` → 121 paquetes descargados (Symfony 6.4, Doctrine, etc.)
- `npm install` → 846 paquetes listos (gentelella, select2, summernote, parsleyjs, etc.)

### ✅ Fase 3 — Base de datos MySQL (corregida 27/Feb/2026)
**Problemas encontrados durante la instalación:**
- ❌ `.env` fue creado con encoding incorrecto (BOM UTF-16) → Doctrine no podía parsear
- ❌ `.env` tenía credenciales incorrectas: `DATABASE_URL="mysql://root@127.0.0.1:3306/test"` (sin contraseña y DB incorrecta)
- ❌ Migraciones fallaban intentando crear tabla `migration_versions` que ya existía

**Solución aplicada:**
- ✅ Reescrito `.env` con encoding ASCII/UTF-8 limpio
- ✅ Actualizado con credenciales correctas: `root` / `exael` y BD `pbstudio`
- ✅ Ejecutado `doctrine:database:create` (BD ya tiene todas las tablas de las migraciones previas)
- ✅ Verificadas 20 tablas existentes en la BD:
  - Core: `staff`, `staff_profile`, `staff_branch_office`, `user`, `branch_office`
  - Negocio: `package`, `coupon`, `coupon_package`, `coupon_history`, `reservation`, `transaction`
  - Educación: `discipline`, `instructors_disciplines`, `exercise_room`, `session`
  - Sistema: `post`, `waiting_list`, `configuration`, `messenger_messages`, `doctrine_migration_versions`

### ✅ Fase 4 — Compilación de assets
- Ejecutado: `npm run build`
- Resultado: 35 archivos compilados en `public/build/`
- Entrypoints: `app` (191 KiB) y `backend` (1.1 MiB)

### ✅ Fase 5 — Servidor en ejecución
- **Estado: ACTIVO** en `http://127.0.0.1:8000`
- Conexión MySQL: ✅ (root/exael)
- Symfony framework: ✅
- Assets compilados: ✅
- Datos importados: ✅ (4 posts, 3 sucursales, configuración)

---

## 🎯 Descubrimiento e importación de datos (27/Feb/2026)

### Problema inicial
La aplicación mostraba **HTTP 404 - Post object not found** porque la BD estaba vacía (0 registros).

### Solución encontrada
En el directorio `Especificaciones/` se encontró el archivo **`pbstudio_back.sql.gz`** (47 MB):
- Backup completo de la BD con estructura + datos
- Descargado: 02/04/2025
- Contenía todas las tablas con INSERT statements

### Pasos para importar datos
1. **Descomprimir el archivo:**
   ```powershell
   # Crear script PHP para extraer .gz
   php Especificaciones/extract_sql.php
   # Resultado: pbstudio_back.sql (49 MB)
   ```

2. **Importar SQL a la BD:**
   ```powershell
   php import_sql.php
   # Resultado: 77 SQL statements ejecutadas
   ```

3. **Verificar datos:**
   ```powershell
   php check_data.php
   ```

### Datos importados
| Tabla | Registros |
|-------|-----------|
| post | 4 |
| branch_office | 3 |
| configuration | ✓ |
| doctrine_migration_versions | ✓ |
| Otras tablas | estructura |

---

## Estado final del proyecto

✅ **Stack completo operativo:**
- PHP 8.2.30 + Symfony 6.4 + MySQL 5.7
- 121 paquetes PHP (Composer)
- 846 paquetes JS (npm)
- 20 tablas de BD con estructura
- Datos iniciales cargados
- Assets compilados (35 archivos)
- Servidor en `http://127.0.0.1:8000`

✅ **Documentación completa:**
- Guía de instalación
- Guía de levantamiento
- Tabla de comandos
- Scripts de verificación

---

## Cómo levantar el proyecto (guía paso a paso)

### Paso 1: Verificar/configurar el entorno
```powershell
# Verificar PHP está correctamente configurado
php -v
php -m | Select-String -Pattern pdo

# Verificar que MySQL está corriendo
Get-Service MySQL*
Test-NetConnection -ComputerName 127.0.0.1 -Port 3306
```

### Paso 2: Configurar variables de entorno
El archivo `.env` debe contener (ubicado en la raíz del proyecto):
```env
APP_ENV=dev
APP_SECRET=ChangeMe
DATABASE_URL="mysql://root:exael@127.0.0.1:3306/pbstudio"
MESSENGER_TRANSPORT_DSN=doctrine://default?queue_name=default
```

**⚠️ Importante**: Guardar como **ASCII/UTF-8 sin BOM** — si usas PowerShell:
```powershell
@'
APP_ENV=dev
APP_SECRET=ChangeMe
DATABASE_URL="mysql://root:exael@127.0.0.1:3306/pbstudio"
MESSENGER_TRANSPORT_DSN=doctrine://default?queue_name=default
'@ | Out-File -FilePath .env -Encoding ascii
```

### Paso 3: Instalar dependencias (si no están ya descargadas)
```powershell
php C:\Users\yvasallo\AppData\Local\Programs\composer.phar install
npm install
```

### Paso 4: Preparar la base de datos
```powershell
# Crear base de datos (si no existe)
php bin/console doctrine:database:create --if-not-exists

# Sincronizar metadata de migrations (crear tabla doctrine_migration_versions si falta)
php bin/console doctrine:migrations:sync-metadata-storage

# Ejecutar migraciones (opcional si las tablas ya existen)
# php bin/console doctrine:migrations:migrate --no-interaction
```

### Paso 5: Compilar assets (JavaScript/CSS)
```powershell
# Compilación de producción
npm run build

# O modo watch para desarrollo (se recompila automáticamente)
npm run watch
```

### Paso 6: Limpiar caché
```powershell
php bin/console cache:clear
```

### Paso 7: Iniciar el servidor
```powershell
# Opción 1: servidor nativo de PHP (recomendado para desarrollo)
# IMPORTANTE: Usar 512M de memoria para evitar errores en páginas complejas
php -d memory_limit=512M -S 127.0.0.1:8000 -t public

# Opción 2: Symfony CLI (si está instalado)
symfony server:start
```

Luego accede a: **`http://127.0.0.1:8000`**

---

---

## 📓 Documentación Generada (27/Feb/2026)

Se han generado tres documentos completos de análisis del proyecto:

### ✅ 1. **DOCUMENTACION_COMPLETA.md**
Descripción completa del proyecto incluyendo:
- Visión general y objetivos
- Stack tecnológico (PHP, MySQL, Node, Symfony 6.4)
- Estructura de carpetas del proyecto
- **16 Entidades documentadas:** User, Session, Reservation, Transaction, Package, Coupon, Staff, etc.
- Relaciones entre tablas (16 relaciones Many-to-One, One-to-Many, etc)
- **Flujo de trabajo detallado:** Reserva → Pago → Asistencia
- 13 Controllers principales (ReservationController, CheckoutController, etc)
- 3 Servicios principales (ReservationService, TransactionService, WaitingListService)
- Rutas públicas y admin
- Configuración de BD (488,789 registros, índices, constraints)
- CRON jobs requeridos
- Troubleshooting común
- **Total: 19 secciones** con 1,200+ líneas

### ✅ 2. **DIAGRAMA_RELACIONES.md**
Mapa visual de relaciones entre entidades incluyendo:
- **Diagrama UML ASCII** completo de todas las entidades
- **16 Relaciones detalladas** con flujo de datos
- Índices estratégicos en BD
- **Flujo crítico:** Compra → Reserva → Asistencia
- Vista de datos por tabla (queries típicas)
- Restricciones y validaciones
- Validadores personalizados
- **Total: 500+ líneas** con diagramas visuales

### ✅ 3. **GUIA_TECNICA_DESARROLLO.md**
Manual práctico para desarrolladores incluyendo:
- **Setup inicial:** Requisitos y instalación paso-a-paso
- Estructura de carpetas y convenciones
- 6 Tipos de archivos: Controllers, Entities, Repositories, Services, Forms, Validation
- **Ciclo de desarrollo:** Crear features, cambiar entities, queries personalizadas
- Templates Twig: Base, features, funciones útiles
- **JavaScript/Frontend:** Assets, webpack-encore, plugins
- **Flujos comunes:** Crear rutas, servir JSON, formularios POST, paginación
- Debugging: Profiler, dump, logs
- Testing: Unit tests y tests de aplicación
- Performance: Optimización, caché
- Deployment: Nginx, variables de entorno, CRON
- **30+ comandos útiles**
- Troubleshooting por problema
- **Total: 25 secciones** con 1,000+ líneas

---

## Referencia rápida de comandos

| Tarea | Comando |
|-------|---------|
| Verificar PHP | `php -v` |
| Verificar extensiones | `php -m` |
| Instalar PHP deps | `php composer.phar install` |
| Instalar JS deps | `npm install` |
| Crear base de datos | `php bin/console doctrine:database:create --if-not-exists` |
| Ejecutar migraciones | `php bin/console doctrine:migrations:migrate --no-interaction` |
| Compilar assets (prod) | `npm run build` |
| Compilar assets (watch) | `npm run watch` |
| Limpiar cache | `php bin/console cache:clear` |
| Iniciar servidor | `php -d memory_limit=512M -S 127.0.0.1:8000 -t public` |
| Ejecutar tests | `php bin/phpunit` |
| Validar schema | `php bin/console doctrine:schema:validate` |
| Listar migraciones | `php bin/console doctrine:migrations:list` |
| **CRON: Cerrar sesiones** | `php bin/console app:session:autoclosing` |
| **CRON: Expirar transacciones** | `php bin/console app:transaction:checkexpiration` |
| **Ver documentación** | Abrir `DOCUMENTACION_COMPLETA.md` |
| **Ver relaciones** | Abrir `DIAGRAMA_RELACIONES.md` |
| **Guía desarrollo** | Abrir `GUIA_TECNICA_DESARROLLO.md` |
//MargotPBStudio251512