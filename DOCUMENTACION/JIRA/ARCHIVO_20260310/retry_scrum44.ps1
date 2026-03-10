# retry_scrum44.ps1 - Verifica y actualiza SCRUM-44
$baseUrl = "https://devpbstudio.atlassian.net"
$email   = "desarrollo.pbstudio@outlook.com"
$token   = "ATATT3xFfGF0ioDRQQNAvB8qyE90pYybvPNixtl-X9rc0UK5NzrUcFy3888_IDKr1ZuGdZzaOm5GE3TkVtAEC5DcfEZeY1U-BlsTjLxD5R7czbkA5aCtPhV8wZhciDTzPbybnFHYuF-0etAFPFQ2OW9_D9sp6RSSDvnrDuhFMHMxlKi_uFXnHdo=0600D49C"

$bytes   = [System.Text.Encoding]::UTF8.GetBytes("${email}:${token}")
$b64     = [System.Convert]::ToBase64String($bytes)
$headers = @{
    "Authorization" = "Basic $b64"
    "Content-Type"  = "application/json"
    "Accept"        = "application/json"
}

# Verificar si SCRUM-44 existe
Write-Host "Verificando SCRUM-44..."
try {
    $r = Invoke-RestMethod -Uri "$baseUrl/rest/api/2/issue/SCRUM-44" -Headers $headers
    Write-Host "SCRUM-44 existe: $($r.fields.summary)" -ForegroundColor Green

    # Actualizar descripcion
    $desc = "PASOS:
1. Habilitar web_profiler en config/packages/web_profiler.yaml (solo env: dev)
2. Navegar a /backend/caja como usuario admin y capturar el profile token de la barra de debug
3. Abrir /_profiler/{token}#db en el navegador y revisar el panel Doctrine
4. Repetir para /backend/payments
5. Anotar: numero total de queries, queries duplicadas, queries con tiempo > 50ms
6. Exportar lista de queries SQL exactas para el siguiente paso (SCRUM-45)

RESULTADO ESPERADO: Archivo queries_profile_caja.txt con queries ordenadas por tiempo DESC"

    $body = @{ fields = @{ description = $desc } } | ConvertTo-Json -Depth 10 -Compress
    Invoke-RestMethod -Uri "$baseUrl/rest/api/2/issue/SCRUM-44" -Method Put -Headers $headers -Body $body | Out-Null
    Write-Host "SCRUM-44 actualizado correctamente" -ForegroundColor Green
}
catch {
    try {
        $stream = $_.Exception.Response.GetResponseStream()
        $reader = New-Object System.IO.StreamReader($stream)
        $err = $reader.ReadToEnd()
    } catch { $err = $_.ErrorDetails.Message }
    Write-Host "ERROR en SCRUM-44: $err" -ForegroundColor Red
}

# Verificar SCRUM-20 con parent directo en lugar de customfield
Write-Host "`nVerificando SCRUM-20 y intentando moverlo a SCRUM-32 via parent..."
try {
    $r20 = Invoke-RestMethod -Uri "$baseUrl/rest/api/2/issue/SCRUM-20" -Headers $headers
    Write-Host "SCRUM-20 tipo: $($r20.fields.issuetype.name) | parent actual: $($r20.fields.parent.key)" -ForegroundColor Yellow

    # Intentar con parent directo
    $body = @{ fields = @{ parent = @{ key = "SCRUM-32" } } } | ConvertTo-Json -Depth 10 -Compress
    Invoke-RestMethod -Uri "$baseUrl/rest/api/2/issue/SCRUM-20" -Method Put -Headers $headers -Body $body | Out-Null
    Write-Host "SCRUM-20 movido a SCRUM-32 via parent" -ForegroundColor Green
}
catch {
    try {
        $stream = $_.Exception.Response.GetResponseStream()
        $reader = New-Object System.IO.StreamReader($stream)
        $err = $reader.ReadToEnd()
    } catch { $err = $_.ErrorDetails.Message }
    Write-Host "ERROR SCRUM-20 con parent: $err" -ForegroundColor Red
    Write-Host "=> SCRUM-20 debe moverse manualmente en Jira UI de SCRUM-30 a SCRUM-32" -ForegroundColor DarkYellow
}
