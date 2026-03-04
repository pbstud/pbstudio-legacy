# 🔍 ANÁLISIS PROFUNDO - Validaciones de Código

**Fecha:** 04 Marzo 2026  
**Ejecutado por:** System Code Analysis  
**Severidad total:** 3 issues críticos nuevos identificados  
**Timeline:** Issue #47, #48, #49  

---

## 📌 Resumen Ejecutivo

Durante auditoría de control de acceso y null-safety, se identificaron **3 issues críticos** en flujos de reservación y transacciones:
- **#47:** Confirmación de reserva con getUser() null-unsafe
- **#48:** Multiple repository finds sin NULL checks (race condition risk)
- **#49:** Loop de lista de espera sin transacción atómica

Estos issues pueden provocar **Exceptions 500** en producción y **data inconsistency** en casos de concurrencia.

---

## 🔴 NUEVOS ISSUES

### Issue #47: 🔴 ReservationController::confirm() - Null-Unsafe getUser()

**Severidad:** 🔴 CRÍTICA  
**Ubicación:** [src/Controller/ReservationController.php](../src/Controller/ReservationController.php#L81-L100)  
**Líneas de código:** 81-100  
**Estado:** ⚠️ REQUIERE FIX INMEDIATO

#### Descripción

El método `confirm()` valida `ROLE_USER` pero luego usa `getUser()` con cast incorrecto que puede fallar:

```php
#[Route('/reservacion-clase/{id}', name: 'reservation_confirm', methods: ['GET', 'POST'])]
public function confirm(
    Request $request,
    Session $session,
    // ...
): Response {
    if (!$this->isGranted('ROLE_USER')) {
        return $this->render('login/_reserve_links.html.twig');
    }

    $user = $this->getUser();  // ❌ AQUÍ: $user podría ser null
    // ... resto del código
}
```

#### Problema

1. **Validación incompleta:** `isGranted('ROLE_USER')` valida pero luego hay paso sin garantía
2. **Casting incorrecto:** `/** @var User $user */` falso si el sistema permite null
3. **Error 500:** Si `$user` es null, métodos posteriores como `$user->getId()` lanzan error

#### Riesgo

- **Severidad:** 🔴 CRÍTICA (causa Exception 500)
- **Impacto:** Bloquea reservaciones momentáneamente hasta reinicio
- **Probabilidad:** Media (concurrencia, session timeout)

#### Casos de Fallo

```php
// POST /reservacion-clase/123
// Session expirada pero isGranted() pasó

$user = $this->getUser();  // NULL
$reservationService->reservate($user, ...);  // ValueError
```

#### Fix Recomendado

```php
#[Route('/reservacion-clase/{id}', name: 'reservation_confirm')]
public function confirm(
    Request $request,
    Session $session,
    ReservationService $reservationService,
): Response {
    // Validar seguridad del usuario
    $user = $this->getUser();
    if (!$user) {
        throw $this->createAccessDeniedException('Usuario no autenticado');
    }

    // Resto del código
    $this->isGranted('ROLE_USER');  // Double check
    
    // Ahora $user está garantizado
    $reservationService->reservate($user, $session, ...);
}
```

O alternativa con atributo:

```php
#[Route('/reservacion-clase/{id}', name: 'reservation_confirm')]
#[IsGranted('ROLE_USER')]  // ← AGREGAR
public function confirm(
    Request $request,
    Session $session,
): Response {
    $user = $this->getUser();  // Ahora garantizado no-null
    // ...
}
```

#### Tiempo Estimado
15-20 minutos

#### Test
```bash
1. POST /reservacion-clase/1 con sesión expirada → debe redirigir/403, NO error 500
2. POST /reservacion-clase/1 con usuario válido → debe completar reserva
```

#### Relación con otros Issues
- Relacionado: Issue #26 (POST sin CSRF)
- Relacionado: Issue #30 (Checkout sin usuario)

---

### Issue #48: 🔴 multiple Controllers - find() sin NULL Check

**Severidad:** 🔴 CRÍTICA  
**Ubicación:** 
- [src/Controller/Backend/SessionDayController.php](../src/Controller/Backend/SessionDayController.php#L53-L66, #L175-L190)
- [src/Controller/Backend/DashboardController.php](../src/Controller/Backend/DashboardController.php#L50-L79)
- [src/Controller/Backend/UserController.php](../src/Controller/Backend/UserController.php#L329)
- [src/Controller/Backend/CouponController.php](../src/Controller/Backend/CouponController.php#L100)

**Líneas clave:** SessionDayController#53-66, SessionDayController#190, etc.  
**Estado:** ⚠️ REQUIERE FIX INMEDIATO

#### Descripción

Múltiples controllers ejecutan queries con `.find()` sin validar si el resultado es NULL, causando acceso a propiedades/métodos en objetos null:

```php
// SessionDayController::newBranchOffice()
$branchOffice = $branchOfficeRepository->find($branchOfficeId);
// ❌ NO VALIDA SI ES NULL
$key = $session->getId()...  // Error si $session es null

// DashboardController::backTest()
$session = $sessionRepository->find($request->query->get('id'));
// ❌ NO VALIDA SI ES NULL
var_dump('Date start: ', $dateStart);
$dateStart = \DateTimeImmutable::createFromInterface($dateStartValue);
// Error si $session es null

// UserController
$session = $sessionRepository->find($request->request->get('session_id'));
// ❌ NO VALIDA SI ES NULL
// Uso implícito posterior
```

#### Problema

1. **Race condition:** ID existe en request pero se deletea antes del find()
2. **NULL dereference:** Acceso a propiedades de null → Error 500
3. **Sin validación:** No hay `if (!$entity)` antes de usar

#### Riesgo

- **Severidad:** 🔴 CRÍTICA (Error 500)
- **Impacto:** Pages crash si entidad no existe
- **Probabilidad:** Media-Alta (deleteos concurrentes, URLs invalidadas)

#### Casos de Fallo

```php
// DELETE /admin/coupon/1
// GET /backend/coupon/1/... → 500 (coupon ya no existe)

$coupon = $couponRepository->find($packageId);  // NULL
$coupon->getName();  // Error: Trying to get property of null
```

#### Ubicaciones Específicas

| Archivo | Línea | Entidad | Fix |
|---------|-------|---------|-----|
| SessionDayController | 53-66 | branchOffice | Agregar null check |
| SessionDayController | 175-190 | session | Agregar null check |
| DashboardController | 53 | session | Agregar null check |
| UserController | 329 | session | Agregar null check |
| CouponController | 100 | package | Agregar null check |

#### Fix Recomendado (Patrón)

```php
// ❌ ANTES
$entity = $repository->find($id);
$data = $entity->getSomeProperty();  // ERROR si null

// ✅ DESPUÉS
$entity = $repository->find($id);
if (!$entity) {
    throw $this->createNotFoundException('Entidad no encontrada');
}
$data = $entity->getSomeProperty();  // Seguro
```

Aplicar a todas las ubicaciones:

```php
// SessionDayController::newBranchOffice()
$branchOffice = $branchOfficeRepository->find($branchOfficeId);
if (!$branchOffice) {
    throw $this->createNotFoundException('Sucursal no encontrada');
}

// DashboardController::backTest()
$session = $sessionRepository->find($request->query->get('id'));
if (!$session) {
    throw $this->createNotFoundException('Sesión no encontrada');
}

// Etc.
```

#### Tiempo Estimado
30-40 minutos (5 ubicaciones × 6-8 minutos cada una)

#### Test
```bash
1. GET /backend/something/999 (id que no existe) → 404, NO 500
2. DELETE /admin/coupon/1, luego GET /admin/coupon/1 → 404
3. Verificar en logs: Ningún "Trying to get property of null"
```

#### Impacto
- **Mejora:** Manejo robusto de casos edge
- **Impacto UX:** Mensajes claros de "no encontrado" vs crash 500

---

### Issue #49: 🔴 WaitingListService::checkAndReserve() - Sin Transacción Atómica

**Severidad:** 🔴 CRÍTICA  
**Ubicación:** [src/Service/WaitingList/WaitingListService.php](../src/Service/WaitingList/WaitingListService.php#L68-L85)  
**Línea código clave:** 68-85  
**Estado:** ⚠️ REQUIERE FIX INMEDIATO

#### Descripción

El método que procesa lista de espera usa un loop con `.flush()` individual en cada iteración, sin transacción:

```php
public function checkAndReserve(Session $session, int $placeNumber): void
{
    $waitingLists = $this->waitingListRepository->getAvailableBySession($session);

    foreach ($waitingLists as $waitingList) {
        $waitingList->setIsAvailable(false);

        try {
            $user = $waitingList->getUser();
            $this->reservationService->reservate($user, $session, $placeNumber, $waitingList);
            $this->em->flush();  // ❌ FLUSH INDIVIDUAL (problema)

            break;
        } catch (ReservationException $e) {
            $waitingList->setError($e->getMessage());
            $this->em->flush();  // ❌ FLUSH INDIVIDUAL AQUÍ TAMBIÉN
        }
    }
}
```

#### Problema

1. **Sin transacción:** Múltiples flushes fuera de transacción = commits parciales
2. **Mid-transaction failure:** Si falla a mitad de loop, estado inconsistente
3. **Data race:** Otro proceso podría interferir entre flushes
4. **Rollback incorrecto:** Si 2do flush falla, 1er cambio ya fue persistido

#### Riesgo

- **Severidad:** 🔴 CRÍTICA (Data inconsistency)
- **Impacto:** Múltiples usuarios reservados del mismo asiento
- **Probabilidad:** Media (si hay inserts concurrentes)

#### Caso de Fallo Específico

```
Escenario: 2 usuarios en lista de espera para asiento #1
Tiempo:

T1: checkAndReserve() - Usuario A
    └─ setIsAvailable(false)
    └─ flush()  ← COMMITS

T2: [OTRO PROCESO] intenta hacer lo mismo
    └─ setIsAvailable(false) User B
    └─ flush()  ← COMMITS

T3: reservate(User A) → OK, asiento #1 asignado
    └─ flush()  ← COMMITS
    
T4: reservate(User B) → DUPLICADO ASIENTO ❌ (inconsistencia BD)
    └─ flush()  ← COMMITS, error no reversible

Resultado: Dos usuarios con mismo asiento #1
```

#### Fix Recomendado

```php
public function checkAndReserve(Session $session, int $placeNumber): void
{
    // ✅ USAR TRANSACCIÓN ATÓMICA
    $this->em->transactional(function() use ($session, $placeNumber) {
        $waitingLists = $this->waitingListRepository->getAvailableBySession($session);

        foreach ($waitingLists as $waitingList) {
            $waitingList->setIsAvailable(false);

            try {
                $user = $waitingList->getUser() 
                    ?? throw new \RuntimeException('User not found');
                
                $this->reservationService->reservate($user, $session, $placeNumber, $waitingList);
                // ✅ NO FLUSH AQUÍ - transacción maneja auto-commit
                
                break;
            } catch (ReservationException $e) {
                $waitingList->setError($e->getMessage());
            }
        }
        // ✅ ÚNICO FLUSH AL FINAL (dentro de transacción)
    });
}
```

O alternativa con try-catch manual:

```php
public function checkAndReserve(Session $session, int $placeNumber): void
{
    $this->em->beginTransaction();
    
    try {
        $waitingLists = $this->waitingListRepository->getAvailableBySession($session);

        foreach ($waitingLists as $waitingList) {
            $waitingList->setIsAvailable(false);

            try {
                $user = $waitingList->getUser();
                $this->reservationService->reservate($user, $session, $placeNumber, $waitingList);
                break;
            } catch (ReservationException $e) {
                $waitingList->setError($e->getMessage());
            }
        }
        
        $this->em->flush();  // ✅ ÚNICO FLUSH AL FINAL
        $this->em->commit();
    } catch (\Throwable $e) {
        $this->em->rollback();  // ✅ Rollback atómico si falla
        throw $e;
    }
}
```

#### Tiempo Estimado
25-30 minutos

#### Test
```bash
1. Crear 2 usuarios en waiting list
2. Trigger checkAndReserve() de ambos simultáneamente
3. Verificar: Solo 1 usuario tiene reserva, otro sigue en waiting list
4. DB: Sin duplicados en asiento/usuario
```

#### Validación
```sql
-- Verificar sin duplicados
SELECT session_id, place_number, COUNT(*) as count
FROM reservation
GROUP BY session_id, place_number
HAVING count > 1;
-- Resultado: VACÍO (sin duplicados)
```

---

## 📊 Resumen de Fixes

| Issue | Severidad | Componente | Tiempo | Prioridad |
|-------|-----------|-----------|--------|-----------|
| #47 | 🔴 CRÍTICA | ReservationController | 15 min | 1️⃣ INMEDIATO |
| #48 | 🔴 CRÍTICA | Backend Controllers | 35 min | 1️⃣ INMEDIATO |
| #49 | 🔴 CRÍTICA | WaitingListService | 30 min | 1️⃣ INMEDIATO |

**Tiempo Total:** ~80 minutos  
**Timeline:** Implementar HOY antes de producción

---

## ✅ Validación Diferencial vs PLAN_ACCION.md

### Nuevos vs Documentados

| Issue | En PLAN_ACCION.md | Estado |
|-------|-------------------|--------|
| #47 (confirm null-unsafe) | ❌ NO | Nuevo, crítico |
| #48 (find null checks) | ❌ NO | Nuevo, crítico |
| #49 (transacciones) | ❌ NO | Nuevo, crítico |
| #1 DateTime | ✅ SÍ | Ya resuelto |
| #12 phpinfo | ✅ SÍ | Pendiente |
| #17 Type(digit) | ✅ SÍ | Pendiente |
| #19 ROLE_USER waitlist | ✅ SÍ | Pendiente |

---

## 🎯 Conclusión

Se identificaron **3 issues nuevos críticos** en validaciones de null-safety y transacciones que pueden causar **Exceptions 500** y **data inconsistency** en producción.

**Recomendación:** Implementar fixes ANTES de cualquier deploy a producción.

**Próxima revisión:** Post-fix + test de integridad de datos

---

**Ejecutado por:** System Code Analysis  
**Fecha:** 04 Marzo 2026 17:30 UTC  
**Versión:** 1.0
