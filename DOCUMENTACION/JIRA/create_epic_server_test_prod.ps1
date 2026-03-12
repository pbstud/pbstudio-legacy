# create_epic_server_test_prod.ps1
# Crea una epica con 2 tareas y subtareas para el montaje de servidor de test de produccion.

$ErrorActionPreference = "Stop"

$baseUrl = "https://devpbstudio.atlassian.net"
$email   = "desarrollo.pbstudio@outlook.com"
$token   = $env:JIRA_API_TOKEN
$proj    = "SCRUM"

if ([string]::IsNullOrWhiteSpace($token)) {
    throw "Define JIRA_API_TOKEN en variables de entorno antes de ejecutar este script."
}

$outFile = "$PSScriptRoot\EPIC_ServerTestProd_Result.json"
$logFile = "$PSScriptRoot\EPIC_ServerTestProd_Log.txt"

$bytes = [System.Text.Encoding]::UTF8.GetBytes("${email}:${token}")
$b64   = [System.Convert]::ToBase64String($bytes)
$headers = @{
    "Authorization" = "Basic $b64"
    "Content-Type"  = "application/json"
    "Accept"        = "application/json"
}

function Write-Log {
    param([string]$Message)
    $line = "[{0}] {1}" -f (Get-Date -Format "yyyy-MM-dd HH:mm:ss"), $Message
    $line | Add-Content -Path $logFile
    Write-Host $line
}

function Get-ErrorBody {
    param([System.Exception]$Ex)
    try {
        if ($Ex.Response -and $Ex.Response.GetResponseStream()) {
            $reader = New-Object System.IO.StreamReader($Ex.Response.GetResponseStream())
            return $reader.ReadToEnd()
        }
    } catch {}
    if ($Ex.Message) { return $Ex.Message }
    return "Unknown error"
}

function New-JiraIssue {
    param(
        [hashtable]$Fields,
        [string]$Label
    )

    $body = @{ fields = $Fields } | ConvertTo-Json -Depth 20
    try {
        $resp = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $body
        Write-Log "OK [$Label] $($resp.key)"
        return $resp
    }
    catch {
        $errBody = Get-ErrorBody -Ex $_.Exception
        Write-Log "ERROR [$Label] $errBody"
        throw
    }
}

function Update-JiraFields {
    param(
        [string]$IssueKey,
        [hashtable]$Fields,
        [string]$Label
    )

    $body = @{ fields = $Fields } | ConvertTo-Json -Depth 20
    try {
        Invoke-RestMethod -Method Put -Uri "$baseUrl/rest/api/2/issue/$IssueKey" -Headers $headers -Body $body | Out-Null
        Write-Log "OK [UPDATE $Label] $IssueKey"
        return $true
    }
    catch {
        $errBody = Get-ErrorBody -Ex $_.Exception
        Write-Log "WARN [UPDATE $Label] $IssueKey -> $errBody"
        return $false
    }
}

function New-TaskUnderEpic {
    param(
        [string]$EpicKey,
        [string]$Summary,
        [string]$Description,
        [string]$EpicLinkFieldId
    )

    # Intento A: jerarquia con parent directo al epic.
    try {
        return New-JiraIssue -Label "TASK(parent)" -Fields @{
            project     = @{ key = $proj }
            issuetype   = @{ id = "10004" }
            parent      = @{ key = $EpicKey }
            summary     = $Summary
            description = $Description
            labels      = @("server-test", "deploy", "hardening")
        }
    }
    catch {
        # Intento B: crear tarea normal y vincular por Epic Link.
        Write-Log "INFO fallback: creating task without parent and linking with $EpicLinkFieldId"
        $taskResp = New-JiraIssue -Label "TASK(plain)" -Fields @{
            project     = @{ key = $proj }
            issuetype   = @{ id = "10004" }
            summary     = $Summary
            description = $Description
            labels      = @("server-test", "deploy", "hardening")
        }

        $ok = Update-JiraFields -IssueKey $taskResp.key -Label "EpicLink" -Fields @{
            $EpicLinkFieldId = $EpicKey
        }

        if (-not $ok) {
            Write-Log "WARN task $($taskResp.key) created but epic link update failed"
        }

        return $taskResp
    }
}

"=== START $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss') ===" | Out-File -FilePath $logFile -Encoding UTF8

Write-Log "Resolviendo campo Epic Link"
$fieldsCatalog = Invoke-RestMethod -Method Get -Uri "$baseUrl/rest/api/2/field" -Headers $headers
$epicLinkField = $fieldsCatalog | Where-Object { $_.name -eq "Epic Link" } | Select-Object -First 1
$epicLinkFieldId = if ($epicLinkField) { $epicLinkField.id } else { "customfield_10014" }
Write-Log "EpicLinkFieldId=$epicLinkFieldId"

$epicDescription = @"
Montaje de servidor de test de produccion con enfoque prod-like.
Incluye hardening de seguridad, validacion tecnica y documentacion operativa.

Alcance:
- Extensiones PHP requeridas (gd, exif, intl)
- Variables de entorno y readiness de reset de password
- Directorios media, permisos y messenger transport
- Smoke checks en prod y validacion funcional
- Runbook operativo de despliegue y checklist final
"@

Write-Log "Creando epica"
$epicResp = New-JiraIssue -Label "EPIC" -Fields @{
    project     = @{ key = $proj }
    issuetype   = @{ id = "10001" }
    summary     = "EPICA - Montaje server test de produccion (prod-like)"
    description = $epicDescription
    labels      = @("epic", "deploy", "server-test", "prod-like")
}
$epicKey = $epicResp.key

$tasksSpec = @(
    @{
        summary = "TAREA - Preparar entorno prod-like en servidor de test"
        description = "Configurar runtime base del servidor para que el entorno de test se comporte como produccion."
        subtasks = @(
            @{ summary = "Subtask - Habilitar extensiones PHP gd/exif/intl"; description = "Activar y validar modulos requeridos para Symfony y procesamiento de imagen." },
            @{ summary = "Subtask - Configurar .env.prod.local y variables criticas"; description = "Definir APP_ENV, APP_DEBUG, APP_SECRET unico, RESETTING_RETRY_TTL y DSN requeridos." },
            @{ summary = "Subtask - Preparar media, permisos y tabla messenger"; description = "Crear directorios media, ajustar permisos y verificar messenger_messages." }
        )
    },
    @{
        summary = "TAREA - Validar operacion y documentar despliegue"
        description = "Ejecutar validacion tecnica completa y dejar evidencia operativa para el equipo."
        subtasks = @(
            @{ summary = "Subtask - Ejecutar smoke checks en modo prod"; description = "Correr about, schema:validate, cache:warmup, lint:container, debug:router y list app." },
            @{ summary = "Subtask - Ejecutar pruebas automatizadas"; description = "Correr phpunit y lint PHP para confirmar estabilidad de codigo." },
            @{ summary = "Subtask - Publicar runbook y checklist de despliegue"; description = "Documentar secuencia final para servidor destino y plan de accion." }
        )
    }
)

$createdTasks = @()
$createdSubtasks = @()

foreach ($task in $tasksSpec) {
    Write-Log "Creando tarea: $($task.summary)"
    $taskResp = New-TaskUnderEpic -EpicKey $epicKey -Summary $task.summary -Description $task.description -EpicLinkFieldId $epicLinkFieldId

    $taskKey = $taskResp.key
    $createdTasks += [PSCustomObject]@{
        key = $taskKey
        summary = $task.summary
        url = "$baseUrl/browse/$taskKey"
    }

    foreach ($sub in $task.subtasks) {
        Write-Log "Creando subtask bajo ${taskKey}: $($sub.summary)"
        $subResp = New-JiraIssue -Label "SUBTASK" -Fields @{
            project     = @{ key = $proj }
            parent      = @{ key = $taskKey }
            issuetype   = @{ name = "Subtask" }
            summary     = $sub.summary
            description = $sub.description
            labels      = @("server-test", "deploy")
        }

        $subKey = $subResp.key
        $createdSubtasks += [PSCustomObject]@{
            key = $subKey
            parent = $taskKey
            summary = $sub.summary
            url = "$baseUrl/browse/$subKey"
        }

        Start-Sleep -Milliseconds 350
    }

    Start-Sleep -Milliseconds 350
}

$result = [PSCustomObject]@{
    epic = [PSCustomObject]@{
        key = $epicKey
        url = "$baseUrl/browse/$epicKey"
    }
    tasks = $createdTasks
    subtasks = $createdSubtasks
    timestamp = (Get-Date -Format "yyyy-MM-dd HH:mm:ss")
}

$result | ConvertTo-Json -Depth 20 | Out-File -FilePath $outFile -Encoding UTF8
Write-Log "Resultado guardado en $outFile"
Write-Log "=== END ==="

Write-Host ""
Write-Host "EPICA: $epicKey"
foreach ($t in $createdTasks) { Write-Host "TAREA: $($t.key)" }
Write-Host "Subtasks creadas: $($createdSubtasks.Count)"
