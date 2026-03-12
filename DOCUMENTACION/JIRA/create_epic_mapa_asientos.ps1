# ============================================================
# create_epic_mapa_asientos.ps1
# Crea ÉPICA para agrupar SCRUM-84 (Issue #55)
# ============================================================

$baseUrl = "https://devpbstudio.atlassian.net"
$email   = "desarrollo.pbstudio@outlook.com"
$token   = "ATATT3xFfGF0ioDRQQNAvB8qyE90pYybvPNixtl-X9rc0UK5NzrUcFy3888_IDKr1ZuGdZzaOm5GE3TkVtAEC5DcfEZeY1U-BlsTjLxD5R7czbkA5aCtPhV8wZhciDTzPbybnFHYuF-0etAFPFQ2OW9_D9sp6RSSDvnrDuhFMHMxlKi_uFXnHdo=0600D49C"
$proj    = "SCRUM"

$bytes = [System.Text.Encoding]::UTF8.GetBytes("${email}:${token}")
$b64   = [System.Convert]::ToBase64String($bytes)
$headers = @{
    "Authorization" = "Basic $b64"
    "Content-Type"  = "application/json"
    "Accept"        = "application/json"
}

Write-Host "Creando ÉPICA para Issue #55 (Mapa de Asientos)..." -ForegroundColor Cyan

$desc = @"
Sistema de configuración visual de disponibilidad de asientos en modo ajedrez editable.

OBJETIVO:
Permitir a administradores configurar asientos disponibles/bloqueados al crear clases, manteniendo compatibilidad con modelo actual (placeNumber).

ALCANCE MVP (Opcion B):
- Backend: UI grid editable por celdas en admin
- Frontend: Render de mapa según configuración
- Estados visuales: disponible, ocupado, seleccionado, mi asiento
- Validaciones: capacidad, rangos de lugar, reglas concurrencia

DETALLES TECNICOS:
- placeNumber como identidad canonica
- Formula: placeNumber = (row * cols) + col + 1
- Persistencia en Session.placesNotAvailable existente
- Sin ruptura de compatibilidad

FUTURO (Opcion A - Fase 3):
Drag & drop avanzado con layouts personalizados por salon.

DOCUMENTACION:
DOCUMENTACION/FIXES_PENDIENTES/ISSUE_55_MAPA_ASIENTOS_MODO_AJEDREZ.md

ESTIMACION: 3-5 horas (MVP)
"@

$epicPayload = @{
    fields = @{
        project     = @{ key = $proj }
        issuetype   = @{ id = "10001" }
        summary     = "EPICA - Mapa Interactivo de Asientos (MVP Opcion B)"
        description = $desc
        labels      = @("epic", "ui", "mapa-asientos", "mvp")
    }
} | ConvertTo-Json -Depth 10

try {
    $response = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $epicPayload
    $epicKey = $response.key
    Write-Host "✅ ÉPICA creada exitosamente" -ForegroundColor Green
    Write-Host "   KEY: $epicKey" -ForegroundColor Yellow
    Write-Host "   URL: $baseUrl/browse/$epicKey" -ForegroundColor Yellow
    Write-Host "   ID:  $($response.id)" -ForegroundColor Yellow
    
    # Ahora vincular SCRUM-84 a la épica
    Write-Host "`nVinculando SCRUM-84 a la épica..." -ForegroundColor Cyan
    
    $linkPayload = @{
        outwardIssue = @{ key = "SCRUM-84" }
        type         = @{ name = "is child of" }
    } | ConvertTo-Json -Depth 5
    
    try {
        Invoke-RestMethod -Method POST -Uri "$baseUrl/rest/api/2/issue/$epicKey/remotelink" -Headers $headers -Body $linkPayload | Out-Null
        Write-Host "⚠️  Nota: Vinculacion remota creada (si es necesario)" -ForegroundColor Yellow
    } catch {
        Write-Host "⚠️  Nota: Vinculacion remota podria requerir ajuste manual" -ForegroundColor Yellow
    }
    
    # Guardar resultado
    @{
        epicKey = $epicKey
        epicId  = $response.id
        linkedTo = "SCRUM-84"
        url = "$baseUrl/browse/$epicKey"
        timestamp = (Get-Date -Format 'yyyy-MM-dd HH:mm:ss')
    } | ConvertTo-Json | Out-File -FilePath "$PSScriptRoot\EPIC_MapaAsientos_Result.json" -Encoding UTF8
    
    Write-Host "`n✅ Resultado guardado en: EPIC_MapaAsientos_Result.json" -ForegroundColor Green
    Write-Host "`n📝 INSTRUCCIONES MANUALES EN JIRA:`n" -ForegroundColor Cyan
    Write-Host "   1. Ir a SCRUM-84 (https://devpbstudio.atlassian.net/browse/SCRUM-84)" -ForegroundColor Gray
    Write-Host "   2. Editar campo 'Epic Link' y asignar a: $epicKey" -ForegroundColor Gray
    Write-Host "   3. O ir a $epicKey y desde 'Link' asignar SCRUM-84 como 'child'" -ForegroundColor Gray
    
} catch {
    Write-Host "❌ Error al crear épica:" -ForegroundColor Red
    Write-Host $_.Exception.Message
    if ($_.Exception.Response) {
        try {
            $stream  = $_.Exception.Response.GetResponseStream()
            $reader  = New-Object System.IO.StreamReader($stream)
            $errBody = $reader.ReadToEnd()
            Write-Host "Detalle:"
            Write-Host $errBody
        } catch { }
    }
}
