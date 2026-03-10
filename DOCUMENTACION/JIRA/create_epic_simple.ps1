# Script simplificado para crear Épica + Historias en Jira

$baseUrl = "https://devpbstudio.atlassian.net"
$email = "desarrollo.pbstudio@outlook.com"
$token = "ATATT3xFfGF0ibcon4av4rc77RUASamB5r60ti_bXJVhBo9e-eGMEbbv5RTuYmHLX8BgPZ7iKg5rxbMMNXPU5jA-Ny_Cl-CqUPg_GG3o-FP5FEHo_YByPt2IwjY8KN35vKLGXX4hk1xrEIhWDK7DXpRJG73fVgqIUKMdR02U9UjQwXk0GjBOjRs=C2FA7FF3"
$auth = [Convert]::ToBase64String([Text.Encoding]::ASCII.GetBytes("${email}:${token}"))
$headers = @{
    Authorization = "Basic $auth"
    "Content-Type" = "application/json"
}

Write-Host "========================================" -ForegroundColor Cyan
Write-Host "CREANDO ÉPICA + HISTORIAS EN JIRA" -ForegroundColor Cyan
Write-Host "========================================`n" -ForegroundColor Cyan

# PASO 1: CREAR LA ÉPICA
Write-Host "[1/9] Creando Épica..." -ForegroundColor Yellow

$epicDesc = "Mejorar rendimiento del modulo de caja/pagos mediante optimizacion de consultas a BD, indices estrategicos y refactorizacion de queries ineficientes. OBJETIVO: Reducir tiempo de carga de 8-15s a menos de 2s. INCLUYE: Analisis de performance, optimizacion de BD, refactorizacion de queries N+1, cache, paginacion. BENEFICIOS: Operadores trabajan sin esperas, menor carga en BD, mayor productividad. ESTIMACION: 8-11 horas."

$epicBody = @{
    fields = @{
        project = @{ key = "SCRUM" }
        summary = "Optimizacion de Consultas y Performance en Caja/Pagos"
        description = $epicDesc
        issuetype = @{ name = "Epic" }
        priority = @{ name = "High" }
        labels = @("performance", "database", "optimization", "backend", "caja-pagos")
        customfield_10011 = "PERF-CAJA"
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

# PASO 2: CREAR LAS 8 HISTORIAS
$stories = @(
    @{ summary = "Analisis y Diagnostico de Performance"; desc = "Identificar cuellos de botella en modulo caja/pagos para priorizar optimizaciones. Incluye: Profiling de rutas, EXPLAIN queries, metricas baseline."; est = "3h" },
    @{ summary = "Optimizacion de Indices en Base de Datos"; desc = "Implementar indices apropiados en BD para reducir tiempos de busqueda. Incluye: Indices en transaction, reservation, optimizar existentes."; est = "4h" },
    @{ summary = "Refactorizacion de Queries con N+1"; desc = "Eliminar queries N+1 en listados reduciendo de 100+ a menos de 5 queries por pagina. Incluye: Refactorizar TransactionRepository, ReservationRepository, queries DQL."; est = "6h" },
    @{ summary = "Implementacion de Cache en Consultas Frecuentes"; desc = "Cachear resultados de consultas frecuentes para evitar consultas repetitivas. Incluye: Configurar Symfony Cache, cachear estadisticas, cachear configuracion."; est = "4h" },
    @{ summary = "Optimizacion de Paginacion y Carga"; desc = "Implementar paginacion eficiente en listados grandes. Incluye: KnpPaginator, optimizar conteo total, lazy loading en tablas."; est = "3h" },
    @{ summary = "Testing y Validacion de Performance"; desc = "Tests automatizados para validar performance y prevenir regresiones. Incluye: Tests de performance, benchmarks, tests con datos reales."; est = "5h" },
    @{ summary = "Monitoreo y Metricas en Produccion"; desc = "Monitorear performance en tiempo real para detectar degradacion. Incluye: Logging, dashboard metricas, alertas."; est = "4h" },
    @{ summary = "Documentacion y Knowledge Transfer"; desc = "Documentacion completa de optimizaciones para mantenimiento futuro. Incluye: Doc de optimizaciones, guia mejores practicas, actualizar README."; est = "3h" }
)

$contador = 2
$storyKeys = @()

foreach ($story in $stories) {
    Write-Host "[$contador/9] Creando Historia: $($story.summary)..." -ForegroundColor Yellow
    
    $storyBody = @{
        fields = @{
            project = @{ key = "SCRUM" }
            summary = $story.summary
            description = $story.desc
            issuetype = @{ name = "Story" }
            priority = @{ name = "High" }
            labels = @("performance", "caja-pagos")
            customfield_10014 = $epicKey
        }
    } | ConvertTo-Json -Depth 10
    
    try {
        $storyResult = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $storyBody
        $storyKeys += $storyResult.key
        Write-Host "   ✅ Historia creada: $($storyResult.key)" -ForegroundColor Green
    } catch {
        Write-Host "   ❌ Error: $($_.Exception.Message)" -ForegroundColor Red
    }
    
    $contador++
    Start-Sleep -Milliseconds 800
}

Write-Host "`n========================================" -ForegroundColor Cyan
Write-Host "RESUMEN" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "✅ Épica: $epicKey" -ForegroundColor Green
Write-Host "✅ Historias creadas: $($storyKeys.Count)/8" -ForegroundColor Green
Write-Host "`nHistorias:" -ForegroundColor White
foreach ($key in $storyKeys) {
    Write-Host "   - $key" -ForegroundColor Cyan
}
Write-Host "`nURL Épica: $baseUrl/browse/$epicKey" -ForegroundColor Cyan
Write-Host "========================================`n" -ForegroundColor Cyan
