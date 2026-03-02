# 📚 Documentación Completa - PB STUDIO

**Fecha de actualización:** 27 de febrero de 2026  
**Versión del proyecto:** Symfony 6.4  
**Estado BD:** ✅ Operativa (14,566 usuarios, 488,789 registros totales)

---

## 🎯 1. Visión General del Proyecto

**PB STUDIO** es una plataforma web de gestión de clases fitness diseñada en **Symfony 6.4** que permite:

- 👥 Usuarios para reservar y pagar clases (fitness/pilates/etc)
- 💳 Gestión de paquetes de clases y transacciones
- 🎓 Administración de instructores, disciplinas y salas de ejercicio
- 📅 Sistema de reservaciones con lista de espera
- 🎟️ Gestión de cupones de descuento
- 📧 Comunicación por email automática
- 💰 Integración con pasarela de pagos **Conekta**

**Datos principales (Estado actual):**
- 14,566 usuarios registrados
- 69,982 sesiones programadas
- 336,768 reservaciones
- 62,929 transacciones
- 3,826 usuarios en lista de espera

---

## 🏗️ 2. Stack Tecnológico

### Backend
```
PHP 8.2.30 (CLI)
Symfony 6.4
Doctrine ORM 2.x
MySQL 5.7
Node.js 20.20.0
npm 10.8.2
Composer 2.7
Git
```

### Frontend
```
Bootstrap 3.4
jQuery 3.x
Webpack Encore
Gentelella 1.4.0 (Admin template)
Select2 4.1.0
Summernote 0.8.18
PNotify 3.0.0
Remodal 1.1.1
jQuery Smart Wizard 3.3.1
Parsley.js 2.9.2
```

### Extensiones PHP Requeridas
- ✅ `pdo_mysql` - Conexión MySQL
- ✅ `curl` - HTTP requests
- ✅ `openssl` - Seguridad SSL
- ✅ `zip` - Manejo de archivos
- ✅ `ctype`, `iconv`, `session`, `simplexml`, `tokenizer` (built-in)

---

## 📁 3. Estructura de Carpetas

```
pbstudio/
├── src/
│   ├── Controller/           # Controllers de rutas
│   ├── Entity/               # Entidades Doctrine (modelos)
│   ├── Repository/           # Repositorios (consultas BD)
│   ├── Service/              # Servicios de negocio
│   ├── Form/                 # FormTypes (formularios)
│   ├── Event/                # Event listeners
│   ├── EventListener/        # Listeners personalizados
│   ├── Command/              # Comandos Symfony
│   ├── Security/             # Providers de seguridad
│   ├── Menu/                 # Generadores de menú (KNP)
│   ├── Model/                # Modelos sin persistencia
│   ├── Twig/                 # Extensiones Twig
│   ├── Util/                 # Utilidades y helpers
│   └── Kernel.php
│
├── templates/                # Plantillas Twig
│   ├── base.html.twig
│   ├── layout.html.twig
│   ├── home/                 # Landing page
│   ├── reservation/          # Reservaciones
│   ├── checkout/             # Pago
│   ├── profile/              # Perfil usuario
│   ├── backend/              # Admin panel
│   ├── mail/                 # Email templates
│   └── ...
│
├── public/
│   ├── index.php             # Entry point
│   ├── build/                # Assets compilados
│   │   ├── app.*.js
│   │   ├── backend.*.js
│   │   └── ...
│   ├── media/                # Imágenes
│   └── favicon/
│
├── config/
│   ├── bundles.php           # Bundles habilitados
│   ├── services.yaml         # Servicios
│   ├── routes.yaml           # Rutas
│   ├── packages/             # Configuración de paquetes
│   │   ├── framework.yaml
│   │   ├── security.yaml
│   │   ├── doctrine.yaml
│   │   ├── twig.yaml
│   │   ├── messenger.yaml
│   │   └── ...
│   └── routes/               # Rutas específicas
│
├── assets/                   # Assets frontend (fuente)
│   ├── app.js
│   ├── backend.js
│   ├── js/
│   ├── styles/
│   └── fonts/
│
├── migrations/               # Migraciones Doctrine
├── translations/             # Traducciones (es.yaml)
├── tests/                    # Tests unitarios
├── var/
│   ├── cache/
│   ├── sessions/
│   └── log/
│
├── .env                      # Variables de entorno
├── composer.json
├── package.json
├── webpack.config.js
├── phpunit.xml.dist
└── README.md
```

---

## 🗄️ 4. Entidades y Modelo de Datos

### 4.1 Entidades Principales

#### **User** (usuarios)
```
Tabla: user (14,566 registros)
├── id (PK)
├── name, lastname
├── email (UNIQUE)
├── phone (UNIQUE)
├── password (hasheada)
├── roles (JSON - admin, user)
├── birthday
├── emergencyContactName
├── emergencyContactPhone
├── isActive
├── createdAt, updatedAt (Timestampable)
│
Relaciones:
├── OneToMany → Reservation
├── OneToMany → Transaction
└── OneToMany → WaitingList
```

#### **Session** (sesiones de clase)
```
Tabla: session (69,982 registros)
├── id (PK)
├── dateStart, timeStart
├── type (GROUP / INDIVIDUAL)
├── status (OPEN=1, FULL=2, CLOSED=0, CANCEL=-1)
├── exerciseRoomCapacity
├── availableCapacity
├── placesNotAvailable (array)
├── information (notas)
│
Relaciones:
├── ManyToOne → ExerciseRoom
├── ManyToOne → Discipline
├── ManyToOne → Staff (instructor)
├── ManyToOne → BranchOffice
├── OneToMany → Reservation
└── OneToMany → WaitingList
```

#### **Reservation** (reservaciones)
```
Tabla: reservation (336,768 registros)
├── id (PK)
├── placeNumber (número de lugar)
├── isAvailable
├── attended (asistencia)
├── cancellationAt (fecha cancelación)
├── changedAt (fecha cambio)
│
Relaciones:
├── ManyToOne → User
├── ManyToOne → Session
├── ManyToOne → Transaction
└── Index: place_number_idx
```

#### **Transaction** (transacciones de pago)
```
Tabla: transaction (62,929 registros)
├── id (PK)
├── chargeMethod (FREE, CASH, CARD, POS)
├── chargeId, chargeAuthCode
├── cardName, cardType, cardBrand, cardIssuer
├── cardLast4
├── status (PENDING=0, PAID=1, DENIED=-1, CANCEL=2)
├── packageTotalClasses, packageAmount, packageDaysExpiry
├── packageIsUnlimited, packageType
├── isExpired, expirationAt
├── isCompleted
├── notes
│
Relaciones:
├── ManyToOne → User
├── ManyToOne → Package
├── OneToMany → Reservation
└── Index: status_idx, charge_method_idx
```

#### **Package** (paquetes de clases)
```
Tabla: package (39 registros)
├── id (PK)
├── totalClasses
├── amount (decimal 10,2)
├── type (GROUP / INDIVIDUAL)
├── daysExpiry (días vigencia)
├── isUnlimited (paquete ilimitado)
├── specialPrice
├── isActive, public
├── newUser (solo para nuevos)
├── altText
│
Relaciones:
├── OneToMany → Transaction
└── OneToMany → CouponPackage
```

#### **Session + Reservation + Transaction** (WORKFLOW CLAVE)
```
Flujo de compra/reserva:
1. User ve calendar (Session list)
   Session {dateStart, Discipline, Instructor, Room, Status, AvailableCapacity}
   
2. User selecciona sesión → quiere reservar
   
3a. Si Session.status = OPEN y placeNumber disponible:
      → Crear Reservation {User, Session, placeNumber, isAvailable=true}
      
3b. Si Session sin lugares:
      → Agregar a WaitingList {User, Session}
      
4. User paga:
   → Crear Transaction {User, Package, chargeMethod, status}
   → Si status=PAID → Reservation.isAvailable=true
   → Si status=DENIED → Liberar lugar o eliminar reserva
   
5. Transaction expira (daysExpiry):
   → isExpired=true
   → Liberar reservaciones
```

#### **Coupon** + **CouponHistory**
```
Tabla: coupon (74 registros)
├── id, name, code (UNIQUE)
├── discount (0-100%)
├── dateStart, dateEnd
├── maxUses, usedCount
├── packages (relación muchos-a-muchos)

Tabla: coupon_history (124 registros)
├── Registra cada aplicación de cupón
├── user, coupon, transaction, discount aplicado

Tabla: coupon_package (306 registros)
├── Relación M-to-M: Coupon ↔ Package
```

#### **Staff** (instructores/personal)
```
Tabla: staff (32 registros)
├── id, name, lastname, email
├── isActive
├── isInstructor (puede dictar clases)

Relaciones:
├── OneToOne → StaffProfile
├── OneToMany → InstructorsDisciplines
├── OneToMany → Session (instructor)
└── OneToMany → StaffBranchOffice
```

#### **Discipline** (disciplinas: pilates, yoga, etc)
```
Tabla: discipline (6 registros)
├── id, name
├── isActive

Relaciones:
├── OneToMany → Session
└── OneToMany → InstructorsDisciplines
```

#### **BranchOffice** (sucursales)
```
Tabla: branch_office (3 registros)
├── id, name, slug (UNIQUE)
├── place (ubicación)
├── isActive, public

Relaciones:
├── OneToMany → ExerciseRoom
└── OneToMany → Session
```

#### **ExerciseRoom** (salas de ejercicio)
```
Tabla: exercise_room (10 registros)
├── id, name, capacity
├── branchOffice
├── isActive

Relaciones:
├── ManyToOne → BranchOffice
└── OneToMany → Session
```

#### **WaitingList** (lista de espera)
```
Tabla: waiting_list (3,826 registros)
├── user → User
├── session → Session
├── position (posición en lista)
├── createdAt (auto-ordenado)
```

#### **Configuration** (configuración)
```
Tabla: configuration (5 registros)
├── id
├── setting (key)
├── value
├── type
```

#### **Post** (blog/noticias)
```
Tabla: post (4 registros)
├── id, title, slug (UNIQUE)
├── type (static)
├── content (TEXT)
├── isActive
├── Implementa: Sluggable, Timestampable
```

---

## 🔄 5. Flujo de Trabajo Principal

### 5.1 FLUJO DE RESERVA

```
┌─────────────────────────────────────────────────────────┐
│ 1. USUARIO NO AUTENTICADO                               │
│    ↓ Ver calendar de clases                             │
│    GET /reservar-clase/{branch_slug}                    │
│    ReservationController::calendar()                    │
└─────────────────────────────────────────────────────────┘
    ↓
    Desplegar sesiones por semana (periodo)
    ├── Filtrar por: sucursal, disciplina, instructor
    ├── Mostrar: fecha, hora, instructor, sala, disponibilidad
    └── Sessions = SessionRepository::getCalendar()
    
┌─────────────────────────────────────────────────────────┐
│ 2a. USUARIO SELECCIONA SESIÓN - CON CUPO DISPONIBLE     │
│     ↓ Click en sesión → Mostrar detalles                │
│     GET /reservar-clase/detalle/{sessionId} (AJAX)      │
│     ReservationController::detail()                     │
└─────────────────────────────────────────────────────────┘
    ↓
    Datos disponibles en Session:
    ├── Instructor
    ├── Disciplina
    ├── Lugares disponibles (placeNumbers)
    ├── Si Reservation.isAvailable y no existe para ese user
    │   → Mostrar botón "Reservar"
    └── Require autenticación para reservar
    
┌─────────────────────────────────────────────────────────┐
│ 2b. USUARIO SELECCIONA SESIÓN - SIN CUPO                │
│     ↓ Mostrar "Sin disponibilidad"                      │
│     ↓ Opción para agregar a "Lista de Espera"           │
│     POST /lista-de-espera                               │
│     WaitingListController::create()                     │
└─────────────────────────────────────────────────────────┘
    ↓
    WaitingListService::add()
    ├── Verificar que no existe ya
    ├── Crear WaitingList {user, session, createdAt}
    ├── Enviar email de confirmación
    └── Cuando haya cupo: enviar email de notificación
    
┌─────────────────────────────────────────────────────────┐
│ 3. USUARIO AUTENTICADO HACE RESERVA                     │
│    ↓                                                     │
│    POST /reservar-clase {sessionId, placeNumber}        │
│    ReservationController::reserve()                     │
└─────────────────────────────────────────────────────────┘
    ↓
    ReservationService::create()
    ├── Verificar Session.status = OPEN
    ├── Verificar placeNumber no usado
    ├── Verificar disponibilidad
    ├── Crear Reservation {user, session, placeNumber, isAvailable=false}
    ├── Si Transaction.isExpired → Liberar lugar
    ├── Enviar email de confirmación
    └── Retornar: Necesita pagar / Libre (si es FREE)
    
┌─────────────────────────────────────────────────────────┐
│ 4. PAGO - SELECCIONAR PAQUETE Y MÉTODO DE PAGO          │
│    ↓                                                     │
│    GET /carrito/checkout                                │
│    CheckoutController::index()                          │
└─────────────────────────────────────────────────────────┘
    ↓
    Mostrar paquetes disponibles (Package.isActive)
    ├── Si User.isNew → mostrar Package.newUser=true
    ├── Aplicar cupón (descuento)
    ├── Seleccionar método de pago:
    │   ├── FREE (sin costo)
    │   ├── CASH (pago en efectivo)
    │   ├── CARD (tarjeta de crédito via Conekta)
    │   └── POS (terminal de punto de venta)
    └── Si CARD → Redirigir a Conekta
    
┌─────────────────────────────────────────────────────────┐
│ 5a. PAGO CON TARJETA (Conekta)                          │
│     ↓                                                    │
│     POST /carrito/payment/conekta                       │
│     CheckoutController::paymentConekta()                │
└─────────────────────────────────────────────────────────┘
    ↓
    ConektaService::createCharge()
    ├── Enviar: amount, description, customerInfo
    ├── Recibir: chargeId, authCode, status
    └── Si approved (status=PAID):
        ├── Crear Transaction {user, package, chargMethod=CARD, chargeId, status=PAID}
        ├── Reservation.transaction = se asigna
        ├── Reservation.isAvailable = true
        ├── Registrar coupon_history si aplica
        ├── Liberar de lista de espera (si fue espera)
        ├── Enviar email de confirmación de pago
        └── Redirigir a /carrito/success
    
┌─────────────────────────────────────────────────────────┐
│ 5b. PAGO MANUAL (FREE, CASH, POS)                       │
│     ↓                                                    │
│     POST /carrito/payment/manual                        │
│     CheckoutController::paymentManual()                 │
└─────────────────────────────────────────────────────────┘
    ↓
    TransactionService::create()
    ├── chargeMethod = FREE / CASH / POS
    ├── Create Transaction {status=PAID para FREE, PENDING para otros}
    ├── Si FREE → Reservation.isAvailable = true
    ├── Si PENDING → Requiere confirmación admin
    └── Enviar email
    
┌─────────────────────────────────────────────────────────┐
│ 6. CICLO DE VIDA DE TRANSACTION                         │
│    ├── PENDING (0) → Esperando Conekta callback        │
│    ├── PAID (1) → Pago confirmado                      │
│    ├── DENIED (-1) → Pago rechazado                    │
│    └── CANCEL (2) → Cancelado por usuario/admin        │
└─────────────────────────────────────────────────────────┘
    ├── Expiración automática:
    │   ├── isExpired = true después de daysExpiry
    │   ├── Liberar Reservation
    │   └── Tareas CRON: app:transaction:checkexpiration
    │
    └── Si User cancela:
        ├── Cancelacion.at = ahora
        ├── Si Session.dateStart aún no pasó:
        │   ├── Liberar lugar
        │   ├── Notificar WaitingList (para cambiar al siguiente)
        │   └── Enviar email
        └── NO se reembolsa dinero (regla de negocio)

┌─────────────────────────────────────────────────────────┐
│ 7. SESIÓN Y ASISTENCIA                                  │
│    ├── Día de la sesión (dateStart + timeStart)        │
│    ├── Admin marca "Attendance" en Reservation         │
│    ├── Reservation.attended = true                     │
│    └── Descuenta 1 clase del Transaction               │
└─────────────────────────────────────────────────────────┘
```

### 5.2 CICLO DE VIDA DE RESERVA

```
Session.status = OPEN
  ↓
User hace Reservation
  ├── sin pago (gratis) → Reservation.isAvailable=true
  └── con pago → Espera Transaction
      ↓
      Si Transaction.isExpired → Liberar Reservation
      Si Transaction.status=PAID → Reservation.isAvailable=true
      Si Transaction.status=DENIED → No aprobada
      
      ↓ (Día de la sesión)
      
      Admin marca: Reservation.attended=true
      DescuentaClases de Transaction.packageTotalClasses
      
      ↓ (Si es última clase)
      
      Transaction.isCompleted=true
      Transaction.isExpired=true
```

---

## 🎮 6. Controllers Principales

### **ReservationController**
- `GET /reservar-clase/{slug}` → Mostrar calendario
- `GET /reservar-clase/detalle/{sessionId}` → Detalles sesión (AJAX)
- `POST /reservar-clase` → Crear reserva
- `DELETE /reservar-clase/{id}` → Cancelar reserva
- CRUD admin de reservas

### **CheckoutController**
- `GET /carrito/checkout` → Carrito y selección de paquete
- `POST /carrito/payment/conekta` → Pago con Conekta
- `POST /carrito/payment/manual` → Pago manual
- `GET /carrito/success` → Confirmación pago exitoso
- Webhook para callbacks de Conekta

### **SessionController**
- Admin CRUD: crear, editar, eliminar sesiones
- Estado de sesiones
- Asistencia (marcar attended)
- Reapertura de sesiones si falla por razones

### **PackageController**
- Admin CRUD: paquetes de clases
- Precios especiales

### **CouponController**
- Admin CRUD: cupones
- Validación de cupones

### **UserController / HomeController**
- Perfil de usuario
- Historial de transacciones
- Mis reservas
- Cambiar contraseña

### **StaffController**
- Admin CRUD: instructores
- Calendario de instructores
- Disciplinas que dicta

### **SecurityController / RegistrationController**
- Login/logout
- Registro de usuarios
- Recuperación de contraseña

---

## ⚙️ 7. Servicios Principales

### **ReservationService**
```php
// Crear, actualizar, validar reservaciones
ReservationService::create($user, $session, $placeNumber)
ReservationService::cancel($reservation)
ReservationService::mark($reservation, $attended)
```

### **TransactionService**
```php
// Gestionar transacciones de pago
TransactionService::create($user, $package, $chargeMethod)
TransactionService::markExpired() // CRON
TransactionService::complete()
```

### **WaitingListService**
```php
// Gestionar lista de espera
WaitingListService::add($user, $session)
WaitingListService::remove($user, $session)
WaitingListService::promoteNext($session) // Cuando se libera lugar
```

### **CouponService**
```php
// Validar y aplicar cupones
CouponService::validate($code)
CouponService::apply($coupon, $user)
```

### **ConektaService**
```php
// Integración con pasarela Conekta
ConektaService::createCharge($amount, $description)
ConektaService::verifyWebhook($payload)
```

### **Mailers**
- `ReservationMailer` → Confirmación de reserva
- `TransactionMailer` → Confirmación de pago
- `UserMailer` → Bienvenida, cambio contraseña
- `WaitingListMailer` → Notificación de lugar disponible
- `ResettingMailer` → Recuperación contraseña

---

## 📊 8. Rutas y Endpoints Principales

### **Frontend (Público)**
```
GET  /                                    → Homepage
GET  /reservar-clase/{slug}               → Ver clases (calendario)
GET  /reservar-clase/detalle/{id}         → Detalle sesión (AJAX)
POST /reservar-clase                      → Hacer reserva
GET  /paquetes                            → Listar paquetes
POST /carrito/checkout                    → Ir a checkout
POST /carrito/payment/conekta             → Pagar con Conekta
POST /carrito/payment/manual              → Pagar manual
GET  /carrito/success                     → Confirmación pago
GET  /usuario/perfil                      → Mi perfil
GET  /usuario/reservas                    → Mis reservas
GET  /usuario/transacciones               → Mis transacciones
POST /usuario/cambiar-contraseña          → Cambiar pass
GET  /login                               → Login
POST /login                               → Procesar login
POST /logout                              → Logout
GET  /registro                            → Registro
POST /registro                            → Crear usuario
```

### **Backend (Admin)**
```
GET  /admin                               → Dashboard
GET  /admin/sesiones                      → Ver sesiones
GET  /admin/sesiones/new                  → Crear sesión
POST /admin/sesiones                      → Guardar sesión
GET  /admin/sesiones/{id}/edit            → Editar sesión
POST /admin/sesiones/{id}/edit            → Actualizar
DELETE /admin/sesiones/{id}               → Eliminar
PUT  /admin/sesiones/{id}/marcar-asistencia → Marcar asistencia
GET  /admin/reservas                      → Ver reservas
POST /admin/reservas/{id}/cancelar        → Cancelar reserva
GET  /admin/paquetes                      → Ver paquetes
GET  /admin/paquetes/new                  → Crear paquete
GET  /admin/cupones                       → Ver cupones
GET  /admin/cupones/new                   → Crear cupón
GET  /admin/usuarios                      → Listar usuarios
GET  /admin/transacciones                 → Listar transacciones
```

---

## 🗄️ 9. Configuración Base de Datos

### **Estadísticas Actuales (27/Feb/2026)**

| Tabla | Records | Propósito |
|-------|---------|-----------|
| **user** | 14,566 | Usuarios del sistema |
| **reservation** | 336,768 | Reservaciones (CORE) |
| **session** | 69,982 | Sesiones programadas (CORE) |
| **transaction** | 62,929 | Transacciones de pago (CORE) |
| **waiting_list** | 3,826 | Lista de espera |
| **coupon** | 74 | Cupones disponibles |
| **coupon_history** | 124 | Historiales de uso de cupones |
| **coupon_package** | 306 | Relación cupón-paquete |
| **package** | 39 | Paquetes de clases |
| **staff** | 32 | Personal/instructores |
| **staff_profile** | 25 | Perfiles de staff |
| **staff_branch_office** | 12 | Asignación staff-sucursal |
| **discipline** | 6 | Disciplinas (yoga, pilates, etc) |
| **branch_office** | 3 | Sucursales |
| **exercise_room** | 10 | Salas de ejercicio |
| **instructors_disciplines** | 73 | Qué disciplinas enseña cada instructor |
| **post** | 4 | Blog/noticias |
| **configuration** | 5 | Configuración del sistema |
| **messenger_messages** | 0 | Cola de mensajes |
| **doctrine_migration_versions** | 5 | Histórico de migraciones |
| **TOTAL** | **488,789** | - |

### **Collation y Character Set**
```sql
-- Configuración actualmente en MySQL:
GLOBAL character_set_server = utf8 (requiere utf8mb3)
GLOBAL collation_server = utf8_general_ci (requiere utf8mb3_general_ci)

-- Comando para aplicar (ya ejecutado 27/Feb):
SET GLOBAL sql_mode = (SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))
SET GLOBAL character_set_server = utf8mb3
SET GLOBAL collation_server = utf8mb3_general_ci

-- Para hacerlo permanente, agregar a my.ini ([mysqld]):
sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION'
character-set-server=utf8mb3
collation-server=utf8mb3_general_ci
```

### **Índices Importantes**
```
reservation:
  - place_number_idx → Búsquedas rápidas por número de lugar
  
transaction:
  - status_idx → Búsquedas por estado de pago
  - charge_method_idx → Búsquedas por método de pago
  
session:
  - Índice en dateStart (implícito por queries)
  - Índice en status
  
user:
  - UNIQUE email, phone
```

---

## 📅 10. CRON Jobs Requeridos

```bash
# Verificar y expirar paquetes que pasaron fecha
0 0 * * * php bin/console app:transaction:checkexpiration --no-debug --env=prod 2>&1 >> var/log/transaction.checkexpiration.log

# Auto-cerrar sesiones que pasaron
*/15 * * * * php bin/console app:session:autoclosing --no-debug --env=prod 2>&1 >> var/log/session.autoclosing.log
```

---

## 🔐 11. Seguridad y Roles

### **Roles de User**
```php
ROLE_USER      // Usuario general (puede reservar)
ROLE_INSTRUCTOR // Instructor (puede ver su calendario)
ROLE_STAFF     // Personal administrativo
ROLE_ADMIN     // Administrador (acceso completo)
```

### **Providers de Seguridad**
- Autenticación basada en Usuario y contraseña
- Hashing: bcrypt
- CSRF protection en formularios
- Validación de email único
- Validación de teléfono único

---

## 📧 12. Templates Principales

### **Frontend**
```
templates/
├── home/index.html.twig               → Homepage con instructores
├── reservation/
│   ├── calendar.html.twig             → Calendario de sesiones
│   ├── calendar_ajax.html.twig        → Respuesta AJAX
│   ├── detail.html.twig               → Detalle sesión
│   └── my_reservations.html.twig      → Mis reservas
├── checkout/
│   ├── index.html.twig                → Seleccionar paquete
│   ├── success.html.twig              → Confirmación pago
│   └── conekta_form.html.twig         → Formulario Conekta
├── profile/
│   ├── index.html.twig                → Mi perfil
│   ├── transactions.html.twig         → Mis transacciones
│   └── edit.html.twig                 → Editar perfil
├── contact/contact.html.twig          → Formulario contacto
└── security/
    ├── login.html.twig                → Login
    └── registration.html.twig         → Registro
```

### **Backend (Admin)**
```
templates/backend/
├── session/
│   ├── index.html.twig                → Listar sesiones
│   ├── new.html.twig                  → Nueva sesión
│   ├── edit.html.twig                 → Editar sesión
│   └── show.html.twig                 → Ver detalles
├── reservation/new.html.twig          → Crear reserva manual
├── package/
│   ├── index.html.twig                → Listar paquetes
│   ├── new.html.twig                  → Nuevo paquete
│   └── edit.html.twig                 → Editar paquete
├── coupon/
│   ├── index.html.twig                → Listar cupones
│   └── new.html.twig                  → Nuevo cupón
├── user/
│   ├── index.html.twig                → Listar usuarios
│   └── edit.html.twig                 → Editar usuario
└── dashboard.html.twig                → Dashboard admin
```

### **Emails**
```
templates/mail/
├── reservation_created.html.twig      → Confirmación reserva
├── reservation_cancelled.html.twig    → Cancelación
├── transaction_paid.html.twig         → Pago confirmado
├── waiting_list_promoted.html.twig    → Lugar disponible
├── user_welcome.html.twig             → Bienvenida
└── resetting_password.html.twig       → Recuperar contraseña
```

---

## 🚀 13. Cómo Levantar el Proyecto

```powershell
# 1. Verificar entorno
php -v
php -m | Select-String pdo_mysql
Get-Service MySQL57
Test-NetConnection -ComputerName 127.0.0.1 -Port 3306

# 2. Instalar dependencias
php composer.phar install
npm install

# 3. Configurar .env (si no existe)
@'
APP_ENV=dev
APP_SECRET=ChangeMe
DATABASE_URL="mysql://root:exael@127.0.0.1:3306/pbstudio"
MESSENGER_TRANSPORT_DSN=doctrine://default?queue_name=default
'@ | Out-File -FilePath .env -Encoding ascii

# 4. Base de datos
php bin/console doctrine:database:create --if-not-exists
php bin/console doctrine:migrations:sync-metadata-storage

# 5. Assets
npm run build

# 6. Cache
php bin/console cache:clear

# 7. Servidor
php -S 127.0.0.1:8000 -t public
# Acceder: http://127.0.0.1:8000
```

---

## 📝 14. Variables de Entorno Requeridas

```env
# Básico
APP_ENV=dev|prod
APP_SECRET=your_secret_key_here
APP_DEBUG=false

# Base de datos
DATABASE_URL="mysql://user:pass@host:port/dbname"

# Email (para transacciones de negocio)
MAILER_DSN=smtp://user:pass@smtp.example.com:port
ADMIN_EMAIL=admin@pbstudio.com

# Conekta (pasarela de pagos)
CONEKTA_PUBLIC_KEY=pk_live_...
CONEKTA_PRIVATE_KEY=sk_live_...

# Messenger (if using queue system)
MESSENGER_TRANSPORT_DSN=doctrine://default?queue_name=default
```

---

## 📚 15. Estructura de Tipos y Validaciones

### **Tipos Principales en Entidades**
```php
// En Session
TYPE_INDIVIDUAL = "individual"
TYPE_GROUP = "group"

// En Session - Status
STATUS_OPEN = 1       // Abierta, aceptando reservas
STATUS_FULL = 2       // Sin disponibilidad
STATUS_CLOSED = 0     // Cerrada (pasó fecha)
STATUS_CANCEL = -1    // Cancelada
STATUS_NOT_CANCELED = -5

// En Transaction - Métodos
CHARGE_METHOD_FREE = 'payment.free'          // Gratis
CHARGE_METHOD_CASH = 'payment.cash'          // Efectivo
CHARGE_METHOD_CARD = 'payment.card'          // Tarjeta (Conekta)
CHARGE_METHOD_POS = 'payment.pos'            // Terminal POS

// En Transaction - Status
STATUS_PENDING = 0    // Esperando confirmación
STATUS_PAID = 1       // Pagado
STATUS_DENIED = -1    // Rechazado
STATUS_CANCEL = 2     // Cancelado

// En Post
TYPE_STATIC = 'static'

// En Reservation
isAvailable       // true = puede asistir, false = lugar ocupado/pendiente
attended          // true = asistió
```

---

## 🎓 16. Comportamientos Especiales (Traits)

### **entities** implementan:
```php
TimestampableInterface  // createdAt, updatedAt automáticosUniqueEntity          // Validación de unicidad (email, phone, code, slug)
SluggableInterface      // Slug automático (url-friendly)
UserInterface           // Para User entity
PasswordAuthenticatedUserInterface // Contraseñas hasheadas
```

---

## 🔍 17. Queries Comunes

```php
// Sesiones de la próxima semana
SessionRepository::getCalendar($period, $branchOffice)

// Reservas de un usuario
ReservationRepository::findByUser($user)

// Transacciones pendientes de expiración
TransactionRepository::findExpired()

// Cupones válidos
CouponRepository::findValid()

// Instructores activos
StaffRepository::getAllActiveInstructors()

// Disciplinas del sistema
DisciplineRepository::getAllActives()

// Sucursales públicas
BranchOfficeRepository::getPublic()
```

---

## 🐛 18. Troubleshooting Común

| Problema | Causa | Solución |
|----------|-------|----------|
| "ONLY_FULL_GROUP_BY" error | sql_mode muy restrictivo | `SET GLOBAL sql_mode=...` (ver punto 9) |
| Session no tienen tamaño | Status mal configurado | Verificar Session.status y availableCapacity |
| Usuario no puede reservar | Transaction expirada | Ejecutar `app:transaction:checkexpiration` |
| Email no se envía | Mailer no configurado | Configurar MAILER_DSN en .env |
| Conekta falla | Credenciales inválidas | Verificar CONEKTA_PUBLIC/PRIVATE_KEY |

---

## 📞 19. Contacto y Equipo

- **Desarrollado con:** Symfony 6.4, Doctrine ORM, MySQL 5.7
- **Último backup:** 15/01/2026 (pbstudio_15ene2026_back.sql.gz)
- **Última migración:** 20/09/2024
- **Usuarios activos:** 14,566
- **Sesiones próximas 30 días:** ~2,300

---

**Documentación generada:** 27/02/2026  
**Estado:** ✅ Proyecto Operativo  
**Base de datos:** ✅ Configurada y poblada  
**Stack:** ✅ Completo y funcional
