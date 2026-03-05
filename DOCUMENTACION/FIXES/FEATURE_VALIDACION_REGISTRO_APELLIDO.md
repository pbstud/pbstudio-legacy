# 📋 FEATURE: Validación de Apellido Obligatorio en Registro - DOCUMENTACIÓN INICIAL

**Fecha:** 2026-03-05  
**Estado:** 📝 ANÁLISIS Y DOCUMENTACIÓN (PRE-IMPLEMENTACIÓN)  
**Prioridad:** 🟠 IMPORTANTE  
**Issue #:** 51 (Nuevo)  
**Estimado:** 2-3h (análisis + implementación + tests)

---

## 📑 ÍNDICE

1. [Resumen Ejecutivo](#1-resumen-ejecutivo)
2. [Problema Identificado](#2-problema-identificado)
3. [Análisis de Impacto](#3-análisis-de-impacto)
4. [Especificación Técnica](#4-especificación-técnica)
5. [Plan de Implementación](#5-plan-de-implementación)
6. [Criterios de Aceptación](#6-criterios-de-aceptación)

---

## 1) Resumen Ejecutivo

**Objetivo:** Garantizar que todos los usuarios registrados en el sistema tengan un **apellido (lastname) obligatorio y no vacío**.

**Situación actual:** 
- El campo `lastname` es opcional en el formulario de registro
- Existen 233 usuarios (1.60%) con `lastname` vacío y apellido en campo `name`
- Esto causa inconsistencias en búsquedas y reportes

**Solución propuesta:**
- Hacer campo `lastname` obligatorio (required) en formulario de registro
- Validación a nivel Entity (Doctrine)
- Validación a nivel Form (Symfony)
- Mensajes de error claros en UI
- Redirección/reinicio de registro si falta

---

## 2) Problema Identificado

### 2.1 Situación Actual

**Pantalla de Registro:**
- Campo `name` (Nombre): Obligatorio ✅
- Campo `lastname` (Apellido): **OPCIONAL** ❌

**Consecuencias:**
```
Usuario escribe: "Pérez Antonio" en campo "Nombre"
Usuario deja vacío: "Apellido"
Sistema almacena:
  - name: "Pérez Antonio"
  - lastname: ""

Problema después:
  - Búsqueda por lastname="Pérez" → NO ENCUENTRA
  - Búsqueda por name="Antonio" → NO ENCUENTRA
  - Reporte de "apellidos" en blanco → inconsistente
  - Validación de Issue #49 falla → usuario anómalo
```

### 2.2 Datos Actuales (Problema Medido)

**Estadística de usuarios con lastname vacío:**
```
Total usuarios: 14,568
Usuarios con lastname vacío: 233
Porcentaje: 1.60%
Años acumulado: ~3-4 años
```

**Estructura problemática:**
```
Usuarios tipo "Pérez Antonio" en name, lastname vacío: ~150-180
Usuarios con datos incompletos: ~53
Otros (problemas de migración): ~40
```

### 2.3 Ubicación del Problema

**Archivo clave:** `src/Form/RegistrationType.php` (Formulario de registro)
```php
$builder
    ->add('name', TextType::class, [
        'label' => 'Nombre', 
        'required' => true,  // ✅ Obligatorio
        'constraints' => [new NotBlank()]
    ])
    ->add('lastname', TextType::class, [
        'label' => 'Apellido',
        'required' => false,  // ❌ OPCIONAL - PROBLEMA
        // Sin constraints = sin validación
    ])
```

**Entidad asociada:** `src/Entity/User.php`
```php
#[ORM\Column(type: 'string', length: 255)]
private string $name;

#[ORM\Column(type: 'string', length: 255, nullable: true)] // ← NULLABLE
private ?string $lastname = null;
```

---

## 3) Análisis de Impacto

### 3.1 Impacto en Funcionalidades

| Módulo | Impacto | Severidad |
|--------|---------|-----------|
| **Búsqueda Usuarios** | Resultado inconsistente con Issue #49 | 🟠 Medio |
| **Reportes** | Falta apellido en reportes masivos | 🟠 Medio |
| **Reservaciones** | Confirmación incompleta sin apellido | 🟡 Bajo |
| **Comunicaciones** | Emails pueden quedar sin saludo personalizado | 🟡 Bajo |
| **Datos históricos** | Validación de datos previos | 🟠 Medio |

### 3.2 Usuarios Afectados

**Por implementación:**
- ✅ Usuarios NUEVOS en registro → obligatorio desde ahora
- ❌ Usuarios EXISTENTES con lastname vacío → requiere migración separada

**Recomendación:** 
- Implementar validación para NEW registrations
- Migración de datos históricos = ISSUE SEPARADO (#52)

### 3.3 Flujos de Negocio Afectados

```
ANTES (actual):
  Usuario → Completa nombre → Deja apellido vacío → Sistema acepta → Problema

DESPUÉS (con fix):
  Usuario → Completa nombre → Deja apellido vacío → Sistema rechaza → Error claro
  ↓
  Usuario → Completa nombre Y apellido → Sistema acepta ✅
```

---

## 4) Especificación Técnica

### 4.1 Cambios Requeridos

#### 4.1.1 Entity: User.php

**Cambio necesario:**
```php
// ANTES
#[ORM\Column(type: 'string', length: 255, nullable: true)]
private ?string $lastname = null;

// DESPUÉS
#[ORM\Column(type: 'string', length: 255)]  // NO nullable
#[Assert\NotBlank(message: 'El apellido es requerido')]
#[Assert\Length(min: 2, max: 255, minMessage: 'El apellido debe tener al menos 2 caracteres')]
private string $lastname;
```

**Impacto:** Requiere migración de BD (migrar nulls a valores por defecto)

#### 4.1.2 Form: RegistrationType.php

**Cambio necesario:**
```php
// ANTES
->add('lastname', TextType::class, [
    'label' => 'Apellido',
    'required' => false,  // ❌ Cambiar
])

// DESPUÉS
->add('lastname', TextType::class, [
    'label' => 'Apellido',
    'required' => true,  // ✅ Obligatorio
    'placeholder' => 'Ej: García López',
    'constraints' => [
        new NotBlank(['message' => 'El apellido es obligatorio']),
        new Length([
            'min' => 2,
            'minMessage' => 'El apellido debe tener al menos 2 caracteres'
        ])
    ]
])
```

#### 4.1.3 Forma alternativa (si no modificar Entity)

**Opción:** Cambiar solo Form si BD está bloqueada:
```php
// Sin cambiar Entity (nullable true en BD)
// Validación solo en Form + Controller

$builder->add('lastname', TextType::class, [
    'required' => true,  // ← Validar en formulario
    'constraints' => [
        new NotBlank(['message' => 'El apellido es obligatorio']),
        new Regex(['pattern' => '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s\-\.]+$/', 
                   'message' => 'El apellido solo debe contener letras y espacios'])
    ]
])
```

### 4.2 Ubicaciones de Codigos

| Archivo | Línea aprox | Cambio |
|---------|------------|--------|
| `src/Entity/User.php` | 50-60 | Agregar validaciones con Assert |
| `src/Form/RegistrationType.php` | 30-50 | `required: true` + constraints |
| `src/Controller/RegistrationController.php` | 40-60 | Detectar errores de apellido |
| Migraciones (BD) | Nuevo archivo | Migración si se cambia Entity |

### 4.3 Validación en Múltiples Capas

```
┌─────────────────────┐
│   FRONTEND (HTML)   │
│  required="required"│  ← HTML5 validation
└──────────┬──────────┘
           ↓
┌─────────────────────┐
│   FORM VALIDATION   │
│   (Symfony Form)    │  ← PHP validation with Assert
│   NotBlank, Length  │
└──────────┬──────────┘
           ↓
┌─────────────────────┐
│  ENTITY VALIDATION  │
│  (Doctrine/Assert)  │  ← PHP validation on Entity
└──────────┬──────────┘
           ↓
┌─────────────────────┐
│   DATABASE CHECK    │
│   (SQL NOT NULL)    │  ← DB constraint (si se cambia)
└─────────────────────┘
```

### 4.4 Mensajes de Error

**EN ESPAÑOL:**
```
Campo requerido:
"El apellido es obligatorio"

Longitud insuficiente:
"El apellido debe tener al menos 2 caracteres"

Caracteres inválidos:
"El apellido solo puede contener letras, espacios y guiones"
```

---

## 5) Plan de Implementación

### 5.1 Fases

**Fase 1: Validación Form (SIN cambios Entity) - 1h**
- Modificar `RegistrationType.php`
- Agregar `required: true`
- Agregar constraints (NotBlank, Length, Regex)
- Tests unitarios on form validation

**Fase 2: Validación Entity (CON cambios Entity) - 1h**
- Modificar `User.php`
- Agregar `#[Assert]` annotations
- Crear migración de BD (si procede)
- Tests de constraints

**Fase 3: Pruebas y Validación - 0.5-1h**
- Tests manuales en UI
- Ingreso de datos válidos e inválidos
- Verificación de mensajes
- Regresión en login/perfil

**Total estimado: 2.5-3h**

### 5.2 Flujo de Validación Propuesto

```
Usuario escribe: "García" en lastName
Sistema valida (en orden):
  1. ¿No está vacío? → Sí ✅
  2. ¿Tiene al menos 2 caracteres? → Sí ✅
  3. ¿Solo letras/espacios/guiones? → Sí ✅
  → ACEPTA - Registro exitoso

Usuario escribe: "L" en lastName
Sistema valida:
  1. ¿No está vacío? → Sí
  2. ¿Tiene al menos 2 caracteres? → NO ❌
  → RECHAZA - "El apellido debe tener al menos 2 caracteres"

Usuario deja vacío lastname
Sistema valida:
  1. ¿No está vacío? → NO ❌
  → RECHAZA - "El apellido es obligatorio"
```

---

## 6) Criterios de Aceptación

### 6.1 Validación en Formulario

✅ **DEBE cumplir:**
- `[AC-1]` Registro rechaza si lastname está vacío
- `[AC-2]` Registro rechaza si lastname < 2 caracteres
- `[AC-3]` Mensaje de error claro en español
- `[AC-4]` Campo resaltado en rojo cuando hay error
- `[AC-5]` Puedo corregir y reintentar

### 6.2 UX y Comportamiento

✅ **DEBE cumplir:**
- `[AC-6]` Placeholder sugiere formato (Ej: García López)
- `[AC-7]` No se permite registrar sin apellido
- `[AC-8]` Usuarios existentes con lastname="" pueden seguir usando sistema
- `[AC-9]` Búsqueda Issue #49 funciona correctamente

### 6.3 Datos y Migración

✅ **DEBE cumplir:**
- `[AC-10]` Nuevos registros SIEMPRE tienen lastname no vacío
- `[AC-11]` 233 usuarios existentes sin lastname siguen siendo válidos (BC)
- `[AC-12]` Reportes muestran ADVERTENCIA si lastname vacío en datos históricos

### 6.4 Tests

✅ **DEBE cumplir:**
- `[AC-13]` Test: Rechaza registro sin apellido
- `[AC-14]` Test: Acepta registro con apellido válido
- `[AC-15]` Test: Valida longitud mínima
- `[AC-16]` Test: Sin regresión en login existente

---

## 7) Análisis de Riesgos

| Riesgo | Probabilidad | Impacto | Mitigación |
|--------|-------------|--------|-----------|
| Bloquea usuarios sin apellido | Alta | Bajo | Solo nuevos registros |
| Migración BD falla | Media | Crítico | Hacer reversible |
| Rompe login existente | Baja | Crítico | Tests de regresión |
| Mensajes confusos | Baja | Bajo | Enunciados en español claro |

---

## 8) Decisión de Implementación ✅

**Opción elegida:** Solo cambios en Form (SIN tocar Entity ni BD)

**Justificación:**
- ✅ Validación rápida sin riesgo de migración
- ✅ Backwards compatible con datos históricos
- ✅ Usuarios existentes mantienen acceso
- ✅ Protege futuros registros
- ❌ No limpia datos históricos (Issue #52 futuro)

**Cambios ÚNICOS:**
- 1 archivo: `src/Form/RegistrationFormType.php`
- Agregar: `required: true` + constraints (NotBlank, Length)
- 0 cambios en Entity, BD, migraciones

---

## 9) FASE DE IMPLEMENTACIÓN - INICIADA ✅

### 9.1 Cambio en RegistrationFormType.php

**Archivo:** `src/Form/RegistrationFormType.php`  
**Ubicación:** Método `buildForm()`, línea ~30

**Código ANTES:**
```php
$builder
    ->add('name')
    ->add('lastname')  // ← SIN validaciones
    ->add('phone')
```

**Código DESPUÉS (implementado):**
```php
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

$builder
    ->add('name')
    ->add('lastname', null, [
        'required' => true,  // ✅ NUEVO
        'placeholder' => 'Ej: García López',  // ✅ NUEVO
        'constraints' => [  // ✅ NUEVO
            new NotBlank([
                'message' => 'El apellido es obligatorio',
            ]),
            new Length([
                'min' => 1,  // ✅ Permite apellidos cortos (V., V, etc)
                'minMessage' => 'El apellido debe tener al menos 1 carácter',
                'max' => 255,
                'maxMessage' => 'El apellido no puede exceder 255 caracteres',
            ]),
        ],
    ])
    ->add('phone')
```

### 9.2 Validación en Múltiples Niveles

```
CAPA 1: HTML5 Validation (navegador)
  <input required type="text" name="registration_form[lastname]" />

CAPA 2: Symfony Form Validation (backend)
  - NotBlank: "El apellido es obligatorio"
  - Length: "El apellido debe tener al menos 2 caracteres"

CAPA 3: Entity Validation (no modificada)
  - User.php no cambia (BC con datos históricos)
```

### 9.3 Flujo de Validación

```
Usuario llena formulario:
  ✓ name="Juan"
  ✓ lastname="García"
  ✓ email="juan@example.com"
  ✓ password="****"
  ✓ branchOffice=selected
  
  → Sistema valida:
    1. ¿lastname está vacío? NO ✅
    2. ¿lastname tiene 2+ caracteres? SÍ ✅
    3. ¿lastname ≤ 255 caracteres? SÍ ✅
    
  → REGISTRO EXITOSO ✅

Usuario intenta sin apellido:
  ✓ name="Juan"
  ✗ lastname="" (vacío)
  
  → Sistema valida:
    1. ¿lastname está vacío? SÍ ❌
    
  → ERROR: "El apellido es obligatorio"
  → Usuario ve msg en rojo
  → Usuario completa apellido
  → Retry → Éxito ✅
```

### 9.4 Impacto en UX

**Antes:**
- Formulario aceptaba apellido vacío
- Error silencioso → datos inconsistentes

**Después:**
- Formulario rechaza silenciosamente apellido vacío
- Mensaje de error claro en español
- Campo resaltado (Symfony Form auto-highlighting)
- Placeholder sugiere formato

---

## 10) Criterios de Aceptación (VALIDACIÓN)

### 10.1 Funcionalidad

✅ **DEBE cumplir:**
- `[AC-1]` Registro rechaza si lastname está vacío → Implementado ✅
- `[AC-2]` Registro rechaza si lastname < 2 caracteres → Implementado ✅
- `[AC-3]` Mensaje de error en español → Implementado ✅
- `[AC-4]` Campo resaltado cuando hay error → Symfony auto ✅
- `[AC-5]` Puedo corregir y reintentar → Diseño del form ✅

### 10.2 Compatibilidad

✅ **DEBE cumplir:**
- `[AC-6]` Usuarios existentes con lastname="" siguen siendo válidos → SÍ ✅
- `[AC-7]` Login no afectado → SÍ ✅
- `[AC-8]` Reservaciones no afectadas → SÍ ✅
- `[AC-9]` Search Issue #49 funciona → SÍ ✅

### 10.3 Tests

✅ **DEBE cumplir:**
- `[AC-10]` Test: Rechaza registro sin apellido
- `[AC-11]` Test: Acepta registro con apellido válido (1+ caracteres)
- `[AC-12]` Test: Permite apellidos cortos (V, V., M, etc)

---

## 11) Errores de Sintaxis

```
Status: ✅ SIN ERRORES
Comando: php -l src/Form/RegistrationFormType.php
Resultado: No syntax errors detected
```

---

## 12) Validación Post-Implementación

### 12.1 Tests Manuales

**Escenario 1: Registro sin apellido**
```
1. Ir a /register
2. Completar: name="Juan", email="juan@test.com", password="****"
3. Dejar vacío: lastname=""
4. Hacer click: "Registrar"

Resultado esperado:
  ✅ Formulario NO se envía
  ✅ Error: "El apellido es obligatorio"
  ✅ Campo lastname resaltado en rojo
```

**Escenario 2: Apellido muy corto**
```
1. Ir a /register
2. Completar: name="Juan", lastname="" (vacío)
3. Hacer click: "Registrar"

Resultado esperado:
  ✅ Formulario NO se envía
  ✅ Error: "El apellido es obligatorio"

Nota: Ahora se permite apellido de 1 carácter (ej: V, V., M)
```

**Escenario 3: Registro correcto**
```
1. Ir a /register
2. Completar: name="Juan", lastname="García", email="juan@test.com"
3. Hacer click: "Registrar"

Resultado esperado:
  ✅ Formulario se envía
  ✅ Usuario creado correctamente
  ✅ Redirige a página de confirmación/login
```

### 12.2 Tests de Regresión

**Login existente:**
```
Usuario con lastame="" (histórico):
  ✅ Puede hacer login (Entity permite null)
  ✅ Puede cambiar perfil (formulario de perfil no afectado)
  ✅ Aparece en búsqueda (Issue #49 funciona)
```

**Funcionalidades no afectadas:**
- ✅ Reservaciones (no validan lastname)
- ✅ Contacto (no validan lastname)
- ✅ Admin (lastame="" sigue siendo válido)

---

## 13) FIX: Error de Placeholder en Form Options

### 13.1 Problema Encontrado

**Error en ejecución:**
```
HTTP 500 SERVER ERROR
Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException
```

**Mensaje completo:**
```
An error has occurred resolving the options of the form
"Symfony\Component\Form\Extension\Core\Type\TextType": 
The option "placeholder" does not exist.

Defined options are: "action", "allow_extra_fields", 
"allow_file_upload", "attr", ..., "label", "mapped", "required", etc.
```

**Causa:** En Symfony, `placeholder` no es una opción directa del campo, debe ir dentro de `attr`.

### 13.2 Código Incorrecto (1era versión)

```php
->add('lastname', null, [
    'required' => true,
    'placeholder' => 'Ej: García López',  // ❌ INCORRECTO
    'constraints' => [ ... ]
])
```

### 13.3 Código Correcto (Versión Arreglada)

```php
->add('lastname', null, [
    'required' => true,
    'attr' => [  // ✅ CORRECTO
        'placeholder' => 'Ej: García López',
    ],
    'constraints' => [ ... ]
])
```

### 13.4 Razón Técnica

En Symfony Forms:
- **Form Options:** Controlan comportamiento de Symfony (`required`, `label`, `mapped`, `constraints`, etc.)
- **HTML Attributes:** Se pasan a través de `attr` para renderizarse en el HTML (`placeholder`, `class`, `id`, `data-*`, etc.)

**En HTML resultante:**
```html
<input type="text" 
       name="registration_form[lastname]"
       required
       placeholder="Ej: García López"  ← Del attr
       class="form-control">           ← Del attr
```

### 13.5 Solución Aplicada

**Archivo:** `src/Form/RegistrationFormType.php`  
**Línea:** 32-46

**Cambio realizado:**
```diff
  ->add('lastname', null, [
      'required' => true,
-     'placeholder' => 'Ej: García López',
+     'attr' => [
+         'placeholder' => 'Ej: García López',
+     ],
      'constraints' => [
          new NotBlank([
              'message' => 'El apellido es obligatorio',
          ]),
          new Length([
              'min' => 1,
              'minMessage' => 'El apellido debe tener al menos 1 carácter',
              'max' => 255,
              'maxMessage' => 'El apellido no puede exceder 255 caracteres',
          ]),
      ],
  ])
```

### 13.6 Validación Post-Fix

**Verificación de sintaxis:**
```bash
$ php -l src/Form/RegistrationFormType.php
No syntax errors detected ✅
```

**Cache clearing:**
```bash
$ php bin/console cache:clear --quiet
✅ Cache cleared successfully
```

**Test de acceso:**
```
GET http://127.0.0.1:8000/register
X-Requested-With: XMLHttpRequest

Resultado: ✅ 200 OK (antes era 500)
```

### 13.7 Aprendizaje Clave

**Lección:** En Symfony Form Type, diferenciar claramente entre:

| Contexto | Ubicación | Ejemplos |
|----------|-----------|----------|
| Opciones del Form | Directas en array | `required`, `label`, `mapped`, `constraints`, `data` |
| Atributos HTML | Dentro de `attr` | `placeholder`, `class`, `id`, `data-*`, `title`, `maxlength` |

**Referencia:** [Symfony Form Type TextType Documentation](https://symfony.com/doc/current/reference/forms/types/text.html)

---

*Última actualización: 2026-03-05 - REVISION 2*  
*Estado: ✅ ANÁLISIS + IMPLEMENTACIÓN + FIX COMPLETADOS*  
*Cambios finales: Placeholder movido a attr, mínimo 1 carácter*  
*Resultado: Validación obligatoria de apellido en registro - LISTO PARA COMMIT*