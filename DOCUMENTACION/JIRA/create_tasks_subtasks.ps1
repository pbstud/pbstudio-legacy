# ============================================================
# create_tasks_subtasks.ps1
# Crea 16 Subtareas para Epica SCRUM-33
# Historias: SCRUM-34 a SCRUM-41 (2 subtareas por historia)
# Jerarquia valida: Historia -> Subtask
# API v2 + descripcion en texto plano
# ============================================================

$baseUrl = "https://devpbstudio.atlassian.net"
$email   = "desarrollo.pbstudio@outlook.com"
$token   = "ATATT3xFfGF0ioDRQQNAvB8qyE90pYybvPNixtl-X9rc0UK5NzrUcFy3888_IDKr1ZuGdZzaOm5GE3TkVtAEC5DcfEZeY1U-BlsTjLxD5R7czbkA5aCtPhV8wZhciDTzPbybnFHYuF-0etAFPFQ2OW9_D9sp6RSSDvnrDuhFMHMxlKi_uFXnHdo=0600D49C"
$proj    = "SCRUM"
$logFile = "$PSScriptRoot\tasks_subtasks_log.txt"

$bytes = [System.Text.Encoding]::UTF8.GetBytes("${email}:${token}")
$b64   = [System.Convert]::ToBase64String($bytes)
$headers = @{
    "Authorization" = "Basic $b64"
    "Content-Type"  = "application/json"
    "Accept"        = "application/json"
}

"=== INICIO: $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss') ===" | Tee-Object $logFile

function New-JiraIssue {
    param(
        [string]$parentKey,
        [string]$summary,
        [string]$description,
        [string]$issueType
    )

    $bodyObj = @{
        fields = @{
            project     = @{ key = $proj }
            parent      = @{ key = $parentKey }
            summary     = $summary
            description = $description
            issuetype   = @{ name = $issueType }
        }
    }

    $body = $bodyObj | ConvertTo-Json -Depth 10 -Compress

    try {
        $r = Invoke-RestMethod -Uri "$baseUrl/rest/api/2/issue" `
                               -Method Post `
                               -Headers $headers `
                               -Body $body
        $msg = "OK [$issueType] $($r.key) <- parent:$parentKey | $summary"
        Write-Host $msg -ForegroundColor Green
        $msg | Add-Content $logFile
        return $r.key
    }
    catch {
        $httpStatus = $_.Exception.Response.StatusCode
        try {
            $stream  = $_.Exception.Response.GetResponseStream()
            $reader  = New-Object System.IO.StreamReader($stream)
            $errBody = $reader.ReadToEnd()
        } catch { $errBody = $_.ErrorDetails.Message }
        $msg = "ERROR [$issueType] HTTP:$httpStatus parent:$parentKey | $summary | $errBody"
        Write-Host $msg -ForegroundColor Red
        $msg | Add-Content $logFile
        return $null
    }
}

# ============================================================
# ESTRUCTURA REDUCIDA: 8 historias, 2 subtareas por historia = 16 subtareas
# Jerarquia valida: Historia (SCRUM-3x) -> Subtask
# ============================================================
$structure = @(


    # ── HISTORIA 2: SCRUM-35 – Optimizacion de Indices ─────
    @{
        story = "SCRUM-35"
        subs  = @(
            @{ summary = "2.1 Crear y ejecutar migracion de indices para tabla transaction";    desc = "Analizar TransactionRepository, crear migracion con indices en columnas de WHERE/ORDER BY/JOIN y ejecutar." },
            @{ summary = "2.2 Crear y ejecutar migracion de indices para tabla reservation";   desc = "Analizar ReservationRepository, crear migracion con indices en columnas de WHERE/ORDER BY/JOIN y ejecutar." }
        )
    },

    # ── HISTORIA 3: SCRUM-36 – Refactorizacion N+1 ─────────
    @{
        story = "SCRUM-36"
        subs  = @(
            @{ summary = "3.1 Optimizar TransactionRepository con eager loading";  desc = "Implementar eager loading en getAllByUser() y getGroupedByPackage() y validar reduccion de queries con profiler." },
            @{ summary = "3.2 Optimizar ReservationRepository con JOINs explicitos"; desc = "Optimizar getReservationsBySession(), getByUser() y getAllCompletedByUser() con eager load y JOINs." }
        )
    },

    # ── HISTORIA 4: SCRUM-37 – Implementacion de Cache ─────
    @{
        story = "SCRUM-37"
        subs  = @(
            @{ summary = "4.1 Configurar Cache Pool en Symfony e instalar dependencias";                      desc = "Configurar cache pool en cache.yaml, instalar symfony/cache y definir TTL por tipo de dato." },
            @{ summary = "4.2 Cachear estadisticas del dashboard con invalidacion por eventos";               desc = "Implementar cache en TransactionService para datos del dashboard y configurar invalidacion al crear/editar transacciones." }
        )
    },

    # ── HISTORIA 5: SCRUM-38 – Paginacion y Carga ──────────
    @{
        story = "SCRUM-38"
        subs  = @(
            @{ summary = "5.1 Instalar KnpPaginatorBundle y aplicar paginacion en Controller de Caja"; desc = "Instalar KnpPaginatorBundle via Composer y aplicar paginacion en la accion de listado de caja." },
            @{ summary = "5.2 Actualizar vista con controles de paginacion y optimizar COUNT total";    desc = "Implementar template de paginacion en Twig y optimizar COUNT con FOUND_ROWS() o cache de 1 min." }
        )
    },

    # ── HISTORIA 6: SCRUM-39 – Testing y Validacion ────────
    @{
        story = "SCRUM-39"
        subs  = @(
            @{ summary = "6.1 Crear test de carga para ruta /backend/caja y verificar ausencia de N+1";              desc = "Implementar test PHPUnit que cargue /backend/caja y verifique que el numero de queries no supera el umbral." },
            @{ summary = "6.2 Ejecutar benchmark baseline/post-optimizacion y documentar porcentaje de mejora";      desc = "Ejecutar suite de benchmark antes y despues de optimizaciones, capturar tiempos y calcular mejoras porcentuales." }
        )
    },

    # ── HISTORIA 7: SCRUM-40 – Monitoreo en Produccion ─────
    @{
        story = "SCRUM-40"
        subs  = @(
            @{ summary = "7.1 Configurar Doctrine Logger para slow queries y EventSubscriber de timing"; desc = "Configurar doctrine.dbal.logging para queries > 200ms y crear EventSubscriber que registre tiempo de cada request." },
            @{ summary = "7.2 Configurar thresholds de alerta y notificaciones por email al equipo";    desc = "Definir thresholds de degradacion y configurar mailer de Symfony para notificar al equipo cuando se superan." }
        )
    },

    # ── HISTORIA 8: SCRUM-41 – Documentacion ───────────────
    @{
        story = "SCRUM-41"
        subs  = @(
            @{ summary = "8.1 Crear OPTIMIZACION_CAJA_PAGOS.md con indices y cambios de codigo";            desc = "Documentar todos los indices creados, cambios en repositories y referencias a commits de git en el proyecto." },
            @{ summary = "8.2 Crear Performance Checklist y agregar seccion al README del proyecto";        desc = "Crear checklist de performance para nuevos desarrolladores y agregar seccion Performance Considerations al README." }
        )
    }
)

# ============================================================
# EJECUCION
# ============================================================
$totalSubtareas = ($structure | ForEach-Object { $_.subs.Count } | Measure-Object -Sum).Sum

Write-Host ""
Write-Host "=== PLAN: $($structure.Count) Historias | $totalSubtareas Subtareas ===" -ForegroundColor Cyan
Write-Host ""

$subtareasOk  = 0
$subtareasErr = 0

foreach ($item in $structure) {
    Write-Host ">> Historia: $($item.story)" -ForegroundColor Yellow

    foreach ($sub in $item.subs) {
        $subKey = New-JiraIssue `
                    -parentKey   $item.story `
                    -summary     $sub.summary `
                    -description $sub.desc `
                    -issueType   "Subtask"
        if ($subKey) { $subtareasOk++ } else { $subtareasErr++ }
        Start-Sleep -Milliseconds 400
    }

    Write-Host ""
    Start-Sleep -Milliseconds 300
}

# Resumen final
$resumen = @"

=== RESUMEN FINAL ===
Subtareas OK       : $subtareasOk / $totalSubtareas
Subtareas con ERROR: $subtareasErr / $totalSubtareas
Fin: $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')
"@

Write-Host $resumen -ForegroundColor Cyan
$resumen | Add-Content $logFile
