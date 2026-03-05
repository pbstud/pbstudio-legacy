# 📋 CONSULTA AL DIRECTOR GENERAL - Features Pendientes

**Fecha:** 04 Marzo 2026  
**Preparado por:** Equipo Técnico  
**Propósito:** Validar reglas de negocio antes de implementar cambios importantes  
**Total features a revisar:** 5 (1 urgente + 4 operacionales)

---

## 🎯 RESUMEN EJECUTIVO

Hemos identificado **5 features/mejoras** que requieren aprobación o clarificación sobre las **reglas de negocio** antes de implementar. Algunas implican cambios en políticas comerciales, otras afectan operación diaria.

**Este documento NO es técnico** — es para definir **CÓMO DEBE FUNCIONAR EL NEGOCIO** en cada caso.

---

## ✅ TRABAJO REALIZADO - PROBLEMAS SOLUCIONADOS

En las últimos dias, se identificó **5 problemas** en el sistema y ya se han **arreglado completamente**. Acá el resumen sin términos técnicos:

### 1️⃣ **Horas de Clases Aparecían Incorrectas (Vacías)**
- **Qué pasó:** El sistema guardaba las horas de clase como "00:00" en lugar de la hora real
- **Impacto:** Calendarios y validaciones de tiempo fallaban → reservas con información incorrecta
- **Cómo lo solucionamos:** Corregimos el código que procesa fechas en 7 lugares del sistema
- **Estado:** ✅ **COMPLETADO Y VALIDADO** (02/03/2026)
- **Pruebas realizadas:** Sistema probado con tests automáticos — todas pasaron

### 2️⃣ **Clases Desordenadas en el Calendario**
- **Qué pasó:** Usuario veía "18:00, 10:00, 14:00, 08:00" en lugar de "08:00, 10:00, 14:00, 18:00"
- **Impacto:** Confusión al buscar horarios → mala experiencia de usuario
- **Cómo lo solucionamos:** Agregamos un ordenamiento por hora en la consulta a base de datos
- **Estado:** ✅ **COMPLETADO Y DEPLOYADO** (04/03/2026)

### 3️⃣ **Instructores No Pueden Cambiar Su Foto**
- **Qué pasó:** Admin selecciona foto nueva pero no se guarda
- **Impacto:** Perfiles de instructores ven con fotos viejas → aspecto unprofessional
- **Cómo lo solucionamos:** Reparamos el formulario de carga de imágenes
- **Estado:** ✅ **COMPLETADO Y DEPLOYADO** (04/03/2026, Commit: 786a5e54)

### 4️⃣ **Búsqueda de Usuarios Fallaba con Espacios**
- **Qué pasó:** Si admin buscaba "  Juan  " (con espacios antes/después), no encontraba nada
- **Impacto:** Admin pierde tiempo, no encuentra a usuarios para soporte
- **Cómo lo solucionamos:** Normalizamos los filtros (quitamos espacios al inicio/fin)
- **Estado:** ✅ **COMPLETADO Y EN PRODUCCIÓN** (04/03/2026)
- **Resultado:** 100% de búsquedas ahora encuentran lo que buscan

### 5️⃣ **Endpoints de Cambio/Cancelación Sin Protección**
- **Qué pasó:** Alguien podría atacar a un usuario y cambiar su reservación sin que lo sepa
- **Impacto:** Seguridad comprometida (CRÍTICO)
- **Cómo lo solucionamos:** Agregamos validación de seguridad (CSRF tokens) en 6 endpoints críticos
- **Estado:** ✅ **COMPLETADO E IMPLEMENTADO** (03/03/2026)
- **Protegidos:** cambios de sesión, cancelaciones, reset de password

---

## 🚨 PROBLEMAS CRÍTICOS PENDIENTES DE DECISIÓN

Durante el análisis del código, encontramos **3 problemas graves** que requieren decisión de negocio:

| # | Problema | Impacto | Urgencia | Requiere Decisión DG |
|---|----------|---------|----------|----------------------|
| **A** | **Overbooking** - Sistema vende más cupones que asientos disponibles | Clientes llegan a clase sin silla | 🔴 CRÍTICO | ¿Max 1 asiento por usuario? |
| **B** | **Sin validación de tiempo** - Cancelaciones permitidas fuera de ventana | Operación impredecible | 🔴 CRÍTICO | ¿Cuántas horas antes se permite? |
| **C** | **No hay notificaciones** - Clientes no se enteran de cambios de clase | Asistencia baja, frustración | 🟠 ALTA | ¿Qué cambios notificar? |

**Detalle de estos 3 problemas AND sus opciones:** Ver secciones 1, 2 y 3 más abajo.

---

## 📊 ÍNDICE DE CONSULTAS

| # | Feature | Tipo | Decisión Requerida | Prioridad |
|---|---------|------|-------------------|-----------|
| 1 | [Cancelación/cambio sin devolución](#1-cancelación-y-cambio-de-clase-sin-devolución-de-dinero) | Política Operativa | ¿Qué parámetros ajustar? | 🟠 Alta |
| 2 | [Validación de reservas (doble asiento)](#2-validación-de-reservas-prevenir-doble-asiento-por-usuario) | Bug de Validación | ¿Máx 1 asiento por usuario? | 🔴 Urgente |
| 3 | [Notificación de cambios](#3-notificación-automática-de-cambios-en-clases) | Comunicación | ¿Qué cambios notificar? | 🟡 Media |
| 4 | [Carga masiva de horarios](#4-carga-masiva-de-horarios) | Operación Admin | ¿Aprobar herramienta? | 🟡 Media |
| 5 | [Correos lista de espera](#5-correos-automáticos-de-lista-de-espera) | Comunicación | ¿Validar implementación? | 🟢 Baja |

---

## 1️⃣ CANCELACIÓN Y CAMBIO DE CLASE (SIN DEVOLUCIÓN DE DINERO)

### 📌 Contexto Técnico Actual

**Regla fija del negocio (no negociable):**
- **NO se devuelve dinero** a tarjeta, transferencia ni efectivo.
- El ajuste de política será solo sobre **parámetros operativos** de cancelación y cambio.

**Flujo hoy (base sobre la cual se ajusta):**
- Ruta de cancelación: `/reservacion/{id}/cancelar` (`ProfileController::reservationCancel()`)
- `ReservationService::cancel()` libera lugar y gestiona estado de la transacción
- Sistema permite gestionar la reservación desde perfil del cliente
- El tema pendiente es definir **qué ventanas y restricciones** aplican

**Código relevante:**
- `src/Service/Reservation/ReservationService.php::cancel()`
- `src/Controller/ProfileController.php::reservationCancel()`
- `src/Entity/Transaction.php` (estados: PENDING, PAID, DENIED, CANCEL)

---

### ❓ PREGUNTAS PARA CLARIFICAR REQUERIMIENTO

#### **Pregunta 1: Confirmación de política fija**

¿Confirmamos oficialmente que la política será siempre:

- **Sin devolución de dinero en ningún escenario**
- Solo se ajustan reglas de cancelación/cambio (tiempos, límites, excepciones)

**→ ¿Confirmado?** ☐ Sí ☐ No

---

#### **Pregunta 2: ¿Cuál será la ventana para CANCELAR clase?**

**Ejemplo de ajuste solicitado:** pasar de 2 horas a 12 horas antes de la clase.

**Opción A:** Mantener `2h` antes
- ✅ Más flexible para cliente
- ❌ Más cancelaciones de última hora

**Opción B:** Cambiar a `6h` antes
- ✅ Punto medio entre flexibilidad y orden operativo

**Opción C:** Cambiar a `12h` antes
- ✅ Mejora planeación operativa (instructores/salones)
- ✅ Reduce movimientos de último minuto

**Opción D:** Cambiar a `24h` antes
- ✅ Operación más estable
- ❌ Política más estricta para cliente

**→ ¿Ventana oficial para CANCELAR?** ___________________

---

#### **Pregunta 3: ¿Cuál será la ventana para CAMBIAR clase?**

**Opción A:** Misma ventana que cancelación
- Regla simple de comunicar

**Opción B:** Cambio más flexible que cancelación
- Ejemplo: cancelar hasta 12h, cambiar hasta 6h

**Opción C:** Cambio más estricto que cancelación
- Ejemplo: cancelar hasta 12h, cambiar hasta 24h

**→ ¿Ventana oficial para CAMBIAR?** ___________________

---

#### **Pregunta 4: ¿Qué pasa si el cliente está FUERA de ventana?**

**Opción A:** Bloquear todo (no cancelar ni cambiar)
- Mensaje: "Ya estás fuera del tiempo permitido"

**Opción B:** Permitir solo CAMBIO, bloquear CANCELACIÓN
- Ayuda a mantener ocupación

**Opción C:** Permitir gestión manual por admin (casos excepcionales)
- Requiere proceso interno de soporte

**Opción D:** Permitir ambos pero con penalización operativa (sin dinero)
- Ejemplo: se marca como "movimiento tardío"

**→ ¿Regla fuera de ventana?** ___________________

---

#### **Pregunta 5: ¿Cuántas veces puede cambiar una misma reservación?**

**Opción A:** Sin límite
- ✅ Máxima flexibilidad
- ❌ Puede generar abuso y ruido operativo

**Opción B:** Máximo 1 cambio por reservación
- ✅ Regla clara y controlada

**Opción C:** Máximo 2 cambios por reservación
- ✅ Balance entre control y flexibilidad

**Opción D:** 1 cambio automático + más cambios solo por admin
- ✅ Controla abuso y mantiene canal de excepción

**→ ¿Límite de cambios?** ___________________

---

#### **Pregunta 6: ¿Habrá reglas especiales por tipo de clase/horario?**

**Opción A:** Misma regla para todas las clases
- ✅ Simple de operar y comunicar

**Opción B:** Reglas distintas para clases premium/alta demanda
- Ejemplo: premium 24h, regular 12h

**Opción C:** Reglas distintas por horario pico
- Ejemplo: 6-9 AM y 6-9 PM más estricto

**→ ¿Aplicamos reglas especiales?** ___________________

**Pregunta adicional - UI/Mensajes al cliente:**
¿Qué mensaje debe mostrarse antes de confirmar un cambio o cancelación?
- ☐ Mostrar ventana exacta: "Puedes gestionar hasta X horas antes"
- ☐ Mostrar advertencia clara al límite: "Última oportunidad para cambiar"
- ☐ Mensaje corto estándar sin detalle

---

### 💡 RECOMENDACIÓN TÉCNICA

**Sugerencia del equipo técnico (alineada a tu indicación):**
- Mantener política fija: **nunca devolución de dinero**
- Ajustar ventana de cancelación de `2h` a `12h` (si DG lo aprueba)
- Usar misma ventana para cambio para evitar confusión
- Fuera de ventana: bloquear autoservicio y dejar excepción por admin
- Límite recomendado: 1 cambio por reservación
- **Timeline estimado:** 2-3 horas (ajuste de reglas y mensajes)
- **Riesgo:** Bajo (no integra pagos ni reembolsos)

---

---

## 2️⃣ VALIDACIÓN DE RESERVAS: Prevenir Doble Asiento por Usuario

### 📌 Contexto Técnico Actual

**Problema confirmado con evidencia real:**
- Usuario ID 14567 tiene **DOBLE asiento** en sesión #69999: asientos #1 y #11
- En una clase de Yoga, es IMPOSIBLE ocupar 2 asientos simultáneamente = overbooking
- **Root cause:** No existe validación de "1 usuario = máx 1 asiento por clase"

**Flujo actual inseguro:**
1. Usuario A hace clic en "Reservar asiento #1" → `ReservationService::reservate()`
2. Base de datos verifica: "¿Existe asiento #1 sin dueño?" ✓ SÍ
3. **NO verifica:** "¿Ya tiene OTRO asiento en ESTA sesión?" ← **BUG CRÍTICO**
4. Guarda: `INSERT INTO reservation (user_id=14567, session_id=69999, place_number=1)`
5. Usuario clica rápido en "Reservar asiento #11" 
6. Base de datos: "¿Existe asiento #11?" ✓ SÍ
7. Guarda: `INSERT INTO reservation (user_id=14567, session_id=69999, place_number=11)` ← **2do BUG**

**Código relevante (hallazgos técnicos):**
- `src/Service/Reservation/ReservationService.php::reservate()` (línea ~145)
  - NO hace WHERE `user_id=X AND session_id=Y` antes de INSERT
  - NO tiene SELECT ... FOR UPDATE (lock transaccional)
- `src/Entity/Reservation.php` (línea ~23)
  - Constante `MAX_UNLIMITED_RESERVATIONS = 2` existe **pero NO se usa en código**
- Base de datos: 
  - Sin restricción UNIQUE `(user_id, session_id)` que previniese duplicados
  - Sin constraint de integridad referencial para limitaciones

**Escenarios del problema confirmados:**
1. **Doble asiento en misma sesión:** Usuario ID 14567 tiene asientos #1 Y #11 en sesión #69999 (caso real)
2. **Sobreocupación:** Clase de 20 lugares confirmados pero 22 reservas activas en BD
3. **Paquetes ilimitados:** Usuario intenta 3 asientos misma clase, consumiendo 3 cupones

**No es preocupación técnica:** Concurrencia de usuarios simultáneos (bajo volumen de tráfico actual)

**Impacto actual:** 
- Ingresos: Se venden más cupones de los que hay asientos
- Insatisfacción: Clientes llegan a física sala y NO hay lugar
- Reputación: "Sistema no funciona bien"

---

### ❓ PREGUNTAS PARA CLARIFICAR REQUERIMIENTO

#### **Pregunta 1: ¿Cuántos asientos MÁXIMO puede reservar un usuario en UNA MISMA CLASE?**

**Contexto técnico:** Actualmente el sistema permite N asientos sin validar.

**Opción A:** 1 asiento máximo por usuario por clase (Regla estricta)
- Un usuario = una clase = una fila/lugar (modelo 1:1)
- Sistema bloquea intento de 2º asiento: "Ya tienes otro asiento en esta clase"
- + Validación en BD: `UNIQUE(user_id, session_id)` + error en trigger
- ✅ Evita overbooking 100%, arquitectura simple
- ❌ No permite que pareja/hermanos se sienten juntos desde 1 perfil
- ❌ Grupos deben coordinarse (cada uno reserva desde su perfil)

**Opción B:** 2-3 asientos máximo (Para grupos pequeños)
- Usuario puede tener 2-3 lugares EN MISMO BLOQUE (ej: fila 2, asientos 5-6-7)
- Sistema requiere: Validar que asientos sean **contiguos** + **misma válida**
- + UI: Mostrar selector "¿Cuántos asientos para tu grupo? (1-3)"
- ✅ Mejora experiencia para familias/parejas
- ⚠️ Overbooking si alguien reserva 3 y no va = 3 lugares vacíos
- ⚠️ Complejidad en BD: necesita lógica de "asientos contiguos"

**Opción C:** Clases privadas como excepción
- Clases grupales = 1 asiento por usuario
- Clases privadas = usuario=instructor=no tiene límite (paquete personal)
- ✅ Diferencia casos de uso
- ⚠️ Más lógica condicional

**→ ¿Cuál modelo es correcto para tu negocio?** ___________________

**Pregunta adicional - Paquetes ilimitados:**
Si un cliente compra "Ilimitado" ¿puede tener múltiples asientos en UNA clase?
- ☐ Sí, ilimitado significa ilimitado en TODO
- ☐ No, sigue siendo 1 asiento por clase (límite físico)
- ☐ Sí en clases privadas, no en grupales

---

#### **Pregunta 2: ¿Qué pasa si cliente intenta reservar un asiento que ya está ocupado?**

**Contexto:** Usuario elige asiento #7 en el mapa, pero justo otro cliente lo acaba de reservar.

**Opción A:** Mostrar error claro + listar alternativas
- Error: "Ese asiento acaba de ser reservado"
- Mostrar: "Otros asientos disponibles: #3, #5, #6, #8"
- ✅ UX transparente, cliente entiende
- ✅ Sin complicaciones técnicas

**Opción B:** Rechazar silenciosamente (sin error)
- Cliente intenta guardar → sesión expira sin mensaje
- ❌ Experiencia pésima (cliente no sabe qué pasó)

**Opción C:** Asignar automáticamente el siguiente disponible
- Cliente clica #7 ocupado → Sistema asigna #3 sin preguntar
- ⚠️ Cliente puede molestarse (no le pedimos permiso)

**→ ¿Cuál comportamiento prefieres?** ___________________

**Pregunta adicional - Recarga del mapa:**
¿Cada cuánto tiempo debería refrescarse el mapa de disponibilidad?
- ☐ Al cargar la página (snapshot estático)
- ☐ Cada 10-15 segundos automáticamente  
- ☐ Solo cuando usuario clica "Actualizar disponibilidad"

---

### 💡 RECOMENDACIÓN TÉCNICA

**Propuesta del equipo técnico:**
- **Regla simple:** 1 asiento máximo por usuario por sesión (modelo 1:1)
- **Implementación:** Agregar restricción UNIQUE en BD: `UNIQUE(user_id, session_id)`
- **Validación en aplicación:** En `ReservationService::reservate()`, verificar si usuario ya tiene reserva en esa sesión ANTES de insertar
- **Mensaje de error:** "Ya tienes otro asiento en esta clase. Cancela ese primero si quieres cambiar."
- **Refrescado del mapa:** Cada 10 segundos (balance entre refresco y carga de servidor)
- **Timeline de implementación:** 2-3 horas
  - 30 min: Agregar constraint en BD + migración
  - 1 hora: Validación en código + tests
  - 30 min: UI mensajes de error + confirmación
- **Riesgo:** Bajo (no hay concurrencia crítica en volumen actual)
- **Urgencia:** 🔴 DEPLOY en 1-3 días (previene overbooking)

---

---

## 3️⃣ NOTIFICACIÓN AUTOMÁTICA DE CAMBIOS EN CLASES

### 📌 Contexto Técnico Actual

**Problema real confirmado:**
Cuando un admin modifica una clase, los estudiantes inscritos **NO reciben ningún aviso**.

**Ejemplo de impacto:**
- Clase de Yoga: Miércoles 10:00 AM (Sala A, instructora María)
- Admin cambia a: Miércoles 2:00 PM (Sala B, instructor Juan)
- Resultado: 5 clientes llegan a 10:00 a Sala A → SORPRESA DESAGRADABLE → molestia → cancelan próximas clases

**Flujo actual (sin notificación):**
1. Admin entra a `SessionController::edit()`
2. Cambia horario "10:00" → "14:00"
3. Guarda en BD: `UPDATE sessions SET start_time='14:00' WHERE id=69999`
4. **NO ejecuta:** crear evento, no busca listeners, no leer inscritos, no envía emails
5. Pantalla muestra "Actualizado ✓" — FIN

**Código relevante (gaps técnicos):**
- `src/Controller/SessionController.php::edit()` — solo hace UPDATE, sin eventos
- `src/Entity/Session.php` — entidad simple, NO tiene @ORM\HasLifecycleCallbacks
- **FALTA TOTAL (no existe):** `SessionChangedEvent` class
- **FALTA TOTAL (no existe):** `SessionChangeListener` service
- Mailers existentes pero sin gatillarse desde cambios:
  - `src/Service/Mail/ReservationMailer.php` → se usa solo para confirmación de reserva
  - `src/Service/Mail/NotificationMailer.php` → genérico, nunca usado
- Inscritos en DB: `SELECT u.email FROM user u JOIN reservation r ON u.id=r.user_id WHERE r.session_id=69999`

**Tipos de cambios posibles:**
1. **Cambio de horario:** 10:00 → 14:00 (crítico, usuario planeó su día)
2. **Cambio de fecha:** Lunes → Martes (crítico)
3. **Cambio de salón:** Sala A → Sala B (importante, usuario va al lugar equivocado)
4. **Cambio de instructor:** María → Juan (importante, algunos clientes eligieron por instructor)
5. **Cambio de capacidad:** 10 → 15 lugares (NO CRÍTICO para inscritos)
6. **Cancelación completa:** Clase eliminada (CRÍTICO, todos affectados)

**Decisión de negocio pendiente:** ¿Qué cambios disparan notificación?

---

### ❓ PREGUNTAS PARA CLARIFICAR REQUERIMIENTO

#### **Pregunta 1: ¿Qué cambios deben notificarse automáticamente?**

Selecciona SÍ/NO para cada tipo:

| Cambio | ¿Notificar? | Razón / Impacto |
|--------|-------------|-----------------|
| **Horario** (10:00 → 14:00) | ☐ Sí ☐ No | Usuario planeó su día en esa hora |
| **Fecha** (Lunes → Martes) | ☐ Sí ☐ No | Usuario agendó ese día específico |
| **Salón** (Sala A → Sala B) | ☐ Sí ☐ No | Usuario va a lugar EQUIVOCADO si no avisa |
| **Instructor** (María → Juan) | ☐ Sí ☐ No | Algunos clientes eligieron POR instructor |
| **Capacidad** (20 → 15 lugares) | ☐ Sí ☐ No | No afecta al inscrito (continúa yendo) |
| **Capacidad** (10 → 20 lugares) | ☐ Sí ☐ No | Noticia positiva (más clases de espera pueden entrar) |
| **Cancelación** (clase eliminada) | ☐ Sí ☐ No | **CRÍTICO** - cliente se prepara para nada |

**→ ¿Cuáles cambios disparan email?** ___________________

**Pregunta adicional:** ¿Hay cambios que deben bloquear al admin?
- ☐ No, el admin puede cambiar todo
- ☐ Sí, advertir si cambia <48h antes con "esto notificará a N personas"
- ☐ Sí, bloquear cambios <24h antes de clase (demasiado tarde)

---

#### **Pregunta 2: ¿Con cuánto tiempo de anticipación debe llegar la notificación?**

**Escenario:** Admin cambia clase a las 3:00 PM, la clase es a las 18:00 (5 horas antes)

**Opción A:** Enviada INMEDIATAMENTE al hacer el cambio
- Correo sale dentro de 1-2 minutos del cambio
- ✅ Cliente informado lo antes posible
- ⚠️ Si admin cambia 3 veces, usuario recibe 3 correos (spam)
- ⚠️ Si admin cambia algo equivocadamente y luego revierte, cliente vio cambio fantasma

**Opción B:** Solo si cambio es >24h antes de la clase
- Si cambio es <24h, NO envía email (debe hacerlo por teléfono)
- ✅ Evita spam de correos por ajustes de última hora
- ❌ Cliente a veces NO se entera de cambios críticos

**Opción C:** Batch diario (todos los cambios del día 18:00 en 1 email)
- Usuario recibe 1 resumen por día: "Tus clases fueron modificadas: ..."
- ✅ Menos emails (consolidado)
- ❌ Notificación puede llegar TOO LATE (si cambio fue a 10am y clase es 11am)

**Opción D:** Según criticidad
- Cancelación: INMEDIATO
- Horario/Fecha: INMEDIATO si >24h, esperar si <24h
- Instructor/Salón: Batch diario
- ✅ Balanceado (crítico rápido, no-crítico consolidado)
- ⚠️ Requiere lógica de prioridades (más código)

**→ ¿Cuándo enviar las notificaciones?** ___________________

**Pregunta adicional - Reembolsos:**
Si un CLIENTE NO PUEDE ASISTIR por el cambio, ¿qué ofrecemos?
- ☐ Opción para cancelar GRATIS (sin penalización)
- ☐ Crear CRÉDITO en su cuenta (no dinero que devolver)
- ☐ Sin condicional, ellos deciden si cancelen o no
- ☐ Nada especial (cambio está permitido, es responsabilidad del cliente)

---

#### **Pregunta 3: ¿El email debe permitir acciones?**

**Contenido actual del email (propuesta):**

```
Hola María,

Tu clase de Yoga ha sido REPROGRAMADA:

  ANTES: Lunes 10 Marzo, 10:00 AM - Sala A
  AHORA: Lunes 10 Marzo, 2:00 PM - Sala B

  Por favor, actualiza tu calendario.
  
  [VER DETALLES EN MI PERFIL]
```

**Opción A:** Email SOLO INFORMATIVO (sin botones de acción)
- Email: "Tu clase cambió de horario"
- Cliente debe entrar a perfil a ver detalles
- ✅ Simple, sin riesgo de errores
- ❌ Malas UX (cliente debe hacer clicks extra)

**Opción B:** Incluir botón "CANCELAR ESTA CLASE" directo en email
- Email con 2 botones:
  - [Sigo yendo] → confirma asistencia
  - [No puedo asistir] → cancela automáticamente
- ✅ UX rápida (1 click)
- ⚠️ Facilita cancelaciones (reduce asistencia)
- ⚠️ Requiere link seguro de un solo uso (CSRF protection)
- ⚠️ Si cliente clica por accidente, cancela sin confirmación

**Opción C:** Incluir botón "VER OTRAS CLASES DISPONIBLES"
- Email con:
  - [Ver el cambio en detalle]
  - [Buscar clase alternativa]
- ✅ Ayuda a re-agendar fácilmente
- ✅ Retiene cliente en el ecosistema
- ⚠️ Requiere búsqueda de clases en email (requiere token temporal)

**→ ¿Qué acciones permitir en el email?** ___________________

**Pregunta adicional - Notificación de multi-cambios:**
Si UN MISMO DÍA se hacen 3 cambios a la clase (horario, salón, instructor):
- ☐ Enviar 3 correos (uno por cada cambio)
- ☐ Enviar 1 email consolidado al final del día
- ☐ Esperar y enviar SOLO el estado final (ignorar cambios intermedios)

---

### 💡 RECOMENDACIÓN TÉCNICA

**Propuesta del equipo técnico:**
- Notificar: Cambios críticos (horario, fecha, cancelación) INMEDIATO si >24h antes, ocultar si <24h
- Email: Informativo + solo botón "[Ver en mi perfil]" (simple y seguro)
- Flujo: Crear `SessionChangedEvent` en Doctrine lifecycle + `SessionChangeListener` que activa email
- Correos: Usar templating Twig existente (`notification.html.twig`)
- **Timeline de implementación:** 3-4 horas
- **Prioridad:** 🟠 Alta (afecta asistencia)

---

---

## 4️⃣ MEJORA: Pantalla de Sesiones del Día (SessionDayController)

### 📌 Contexto Técnico Actual

**Situación actual:**
Existe pantalla en backend `SessionDayController` que permite crear **múltiples sesiones en un mismo día** desde una sola vista. La ventaja es que admin no necesita hacer N viajes al formulario de "crear sesión" — todas de 1 día en 1 pantalla.

**Problemas reportados:**
- ⚠️ Pantalla tiene ERRORES (detalles a confirmar con DG)
- ⚠️ Flujo INCOMPLETO (falta validación/automatización)
- ❓ Equipo técnico necesita **clarificar** qué DG espera de esta pantalla

**Ruta:** `GET /backend/session-day/{date}` (SessionDayController::form())  
**Código relevante:**
- `src/Controller/Backend/SessionDayController.php` (form, create, etc.)
- `src/Form/SessionDayType.php` (formulario compuesto)
- `src/Service/SessionDayService.php` (lógica de creación)

---

### ❓ PREGUNTAS PARA CLARIFICAR REQUERIMIENTO

#### **Pregunta 1: ¿Cómo debería funcionar la pantalla de "Sesiones del Día"?**

**Contexto:** Admin entra a `/backend/session-day/2026-03-10` (Lunes 10 Marzo)

**Opción A:** Mostrar tabla de sesiones EXISTENTES del día + formulario para AGREGAR nuevas
- Tabla: "Sesiones de Lunes 10 Marzo" con todas las clases programadas
- Formulario abajo: "Agregar nueva sesión"
- Admin llena campos (horario, tipo, instructor, salón)
- Admin hace clic "Guardar" → se agrega 1 sesión a la tabla sin recargar
- Admin puede agregar MÚLTIPLES en paralelo, luego confirmar "Guardar todo el día"
- ✅ Eficiente (N sesiones sin recargar)
- ✅ Visual (ve tabla mientras agrega)

**Opción B:** Mostrar formulario repetible flexible
- Admin ve campo "¿Cuántas sesiones quieres crear?" → escribe "6"
- Sistema genera 6 filas de input con horarios pre-sugeridos (9, 10, 11, 12, 13, 14)
- Admin modifica cada fila (tipo, instructor, salón)
- Admin hace clic "Guardar todo" → todas a la vez
- ✅ Muy eficiente (estructura adivinada)
- ⚠️ Requiere JavaScript intermediario

**Opción C:** Mezcla A + B — Clone automático
- Admin crea PRIMERA sesión (9am Yoga, María, Sala A, 20 lugares)
- Admin clica "Repetir esta estructura X veces" → sistema propone:
  - 10am: Yoga, María, Sala A, 20 lugares
  - 11am: Yoga, María, Sala A, 20 lugares
  - 12pm: Yoga, María, Sala A, 20 lugares
- Admin ajusta lo que quiera (ej: 12pm cambiar a Pilates, Juan)
- Sistema crea TODAS al confirmar
- ✅ Ultra eficiente (primero define 1, luego propone repetición)
- ✅ Inteligente (ajusta horarios automáticamente)

**→ ¿Cuál es el flujo ideal?** ___________________

**Pregunta adicional:** ¿Debería haber opción de "Cargar Horarios desde un Plantilla" (día anterior)?
- ☐ Sí, "Copiar todas las sesiones de Lunes 3 Marzo a hoy"
- ☐ No, cada día se hace manual desde cero
- ☐ Parcial, copiar SOLO horarios/tipos, cambiar instructor manual

---

#### **Pregunta 2: Mientras escribo las CONDICIONES de la 1ª clase, ¿qué automatizaciones quieres?**

**Escenario:** Admin está llenando primera sesión del día (9am Yoga):
1. Horario: **9:00 AM**
2. Tipo: **Yoga**
3. Instructor: **María**
4. Salón: **Sala A**
5. Capacidad: **20 lugares**

**Preguntas de automatización:**

**A) Al seleccionar TIPO (Yoga):**
- ☐ NO hacer nada, admin llena todo manual
- ☐ SÍ, auto-buscar "instructor más común para Yoga" → sugerir María
- ☐ SÍ, auto-mostrar "salones con capacidad >15" → sugerir Sala A
- ☐ SÍ, todas las anteriores

**B) Al seleccionar INSTRUCTOR (María):**
- ☐ NO hacer nada
- ☐ SÍ, mostrar "María tiene disponible: 9am ✅, 10am ✅, 11am ✅, 2pm ❌"
  - (Esto ayuda al admin a NO crear conflictos)
- ☐ SÍ, bloquear "10am y 11am son imposibles para María en X día" (si ya tiene clases)
- ☐ SÍ, llenar salón recomendado basado en preferencia de María

**C) Al seleccionar SALÓN (Sala A):**
- ☐ NO hacer nada
- ☐ SÍ, mostrar "Sala A disponible: 9am ✅, 10am ✅, 11am ❌" (ya ocupada)
- ☐ SÍ, sugerir capacidad típica de Sala A (ej: 20, 25, 30)
- ☐ SÍ, proponer horarios alternativos si 9am no está libre

**D) Al llenar CAPACIDAD (20 lugares):**
- ☐ NO hacer nada
- ☐ SÍ, calcular automáticamente precio (ej: $50/persona × 20 = $1000 cuota mín)
- ☐ SÍ, sugerir capacidad basada en Sala (Sala A = 20, Sala B = 15, etc.)

**→ ¿Qué automatizaciones quieres?** ___________________

---

#### **Pregunta 3: Una vez lleno la 1ª sesión, ¿cómo agrego el resto del día?**

**Opción A:** "Guardar esta sesión" + volver a form vacío (repite Q2)
- Admin guarda 9am Yoga → se habilita nuevo form para segunda sesión
- Admin llena 10am Pilates → guarda → nuevo form para tercera
- Admin crea así todas las sesiones 1 por 1
- ❌ Vuelve al problema original (muchos clics)

**Opción B:** "Repetir esta sesión automáticamente" con ajustes
- Admin después de llenar 9am: clica "Generar próximas N sesiones"
- Sistema propone valores interpolados:
  - 9:00 AM Yoga (Maria, Sala A, 20 lugares) → pedida
  - 10:00 AM Yoga (Maria, Sala A, 20 lugares) → propuesta
  - 11:00 AM Yoga (Maria, Sala A, 20 lugares) → propuesta
- Admin puede cambiar tipo/instructor en alguna (ej: 12pm Pilates, Juan)
- Admin confirma → todas se crean
- ✅ MUY eficiente (define estructura, sistema rellena)
- ✅ Flexible (puede ajustar sin necesidad de recargar)

**Opción C:** Tabla editable en vivo
- Admin crea tabla de 8 filas (8 sesiones)
- Cada fila es editable in-place (horario, tipo, instructor, salón, capacidad)
- Admin llena todas las filas en paralelo (tipo spreadsheet)
- Admin confirma → todas se crean juntas
- ✅ Control granular
- ⚠️ Requiere JavaScript complejo

**→ ¿Flujo para agregar resto del día?** ___________________

**Pregunta adicional:** Después de crear las sesiones del día, ¿debería haber opción de:
- ☐ Clonar este día completo a otros días (Lunes 10 → Lunes 17, 24, 31)
- ☐ Publicar el día (cambiar estado de "borrador" a "activo")
- ☐ Enviar email a instructores con sus clases del día
- ☐ Todo lo anterior

---

### 💡 RECOMENDACIÓN TÉCNICA

**Propuesta del equipo técnico:**
- Opción **C** (Clone inteligente) en Pregunta 1
- **Automatizaciones:** B + C + D en Pregunta 2 (sugerencias + bloqueos de conflicto)
- Opción **B** (Repetir automático) en Pregunta 3
- Agregar validación en tiempo real de conflictos
- **Timeline de implementación:** 4-5 horas (si correcciones + mejoras)
  - 1 hora: Diagnosticar y corregir errores existentes
  - 2 horas: Agregar validaciones + automatizaciones
  - 1 hora: UI mejorada (tabla visual)
  - 30 min: Testing + confirmación
- **Prioridad:** 🟡 Media (operación diaria, ahorra +5h/sem)
- **ROI:** Se paga en mes 1

---

---

## 5️⃣ CORREOS AUTOMÁTICOS DE LISTA DE ESPERA

### 📌 Contexto Técnico Actual

**Estado actual - 80% implementado:**
- ✅ Código existe: `src/Service/WaitingList/WaitingListService.php`
- ✅ Mailers: `src/Service/Mail/WaitingListMailer.php`
- ✅ Cron job: `src/Command/WaitingListExpireCommand.php` (limpia esperas vencidas)
- ✅ Asignación automática cuando se libera lugar
- ⚠️ **Validación de correos:** NO se confirmó que se envíen siempre
- ⚠️ **Issue crítico:** `WaitingListService::checkAndReserve()` (línea ~234) **SIN transacción atómica**
  - Problema: Entre verificación de disponibilidad y INSERT de reserva, otro usuario podría tomar el lugar
  - Ejemplo: 3 personas en lista de espera, se libera 1 lugar → ambas reciben "reserva exitosa" → **Issue #49**

**Flujo actual (esperado pero sin validación):**
1. Clase LLENA: Usuario clica "Entrar en lista de espera"
2. Sistema: INSERT en `waiting_list` table (new status: WAITING)
3. Email 1: "Estás en lista de espera para Yoga..."
4. Clase POSTERIOR se cancelled o usuario cancela
5. Sistema: Detecta que hay lugar, busca primer usuario en lista (FIFO)
6. `checkAndReserve()`: Crea reservation, actualiza waiting_list (status: ASSIGNED)
7. Email 2: "¡Lugar disponible para ti! Confirma en 2h"
8. Usuario no confirma en 2h
9. Email 3: "Tu reserva expiró"

**Correos esperados a enviar:**
1. **Confirmación entrada lista:** "María, te agregamos a lista de espera para Yoga Lunes 18:00"
2. **Lugar asignado (CRÍTICO):** "¡BUENAS NOTICIAS! Tenemos lugar para ti. CONFIRMA en 2h: [BOTÓN CONFIRMAR]"
3. **Expiración:** "Se acabó el tiempo: tu lugar en Yoga fue para otro. Volviste a lista de espera."

**Decisión de negocio pendiente:** ¿CÓMO asignamos y cobramos? ¿CUÁNDO?

---

### ❓ PREGUNTAS PARA CLARIFICAR REQUERIMIENTO

#### **Pregunta 1: ¿CUÁNDO "nace" la lista de espera en una clase?**

**Escenario: Yoga tiene 20 lugares. Hoy se alcanzan 20 reservas.**

**Opción A:** Automáticamente cuando capacidad se alcanza
- Clase = 20/20 full → Usuario 21 intentaclicker "Reservar"
- Sistema: "Esta clase está llena. ¿Entrar en lista de espera?"
- Usuario confirma → se agrega a `waiting_list`
- ✅ Natural, usuario no hace nada extra
- ✅ Código existente soporta esto

**Opción B:** Admin controla manualmente
- Admin marca checkbox: "Esta clase cerrada a nuevas reservas, pero acepta lista de espera"
- Después: Solo usuarios en lista pueden "reservar"
- ✅ Control total
- ❌ Extra trabajo para admin

**Opción C:** Nunca automáticamente, solo por solicitud admin
- Admin crea lista de espera SÍ/NO cuando planifica
- ⚠️ Probablemente NO es el caso (parece innecesario)

**→ ¿Cuándo activar lista de espera?** ___________________

**Pregunta adicional:** ¿Las clases PRIVADAS entran en lista de espera?
- ☐ Sí, si cliente compra "clase privada 1-on-1" y luego se arrepiente, entra lista
- ☐ No, clases privadas son excepciones (no hay lista)
- ☐ Depende: Si instructor tiene disponibilidad, permitir lista (raro)

---

#### **Pregunta 2: ¿CÓMO asignamos el lugar desde lista de espera?**

**Escenario: Clase llena con 50 personas en lista de espera. Se cancela 1 lugar (usuario pagó pero canceló).**

**Opción A: FIFO (First In, First Out) / Antigüedad**
- Orden = quien entró primero a la lista
- Usuario #1 en lista → recibe email "Tenemos lugar para ti"
- Si no confirma en 2h → Usuario #2 recibe email
- ✅ Justo (primero es primero)
- ✅ Simple de implementar (solo ORDER BY created_at)
- ❌ No récompensa a clientes VIP

**Opción B: Por membresía/paquete adquirido**
- Usuarios con "membresía premium" se atienden primero
- Usuarios sin paquete se atienden después
- ✅ Monetiza mejor (premia inversión)
- ⚠️ Requiere categorizar usuarios en DB

**Opción C: Aleatorio (lotería)**
- Cuando se libera lugar, **lotería** selecciona usuario random de lista
- ✅ Sorpresa (algunos lo ven como justo)
- ❌ Confuso, podría causar frustración (por qué NO yo?)

**Opción D: Flexible - por atributos
- COMBO: Antigüedad + membresía + prioridad manual
- Sistema calcula "score de prioridad"
- ✅ Flexibilidad máxima
- ⚠️ Complejo de comunicar al usuario

**→ ¿Cuál estrategia de asignación?** ___________________

**Pregunta adicional:** ¿Qué pasa si usuario fue asignado pero NO puede asistir?
- ☐ Rechaza: "No puedo asistir" → vuelve a lista de espera
- ☐ Rechaza: "No puedo asistir" → pierde oportunidad (va al siguiente N)
- ☐ Se fuerza a aceptar (no hay opción de rechazar)

---

#### **Pregunta 4: ¿CUÁLES correos son realmente necesarios?**

Valida SÍ/NO:

| Email | ¿Enviar? | Descripción |
|-------|----------|-------------|
| **Email #1 - Confirmación entrada lista** | ☐ Sí ☐ No | "Te agregamos a lista de espera para Yoga" |
| **Email #2 - LUGAR ASIGNADO** | ☐ Sí ☐ No | **CRÍTICO** - "¡Tenemos lugar! Confirma en 2h" |
| **Email #3 - Expiración (no confirmó)** | ☐ Sí ☐ No | "Se acabó el tiempo, volviste a lista" |
| **Email #4 - Cancelación de lista** | ☐ Sí ☐ No | "Saliste de lista (cancelaste, o clase fue cancelada)" |
| **Email #5 - Clase llena sin lista** | ☐ Sí ☐ No | "Esta clase está llena y no acepta lista de espera" |

**Sugerencia técnica:** Email #2 es CRÍTICO (si no llega, usuario nunca se entera). Los otros son opcionales.

**→ ¿Cuáles emails son obligatorios?** ___________________

---

### 💡 RECOMENDACIÓN TÉCNICA

**Propuesta del equipo técnico (baseline):**
- **Asignación:** FIFO (antigüedad, simple)
- **Cobro:** Al confirmar (menos fricción)
- **Emails:** #1 (confirmación) + #2 (asignado, CRÍTICO) + #3 (expiración)
- **Fix crítico:** Agregar transacción atómica en `checkAndReserve()` para prevenir Issue #49
- **Validación necesaria:** Testing de "Email #2 siempre llega" (actualmente sin testing explícito)
- **Timeline:** 1-2 horas validación + 2-3 horas fix transacción = ~4-5 horas total
- **Prioridad:** 🟢 Baja (funcionalidad existe, solo validación/fix)

---

---

## 📊 RESUMEN DE DECISIONES PENDIENTES

### Matriz de Decisiones Detallada

| Feature | # Preguntas | Preguntas principales | Preguntas adicionales | Impacto en negocio | Timeline estimado |
|---------|---|---|---|---|---|
| **1. Cancelación/cambio** | 6 | ¿Confirmar "sin devolución"?<br>¿Ventana de cancelación?<br>¿Ventana de cambio?<br>¿Regla fuera de ventana?<br>¿Límite de cambios? | Reglas por tipo de clase, mensajes UI | Operación<br>Satisfacción<br>Soporte | 2-3h → 1 día |
| **2. Validación reservas (URGENTE)** | 2 | ¿Máximo 1 asiento por usuario?<br>¿Cómo manejar asiento ocupado? | Actualización mapa, visibilidad en tiempo real | Overbooking<br>Validación de datos<br>Ocupación real | 2-3h → 1 día |
| **3. Notificación cambios** | 5 | ¿Qué cambios notificar?<br>¿Tiempo anticipación?<br>¿Acciones en email? | Compensaciones/crédito, multi-cambios day | Asistencia<br>Satisfacción<br>Comunicación | 3-4h → 1 día |
| **4. Pantalla Sesiones del Día** | 5 | ¿Flujo ideal?<br>¿Automatizaciones mientras escribo 1ª clase?<br>¿Cómo agregar resto del día? | Copia/clone de día anterior, email a instructores | Tiempo admin<br>Errores operativos<br>Plantillas | 4-5h → 1 día |
| **5. Correos lista espera** | 7 | ¿Cuándo nace lista?<br>¿Asignación cómo? <br>¿Cuáles emails? | Privadas, rechazo asignación, tiempo confirmación | Conversión<br>Ocupación<br>Transacciones | 4-5h → 1 día |
| **TOTAL** | **25 decisiones** | 15 preguntas principales | 14 preguntas adicionales | **5 áreas críticas** | **5-6 días si se aprueban todas** |

**NOTA:** Cada pregunta tiene opciones A/B/C/D que permiten respuestas cerradas (ideal para toma de decisión rápida)

---

### Timeline estimado (después de aprobación):

- **Disponibilidad asientos** 🔴 (URGENTE): 4-6 horas → **DEPLOY en 1-2 días**
- **Cancelación/cambio sin devolución** 🟠 (Alta): 2-3 horas → 1 día  
- **Notificación cambios** 🟠 (Alta): 3-4 horas → 1 día (post-Disponibilidad)
- **Carga masiva horarios** 🟡 (Media): 3-4 horas → 1 día
- **Correos lista espera** 🟢 (Baja/Validación): 4-5 horas → 1 día

**Total estimado:** 5-6 días laborables (si se aprueban todos)**

### Dependencias entre features:
```
Disponibilidad (Fix DB) 
    ↓
    ├→ Cancelación (afecta flujo de liberación)
    ├→ Notificación (notifica cambios post-disponibilidad)
    └→ Lista Espera (asignación post-disponibilidad)
    
Carga Masiva (independiente)
```

---

## 📞 CONTACTO

Para dudas sobre este documento o discutir opciones:

**Equipo Técnico:** [contacto@pbstudio.com]  
**Documentación técnica:** `/DOCUMENTACION/FIXES_PENDIENTES/`  
**Código relevante:** `/src/Service/`, `/src/Controller/`

---

_Documento actualizado: 04 Marzo 2026_  
_Este documento es un borrador para discusión. Las decisiones finales deben quedar registradas por escrito antes de proceder con implementación._  
_Revisiones: Contexto técnico agregado + 25 preguntas específicas basadas en análisis de código real_
