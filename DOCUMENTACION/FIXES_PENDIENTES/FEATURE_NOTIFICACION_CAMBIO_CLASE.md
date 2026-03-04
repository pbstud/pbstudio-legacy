# 📧 FEATURE: Notificaciones por Cambio de Clase a Asistentes

**Fecha de documentación:** 03/03/2026  
**Prioridad:** 🟠 IMPORTANTE  
**Impacto:** Comunicación + Asistencia + Confianza del cliente  
**Timeline estimado:** 2-4 horas  
**Estado:** 📋 DOCUMENTADO - PENDIENTE IMPLEMENTACIÓN

---

## 📌 Resumen

Cuando un admin **cambia**, **cancela** o **reprograma** una clase, los estudiantes inscritos **no reciben aviso**. Esto causa:
- Estudiantes que van a hora/salón viejo
- Inasistencias innecesarias
- Molestia de los clientes

**Queremos:** Notificar automáticamente a todos los inscritos cuando cambia algo importante.

---

## ❌ Problema Actual

### Escenario

```
Miércoles 10:00 AM
Admin: "La clase de Yoga se mueve a 14:00"
- Sistema actualiza en BD ✓
- Admin verifica en backend ✓
- Estudiante recibe mail: ❌ NO

Resultado:
- 5 personas llegan a las 10:00
- No hay instructor
- Confusión, quejas, cancelaciones
```

### Eventos que debería notificar

1. **Cambio de Horario** (10:00 → 14:00)
2. **Cambio de Salón** (Sala A → Sala B)
3. **Cambio de Instructor** (María → Juan)
4. **Cancelación de Clase** (clase no se dicta)
5. **Reprogramación** (Lunes → Martes)

---

## ✅ Solución

### Flujo Ideal

```
1. Admin edita clase:
   └─ Cambia horario 10:00 → 14:00
   
2. Sistema detecta el cambio:
   └─ Compara campo anterior vs nuevo
   
3. Si hay cambio importante:
   └─ Obtiene lista de inscritos (Reservations)
   
4. Por cada inscrito:
   └─ Genera correo personalizado
   └─ Envía usando mailer
   
5. Registra en logs:
   └─ "20 correos enviados a inscritos"
   
6. ✅ Resultado:
   - Todos notificados ✓
   - Nadie sorprendido ✓
```

### Contenido del Email

```
═══════════════════════════════════════════════════
📢 CAMBIO EN TU CLASE - PBStudio

Hola María,

Tu clase de Yoga ha sido **REPROGRAMADA**:

ANTES:
  📅 Miércoles 10 Marzo
  🕐 10:00 AM - 11:00 AM
  📍 Sala A

AHORA:
  📅 Miércoles 10 Marzo
  🕐 2:00 PM - 3:00 PM
  📍 Sala B
  👨‍🏫 Instructor: Juan López

⚠️ Por favor ACTUALIZA TU CALENDARIO

Si no puedes asistir a la nueva hora,
puedes cancelar desde tu perfil.

¿Preguntas? Contáctanos →

═══════════════════════════════════════════════════
```

---

## 🔧 Implementación

### 1️⃣ Detectar Cambios en la Clase

En `SessionController::edit()` o `SessionDayController::editDay()`:

```
ANTES: Session existente
  • horario: 10:00
  • salón: Sala A
  • instructor: María

DESPUÉS: Guardar cambios
  • horario: 14:00
  • salón: Sala A
  • instructor: María

COMPARAR:
  • Horario cambió: 10:00 → 14:00 ✓
  • Salón igual: NO NOTIFICAR por esto
  • Instructor igual: NO NOTIFICAR por esto
```

### 2️⃣ Crear Evento de Cambio

Crear nuevo evento: `SessionChangedEvent`

```php
new SessionChangedEvent(
  session: $session,
  changes: ['timeStart' => ['10:00' => '14:00']]
)
```

### 3️⃣ Crear Listener

Escuchar `SessionChangedEvent`:

```
if (event.changes contiene horario/salón/instructor/cancelación):
  obtenere lista de inscritos → event.session.reservations
  por cada inscrito:
    crear mail con cambios
    enviar correo
  registrar en logs
```

### 4️⃣ Mailer para Notificación

Crear `SessionChangeMailer` con método:

```php
sendSessionChangedNotification(
  session: Session,
  user: User,
  changes: array
)
```

Genera correo con:
- Cambios detectados
- Nuevo horario/salón
- Link a perfil para cancelar si desea

### 5️⃣ Excepciones

No notificar si:
- Cambio es menor (ej: solo actualiza descripción)
- Horario es exacto pero cambió de "09:59" a "10:00"
- Es más de 24h después de que pasó la clase

---

## 💡 Casos de Uso

### Caso 1: Admin Cambia Horario
```
Lunes 10 AM → Lunes 14 PM
Inscritos: 15
✅ 15 correos enviados en < 1 segundo
```

### Caso 2: Cancela Clase por Instructor Enfermo
```
Miércoles 18:00 CANCELADA
Inscritos: 8
✅ 8 correos "Tu clase fue cancelada. Puedes:
   - Cambiar a otra clase
   - Solicitar reembolso"
```

### Caso 3: Mueve Salón Último Minuto
```
Cambio: Sala A → Sala C (15 min antes)
❌ Si es < 2h: podría no notificar (muy tarde)
⚠️ O notificar urgent: "⚠️ ÚLTIMO MINUTO: TU CLASE CAMBIA DE SALÓN"
```

---

## 📊 Beneficios

| Métrica | Antes | Después |
|---------|-------|---------|
| **Inasistencias por cambios** | 5-10/mes | 0-1/mes |
| **Llamadas de confusión** | 3-5/día | <1/día |
| **Satisfacción de cliente** | Media | Alta |
| **Confianza en comunicación** | Baja | Alta |

---

## ⚙️ Configuración

- Evento: `SessionChanged` (nuevo)
- Listener: `SessionChangeListener` (nuevo)
- Mailer: `SessionChangeMailer` (nuevo)
- Template: correo HTML con cambios detallados

---

## 📅 Timeline

- Crear evento: 15 min
- Crear listener: 30 min
- Crear mailer: 45 min
- Template: 20 min
- Testing: 30 min

**Total:** 2-2.5 horas

---

## 🎌 Estado

- 📋 Documentado ✅
- 💾 Pendiente implementación
