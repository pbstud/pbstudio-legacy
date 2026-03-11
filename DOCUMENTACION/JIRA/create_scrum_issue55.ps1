# ============================================================
# create_scrum_issue55.ps1
# Crea SCRUM ticket para Issue #55 - Mapa de Asientos Ajedrez
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

$bodyObj = @{
    fields = @{
        project     = @{ key = $proj }
        issuetype   = @{ id = "10004" }
        summary     = "Issue #55 - Mapa de Asientos en Modo Ajedrez Editable (MVP Opcion B)"
        description = "Implementar panel de configuracion visual de disponibilidad de asientos en modo ajedrez editable por celdas. MVP: grid editable, compatibilidad con reservacion existente. Documentacion: DOCUMENTACION/FIXES_PENDIENTES/ISSUE_55_MAPA_ASIENTOS_MODO_AJEDREZ.md"
        labels      = @("feature", "ui", "mapa-asientos")
    }
}

$body = $bodyObj | ConvertTo-Json -Depth 10 -Compress

Write-Host "Creando SCRUM ticket para Issue #55..." -ForegroundColor Cyan

try {
    $response = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $body
    Write-Host "✅ SCRUM ticket creado exitosamente" -ForegroundColor Green
    Write-Host "   KEY: $($response.key)" -ForegroundColor Yellow
    Write-Host "   URL: $baseUrl/browse/$($response.key)" -ForegroundColor Yellow
    Write-Host "   ID:  $($response.id)" -ForegroundColor Yellow
    
    # Guardar resultado
    @{
        key = $response.key
        id  = $response.id
        url = "$baseUrl/browse/$($response.key)"
    } | ConvertTo-Json | Out-File -FilePath "$PSScriptRoot\SCRUM_Issue55_Result.json" -Encoding UTF8
    
    Write-Host "`n✅ Resultado guardado en: SCRUM_Issue55_Result.json" -ForegroundColor Green
    exit 0
} catch {
    Write-Host "❌ Error al crear ticket:" -ForegroundColor Red
    Write-Host $_.Exception.Message
    if ($_.Exception.Response) {
        try {
            $stream  = $_.Exception.Response.GetResponseStream()
            $reader  = New-Object System.IO.StreamReader($stream)
            $errBody = $reader.ReadToEnd()
            Write-Host "Detalle del error:"
            Write-Host $errBody
        } catch { }
    }
    exit 1
}
