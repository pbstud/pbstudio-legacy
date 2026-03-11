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

Write-Host "Mejorando descripciones de subtareas..." -ForegroundColor Cyan

$subtasks = @(
    @{
        key = "SCRUM-85"
        desc = "Disenar y crear componente backend para UI grid editable. Incluir: formulario/wizard para crear/editar clase con selector de capacidad (rango 1-50), grid visual que se renderiza segun filas/columnas calculadas. Cada celda representa un numero de asiento (placeNumber). Implementar logica de toggle por celda para marcar como disponible/no disponible. Acciones rapidas: boton para llenar todas (disponibles), limpiar todas (bloqueadas), restaurar default segun capacidad. Persistir en Session entity."
    },
    @{
        key = "SCRUM-86"
        desc = "Conectar componente backend con tabla Session. Persistir disabled_places usando campo placesNotAvailable existente (SIMPLE_ARRAY en Doctrine). Al guardar: validar que rows*cols >= capacity, que disabled_places contiene numeros entre 1 y capacity, que no se guarde capacity<=0. Crear migracion si se requiere agregar columnas de configuracion de grid (rows, cols, mode). Testear que cambios en configuracion se persisten correctamente."
    },
    @{
        key = "SCRUM-87"
        desc = "Crear y documentar contratos JSON para admin (config payload: capacity, grid {rows, cols}, disabled_places, mode) y para frontend render (respuesta: session_id, mode, rows, cols, capacity, disabled_places, occupied_places, my_places). Crear endpoints POST para guardar configuracion y GET para recuperar estado. Implementar validaciones en controller/service: rechazar rows<=0, cols<=0, disabled_places fuera de rango, capacity mismatch. Retornar errores descriptivos con codigos HTTP apropiados (400 para validacion, 409 para conflicto)."
    },
    @{
        key = "SCRUM-88"
        desc = "Implementar componente frontend para renderizar grid de asientos. Aplicar formula deterministica: placeNumber = (row * cols) + col + 1. Para cada celda, renderizar boton/div con clases CSS segun estado. Grid debe ser responsive segun dimensiones guardadas. Cargar configuracion desde endpoint GET durante inicializacion de reservacion. Mantener compatibilidad con flujo actual de seleccion de placeNumber. Asegurar que UI muestra grid balanceado (5 cols default para capacidades 20, 3 cols para menores, etc.)."
    },
    @{
        key = "SCRUM-89"
        desc = "Implementar estados visuales para cada asiento: DISPONIBLE (fondo verde, cursor pointer, clickable), BLOQUEADO (fondo gris, cursor not-allowed, disabled), OCUPADO (fondo rojo, cursor not-allowed, tooltip usuario actual), SELECCIONADO (fondo azul, borde bold), MI_ASIENTO (fondo dorado, badge your seat). Frontend debe requerir endpoint para conocer occupied_places (desde reservaciones actuales de la session) y my_places (si usuario es empleado o tiene reserva previa). Implementar tooltips/hovers informativos. CSS debe ser accesible (AA contrast minimo)."
    },
    @{
        key = "SCRUM-90"
        desc = "Validar: no guardar capacity<=0, no permitir rows o cols <=0. En backend: disabled_places debe estar en rango 1 a capacity. No permitir reservar asiento en disabled_places (agregar check en ReservationService). Testear mapeo: fila 0 col 0 = lugar 1, fila 0 col 4 (grid 5 cols) = lugar 5, fila 1 col 0 = lugar 6. Validar que rows*cols >= capacity. Mantener reglas existentes: no doble asiento por usuario/session, validar disponibilidad antes de confirmar. Integrar con TransactionService para coherencia de datos."
    },
    @{
        key = "SCRUM-91"
        desc = "Documentar plan de pruebas manuales con 4 casos de prueba basicos: (1) Crear clase capacidad 20, bloquear celdas (3,7,8), guardar, verificar persistencia en base de datos. (2) Abrir reservacion, verificar que 5 lugares no son seleccionables, otros s. (3) Seleccionar lugar disponible, completar reservacion, validar que placeNumber se guardo correctamente. (4) Editar clase y cambiar bloqueos, abrir reservacion de otra clase, validar que cambios se reflejan. Documentar pasos en DOCUMENTACION/ para que QA pueda ejecutar sin codigo."
    },
    @{
        key = "SCRUM-92"
        desc = "Escribir tests unitarios/integracion en PHPUnit para 4 categorias: (T1) Mapping determinisico row/col <-> placeNumber con multiples grid sizes, (T2) Validacion de payloads: capacidad, grid dimensions, disabled_places ranges y consistencias, (T3) Rechazo de reservacion cuando placeNumber esta en disabled_places usando ReservationRepository mock, (T4) Compatibilidad con reglas concurrencia actual: doble asiento, cambios/cancelaciones reflejan correctamente en disponibilidad. Minimo 20 assertions. Coverage de servicios >= 80%."
    }
)

$updated = 0
$failed = 0

foreach ($sub in $subtasks) {
    $payload = @{
        fields = @{
            description = $sub.desc
        }
    } | ConvertTo-Json -Depth 5

    try {
        Invoke-RestMethod -Method Put -Uri "$baseUrl/rest/api/2/issue/$($sub.key)" -Headers $headers -Body $payload | Out-Null
        Write-Host "[OK] $($sub.key)" -ForegroundColor Green
        $updated++
    } catch {
        Write-Host "[ERROR] $($sub.key): $($_.Exception.Message)" -ForegroundColor Red
        $failed++
    }
}

Write-Host "`nResumen: $updated actualizadas, $failed errores" -ForegroundColor Yellow
