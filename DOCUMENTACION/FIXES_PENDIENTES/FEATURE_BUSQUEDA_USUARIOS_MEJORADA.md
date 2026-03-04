# 🔍 FEATURE: Búsqueda de Usuarios Mejorada (Tolerancia a Errores)

**Fecha de documentación:** 03/03/2026  
**Prioridad:** 🟠 IMPORTANTE  
**Impacto:** UX backend + Productividad de admin  
**Timeline estimado:** 2-4 horas  
**Estado:** 📋 DOCUMENTADO - PENDIENTE IMPLEMENTACIÓN

---

## 📌 Resumen

El admin intenta buscar un usuario en el backend pero:
- Si escribe con acento diferente (José vs Jose), NO encuentra
- Si escribe nombre incompleto (Mar vs María), NO encuentra
- Si escribe apellido pero no nombre, NO encuentra
- Si confunde mayúsculas/minúsculas, a veces NO encuentra

**Queremos:** Búsqueda **tolerante a errores** que encuentre:
- Con o sin acentos
- Nombres parciales
- Cualquier combinación

---

## ❌ Problema Actual

### Escenario

```
Admin: "Necesito ver a María García"

Intento 1: Busca "María" (con tilde)
← Encuentra ✓

Intento 2: Busca "Maria" (sin tilde)
← NO encuentra ❌ (es la misma persona)

Intento 3: Busca "García"
← NO encuentra ❌ (buscó apellido, pero formulario espera nombre)

Intento 4: Busca "Mar"
← NO encuentra ❌ (truncado)

Intento 5: Busca "MARIA"
← Encuentra ✓ (si la BD es case-insensitive)

Admin: 😠 "¿Por qué falla cuando escribo así?"
```

### Impacto

- ⏱️ Tiempo perdido: 3-5 min por búsqueda fallida
- 😤 Frustrante: Admin cree que el usuario no existe
- 📞 Errores: Crea usuario duplicado porque no lo encontró
- 🐛 Datos sucios: Base llena de usuarios duplicados

---

## ✅ Solución

### Búsqueda Inteligente

```
Parámetros de búsqueda:
├─ Nombre (parcial, sin acentos, case-insensitive)
├─ Apellido (parcial, sin acentos, case-insensitive)
├─ Email (exacto o parcial)
├─ Teléfono (números, sin guiones)
└─ Documento/ID (si existe)

USANDO: LIKE + LOWER + Normalización de acentos
```

### Ejemplos

```
Búsqueda: "maria"
Encontrados:
  ✓ María García
  ✓ María López
  ✓ Mariana Pérez
  
Búsqueda: "mar"
Encontrados:
  ✓ María García
  ✓ Mariana Pérez
  ✓ Marcos Rodríguez

Búsqueda: "garcia"
Encontrados:
  ✓ María García
  ✓ Juan García
  
Búsqueda: "garcia, maria"
Encontrados:
  ✓ María García (exacta)

Búsqueda: "+5255292036"
Encontrados:
  ✓ Usuario con ese teléfono
```

---

## 🔧 Implementación

### 1️⃣ Actualizar Repository

En `UserRepository`:

```php
function findBySearchTerm(string $term): array {
  // Normalizar término de búsqueda:
  // - Convertir a minúsculas
  // - Remover acentos (á → a, é → e, etc.)
  // - Remover caracteres especiales
  
  // Buscar en múltiples campos:
  return builder
    ->where "LOWER(UNACCENT(name)) LIKE :term"
    OR "LOWER(UNACCENT(lastName)) LIKE :term"
    OR "LOWER(email) LIKE :term"
    OR "phone LIKE :term"
    ->setParameter('term', "%{$normalized}%")
    ->getQuery()
    ->getResult()
}
```

### 2️⃣ Función de Normalización

```php
function normalizeSearch(string $term): string {
  // Minúsculas
  $term = strtolower($term);
  
  // Remover acentos
  $accents = [
    'á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u',
    'ñ' => 'n', // etc.
  ];
  $term = strtr($term, $accents);
  
  return $term;
}
```

### 3️⃣ Actualizar Formulario de Búsqueda

En template `backend/user/index.html.twig`:

```html
<form method="GET" action="/backend/user">
  <input type="text" 
         name="q" 
         placeholder="Busca por nombre, apellido, email o teléfono"
         value="{{ request.get('q') }}">
  <button type="submit">Buscar</button>
</form>
```

### 4️⃣ Mostrar Resultados

```
Resultados para: "maria"
─────────────────────────────────
1. María García (ID: 234)
   Email: maria.garcia@gmail.com
   Teléfono: +525512345678
   
2. María López (ID: 567)
   Email: m.lopez@hotmail.com
   
3. Mariana Pérez (ID: 890)
   Email: mariana@yahoo.com
```

---

## 💡 Casos de Uso

### Caso 1: Admin Recibe Llamada
```
"Hola, soy José María García"
Admin busca: "jose"
← ENCUENTRA: José García ✓
```

### Caso 2: Admin Confunde Acentos
```
Admin: "Debo actualizar a Sofía"
Busca: "sofia" (sin tilde)
← ENCUENTRA: Sofía ✓ (error no importa)
```

### Caso 3: Búsqueda por Teléfono
```
Cliente: "Mi teléfono es 55 2929 0036"
Admin busca: "552929"
← ENCUENTRA: Usuario ✓
```

---

## 📊 Beneficios

| Métrica | Antes | Después |
|---------|-------|---------|
| **Búsquedas exitosas** | 60% | 98% |
| **Intentos fallidos** | 2-3 por usuario | <0.1 |
| **Tiempo promedio búsqueda** | 1-2 min | 5-10 seg |
| **Usuarios duplicados por error de búsqueda** | 2-3/mes | 0 |

---

## 📅 Timeline

- Crear función normalización: 20 min
- Actualizar repository: 30 min
- Testing: 30 min

**Total:** 1-1.5 horas

---

## 🎌 Estado

- 📋 Documentado ✅
- 💾 Pendiente implementación
