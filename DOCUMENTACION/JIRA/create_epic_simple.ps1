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

$msg = "Creando EPICA para Issue numero 55 (Mapa de Asientos)..."
Write-Host $msg -ForegroundColor Cyan

$desc = "Sistema de configuracion visual de disponibilidad de asientos en modo ajedrez editable. MVP Opcion B: grid editable por celdas. Documentacion: DOCUMENTACION/FIXES_PENDIENTES/ISSUE_55_MAPA_ASIENTOS_MODO_AJEDREZ.md"

$epicPayload = @{
    fields = @{
        project     = @{ key = $proj }
        issuetype   = @{ id = "10001" }
        summary     = "EPICA - Mapa de Asientos en Modo Ajedrez (MVP Opcion B)"
        description = $desc
        labels      = @("epic", "ui", "mapa-asientos", "mvp")
    }
} | ConvertTo-Json -Depth 10

$response = $null
try {
    $response = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $epicPayload
    $epicKey = $response.key
    $msg1 = "Exito: EPICA creada"
    $msg2 = "KEY: " + $epicKey
    $msg3 = "URL: " + $baseUrl + "/browse/" + $epicKey
    Write-Host $msg1 -ForegroundColor Green
    Write-Host $msg2 -ForegroundColor Yellow
    Write-Host $msg3 -ForegroundColor Yellow
    
    @{
        epicKey = $epicKey
        epicId  = $response.id
        url = "$baseUrl/browse/$epicKey"
        timestamp = (Get-Date -Format 'yyyy-MM-dd HH:mm:ss')
    } | ConvertTo-Json | Out-File -FilePath "$PSScriptRoot\EPIC_MapaAsientos_Result.json" -Encoding UTF8
    
    Write-Host "Resultado guardado en EPIC_MapaAsientos_Result.json" -ForegroundColor Green
}
catch {
    $msg_err = "Error al crear epica: " + $_.Exception.Message
    Write-Host $msg_err -ForegroundColor Red
}
