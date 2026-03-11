$baseUrl = "https://devpbstudio.atlassian.net"
$email   = "desarrollo.pbstudio@outlook.com"
$token   = "ATATT3xFfGF0ioDRQQNAvB8qyE90pYybvPNixtl-X9rc0UK5NzrUcFy3888_IDKr1ZuGdZzaOm5GE3TkVtAEC5DcfEZeY1U-BlsTjLxD5R7czbkA5aCtPhV8wZhciDTzPbybnFHYuF-0etAFPFQ2OW9_D9sp6RSSDvnrDuhFMHMxlKi_uFXnHdo=0600D49C"

$bytes = [System.Text.Encoding]::UTF8.GetBytes("${email}:${token}")
$b64   = [System.Convert]::ToBase64String($bytes)
$headers = @{
    "Authorization" = "Basic $b64"
    "Content-Type"  = "application/json"
    "Accept"        = "application/json"
}

Write-Host "Actualizando SCRUM-93 EPICA con Drag & Drop..." -ForegroundColor Cyan

$desc = "Sistema intuitivo de configuracion visual de asientos mediante DRAG & DROP. Admin arrastra y suelta asientos numerados en tablero de ajedrez determinisitco. MVP Opcion B con grid editable. Documentacion: DOCUMENTACION/FIXES_PENDIENTES/ISSUE_55_MAPA_ASIENTOS_MODO_AJEDREZ.md"

$payload = @{
    fields = @{
        description = $desc
    }
} | ConvertTo-Json -Depth 5

try {
    Invoke-RestMethod -Method Put -Uri "$baseUrl/rest/api/2/issue/SCRUM-93" -Headers $headers -Body $payload | Out-Null
    Write-Host "Exito: SCRUM-93 EPICA actualizada" -ForegroundColor Green
    Write-Host "URL: $baseUrl/browse/SCRUM-93" -ForegroundColor Yellow
    Write-Host "Descripcion: Drag & Drop de asientos en tablero ajedrez" -ForegroundColor Yellow
}
catch {
    Write-Host "Error: $($_.Exception.Message)" -ForegroundColor Red
}
