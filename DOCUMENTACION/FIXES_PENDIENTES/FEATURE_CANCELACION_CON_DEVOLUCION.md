# 🔄 FEATURE: Cambiar o Cancelar Clase hasta 2h Antes con Devolución

**Fecha de documentación:** 03/03/2026  
**Prioridad:** 🟠 IMPORTANTE  
**Impacto:** Experiencia del cliente + Confianza + Operación  
**Timeline estimado:** 4-8 horas  
**Estado:** 📋 DOCUMENTADO - PENDIENTE IMPLEMENTACIÓN

---

## 📌 Resumen Ejecutivo

Actualmente, un usuario puede **cambiar o cancelar su reservación**, pero hay **dos problemas**:

1. ❌ **No hay devolución automática de dinero** si se cancela dentro de cierta ventana
2. ❌ **No hay regla de tiempo** (puede cancelar en cualquier momento)

**Queremos:** Permitir cambios/cancelaciones **hasta 2 horas antes** de la clase, con **reembolso automático** a la tarjeta.

---

## ❌ Problema Actual

### Comportamiento Hoy

1. Usuario entra a su perfil → "Mis Clases"
2. Ve una clase próxima
3. Hace clic en "Cancelar" o "Cambiar"
   - ✅ La acción se procesa
   - ✅ Lugar se libera
   - ❌ **NO se devuelve dinero**
   - ❌ **No hay ventana de tiempo** (puede cancelar 1 minuto antes)

### Problemas Asociados

- 😠 **Cliente molesto:** Pagó y no le devuelven aunque cancele con tiempo
- 💰 **Pérdida de confianza:** Parece estafa o política injusta
- 📞 **Soporte saturado:** Clientes llaman pidiendo reembolso manual
- 📚 **Regla confusa:** No hay claridad sobre cuándo se puede cancelar
- 🔁 **Cambios sin penalidad:** Usuario cambia de clase a última hora sin costo

### Impacto Negativo

```
Ejemplo Real:
- Usuario: "Pagué $500 y quiero cancelar 3 horas antes"
- Sistema: "Aceptado. Lugar liberado. ❌ ¿Devolución?"
- Usuario: "¿Dónde está mi dinero?"
- Admin: "Hay que hacer reembolso manual" → 15 min de trabajo
```

---

## ✅ Solución Propuesta

### Regla de Negocio

```
┌─ VENTANA DE TIEMPO PARA CAMBIO/CANCELACIÓN ─┐
│                                               │
│  ✅ PERMITIDO con devolución: 2-24h antes    │
│  ⚠️  SIN devolución: 0-2h antes              │
│  ❌ NO PERMITIDO: después de comenzar        │
│                                               │
└───────────────────────────────────────────────┘

EJEMPLO:
Clase: Lunes 10 Marzo, 18:00

Acción              Tiempo      Resultado
─────────────────────────────────────────────
Cancelar el sábado  > 2h antes  ✅ Devolución 100%
Cambiar el lunes    1h 30min    ⚠️ Sin devolución
Cancelar lunes      30min       ❌ No permitido
Asistir             24:00       ✅ Clase tomada
```

---

## 🎯 Flujo Deseado

### En Mi Perfil - Vista Usuario

```
┌─ PRÓXIMAS CLASES ────────────────────────────────┐
│                                                   │
│ Lunes 10 Marzo - Yoga 18:00 (Sala A)             │
│ Instructor: María                                 │
│ ────────────────────────────────────────────     │
│ [CAMBIAR CLASE]  [CANCELAR]                      │
│                                                   │
│ ⏰ Aún tienes 18 horas para cambiar sin penalidad│
│    (2 horas = límite de devolución 100%)        │
│                                                   │
└───────────────────────────────────────────────────┘
```

### Flujo 1: Usuario Cancela (Más de 2 horas antes)

```
1. Usuario hace clic [CANCELAR]
   ↓
2. Sistema valida:
   - ✓ Clase es en 18 horas (> 2 horas)
   - ✓ Usuario está inscrito
   - ✓ Transacción tiene estado PAID
   ↓
3. Mostrar confirmación:
   "Se cancelará tu reservación y se devolverá $500 
    a tu tarjeta en 24-48h. ¿Estás seguro?"
   ↓
4. Usuario confirma
   ↓
5. Sistema ejecuta:
   a) Actualizar estado de transacción → REFUNDED
   b) Procesar reembolso con Conekta
   c) Liberar lugar en sesión
   d) Enviar correo: "Tu reembolso fue procesado"
   ↓
6. ✅ Resultado: 
   - Reservación eliminada
   - Dinero devuelto
   - Lugar disponible para otro
```

### Flujo 2: Usuario Cancela (Menos de 2 horas)

```
1. Usuario hace clic [CANCELAR]
   ↓
2. Sistema valida:
   - ✓ Clase es en 1 hora (< 2 horas)
   ↓
3. Mostrar advertencia:
   "Ya pasó la ventana de 2 horas.
    Puedes cancelar pero NO se devolverá dinero.
    Pasa tu lugar a otro usuario desde tu perfil."
   ↓
4. Usuario confirma (o cancela)
   ↓
5. Si confirma:
   - Reservación eliminada
   - Dinero NO devuelto (pase por pérdida)
   - Lugar disponible
   - Correo: "Tu reservación fue cancelada sin devolución"
```

### Flujo 3: Usuario Cambia de Clase

```
Mismo que Flujo 1, pero:

Si cambia a clase próxima > 2h:
  ✅ Nueva reservación, sin cargo extra
  
Si cambia a clase próxima < 2h:
  ⚠️ Nueva reservación, pero se pierde crédito de la anterior
```

---

## 🔧 Cómo Implementar (Vista Simple)

### Cambios Necesarios

#### 1️⃣ **Agregar lógica de validación de tiempo**
- Función que calcule: `tiempo_hasta_clase = dateStart - ahora`
- Devuelve: "permitido_con_devolucion", "permitido_sin_devolucion", "no_permitido"

#### 2️⃣ **Actualizar botones en template** (my_reservations.html.twig)
- Cambiar: Mostrar botón [CAMBIAR] solo si `tiempo_hasta_clase > 0h`
- Cambiar: Mostrar botón [CANCELAR] solo si `tiempo_hasta_clase > 0h`
- Agregar: Mensaje de tiempo restante con tooltip

#### 3️⃣ **Mejorar controlador de cancelación**
- Recibir parámetro: `requested_action` (cancel / change)
- Validar si es cancelación:
  - Si > 2h: procesar reembolso + cambiar estado transacción
  - Si <= 2h: mostrar advertencia, requerir confirmación
- Ejecutar lógica según aprobación

#### 4️⃣ **Integración con Conekta (reembolso)**
- Usar SDK de Conekta: `refund($charge_id, $amount)`
- Manejar errores (tarjeta vencida, etc.)
- Registrar en logs

#### 5️⃣ **Estados de Transacción**
- Agregar nuevo estado: `REFUNDED` (dinero devuelto)
- Actualizar máquina de estados

#### 6️⃣ **Correos automáticos**
- Correo al cancelar con devolución: "Tu dinero será devuelto en 24-48h"
- Correo al cancelar sin devolución: "Reservación cancelada. No hay devolución."

---

## 💡 Casos de Uso

### Caso 1: Cliente Responsable
```
Viernes 14:00 = Clase el lunes 18:00 (4 días = 96 horas)
Usuario: "No voy a poder asistir"
1. Entra a perfil
2. Ve: "Aún tienes 4 días para cambiar"
3. Hace clic [CANCELAR]
4. Sistema devuelve inmediatamente
5. Correo: "Reembolso procesado ✅"
```

### Caso 2: Cliente de Última Hora
```
Lunes 16:30 = Clase 18:00 (1.5 horas)
Usuario: "Se me presentó algo"
1. Entra a perfil
2. Ve: "⚠️ Menos de 2 horas. No hay devolución."
3. Decide: ¿Cancelar o cambiar?
4. Si cancela: pierde dinero (aprendió la lección)
```

### Caso 3: Cambio a Otra Clase
```
Usuario: "Mejor voy el martes"
1. Hace clic [CAMBIAR CLASE]
2. Si hay lugar en martes y es > 2h:
   ✅ Cambio sin cargo
3. Si martes es < 2h:
   ⚠️ Cambio permitido, pero pierde dinero del cambio anterior
```

---

## 📊 Beneficios Esperados

| Aspecto | Antes | Después |
|---------|-------|---------|
| **Satisfacción del cliente** | Media | Alta |
| **Llamadas a soporte** | 15-20/día | 2-3/día |
| **Tiempo de reembolso manual** | 15 min × N | AUTOMÁTICO |
| **Claridad de regla** | Confusa | Clara (2h) |
| **Confianza de marca** | Baja | Alta |
| **Retención de clientes** | ~70% | ~85% |

---

## ⚠️ Validaciones Importantes

- ✓ Solo si usuario es propietario de la reservación
- ✓ Solo si clase no ha comenzado
- ✓ Solo si transacción está en estado PAID
- ✓ Validar saldo de cuenta para reembolso
- ✓ Registrar auditoría (quién canceló, cuándo, razón)
- ✓ Manejar errores de Conekta API

---

## 🔐 Consideraciones de Seguridad

1. **No permitir reembolsos duplicados:** Registrar intent de reembolso
2. **Proteger contra abuse:** Limitar cambios (máximo 3 por semana)
3. **Validar timestamp:** Hacer doble check que esté dentro del rango

---

## 📅 Timeline Propuesto

- **Análisis de entidades:** 30 min
- **Lógica de validación:** 45 min
- **UI/Template:** 45 min
- **Integración Conekta:** 1.5 h
- **Testing (cambios, cancelaciones, edge cases):** 1.5 h
- **Documentación:** 30 min

**Total:** 5-6 horas

---

## 🎌 Estado Actual

- 📋 Documentado ✅
- 💾 Pendiente implementación
- 🧪 Sin testing
- 📦 No merged a main
