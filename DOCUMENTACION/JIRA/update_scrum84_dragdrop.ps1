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

Write-Host "Actualizando SCRUM-84 con Drag & Drop..." -ForegroundColor Cyan

$desc = @"
TITULO: Issue numero 55 - Mapa de Asientos en Modo Ajedrez Editable con Drag & Drop (MVP Opcion B)

OBJETIVO PRINCIPAL:
Implementar interfaz intuitiva donde admin ARRASTRA Y SUELTA asientos numerados en un tablero de ajedrez para configurar su disponibilidad. Mantener compatibilidad total con modelo actual de reservacion por placeNumber.

CARACTERISTICA PRINCIPAL - DRAG & DROP:
- Admin ve lista de asientos (1, 2, 3, ..., N) como objetos numerados draggables
- Admin arrastra cada asiento a una celda del grid tipo tablero de ajedrez
- Al soltar, sistema calcula la posicion (row, col) y mapea a placeNumber
- Asientos NO colocados en grid quedan como NO DISPONIBLES
- Interfaz visual e intuitiva, sin necesidad de escribir numeros o clickear celdas

ALCANCE MVP (OPCION B - Grid Editable con Drag & Drop):
- Backend admin UI: Grid visual + lista asientos draggables + drag & drop handler
- Frontend user UI: Renderizado de grid con asientos en posiciones configuradas + 4 estados
- Persistencia: Mapeo seat_positions en JSON + derivacion a placesNotAvailable
- Validaciones: Capacidad, grid dimensions, drop collisions, rango de asientos
- Sin ruptura: placeNumber mantiene identidad canonica

DETALLES TECNICOS:

1. Modelo de Datos:
   - Reservation.placeNumber (SMALLINT): Identidad canonica del asiento
   - Session.placesNotAvailable: Asientos no colocados en grid
   - NUEVO: Session.seat_positions JSON: {1: {row:0, col:0}, 2: {row:0, col:1}, ...}

2. Formula Deterministica:
   - placeNumber = (row * cols) + col + 1
   - Mapeo bidireccional para validar drop positions
   - Testear con multiples grid sizes (4x5, 5x4, 3x7, etc.)

3. Drag & Drop:
   - Admin arrastra asiento numero N a celda (row, col)
   - Validar drop dentro de grid y sin colisiones
   - Registrar posicion en seat_positions
   - Asiento desaparece de lista "sin colocar"
   - Acciones: auto-fill, limpiar, restaurar default

4. Persistencia:
   - Payload config: {capacity, grid_config: {rows, cols, mode}, seat_positions: {...}}
   - Calcular places_not_available = asientos 1..N no en seat_positions
   - Mantener compatibilidad con ReservationService existente

5. Frontend Render:
   - GET respuesta: {grid, seat_positions, seat_status: {1: available, 2: occupied, ...}}
   - Estados: DISPONIBLE (verde), OCUPADO (rojo), SELECCIONADO (azul), MI_ASIENTO (dorado)
   - Click en asiento disponible lo selecciona para reservacion
   - Mostrar numero visible dentro del icono de asiento

VALIDACIONES CLAVE:
- Capacidad > 0
- Grid dimensions validas (rows*cols >= capacity)
- Drop dentro de rango [1..capacity]
- No permitir 2 asientos en misma celda
- Rechazar reservacion en places_not_available (ReservationService)
- Mantener reglas concurrencia: no doble asiento/session

PLAN DE PRUEBAS:
Manual: 5 casos (crear, drag asientos, guardar, editar, verificar en reservacion)
Automatizadas: (mapeo row/col, drag validacion, persistencia, compatibilidad, formulario)

METRICAS EXITO:
1. Admin configura sin escribir SQL/codigo, solo drag & drop
2. Interfaz visual intuitiva: asientos numerados como objetos
3. Persistencia correcta en BD
4. No ruptura flujos actuales (reservacion, cambios, cancelaciones)
5. Tests pasan (mapeo, drag, persistencia, compatibilidad)
6. 0 errores JavaScript; accesibilidad WCAG AA; grid responsive

FUTURO (OPCION A - Phase 3):
Canvas libremente editable sin restriccion de grid, con versionado de layouts.

DOCUMENTACION TECNICA:
DOCUMENTACION/FIXES_PENDIENTES/ISSUE_55_MAPA_ASIENTOS_MODO_AJEDREZ.md

ESTIMACION: 3-5 horas (MVP Phase 1 con Drag & Drop)
"@

$payload = @{
    fields = @{
        description = $desc
    }
} | ConvertTo-Json -Depth 5

try {
    Invoke-RestMethod -Method Put -Uri "$baseUrl/rest/api/2/issue/SCRUM-84" -Headers $headers -Body $payload | Out-Null
    Write-Host "Exito: SCRUM-84 actualizada con Drag & Drop" -ForegroundColor Green
    Write-Host "URL: $baseUrl/browse/SCRUM-84" -ForegroundColor Yellow
    
    @{
        key = "SCRUM-84"
        updated = $true
        timestamp = (Get-Date -Format 'yyyy-MM-dd HH:mm:ss')
        feature = "drag_and_drop"
    } | ConvertTo-Json | Out-File -FilePath "$PSScriptRoot\SCRUM84_DragDrop_Updated.json" -Encoding UTF8
    
    Write-Host "Resultado guardado en SCRUM84_DragDrop_Updated.json" -ForegroundColor Green
}
catch {
    Write-Host "Error: $($_.Exception.Message)" -ForegroundColor Red
}
