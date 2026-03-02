# 🗺️ Mapa de Relaciones - Base de Datos PB STUDIO

## Diagrama UML de Entidades

```
                    ┌────────────────────────┐
                    │    USER                │ ◀── Implements: UserInterface,
                    ├────────────────────────┤     PasswordAuthenticatedUserInterface,
                    │ id (PK)                │     TimestampableInterface
                    │ name (100)             │
                    │ lastname (100, nullable)
                    │ email (255, UK)        │
                    │ phone (15, UK, nullable)
                    │ password               │
                    │ roles (JSON)           │
                    │ birthday (DATE)        │
                    │ emergencyContactName   │
                    │ emergencyContactPhone  │
                    │ isActive (bool)        │
                    │ createdAt, updatedAt   │
                    └────────────────────────┘
                          │
          ┌───────────────┼───────────────┬────────────────┐
          │               │               │                │
          │ (OneToMany)   │ (OneToMany)   │ (OneToMany)    │ (OneToMany)
          │ RESERVATIONS  │ TRANSACTIONS  │ WAITING_LIST   │ STAFF
          │               │               │                │
          ▼               ▼               ▼                ▼
    ┌───────────────┐ ┌──────────────────────┐ ┌──────────────┐
    │ RESERVATION   │ │ TRANSACTION          │ │ WAITING_LIST │
    ├───────────────┤ ├──────────────────────┤ ├──────────────┤
    │ id (PK)       │ │ id (PK)              │ │ id (PK)      │
    │ user_id (FK)  │ │ user_id (FK)         │ │ user_id (FK) │
    │ session_id    │ │ package_id (FK)      │ │ session_id   │
    │ transaction   │ │ chargeMethod (enum)  │ │ position     │
    │ placeNumber   │ │ status (0,1,-1,2)    │ │ createdAt    │
    │ isAvailable   │ │ amount (dec 10,2)    │ │ (FIFO order) │
    │ attended      │ │ isExpired (bool)     │ │              │
    │ cancellationAt│ │ expirationAt (DT)    │ │              │
    │ changedAt (DT)│ │ chargeId, authCode   │ │              │
    │ createdAt,    │ │ cardName, cardType   │ │              │
    │ updatedAt     │ │ cardBrand, cardLast4 │ │              │
    │ (Timestamped) │ │ isCompleted (bool)   │ │              │
    └───────────────┘ │ packageTotalClasses  │ └──────────────┘
          │           │ packageAmount        │
          │           │ packageDaysExpiry    │
          │           │ packageIsUnlimited   │
          │           │ packageType          │
          │           │ notes, metadata      │
          │           │ specialPrice         │
          │           └──────────────────────┘
          │                 │
          │ (ManyToOne)     │ (ManyToOne)
          │ SESSION         │ PACKAGE
          │                 │
          ▼                 ▼
    ┌─────────────────────────────────────────────────┐
    │          SESSION                                │ ◀── Implements:
    ├─────────────────────────────────────────────────┤     TimestampableInterface
    │ id (PK)                                         │
    │ dateStart (DATE), timeStart (TIME)              │
    │ exerciseRoom_id (FK)                            │
    │ discipline_id (FK)                              │
    │ instructor_id (FK) [Staff]                      │
    │ branchOffice_id (FK)                            │
    │ type (GROUP/INDIVIDUAL)                         │
    │ status (OPEN=1, FULL=2, CLOSED=0, CANCEL=-1)    │
    │ exerciseRoomCapacity                            │
    │ availableCapacity                               │
    │ placesNotAvailable (SIMPLE_ARRAY, nullable)     │
    │ information (TEXT, nullable)                    │
    │ createdAt, updatedAt                            │
    │                                                 │
    │ Constants:                                      │
    │ - STATUS_OPEN = 1         (Acepta reservas)     │
    │ - STATUS_FULL = 2         (Sin cupos)           │
    │ - STATUS_CLOSED = 0       (Pasó la fecha)       │
    │ - STATUS_CANCEL = -1      (Cancelada)           │
    │ - STATUS_NOT_CANCELED = -5                      │
    │                                                 │
    │ - TYPE_GROUP = "group"    (Clase grupal)        │
    │ - TYPE_INDIVIDUAL = "individual" (1-on-1)       │
    └─────────────────────────────────────────────────┘
          │                            │    │
          │ (ManyToOne)                │    │
          │ STAFF                      │    │
          │                            │    │
          ▼                            │    │
    ┌────────────────────────────┐     │    │
    │    STAFF                   │     │    │
    ├────────────────────────────┤     │    │
    │ id (PK)                    │     │    │
    │ name, lastname             │     │    │
    │ email (UK)                 │     │    │
    │ isInstructor (bool)        │     │    │
    │ isActive (bool)            │     │    │
    │ createdAt, updatedAt       │     │    │
    │                            │     │    │
    │ Relations:                 │     │    │
    │ - OneToOne → StaffProfile  │     │    │
    │ - OneToMany → InstructorD… │     │    │
    │ - OneToMany → Session (as instructor) │
    │ - OneToMany → StaffBranchO…│     │    │
    └────────────────────────────┘     │    │
          │                            │    │
          │ (OneToMany)                │    │
          │ INSTRUCTORS_DISCIPLINES    │    │
          │ (M2M: Staff ↔ Discipline)  │    │
          │                            │    │
          ▼                            │    │
    ┌────────────────────────┐         │    │
    │  DISCIPLINE            │◄────────┘    │
    ├────────────────────────┤              │
    │ id (PK)                │              │
    │ name (255)             │              │
    │ isActive (bool)        │              │
    │ createdAt, updatedAt   │              │
    │                        │              │
    │ Current DB: 6 records  │              │
    │ (Pilates, Yoga, etc)   │              │
    └────────────────────────┘              │
                                            │
    ┌───────────────────────────────────────┤
    │                                       │
    ▼                                       ▼
┌─────────────────────────────┐  ┌──────────────────────────────┐
│  EXERCISE_ROOM              │  │    PACKAGE                   │
├─────────────────────────────┤  ├──────────────────────────────┤
│ id (PK)                     │  │ id (PK)                      │
│ name (255)                  │  │ totalClasses (int)           │
│ capacity (int)              │  │ amount (DECIMAL 10,2)        │
│ branchOffice_id (FK)        │  │ type (GROUP/INDIVIDUAL)      │
│ isActive (bool)             │  │ daysExpiry (SMALLINT)        │
│ createdAt, updatedAt        │  │ isUnlimited (bool)           │
│                             │  │ specialPrice (DECIMAL, null) │
│ Current DB: 10 records      │  │ isActive, public (bools)     │
└─────────────────────────────┘  │ newUser (bool)               │
          │                      │ altText (150, nullable)      │
          │                      │ createdAt, updatedAt         │
          │ (ManyToOne)          │                              │
          │ BRANCH_OFFICE        │ Current DB: 39 records       │
          │                      └──────────────────────────────┘
          ▼                                   │
┌─────────────────────────────┐               │ (OneToMany)
│  BRANCH_OFFICE              │               │ COUPON_PACKAGE
├─────────────────────────────┤               │ (M2M: Coupon ↔ Package)
│ id (PK)                     │               │
│ name (255, UK)              │               ▼
│ slug (UK, SluggableI.)      │    ┌──────────────────────────┐
│ place (100, nullable)       │    │ COUPON_PACKAGE           │
│ isActive, public (bools)    │    ├──────────────────────────┤
│ createdAt, updatedAt        │    │ coupon_id (FK, PK)       │
│                             │    │ package_id (FK, PK)      │
│ Implements:                 │    │ (M2M relationship)       │
│ - TimestampableI.           │    │ Current DB: 306 records  │
│ - SluggableInterface        │    └──────────────────────────┘
│                             │             │
│ Current DB: 3 records       │             │ (ManyToOne)
└─────────────────────────────┘             │ COUPON
                                            │
                                            ▼
                                ┌──────────────────────────┐
                                │ COUPON                   │
                                ├──────────────────────────┤
                                │ id (PK)                  │
                                │ name (100)               │
                                │ code (20, UK)            │
                                │ discount (DECIMAL 4,2)   │
                                │ dateStart, dateEnd (DT)  │
                                │ maxUses, usedCount       │
                                │ packages (M2M via CP)    │
                                │ createdAt, updatedAt     │
                                │                          │
                                │ Implements:              │
                                │ - TimestampableInterface │
                                │ - UniqueEntity(code)     │
                                │                          │
                                │ Current DB: 74 records   │
                                └──────────────────────────┘
                                        │
                                        │ (OneToMany)
                                        │ COUPON_HISTORY
                                        │
                                        ▼
                                ┌──────────────────────────┐
                                │ COUPON_HISTORY           │
                                ├──────────────────────────┤
                                │ id (PK)                  │
                                │ user_id (FK) → User      │
                                │ coupon_id (FK) → Coupon  │
                                │ transaction_id (FK)      │
                                │ discount_applied (%)     │
                                │ createdAt (audit)        │
                                │                          │
                                │ Implements:              │
                                │ - TimestampableInterface │
                                │                          │
                                │ Current DB: 124 records  │
                                └──────────────────────────┘
```

---

## Entidades Adicionales Documentadas

### **Staff Profile** (OneToOne con Staff)
```
Tabla: staff_profile
├── id (PK)
├── staff_id (FK, OneToOne con Staff)
├── Atributos adicionales del Staff
├── Implements: TimestampableInterface
└── Current DB: 25 records
```

### **Staff Branch Office** (M2M relación)
```
Tabla: staff_branch_office
├── staff_id (FK) → Staff
├── branchOffice_id (FK) → BranchOffice
├── M2M relationship
└── Current DB: 12 records (Instructores asignados a sucursales)
```

### **Instructors Disciplines** (M2M relación)
```
Tabla: instructors_disciplines
├── staff_id (FK) → Staff
├── discipline_id (FK) → Discipline
├── M2M relationship
├── Qué disciplinas enseña cada instructor
└── Current DB: 73 records
```

### **Post** (Blog/Noticias)
```
Tabla: post
├── id (PK)
├── title (255, requerido)
├── slug (255, UK, auto-generado)
├── type (enum: "static")
├── content (TEXT)
├── isActive (bool, default=true)
├── createdAt, updatedAt
│
├── Implements:
│   ├── TimestampableInterface (createdAt, updatedAt automático)
│   └── SluggableInterface (slug generado de title)
│
└── Current DB: 4 records (páginas estáticas como landing)
```

### **Configuration** (Configuración global del sistema)
```
Tabla: configuration
├── id (PK)
├── setting (VARCHAR 255, clave de configuración)
├── value (TEXT, valor)
├── type (VARCHAR, tipo de dato)
│
├── Ejemplos:
│   ├── timezone: "America/Mexico_City"
│   ├── app_name: "PB STUDIO"
│   ├── default_currency: "MXN"
│   └── system_email: "noreply@pbstudio.com"
│
├── Implements: TimestampableInterface
└── Current DB: 5 records
```

### **Messenger Messages** (Cola de mensajes - Queue)
```
Tabla: messenger_messages
├── id (PK)
├── body (LONGTEXT - JSON de mensaje)
├── headers (LONGTEXT)
├── queue_name (VARCHAR)
├── created_at (DATETIME)
├── available_at (DATETIME)
├── delivered_at (DATETIME, nullable)
│
├── Propósito: Cola de Job async
├── Para emails, notificaciones, etc
└── Current DB: 0 records (vacía, se llena dinámicamente)
```

### **Doctrine Migration Versions** (Histórico de migraciones)
```
Tabla: doctrine_migration_versions
├── version (VARCHAR, PK)
├── executed_at (DATETIME)
├── execution_time (INT)
│
├── Meta: Registry de todas las migraciones ejecutadas
└── Current DB: 5 records (5 migraciones ejecutadas desde setup)
```

---

## Resumen de Relaciones (Tabulación)

| De | Hacia | Tipo | Nombre | Cardinalidad |
|---|---|---|---|---|
| **User** | Reservation | OneToMany | reservations | 1:N |
| **User** | Transaction | OneToMany | transactions | 1:N |
| **User** | WaitingList | OneToMany | waitingList | 1:N |
| **Session** | Reservation | OneToMany | reservations | 1:N |
| **Session** | WaitingList | OneToMany | waitingList | 1:N |
| **Transaction** | Reservation | OneToMany | reservations | 1:N |
| **Package** | Transaction | OneToMany | transactions | 1:N |
| **Package** | CouponPackage | OneToMany | couponPackages | 1:N |
| **Coupon** | CouponPackage | OneToMany | couponPackages | 1:N |
| **Coupon** | CouponHistory | OneToMany | history | 1:N |
| **Session** | ExerciseRoom | ManyToOne | exerciseRoom | N:1 |
| **Session** | Discipline | ManyToOne | discipline | N:1 |
| **Session** | Staff | ManyToOne | instructor | N:1 |
| **Session** | BranchOffice | ManyToOne | branchOffice | N:1 |
| **Reservation** | User | ManyToOne | user | N:1 |
| **Reservation** | Session | ManyToOne | session | N:1 |
| **Reservation** | Transaction | ManyToOne | transaction | N:1 |
| **Transaction** | User | ManyToOne | user | N:1 |
| **Transaction** | Package | ManyToOne | package | N:1 |
| **WaitingList** | User | ManyToOne | user | N:1 |
| **WaitingList** | Session | ManyToOne | session | N:1 |
| **ExerciseRoom** | BranchOffice | ManyToOne | branchOffice | N:1 |
| **Staff** | StaffProfile | OneToOne | profile | 1:1 |
| **Staff** | InstructorsDisciplines | OneToMany | disciplines | 1:N (M2M) |
| **Staff** | StaffBranchOffice | OneToMany | branchOffices | 1:N (M2M) |
| **Discipline** | InstructorsDisciplines | OneToMany | instructors | 1:N (M2M) |
| **BranchOffice** | StaffBranchOffice | OneToMany | staff | 1:N (M2M) |

---

## Totales y Conteos

| Entidad | Registros | Propósito |
|---------|-----------|----------|
| user | **14,566** | Usuarios registrados |
| reservation | **336,768** | Reservas de  clases |
| session | **69,982** | Sesiones programadas |
| transaction | **62,929** | Transacciones de pago |
| waiting_list | **3,826** | Usuarios en espera |
| coupon_history | 124 | Aplicaciones de cupones |
| instructors_disciplines | 73 | Disciplinas por instructor |
| coupon | 74 | Códigos de descuento activos |
| package | 39 | Paquetes de clases |
| staff | 32 | Personal/instructores |
| staff_profile | 25 | Perfiles extendidos |
| exercise_room | 10 | Salas disponibles |
| staff_branch_office | 12 | Asignaciones staff-sucursal |
| coupon_package | 306 | Relación cupón-paquete |
| discipline | 6 | Tipos de clases |
| branch_office | 3 | Sucursales |
| post | 4 | Páginas estáticas |
| configuration | 5 | Configuraciones globales |
| messenger_messages | 0 | Cola de mensajes |
| doctrine_migration_versions | 5 | Migraciones aplicadas |
| **TOTAL** | **488,789** | **Registros procesados** |

```

### **User ↔ Reservation (OneToMany)**
```
Un usuario puede tener muchas reservaciones
├── Usuario crea reservación para asistir a sesión
├── Validación: User.email único
└── Si User.isActive=false → No puede crear nuevas
```

### **User ↔ Transaction (OneToMany)**
```
Un usuario tiene múltiples transacciones de pago
├── Una por cada paquete de clases comprado
├── Status: PENDING → PAID → EXPIRED → COMPLETED
└── Cada transaction vinculada a múltiples Reservations
```

### **User ↔ WaitingList (OneToMany)**
```
Un usuario puede estar en lista de espera de varias sesiones
├── Si Session.status = FULL → Agregar a WaitingList
├── Removerse automáticamente cuando se desocupa lugar
└── O cancelar manualmente
```

### **Session ↔ Reservation (OneToMany)**
```
Una sesión tiene muchas reservaciones
├── Cantidad máxima = exerciseRoomCapacity
├── Lugares disponibles = availableCapacity
├── placesNotAvailable = array de lugares marcados manualmente
└── Status determina si acepta nuevas reservaciones
```

### **Session ↔ WaitingList (OneToMany)**
```
Una sesión tiene lista de espera
├── Ordenada por createdAt (FIFO)
├── Cuando se libera lugar → Promover siguiente
└── Enviar email de notificación
```

### **Session ↔ Discipline (ManyToOne)**
```
Muchas sesiones son de una disciplina
├── Pilates, Yoga, Boxeo, etc
├── Discipline.isActive determina disponibilidad
└── Usar para filtros en calendar
```

### **Session ↔ Staff (ManyToOne)**
```
Muchas sesiones tiene un instructor (ManyToOne)
├── instructor_id = Staff.id
├── Mostrar nombre en calendar y detalles
├── Instructor solo ve sus sesiones
└── Si Staff.isActive=false → Reasignar sesiones
```

### **Session ↔ ExerciseRoom (ManyToOne)**
```
Muchas sesiones en misma sala
├── exerciseRoom.capacity define Session.exerciseRoomCapacity
├── Validar no haya conflicto de horarios en misma sala
└── Mostrar sala en detalles
```

### **Session ↔ BranchOffice (ManyToOne)**
```
Muchas sesiones por sucursal
├── Filtrar por sucursal en calendar
├── branchOffice.isActive=false → No mostrar sesiones
├── branchOffice.public → Decide si se ve desde frontend
└── Múltiples sucursales = filtro principal
```

### **Reservation ↔ Transaction (ManyToOne)**
```
Muchas reservaciones por transaction
├── Usuario compra paquete → 1 Transaction
├── Transaction vinculada a N Reservations
├── Si Transaction.isExpired → Liberar Reservations
├── Si Transaction.status=PAID → Marcar isAvailable=true
└── Workflow: Reservation.transaction_id referencia a Transaction
```

### **Reservation ↔ Session (ManyToOne)**
```
Muchas reservaciones para 1 sesión
├── placeNumber = número asignado (1 a capacity)
├── isAvailable = si puede asistir
├── attended = si asistió realmente
└── cancellationAt, changedAt = auditoría
```

### **Transaction ↔ Package (ManyToOne)**
```
Muchas transacciones del mismo paquete
├── package.totalClasses se copia a transaction
├── package.amount se copia a transaction
├── package.daysExpiry calcula expirationAt
├── transaction.specialPrice puede override amount
└── Para auditoría: guardar estado del package en transaction
```

### **Coupon ↔ Package (ManyToMany via CouponPackage)**
```
Cupón aplica a múltiples paquetes
├── coupon.code = código promocional
├── coupon.discount = 0-100%
├── coupon.dateStart/dateEnd = vigencia
├── coupon_package = tabla de relación
├── Un paquete puede tener múltiples cupones (but usar uno)
└── En checkout: validar cupón + package
```

### **Coupon ↔ CouponHistory (OneToMany)**
```
Histórico de cada aplicación de cupón
├── Cuando Usuario aplica cupón
├── Se registra: user, coupon, transaction, discount_aplicado
├── Para auditoría y análisis
└── Validar maxUses no se exceda
```

### **Staff ↔ Discipline (ManyToMany via InstructorsDisciplines)**
```
Un instructor puede enseñar múltiples disciplinas
├── Crear sesión → elegir instructor + disciplina
├── instructors_disciplines.php = tabla relación
├── Usar para filtro "Mis disciplinas"
└── Validar en form de sesión
```

### **Staff ↔ BranchOffice (ManyToMany via StaffBranchOffice)**
```
Un staff puede trabajar en múltiples sucursales
├── staff_branch_office = tabla relación (M2M)
├── Un staff puede estar asignado a N sucursales
├── Una sucursal puede tener N staff
├── Instructor ve solo sesiones de sus sucursales asignadas
├── Admin puede ver todo sin restricción
├── 12 registros actuales de asignaciones
└── Para restricciones de acceso y permisos
```

### **Staff ↔ Discipline (ManyToMany via InstructorsDisciplines)**
```
Un instructor puede enseñar múltiples disciplinas
├── instructors_disciplines = tabla relación (M2M)
├── Un staff puede enseñar N disciplinas
├── Una disciplina puede ser enseñada por N instructores
├── Validación en form de sesión: instructor debe saber esa disciplina
├── Usar para filtro "Qué disciplinas enseña cada instructor"
├── 73 registros actuales de enseñanzas
└── Restricción: Solo crear Session si (Staff, Discipline) existe
```

### **Staff ↔ StaffProfile (OneToOne)**
```
Staff tiene 1 perfil opcional con atributos adicionales
├── StaffProfile.staff_id → Staff.id (relación 1:1)
├── Foto, bio, horarios extendidos, etc
├── Opcional pero recomendado para frontend
├── 25 registros actuales (algunos staff sin profile)
└── Para perfil público de instructor en landing
```

---

## Índices Estratégicos

```sql
-- Búsquedas rápidas por estado
ALTER TABLE reservation ADD INDEX place_number_idx (place_number);
ALTER TABLE transaction ADD INDEX status_idx (status);
ALTER TABLE transaction ADD INDEX charge_method_idx (charge_method);

-- Búsquedas por rango de fecha
ALTER TABLE session ADD INDEX date_start_idx (dateStart);
ALTER TABLE transaction ADD INDEX expiration_at_idx (expirationAt);

-- UNIQUE constraints
ALTER TABLE user ADD UNIQUE KEY email_uk (email);
ALTER TABLE user ADD UNIQUE KEY phone_uk (phone);
ALTER TABLE coupon ADD UNIQUE KEY code_uk (code);
ALTER TABLE post ADD UNIQUE KEY slug_uk (slug);
ALTER TABLE branch_office ADD UNIQUE KEY slug_uk (slug);
```

---

## Flujo de Datos Crítfico: Compra → Reserva → Asistencia

```
1. USUARIO ANONIMO
   ↓ VE CALENDAR
   ↓ Session + reservationsActuales + waitingListCount
   
2. USUARIO HACE RESERVA (sin pagar)
   → Crear Reservation {user, session, placeNumber, isAvailable=false}
   ↓
   
3. USUARIO VA A CHECKOUT
   → Ver paquetes (Package.isActive=true)
   → Si User.isNew → mostrar Package.newUser=true
   → Aplicar cupón (validar Coupon + CouponPackage)
   ↓
   
4. USUARIO PAGA
   → Crear Transaction {user, package, chargeMethod, status}
   ├── Si chargeMethod=CARD → Conekta
   │   ├── ConektaService::createCharge()
   │   ├── Si approved → status=PAID
   │   └── registrar chargeId, authCode
   ├── Si chargeMethod=FREE → status=PAID inmediato
   └── Si chargeMethod=CASH/POS → status=PENDING
   
   → CouponHistory {user, coupon, transaction, discount}
   → Enviar TransactionMailer::paymentConfirmation()
   ↓
   
5. TRANSACCION CONFIRMADA
   → Reservation.transaction = asignar
   → Reservation.isAvailable = true
   → Enviar ReservationMailer::confirmed()
   → Si estaba en WaitingList → remover
   ↓
   
6. PRÓXIMAS 24 HORAS: CRON Check
   → Transaction.isExpired si (now > expirationAt)
   → Liberar Reservation (isAvailable=false)
   → Enviar advertencia
   → Si estaba full → Promover WaitingList
   ↓
   
7. DÍA DE LA SESIÓN
   → Admin abre formulario de asistencia
   → Marca Reservation.attended = true
   → Descuenta 1 del Transaction.packageTotalClasses
   ↓
   
8. FIN DE PAQUETE
   → packageTotalClasses = 0
   → Transaction.isCompleted = true
   → Transaction.isExpired = true
   → Enviar email "Paquete agotado"
```

---

## Vista de Datos por Tabla (Queries Típicas)

### **Session Próxima**
```php
SessionRepository::getCalendar($period, $branchOffice)
// SELECT * FROM session 
// WHERE dateStart BETWEEN ? AND ? 
// AND branchOffice_id = ? 
// AND status IN (OPEN, FULL, NOT_CANCELED)
// ORDER BY dateStart, timeStart
```

### **Disponibilidad de Sesión**
```php
// Para cada Session:
SELECT COUNT(*) FROM reservation 
WHERE session_id = ? AND isAvailable = true
// = availableCapacity = exerciseRoomCapacity - COUNT(*)
```

### **Transacciones Expiradas**
```php
// CRON: Diario
SELECT * FROM transaction 
WHERE isExpired = false 
AND expirationAt < NOW()
AND status IN (PENDING, PAID)
```

### **Lista de Espera**
```php
SELECT * FROM waiting_list 
WHERE session_id = ? 
ORDER BY createdAt ASC 
LIMIT 1
// Al liberarse lugar → remover y promover a Reservation
```

### **Cupones Válidos del Usuario**
```php
SELECT DISTINCT c.* FROM coupon c
INNER JOIN coupon_package cp ON c.id = cp.coupon_id
INNER JOIN package p ON cp.package_id = p.id
WHERE c.code = ? 
AND c.dateStart <= NOW() AND c.dateEnd >= NOW()
AND c.usedCount < c.maxUses
AND p.id = ? // validate para paquete seleccionado
```

---

## Restricciones y Validaciones Detalladas

| Entidad | Campo | Regla | Validador | Notas |
|---------|-------|-------|-----------|-------|
| **User** | email | UNIQUE | UniqueEntity | Constraint: email_uk index |
| **User** | email | Formato email | Email | Debe ser válido |
| **User** | phone | UNIQUE, 10 dígitos | UniqueEntity, Length, Type | Solo números, máx 10 |
| **User** | phone | Requerido (groups) | NotBlank | En registro y perfil |
| **User** | name | 3-50 caracteres | Length | NotBlank en grupos |
| **User** | lastname | 3-50 caracteres | Length | NotBlank en grupos |
| **User** | password | hasheada | bcrypt | Por defecto en Security |
| **User** | birthday | Tipo DATE | Type | Opcional |
| **User** | isActive | default=true | boolean | Controla acceso al sistema |
| **User** | roles | JSON array | Type | Ej: ["ROLE_USER", "ROLE_ADMIN"] |
| **Session** | status | 1,-1,0,2 | Choice | OPEN, CANCEL, CLOSED, FULL |
| **Session** | type | GROUP\|INDIVIDUAL | Choice | "group" o "individual" |
| **Session** | dateStart | Futuro | DateTime | No puede ser pasado |
| **Session** | exerciseRoomCapacity | > 0 | GreaterThan | Min 1 persona |
| **Session** | availableCapacity | Calculado | Formula | = capacity - COUNT(reservations) |
| **Reservation** | placeNumber | 1-capacity | Custom | Único por sesión |
| **Reservation** | uniqueness | (session_id, placeNumber) | Database unique | No duplicados |
| **Reservation** | isAvailable | boolean | Type | true=puede asistir |
| **Reservation** | attended | default=false | boolean | Marca asistencia |
| **Reservation** | transaction_id | Coreferencia | FK | Une con pago |
| **Transaction** | amount | > 0 | GreaterThan | Decimal 10,2 |
| **Transaction** | chargeMethod | enum | Choice | FREE, CASH, CARD, POS |
| **Transaction** | status | 0,1,-1,2 | Choice | PENDING, PAID, DENIED, CANCEL |
| **Transaction** | isExpired | Calculado | CRON | Expira si now > expirationAt |
| **Transaction** | expirationAt | dateStart + daysExpiry | DateTime | Calcula automáticamente |
| **Transaction** | packageAmount | copia | Decimal | Del Package.amount |
| **Transaction** | packageTotalClasses | copia | Integer | Del Package.totalClasses |
| **Coupon** | code | UNIQUE, max 20 | UniqueEntity, Length | Código promocional |
| **Coupon** | discount | 0-100% | Range, Decimal | GreaterThan(0), LessThanOrEqual(100) |
| **Coupon** | dateStart | Vigencia inicio | DateTime | Nullable, para activación |
| **Coupon** | dateEnd | Vigencia fin | DateTime | Nullable, para expiración |
| **Coupon** | maxUses | max aplicaciones | GreaterThan(0) | Cuantas veces se puede usar |
| **Coupon** | usedCount | contador | Integer | Se incrementa en cada uso |
| **Package** | totalClasses | ≥ 0 | GreaterThanOrEqual | 0 = ilimitado (si isUnlimited=true) |
| **Package** | amount | > 0 | GreaterThan | Precio del paquete |
| **Package** | daysExpiry | Dias | GreaterThan(0) | Vigencia del paquete |
| **Package** | isUnlimited | boolean | Type | Si true, totalClasses ignorado |
| **Package** | type | GROUP\|INDIVIDUAL | Choice | Tipo de clase |
| **Package** | newUser | boolean | Type | Si true, solo para nuevos usuarios |
| **BranchOffice** | name | UNIQUE | UniqueEntity | Nombre único |
| **BranchOffice** | slug | UNIQUE | UniqueEntity | Generado de name |
| **ExerciseRoom** | capacity | > 0 | GreaterThan | Capacidad mínima 1 |
| **Discipline** | name | Unique | UniqueEntity | Nombre disciplina |
| **Staff** | email | UNIQUE | UniqueEntity | Email de instructor |
| **Post** | title | Unique | Length, NotBlank | Min 3, Max 255 |
| **Post** | slug | UNIQUE | UniqueEntity | Generado de title |
| **Post** | content | TEXT | NotBlank | Contenido del post |
| **Post** | type | "static" | Fixed | Tipo fijo |
| **CouponHistory** | Foreign keys | Audit | FK | Registra: user + coupon + transaction |

---

**Generado:** 27/02/2026  
**Última BD:** pbstudio_15ene2026_back.sql.gz (488,789 registros)
