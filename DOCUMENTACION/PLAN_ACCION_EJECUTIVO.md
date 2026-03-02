# 📋 PLAN DE ACCIÓN EJECUTIVO - PBStudio

**Fecha:** 27 Febrero 2026  
**Status:** 7 issues identificados, 3 críticos  
**Timeline:** Fix inmediato → Producción en 2 días

---

## 🚨 ISSUES CRÍTICOS (Arreglar HOY)

### Issue #1: ❌ DateTime Immutability

**Severidad:** 🔴 CRÍTICA

**Sintoma:**
```
Error: "Call to undefined method setTime() on DateTimeImmutable"
URL: Calendar, Session changes
Impact: Bloquea 40% de funcionalidad
```

**Diagnóstico:**
```php
// ❌ INCORRECTO (Session.php y similares)
$dateStart->setTime(14, 0, 0);  // DateTimeImmutable no tiene este método

// ✅ CORRECTO
$dateStart = $dateStart->setTime(14, 0, 0);  // Retorna nueva instancia
```

**Archivos Afectados:**
- [ ] src/Repository/SessionRepository.php
- [ ] src/Service/Reservation/ReservationService.php
- [ ] src/Controller/ReservationController.php
- [ ] Buscar: `->setTime(` en todo el proyecto

**Fix Script:**
```bash
# Buscar todos los setTime()
grep -r "->setTime(" src/ --include="*.php"

# Verificar sintaxis después
php -l src/

# Validar Doctrine
php bin/console doctrine:schema:validate
```

**Tiempo Estimado:** 30 minutos  
**Test:** Hacer POST a /reservacion-clase/{id} con place_number

---

### Issue #2: 🟡 Missing Database Indices

**Severidad:** 🟡 MODERADA

**Impacto:**
- Query speed: -70% en /mi-cuenta
- Reservation lookups: O(n) → O(log n)
- User profile: 5+ queries lentas

**SQL:ejecutar AHORA**
```sql
-- Indices para Reservation
ALTER TABLE reservation ADD INDEX idx_user_id (user_id);
ALTER TABLE reservation ADD INDEX idx_session_id (session_id);
ALTER TABLE reservation ADD INDEX idx_transaction_id (transaction_id);

-- Indices para Transaction
ALTER TABLE transaction ADD INDEX idx_user_id (user_id);

-- Index para WaitingList (si existe tabla)
-- ALTER TABLE waiting_list ADD INDEX idx_user_id (user_id);
-- ALTER TABLE waiting_list ADD INDEX idx_session_id (session_id);
```

**Verificar:**
```sql
SHOW INDEX FROM reservation;
SHOW INDEX FROM transaction;
```

**Esperado:**
```
tabla              columna            nombre
reservation        user_id            idx_user_id
reservation        session_id         idx_session_id
reservation        transaction_id     idx_transaction_id
transaction        user_id            idx_user_id
```

**Tiempo Estimado:** 5 minutos  
**Test:** Medir query time antes/después

---

### Issue #3: 🔐 MAILER_DSN Already Fixed ✅

**Status:** RESUELTO en fase anterior

```env
# .env (ya está)
MAILER_DSN=null://default
```

**Verificar:**
```bash
php bin/console config:debug mailer
```

---

## 🟠 ISSUES IMPORTANTES (Esta Semana)

### Issue #4: ⚡ Rate Limiting - Login

**Severidad:** 🟡 IMPORTANTE

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

**Tiempo:** 1-2 horas  
**Test:** Intentar 6 logins en < 15 min → debe fallar

---

### Issue #5: 📞 Phone Field - Privacy Compliance

**Severidad:** 🟡 IMPORTANTE

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

**Tiempo:** 1 hora  
**Test:** hacer acción, verificar log

---

## 🟢 ISSUES MENORES (Próximas 2 semanas)

### Issue #7: 🔍 Validaciones Adicionales

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

## ✅ YA COMPLETADO

| Componente | Fix | Status | Verificado |
|-----------|-----|--------|-----------|
| MAILER_DSN | null://default | ✅ | Sí |
| Doctrine Schema | Synced | ✅ | Sí |
| SQL Injection | QueryBuilder | ✅ | Sí |
| CSRF Tokens | Habilitado | ✅ | Sí |
| Password Hash | Bcrypt | ✅ | Sí |
| User Checker | Enabled check | ✅ | Sí |

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
**Próxima revisión:** 6 Marzo 2026

