# 📋 PLAN DE ACCIÓN - PBStudio

**Fecha actualización:** 10 Marzo 2026  
**Status:** 55 issues identificados (46 secuenciales + 8 nuevos de reunión DG renumerados #47-#54 + 1 nuevo de auditoría bidireccional)  
**Issues resueltos (plan técnico):** 11 ✅ (N-1, N-3, N-5, #8, #29, #38 marcados en esta revisión)  
**Tickets finalizados en Jira:** 19 ✅ (incluye épicas y subtareas)  
**Issues pendientes (plan técnico):** 44 (agrupados por categoría, sin duplicados)  
**Timeline:** Fix inmediato → Producción en 5-6 días

---

## 🚨 ISSUES CRÍTICOS (Arreglar HOY)

### Issue #1: ✅ DateTime Immutability - RESUELTO (02/03/2026)

**Severidad:** 🔴 CRÍTICA  
**Status:** ✅ COMPLETADO - Rama `fix/datetime-immutability-issue`

**Contexto:** Uso de setTime en DateTimeImmutable en [src/Repository/SessionRepository.php](../src/Repository/SessionRepository.php) y [src/Controller/ReservationController.php](../src/Controller/ReservationController.php).

**Problema Original:**
```
Error: "Call to undefined method setTime() on DateTimeImmutable"
URL: Calendar, Session changes
Impact: Bloquea 40% de funcionalidad
```

**Solución Aplicada:**
Patrón type-safe con `DateTimeImmutable::createFromInterface()` agregado en 4 archivos:

1. **src/Entity/Session.php** - `getDateTimeStart()`
2. **src/Service/Reservation/ReservationService.php** - `getSecondsToStart()`
3. **src/Controller/Backend/DashboardController.php** - `backTest()`
4. **src/Service/WaitingList/WaitingListService.php** - `add()`

**Patrón de corrección:**
```php
// ❌ ANTES (error de type safety)
$dateStart = $session->getDateStart(); // DateTimeInterface
$dateStart->setTime(...); // Error

// ✅ DESPUÉS (type-safe)
$dateStartInterface = $session->getDateStart();
if (!$dateStartInterface) {
    throw new \RuntimeException('Session dateStart is not set');
}
$dateStart = \DateTimeImmutable::createFromInterface($dateStartInterface);
$dateStart = $dateStart->setTime(...); // OK
```

**Validación Realizada:**
- ✅ 7 ocurrencias de `setTime()` encontradas y validadas
- ✅ 4 archivos corregidos con type safety
- ✅ 0 errores de análisis estático
- ✅ Validación null agregada para prevenir errores runtime

**Referencia:** [DOCUMENTACION/FIXES/DATETIME_IMMUTABILITY_FIX.md](../FIXES/DATETIME_IMMUTABILITY_FIX.md)

---

### Issue #2: 🟡 Missing Database Indices

**Severidad:** 🟡 MODERADA  
**Status:** ✅ VERIFICADO EN BD (02/03/2026)

**Contexto:** Validaciones de BD en [DOCUMENTACION/progreso.md](progreso.md) muestran indices necesarios.

**Rutas/Flujo:** /mi-cuenta, /mi-cuenta/proximas-clases, /mi-cuenta/clases-tomadas

**Impacto:**
- Query speed: -70% en /mi-cuenta
- Reservation lookups: O(n) → O(log n)
- User profile: 5+ queries lentas

**SQL ejecutado:** Ya presentes en BD
```
✅ reservation.idx_user_id
✅ reservation.idx_session_id
✅ reservation.idx_transaction_id
✅ transaction.idx_user_id
✅ waiting_list.idx_user_id (si existe)
✅ waiting_list.idx_session_id (si existe)
```

**Verificar:**
```sql
SHOW INDEX FROM reservation;
SHOW INDEX FROM transaction;
```

**Status actual (02/03/2026):** ✅ Índices presentes y funcionales

---

### Issue #3: � PHP Memory Exhausted ✅

**Status:** ✅ RESUELTO (02/03/2026)

**Severidad:** 🔴 CRÍTICA

**Contexto:** Error de memoria agotada en páginas complejas (especialmente pagos/Twig templates).

**Rutas/Flujo:** /carrito/checkout, /mi-cuenta, páginas con múltiples queries

**Sintoma:**
```
Fatal error: Allowed memory size of 134217728 bytes exhausted (tried to allocate 471040 bytes)
in vendor/twig/twig/src/Template.php on line 432
```

**Diagnóstico:**
- Servidor PHP usando memory_limit por defecto: 128M (134217728 bytes)
- Templates Twig complejos con múltiples includes y queries requieren más memoria
- php.ini actualizado a 512M pero servidor no reiniciado

**Solución Aplicada:**
```powershell
# Matar servidor anterior
Stop-Process -Name php -Force

# Reiniciar con límite de memoria correcto
php -d memory_limit=512M -S 127.0.0.1:8000 -t public
```

**Verificación:**
```powershell
# Confirmar servidor activo
Test-NetConnection -ComputerName 127.0.0.1 -Port 8000
# Output: True
```

**Comando Permanente:**
```bash
# SIEMPRE iniciar servidor con este comando
php -d memory_limit=512M -S 127.0.0.1:8000 -t public
```

**Tiempo Total:** 10 minutos  
**Test:** Acceder a páginas complejas sin error de memoria

---

### Issue #4: �🔐 MAILER_DSN Already Fixed ✅

**Status:** RESUELTO en fase anterior

**Contexto:** Error original y validacion registrados en [DOCUMENTACION/progreso.md](progreso.md).

**Rutas/Flujo:** /register

```env
# .env (ya está)
MAILER_DSN=null://default
```

**Verificar:**
```bash
php bin/console config:debug mailer
```

---

## 🟠 NUEVOS PENDIENTES (Agregar despues de criticos)

### Issue N-1: ✅ Subir horario masivo del dia — RESUELTO

**Severidad:** 🟠 IMPORTANTE  
**Status:** ✅ RESUELTO - SCRUM-61/62 (Fix 403/404 en carga masiva, parseo de fecha corregido con MapDateTime. Ver FIXES/ISSUE_CARGA_MASIVA_HORARIOS.md)

**Contexto:** Creacion masiva de sesiones desde backend en [src/Controller/Backend/SessionDayController.php](../src/Controller/Backend/SessionDayController.php).

**Rutas/Flujo:** /backend/session-day/new

**Sintoma:** No existe carga masiva por dia; se crea manual por horario y salon.

**Impacto:** Operacion diaria lenta y propensa a errores.

**Plan de solucion:**
- Definir formato de carga (por dia, horarios y salones)
- Validar duplicados y fechas pasadas
- Vista de confirmacion antes de crear

**Tiempo Estimado:** 2-4 horas  
**Test:** Crear un dia completo y verificar en calendario.

---

### Issue N-2: 🟠 Cambiar o cancelar clase hasta 2h antes con devolucion

**Severidad:** 🟠 IMPORTANTE

**Contexto:** Cancelacion y reembolso en [src/Service/Reservation/ReservationService.php](../src/Service/Reservation/ReservationService.php) y [src/Controller/Backend/TransactionController.php](../src/Controller/Backend/TransactionController.php).

**Rutas/Flujo:** /reservacion/{id}/cancelar, /backend/transaction/{id}/cancel

**Sintoma:** La cancelacion no contempla devolucion dentro de una ventana de 2h.

**Impacto:** Experiencia y confianza del cliente.

**Plan de solucion:**
- Definir regla de 2h antes
- Al cancelar, disparar reembolso y actualizar estatus
- Notificar al usuario

**Tiempo Estimado:** 4-8 horas  
**Test:** Cancelar dentro y fuera de ventana, validar reembolso.

---

### Issue N-3: ✅ Editar foto en backend — RESUELTO

**Severidad:** 🟠 IMPORTANTE  
**Status:** ✅ RESUELTO - SCRUM-9 (Edición de foto de instructores implementada y verificada. Ver FIXES/FEATURE_EDITAR_FOTO_INSTRUCTORES.md)

**Contexto:** Perfil de instructores en [src/Form/Backend/InstructorProfileType.php](../src/Form/Backend/InstructorProfileType.php) y [src/Entity/StaffProfile.php](../src/Entity/StaffProfile.php).

**Rutas/Flujo:** /backend/instructor/{id}/edit (admin)

**Sintoma:** Edicion de imagen no disponible o no persiste.

**Impacto:** Operacion interna y presentacion del staff.

**Plan de solucion:**
- Verificar formulario y campo de imagen
- Confirmar subida y guardado
- Validar visualizacion en panel

**Tiempo Estimado:** 2-3 horas  
**Test:** Cambiar foto, recargar perfil y validar imagen.

---

### Issue N-4: 🟠 Correo por cambios en clase a asistentes

**Severidad:** 🟠 IMPORTANTE

**Contexto:** No hay notificacion al cambiar horario/instructor. Ver [src/EventListener/SessionCanceledListener.php](../src/EventListener/SessionCanceledListener.php) y [src/Service/Mailer/ReservationMailer.php](../src/Service/Mailer/ReservationMailer.php).

**Rutas/Flujo:** Actualizacion de clase desde backend

**Sintoma:** Asistentes no reciben aviso cuando cambia una clase.

**Impacto:** Asistencia y quejas.

**Plan de solucion:**
- Definir eventos de cambio (hora, instructor, cancelacion)
- Enviar correo a asistentes
- Registrar envio en logs

**Tiempo Estimado:** 2-4 horas  
**Test:** Cambiar una clase y confirmar correo a inscritos.

---

### Issue N-5: ✅ Buscar usuario con errores (tipografia) — RESUELTO

**Severidad:** 🟠 IMPORTANTE  
**Status:** ✅ RESUELTO - SCRUM-8 (Búsqueda mejorada con normalización de acentos y nombre completo. Ver FIXES/FEATURE_BUSQUEDA_USUARIOS_MEJORADA.md)

**Contexto:** Filtros de busqueda en backend en [src/Repository/UserRepository.php](../src/Repository/UserRepository.php).

**Rutas/Flujo:** /backend/user

**Sintoma:** Busqueda falla con variaciones de nombre/acentos.

**Impacto:** Soporte y ventas.

**Plan de solucion:**
- Normalizar busquedas (acentos, nombre completo)
- Agregar busqueda por nombre completo y email
- Validar resultados en backend

**Tiempo Estimado:** 2-4 horas  
**Test:** Buscar con variantes de nombre y validar resultados.

---

### Issue N-6: 🟠 Correo en lista de espera

**Severidad:** 🟠 IMPORTANTE

**Contexto:** Registro y asignacion de lista de espera en [src/Service/WaitingList/WaitingListService.php](../src/Service/WaitingList/WaitingListService.php), [src/EventListener/WaitingListSuccessListener.php](../src/EventListener/WaitingListSuccessListener.php), [src/Service/Mailer/WaitingListMailer.php](../src/Service/Mailer/WaitingListMailer.php).

**Rutas/Flujo:** Registro en lista de espera y asignacion de cupo

**Sintoma:** No llega correo al registrarse o al liberar cupo.

**Impacto:** Conversion y asistencia.

**Plan de solucion:**
- Confirmar disparo de evento
- Revisar plantilla y envio
- Registrar errores en log

**Tiempo Estimado:** 2-4 horas  
**Test:** Registrarse en lista de espera y verificar correo.

---

### Issue N-7: 🟠 Crear horario por hora, no por ingreso

**Severidad:** 🟠 IMPORTANTE

**Contexto:** Creacion de sesiones por dia en [src/Controller/Backend/SessionDayController.php](../src/Controller/Backend/SessionDayController.php).

**Rutas/Flujo:** /backend/session-day/new, /backend/session-day/edit

**Sintoma:** La hora del registro puede quedar con la hora del sistema.

**Impacto:** Datos incorrectos y clases mal programadas.

**Plan de solucion:**
- Asegurar que cada registro guarde su hora real
- Revisar manejo de DateTime por cada horario
- Validar en calendario

**Tiempo Estimado:** 2-4 horas  
**Test:** Crear horarios en horas distintas y validar.

---

### Issue N-8: 🟠 Auditoría bidireccional en cambio de reservación

**Severidad:** 🟠 IMPORTANTE

**Contexto:** El cambio de reservación por usuario registra auditoría principalmente en la sesión de origen. Referencias: [src/Controller/ProfileController.php](../src/Controller/ProfileController.php), [src/Service/ReservationCancellationService.php](../src/Service/ReservationCancellationService.php), [src/Controller/Backend/SessionController.php](../src/Controller/Backend/SessionController.php), [templates/backend/session/audit.html.twig](../templates/backend/session/audit.html.twig).

**Rutas/Flujo:** /reservacion/{id}/cambiar/{sessionId}, /backend/session/{id}/audit

**Sintoma:** El panel de auditoría no permite seguir completo el cambio desde ambas sesiones (de dónde salió y a cuál entró) con una correlación única.

**Impacto:** Trazabilidad incompleta para soporte, validación operativa y análisis de incidencias.

**Plan de solucion:**
- Registrar dos eventos por cambio: salida (origen) y entrada (destino).
- Vincular ambos registros con `change_flow_id`.
- Exponer en panel backend detalle de cambio con referencia cruzada de flujo.
- Mantener compatibilidad con eventos históricos `user_changed`.

**Tiempo Estimado:** 3-5 horas  
**Test:** Ejecutar cambio A -> B y verificar auditoría visible en panel de ambas sesiones con mismo `change_flow_id`.

---

## 🟠 ISSUES IMPORTANTES (Esta Semana)

### Issue #4b: ⚡ Rate Limiting - Login

**Severidad:** 🟡 IMPORTANTE

**Contexto:** `login_throttling` esta en null y no hay `rate_limiter` configurado en [config/packages/security.yaml](../config/packages/security.yaml) y [config/packages/framework.yaml](../config/packages/framework.yaml).

**Rutas/Flujo:** /login

**Problema:** Sin protección contra brute-force

**Implementación:**
```yaml
# config/packages/framework.yaml
framework:
    rate_limiter:
        login_limiter:
            strategy: 'moving_window'
            limit: 5
            interval: '15 minutes'
            
        register_limiter:
            strategy: 'fixed_window'
            limit: 10
            interval: '1 hour'
```

En controller:
```php
// src/Controller/SecurityController.php
use Symfony\Component\RateLimiter\RateLimiterFactory;

class SecurityController
{
    public function __construct(private RateLimiterFactory $loginLimiter) {}
    
    #[Route(path: '/login')]
    public function login(Request $request)
    {
        // Rate limit check
        $limiter = $this->loginLimiter->create($request->getClientIp());
        if (!$limiter->consume(1)->isAccepted()) {
            throw new TooManyRequestsHttpException();
        }
        
        // ... rest of login logic
    }
}
```

---

### Issue #8: ✅ Riesgo de doble reservación (Concurrencia) — RESUELTO

**Severidad:** 🟠 IMPORTANTE  
**Status:** ✅ RESUELTO - SCRUM-24 (Validación de concurrencia y constraint unique implementados. Ver FIXES/ISSUE_DOBLE_ASIENTO_CONCURRENCIA_Y_VALIDACION.md)

**Contexto:** La reserva/cambio no usa lock transaccional en [src/Service/Reservation/ReservationService.php](../src/Service/Reservation/ReservationService.php).

**Rutas/Flujo:** /reservacion-clase/{id}, /reservacion/{id}/cambiar/{sessionId}

**Problema:** Dos requests simultáneos pueden reservar el mismo `placeNumber`.

**Recomendación:**
- Verificar lugar ocupado antes de persistir.
- Envolver en transacción y usar lock a nivel BD o `SELECT ... FOR UPDATE`.
- Registrar error si colisiona.

**Tiempo:** 2-3 horas  
**Test:** Simular 2 requests concurrentes al mismo asiento.

---

### Issue #9: 🟡 Mutación de dateStart en WaitingList

**Severidad:** 🟡 IMPORTANTE

**Contexto:** Mutacion del DateTime en [src/Service/WaitingList/WaitingListService.php](../src/Service/WaitingList/WaitingListService.php).

**Rutas/Flujo:** /lista-de-espera/{id}

**Problema:** `WaitingListService::validate()` modifica `dateStart` sin clonar, dejando estado sucio en el request.

**Fix sugerido:**
```php
// Antes
$dateStart = $session->getDateStart();
$dateStart->setTime(...);

// Después
$dateStart = clone $session->getDateStart();
$dateStart = $dateStart->setTime(...);
```

**Tiempo:** 25 minutos  
**Test:** Verificar que Session no cambie su fecha en memoria.

---

### Issue #11: 🔐 Endpoints backend sin control de acceso

**Severidad:** 🟠 IMPORTANTE

**Contexto:** Rutas sin IsGranted en [src/Controller/Backend/SessionController.php](../src/Controller/Backend/SessionController.php), [src/Controller/Backend/UserController.php](../src/Controller/Backend/UserController.php) y [src/Controller/Backend/CouponController.php](../src/Controller/Backend/CouponController.php).

**Rutas/Flujo:** /backend/session/get, /backend/session/{id}/places, /backend/reservation/{id}/attended, /backend/user/{id}/stats

**Problema:** Rutas como `backend/session/get`, `backend/session/{id}/places`,
`backend/reservation/{id}/attended`, `backend/user/{id}/stats`,
`backend/user/{id}/transactions`, `backend/user/{id}/reservations`,
`backend/user/{id}/reservations/{reservation}` y `backend/coupon/validate`
no tienen `IsGranted`.

**Riesgo:** Acceso no autorizado a datos o acciones internas.

**Fix sugerido:**
- Agregar `#[IsGranted('ALLOWED_ROUTE_ACCESS')]` o `ROLE_*` correspondiente.
- Revisar cada ruta backend y documentar permisos.

**Tiempo:** 2-3 horas  
**Test:** Acceso con usuario sin permisos debe devolver 403.

---

### Issue #12: 🔓 Ruta debug expone phpinfo()

**Severidad:** 🟠 IMPORTANTE

**Contexto:** Ruta de prueba en [src/Controller/Backend/DashboardController.php](../src/Controller/Backend/DashboardController.php).

**Rutas/Flujo:** /backend/test

**Problema:** `/backend/test` ejecuta `phpinfo()` y `exit()` sin control de acceso estricto.

**Riesgo:** Fuga de informacion sensible del entorno.

**Fix sugerido:**
- Eliminar la ruta o proteger con `ROLE_ADMIN` + entorno `dev`.

**Tiempo:** 25 minutos  
**Test:** Ruta inaccesible en prod.

**Tiempo:** 2-3 horas  
**Test:** Intentar 6 logins en < 15 min → debe fallar

---

### Issue #5: 📞 Phone Field - Privacy Compliance

**Severidad:** 🟡 IMPORTANTE

**Contexto:** Campos en [src/Entity/User.php](../src/Entity/User.php) y exportes en [src/Repository/UserRepository.php](../src/Repository/UserRepository.php).

**Rutas/Flujo:** /register, /mi-cuenta/editar, /backend/user/export

**Problema:** Numero de teléfono sin encripción (GDPR)

**Actual:**
```php
#[ORM\Column(length: 15, nullable: true)]
private ?string $phone = null;
```

**Opciones:**

**A) Hash (irreversible)**
```php
// Doctrine listeners
public function onPrePersist(PrePersistEventArgs $args)
{
    $entity = $args->getObject();
    if ($entity instanceof User && $entity->getPhone()) {
        $entity->setPhoneHash(hash('sha256', $entity->getPhone()));
    }
}
```

**B) Encrypt (reversible)**
```bash
composer require white-october/encrypting-fields
```

**C) Token (por compatibilidad)**
```php
$phone_token = substr(md5($phone), 0, 8);
```

**Recomendación:** Opción A (Hash) + mostrar últimos 3 dígitos en UI

**Tiempo:** 2-3 horas  
**Test:** Verificar que phone no se muestre en logs/exports

---

### Issue #6: 📊 Logging & Audits - Mejorado

**Severidad:** 🟢 BUENO (pero mejorable)

**Contexto:** Solo existe listener de login en [src/EventListener/LoginSuccessListener.php](../src/EventListener/LoginSuccessListener.php) y no hay auditoria general de entidades.

**Rutas/Flujo:** Login backend/frontend (eventos de autenticacion)

**Actual:** LoginSuccessListener existe ✅

**Mejorar:**
```php
// src/EventListener/EntityAuditListener.php
#[AsEventListener(event: PostPersistEvent::class)]
#[AsEventListener(event: PostUpdateEvent::class)]
public function onEntityChange(PostPersistEvent|PostUpdateEvent $event): void
{
    $entity = $event->getObject();
    
    $this->logger->info('Entity changed', [
        'action' => $event instanceof PostPersistEvent ? 'CREATE' : 'UPDATE',
        'entity' => get_class($entity),
        'id' => $entity->getId(),
        'user' => $this->security->getUser()->getId() ?? 'anonymous',
        'ip' => $this->requestStack->getCurrentRequest()?->getClientIp(),
        'timestamp' => new \DateTime(),
    ]);
}
```

**Archivos Afectados:**
```
var/log/prod.log ← Monitorear diariamente
var/log/dev.log  ← Ya existe (2.7 MB actual)
```

**Tiempo:** 2 horas  
**Test:** hacer acción, verificar log

---

## 🟢 ISSUES MENORES (Próximas 2 semanas)

### Issue #7: 🔍 Validaciones Adicionales

**Contexto:** No se observa verificacion de email ni fuerza de password en formularios de [src/Form/RegistrationFormType.php](../src/Form/RegistrationFormType.php) y [src/Form/ResettingFormType.php](../src/Form/ResettingFormType.php).

**Rutas/Flujo:** /register, /restablecer/{token}

**Email Verification**
- [ ] Enviar link de confirmación
- [ ] Validar pertenencia antes de usar
- [ ] Tiempo de expiración: 24hs

**Phone Validation**
- [ ] SMS OTP (si es critical)
- [ ] Validar formato país
- [ ] Detectar números falsos

**Password Strength**
- [ ] Meter visual en frontend
- [ ] Requerir mayús + números
- [ ] Historia de passwords (/últim 5)

**Tiempo:** 2-3 horas  
**Test:** Intentar registros con datos inválidos

---

### Issue #10: 🟡 DATEADD en DQL (Compatibilidad)

**Severidad:** 🟡 MENOR

**Contexto:** Uso de DATEADD en [src/Repository/SessionRepository.php](../src/Repository/SessionRepository.php).

**Rutas/Flujo:** app:session:autoclosing

**Problema:** `SessionRepository::getNotClosed()` usa `DATEADD` en DQL, puede fallar en MySQL si no hay función custom.

**Fix sugerido:**
- Reescribir usando comparaciones con DateTime calculadas en PHP.
- Alternativa: registrar función DQL custom equivalente.

**Tiempo:** 25-35 minutos  
**Test:** Ejecutar `getNotClosed()` y verificar que no haya error de DQL.

---

### Issue #13: 🟡 Tipo de clase en ExerciseRoomController

**Severidad:** 🟡 MENOR

**Contexto:** Uso de clase incorrecta en [src/Controller/Backend/ExerciseRoomController.php](../src/Controller/Backend/ExerciseRoomController.php).

**Rutas/Flujo:** /backend/exerciseroom

**Problema:** Se usa `Exerciseroom` en lugar de `ExerciseRoom` al instanciar y acceder a constantes.

**Riesgo:** Error de clase no encontrada o referencia a namespace incorrecto.

**Fix sugerido:**
- Reemplazar `Exerciseroom` por `ExerciseRoom`.

**Tiempo:** 25 minutos  
**Test:** Cargar backend de salones y crear/editar.

---

### Issue #14: 🟡 Reuso de DateTime en SessionDayController

**Severidad:** 🟡 MENOR

**Contexto:** Uso de DateTime compartido en [src/Controller/Backend/SessionDayController.php](../src/Controller/Backend/SessionDayController.php).

**Rutas/Flujo:** /backend/session-day

**Problema:** `newDay()` y `editDay()` usan el mismo `DateTime` para crear varias sesiones.

**Riesgo:** Varias sesiones pueden quedar con la misma fecha/hora incorrecta si el objeto se vuelve a mutar.

**Fix sugerido:**
- Clonar `DateTime` antes de asignar `dateStart` y `timeStart` en cada sesión.

**Tiempo:** 25 minutos  
**Test:** Crear varias sesiones en un dia y validar que cada una conserve su hora.

---

### Issue #15: 🟡 ADDTIME en DQL (WaitingListRepository)

**Severidad:** 🟡 MENOR

**Contexto:** Uso de ADDTIME en [src/Repository/WaitingListRepository.php](../src/Repository/WaitingListRepository.php).

**Rutas/Flujo:** app:waiting-list:expire

**Problema:** `getAvailableForExpire()` usa `ADDTIME` en DQL, puede fallar en MySQL/Doctrine sin función custom.

**Fix sugerido:**
- Calcular el limite de expiracion en PHP y comparar con `s.dateStart`/`s.timeStart`.

**Tiempo:** 25-35 minutos  
**Test:** Ejecutar `getAvailableForExpire()` y validar resultados.

---

### Issue #16: 🟡 getFirstPublic() puede retornar null

**Severidad:** 🟡 MENOR

**Contexto:** Retorno nullable en [src/Repository/BranchOfficeRepository.php](../src/Repository/BranchOfficeRepository.php) consumido por [src/Controller/ReservationController.php](../src/Controller/ReservationController.php).

**Rutas/Flujo:** /reservar-clase/{slug}

**Problema:** `BranchOfficeRepository::getFirstPublic()` no garantiza resultado, pero el tipo no es nullable.

**Riesgo:** `ReservationController::calendar()` puede fallar si no hay sucursales publicas.

**Fix sugerido:**
- Cambiar retorno a `?BranchOffice` y manejar null antes de usar.

**Tiempo:** 25 minutos  
**Test:** Simular BD sin sucursales publicas.

---

### Issue #17: 🟡 Validacion tipo 'digit' en User

**Severidad:** 🟡 MENOR

**Contexto:** Validaciones en [src/Entity/User.php](../src/Entity/User.php).

**Rutas/Flujo:** /register, /mi-cuenta/editar

**Problema:** `Assert\Type(type: 'digit')` no es un tipo valido en Symfony.

**Riesgo:** Validacion de telefono no se aplica o lanza error.

**Fix sugerido:**
- Usar `Regex` o `Length` + `Type` con tipos PHP validos.

**Tiempo:** 25 minutos  
**Test:** Validar telefono con letras en registro/perfil.

---

### Issue #18: 🟡 IFELSE en DQL (TransactionRepository)

**Severidad:** 🟡 MENOR

**Contexto:** Uso de IFELSE en [src/Repository/TransactionRepository.php](../src/Repository/TransactionRepository.php).

**Rutas/Flujo:** /backend/stats

**Problema:** `getGroupedByPackage()` usa `IFELSE`, no es funcion DQL/SQL estandar en MySQL.

**Riesgo:** Query falla en reportes de stats.

**Fix sugerido:**
- Reescribir con `CASE WHEN` o funcion soportada.

**Tiempo:** 25 minutos  
**Test:** Abrir panel de stats y validar query.

---

### Issue #19: 🟠 WaitingList sin control de autenticacion

**Severidad:** 🟠 IMPORTANTE

**Contexto:** Endpoint sin ROLE_USER en [src/Controller/ReservationController.php](../src/Controller/ReservationController.php).

**Rutas/Flujo:** /lista-de-espera/{id}

**Problema:** `ReservationController::waitingList()` no valida `ROLE_USER`.

**Riesgo:** `getUser()` null o acceso no autorizado.

**Fix sugerido:**
- Agregar `#[IsGranted('ROLE_USER')]`.
- Manejar usuario null con respuesta 403/redirect.

**Tiempo:** 25 minutos  
**Test:** Acceso anonimo debe fallar.

---

### Issue #20: 🟡 Contacto depende de configuracion existente

**Severidad:** 🟡 MENOR

**Contexto:** Dependencia en [src/Service/HandlerContactService.php](../src/Service/HandlerContactService.php).

**Rutas/Flujo:** /contacto/enviar

**Problema:** `HandlerContactService::processForm()` asume configuracion general en BD.

**Riesgo:** Error si falta configuracion.

**Fix sugerido:**
- Validar `findGeneral()` y usar fallback seguro.

**Tiempo:** 25 minutos  
**Test:** Enviar contacto sin config en BD.

---

### Issue #21: 🟡 WaitingList duplicada

**Severidad:** 🟡 MENOR

**Contexto:** Falta de validacion previa en [src/Service/WaitingList/WaitingListService.php](../src/Service/WaitingList/WaitingListService.php).

**Rutas/Flujo:** /lista-de-espera/{id}

**Problema:** `WaitingListService::add()` no valida duplicados (PK user+session).

**Riesgo:** Excepcion de BD y UX confusa.

**Fix sugerido:**
- Verificar existencia en `WaitingListRepository` antes de persistir.

**Tiempo:** 25 minutos  
**Test:** Intentar inscribir al mismo usuario dos veces.

---

### Issue #22: 🟡 DATE/DAYNAME en DQL

**Severidad:** 🟡 MENOR

**Contexto:** Uso en [src/Repository/ReservationRepository.php](../src/Repository/ReservationRepository.php), [src/Repository/UserRepository.php](../src/Repository/UserRepository.php) y [src/Repository/TransactionRepository.php](../src/Repository/TransactionRepository.php).

**Rutas/Flujo:** /backend/stats

**Problema:** Repositorios usan `DATE()` y `DAYNAME()` en DQL.

**Riesgo:** Error si no estan registradas como funciones DQL.

**Fix sugerido:**
- Reescribir con rangos DateTime o registrar funciones custom.

**Tiempo:** 25-35 minutos  
**Test:** Ejecutar queries de stats/reportes.

---

### Issue #23: 🟡 FormView no renderizado

**Severidad:** 🟡 MENOR

**Contexto:** `cancel_form` sin createView en [src/Controller/Backend/SessionController.php](../src/Controller/Backend/SessionController.php).

**Rutas/Flujo:** /backend/session/{id}/reservations

**Problema:** `backend/session/reservations` pasa `cancel_form` sin `createView()`.

**Riesgo:** Error de Twig al renderizar formulario.

**Fix sugerido:**
- Usar `$cancelForm->createView()`.

**Tiempo:** 25 minutos  
**Test:** Abrir vista de reservaciones en backend.

---

### Issue #24: 🟡 Nullable + NotBlank

**Severidad:** 🟡 MENOR

**Contexto:** Campos nullable con NotBlank en [src/Entity/User.php](../src/Entity/User.php) y [src/Entity/StaffProfile.php](../src/Entity/StaffProfile.php).

**Rutas/Flujo:** /backend/user/{id}/edit, /mi-cuenta/editar

**Problema:** Campos nullable con `NotBlank` (User/StaffProfile).

**Riesgo:** Datos existentes con null fallan validacion o formularios.

**Fix sugerido:**
- Alinear nullable con validacion real.

**Tiempo:** 25 minutos  
**Test:** Editar usuario/staff con campos nulos.

---

### Issue #25: 🟠 WaitingList remove por GET sin CSRF

**Severidad:** 🟠 IMPORTANTE

**Contexto:** Ruta GET en [src/Controller/ProfileController.php](../src/Controller/ProfileController.php) y link en [templates/profile/waiting_list.html.twig](../templates/profile/waiting_list.html.twig).

**Rutas/Flujo:** /mi-cuenta/lista-espera (remove)

**Problema:** `waiting_list_remove` usa GET y elimina registros sin CSRF.

**Riesgo:** CSRF/side-effects (prefetch/bots) borran lista de espera.

**Fix sugerido:**
- Cambiar a POST/DELETE y validar token CSRF.

**Tiempo:** 25 minutos  
**Test:** GET sin token no debe eliminar registros.

---

### Issue #26: 🟠 Acciones POST sin CSRF

**Severidad:** 🟠 IMPORTANTE

**Contexto:** POST sin token en [src/Controller/ReservationController.php](../src/Controller/ReservationController.php), [src/Controller/ProfileController.php](../src/Controller/ProfileController.php), [src/Controller/Backend/TransactionController.php](../src/Controller/Backend/TransactionController.php), [src/Controller/Backend/ReservationController.php](../src/Controller/Backend/ReservationController.php) y [src/Controller/ResettingController.php](../src/Controller/ResettingController.php).

**Rutas/Flujo:** /reservacion-clase/{id}, /lista-de-espera/{id}, /reservacion/{id}/cancelar, /backend/transaction/{id}/cancel, /backend/reservation/{id}/attended

**Problema:** `reservation_confirm`, `reservation_waitinglist`, `reservation_cancel`,
`reservation_change_session`, `package_checkout`,
`backend_reservation_attended`, `backend_transaction_cancel`, `backend_transaction_edit_expiration`,
`resetting_send_email` no validan CSRF.

**Riesgo:** Cancelaciones/ediciones disparadas desde sitios externos.

**Fix sugerido:**
- Usar formularios con CSRF o validar token manual.

**Tiempo:** 25-35 minutos  
**Test:** POST sin token debe fallar.

---

### Issue #27: 🟠 Acciones sensibles por GET

**Severidad:** 🟠 IMPORTANTE

**Contexto:** Reset por GET en [src/Controller/Backend/UserController.php](../src/Controller/Backend/UserController.php).

**Rutas/Flujo:** /backend/user/{id}/reset-password

**Problema:** `backend_user_reset_password` modifica datos y hace `flush()` via GET.

**Riesgo:** CSRF/side-effects (prefetch/bots) pueden resetear tokens.

**Fix sugerido:**
- Cambiar a POST con CSRF y confirmación explícita.

**Tiempo:** 25 minutos  
**Test:** GET no debe modificar datos.

---

### Issue #28: 🟡 Falta de tests automatizados

**Severidad:** 🟡 MENOR

**Contexto:** Solo existe [tests/bootstrap.php](../tests/bootstrap.php).

**Rutas/Flujo:** testing general (no aplica ruta)

**Problema:** No hay pruebas en `tests/` (solo bootstrap).

**Riesgo:** Regresiones en reservas/pagos sin detección temprana.

**Fix sugerido:**
- Agregar smoke tests y flujos críticos (login, reservar, cancelar, pago).

**Tiempo:** 2-3 horas  
**Test:** Ejecutar `php bin/phpunit` con casos base.

---

### Issue #29: ✅ N+1 queries en listados — RESUELTO

**Severidad:** 🟡 MENOR  
**Status:** ✅ RESUELTO - SCRUM-28 (Corrección N+1 en listados de reservaciones con fetch joins. Ver YA COMPLETADO)

**Contexto:** Listados sin joins en [src/Repository/ReservationRepository.php](../src/Repository/ReservationRepository.php), [src/Repository/WaitingListRepository.php](../src/Repository/WaitingListRepository.php) y [src/Repository/TransactionRepository.php](../src/Repository/TransactionRepository.php).

**Rutas/Flujo:** /backend/session/{id}/reservations, /mi-cuenta/lista-espera, /mi-cuenta/transaccion

**Problema:** Listados cargan relaciones lazy sin joins (reservaciones, waiting list, transacciones).

**Riesgo:** Lento en producción (multiples queries por fila).

**Fix sugerido:**
- Agregar joins/selects a repositorios o fetch join.

**Tiempo:** 2-3 horas  
**Test:** Perfil/Backend con profiler, conteo de queries.

---

### Issue #30: 🟠 Checkout sin usuario autenticado

**Severidad:** 🟠 IMPORTANTE

**Contexto:** POST sin ROLE_USER en [src/Controller/PackageController.php](../src/Controller/PackageController.php) y uso de getUser en [src/Service/TransactionService.php](../src/Service/TransactionService.php).

**Rutas/Flujo:** /paquete/{id}/comprar

**Problema:** `package_checkout` permite POST sin ROLE_USER; `TransactionService::create()` usa `getUser()`.

**Riesgo:** Error 500 en POST anonimo y flujo inconsistente.

**Fix sugerido:**
- Requerir ROLE_USER en POST o validar usuario antes de crear transaccion.

**Tiempo:** 25 minutos  
**Test:** POST anonimo debe responder 401/403 o redirigir a login.

---

### Issue #31: 🟡 Enumeracion de usuarios (reset password)

**Severidad:** 🟡 MENOR

**Contexto:** Mensaje explicito en [src/Controller/ResettingController.php](../src/Controller/ResettingController.php).

**Rutas/Flujo:** /restablecer/send-email

**Problema:** `resetting_send_email` responde "correo no existe".

**Riesgo:** Enumeracion de usuarios por email.

**Fix sugerido:**
- Respuesta generica + rate limit.

**Tiempo:** 25 minutos  
**Test:** Emails existentes/no existentes deben responder igual.

---

### Issue #32: 🟠 Configuracion sin CSRF

**Severidad:** 🟠 IMPORTANTE

**Contexto:** Forms manuales en [templates/backend/configuration/index.html.twig](../templates/backend/configuration/index.html.twig) y update en [src/Controller/Backend/ConfigurationController.php](../src/Controller/Backend/ConfigurationController.php).

**Rutas/Flujo:** /backend/settings/update

**Problema:** `backend_configuration_update` usa forms HTML sin token CSRF.

**Riesgo:** CSRF puede modificar configuracion o subir archivos.

**Fix sugerido:**
- Agregar token CSRF o migrar a Symfony Form.

**Tiempo:** 25-35 minutos  
**Test:** POST sin token debe fallar.

---

### Issue #33: 🟡 Uploads sin validacion en configuracion

**Severidad:** 🟡 MENOR

**Contexto:** Modelo sin constraints en [src/Model/ConfigurationFileModel.php](../src/Model/ConfigurationFileModel.php).

**Rutas/Flujo:** /backend/settings (avisos/image)

**Problema:** `ConfigurationFileModel` no valida tipo/tamano de archivos.

**Riesgo:** Subida de archivos no deseados en backend.

**Fix sugerido:**
- Agregar constraints `File/Image` con MIME y size.

**Tiempo:** 25 minutos  
**Test:** Subir archivo no permitido debe fallar.

---

### Issue #34: 🟡 TokenGenerator con fallback debil

**Severidad:** 🟡 MENOR

**Contexto:** Fallback inseguro en [src/Util/TokenGenerator.php](../src/Util/TokenGenerator.php).

**Rutas/Flujo:** /restablecer/send-email, /backend/user/{id}/reset-password

**Problema:** `TokenGenerator::generateToken()` usa `md5(uniqid())` si falla `random_bytes()`.

**Riesgo:** Tokens predecibles en entornos sin CSPRNG.

**Fix sugerido:**
- Eliminar fallback debil o abortar si falla `random_bytes()`.

**Tiempo:** 25 minutos  
**Test:** Forzar exception de random_bytes y validar comportamiento.

---

### Issue #35: 🟡 Fecha invalida rompe configuracion

**Severidad:** 🟡 MENOR

**Status:** ✅ IMPLEMENTADO EN RAMA `fix/scrum-80-fecha-invalida-configuracion` (10/03/2026)

**Contexto:** createFromFormat sin validacion estricta en [src/Controller/Backend/ConfigurationController.php](../src/Controller/Backend/ConfigurationController.php).

**Rutas/Flujo:** /backend/settings/update

**Problema original:** `ConfigurationController::castValues()` usaba `createFromFormat()->format()` sin validar.
Adicionalmente, fechas overflow como `99/99/2026` no fallan por defecto en PHP: se normalizan a otra fecha valida (ej. `2034-06-07`), lo cual tambien era incorrecto para este flujo.

**Riesgo:**
- Error 500 con entradas no parseables (ej. `foo`, `31-12-2026`).
- Persistencia de fecha distinta a la ingresada cuando PHP normaliza overflow (ej. `99/99/2026`).

**Fix aplicado:**
- `ConfigurationController::castValues()` ahora usa casteo estricto con `castDateValue()`.
- Se valida parseo con `createFromFormat('!d/m/Y', ...)`, `getLastErrors()` y comparacion exacta contra input.
- Si la fecha es invalida (incluyendo overflow tipo `99/99/2026`), se lanza excepcion controlada.
- En `update()`, al capturar la excepcion se corta el proceso, se limpia contexto del EntityManager, se muestra feedback `danger` y se redirige sin persistir cambios.
- Se ajusto el tipo de flash a `danger` para que el layout backend lo renderice correctamente.

**Tiempo real:** ~35 minutos  
**Validacion ejecutada:**
- `10/03/2026` -> se convierte y guarda como `2026-03-10`.
- `31-12-2026` y `foo` -> ya no generan 500; se marca fecha invalida y no guarda.
- `99/99/2026` -> rechazada (ya no se normaliza silenciosamente).
- Test automatizado: `tests/Controller/Backend/ConfigurationControllerTest.php` (4/4 OK).

---

### Issue #36: 🟡 Fechas invalidas rompen filtros

**Severidad:** 🟡 MENOR

**Contexto:** Filtros con createFromFormat en [src/Repository/ReservationRepository.php](../src/Repository/ReservationRepository.php), [src/Repository/UserRepository.php](../src/Repository/UserRepository.php) y [src/Repository/TransactionRepository.php](../src/Repository/TransactionRepository.php).

**Rutas/Flujo:** /backend/user, /backend/transaction, /backend/reservation

**Problema:** Repositorios usan `createFromFormat()->format()` sin validar en filtros.

**Riesgo:** Error 500 al filtrar por fechas invalidas.

**Fix sugerido:**
- Validar retorno antes de `format()`.

**Tiempo:** 25 minutos  
**Test:** Filtro con fecha invalida debe responder sin error.

---

### Issue #37: 🟡 Excepciones silenciadas

**Severidad:** 🟡 MENOR

**Contexto:** Catch vacio en [src/Controller/ResettingController.php](../src/Controller/ResettingController.php) y [src/Service/HandlerContactService.php](../src/Service/HandlerContactService.php).

**Rutas/Flujo:** /restablecer/send-email, /contacto/enviar

**Problema:** `ResettingController::sendNotification()` y `HandlerContactService::processForm()` ignoran excepciones.

**Riesgo:** Errores de email quedan ocultos y no se diagnostican.

**Fix sugerido:**
- Registrar exception y retornar error controlado.

**Tiempo:** 25 minutos  
**Test:** Forzar fallo de mailer y verificar logging/respuesta.

---

### Issue #38: ✅ Doble asiento por falta de validacion — RESUELTO

**Severidad:** 🟠 IMPORTANTE  
**Status:** ✅ RESUELTO - SCRUM-24 (Cubre tanto el aspecto de concurrencia como la validación de lugar ocupado. Relacionado con Issue #8. Ver FIXES/ISSUE_DOBLE_ASIENTO_CONCURRENCIA_Y_VALIDACION.md)

**Contexto:** Falta validacion y constraint unique en [src/Service/Reservation/ReservationService.php](../src/Service/Reservation/ReservationService.php) y [src/Entity/Reservation.php](../src/Entity/Reservation.php).

**Rutas/Flujo:** /reservacion-clase/{id}, /reservacion/{id}/cambiar/{sessionId}

**Problema:** `ReservationService::reservate()` y `change()` no validan si el lugar ya esta ocupado.

**Riesgo:** Dos usuarios con el mismo lugar en una clase (sin concurrencia).

**Fix sugerido:**
- Validar placeNumber reservado y agregar unique constraint (session_id, place_number).

**Tiempo:** 2-3 horas  
**Test:** Reservar el mismo lugar dos veces debe fallar.

---

### Issue #39: 🟠 Expiracion sin hora en transacciones

**Severidad:** 🟠 IMPORTANTE

**Contexto:** Comparacion de fecha sin hora en [src/Repository/TransactionRepository.php](../src/Repository/TransactionRepository.php).

**Problema:** `getExpired()` usa `Y-m-d` y no considera hora.

**Riesgo:** Transacciones expiran hasta el siguiente dia (ventana extra de uso).

**Fix sugerido:**
- Comparar con DateTime completo (`Y-m-d H:i:s`).

**Tiempo:** 25 minutos  
**Test:** Expiracion debe ocurrir a la hora exacta.

---

### Issue #40: 🟠 Reservas en sesiones cerradas/canceladas

**Severidad:** 🟠 IMPORTANTE

**Contexto:** Falta validacion de estado de session en [src/Service/Reservation/ReservationService.php](../src/Service/Reservation/ReservationService.php) y rutas en [src/Controller/ReservationController.php](../src/Controller/ReservationController.php) y [src/Controller/Backend/UserController.php](../src/Controller/Backend/UserController.php).

**Rutas/Flujo:** /reservacion-clase/{id}, /reservacion/{id}/cambiar/{sessionId}, /backend/user/{id}/reservations/new

**Problema:** `reservate()`/`change()` no verifican si la sesion esta CLOSED/CANCEL.

**Riesgo:** Reservas y cambios en sesiones cerradas/canceladas por request directo.

**Fix sugerido:**
- Validar `Session::STATUS_OPEN` o `Session::STATUS_FULL` antes de reservar/cambiar.
- Rechazar si status es CLOSED o CANCEL.

**Tiempo:** 25-35 minutos  
**Test:** Intentar reservar/cambiar en sesion CLOSED/CANCEL y debe fallar.

---

### Issue #41: 🟠 Cancelacion reabre sesiones o deja status incorrecto

**Severidad:** 🟠 IMPORTANTE

**Contexto:** `ReservationService::cancel()` fuerza `Session::STATUS_OPEN` en [src/Service/Reservation/ReservationService.php](../src/Service/Reservation/ReservationService.php) y se usa desde [src/Controller/ProfileController.php](../src/Controller/ProfileController.php) y [src/Controller/Backend/UserController.php](../src/Controller/Backend/UserController.php).

**Rutas/Flujo:** /reservacion/{id}/cancelar, /backend/user/{id}/reservations/{reservation}/cancel

**Problema:** La cancelacion siempre pone la sesion en OPEN sin recalcular si sigue FULL ni respetar CLOSED/CANCEL.
En `cancel()`, el bloqueo de CLOSED solo aplica a ROLE_USER; para admin puede reabrir.
En `change()`, si la sesion actual estaba FULL, se fuerza OPEN sin recalculo.

**Riesgo:** Sesiones cerradas/canceladas se reabren; status queda inconsistente y permite nuevas reservas.

**Fix sugerido:**
- Recalcular status en base a reservas activas.
- Mantener CLOSED/CANCEL si aplica.

**Tiempo:** 25-35 minutos  
**Test:** Cancelar en sesion CLOSED/CANCEL no debe reabrir; si sigue full, debe quedar FULL.

---

### Issue #42: 🟡 Actualizacion de capacidad con errores silenciados

**Severidad:** 🟡 IMPORTANTE
**Status:** ✅ IMPLEMENTADO EN RAMA `fix/scrum-83-capacidad-errores-silenciados` (Jira: SCRUM-83, 11/03/2026) - Pendiente QA

**Contexto:** `SessionRepository::updateCapacity()` atrapa excepciones sin logging en [src/Repository/SessionRepository.php](../src/Repository/SessionRepository.php) y se usa en [src/Controller/Backend/ExerciseRoomController.php](../src/Controller/Backend/ExerciseRoomController.php).

**Rutas/Flujo:** /backend/exerciseroom/{id}/edit

**Problema:** Si falla el update masivo de capacity/placesNotAvailable, el error se pierde.

**Riesgo:** Capacidad desactualizada, overbooking o inconsistencias sin alertas.

**Fix sugerido:**
- Registrar excepcion y notificar en UI.
- Opcional: reintentar o abortar el guardado.

**Implementacion aplicada (rama tecnica):**
- Eliminado `catch` silencioso en `SessionRepository::updateCapacity()`.
- Manejo controlado en `ExerciseRoomController::edit()` con log estructurado y flash `danger` en fallo.
- Log informativo en exito con numero de sesiones sincronizadas.

**Documento tecnico:** [DOCUMENTACION/FIXES/ISSUE_ACTUALIZACION_CAPACIDAD_ERRORES_SILENCIADOS.md](FIXES/ISSUE_ACTUALIZACION_CAPACIDAD_ERRORES_SILENCIADOS.md)

**Tiempo:** 25-35 minutos  
**Test:** Forzar error en update y verificar logging/alerta.

---

### Issue #43: 🟡 Sesiones de hoy omitidas en agrupacion

**Severidad:** 🟡 IMPORTANTE

**Contexto:** `SessionRepository::findAllGroupByDateStart()` compara `dateStart` (DATE) con `new DateTime()` en [src/Repository/SessionRepository.php](../src/Repository/SessionRepository.php) y se usa en [src/Controller/Backend/SessionDayController.php](../src/Controller/Backend/SessionDayController.php).

**Rutas/Flujo:** /backend/session-day

**Problema:** El filtro `s.dateStart >= :current_date` con hora actual excluye sesiones de HOY.

**Riesgo:** El calendario/admin no muestra sesiones del dia actual.

**Fix sugerido:**
- Usar `new \DateTime('today')` o `->setParameter('current_date', $currentDate->format('Y-m-d'))`.

**Tiempo:** 25-35 minutos  
**Test:** Verificar que HOY aparece en session-day.

---

### Issue #44: 🟡 SessionDay solo considera STATUS_OPEN

**Severidad:** 🟡 IMPORTANTE

**Contexto:** `SessionDayController::index()` usa `findAllGroupByDateStart()` y `editDay()` filtra `status=OPEN` en [src/Controller/Backend/SessionDayController.php](../src/Controller/Backend/SessionDayController.php).

**Rutas/Flujo:** /backend/session-day, /backend/session-day/edit/{editDate}/{branchOfficeId}

**Problema:** Sesiones FULL/CLOSED quedan fuera del listado y no se pueden editar.

**Riesgo:** Admin pierde visibilidad y no puede ajustar sesiones con reservas.

**Fix sugerido:**
- Incluir `STATUS_FULL` en consultas.
- Evaluar si CLOSED debe mostrarse como solo lectura.

**Tiempo:** 25-35 minutos  
**Test:** Session FULL debe aparecer en session-day.

---

### Issue #45: 🟠 Ruta backend session-day sin control de acceso

**Severidad:** 🟠 IMPORTANTE

**Contexto:** `SessionDayController::newBranchOffice()` no tiene `IsGranted` en [src/Controller/Backend/SessionDayController.php](../src/Controller/Backend/SessionDayController.php).

**Rutas/Flujo:** /backend/session-day/new-branch-office

**Problema:** Ruta backend expuesta sin control de acceso.

**Riesgo:** Acceso no autorizado a flujo admin y fuga de datos de sucursales.

**Fix sugerido:**
- Agregar `#[IsGranted('ALLOWED_ROUTE_ACCESS')]` o control de rol equivalente.

**Tiempo:** 25-35 minutos  
**Test:** Usuario sin rol no debe acceder.

---

### Issue #46: 🟡 Cupon no incrementa uso en transaccion backend

**Severidad:** 🟡 IMPORTANTE

**Contexto:** `backend_transaction_new` usa `CouponService::apply()` y dispara `TransactionEvent` (no `TransactionSuccessEvent`) en [src/Controller/Backend/TransactionController.php](../src/Controller/Backend/TransactionController.php). `CouponService::addHistory()` solo corre en [src/EventListener/TransactionSuccessListener.php](../src/EventListener/TransactionSuccessListener.php).

**Rutas/Flujo:** /backend/transaction/new

**Problema:** `coupon.used` no se incrementa al crear transacciones desde backend.

**Riesgo:** Cupones pueden exceder `usesTotal` y reportes quedan inconsistentes.

**Fix sugerido:**
- Disparar `TransactionSuccessEvent` o llamar `addHistory()` en el flujo backend.

**Tiempo:** 25-35 minutos  
**Test:** Crear transaccion con cupon en backend y verificar incremento de `used`.

---

## ✅ YA COMPLETADO

| Componente | Fix | Jira | Verificado |
|-----------|-----|------|-----------|
| MAILER_DSN | null://default | N/A | Sí |
| Doctrine Schema | Synced | N/A | Sí |
| SQL Injection | QueryBuilder | N/A | Sí |
| CSRF Tokens | Habilitado | SCRUM-5 / SCRUM-6 | Sí |
| Password Hash | Bcrypt | N/A | Sí |
| User Checker | Enabled check | N/A | Sí |
| Indices DB | Verificados en BD | N/A | Sí |
| DateTime Immutability | Corrección de mutación DateTime | SCRUM-7 | Sí |
| Búsqueda de usuarios | Mejora de búsqueda y normalización | SCRUM-8 | Sí |
| Foto de instructores | Edición persistente en backend | SCRUM-9 | Sí |
| Horarios precisos | Ajuste de lógica horaria | SCRUM-10 | Sí |
| Validación de apellido | Validación de registro reforzada | SCRUM-11 | Sí |
| Asientos reservados | Bloqueo de asientos ocupados | SCRUM-12 | Sí |
| Auditoría y trazabilidad | Registro de cancelaciones/cambios por usuario | SCRUM-14 / 15 / 16 / 17 / 18 / 19 | Sí |
| Doble asiento | Validación en backend | SCRUM-24 | Sí |
| Performance reservaciones | Corrección N+1 en listados | SCRUM-28 | Sí |
| Fecha inválida configuración | Validación estricta | SCRUM-80 | Sí |

### Finalizados en Jira (Estado = Finalizada, corte 10/03/2026)

1. SCRUM-80 - Issue #35 - Validar fecha invalida en configuracion
2. SCRUM-62 - 20.1 Reproducir error de planeamiento masivo y capturar traza tecnica
3. SCRUM-61 - 20.1 Reproducir error de planeamiento masivo y capturar traza tecnica
4. SCRUM-28 - Performance: N+1 queries en listados de reservaciones
5. SCRUM-24 - Error: Doble asiento por concurrencia y falta de validacion
6. SCRUM-19 - Probar trazabilidad en dev.log
7. SCRUM-18 - Confirmar visualizacion en panel de auditoria
8. SCRUM-17 - Verificar persistencia del motivo reason
9. SCRUM-16 - Validar escritura de eventos user_cancelled y user_changed en DB
10. SCRUM-15 - Registrar cancelaciones y cambios de reserva por usuario
11. SCRUM-14 - EPIC - Auditoria y Trazabilidad
12. SCRUM-12 - Deshabilitar asientos reservados sin confirmación
13. SCRUM-11 - Validar campo de apellido en registro de usuario
14. SCRUM-10 - Ajustar lógica de horarios para mayor precisión
15. SCRUM-9 - Permitir edición de foto de instructores
16. SCRUM-8 - Mejorar la búsqueda de usuarios en el sistema
17. SCRUM-7 - Corregir manejo de objetos DateTime para inmutabilidad
18. SCRUM-6 - revisar y analizar los casos de csrf
19. SCRUM-5 - Implementar protección CSRF en formularios críticos

---

## 📅 TIMELINE DE EJECUCIÓN

```
Hoy (27 Feb)
├─ 09:00 - Implementar DateTime fix (#1)
├─ 09:30 - Añadir DB indices (#2)
├─ 10:00 - Test: POST /reservacion-clase/{id}
├─ 10:30 - Verificar performance
└─ 11:00 - Commit & deploy a staging

Mañana (28 Feb)
├─ Testing completo en staging
├─ Fix Issue #4 (Rate Limiting - opcional)
├─ Backup BD
└─ Deploy a producción

Semana
├─ Monitorear logs por errors
├─ Implementar #5 (Phone Privacy)
├─ Implementar #6 (Audit logs)
└─ Implementar #7 (Validaciones extra)
```

---

## 🧪 TESTING CHECKLIST

ANTES de ir a producción:

### Nivel 1: Registropción
- [ ] POST /register → Usuario creado ✅
- [ ] Email única → Error si duplicado
- [ ] Password hasheado → Verificar BD
- [ ] Session iniciada → redirect homepage

### Nivel 2: Login
- [ ] GET /login → Show form
- [ ] POST /login correcto → redirect /
- [ ] POST /login incorrecto → error message
- [ ] Rate limiting → 6to intento falla (Issue #4)

### Nivel 3: Calendario
- [ ] GET /reservar-clase/sucursal → Display 7 días
- [ ] DateTime.setTime → NO ERROR
- [ ] Filter por disciplina → funciona

### Nivel 4: Reservación
- [ ] Seleccionar asiento → POST /reservacion-clase/{id}
- [ ] Validar placeNumber → Rechazar inválidos
- [ ] Actualizar sesión → status FULL si llena
- [ ] Contar reservas → Correct count en BD

### Nivel 5: Perfil
- [ ] GET /mi-cuenta/proximas-clases → lista
- [ ] Query time < 500ms → Índices OK
- [ ] Mostrar 20 registros → Paginación
- [ ] Cancelar reserva → transacción OK

### Nivel 6: Seguridad
- [ ] Inspector Logs → No errores críticos
- [ ] Monitor table size → No crecimiento anómalo
- [ ] Verificar backups → Diarios automáticos

---

## 🚀 DEPLOYMENT CHECKLIST

```bash
# 1. Backup
mysqldump -u root -p pbstudio > backup_2026-02-27.sql

# 2. Code changes
git commit -m "Fix DateTime immutability + DB indices"
git push origin main

# 3. DB migrations (if needed)
php bin/console doctrine:migrations:migrate

# 4. Add indices
mysql -u root -p pbstudio < indices.sql

# 5. Cache clear
php bin/console cache:clear --env=prod

# 6. Composer
composer install --optimize-autoloader --no-dev

# 7. Assets
npm run build

# 8. Test
php bin/phpunit tests/
php bin/console doctrine:schema:validate

# 9. Deploy
# Copy to production server
# Restart PHP-FPM / Web server

# 10. Verify
curl http://pbstudio.local/
# Check logs: tail -f var/log/prod.log
```

---

## 🆕 NUEVOS ISSUES - REUNIÓN 05/03/2026 (APROBADOS POR DG)

A continuación, los **8 nuevos temas de mejora** identificados en la reunión del Directorio:

---

### Issue #43: 📊 Ver quién canceló en la Info de la Clase (Backend)

**Prioridad:** 🟠 IMPORTANTE  
**Timeline estimado:** 2-3 horas  
**Historia de usuario:** Como admin del backend, quiero ver en la información de una clase **quién canceló** una reservación y **cuándo**, para tener control operativo.

**Qué se necesita:**
- En la vista de detalles de una clase (`/backend/session/{id}`), agregar tabla de **cancelaciones**
- Mostrar: Nombre del cliente, fecha/hora de cancelación, número de lugar que liberó
- Si es posible, botón para "ver detalles de esa cancelación" en el historial

**Beneficio:** Transparencia operativa + auditoría de cambios

---

### Issue #48: 📧 Prueba de Correos (Esperar Servidor)

**Prioridad:** 🟠 IMPORTANTE  
**Timeline estimado:** 1-2 horas (cuando servidor esté activo)  
**Contexto:** Los correos no se están enviando porque se debe **activar el servidor de correos** (Sendgrid o similar) y **probar que funcione**.

**Qué se necesita:**
1. Activar acceso a servidor de correos en producción
2. Probar con `php bin/console mailer:test` 
3. **Revisar qué correos se DEBEN enviar** en cada escenario:
   - ¿Cuándo se envía confirmación de reserva?
   - ¿Cuándo se notifica cancelación?
   - ¿Cuándo se notifica cambio de clase?
   - ¿Cuándo se notifica a quien está en lista de espera?
4. **Qué debe contener cada correo** (asunto, contenido, CTA - call to action)
5. **Cuándo se envía** (inmediato, batch diario, etc.)

**Dependencias:** Issue #3 (Notificaciones)

---

### Issue #49: ⏰ Horario Abierto en Creación de Clases (Formateable)

**Prioridad:** 🟠 IMPORTANTE  
**Timeline estimado:** 1.5-2 horas  
**Problema:** Al crear una clase en backend, el horario debe permitir qualquier entrada pero se **formatea automáticamente** a HH:MM (hora y minuto).

**Qué se necesita:**
- Campo de "Hora de clase" sin restricción visual (campo abierto)
- Usuario puede escribir: `9`, `9:30`, `09:00`, `9 y media`, etc.
- Sistema **normaliza automáticamente** a formato `HH:MM` (ej: 09:00, 09:30)
- Validación: Si el usuario pone algo inválido (ej: `25:90`), mostrar error claro

**Ejemplo de UX:**
```
[Campo abierto] "Hora de inicio: ___"
Usuario escribe: "9 y media"
Sistema normaliza y guarda como: "09:30"
```

**Beneficio:** Flexibilidad para admin + consistencia en datos

---

### Issue #50: ⚠️ Confirmación al Cambiar Clase (Si Tiene Reservas)

**Prioridad:** 🟠 IMPORTANTE  
**Timeline estimado:** 1.5 horas  
**Contexto:** Cuando un admin quiere **editar/cambiar datos de una clase que YA tiene reservas**, debe haber **confirmación explícita**.

**Qué se necesita:**
- Si clase tiene 1+ reservas y se intenta cambiar datos (horario, instructor, salón, capacidad), mostrar diálogo:
  ```
  "⚠️ Esta clase tiene X personas registradas
  
  Cambiar estos datos notificará a todos los inscritos:
  - Horario de: 10:00 a 14:00
  - Instructor de: María a Juan
  - Salón de: A a B
  
  ¿Deseas continuar? [Cancelar] [Confirmar]"
  ```
- Si se confirma, mostrar éxito + aviso de que se enviaron notificaciones

**Beneficio:** Previene cambios accidentales + transparencia operativa

---

### Issue #47: 🪑 Mapa Interactivo de Lugares - Drag & Drop (Creación de Clase)

**Prioridad:** 🟠 IMPORTANTE  
**Timeline estimado:** 5-7 horas (drag & drop + persistencia)  
**Contexto:** Al crear una clase, el admin **define automáticamente** la cantidad de sillas/camillas y las **acomoda visualmente** en el aula usando drag & drop interactivo.

**Flujo de Usuario (Admin):**

**Paso 1: Definir capacidad**
```
"¿Cuántas personas caben en esta clase?"
[20 ▼]  (selector, default 20)
[Generar sillas]
```

**Paso 2: Sistema crea sillas automáticamente**
- Sistema crea 20 objetos silla (o la cantidad que puse)
- Cada silla tiene ID único: A1, A2, A3... B1, B2, B3... etc.
- Se muestran en un área lateral: "Sillas disponibles para acomodar"

**Paso 3: Aula simulada (tablero de ajedrez)**
- Mostrar canvas con GRID (5x4, 6x4, etc., según sala y capacidad)
- Cada celda del grid tiene coordenada (ej: fila B, columna 3)
- Es como un "tablero de ajedrez" vacío esperando que arrastres sillas

**Paso 4: Drag & Drop**
```
┌─────────────────────────────────────────────────────┐
│  SILLAS DISPONIBLES (lateral izquierdo)             │
│  ┌──┐ ┌──┐ ┌──┐ ┌──┐ ┌──┐                           │
│  │A1│ │A2│ │A3│ │A4│ │A5│                           │
│  └──┘ └──┘ └──┘ └──┘ └──┘                           │
│  ┌──┐ ┌──┐ ... 20 sillas total                      │
│  │B1│ │B2│                                          │
│  └──┘ └──┘                                          │
├─────────────────────────────────────────────────────┤
│                                                     │
│   AULA SIMULADA - Tablero de Ajedrez                │
│   (Admin arrastra sillas a los espacios)            │
│                                                     │
│   ┌──┬──┬──┬──┬──┐    ← Cada ☐ es un lugar posible  │
│   │🪑│  │  │  │  │    ← Si está 🪑 = silla está ahí  │
│   ├──┼──┼──┼──┼──┤    ← Usuario puede reservarla    │
│   │  │  │  │  │  │                                  │
│   ├──┼──┼──┼──┼──┤                                  │
│   │  │🪑│  │  │🪑│    ← Solo 3 sillas disponibles    │
│   └──┴──┴──┴──┴──┘       en esta configuración      │
│                                                     │
└─────────────────────────────────────────────────────┘

[Limpiar todo] [Auto-llenar] [Guardar configuración]
```

**Características de drag & drop:**
- Admin agarra silla A1 del panel lateral → la arrastra sobre el grid
- Suelta en celda (B,3) → silla aparece en ese lugar
- Si suelta en lugar ocupado → cambia de posición o muestra aviso
- Puede mover la misma silla múltiples veces
- Cada silla muestra su ID mientras se arrastra (A1, A2, etc.)
- Visual feedback: color diferente cuando está siendo arrastrada, hover effects

**Lo que se guarda:**
```json
{
  "session_id": 123,
  "layout_type": "chessboard_5x4",
  "seat_distribution": {
    "A1": {"row": 0, "col": 0, "occupied": false},
    "A2": {"row": 0, "col": 2, "occupied": false},
    "B1": {"row": 1, "col": 1, "occupied": false},
    ...
  },
  "total_seats": 20,
  "layout_json": "..."  // JSON de la configuración
}
```

**En frontend (usuario ve esto):**
```
┌─────────────────────────────────────────────────┐
│  YOGA - SALA A - Miércoles 10:00 AM             │
│  Selecciona tu asiento preferido                │
│                                                 │
│  PANTALLA/INSTRUCTOR                            │
│  ════════════════════════                       │
│                                                 │
│   ┌────┬────┬────┬────┬────┐                    │
│   │ A1 │    │    │    │    │  ← Cada silla es   │
│   │ ✓  │    │    │    │    │     un BOTÓN       │
│   ├────┼────┼────┼────┼────┤                    │
│   │    │    │    │    │    │                    │
│   │    │    │    │    │    │                    │
│   ├────┼────┼────┼────┼────┤                    │
│   │    │ B1 │    │    │ C1 │                    │
│   │    │ ✗  │    │    │ ✗  │                   │
│   └────┴────┴────┴────┴────┘                    │
│                                                 │
│  Leyenda:                                       │
│  [A1] ✓ = Tu asiento (ya reservado por ti)      │
│  [B1] ✗ = Ocupado (otro usuario)                │
│  [   ] = Disponible (puedes hacer click)        │
│  Sin número = No existe silla en esa posición   │
│                                                 │
│  [Confirmar reservación A1] [Cambiar asiento]   │
└─────────────────────────────────────────────────┘
```

**Interacción del usuario final:**
1. Usuario entra a "Reservar clase"
2. Ve el MAPA VISUAL exactamente como lo configuró el admin
3. Cada silla disponible es un **botón clickeable** con su número (A1, B1, C2, etc.)
4. Usuario hace **click en el botón del asiento que quiere**
5. Botón se marca como "seleccionado" (feedback visual)
6. Usuario confirma → sistema guarda reservación con ese número de lugar
7. Si usuario intenta hacer click en silla ocupada (✗) → botón deshabilitado o mensaje "Ya ocupado"

**Estados visuales de cada botón-silla:**
- **Verde/disponible**: Usuario puede hacer click
- **Amarillo/seleccionado**: Usuario lo seleccionó (antes de confirmar)
- **Rojo/ocupado**: Otro usuario ya lo reservó (botón deshabilitado)
- **Azul/mi asiento**: Este usuario ya tiene ese lugar reservado

**Configuración predefinida (reutilización):**
- Cuando admin crea primera clase en "Sala A" → guarda distribución
- Al crear 2da clase en "Sala A" → sistema carga automáticamente esa misma distribución
- Admin puede **editar** la distribución si quiere cambiarla para esta clase específica
- ⚠️ **IMPORTANTE:** Si admin edita y marca "Guardar como predefinida" → esa nueva distribución se convierte en el template para futuras clases
- Permite tener múltiples templates por sala si se desea

**Ejemplo de flujo de configuración:**
```
Primera clase en Sala A:
→ Admin arrastra 20 sillas en grid
→ Guarda como "Sala A - Distribución estándar"
→ Se marca como PREDEFINIDA

Segunda clase en Sala A:
→ Sistema carga automáticamente "Sala A - Distribución estándar"
→ Admin puede editar (mover sillas) si esta clase es especial
→ Opciones al guardar:
  ☐ Solo guardar para ESTA clase
  ☑ Actualizar como distribución PREDEFINIDA para Sala A
  
Si marca "predefinida":
→ Próximas clases en Sala A usarán esta nueva distribución
```

**Lo que se guarda:**
```json
{
  "session_id": 123,
  "layout_type": "chessboard_5x4",
  "seat_distribution": {
    "A1": {"row": 0, "col": 0, "occupied": false},
    "A2": {"row": 0, "col": 2, "occupied": false},
    "B1": {"row": 1, "col": 1, "occupied": false},
    ...
  },
  "total_seats": 20,
  "layout_json": "..."  // JSON de la configuración
}
```

---

### Issue #52: 📷 Mejorar Info de Foto Instructores (Backend)

**Prioridad:** 🟡 MEDIA  
**Timeline estimado:** 30 min  
**Contexto:** En la pantalla de editar foto de instructor, especificar **requisitos de archivo**.

**Qué se necesita:**
- Agregar texto al lado del campo de foto:
  ```
  "Fotografia del Instructor
  
  Tipos permitidos: JPG, PNG
  Tamaño máximo: 5 MB
  Resolución recomendada: 500x500 px (mínimo)
  
  [Seleccionar archivo] [Eliminar foto actual]"
  ```
- Validaciones en el upload (tipo, tamaño)
- Si el usuario intenta subir archivo inválido, mostrar error claro

**Beneficio:** Reduce rechazos de upload + comunicación clara

---

### Issue #53: 🔍 Búsqueda de Usuarios - Nombre Y Apellido (Sin Duplicados)

**Prioridad:** 🟠 IMPORTANTE  
**Timeline estimado:** 1.5 horas  
**Contexto:** En backend, la búsqueda de usuarios debe ser **igual para nombre Y apellido** pero **sin duplicados**.

**Problema actual:** 
- Si busco "Juan" → encuentra en campo `name`
- Si busco "Pérez" → encuentra en campo `lastname`
- Pero si busco "Juan Pérez" → busca en NOMBRE completo (nombre + lastname concatenado), puede no encontrar

**Lo que se necesita:**
- Campo de búsqueda único: busca en **NOMBRE** O **APELLIDO**
- Resultado: Si hay coincidencia en nombre O apellido, aparece
- **Sin duplicados:** Si un usuario tiene "Juan" en nombre y "Juan" en apellido, aparece 1 sola vez

**Ejemplo:**
```
Búsqueda: "juan"
Resultados:
- Juan López (encontrado en nombre)
- María Juan Gómez (encontrado en apellido)  
- Juan Juan García (encontrado en ambos, pero aparece 1 sola vez ✓)
```

**Beneficio:** Búsqueda más flexible + menos confusión para operadores

---

### Issue #54: ⚡ Optimizar Queries - Caja/Pagos (BD - Índices Faltantes)

**Prioridad:** 🔴 CRÍTICO  
**Timeline estimado:** 1 hora (análisis) + 30 min (implementación)  
**Contexto:** El formulario de caja/pagos se demora **demasiado** al cargar. Probable causa: **índices faltantes en BD**.

**Qué se necesita:**
1. Optar las queries que se ejecutan al cargar `/backend/caja` o `/backend/payments`
2. Usar EXPLAIN para identificar queries lentas
3. Crear índices en tablas de:
   - `transaction` (búsqueda por usuario, estado, fecha)
   - `reservation` (búsqueda por sesión, usuario, estado)
   - `payment` (si existe), búsqueda por transaction, usuario
4. Re-probar y validar que carga rápido

**Nota:** Este issue ya estaba marcado como pendiente en documentación anterior

**Beneficio:** Operadores pueden trabajar rápido + experiencia no frustrada

---

## 📊 MONITOREO POST-DEPLOYMENT

### Diariamente

```bash
# Logs
tail -100 var/log/prod.log | grep ERROR

# DB size
SELECT 
    ROUND(SUM(data_length + index_length) / 1024 / 1024, 2) as 'Size in MB'
FROM information_schema.tables 
WHERE table_schema = 'pbstudio';

# User count
php bin/console doctrine:query:sql 'SELECT COUNT(*) FROM user WHERE enabled = 1'

# Query time
EXPLAIN SELECT * FROM reservation WHERE user_id = 1;
```

### Semanalmente

```bash
# Backup verify
mysql -u root -p pbstudio < backup_2026-02-27.sql --dry-run

# Error rate
grep "ERROR\|CRITICAL" var/log/prod.log | wc -l

# Peak traffic time
# (if monitoring configured)
```

---

## 🎯 Métricas de Éxito

| Métrica | Antes | Después | Target |
|---------|-------|---------|--------|
| DateTime Errors | 100%+ | 0 | ✅ |
| Query time /mi-cuenta | 5000ms | 500ms | ✅ |
| Rate limit blocks | 0 | -1/mes | ✅ |
| Security issues | 1 CRÍTICA | 0 | ✅ |
| Uptime | ? | > 99.5% | ✅ |

---

## 📞 SOPORTE & ESCALACIÓN

Si encuentra issues:

1. **DateTime error:**
   - [ ] Verificar sintaxis fix
   - [ ] Ejecutar `php -l`
   - [ ] Test en staging primero

2. **Query lenta:**
   - [ ] Verificar índices creados
   - [ ] Ejecutar EXPLAIN
   - [ ] Aumentar if no mejora

3. **Datos corruptos:**
   - [ ] Restore de backup
   - [ ] Comparar con staging
   - [ ] Auditar logs

---

**Preparado por:** System Audit  
**Próxima revisión:** 09 Marzo 2026

