# FIX CRÍTICO: Exposición de phpinfo() en Endpoint de Backend

**Fecha de detección:** 3 de marzo de 2026  
**Severidad:** 🔴 **CRÍTICA**  
**Estado:** 🔎 En análisis para decisión (fix no aplicado aún)  
**Tipo:** Vulnerabilidad de Seguridad - Information Disclosure

---

## 📋 Descripción del Problema

Existe una ruta de prueba `/backend/test` en el dashboard del backend que ejecuta la función `phpinfo()` y termina con `exit()`, exponiendo información sensible del servidor PHP a cualquier usuario autenticado con acceso al backend.

### Ubicación del Código

**Archivo:** `src/Controller/Backend/DashboardController.php`  
**Líneas:** 50-92  
**Ruta:** `/backend/test`  
**Nombre de ruta:** `backend_dashboard_test`

```php
#[Route('/backend/test', name: 'backend_dashboard_test')]
public function backTest(Request $request, SessionRepository $sessionRepository, TimeToCancel $sessionTimeToCancel)
{
    $session = $sessionRepository->find($request->query->get('id'));
    if (!$session) {
        throw $this->createNotFoundException('Session not found');
    }

    $currentDate = new \DateTimeImmutable();
    var_dump('Current: ', $currentDate);

    $dateStartInterface = $session->getDateStart();
    if (!$dateStartInterface) {
        throw $this->createNotFoundException('Session dateStart is not set');
    }
    
    $timeStartInterface = $session->getTimeStart();
    if (!$timeStartInterface) {
        throw $this->createNotFoundException('Session timeStart is not set');
    }
    
    var_dump('Date start: ', $dateStartInterface);
    
    $dateStart = \DateTimeImmutable::createFromInterface($dateStartInterface);
    $dateStart = $dateStart->setTime(
        (int) $timeStartInterface->format('H'),
        (int) $timeStartInterface->format('i')
    );
    var_dump('Date start 2: ', $dateStart);

    $diffSeconds = $dateStart->getTimestamp() - $currentDate->getTimestamp();
    var_dump('Diff seconds: ', $diffSeconds);

    $timeToCancel = PackageSessionType::TYPE_INDIVIDUAL === $session->getType() ?
        $sessionTimeToCancel->getTimeToCancelIndividual() :
        $sessionTimeToCancel->getTimeToCancelGroup()
    ;

    var_dump('Time cancel: ', $timeToCancel);
    phpinfo(); // ⚠️ CRÍTICO: Exposición de información del servidor
    exit();
}
```

---

## 🚨 Riesgos de Seguridad

### Información Expuesta

La función `phpinfo()` revela información crítica del sistema:

1. **Versión de PHP** - Permite identificar vulnerabilidades conocidas
2. **Extensiones instaladas** - Superficie de ataque ampliada
3. **Rutas del servidor** - Estructura de directorios interna
4. **Variables de entorno** - Pueden contener credenciales o tokens
5. **Configuración de php.ini** - Límites, directivas de seguridad
6. **Módulos cargados** - Información sobre el stack tecnológico
7. **Variables $_SERVER** - Datos del servidor web y rutas

### Vectores de Ataque Habilitados

- **Reconnaissance:** Facilita el mapeo completo del entorno de producción
- **Exploit selection:** Permite elegir exploits específicos para la versión de PHP
- **Path traversal:** Las rutas expuestas facilitan ataques de directory traversal
- **Credential leakage:** Variables de entorno pueden contener API keys o passwords
- **Dependency analysis:** Conocer extensiones permite atacar vulnerabilidades de terceros

### Severidad CVSS 3.1

- **Base Score:** 7.5 (HIGH)
- **Vector String:** CVSS:3.1/AV:N/AC:L/PR:L/UI:N/S:U/C:H/I:N/A:N
- **Attack Vector:** Network (disponible vía HTTP)
- **Attack Complexity:** Low (solo requiere autenticación)
- **Privileges Required:** Low (cualquier usuario con acceso a backend)
- **User Interaction:** None
- **Confidentiality Impact:** HIGH

---

## 🔍 Análisis Técnico

### Evidencia Histórica (Git)

De acuerdo con el historial del repositorio en `src/Controller/Backend/DashboardController.php`:

- La ruta y función `backTest()` aparecen desde el commit inicial del archivo (`524a9671`).
- Posteriormente, en `9070d20f`, se hicieron ajustes de tipado y validaciones de `DateTimeInterface`, pero se mantuvo `phpinfo()` y `exit()`.
- No hay evidencia de que haya sido diseñada como endpoint de negocio; su patrón (`var_dump`, `phpinfo`, `exit`) es claramente de diagnóstico/manual debug.

**Conclusión histórica:** la función se creó para depurar cálculos de tiempo de cancelación y quedó persistida en código accesible vía HTTP.

### Propósito Original

El método `backTest()` fue creado como herramienta de debugging para probar el cálculo de tiempo de cancelación de sesiones. La lógica incluye:

1. Obtener una sesión por ID vía query string
2. Calcular diferencia entre fecha actual y fecha de inicio de sesión
3. Determinar tiempo de cancelación según tipo de sesión (individual/grupal)
4. Mostrar información de debugging con `var_dump()`
5. Ejecutar `phpinfo()` para ver configuración del entorno
6. Terminar ejecución con `exit()`

### ¿Para qué sirve realmente `backTest()`?

Aunque no es una funcionalidad de producto, técnicamente la función sirve para validar en vivo:

1. Si la sesión tiene `dateStart` y `timeStart` válidos.
2. Cuántos segundos faltan/sobraron respecto a la hora actual (`$diffSeconds`).
3. Qué umbral de cancelación aplica (`individual` vs `group`).

Es decir, fue un “inspector temporal” para troubleshooting de reglas de cancelación; no un endpoint para usuarios ni staff operativo.

### Limitaciones Funcionales de `backTest()`

- No persiste resultados ni genera evidencia auditable.
- No retorna JSON/HTML formal: corta la ejecución con `exit()`.
- No ofrece controles de autorización fina.
- No aporta valor operativo continuo; solo valor puntual de debugging.

### Contexto de Uso

- **Entorno:** Aparentemente desarrollo/staging
- **Acceso:** Disponible en producción para usuarios autenticados del backend
- **Protección actual:** Solo requiere autenticación de Symfony (cualquier role de backend)
- **Logging:** No hay registro de accesos a este endpoint
- **Monitoreo:** No hay alertas configuradas para esta ruta

### Problema de Diseño

1. **Código de debugging en producción:** El método nunca debió desplegarse
2. **Falta de feature flags:** No hay condicional `if (APP_ENV === 'dev')`
3. **Sin restricción de roles:** Cualquier usuario del backend puede acceder
4. **Salida directa:** `exit()` bypass del profiler y logging de Symfony

### Riesgo Real en el Negocio (Traducción no técnica)

- Un usuario interno con acceso de backend puede obtener un “mapa técnico” del servidor.
- Ese mapa acelera ataques posteriores (selección de exploit, rutas sensibles, configuración interna).
- Si hay credenciales en variables de entorno, podrían filtrarse indirectamente.
- El incidente es de **confidencialidad** y puede elevar riesgo regulatorio/compliance.

### Qué NO hace esta vulnerabilidad

Para tomar decisión con claridad, también es importante lo que **no** implica por sí sola:

- No modifica datos directamente.
- No borra registros.
- No escala privilegios automáticamente.
- No ejecuta código remoto por sí misma (pero facilita preparar ataques).

---

## ✅ Solución Propuesta

### Opción 1: Eliminación Completa (RECOMENDADA)

**Acción:** Eliminar completamente el método `backTest()` y su ruta.

**Justificación:**
- El método es de debugging, no tiene función de negocio
- El cálculo de tiempo de cancelación puede probarse con tests unitarios
- No hay dependencias en el código de producción
- Reduce superficie de ataque

**Implementación:**
```php
// Eliminar líneas 50-92 de DashboardController.php
// No requiere cambios adicionales en routing (usa atributos PHP)
```

### Opción 2: Restricción Estricta a Entorno Dev (ALTERNATIVA)

**Acción:** Mantener el método pero solo disponible en entorno de desarrollo.

**Implementación:**
```php
#[Route('/backend/test', name: 'backend_dashboard_test')]
public function backTest(Request $request, SessionRepository $sessionRepository, TimeToCancel $sessionTimeToCancel)
{
    // Solo disponible en desarrollo
    if ('dev' !== $this->getParameter('kernel.environment')) {
        throw $this->createAccessDeniedException('This route is only available in development environment');
    }
    
    // Resto del código existente...
}
```

**Desventajas:**
- Mantiene código legacy innecesario
- Requiere mantenimiento continuo
- Aún expone información en entornos dev compartidos

### Opción 3: Conversión a Herramienta de Diagnóstico Segura

**Acción:** Transformar en comando de consola con salida controlada.

**Implementación:**
```php
// src/Command/DiagnosticSessionTimingCommand.php
#[AsCommand(name: 'app:diagnostic:session-timing')]
class DiagnosticSessionTimingCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Lógica de cálculo sin phpinfo()
        // Solo en CLI, no expuesto vía HTTP
    }
}
```

### Opción 4: Hardening mínimo temporal (solo contención)

**Acción:** Mantener endpoint por horas/días con controles temporales mientras se prepara eliminación.

**Controles temporales sugeridos:**
- Restringir por `APP_ENV=dev`.
- Restringir por IP allowlist interna.
- Exigir rol administrativo de máximo nivel.
- Eliminar `phpinfo()` inmediatamente (aunque quede la ruta temporal).

**Cuándo usarla:** solo si existe dependencia operativa inmediata no documentada.

**Riesgo:** sigue siendo deuda técnica y puede reabrirse exposición por error de configuración.

---

## 🧭 Matriz de Decisión (Ejecutiva)

| Opción | Tiempo implementación | Riesgo residual | Esfuerzo mantenimiento | Valor técnico | Recomendación |
|---|---:|---:|---:|---:|---|
| 1) Eliminar ruta | Bajo | Muy bajo | Muy bajo | Alto (limpia deuda) | ✅ **Sí** |
| 2) Solo dev | Bajo | Medio | Medio | Medio | ⚠️ Solo transición |
| 3) Migrar a comando CLI | Medio | Bajo | Bajo | Alto | ✅ Complementaria |
| 4) Hardening temporal | Muy bajo | Medio/Alto | Alto | Bajo | ❌ Solo emergencia |

### Recomendación Estratégica

- **Decisión recomendada:** Opción 1 ahora + Opción 3 después (si el diagnóstico sigue siendo útil).
- **Razonamiento:** elimina superficie de ataque de inmediato sin impacto funcional, y conserva capacidad de diagnóstico en canal seguro (CLI) cuando sea necesario.

---

## 💼 Impacto Operativo y de Compliance

### Operación

- No hay interrupción de ventas/reservas por retirar la ruta.
- No afecta panel de usuario, checkout ni flujos de staff.
- Cambios son acotados a un controlador backend.

### Seguridad/Compliance

- Reduce exposición de datos de configuración sensible.
- Mejora postura frente a auditorías internas y externas.
- Alinea con principio de mínimo privilegio y “no debug en producción”.

### Reputación

- Cerrar rápidamente evita que el hallazgo escale a incidente mayor.
- Mantenerlo activo incrementa riesgo de hallazgo repetido en auditoría.

---

## 🧪 Evidencia y Validaciones para Decidir con Confianza

Antes de aprobar el fix final, puedes exigir estas comprobaciones objetivas:

1. `GET /backend/test?id=...` devuelve 404/403 en staging y producción.
2. Búsqueda global sin resultados de `phpinfo(` en `src/` y `public/`.
3. Búsqueda global sin endpoints de debug con `var_dump(` + `exit()`.
4. Confirmación de que no existe navegación UI hacia `backend_dashboard_test`.
5. Revisión de logs de acceso históricos para medir exposición previa.

---

## 🧱 Causa Raíz (Root Cause)

1. Se incorporó utilidad de debug dentro de un controlador HTTP.
2. No hubo guardas de entorno (`dev` only) en el momento de creación.
3. No existía control preventivo automático (lint/hook) para bloquear `phpinfo()`.
4. La ruta quedó en código principal sin retiro posterior.

### Controles Preventivos Recomendados

- Regla de análisis estático: bloquear `phpinfo`, `var_dump`, `dd`, `dump` en controladores.
- Checklist de PR con ítem explícito “no debug artifacts en rutas públicas”.
- Política de “debug solo por comando CLI o feature flag efímero”.
- Revisión trimestral de rutas “test/debug/health internas”.

---

## 🎯 Plan de Acción

### Fase 1: Mitigación Inmediata (URGENTE)

1. [ ] Crear rama `fix/critico-exposicion-phpinfo`
2. [ ] Eliminar método `backTest()` completo (líneas 50-92)
3. [ ] Commit: "fix(security): remove phpinfo exposure in backend test route"
4. [ ] Push y crear Pull Request
5. [ ] **Deploy a producción INMEDIATO** (no esperar sprint)

### Fase 2: Verificación

1. [ ] Probar que `/backend/test` retorna 404
2. [ ] Revisar logs de producción para accesos recientes a esta ruta
3. [ ] Auditar si hay otros endpoints con `phpinfo()` o `var_dump()`
4. [ ] Verificar que no existan archivos `test.php` o `info.php` en public/

### Fase 3: Prevención

1. ⏳ Agregar regla a PHPStan: prohibir `phpinfo()` en código
2. ⏳ Crear pre-commit hook que detecte `phpinfo()`, `var_dump()`, `dd()`, `dump()`
3. ⏳ Documentar en guías de desarrollo: "No usar funciones de debugging en controladores"
4. ⏳ Implementar code review checklist que incluya verificación de debugging code

---

## 📊 Impacto de la Solución

### Positivo

- ✅ **Seguridad:** Elimina vector de ataque de information disclosure
- ✅ **Compliance:** Alinea con estándares OWASP (A01:2021 - Broken Access Control)
- ✅ **Performance:** Remueve código innecesario (-43 líneas)
- ✅ **Mantenimiento:** Reduce deuda técnica

### Sin Impacto Negativo

- ✅ **Funcionalidad:** No afecta features de negocio (era solo debugging)
- ✅ **Testing:** No hay tests que dependan de este endpoint
- ✅ **Usuarios:** No hay flujos de usuario que usen esta ruta
- ✅ **Integraciones:** No hay llamadas externas a este endpoint

### Riesgo de Regresión

**Nivel:** NULO

- No hay código que consuma esta ruta
- No hay templates que linken a `backend_dashboard_test`
- No hay JavaScript que llame a `/backend/test`
- No hay documentación que mencione este endpoint

### Coste estimado

- Implementación técnica: 15-30 minutos.
- Verificación funcional + seguridad: 30-60 minutos.
- Total estimado hasta deploy seguro: 1-2 horas.

### Costo de NO actuar

- Mantener endpoint expuesto incrementa probabilidad de hallazgo crítico recurrente.
- Aumenta superficie de ataque para amenazas internas/credenciales comprometidas.
- Potencial costo de incidente > costo de remediación inmediata.

---

## ❓ Preguntas Clave para Aprobar la Decisión

1. ¿Existe alguna dependencia real del equipo hacia `/backend/test` hoy?
2. Si existe, ¿puede migrarse a comando CLI esta semana?
3. ¿Se requiere ventana formal de cambio o puede salir por hotfix?
4. ¿Qué periodo de logs vamos a auditar (7/30/90 días)?
5. ¿Quién aprueba el cierre de riesgo: Tech Lead o Seguridad?

Si la respuesta a (1) es "no", la eliminación inmediata es la decisión con mejor relación riesgo/beneficio.

---

## 🔗 Referencias

- **OWASP Top 10 2021:** A01:2021 - Broken Access Control
- **CWE-200:** Exposure of Sensitive Information to an Unauthorized Actor
- **PHP Security:** Best practices - Never use phpinfo() in production
- **Symfony Security:** Environment-based feature toggling

---

## 📝 Checklist de Implementación

- [ ] Crear rama desde main: `fix/critico-exposicion-phpinfo`
- [ ] Eliminar método `backTest()` (líneas 50-92) de DashboardController.php
- [ ] Ejecutar PHPStan: `vendor/bin/phpstan analyse`
- [ ] Verificar que no hay referencias a `backend_dashboard_test`
- [ ] Commit con mensaje descriptivo
- [ ] Push a remote
- [ ] Verificar en staging que `/backend/test` retorna 404
- [ ] Merge a main (fast-forward si es posible)
- [ ] Deploy a producción
- [ ] Auditar logs para detectar accesos previos
- [ ] Actualizar `progreso.md` con estado RESUELTO
- [ ] Documentar en changelog de seguridad

---

**Próximo paso:** Ejecutar fix siguiendo el plan de acción fase 1.
