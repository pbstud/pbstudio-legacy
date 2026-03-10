param(
    [Parameter(Mandatory = $true)]
    [string]$Token,
    [string]$Email = "desarrollo.pbstudio@outlook.com"
)

$base64 = [Convert]::ToBase64String([Text.Encoding]::ASCII.GetBytes("${Email}:${Token}"))
$headers = @{
    Authorization = "Basic $base64"
    "Content-Type" = "application/json"
    Accept = "application/json"
}

$description = @"
PASOS:
1. Entrar al modulo de Planeamiento Masivo y ejecutar el flujo completo con un dia base real.
2. Registrar inputs exactos (fecha base, fechas destino, sucursal, tipo de sesion) y timestamp.
3. Capturar mensaje de error en UI y revisar Network/response del request fallido.
4. Revisar logs de aplicacion y stack trace para identificar la excepcion raiz.
5. Documentar hipotesis inicial y componentes involucrados (controller, servicio, entidad, template).

RESULTADO ESPERADO: Documento ERROR_REPRO_SCRUM20.md con pasos reproducibles, evidencia y causa probable.
CRITERIOS DE ACEPTACION: El error queda reproducido de forma consistente y con trazabilidad tecnica suficiente para iniciar fix.
"@

$body = @{
    fields = @{
        project   = @{ key = "SCRUM" }
        parent    = @{ key = "SCRUM-20" }
        summary   = "20.1 Reproducir error de planeamiento masivo y capturar traza tecnica"
        issuetype = @{ name = "Subtask" }
        priority  = @{ name = "High" }
        assignee  = @{ id = "712020:8ce5acff-0a9c-4af8-8407-b835535cadef" }
        description = $description
    }
} | ConvertTo-Json -Depth 10

$response = Invoke-RestMethod -Uri "https://devpbstudio.atlassian.net/rest/api/2/issue" -Method Post -Headers $headers -Body $body
Write-Host "CREATED:$($response.key) ID:$($response.id)"
