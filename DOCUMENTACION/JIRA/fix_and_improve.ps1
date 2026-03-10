# ============================================================
# fix_and_improve.ps1
# Acciones:
#  1. Borrar SCRUM-43 (duplicado del test)
#  2. Marcar SCRUM-28 como duplicado de SCRUM-36 + cerrar
#  3. Mover SCRUM-20 de SCRUM-30 a SCRUM-32
#  4. Subir prioridad SCRUM-25 y SCRUM-27 a High
#  5. Mejorar descripciones historias SCRUM-34 a SCRUM-41
#  6. Mejorar descripciones subtareas SCRUM-44 a SCRUM-59
# ============================================================

$baseUrl = "https://devpbstudio.atlassian.net"
$email   = "desarrollo.pbstudio@outlook.com"
$token   = "ATATT3xFfGF0ioDRQQNAvB8qyE90pYybvPNixtl-X9rc0UK5NzrUcFy3888_IDKr1ZuGdZzaOm5GE3TkVtAEC5DcfEZeY1U-BlsTjLxD5R7czbkA5aCtPhV8wZhciDTzPbybnFHYuF-0etAFPFQ2OW9_D9sp6RSSDvnrDuhFMHMxlKi_uFXnHdo=0600D49C"
$logFile = "$PSScriptRoot\fix_log.txt"

$bytes   = [System.Text.Encoding]::UTF8.GetBytes("${email}:${token}")
$b64     = [System.Convert]::ToBase64String($bytes)
$headers = @{
    "Authorization" = "Basic $b64"
    "Content-Type"  = "application/json"
    "Accept"        = "application/json"
}

"=== INICIO FIX: $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss') ===" | Tee-Object $logFile

# ── Helpers ──────────────────────────────────────────────────
function Invoke-JiraDelete {
    param([string]$issueKey)
    try {
        Invoke-RestMethod -Uri "$baseUrl/rest/api/2/issue/$issueKey" -Method Delete -Headers $headers | Out-Null
        $msg = "OK  DELETE $issueKey"
        Write-Host $msg -ForegroundColor Green; $msg | Add-Content $logFile
    } catch {
        $err = Read-ErrBody $_
        $msg = "ERR DELETE $issueKey | $err"
        Write-Host $msg -ForegroundColor Red; $msg | Add-Content $logFile
    }
}

function Invoke-JiraUpdate {
    param([string]$issueKey, [hashtable]$fields)
    $body = @{ fields = $fields } | ConvertTo-Json -Depth 15 -Compress
    try {
        Invoke-RestMethod -Uri "$baseUrl/rest/api/2/issue/$issueKey" -Method Put -Headers $headers -Body $body | Out-Null
        $msg = "OK  UPDATE $issueKey"
        Write-Host $msg -ForegroundColor Green; $msg | Add-Content $logFile
    } catch {
        $err = Read-ErrBody $_
        $msg = "ERR UPDATE $issueKey | $err"
        Write-Host $msg -ForegroundColor Red; $msg | Add-Content $logFile
    }
}

function Invoke-JiraTransition {
    param([string]$issueKey, [string]$transitionId)
    $body = @{ transition = @{ id = $transitionId } } | ConvertTo-Json -Depth 5 -Compress
    try {
        Invoke-RestMethod -Uri "$baseUrl/rest/api/2/issue/$issueKey/transitions" -Method Post -Headers $headers -Body $body | Out-Null
        $msg = "OK  TRANSITION $issueKey -> id:$transitionId"
        Write-Host $msg -ForegroundColor Green; $msg | Add-Content $logFile
    } catch {
        $err = Read-ErrBody $_
        $msg = "ERR TRANSITION $issueKey | $err"
        Write-Host $msg -ForegroundColor Red; $msg | Add-Content $logFile
    }
}

function Invoke-JiraLink {
    param([string]$inwardKey, [string]$outwardKey, [string]$linkType)
    $body = @{
        type         = @{ name = $linkType }
        inwardIssue  = @{ key  = $inwardKey }
        outwardIssue = @{ key  = $outwardKey }
    } | ConvertTo-Json -Depth 5 -Compress
    try {
        Invoke-RestMethod -Uri "$baseUrl/rest/api/2/issueLink" -Method Post -Headers $headers -Body $body | Out-Null
        $msg = "OK  LINK $inwardKey -[$linkType]-> $outwardKey"
        Write-Host $msg -ForegroundColor Green; $msg | Add-Content $logFile
    } catch {
        $err = Read-ErrBody $_
        $msg = "ERR LINK $inwardKey -> $outwardKey | $err"
        Write-Host $msg -ForegroundColor Red; $msg | Add-Content $logFile
    }
}

function Get-Transitions {
    param([string]$issueKey)
    $r = Invoke-RestMethod -Uri "$baseUrl/rest/api/2/issue/$issueKey/transitions" -Headers $headers
    return $r.transitions
}

function Read-ErrBody {
    param($ex)
    try {
        $stream = $ex.Exception.Response.GetResponseStream()
        $reader = New-Object System.IO.StreamReader($stream)
        return $reader.ReadToEnd()
    } catch { return $ex.ErrorDetails.Message }
}

# ============================================================
# PASO 1: Borrar SCRUM-43 (duplicado creado en test)
# ============================================================
Write-Host "`n[PASO 1] Borrando SCRUM-43 (duplicado de test)..." -ForegroundColor Cyan
Invoke-JiraDelete -issueKey "SCRUM-43"
Start-Sleep -Milliseconds 500

# ============================================================
# PASO 2: Marcar SCRUM-28 como duplicado de SCRUM-36 y cerrar
# ============================================================
Write-Host "`n[PASO 2] Cerrando SCRUM-28 como duplicado de SCRUM-36..." -ForegroundColor Cyan

# Obtener transiciones disponibles
$transitions = Get-Transitions -issueKey "SCRUM-28"
Write-Host "Transiciones disponibles en SCRUM-28:"
$transitions | ForEach-Object { Write-Host "  id=$($_.id) name=$($_.name)" }

# Buscar transicion "Done" o "Finalizada" o "Listo"
$doneTransition = $transitions | Where-Object { $_.name -match "Done|Finaliz|Listo|Resuelto|Cerrado" } | Select-Object -First 1
if ($doneTransition) {
    Invoke-JiraLink -inwardKey "SCRUM-28" -outwardKey "SCRUM-36" -linkType "Duplicate"
    Start-Sleep -Milliseconds 400
    Invoke-JiraTransition -issueKey "SCRUM-28" -transitionId $doneTransition.id
} else {
    Write-Host "  No se encontro transicion Done. Transiciones: $($transitions.name -join ', ')" -ForegroundColor Yellow
    # Intentar link igual
    Invoke-JiraLink -inwardKey "SCRUM-28" -outwardKey "SCRUM-36" -linkType "Duplicate"
}
Start-Sleep -Milliseconds 500

# ============================================================
# PASO 3: Mover SCRUM-20 de epica SCRUM-30 a SCRUM-32
# ============================================================
Write-Host "`n[PASO 3] Moviendo SCRUM-20 a epica SCRUM-32..." -ForegroundColor Cyan
Invoke-JiraUpdate -issueKey "SCRUM-20" -fields @{ customfield_10014 = "SCRUM-32" }
Start-Sleep -Milliseconds 500

# ============================================================
# PASO 4: Subir prioridad SCRUM-25 y SCRUM-27 a High
# ============================================================
Write-Host "`n[PASO 4] Actualizando prioridades de issues de seguridad..." -ForegroundColor Cyan
Invoke-JiraUpdate -issueKey "SCRUM-25" -fields @{ priority = @{ name = "High" } }
Start-Sleep -Milliseconds 400
Invoke-JiraUpdate -issueKey "SCRUM-27" -fields @{ priority = @{ name = "High" } }
Start-Sleep -Milliseconds 500

# ============================================================
# PASO 5: Mejorar descripciones de historias SCRUM-34 a SCRUM-41
# ============================================================
Write-Host "`n[PASO 5] Mejorando descripciones de Historias..." -ForegroundColor Cyan

$historias = @(
    @{
        key  = "SCRUM-34"
        desc = "OBJETIVO: Identificar y documentar todos los cuellos de botella de rendimiento en el modulo caja/pagos antes de aplicar optimizaciones.

QUE SE HACE:
- Habilitar Symfony Profiler en entorno dev
- Ejecutar profiling en /backend/caja y /backend/payments
- Capturar numero de queries por peticion y tiempos de respuesta
- Ejecutar EXPLAIN en queries con tiempo > 100ms
- Identificar table scans (type=ALL) y queries sin indices (key=NULL)
- Establecer metricas baseline documentadas para comparar post-optimizacion

CRITERIOS DE ACEPTACION:
- Reporte de queries lentas generado con tiempos y planes de ejecucion
- Metricas baseline documentadas: tiempo de carga, numero de queries, rows examinadas
- Lista priorizada de problemas por impacto (tiempo x frecuencia)

ARCHIVOS CLAVE:
- config/packages/web_profiler.yaml
- src/Repository/TransactionRepository.php
- src/Repository/ReservationRepository.php

ESTIMADO: 2-3 horas"
    },
    @{
        key  = "SCRUM-35"
        desc = "OBJETIVO: Reducir tiempos de consulta en tablas criticas mediante indices estrategicos en MySQL, validados con EXPLAIN.

QUE SE HACE:
- Analizar columnas usadas en WHERE, ORDER BY y JOIN en TransactionRepository y ReservationRepository
- Crear migraciones Doctrine para indices compuestos en tabla transaction: (user_id, status), (created_at), (status, created_at)
- Crear migraciones Doctrine para indices en tabla reservation: (session_id, status), (user_id, status)
- Verificar con SHOW INDEX y EXPLAIN que los indices se aplican correctamente
- Eliminar indices duplicados o innecesarios detectados en el analisis

CRITERIOS DE ACEPTACION:
- Migraciones ejecutadas sin errores en dev y staging
- EXPLAIN muestra uso de indices en queries criticas (type != ALL, key != NULL)
- Mejora documentada de >60% en tiempo de queries afectadas
- No hay regresiones en otros flujos

ESTIMADO: 2-3 horas"
    },
    @{
        key  = "SCRUM-36"
        desc = "OBJETIVO: Eliminar el patron N+1 en listados de caja/pagos implementando eager loading y JOINs explicitos en los repositorios.

PROBLEMA ACTUAL:
- TransactionRepository: getAllByUser() y getGroupedByPackage() generan N+1 por lazy loading de relaciones
- ReservationRepository: getReservationsBySession(), getByUser() y getAllCompletedByUser() disparan queries adicionales por cada entidad cargada

QUE SE HACE:
- Agregar leftJoin() + addSelect() en DQL para cargar relaciones en una sola query
- Optimizar queries DQL complejas: sustituir ADDTIME/IFNULL por equivalentes nativos de Doctrine (DATE_ADD, CASE WHEN)
- Validar con Symfony Profiler que el numero de queries baja a <= 5 por pagina

CRITERIOS DE ACEPTACION:
- Maximo 5 queries por carga de pagina en /backend/caja y /backend/payments
- Eager loading implementado y verificado con profiler
- Tests de regresion confirman que los datos retornados son correctos

ARCHIVOS:
- src/Repository/TransactionRepository.php
- src/Repository/ReservationRepository.php

ESTIMADO: 3-4 horas"
    },
    @{
        key  = "SCRUM-37"
        desc = "OBJETIVO: Cachear resultados de consultas frecuentes y de datos que cambian poco para reducir la carga en base de datos.

QUE SE HACE:
- Configurar cache pool en config/packages/cache.yaml (filesystem o Redis)
- Instalar symfony/cache si no esta presente
- Implementar cache en TransactionService para estadisticas del dashboard con TTL de 5 minutos
- Implementar invalidacion de cache cuando se crea, edita o elimina una transaccion
- Cachear listados estaticos: paquetes activos, configuracion del sistema (TTL 30 min)

CRITERIOS DE ACEPTACION:
- Cache configurado y funcional en entorno dev
- Dashboard de caja carga sin queries a BD cuando cache esta caliente
- Invalidacion automatica funciona al modificar transacciones
- No hay stale data visible al usuario

ESTIMADO: 2-3 horas"
    },
    @{
        key  = "SCRUM-38"
        desc = "OBJETIVO: Evitar la carga completa de datos en listados grandes implementando paginacion eficiente con maximo 50 registros por pagina.

QUE SE HACE:
- Instalar KnpPaginatorBundle via Composer
- Refactorizar accion de listado en CajaController para usar paginator
- Actualizar templates Twig con controles de navegacion de paginas
- Optimizar COUNT total: usar FOUND_ROWS() o cachear el conteo total por 1 minuto para evitar COUNT(*) en cada request
- Implementar carga AJAX bajo demanda para tablas HTML grandes (infinite scroll opcional)

CRITERIOS DE ACEPTACION:
- Maximo 50 resultados por pagina en listados de caja
- Tiempo de carga inicial < 1 segundo con paginacion
- Controles de paginacion funcionales en la vista
- COUNT total no se recalcula en cada peticion de pagina

ESTIMADO: 2-3 horas"
    },
    @{
        key  = "SCRUM-39"
        desc = "OBJETIVO: Automatizar la validacion de performance con tests y benchmarks para prevenir regresiones futuras.

QUE SE HACE:
- Crear tests PHPUnit que midan tiempo de ejecucion de rutas criticas
- Test que verifica que el numero de queries en /backend/caja no supera un umbral configurable
- Test de ausencia de N+1: verificar que TransactionRepository no genera queries adicionales por entidad
- Ejecutar benchmark baseline (antes de optimizaciones) y post-optimizacion
- Documentar mejoras con porcentajes concretos: tiempo de carga, numero de queries, rows examinadas

CRITERIOS DE ACEPTACION:
- Suite de tests de performance ejecutable con phpunit
- Benchmarks documentados con datos antes/despues
- CI/CD puede ejecutar tests y fallar si se supera el umbral de queries
- Documento de resultados con metricas comparativas

ESTIMADO: 2-3 horas"
    },
    @{
        key  = "SCRUM-40"
        desc = "OBJETIVO: Tener visibilidad en tiempo real del rendimiento del sistema en produccion y recibir alertas cuando se detecte degradacion.

QUE SE HACE:
- Configurar doctrine.dbal.logging para registrar queries que superen 200ms en produccion
- Crear EventSubscriber que registre el tiempo total de cada request en formato JSON estructurado
- Crear ruta /admin/performance con dashboard basico de metricas (ultimas queries lentas, promedio de tiempos)
- Configurar thresholds: alerta si tiempo de carga > 3s o queries > 20 por request
- Configurar mailer de Symfony para notificar al equipo de desarrollo cuando se superan thresholds

CRITERIOS DE ACEPTACION:
- Logs estructurados en var/log/performance.log
- Dashboard /admin/performance visible solo para ROLE_ADMIN
- Notificaciones por email al equipo cuando se activa una alerta
- Alertas de slow queries configuradas y funcionales

ESTIMADO: 3-4 horas"
    },
    @{
        key  = "SCRUM-41"
        desc = "OBJETIVO: Documentar todas las optimizaciones implementadas y crear recursos de conocimiento para que el equipo pueda mantener y extender las mejoras.

QUE SE HACE:
- Crear DOCUMENTACION/OPTIMIZACION_CAJA_PAGOS.md con: indices creados y su proposito, cambios en repositorios con fragmentos de codigo, referencias a commits de git, metricas antes/despues
- Crear PERFORMANCE_CHECKLIST.md para developers: patron eager loading, cuando usar cache, como verificar indices, como usar el profiler
- Documentar patrones anti-performance a evitar: lazy loading en listados, queries en bucles, COUNT(*) sin cache
- Agregar seccion 'Performance Considerations' al README.md del proyecto
- Agregar guia de Troubleshooting de performance: como diagnosticar queries lentas paso a paso

CRITERIOS DE ACEPTACION:
- Documento tecnico completo con todos los cambios realizados
- Checklist de performance disponible para revision en PRs
- README actualizado con referencias a la documentacion de performance
- Nuevo miembro del equipo puede entender las optimizaciones leyendo la documentacion

ESTIMADO: 1-2 horas"
    }
)

foreach ($h in $historias) {
    Write-Host "  Actualizando $($h.key)..." -NoNewline
    Invoke-JiraUpdate -issueKey $h.key -fields @{ description = $h.desc }
    Start-Sleep -Milliseconds 400
}

# ============================================================
# PASO 6: Mejorar descripciones de subtareas SCRUM-44 a SCRUM-59
# ============================================================
Write-Host "`n[PASO 6] Mejorando descripciones de Subtareas..." -ForegroundColor Cyan

$subtareas = @(
    @{
        key  = "SCRUM-44"
        desc = "PASOS:
1. Habilitar web_profiler en config/packages/web_profiler.yaml (solo env: dev)
2. Navegar a /backend/caja como usuario admin y capturar el profile token de la barra de debug
3. Abrir /_profiler/{token}#db en el navegador y revisar el panel Doctrine
4. Repetir para /backend/payments
5. Anotar: numero total de queries, queries duplicadas, queries con tiempo > 50ms
6. Exportar lista de queries SQL exactas para el siguiente paso (SCRUM-45)

RESULTADO ESPERADO: Archivo queries_profile_caja.txt con queries ordenadas por tiempo DESC"
    },
    @{
        key  = "SCRUM-45"
        desc = "PASOS:
1. Tomar las queries SQL identificadas en SCRUM-44 (tiempo > 100ms o duplicadas)
2. Conectar a MySQL: docker-compose exec mysql mysql -u root -p pbstudio
3. Ejecutar EXPLAIN [query SQL] para cada query critica
4. Documentar en tabla: Query | Tiempo(ms) | Rows examinadas | type | key | Extra
5. Identificar: type=ALL (table scan), key=NULL (sin indice), rows altas (> 10000)
6. Registrar tiempo promedio de carga de /backend/caja (media de 5 cargas) como baseline

RESULTADO ESPERADO: METRICAS_BASELINE.md con tabla de queries, tiempos y plan de accion priorizado"
    },
    @{
        key  = "SCRUM-46"
        desc = "PASOS:
1. Revisar TransactionRepository y identificar columnas en WHERE, ORDER BY y JOIN
2. Ejecutar: SHOW INDEX FROM transaction; -- para ver indices actuales
3. Crear migracion: php bin/console make:migration
4. Agregar en la migracion:
   - INDEX idx_transaction_user_status ON transaction(user_id, status)
   - INDEX idx_transaction_created ON transaction(created_at)
   - INDEX idx_transaction_status_date ON transaction(status, created_at)
5. Ejecutar: php bin/console doctrine:migrations:migrate
6. Validar con EXPLAIN que las queries criticas ahora usan los nuevos indices

ARCHIVOS: src/Repository/TransactionRepository.php, migrations/Version*.php"
    },
    @{
        key  = "SCRUM-47"
        desc = "PASOS:
1. Revisar ReservationRepository y identificar columnas en WHERE, ORDER BY y JOIN
2. Ejecutar: SHOW INDEX FROM reservation; -- para ver indices actuales
3. Crear migracion: php bin/console make:migration
4. Agregar en la migracion:
   - INDEX idx_reservation_session_status ON reservation(session_id, status)
   - INDEX idx_reservation_user_status ON reservation(user_id, status)
   - INDEX idx_reservation_date ON reservation(created_at)
5. Ejecutar: php bin/console doctrine:migrations:migrate
6. Validar con EXPLAIN que las queries de ReservationRepository usan los nuevos indices

ARCHIVOS: src/Repository/ReservationRepository.php, migrations/Version*.php"
    },
    @{
        key  = "SCRUM-48"
        desc = "PASOS:
1. Abrir TransactionRepository.php e identificar metodos con lazy loading:
   - getAllByUser(): revisar si accede a relaciones como ->getPackage(), ->getUser() en bucle
   - getGroupedByPackage(): verificar joins y selects
2. Agregar leftJoin() + addSelect() en el QueryBuilder para cargar relaciones en una sola query:
   ->leftJoin('t.package', 'p')->addSelect('p')
   ->leftJoin('t.user', 'u')->addSelect('u')
3. Ejecutar con Profiler activo y verificar reduccion de queries
4. Ejecutar tests existentes para confirmar que los datos retornados son correctos

ARCHIVOS: src/Repository/TransactionRepository.php"
    },
    @{
        key  = "SCRUM-49"
        desc = "PASOS:
1. Abrir ReservationRepository.php e identificar metodos con N+1:
   - getReservationsBySession(): accede a ->getUser() en cada reservacion?
   - getByUser(): accede a ->getSession() en cada reservacion?
   - getAllCompletedByUser(): misma revision
2. Agregar eager loading en cada metodo:
   ->leftJoin('r.session', 's')->addSelect('s')
   ->leftJoin('r.user', 'u')->addSelect('u')
3. Para queries DQL complejas: sustituir ADDTIME por DATE_ADD nativo de Doctrine
4. Validar con Profiler que se reduce de N+1 a 1-2 queries por metodo

ARCHIVOS: src/Repository/ReservationRepository.php, src/Repository/WaitingListRepository.php"
    },
    @{
        key  = "SCRUM-50"
        desc = "PASOS:
1. Verificar que symfony/cache esta en composer.json (deberia estar por defecto en SF6)
2. Abrir config/packages/cache.yaml y configurar el pool principal:
   framework:
     cache:
       default_redis_provider: 'redis://localhost'  (o filesystem si no hay Redis)
       pools:
         cache.performance: { adapter: cache.adapter.filesystem, default_lifetime: 300 }
3. Definir TTL por tipo: estadisticas dashboard = 300s, configuracion = 1800s, conteos = 60s
4. Probar que el pool funciona: php bin/console cache:pool:list

ARCHIVOS: config/packages/cache.yaml"
    },
    @{
        key  = "SCRUM-51"
        desc = "PASOS:
1. Abrir TransactionService.php e inyectar CacheInterface en el constructor
2. Envolver las consultas de estadisticas del dashboard con cache:
   \$stats = \$cache->get('dashboard_caja_stats', function(ItemInterface \$item) {
       \$item->expiresAfter(300); // 5 minutos
       return \$this->transactionRepo->getDashboardStats();
   });
3. Crear un EventSubscriber que escuche TransactionCreatedEvent y TransactionUpdatedEvent
4. En el subscriber: \$cache->delete('dashboard_caja_stats') para invalidar
5. Probar: crear transaccion y verificar que el cache se invalida correctamente

ARCHIVOS: src/Service/TransactionService.php, src/EventListener/CacheInvalidationSubscriber.php"
    },
    @{
        key  = "SCRUM-52"
        desc = "PASOS:
1. Instalar: composer require knplabs/knp-paginator-bundle
2. Registrar el bundle en config/bundles.php si no se agrego automaticamente
3. Configurar en config/packages/knp_paginator.yaml (page_range: 5, items_per_page: 50)
4. En CajaController::indexAction():
   - Cambiar: \$transactions = \$repo->findAll() -> \$query = \$repo->createQueryBuilder('t')->getQuery()
   - Agregar: \$transactions = \$paginator->paginate(\$query, \$request->query->getInt('page', 1), 50)
5. Pasar el objeto paginado a la vista

ARCHIVOS: src/Controller/Backend/CajaController.php (o equivalente)"
    },
    @{
        key  = "SCRUM-53"
        desc = "PASOS:
1. En el template Twig del listado de caja, agregar los controles de paginacion:
   {{ knp_pagination_render(transactions) }}
2. Personalizar la plantilla de paginacion si es necesario (vendor override)
3. Para el COUNT total: en el repository, agregar metodo countTotal() separado
4. Cachear el resultado de countTotal() por 60 segundos:
   \$total = \$cache->get('caja_total_count', fn(\$item) => \$item->expiresAfter(60) ?? \$repo->countTotal());
5. Probar con distintos numeros de pagina y verificar que la paginacion es correcta

ARCHIVOS: templates/backend/caja/*.html.twig, src/Repository/TransactionRepository.php"
    },
    @{
        key  = "SCRUM-54"
        desc = "PASOS:
1. Crear tests/Performance/CajaPerformanceTest.php extendiendo KernelTestCase
2. Implementar test de queries:
   - Crear cliente HTTP interno
   - Activar conteo de queries con doctrine.dbal profiling
   - GET /backend/caja
   - Assert: total de queries <= 10
   - Assert: tiempo de respuesta < 2000ms
3. Implementar test anti-N+1:
   - Llamar a TransactionRepository::getAllByUser()
   - Contar queries ejecutadas
   - Assert: queries == 1 (o max 2 con joins)
4. Ejecutar: php bin/phpunit tests/Performance/

ARCHIVOS: tests/Performance/CajaPerformanceTest.php"
    },
    @{
        key  = "SCRUM-55"
        desc = "PASOS:
1. Antes de aplicar optimizaciones: ejecutar script de benchmark baseline
   - 10 peticiones a /backend/caja, calcular media y P95 de tiempo de respuesta
   - Registrar numero de queries por peticion con profiler
   - Guardar en BENCHMARK_BASELINE.json
2. Aplicar todas las optimizaciones (indices, eager loading, cache, paginacion)
3. Repetir el mismo script de benchmark post-optimizacion
   - Guardar en BENCHMARK_OPTIMIZADO.json
4. Calcular mejoras: % de reduccion en tiempo, % de reduccion en queries
5. Documentar en METRICAS_FINALES.md con tabla comparativa

RESULTADO ESPERADO: Tiempo de carga reducido de ~8-15s a < 2s, queries reducidas > 70%"
    },
    @{
        key  = "SCRUM-56"
        desc = "PASOS:
1. En config/packages/doctrine.yaml, agregar logging de slow queries:
   doctrine:
     dbal:
       logging: true
       profiling_collect_backtrace: false
2. Crear src/EventListener/PerformanceSubscriber.php que implemente EventSubscriberInterface:
   - Escuchar kernel.request: guardar microtime(true) en atributo del request
   - Escuchar kernel.terminate: calcular duracion, logear si > 2000ms
3. Formato de log JSON: { timestamp, route, duration_ms, query_count, memory_mb }
4. Configurar en monolog.yaml un canal 'performance' que escriba en var/log/performance.log

ARCHIVOS: src/EventListener/PerformanceSubscriber.php, config/packages/doctrine.yaml, config/packages/monolog.yaml"
    },
    @{
        key  = "SCRUM-57"
        desc = "PASOS:
1. Definir thresholds en services.yaml como parametros:
   performance.threshold.response_ms: 3000
   performance.threshold.query_count: 20
2. En PerformanceSubscriber: si se supera el threshold, disparar evento PerformanceAlertEvent
3. Crear PerformanceAlertListener que inyecte MailerInterface
4. Enviar email al equipo (desarrollo.pbstudio@outlook.com) con:
   - Ruta afectada, tiempo de respuesta, numero de queries, hora y usuario
5. Configurar rate limiting del email: maximo 1 alerta por ruta por hora para evitar spam
6. Probar disparando una ruta lenta artificialmente y verificar recepcion del email

ARCHIVOS: src/EventListener/PerformanceAlertListener.php, src/Event/PerformanceAlertEvent.php"
    },
    @{
        key  = "SCRUM-58"
        desc = "PASOS:
1. Crear DOCUMENTACION/OPTIMIZACION_CAJA_PAGOS.md con las siguientes secciones:
   - Resumen ejecutivo: metricas antes/despues
   - Indices creados: tabla, columnas, proposito, impacto medido
   - Cambios en TransactionRepository: metodo, tipo de cambio, fragmento de codigo
   - Cambios en ReservationRepository: idem
   - Configuracion de cache: pool, TTLs, estrategia de invalidacion
   - Paginacion: bundle usado, configuracion, cambios en controller y vista
2. Incluir referencias a commits de git relevantes con hash y descripcion
3. Incluir capturas o salidas de EXPLAIN antes/despues para los indices mas importantes

ARCHIVOS: DOCUMENTACION/OPTIMIZACION_CAJA_PAGOS.md"
    },
    @{
        key  = "SCRUM-59"
        desc = "PASOS:
1. Crear DOCUMENTACION/PERFORMANCE_CHECKLIST.md con las siguientes secciones:
   Checklist para PRs con cambios en Repositories:
   - [ ] Las queries usan eager loading para relaciones que se acceden en la vista
   - [ ] No hay queries dentro de bucles foreach
   - [ ] Columnas de WHERE y ORDER BY tienen indice en BD
   - [ ] Listados grandes usan paginacion
   - [ ] Datos frecuentes estan cacheados con invalidacion correcta
   Patrones a EVITAR:
   - Acceder a ->getRelacion() en un foreach (N+1)
   - findAll() sin limite en entidades grandes
   - COUNT(*) en cada request sin cache
2. Agregar seccion 'Performance Considerations' en README.md del proyecto:
   - Como ejecutar el profiler en dev
   - Donde ver los logs de performance
   - Como correr los tests de performance

ARCHIVOS: DOCUMENTACION/PERFORMANCE_CHECKLIST.md, README.md"
    }
)

foreach ($s in $subtareas) {
    Write-Host "  Actualizando $($s.key)..." -NoNewline
    Invoke-JiraUpdate -issueKey $s.key -fields @{ description = $s.desc }
    Start-Sleep -Milliseconds 400
}

# ============================================================
# RESUMEN
# ============================================================
$resumen = "`n=== RESUMEN FIX ===" +
"`nSCRUM-43 eliminado (duplicado test)" +
"`nSCRUM-28 cerrado como duplicado de SCRUM-36" +
"`nSCRUM-20 movido a epica SCRUM-32" +
"`nSCRUM-25 y SCRUM-27 actualizados a prioridad High" +
"`n8 Historias con descripciones mejoradas" +
"`n16 Subtareas con descripciones mejoradas" +
"`nFin: $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')"

Write-Host $resumen -ForegroundColor Cyan
$resumen | Add-Content $logFile
