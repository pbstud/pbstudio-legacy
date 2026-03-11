# ============================================================
# create_subtasks_scrum84.ps1
# Crea subtareas para SCRUM-84 (Issue #55 - Mapa Asientos)
# ============================================================

$baseUrl = "https://devpbstudio.atlassian.net"
$email   = "desarrollo.pbstudio@outlook.com"
$token   = "ATATT3xFfGF0ioDRQQNAvB8qyE90pYybvPNixtl-X9rc0UK5NzrUcFy3888_IDKr1ZuGdZzaOm5GE3TkVtAEC5DcfEZeY1U-BlsTjLxD5R7czbkA5aCtPhV8wZhciDTzPbybnFHYuF-0etAFPFQ2OW9_D9sp6RSSDvnrDuhFMHMxlKi_uFXnHdo=0600D49C"
$proj    = "SCRUM"
$parentKey = "SCRUM-84"

$bytes = [System.Text.Encoding]::UTF8.GetBytes("${email}:${token}")
$b64   = [System.Convert]::ToBase64String($bytes)
$headers = @{
    "Authorization" = "Basic $b64"
    "Content-Type"  = "application/json"
    "Accept"        = "application/json"
}

Write-Host "Creando subtareas para SCRUM-84..." -ForegroundColor Cyan

# Definir subtareas basadas en la Fase 1 del MVP
$subtasks = @(
    @{
        summary = "1.1 Diseñar y crear componente backend del grid editable"
        desc    = "Crear formulario/componente backend para UI grid editable por celdas. Incluye selector de capacidad, grid visual con indexacion deterministica, y controles de toggle por celda. Implementar logica base de alternar estados disponible/no disponible."
    },
    @{
        summary = "1.2 Implementar persistencia de configuracion del grid (placesNotAvailable)"
        desc    = "Conectar UI grid con tabla Session. Persistir disabled_places usando placesNotAvailable existente. Validar que rows * cols >= capacity y que disabled_places esta dentro de rango 1..capacity."
    },
    @{
        summary = "1.3 Crear contratos JSON y endpoints backend"
        desc    = "Documentar payloads de configuracion (admin) y respuesta para render frontend. Crear endpoints para persistir configuracion y recuperar estado. Implementar validaciones en backend segun spec ISSUE_55_MAPA_ASIENTOS_MODO_AJEDREZ.md."
    },
    @{
        summary = "1.4 Implementar render frontend del mapa de asientos"
        desc    = "Renderizar grid de asientos en frontend segun configuracion guardada. Aplicar formula deterministica (placeNumber = row*cols + col + 1) para mapear celdas a numeros de asiento. Mostrar grid responsive segun grid dimensions guardadas."
    },
    @{
        summary = "1.5 Implementar estados visuales del mapa (disponible, ocupado, seleccionado)"
        desc    = "Diferenciar visualmente: asientos disponibles, ocupados por otro usuario, seleccionados por el usuario actual, y mi asiento actual (si aplica). Solo permitir clic en asientos disponibles. Mantener compatibilidad con placeNumber canonico."
    },
    @{
        summary = "1.6 Implementar validaciones y reglas de negocio"
        desc    = "Validar que no se guarde capacity <= 0. No permitir rows/cols <= 0. Rechazar reservacion en asientos de disabled_places. Mantener reglas existentes de concurrencia/duplicidad. Testear mapeo row/col <-> placeNumber."
    },
    @{
        summary = "1.7 Crear plan de pruebas manuales"
        desc    = "Documentar 4 pasos de prueba manual: crear clase con bloqueos, verificar en frontend, reservar lugar, validar persistencia, y editar bloqueos. Validar que cambios de configuracion se reflejen correctamente en reservaciones existentes."
    },
    @{
        summary = "1.8 Crear y ejecutar pruebas automatizadas"
        desc    = "Escribir tests para: mapeo determinisico row/col <-> placeNumber, validacion de payloads, rechazo de reservacion en asiento bloqueado, compatibilidad con reglas de concurrencia. Minimo 4 categorias de tests segun spec."
    }
)

Write-Host "`nCreando $($subtasks.Count) subtareas..." -ForegroundColor Yellow

$createdSubtasks = @()

foreach ($sub in $subtasks) {
    $bodyObj = @{
        fields = @{
            project     = @{ key = $proj }
            parent      = @{ key = $parentKey }
            issuetype   = @{ name = "Subtask" }
            summary     = $sub.summary
            description = $sub.desc
        }
    }

    $body = $bodyObj | ConvertTo-Json -Depth 10

    try {
        $response = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $body
        $msg = "✅ $($response.key) - $($sub.summary)"
        Write-Host $msg -ForegroundColor Green
        $createdSubtasks += @{ key = $response.key; summary = $sub.summary }
    } catch {
        $msg = "❌ ERROR: $($sub.summary)"
        Write-Host $msg -ForegroundColor Red
        Write-Host "  Detalle: $($_.Exception.Message)" -ForegroundColor Gray
    }
}

Write-Host "`n" -ForegroundColor Cyan
Write-Host "=== RESUMEN ===" -ForegroundColor Cyan
Write-Host "Subtareas creadas: $($createdSubtasks.Count)" -ForegroundColor Yellow

if ($createdSubtasks.Count -gt 0) {
    Write-Host "`nSubtareas de SCRUM-84:" -ForegroundColor Green
    $createdSubtasks | ForEach-Object {
        Write-Host "  • $($_.key): $($_.summary)" -ForegroundColor White
    }
}

# Guardar resultado
@{
    parentKey = $parentKey
    subtaskCount = $createdSubtasks.Count
    createdSubtasks = $createdSubtasks
    timestamp = (Get-Date -Format 'yyyy-MM-dd HH:mm:ss')
} | ConvertTo-Json | Out-File -FilePath "$PSScriptRoot\SCRUM84_Subtasks_Result.json" -Encoding UTF8

Write-Host "`n✅ Resultado guardado en: SCRUM84_Subtasks_Result.json" -ForegroundColor Green
