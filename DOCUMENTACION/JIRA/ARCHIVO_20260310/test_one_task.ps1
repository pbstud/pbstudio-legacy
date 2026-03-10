# ============================================================
# test_one_task.ps1
# Prueba: crea UNA sola tarea bajo SCRUM-34 para validar API
# Usa API v2 + descripcion en texto plano
# ============================================================

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

Write-Host "=== TEST B: Subtask bajo SCRUM-35 (Indices) ===" -ForegroundColor Cyan

$bodyObj = @{
    fields = @{
        project     = @{ key = "SCRUM" }
        parent      = @{ key = "SCRUM-35" }
        summary     = "2.1 Crear y ejecutar migracion de indices para tabla transaction"
        description = "Analizar TransactionRepository, crear migracion con indices en columnas de WHERE/ORDER BY/JOIN y ejecutar."
        issuetype   = @{ name = "Subtask" }
    }
}

$body = $bodyObj | ConvertTo-Json -Depth 10 -Compress

Write-Host "Body enviado:" -ForegroundColor Yellow
Write-Host $body
Write-Host ""

try {
    $r = Invoke-RestMethod -Uri "$baseUrl/rest/api/2/issue" `
                           -Method Post `
                           -Headers $headers `
                           -Body $body
    Write-Host "OK: Tarea creada con key => $($r.key)" -ForegroundColor Green
    Write-Host "URL: $baseUrl/browse/$($r.key)" -ForegroundColor Green
}
catch {
    Write-Host "ERROR HTTP: $($_.Exception.Response.StatusCode)" -ForegroundColor Red

    # Leer el cuerpo real del error
    try {
        $stream = $_.Exception.Response.GetResponseStream()
        $reader = New-Object System.IO.StreamReader($stream)
        $errBody = $reader.ReadToEnd()
        Write-Host "Detalle del error: $errBody" -ForegroundColor Red
    }
    catch {
        Write-Host "No se pudo leer el cuerpo del error: $($_.ErrorDetails.Message)" -ForegroundColor DarkRed
    }
}
