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

Write-Host "Mejorando descripcion de SCRUM-84..." -ForegroundColor Cyan

$desc = @"
TITULO: Issue numero 55 - Mapa de Asientos en Modo Ajedrez Editable (MVP Opcion B)

OBJETIVO PRINCIPAL:
Implementar una interfaz intuitiva de configuracion visual de disponibilidad de asientos que permita a administradores bloquear/desbloquear lugares al crear o editar una clase, manteniendo compatibilidad total con el modelo actual de reservacion por placeNumber.

ALCANCE MVP (OPCION B - Grid Editable):
- Backend admin UI: Componente para crear/editar clase con grid editable por celdas
- Frontend user UI: Renderizado de mapa de asientos con 4 estados visuales
- Persistencia: Almacenamiento en campo placesNotAvailable existente de Session
- Validaciones: Capacidad, rangos de lugar, reglas de concurrencia operativas
- Sin ruptura de compatibilidad: placeNumber mantiene identidad canonica

DETALLES TECNICOS:

1. Modelo de Datos:
   - Mantener Reservation.placeNumber (SMALLINT) como ID canonico de asiento
   - Usar Session.placesNotAvailable (SIMPLE_ARRAY) para bloqueados/no disponibles
   - Agregar campos de grid config si necesario: grid_rows, grid_cols, grid_mode

2. Formula Deterministica:
   - Mapeo bidireccional entre coordenadas grid (row, col) y placeNumber
   - placeNumber = (row * cols) + col + 1
   - row = floor((placeNumber - 1) / cols)
   - col = (placeNumber - 1) % cols
   - Testear con multiples grid sizes (4x5, 5x4, 3x7, etc.)

3. Persistencia:
   - Grid editable persiste disabled_places en JSON payload: {"capacity": 20, "grid": {"rows": 4, "cols": 5}, "disabled_places": [3, 7, 8], "mode": "chessboard_v1"}
   - Validar en backend: rows*cols >= capacity, disabled_places en rango [1..capacity]
   - Actualizar Session entity durante persistencia

4. Frontend Render:
   - Respuesta GET para reservacion: {"session_id": 123, "mode": "chessboard_v1", "rows": 4, "cols": 5, "capacity": 20, "disabled_places": [3,7,8], "occupied_places": [2,5], "my_places": [9]}
   - Estados visuales: DISPONIBLE (verde), BLOQUEADO (gris), OCUPADO (rojo), SELECCIONADO (azul), MI_ASIENTO (dorado)
   - Solo clic en disponibles; tooltip informativos en hover
   - Responsive grid segun dimensiones guardadas

VALIDACIONES CLAVE:
- No guardar capacity <= 0
- No permitir grid con rows <= 0 o cols <= 0
- disabled_places debe estar en rango 1..capacity
- No reservar en placesNotAvailable sin validacion previa
- Mantener reglas existentes: no doble asiento/session, cambios y cancelaciones reflejan correctamente

PLAN DE PRUEBAS:
Manual: 4 casos (crear/bloquear, verificar frontend, reservar, editar y validar)
Automatizadas: 4 categorias (mapeo row/col, validacion payloads, rechazo reserva bloqueada, compatibilidad concurrencia)

FUTURA EVOLUCION (OPCION A - Phase 3):
Editable total con drag & drop avanzado, multiples layouts por salon, versionado de layout.

DOCUMENTACION TECNICA:
Referencia: DOCUMENTACION/FIXES_PENDIENTES/ISSUE_55_MAPA_ASIENTOS_MODO_AJEDREZ.md

ESTIMACION: 3-5 horas (MVP Phase 1)

METRICAS DE EXITO:
1. Admin puede configurar disponibilidad de lugares visualmente sin escribir SQL
2. Configuracion persiste en base de datos y se refleja en reservacion
3. No hay ruptura de flujo actual de reservacion o cambios de asiento
4. Tests pasan: mapeo, validaciones, rechazo de bloqueados, compatibilidad concurrencia
5. 0 errores JavaScript en consola frontend; accesibilidad WCAG AA
"@

$payload = @{
    fields = @{
        description = $desc
    }
} | ConvertTo-Json -Depth 5

try {
    Invoke-RestMethod -Method Put -Uri "$baseUrl/rest/api/2/issue/SCRUM-84" -Headers $headers -Body $payload | Out-Null
    Write-Host "Exito: SCRUM-84 actualizada" -ForegroundColor Green
    Write-Host "URL: $baseUrl/browse/SCRUM-84" -ForegroundColor Yellow
    
    @{
        key = "SCRUM-84"
        updated = $true
        timestamp = (Get-Date -Format 'yyyy-MM-dd HH:mm:ss')
    } | ConvertTo-Json | Out-File -FilePath "$PSScriptRoot\SCRUM84_Updated.json" -Encoding UTF8
    
    Write-Host "Resultado guardado en SCRUM84_Updated.json" -ForegroundColor Green
}
catch {
    Write-Host "Error: $($_.Exception.Message)" -ForegroundColor Red
}
