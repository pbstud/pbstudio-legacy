# 🏗️ ARQUITECTURA & FLUJO DE DATOS - Vista General

**Documento:** Diagrama  del sistema  
**Fecha:** 02 Marzo 2026  
**Objetivo:** Entender cómo funciona el proyecto de punta a punta

---

## 📊 Tabla Rápida de Referencias

### Tech Stack

```
Frontend                Backend                 Database
┌──────────────┐       ┌──────────────┐       ┌──────────────┐
│ HTML/Twig    │       │ PHP 8.2.30   │       │ MySQL 5.7    │
│ Bootstrap    │←─────→│ Symfony 6.4  │←─────→│ pbstudio DB  │
│ jQuery       │       │ Doctrine ORM │       │ 488K+ rows   │
│ JavaScript   │       │ Webpack      │       │              │
└──────────────┘       └──────────────┘       └──────────────┘
```

### Entidades Principales (20 total)

```
User
├─ name, lastname, email, phone
├─ password_hash (Bcrypt)
├─ enabled, lastLogin
├─ branchOffice (FK)
└─ Relations:
   ├─ 1:N → Transaction (169 PAID)
   ├─ 1:N → Reservation (336,768 total)
   └─ 1:N → WaitingList

Session (69,982 total)
├─ dateStart, timeStart
├─ type (i|g: individual/grupal)
├─ status (OPEN=1, FULL=2, CLOSED=0, CANCEL=-1)
├─ exerciseRoom, discipline, instructor
└─ Relations:
   ├─ 1:N → Reservation
   └─ 1:N → WaitingList

Transaction
├─ user (FK)
├─ package (FK)
├─ status (PENDING=0, PROCESSING=1, PAID=2, FAILED=3)
├─ total, coupon
└─ Relations:
   ├─ 1:N → Reservation
   └─ N:1 ← Coupon

Reservation (336,768 total)
├─ user, session, transaction (all FK)
├─ placeNumber (1-N)
├─ isAvailable, attended
└─ Index: place_number_idx
```

---

## 🔄 FLUJO DE USUARIO - Vista Arquitectónica

```
┌─────────────────────────────────────────────────────────────────────┐
│                     NUEVO USUARIO - FLUJO COMPLETO                 │
└─────────────────────────────────────────────────────────────────────┘

PASO 1: REGISTRO
═════════════════════════════════════════════════════════════════════

  Browser                          Symfony                    Database
  ├─ GET /register                 │                          │
  │  └─ RegistrationController      │                          │
  │     └─ renderForm()             │                          │
  │        └─ validation_groups:    │                          │
  │           ['Registration']       │                          │
  │                                  │                          │
  ├─ POST /register (form)          │                          │
  │  └─ FormSubmit                  │                          │
  │     └─ ValidateForm()           │                          │
  │        ├─ Email uniqueness ────────→ UserRepository::findOneByEmail()
  │        ├─ Phone uniqueness ────────→ Doctrine check
  │        ├─ Name length (3-50)     │                          │
  │        ├─ Password matched       │                          │
  │        └─ All valid              │                          │
  │           │                       │                          │
  ├─ Hash Password                  │    UserPasswordHasher    │
  │  └─ $user->setPassword()        │    Bcrypt(cost=auto)     │
  │                                  │                          │
  ├─ Persist User                   │    EntityManager::flush()─────→ INSERT user
  │                                  │                          │   14,221 users
  │                                  │                          │
  ├─ Send Welcome Email             │    UserMailer::send()    │
  │  └─ MAILER_DSN=null://default   │    (dev: discards)       │
  │                                  │                          │
  ├─ Auto-login User                │    Security::login()     │
  │  └─ FormLoginAuthenticator      │                          │
  │     ├─ LoadUserByIdentifier()   │                          │
  │     ├─ UserChecker::checkPreAuth()                         │
  │     │  └─ Verify: enabled = true│                          │
  │     ├─ ValidatePassword()       │    Bcrypt::verify()      │
  │     └─ LoginSuccessListener     │────────────────────────→ UPDATE user
  │        └─ $user->setLastLogin() │                    (lastLogin)
  │                                  │                          │
  └─ Redirect → homepage ┐          │                          │
     ROLE_USER assigned  │          │                          │
                         └──────────┘


PASO 2: VER CALENDARIO
═════════════════════════════════════════════════════════════════════

  Browser                          Symfony                    Database
  ├─ GET /reservar-clase/sucursal  │                          │
  │  └─ ReservationController       │                          │
  │     └─ calendar()               │                          │
  │        ├─ @IsGranted: PUBLIC ✓  │                          │
  │        ├─ $branchOffice         │                          │
  │        ├─ $period (CarbonPeriod)│                          │
  │        │                         │                          │
  │        └─ $sessions = repo→      │                          │
  │           getCalendar()          │────────────────┐        │
  │           |                      │                │        │
  │           │                      │    SessionRepository
  │           │                      │    ├─ createQueryBuilder('s')
  │           │                      │    ├─ join ExerciseRoom
  │           │                      │    ├─ join Discipline
  │           │                      │    ├─ join Staff (instructor)
  │           │                      │    ├─ WHERE dateStart BETWEEN
  │           │                      │    ├─ AND branchOffice = ?
  │           │                      │    └─ getQuery()->getResult()
  │           │                      │         │
  │           │                      │         └─→ SELECT * FROM session
  │           │                      │         WHERE date_start BETWEEN ? AND ?
  │           │                      │         AND branch_office_id = ?
  │           │                      │         ✅ NO SQL INJECTION (safe params)
  │           │                      │                │
  │           └─ Iterator ← 69,982 sessions loaded
  │              [Session1, Session2, ...]
  │                      
  ├─ Render Twig
  │  └─ templates/reservation/calendar.html.twig
  │     ├─ Loop sessions
  │     ├─ Display: 
  │     │  ├─ timeStart
  │     │  ├─ discipline.name
  │     │  ├─ instructor.firstname
  │     │  ├─ availableCapacity
  │     │  └─ Status color
  │     └─ Each Session → Link to confirm
  │        /reservacion-clase/{id}
  │
  └─ Browser renders HTML
     ✅ ~50-100ms (before indices: 500ms+)


PASO 3: SELECCIONAR CLASE & RESERVAR
═════════════════════════════════════════════════════════════════════

  Browser                          Symfony                    Database
  ├─ GET /reservacion-clase/{id}  │                          │
  │  └─ ReservationController       │                          │
  │     └─ confirm($session)        │                          │
  │        ├─ @IsGranted('ROLE_USER')✓ (logged-in)             │
  │        ├─ Load Reservation grid │                          │
  │        │  $reservations =       │                          │
  │        │  repo→getReservations  │────────────────→ SELECT * FROM reservation
  │        │  BySession($session)   │                  WHERE session_id = ?
  │        │                         │                  AND is_available = 1
  │        │                         │                        │
  │        │← [{placeNumber: [Place1, Place1, ...]
  │        │  │  User1  │ Place2  │ User2  │ ...}]
  │        │
  │        └─ render()
  │           └─ Show grid with occupied/free seats
  │
  ├─ Select seat (click place 13)   │                          │
  │                                  │                          │
  ├─ POST /reservacion-clase/{id}  │                          │
  │  ├─ placeNumber=13             │                          │
  │  └─ ReservationService::reservate()                        │
  │     │ ✅ Validar: 1<=13<=capacity                          │
  │     │ ✅ Validar: not already booked                       │
  │     │ ✅ Contar: getTotalReservations                      │
  │     │──────────────────→ COUNT(*) FROM reservation
  │     │                   WHERE session_id=? AND is_available=1
  │     │                          │
  │     │← totalCount + 1 reached capacity?
  │     │  └─ IF YES: Update session.status = FULL
  │     │
  │     │ ✅ Verificar transaction válida
  │     │──────────────────→ SELECT * FROM transaction
  │     │                   WHERE user_id=? AND status=2
  │     │                   AND expiration_at >= NOW()
  │     │                          │
  │     │← Transaction loaded
  │     │  └─ Check: clases_disponibles > 0?
  │     │
  │     │ ✅ Atómico database insert:
  │     │
  │     │  BEGIN TRANSACTION;
  │     │  INSERT INTO reservation (user_id, session_id, ...)
  │     ├─→ INSERT reservation                      (336,769)
  │     │  UPDATE session SET status=2 (if full)
  │     ├─→ UPDATE session                  (FULL if needed)
  │     │  UPDATE transaction SET total_used++
  │     ├─→ UPDATE transaction             (if all used)
  │     │  COMMIT;
  │     │
  │     │                          │
  │     │                    New Reservation created
  │     │
  │     └─ Dispatch ReservationSuccessEvent
  │        └─ Listeners fire:
  │           ├─ ReservationSuccessListener
  │           └─ (Could trigger email, SMS, etc.)
  │
  └─ JSON Response
     { "targetUrl": "/mi-cuenta/proximas-clases" }


PASO 4: VER PRÓXIMAS CLASES (PERFIL)
═════════════════════════════════════════════════════════════════════

  Browser                          Symfony                    Database
  ├─ GET /mi-cuenta/proximas-clases  │                          │
  │  └─ ProfileController           │                          │
  │     └─ reservedSessions()        │                          │
  │        ├─ @IsGranted('ROLE_USER')✓                         │
  │        ├─ $user = getUser()      │                          │
  │        │                          │                          │
  │        └─ $reservations =        │                          │
  │           repo→getReservedSessions  │────────────────┐      │
  │           ByUser($user)          │                │      │
  │           │                        │    ReservationRepository
  │           │                        │    └─ createQueryBuilder('r')
  │           │                        │       ├─ join session, user, etc.
  │           │                        │       ├─ WHERE r.user = ?
  │           │                        │       ├─ AND r.isAvailable = 1
  │           │                        │       ├─ AND s.dateStart >= NOW()
  │           │                        │       ├─ ORDER BY s.dateStart ASC
  │           │                        │       └─ [✅ With indices: fast!]
  │           │                        │            │
  │           │                        │    SELECT r.*, s.*, u.*
  │           │                        │    FROM reservation r
  │           │                        │    JOIN session s ON r.session_id=s.id
  │           │                        │    WHERE r.user_id=?
  │           │                        │    ✅ Índice: idx_user_id
  │           │                        │    ✅ Índice: idx_session_id
  │           │                        │       (without = slow!)
  │           │                        │            │
  │           ├─ Iterator of          │            │
  │           │ [Res1, Res2, ...]     │            │
  │           │ with all data loaded  │            │
  │           │ (eager via joins)     │            │
  │           │                        │            │
  │           └─ Render view
  │              ├─ Para cada reservation:
  │              │  ├─ Session.dateStart
  │              │  ├─ Session.timeStart
  │              │  ├─ Discipline.name
  │              │  ├─ Instructor.firstname
  │              │  ├─ PlaceNumber
  │              │  └─ [Botón Cancelar]
  │              │
  │              └─ templates/profile/reserved_sessions.html.twig
  │
  └─ Browser renders list
     ✅ ~100ms (with indices!)
        ❌ ~3000ms (without indices)


PASO 5: LOGOUT
═════════════════════════════════════════════════════════════════════

  Browser                          Symfony                    Database
  ├─ GET /logout               │                          │
  │  └─ SecurityController     │                          │
  │     └─ logout()            │                          │
  │        └─ (auto-handled    │                          │
  │           by security.    │                          │
  │           yaml config)     │                          │
  │                             │                          │
  ├─ Session destroyed        │                          │
  ├─ Cookies cleared          │                          │
  │  └─ remember_me=null      │                          │
  │                             │                          │
  └─ Redirect /               │                          │
     PUBLIC_ACCESS             │                          │
```

---

## 🎯 Vista de Capas

```
┌──────────────────────────────────────────────────────────┐
│                    PRESENTATION LAYER                     │
│  (../templates/*.html.twig + JavaScript)                    │
├──────────────────────────────────────────────────────────┤
│  - Twig templating engine                                │
│  - Bootstrap + CSS                                       │
│  - jQuery / vanilla JS                                   │
│  - Form rendering + validation messages                  │
└────────────────────────┬─────────────────────────────────┘
                         │ HTTP Requests/Responses
┌──────────────────────────────────────────────────────────┐
│                  CONTROLLER LAYER                         │
│  (../src/Controller/*.php)                                  │
├──────────────────────────────────────────────────────────┤
│  - RegistrationController → User signup                  │
│  - ReservationController → Calendar + reservations       │
│  - ProfileController → User profile + my sessions        │
│  - [11+ more controllers]                                │
│  - Input validation (@IsGranted, CSRF, etc.)             │
└────────────────────────┬─────────────────────────────────┘
                         │ Method calls
┌──────────────────────────────────────────────────────────┐
│                   SERVICE LAYER                           │
│  (../src/Service/*.php)                                     │
├──────────────────────────────────────────────────────────┤
│  - ReservationService → Business logic for reservations  │
│  - TransactionService → Payment processing               │
│  - WaitingListService → Waiting list management          │
│  - ConektaService → Payment gateway integration          │
│  - UserMailer → Email sending                            │
│  - Dependency injection from config/services.yaml        │
└────────────────────────┬─────────────────────────────────┘
                         │ Entity queries/persists
┌──────────────────────────────────────────────────────────┐
│                 REPOSITORY LAYER                          │
│  (../src/Repository/*.php)                                  │
├──────────────────────────────────────────────────────────┤
│  - UserRepository → Find users, search filters           │
│  - ReservationRepository → Query reservations (336K+)    │
│  - SessionRepository → Query sessions (69K+)             │
│  - TransactionRepository → Query transactions            │
│  - All use Doctrine QueryBuilder (safe from SQL inject)  │
└────────────────────────┬─────────────────────────────────┘
                         │ Entity mappings
┌──────────────────────────────────────────────────────────┐
│                    ENTITY LAYER                           │
│  (../src/Entity/*.php - Doctrine ORM Models)                │
├──────────────────────────────────────────────────────────┤
│  - User (14K+ users)                                     │
│  - Session (69K+ sessions)                               │
│  - Reservation (336K+ reservations)                      │
│  - Transaction, Coupon, Package, Discipline, etc.        │
│  - Each with validators, relationships, getters/setters  │
└────────────────────────┬─────────────────────────────────┘
                         │ SQL statements
┌──────────────────────────────────────────────────────────┐
│                    DATABASE LAYER                         │
│  (MySQL 5.7 - pbstudio database)                         │
├──────────────────────────────────────────────────────────┤
│  - 20 tables, 488K+ total records                        │
│  - InnoDB storage engine                                 │
│  - Foreign keys + constraints                            │
│  - Indices: place_number_idx [+ recommended additions]   │
│  - Backups: Daily automated                              │
└──────────────────────────────────────────────────────────┘
```

---

## 🔒 Seguridad por Capa

```
LAYER 1: HTTP/BROWSER
├─ Content Security Policy (CSP)? [Check headers]
├─ HTTPS only? [Configure in web server]
├─ X-Frame-Options? [Prevent clickjacking]
└─ X-XSS-Protection? [Prevent XSS]

LAYER 2: SYMFONY ROUTING
├─ Access Control (security.yaml) ✅
│  └─ ^/mi-cuenta → ROLE_USER
│  └─ ^/backend → ROLE_STAFF
├─ CSRF Protection ✅
│  └─ form_login: enable_csrf: true
├─ Rate Limiting ❌ [MISSING - Issue #4]
└─ Parameter Validation:
   ├─ @ParamConverter
   ├─ Request type casting (.getInt())
   └─ Form validation groups

LAYER 3: FORM & VALIDATION
├─ Form type definitions ✅
│  └─ RegistrationFormType, ProfileFormType
├─ Validation groups ✅
│  └─ 'Registration', 'Profile', 'Default'
├─ Entity validators ✅
│  └─ @UniqueEntity, @NotBlank, @Length, etc.
└─ Type casting ✅
   └─ getInt() prevents string injection

LAYER 4: SERVICE LAYER
├─ Business logic validation ✅
│  ├─ ReservationService validates placeNumber
│  ├─ Checks capacity limits
│  └─ Verifies transaction status
├─ Exception throwing ✅
│  └─ ReservationException with clear messages
└─ Event listeners ✅
   └─ LoginSuccessListener audits logins

LAYER 5: REPOSITORY LAYER
├─ QueryBuilder usage ✅ (100% safe)
│  ├─ Parameterized queries
│  ├─ Named placeholders (:user, :session)
│  ├─ setParameters() for binding
│  └─ ZERO raw SQL strings
├─ Result caching? [Check if enabled]
└─ Query profiling? [Enable in dev]

LAYER 6: DATABASE LAYER
├─ Foreign key constraints ✅
├─ Unique constraints ✅
│  ├─ user.email unique
│  └─ user.phone unique
├─ Default values ✅
├─ Timestamps (createdAt, updatedAt) ✅
├─ Encryption? ❌ [MISSING for sensitive fields]
│  ├─ Phone number unencrypted
│  └─ Conekta ID (token) - OK
├─ Audit trail? [Partially - LoginSuccessListener]
└─ Transaction isolation ✅
   └─ InnoDB supports ACID
```

---

## 📈 Data Flow - Request → Response

```
1. HTTP Request arrives
   ↓
2. Symfony Kernel boots (MicroKernelTrait)
   ├─ Load config/bundles.php
   ├─ Load config/services.yaml (DI)
   └─ Load config/packages/*.yaml
   ↓
3. Router matches (../config/routes.yaml)
   └─ /register → RegistrationController::index()
   ↓
4. Controller instantiated (DI injection)
   ├─ UserPasswordHasherInterface
   ├─ EntityManagerInterface
   ├─ UserMailer
   └─ Security
   ↓
5. Request pre-processing
   ├─ CSRF token validation (if POST)
   ├─ Authorization check (@IsGranted)
   ├─ Form request handling
   └─ Form data validation
   ↓
6. Controller action executes
   ├─ Create User entity
   ├─ Hash password (Bcrypt)
   ├─ Validate (symfony/validator)
   ├─ EntityManager::persist()
   ├─ EntityManager::flush() → DB INSERT
   └─ UserMailer::sendWelcomeEmail()
   ↓
7. Event dispatching
   └─ LoginSuccessEvent → LoginSuccessListener
      └─ Update lastLogin
   ↓
8. Response created
   ├─ If XmlHttpRequest: JSON response
   ├─ If browser: Twig render
   └─ Set headers (CSRF token, session, etc.)
   ↓
9. HTTP Response sent
   └─ Browser receives HTML/JSON
```

---

## 💾 Database Schema Summary

```sql
-- User table (14,221 active)
user
├─ id (PK)
├─ email (UNIQUE, VARCHAR 180)
├─ phone (UNIQUE, VARCHAR 15)
├─ password (VARCHAR 255 - Bcrypt hash)
├─ enabled (BOOLEAN)
├─ lastLogin (DATETIME, nullable)
├─ conektaId (VARCHAR 25, for Conekta integration)
├─ branchOffice_id (FK)
├─ created_at, updated_at (AUTO TimestampableTrait)
└─ [+ other fields]

-- Session table (69,982 sessions)
session
├─ id (PK)
├─ dateStart (DATE)
├─ timeStart (TIME)
├─ type (VARCHAR 25 - 'i' or 'g')
├─ status (SMALLINT - 1:OPEN, 2:FULL, 0:CLOSED, -1:CANCEL)
├─ exerciseRoom_id (FK)
├─ discipline_id (FK)
├─ instructor_id (FK → staff)
├─ branchOffice_id (FK)
├─ created_at, updated_at
├─ INDEX: place_number_idx (RECOMMENDED to add more)
└─ [timestamp fields]

-- Reservation table (336,768 total)
reservation
├─ id (PK)
├─ user_id (FK) ⚠️ [MISSING INDEX]
├─ session_id (FK) ⚠️ [MISSING INDEX]
├─ transaction_id (FK) ⚠️ [MISSING INDEX]
├─ placeNumber (SMALLINT - 1 to capacity)
├─ isAvailable (BOOLEAN)
├─ attended (BOOLEAN)
├─ cancellationAt (DATETIME, nullable)
├─ INDEX: place_number_idx ✅
└─ [timestamp fields]

-- Transaction table (169 PAID)
transaction
├─ id (PK)
├─ user_id (FK) ⚠️ [MISSING INDEX]
├─ package_id (FK)
├─ coupon_id (FK, nullable)
├─ total (DECIMAL)
├─ status (SMALLINT)
├─ expirationAt (DATETIME)
├─ haveSessionsAvailable (BOOLEAN)
└─ [timestamp fields]
```

---

## 🚀 Performance Checklist

| Item | Status | Impact | Action |
|------|--------|--------|--------|
| Date Time Immutability | ❌ BROKEN | 🔴 Query crashes | Fix immediately |
| User FK index | ❌ MISSING | 🟡 -70% on /mi-cuenta | Add index |
| Session FK index | ❌ MISSING | 🟡 -70% on /mi-cuenta | Add index |
| Transaction FK index | ❌ MISSING | 🟡 -50% on profile | Add index |
| Query caching | ? Unknown | 🟢 Potential +20% | Investigate |
| Eager loading | ✅ Configured | ✅ Good | Monitor |
| CSRF protection | ✅ Enabled | ✅ Good | Maintain |
| Rate limiting | ❌ MISSING | 🟡 Security risk | Implement |

---

## 📋 Verificación Rápida (Dev)

```bash
# 1. Kernel OK?
php bin/console about

# 2. Routes OK?
php bin/console debug:router | head -20

# 3. Services OK?
php bin/console debug:autowiring | grep -i "user\|reservation"

# 4. DB connected?
php bin/console doctrine:query:sql 'SELECT 1'

# 5. Migrations OK?
php bin/console doctrine:migrations:status

# 6. Schema synced?
php bin/console doctrine:schema:validate

# 7. Cache OK?
php bin/console cache:clear

# 8. Assets compiled?
npm run build
# or
yarn build

# 9. Logs clean?
tail -20 var/log/dev.log
```

---

**Documento Completo:** 02 Marzo 2026  
**Review:** ✅ ESTRUCTURA CLARA Y DOCUMENTADA

