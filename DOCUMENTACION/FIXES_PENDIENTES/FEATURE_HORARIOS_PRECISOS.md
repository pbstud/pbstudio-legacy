# ⏰ FEATURE: Horarios Precisos (Por Hora, No por Sistema)

**Fecha de documentación:** 03/03/2026  
**Prioridad:** 🟠 IMPORTANTE  
**Impacto:** Precisión de datos + Consistencia  
**Timeline estimado:** 2-4 horas  
**Estado:** 📋 DOCUMENTADO - PENDIENTE IMPLEMENTACIÓN

---

## 📌 Resumen

Cuando se crea una sesión/clase (horario 10:00 AM), a veces el sistema **guarda la hora del servidor** (ej: 14:35) en lugar del **horario deseado** (10:00 AM).

Esto causa:
- Clases que aparecen a la hora equivocada
- Calendario desorganizado
- Conflictos de horarios

**Queremos:** Asegurar que cada clase tenga el horario correcto que se ingresó.

---

## ❌ Problema Actual

### Escenario

```
Admin crea clase:
┌────────────────────────────┐
│ Crear Sesión de Yoga       │
│                            │
│ Fecha: Lunes 10 Marzo      │
│ Horario: 10:00 AM ← Admin ingresa
│ Salón: Sala A              │
│ Instructor: María          │
│                            │
│ [GUARDAR]                  │
└────────────────────────────┘

En BD se guarda:
- dateStart: 2026-03-10 14:35:22
              ↑ SERVIDOR HORA (14:35)
              NO la deseada (10:00)

Resultado:
- Clase aparece a las 14:35 en calendario
- Conflicto: "¿Por qué hay clase a las 14:35?"
- Admin confundido
```

### Impacto

- 🔀 Horarios desordenados
- 😕 Admin debe corregir manualmente
- 📱 App muestra horarios incorrectos
- 🐛 Reportes con datos mal

---

## ✅ Solución

### Concepto: Separar Fecha + Hora

```
Actualmente (INCORRECTO):
┌─ DateTime ──────────────┐
│ 2026-03-10 14:35:22     │ ← fecha + hora del servidor
└─────────────────────────┘

Lo que queremos:
┌─ Date ──────────────┐   ┌─ Time ──────────────┐
│ 2026-03-10          │ + │ 10:00:00            │
│ (fecha de BD)       │   │ (hora ingresada)    │
└─────────────────────┘   └─────────────────────┘
         ↓
┌─ DateTime Combinado ─────────────────┐
│ 2026-03-10 10:00:00                  │ ✓ CORRECTO
└──────────────────────────────────────┘
```

### Flujo Deseado en el Código

```
1. Admin ingresa:
   - Fecha: 2026-03-10
   - Hora: 10:00

2. Sistema recibe:
   - From form: date = "2026-03-10", time = "10:00"

3. Procesa:
   - Convierte time string a TimeImmutable
   - Convertirdatetime string a DateImmutable
   - Combina: dateStart = date + time

4. Guarda en BD:
   - dateStart = 2026-03-10 10:00:00 ✓ CORRECTO

5. Resultado:
   - Clase a la hora deseada
```

---

## 🔧 Implementación

### 1️⃣ Revisar Formulario

En `SessionDayType` o donde se crea sesión:

```php
// ❌ ACTUAL (posiblemente)
->add('dateStart', DateTimeType::class, [
    'format' => 'yyyy-MM-dd HH:mm:ss'
])

// ✅ MEJOR
->add('dateStart', DateType::class)
->add('timeStart', TimeType::class)
// Procesar por separado o combinar en controller
```

### 2️⃣ En el Controller (SessionDayController)

```php
public function new(Request $request, ValidatorInterface $validator)
{
    // Recibe del form:
    // $data['dateStart'] = "2026-03-10"  (DateType)
    // $data['timeStart'] = "10:00"       (TimeType)
    
    $dateOnly = $data['dateStart'];  // DateImmutable 2026-03-10
    $timeOnly = $data['timeStart'];  // DateInterval 10:00
    
    // COMBINAR: fecha + hora
    $combinedDateTime = $dateOnly
        ->setTime(
            (int)$timeOnly->format('H'),
            (int)$timeOnly->format('i'),
            0
        );
    
    // Guardar:
    $session->setDateStart($combinedDateTime);
    $session->setTimeStart($timeOnly);
    
    $this->persist($session);
}
```

### 3️⃣ Garantía en Entity

En `Session.php`:

```php
#[ORM\Column(type: Types::DATE_MUTABLE)]
private ?\DateTimeInterface $dateStart = null;

#[ORM\Column(type: Types::TIME_MUTABLE)]
private ?\DateTimeInterface $timeStart = null;

// Getter que combina
public function getFullDateTime(): DateTimeInterface
{
    return $this->dateStart->setTime(
        (int)$this->timeStart->format('H'),
        (int)$this->timeStart->format('i'),
        0
    );
}
```

### 4️⃣ En Vistas (Templates)

Al mostrar clase:

```twig
{# ANTES (MALO) #}
Clase: {{ session.dateStart|date('H:i') }}
{# Podría mostrar hora equivocada #}

{# DESPUÉS (BUENO) #}
Clase: {{ session.timeStart|date('H:i') }}
{# O usar getter combinado #}
Clase: {{ session.getFullDateTime()|date('H:i') }}
```

---

## 💡 Casos de Uso

### Caso 1: Admin Crea Clase Matutina
```
Noviembre 15, 08:30 AM
- Admin ingresa: 08:30
- Sistema guarda: 2026-11-15 08:30:00 ✓
- Calendario muestra: 08:30 ✓
```

### Caso 2: Admin Crea a Última Hora
```
Admin crea a las 20:30 pero clase es 09:00 mañana
- Admin ingresa: mañana, 09:00
- Sistema guarda: 2026-11-16 09:00:00 ✓
- NO: 2026-11-16 20:30:00 ❌
```

---

## 📊 Tabla de Validación

| Entrada | Guardado | Correcto? |
|---------|----------|-----------|
| Lunes 10:00 | 2026-03-10 10:00 | ✓ |
| Lunes 14:30 | 2026-03-10 14:30 | ✓ |
| Martes 09:00 | 2026-03-11 09:00 | ✓ |

---

## 📅 Timeline

- Revisar formulario: 30 min
- Actualizar controller: 45 min
- Testing calendario: 45 min

**Total:** 2-2.5 horas

---

## 🎌 Estado

- 📋 Documentado ✅
- 💾 Pendiente implementación
- 🧪 Sin testing
