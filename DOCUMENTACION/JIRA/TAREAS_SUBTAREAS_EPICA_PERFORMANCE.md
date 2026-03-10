# 📋 TAREAS Y SUBTAREAS - ÉPICA PERFORMANCE CAJA/PAGOS

**Épica:** SCRUM-33 - Optimización de Consultas y Performance en Caja/Pagos  
**Historias creadas:** SCRUM-34 a SCRUM-41  
**Fecha:** 09/03/2026

---

## ✅ RESUMEN EJECUTIVO

- **Épica:** SCRUM-33 (actualizada)
- **Historias:** 8 creadas (SCRUM-34 a SCRUM-41)
- **Tareas pendientes:** 23
- **Subtareas pendientes:** 69
- **Total items por crear:** 92

---

## 📖 HISTORIA 1: SCRUM-34 - Análisis y Diagnóstico de Performance

### 🔧 TAREA 1.1: Profiling de Rutas Críticas
**Tipo:** Task  
**Parent:** SCRUM-34  
**Descripción:** Analizar tiempo de ejecución de rutas /backend/caja y /backend/payments

#### 📋 SUBTAREA 1.1.1: Configurar Symfony Profiler
- Habilitar profiler en entorno dev
- Configurar DataCollector para queries
- Verificar que registre tiempos completos

#### 📋 SUBTAREA 1.1.2: Ejecutar Profiling en Rutas
- Cargar /backend/caja y capturar profile token
- Cargar /backend/payments y capturar profile token
- Extraer datos de queries ejecutadas
- Documentar número de queries y tiempos totales

#### 📋 SUBTAREA 1.1.3: Identificar Queries Problemáticas
- Filtrar queries con tiempo > 100ms
- Identificar queries duplicadas (N+1)
- Documentar queries sin índices

---

### 🔧 TAREA 1.2: Análisis con EXPLAIN en Queries Lentas
**Tipo:** Task  
**Parent:** SCRUM-34  
**Descripción:** Ejecutar EXPLAIN en queries identificadas para entender plan de ejecución

#### 📋 SUBTAREA 1.2.1: Extraer Queries SQL del Profiler
- Copiar queries SQL exactas desde profiler
- Guardar en archivo de referencia con tiempos

#### 📋 SUBTAREA 1.2.2: Ejecutar EXPLAIN en MySQL
- Conectar a BD y ejecutar EXPLAIN para cada query
- Identificar table scans (type = ALL)
- Identificar falta de uso de índices (key = NULL)
- Capturar rows examinadas

#### 📋 SUBTAREA 1.2.3: Documentar Resultados
- Crear tabla: Query | Tiempo | Rows | Tipo | Índice Usado | Problema
- Priorizar por impacto (tiempo × frecuencia)

---

### 🔧 TAREA 1.3: Medición de Métricas Baseline
**Tipo:** Task  
**Parent:** SCRUM-34  
**Descripción:** Establecer métricas actuales para comparación post-optimización

#### 📋 SUBTAREA 1.3.1: Medir Tiempos de Carga
- Tiempo de carga inicial de /backend/caja (avg de 10 cargas)
- Tiempo de carga inicial de /backend/payments (avg de 10 cargas)
- Tiempo de filtrado por fechas
- Tiempo de búsqueda por usuario

#### 📋 SUBTAREA 1.3.2: Contar Queries Ejecutadas
- Total de queries en carga inicial de caja
- Total de queries en carga inicial de pagos
- Identificar queries duplicadas

#### 📋 SUBTAREA 1.3.3: Documentar Dataset
- Cantidad de transacciones activas
- Cantidad de reservaciones activas
- Rango de fechas típico consultado

---

## 📖 HISTORIA 2: SCRUM-35 - Optimización de Índices en Base de Datos

### 🔧 TAREA 2.1: Crear Índices en Tabla transaction
**Tipo:** Task  
**Parent:** SCRUM-35  
**Descripción:** Implementar índices para optimizar búsquedas en transacciones

#### 📋 SUBTAREA 2.1.1: Analizar Consultas en Transaction
- Revisar TransactionRepository queries
- Identificar columnas en WHERE, ORDER BY, JOIN
- Verificar índices actuales: SHOW INDEX FROM transaction

#### 📋 SUBTAREA 2.1.2: Crear Migración de Índices
- Crear migration: doctrine:migrations:generate
- Agregar índice en user_id
- Agregar índice en status
- Agregar índice compuesto en (createdAt, status)
- Agregar índice en expirationAt
- Agregar índice en package_id

#### 📋 SUBTAREA 2.1.3: Ejecutar y Validar Migration
- Ejecutar: doctrine:migrations:migrate
- Verificar con: SHOW INDEX FROM transaction
- Ejecutar EXPLAIN en queries de transacciones
- Confirmar que usan los nuevos índices

---

### 🔧 TAREA 2.2: Crear Índices en Tabla reservation
**Tipo:** Task  
**Parent:** SCRUM-35  
**Descripción:** Implementar índices para optimizar búsquedas en reservaciones

#### 📋 SUBTAREA 2.2.1: Analizar Consultas en Reservation
- Revisar ReservationRepository queries
- Identificar columnas frecuentes en filtros
- Verificar índices actuales

#### 📋 SUBTAREA 2.2.2: Crear Migración de Índices
- Agregar índice compuesto en (session_id, status)
- Agregar índice compuesto en (user_id, status)
- Agregar índice en createdAt
- Agregar índice en transaction_id

#### 📋 SUBTAREA 2.2.3: Ejecutar y Validar
- Ejecutar migration
- Validar con EXPLAIN
- Comparar tiempos antes/después

---

### 🔧 TAREA 2.3: Optimizar Índices Existentes
**Tipo:** Task  
**Parent:** SCRUM-35  
**Descripción:** Revisar y mejorar índices que ya existen pero son ineficientes

#### 📋 SUBTAREA 2.3.1: Auditar Índices Actuales
- Ejecutar query para ver uso de índices: sys.schema_unused_indexes
- Identificar índices duplicados o redundantes
- Identificar índices nunca usados

#### 📋 SUBTAREA 2.3.2: Eliminar Índices Innecesarios
- Crear migration para DROP de índices no utilizados
- Reducir overhead de escritura en BD
- Documentar razón de eliminación

---

## 📖 HISTORIA 3: SCRUM-36 - Refactorización de Queries con N+1

### 🔧 TAREA 3.1: Refactorizar TransactionRepository
**Tipo:** Task  
**Parent:** SCRUM-36  
**Descripción:** Implementar eager loading en consultas de transacciones

#### 📋 SUBTAREA 3.1.1: Identificar Relaciones Lazy
- Revisar entidad Transaction
- Listar relaciones: user, package, coupon, reservations
- Identificar cuáles se acceden en vistas

#### 📋 SUBTAREA 3.1.2: Implementar Eager Loading en getAllByUser()
- Modificar query para incluir JOINs
- Agregar: ->leftJoin('t.user', 'u')->addSelect('u')
- Agregar: ->leftJoin('t.package', 'p')->addSelect('p')
- Agregar: ->leftJoin('t.coupon', 'c')->addSelect('c')

#### 📋 SUBTAREA 3.1.3: Implementar Eager Loading en getGroupedByPackage()
- Refactorizar query con JOINs explícitos
- Optimizar agrupación
- Validar resultado idéntico

#### 📋 SUBTAREA 3.1.4: Validar con Profiler
- Cargar página con listado
- Confirmar reducción de queries
- Verificar tiempo de ejecución

---

### 🔧 TAREA 3.2: Refactorizar ReservationRepository
**Tipo:** Task  
**Parent:** SCRUM-36  
**Descripción:** Optimizar queries de reservaciones

#### 📋 SUBTAREA 3.2.1: Optimizar getReservationsBySession()
- Agregar eager loading de user
- Agregar eager loading de transaction
- Evitar queries adicionales en loop

#### 📋 SUBTAREA 3.2.2: Optimizar getByUser()
- Implementar JOINs con session, discipline, branchOffice
- Reducir queries de 50+ a 3-4

#### 📋 SUBTAREA 3.2.3: Optimizar getAllCompletedByUser()
- Eager load de relaciones necesarias
- Optimizar filtros de status

---

### 🔧 TAREA 3.3: Refactorizar Queries DQL Complejas
**Tipo:** Task  
**Parent:** SCRUM-36  
**Descripción:** Optimizar DQL con funciones personalizadas o nativas

#### 📋 SUBTAREA 3.3.1: Sustituir DATEADD/ADDTIME
- Identificar uso de funciones no estándar
- Usar DATE_ADD nativa de Doctrine
- Validar compatibilidad con MySQL

#### 📋 SUBTAREA 3.3.2: Optimizar IFELSE/CASE
- Revisar uso de IFELSE en TransactionRepository
- Sustituir con CASE WHEN estándar
- Validar resultado

---

## 📖 HISTORIA 4: SCRUM-37 - Implementación de Caché en Consultas Frecuentes

### 🔧 TAREA 4.1: Configurar Symfony Cache
**Tipo:** Task  
**Parent:** SCRUM-37  
**Descripción:** Setup de sistema de caché

#### 📋 SUBTAREA 4.1.1: Configurar Cache Pool
- Agregar configuración en config/packages/cache.yaml
- Crear pool específico: cache.app.transactions
- Configurar lifetime: 300 segundos (5 min)

#### 📋 SUBTAREA 4.1.2: Instalar Dependencias
- Verificar symfony/cache instalado
- Considerar Redis para prod (opcional)
- Configurar adapter según entorno

---

### 🔧 TAREA 4.2: Cachear Estadísticas de Dashboard
**Tipo:** Task  
**Parent:** SCRUM-37  
**Descripción:** Implementar cache en datos de dashboard

#### 📋 SUBTAREA 4.2.1: Identificar Datos Cacheables
- Total de transacciones del día
- Total de ingresos del día/mes
- Estadísticas por paquete
- Reservaciones activas

#### 📋 SUBTAREA 4.2.2: Implementar Cache en Service
- Inyectar CacheInterface en TransactionService
- Wrap queries con cache->get()
- Configurar tags para invalidación

#### 📋 SUBTAREA 4.2.3: Implementar Invalidación
- Invalidar cache en create/update de Transaction
- Listener en eventos de Transaction
- Invalidar cache en cancelaciones

---

### 🔧 TAREA 4.3: Cachear Listados de Configuración
**Tipo:** Task  
**Parent:** SCRUM-37  
**Descripción:** Cachear datos que rara vez cambian

#### 📋 SUBTAREA 4.3.1: Cachear Lista de Paquetes
- Cache en PackageRepository::findAllActive()
- Lifetime: 1 hora
- Invalidar en cambios de paquetes

#### 📋 SUBTAREA 4.3.2: Cachear Configuración General
- Cache en ConfigurationRepository
- Lifetime: 30 minutos
- Invalidar en updates de config

---

## 📖 HISTORIA 5: SCRUM-38 - Optimización de Paginación y Carga

### 🔧 TAREA 5.1: Implementar Paginación con KnpPaginator
**Tipo:** Task  
**Parent:** SCRUM-38  
**Descripción:** Usar bundle de paginación optimizada

#### 📋 SUBTAREA 5.1.1: Instalar KnpPaginatorBundle
- composer require knplabs/knp-paginator-bundle
- Configurar en bundles.php
- Configurar opciones en packages/

#### 📋 SUBTAREA 5.1.2: Aplicar en Controller de Caja
- Inyectar PaginatorInterface
- Modificar acción index para paginar
- Configurar items por página: 50

#### 📋 SUBTAREA 5.1.3: Actualizar Vista
- Agregar controles de paginación
- Implementar template de paginator
- Validar navegación funciona

---

### 🔧 TAREA 5.2: Optimizar Conteo Total
**Tipo:** Task  
**Parent:** SCRUM-38  
**Descripción:** Evitar COUNT(*) pesados en cada página

#### 📋 SUBTAREA 5.2.1: Implementar Count Aproximado
- Usar FOUND_ROWS() en MySQL
- Cachear total count por 1 minuto
- Reducir overhead de conteo

#### 📋 SUBTAREA 5.2.2: Lazy Total Count
- Solo calcular total en primera página
- Reusar en navegación posterior
- Documentar comportamiento

---

### 🔧 TAREA 5.3: Implementar Lazy Loading en Tablas HTML
**Tipo:** Task  
**Parent:** SCRUM-38  
**Descripción:** Cargar datos bajo demanda en frontend

#### 📋 SUBTAREA 5.3.1: Implementar Scroll Infinito (Opcional)
- Usar AJAX para cargar más resultados
- Implementar endpoint /backend/caja/load-more
- JavaScript para append dinámico

#### 📋 SUBTAREA 5.3.2: Preload de Próxima Página
- Prefetch de página siguiente
- Mejorar UX de navegación
- Caché en navegador

---

## 📖 HISTORIA 6: SCRUM-39 - Testing y Validación de Performance

### 🔧 TAREA 6.1: Crear Tests de Performance
**Tipo:** Task  
**Parent:** SCRUM-39  
**Descripción:** Implementar tests que midan tiempos de ejecución

#### 📋 SUBTAREA 6.1.1: Setup de Testing Framework
- Configurar PHPUnit para performance tests
- Instalar phpbench (opcional)
- Crear carpeta tests/Performance/

#### 📋 SUBTAREA 6.1.2: Test de Carga de Caja
- Test que carga /backend/caja
- Assert tiempo < 2 segundos
- Assert queries < 10

#### 📋 SUBTAREA 6.1.3: Test de Consultas Repository
- Test de TransactionRepository::getAllByUser()
- Assert queries exactas (no N+1)
- Assert tiempo < 500ms

---

### 🔧 TAREA 6.2: Benchmark Antes/Después
**Tipo:** Task  
**Parent:** SCRUM-39  
**Descripción:** Comparación cuantitativa de mejoras

#### 📋 SUBTAREA 6.2.1: Ejecutar Benchmark Baseline
- Correr tests en versión sin optimización
- Guardar resultados en archivo de referencia
- Documentar configuración del entorno

#### 📋 SUBTAREA 6.2.2: Ejecutar Benchmark Optimizado
- Correr tests en versión optimizada
- Comparar resultados lado a lado
- Calcular % de mejora

#### 📋 SUBTAREA 6.2.3: Documentar Resultados
- Crear tabla comparativa
- Gráficas de mejora (opcional)
- Conclusiones y próximos pasos

---

### 🔧 TAREA 6.3: Test de Carga con Datos Reales
**Tipo:** Task  
**Parent:** SCRUM-39  
**Descripción:** Validar con volumen real de producción

#### 📋 SUBTAREA 6.3.1: Cargar Dataset de Producción
- Dump de BD producción (anonimizado)
- Restaurar en entorno de testing
- Verificar volumen: 62k+ transacciones

#### 📋 SUBTAREA 6.3.2: Ejecutar Tests End-to-End
- Cargar páginas con dataset real
- Validar tiempos bajo carga
- Identificar edge cases

---

## 📖 HISTORIA 7: SCRUM-40 - Monitoreo y Métricas en Producción

### 🔧 TAREA 7.1: Implementar Logging de Performance
**Tipo:** Task  
**Parent:** SCRUM-40  
**Descripción:** Registrar tiempos de queries críticas

#### 📋 SUBTAREA 7.1.1: Configurar Doctrine Logger
- Habilitar SQL logger en doctrine.yaml
- Configurar threshold para slow queries (>200ms)
- Separar log file: var/log/slow_queries.log

#### 📋 SUBTAREA 7.1.2: Custom Middleware para Timing
- Crear EventSubscriber para kernel.response
- Loggear tiempo total de request
- Incluir metadata: ruta, queries, memoria

#### 📋 SUBTAREA 7.1.3: Estructurar Logs
- Formato JSON para parsing
- Incluir: timestamp, route, duration, query_count
- Facilitar análisis posterior

---

### 🔧 TAREA 7.2: Dashboard de Métricas (Opcional)
**Tipo:** Task  
**Parent:** SCRUM-40  
**Descripción:** Visualización de performance

#### 📋 SUBTAREA 7.2.1: Ruta Admin de Métricas
- Crear /admin/performance
- Mostrar slow queries del día
- Top 10 rutas más lentas

#### 📋 SUBTAREA 7.2.2: Integración con Monitoring Tool
- Configurar New Relic (si disponible)
- O configurar Prometheus + Grafana
- Dashboard de queries por segundo

---

### 🔧 TAREA 7.3: Alertas de Degradación
**Tipo:** Task  
**Parent:** SCRUM-40  
**Descripción:** Notificaciones automáticas de problemas

#### 📋 SUBTAREA 7.3.1: Configurar Thresholds
- Alerta si queries > 50 en una página
- Alerta si tiempo de carga > 5 segundos
- Alerta si uso de memoria > 256MB

#### 📋 SUBTAREA 7.3.2: Configurar Notificaciones
- Email a equipo técnico
- Slack webhook (opcional)
- Log en archivo crítico

---

## 📖 HISTORIA 8: SCRUM-41 - Documentación y Knowledge Transfer

### 🔧 TAREA 8.1: Documentar Optimizaciones Implementadas
**Tipo:** Task  
**Parent:** SCRUM-41  
**Descripción:** Registro detallado de cambios

#### 📋 SUBTAREA 8.1.1: Crear Documento Principal
- Archivo: OPTIMIZACION_CAJA_PAGOS.md
- Secciones: Problema, Solución, Resultados
- Incluir métricas antes/después

#### 📋 SUBTAREA 8.1.2: Documentar Índices Creados
- Tabla de índices con propósito
- Queries que benefician de cada índice
- Comando para verificar uso

#### 📋 SUBTAREA 8.1.3: Documentar Cambios en Código
- Lista de archivos modificados
- Patrón usado (eager loading, cache, etc)
- Git commits de referencia

---

### 🔧 TAREA 8.2: Crear Guía de Mejores Prácticas
**Tipo:** Task  
**Parent:** SCRUM-41  
**Descripción:** Prevenir problemas futuros

#### 📋 SUBTAREA 8.2.1: Performance Checklist
- Siempre usar eager loading en listados
- Validar queries con EXPLAIN antes de commit
- Limitar resultados con paginación
- Considerar cache para datos estáticos

#### 📋 SUBTAREA 8.2.2: Patrones Anti-Performance
- Evitar queries en loops
- No usar findAll() sin filtros
- Cuidado con lazy loading en Twig
- Documentar casos comunes

---

### 🔧 TAREA 8.3: Actualizar README del Proyecto
**Tipo:** Task  
**Parent:** SCRUM-41  
**Descripción:** Incluir info de performance

#### 📋 SUBTAREA 8.3.1: Sección de Performance
- Agregar sección "Performance Considerations"
- Comandos para profiling
- Links a documentación detallada

#### 📋 SUBTAREA 8.3.2: Troubleshooting Performance
- Cómo identificar páginas lentas
- Cómo usar Symfony Profiler
- Cómo analizar slow query log

---

## 📊 RESUMEN FINAL

### Conteo por Historia:

1. **SCRUM-34** - Análisis y Diagnóstico: 3 tareas, 9 subtareas
2. **SCRUM-35** - Optimización Índices BD: 3 tareas, 8 subtareas
3. **SCRUM-36** - Refactorización N+1: 3 tareas, 9 subtareas
4. **SCRUM-37** - Implementación Cache: 3 tareas, 7 subtareas
5. **SCRUM-38** - Optimización Paginación: 3 tareas, 7 subtareas
6. **SCRUM-39** - Testing Performance: 3 tareas, 8 subtareas
7. **SCRUM-40** - Monitoreo Producción: 3 tareas, 7 subtareas
8. **SCRUM-41** - Documentación: 3 tareas, 6 subtareas

### Totales:
- **Historias:** 8 ✅
- **Tareas:** 24
- **Subtareas:** 61

### Estimación Total: 32 horas de desarrollo

---

## 🎯 PRÓXIMOS PASOS

1. ✅ Épica SCRUM-33 creada y actualizada
2. ✅ 8 Historias creadas (SCRUM-34 a SCRUM-41)
3. ⏳ Vincular historias a épica manualmente en Jira UI
4. ⏳ Crear 24 tareas vinculadas a cada historia
5. ⏳ Crear 61 subtareas vinculadas a cada tarea
6. ⏳ Asignar prioridades y estimaciones
7. ⏳ Organizar en sprints según capacidad del equipo

---

**Documento generado:** 09/03/2026  
**Para:** Proyecto PB Studio - Optimización Performance  
**Referencias:** Épica SCRUM-33, Historias SCRUM-34 a SCRUM-41
