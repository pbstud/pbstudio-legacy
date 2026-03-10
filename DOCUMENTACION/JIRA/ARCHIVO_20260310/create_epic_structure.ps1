# Script para crear estructura completa de Épica en Jira
# Épica: Optimización de Consultas en Caja/Pagos

$baseUrl = "https://devpbstudio.atlassian.net"
$email = "desarrollo.pbstudio@outlook.com"
$token = "ATATT3xFfGF0ibcon4av4rc77RUASamB5r60ti_bXJVhBo9e-eGMEbbv5RTuYmHLX8BgPZ7iKg5rxbMMNXPU5jA-Ny_Cl-CqUPg_GG3o-FP5FEHo_YByPt2IwjY8KN35vKLGXX4hk1xrEIhWDK7DXpRJG73fVgqIUKMdR02U9UjQwXk0GjBOjRs=C2FA7FF3"
$auth = [Convert]::ToBase64String([Text.Encoding]::ASCII.GetBytes("${email}:${token}"))
$headers = @{
    Authorization = "Basic $auth"
    "Content-Type" = "application/json"
}

Write-Host "========================================" -ForegroundColor Cyan
Write-Host "CREANDO ESTRUCTURA DE ÉPICA EN JIRA" -ForegroundColor Cyan
Write-Host "========================================`n" -ForegroundColor Cyan

# ============================================
# PASO 1: CREAR LA ÉPICA
# ============================================
Write-Host "[1/101] Creando Épica..." -ForegroundColor Yellow

$epicDesc = "Mejorar rendimiento del modulo de caja/pagos mediante optimizacion de consultas a BD, indices estrategicos, y refactorizacion de queries ineficientes. OBJETIVO: Reducir tiempo de carga de 8-15s a menos de 2s. INCLUYE: Analisis de performance, optimizacion de BD, refactorizacion de queries N+1, cache, paginacion. BENEFICIOS: Operadores trabajan sin esperas, menor carga en BD, mayor productividad. ESTIMACION: 8-11 horas."

$epicBody = @{
    fields = @{
        project = @{ key = "SCRUM" }
        summary = "Optimización de Consultas y Performance en Caja/Pagos"
        description = $epicDesc
        issuetype = @{ name = "Epic" }
        priority = @{ name = "High" }
        labels = @("performance", "database", "optimization", "backend", "caja-pagos")
        customfield_10011 = "PERF-CAJA"  # Epic Name
    }
} | ConvertTo-Json -Depth 10

try {
    $epic = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $epicBody
    $epicKey = $epic.key
    Write-Host "✅ Épica creada: $epicKey" -ForegroundColor Green
    Write-Host "   URL: $baseUrl/browse/$epicKey`n" -ForegroundColor Cyan
} catch {
    Write-Host "❌ Error creando épica: $($_.Exception.Message)" -ForegroundColor Red
    exit 1
}

# ============================================
# PASO 2: CREAR HISTORIAS
# ============================================
$stories = @(
    @{
        summary = "Análisis y Diagnóstico de Performance"
        description = "Identificar cuellos de botella en modulo caja/pagos para priorizar optimizaciones. Incluye: Profiling de rutas, EXPLAIN queries, metricas baseline."
        estimation = "3h"
    },
    @{
        summary = "Optimización de Índices en Base de Datos"
        description = "Implementar indices apropiados en BD para reducir tiempos de busqueda. Incluye: Indices en transaction, reservation, optimizar existentes."
        estimation = "4h"
    },
    @{
        summary = "Refactorización de Queries con N+1"
        description = "Eliminar queries N+1 en listados reduciendo de 100+ a menos de 5 queries por pagina. Incluye: Refactorizar TransactionRepository, ReservationRepository, queries DQL."
        estimation = "6h"
    },
    @{
        summary = "Implementación de Caché en Consultas Frecuentes"
        description = "Cachear resultados de consultas frecuentes para evitar consultas repetitivas. Incluye: Configurar Symfony Cache, cachear estadisticas, cachear configuracion."
        estimation = "4h"
    },
    @{
        summary = "Optimización de Paginación y Carga"
        description = "Implementar paginacion eficiente en listados grandes. Incluye: KnpPaginator, optimizar conteo total, lazy loading en tablas."
        estimation = "3h"
    },
    @{
        summary = "Testing y Validación de Performance"
        description = "Tests automatizados para validar performance y prevenir regresiones. Incluye: Tests de performance, benchmarks, tests con datos reales."
        estimation = "5h"
    },
    @{
        summary = "Monitoreo y Métricas en Producción"
        description = "Monitorear performance en tiempo real para detectar degradacion. Incluye: Logging, dashboard metricas, alertas."
        estimation = "4h"
    },
    @{
        summary = "Documentación y Knowledge Transfer"
        description = "Documentacion completa de optimizaciones para mantenimiento futuro. Incluye: Doc de optimizaciones, guia mejores practicas, actualizar README."
        estimation = "3h"
    }
)

$storyKeys = @()
$counter = 2

foreach ($story in $stories) {
    Write-Host "[$counter/101] Creando Historia: $($story.summary)..." -ForegroundColor Yellow
    
    $storyBody = @{
        fields = @{
            project = @{ key = "SCRUM" }
            summary = $story.summary
            description = $story.description
            issuetype = @{ name = "Story" }
            priority = @{ name = "High" }
            labels = @("performance", "caja-pagos")
            customfield_10014 = $epicKey  # Epic Link
        }
    } | ConvertTo-Json -Depth 10
    
    try {
        $storyResult = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $storyBody
        $storyKeys += $storyResult.key
        Write-Host "   ✅ Historia creada: $($storyResult.key)" -ForegroundColor Green
    } catch {
        Write-Host "   ❌ Error: $($_.Exception.Message)" -ForegroundColor Red
    }
    
    $counter++
    Start-Sleep -Milliseconds 500
}

Write-Host "`n✅ Total Historias creadas: $($storyKeys.Count)/8`n" -ForegroundColor Green

# ============================================
# PASO 3: CREAR TAREAS PARA CADA HISTORIA
# ============================================

# Historia 1: Análisis y Diagnóstico de Performance
$tasks_h1 = @(
    @{ summary = "Profiling de Rutas Críticas"; desc = "Analizar tiempo de ejecución de rutas /backend/caja y /backend/payments" },
    @{ summary = "Análisis con EXPLAIN en Queries Lentas"; desc = "Ejecutar EXPLAIN en queries identificadas para entender plan de ejecución" },
    @{ summary = "Medición de Métricas Baseline"; desc = "Establecer métricas actuales para comparación post-optimización" }
)

# Historia 2: Optimización de Índices en Base de Datos
$tasks_h2 = @(
    @{ summary = "Crear Índices en Tabla transaction"; desc = "Implementar índices para optimizar búsquedas en transacciones" },
    @{ summary = "Crear Índices en Tabla reservation"; desc = "Implementar índices para optimizar búsquedas en reservaciones" },
    @{ summary = "Optimizar Índices Existentes"; desc = "Revisar y mejorar índices que ya existen pero son ineficientes" }
)

# Historia 3: Refactorización de Queries con N+1
$tasks_h3 = @(
    @{ summary = "Refactorizar TransactionRepository"; desc = "Implementar eager loading en consultas de transacciones" },
    @{ summary = "Refactorizar ReservationRepository"; desc = "Optimizar queries de reservaciones" },
    @{ summary = "Refactorizar Queries DQL Complejas"; desc = "Optimizar DQL con funciones personalizadas o nativas" }
)

# Historia 4: Implementación de Caché
$tasks_h4 = @(
    @{ summary = "Configurar Symfony Cache"; desc = "Setup de sistema de caché" },
    @{ summary = "Cachear Estadísticas de Dashboard"; desc = "Implementar cache en datos de dashboard" },
    @{ summary = "Cachear Listados de Configuración"; desc = "Cachear datos que rara vez cambian" }
)

# Historia 5: Optimización de Paginación
$tasks_h5 = @(
    @{ summary = "Implementar Paginación con KnpPaginator"; desc = "Usar bundle de paginación optimizada" },
    @{ summary = "Optimizar Conteo Total"; desc = "Evitar COUNT(*) pesados en cada página" },
    @{ summary = "Implementar Lazy Loading en Tablas HTML"; desc = "Cargar datos bajo demanda en frontend" }
)

# Historia 6: Testing y Validación
$tasks_h6 = @(
    @{ summary = "Crear Tests de Performance"; desc = "Implementar tests que midan tiempos de ejecución" },
    @{ summary = "Benchmark Antes/Después"; desc = "Comparación cuantitativa de mejoras" },
    @{ summary = "Test de Carga con Datos Reales"; desc = "Validar con volumen real de producción" }
)

# Historia 7: Monitoreo y Métricas
$tasks_h7 = @(
    @{ summary = "Implementar Logging de Performance"; desc = "Registrar tiempos de queries críticas" },
    @{ summary = "Dashboard de Métricas (Opcional)"; desc = "Visualización de performance" },
    @{ summary = "Alertas de Degradación"; desc = "Notificaciones automáticas de problemas" }
)

# Historia 8: Documentación
$tasks_h8 = @(
    @{ summary = "Documentar Optimizaciones Implementadas"; desc = "Registro detallado de cambios" },
    @{ summary = "Crear Guía de Mejores Prácticas"; desc = "Prevenir problemas futuros" },
    @{ summary = "Actualizar README del Proyecto"; desc = "Incluir info de performance" }
)

$allTasks = @(
    @{ storyIndex = 0; tasks = $tasks_h1 },
    @{ storyIndex = 1; tasks = $tasks_h2 },
    @{ storyIndex = 2; tasks = $tasks_h3 },
    @{ storyIndex = 3; tasks = $tasks_h4 },
    @{ storyIndex = 4; tasks = $tasks_h5 },
    @{ storyIndex = 5; tasks = $tasks_h6 },
    @{ storyIndex = 6; tasks = $tasks_h7 },
    @{ storyIndex = 7; tasks = $tasks_h8 }
)

$taskKeys = @()

foreach ($taskGroup in $allTasks) {
    $parentStory = $storyKeys[$taskGroup.storyIndex]
    
    foreach ($task in $taskGroup.tasks) {
        Write-Host "[$counter/101] Creando Tarea: $($task.summary)..." -ForegroundColor Yellow
        
        $taskBody = @{
            fields = @{
                project = @{ key = "SCRUM" }
                summary = $task.summary
                description = $task.desc
                issuetype = @{ name = "Task" }
                parent = @{ key = $parentStory }
                labels = @("performance")
            }
        } | ConvertTo-Json -Depth 10
        
        try {
            $taskResult = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $taskBody
            $taskKeys += @{ key = $taskResult.key; storyIndex = $taskGroup.storyIndex; taskName = $task.summary }
            Write-Host "   ✅ Tarea creada: $($taskResult.key) → $parentStory" -ForegroundColor Green
        } catch {
            Write-Host "   ❌ Error: $($_.Exception.Message)" -ForegroundColor Red
        }
        
        $counter++
        Start-Sleep -Milliseconds 500
    }
}

Write-Host "`n✅ Total Tareas creadas: $($taskKeys.Count)/23`n" -ForegroundColor Green

# ============================================
# PASO 4: CREAR SUBTAREAS
# ============================================

# Definir subtareas por tarea (simplificado - las principales)
$subtasksMap = @{
    "Profiling de Rutas Críticas" = @(
        "Configurar Symfony Profiler",
        "Ejecutar Profiling en Rutas",
        "Identificar Queries Problemáticas"
    )
    "Análisis con EXPLAIN en Queries Lentas" = @(
        "Extraer Queries SQL del Profiler",
        "Ejecutar EXPLAIN en MySQL",
        "Documentar Resultados"
    )
    "Medición de Métricas Baseline" = @(
        "Medir Tiempos de Carga",
        "Contar Queries Ejecutadas",
        "Documentar Dataset"
    )
    "Crear Índices en Tabla transaction" = @(
        "Analizar Consultas en Transaction",
        "Crear Migración de Índices",
        "Ejecutar y Validar Migration"
    )
    "Crear Índices en Tabla reservation" = @(
        "Analizar Consultas en Reservation",
        "Crear Migración de Índices",
        "Ejecutar y Validar"
    )
    "Optimizar Índices Existentes" = @(
        "Auditar Índices Actuales",
        "Eliminar Índices Innecesarios"
    )
    "Refactorizar TransactionRepository" = @(
        "Identificar Relaciones Lazy",
        "Implementar Eager Loading en getAllByUser()",
        "Implementar Eager Loading en getGroupedByPackage()",
        "Validar con Profiler"
    )
    "Refactorizar ReservationRepository" = @(
        "Optimizar getReservationsBySession()",
        "Optimizar getByUser()",
        "Optimizar getAllCompletedByUser()"
    )
    "Refactorizar Queries DQL Complejas" = @(
        "Sustituir DATEADD/ADDTIME",
        "Optimizar IFELSE/CASE"
    )
    "Configurar Symfony Cache" = @(
        "Configurar Cache Pool",
        "Instalar Dependencias"
    )
    "Cachear Estadísticas de Dashboard" = @(
        "Identificar Datos Cacheables",
        "Implementar Cache en Service",
        "Implementar Invalidación"
    )
    "Cachear Listados de Configuración" = @(
        "Cachear Lista de Paquetes",
        "Cachear Configuración General"
    )
    "Implementar Paginación con KnpPaginator" = @(
        "Instalar KnpPaginatorBundle",
        "Aplicar en Controller de Caja",
        "Actualizar Vista"
    )
    "Optimizar Conteo Total" = @(
        "Implementar Count Aproximado",
        "Lazy Total Count"
    )
    "Implementar Lazy Loading en Tablas HTML" = @(
        "Implementar Scroll Infinito (Opcional)",
        "Preload de Próxima Página"
    )
    "Crear Tests de Performance" = @(
        "Setup de Testing Framework",
        "Test de Carga de Caja",
        "Test de Consultas Repository"
    )
    "Benchmark Antes/Después" = @(
        "Ejecutar Benchmark Baseline",
        "Ejecutar Benchmark Optimizado",
        "Documentar Resultados"
    )
    "Test de Carga con Datos Reales" = @(
        "Cargar Dataset de Producción",
        "Ejecutar Tests End-to-End"
    )
    "Implementar Logging de Performance" = @(
        "Configurar Doctrine Logger",
        "Custom Middleware para Timing",
        "Estructurar Logs"
    )
    "Dashboard de Métricas (Opcional)" = @(
        "Ruta Admin de Métricas",
        "Integración con Monitoring Tool"
    )
    "Alertas de Degradación" = @(
        "Configurar Thresholds",
        "Configurar Notificaciones"
    )
    "Documentar Optimizaciones Implementadas" = @(
        "Crear Documento Principal",
        "Documentar Índices Creados",
        "Documentar Cambios en Código"
    )
    "Crear Guía de Mejores Prácticas" = @(
        "Performance Checklist",
        "Patrones Anti-Performance"
    )
    "Actualizar README del Proyecto" = @(
        "Sección de Performance",
        "Troubleshooting Performance"
    )
}

$subtaskCount = 0

foreach ($taskInfo in $taskKeys) {
    $taskName = $taskInfo.taskName
    
    if ($subtasksMap.ContainsKey($taskName)) {
        $subtasks = $subtasksMap[$taskName]
        
        foreach ($subtask in $subtasks) {
            Write-Host "[$counter/101] Creando Subtarea: $subtask..." -ForegroundColor Yellow
            
            $subtaskBody = @{
                fields = @{
                    project = @{ key = "SCRUM" }
                    summary = $subtask
                    issuetype = @{ name = "Sub-task" }
                    parent = @{ key = $taskInfo.key }
                }
            } | ConvertTo-Json -Depth 10
            
            try {
                $subtaskResult = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $subtaskBody
                Write-Host "   ✅ Subtarea creada: $($subtaskResult.key) → $($taskInfo.key)" -ForegroundColor Green
                $subtaskCount++
            } catch {
                Write-Host "   ❌ Error: $($_.Exception.Message)" -ForegroundColor Red
            }
            
            $counter++
            Start-Sleep -Milliseconds 500
        }
    }
}

# ============================================
# RESUMEN FINAL
# ============================================
Write-Host "`n========================================" -ForegroundColor Cyan
Write-Host "RESUMEN DE CREACIÓN" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "✅ Épica creada: $epicKey" -ForegroundColor Green
Write-Host "✅ Historias creadas: $($storyKeys.Count)/8" -ForegroundColor Green
Write-Host "✅ Tareas creadas: $($taskKeys.Count)/23" -ForegroundColor Green
Write-Host "✅ Subtareas creadas: $subtaskCount/69" -ForegroundColor Green
Write-Host "`nURL Épica: $baseUrl/browse/$epicKey" -ForegroundColor Cyan
Write-Host "========================================`n" -ForegroundColor Cyan
