$baseUrl = "https://devpbstudio.atlassian.net"
$email = "desarrollo.pbstudio@outlook.com"
$token = "ATATT3xFfGF0ioDRQQNAvB8qyE90pYybvPNixtl-X9rc0UK5NzrUcFy3888_IDKr1ZuGdZzaOm5GE3TkVtAEC5DcfEZeY1U-BlsTjLxD5R7czbkA5aCtPhV8wZhciDTzPbybnFHYuF-0etAFPFQ2OW9_D9sp6RSSDvnrDuhFMHMxlKi_uFXnHdo=0600D49C"
$auth = [Convert]::ToBase64String([Text.Encoding]::ASCII.GetBytes("${email}:${token}"))
$headers = @{
    Authorization = "Basic $auth"
    "Content-Type" = "application/json"
}

$stories = @(
    @{s="Analisis y Diagnostico de Performance";d="Identificar cuellos de botella en modulo caja/pagos. INCLUYE: Profiling de rutas criticas, EXPLAIN en queries lentas, medicion de metricas baseline. CRITERIOS: Reporte de queries lentas, metricas documentadas, lista priorizada."},
    @{s="Optimizacion de Indices en Base de Datos";d="Implementar indices apropiados en BD para reducir tiempos. INCLUYE: Indices en transaction (user_id, status, createdAt), indices en reservation (session_id+status, user_id+status), optimizar indices existentes. CRITERIOS: Indices creados, EXPLAIN muestra uso, mejora >60%."},
    @{s="Refactorizacion de Queries con N+1";d="Eliminar queries N+1 en listados. INCLUYE: Refactorizar TransactionRepository con eager loading, refactorizar ReservationRepository, optimizar queries DQL complejas. CRITERIOS: Max 5 queries por pagina, eager loading implementado, tests confirman reduccion."},
    @{s="Implementacion de Cache en Consultas Frecuentes";d="Cachear resultados de consultas frecuentes. INCLUYE: Configurar Symfony Cache, cachear estadisticas dashboard (5min), cachear configuracion. CRITERIOS: Cache configurado, invalidacion automatica funciona."},
    @{s="Optimizacion de Paginacion y Carga";d="Paginacion eficiente en listados grandes. INCLUYE: KnpPaginator, optimizar conteo total, lazy loading en tablas HTML. CRITERIOS: Max 50 resultados por pagina, carga inicial <1s."},
    @{s="Testing y Validacion de Performance";d="Tests automatizados de performance. INCLUYE: Tests de performance, benchmark antes/despues, tests con datos reales (62k transacciones). CRITERIOS: Tests automatizados, benchmarks documentados, CI/CD valida tiempos."},
    @{s="Monitoreo y Metricas en Produccion";d="Monitoreo de performance en tiempo real. INCLUYE: Logging de performance, dashboard de metricas, alertas de degradacion. CRITERIOS: Dashboard activo, alertas para slow queries, logs estructurados."},
    @{s="Documentacion y Knowledge Transfer";d="Documentacion completa de optimizaciones. INCLUYE: Documento tecnico de cambios, guia mejores practicas, actualizar README. CRITERIOS: Doc de optimizaciones, guia de practicas, checklist de performance."}
)

$results = @()
$contador = 1

foreach($st in $stories){
    $body = @{
        fields = @{
            project = @{ key = "SCRUM" }
            summary = $st.s
            description = $st.d
            issuetype = @{ name = "Story" }
            priority = @{ name = "High" }
            labels = @("performance", "caja-pagos")
        }
    } | ConvertTo-Json -Depth 10
    
    try {
        $r = Invoke-RestMethod -Method Post -Uri "$baseUrl/rest/api/2/issue" -Headers $headers -Body $body
        $results += "[$contador/8] OK: $($r.key) - $($st.s)"
    } catch {
        $results += "[$contador/8] ERROR: $($_.Exception.Message)"
    }
    
    $contador++
    Start-Sleep -Milliseconds 800
}

$results | Out-File -FilePath "stories_created.txt"
"COMPLETADO" | Out-File -FilePath "stories_created.txt" -Append
