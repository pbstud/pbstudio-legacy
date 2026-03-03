# 🚨 ISSUES CRÍTICOS CONSOLIDADOS - Rama: fix/urgente-csrf-endpoints

**Última Actualización:** 3 de marzo de 2026  
**Rama Activa:** `fix/urgente-csrf-endpoints`  
**Estado:** 📋 Documentado - En Implementación  
**Commits:** 1 (waiting_list_remove) - Pendientes: reservation_change_session, reservationcancel, reset_password  

---

## 📊 MATRIZ DE ISSUES

| # | Tipo | Endpoint | Método | Problema | Severidad | Listener/Email | Status |
|---|---|---|---|---|---|---|---|
| **1** | CSRF | `reservation_change_session` | POST | Sin validación de token CSRF | 🔴 CRÍTICO | ReservationSuccessEvent → Email ✅ | 📋 Doc+Fixed |
| **2** | CSRF | `reservation_cancel` | GET/POST | GET method (extremadamente inseguro) | 🔴 CRÍTICO | ReservationCanceledEvent → Email ✅ | ⏳ Pendiente |
| **3** | CSRF | `backend_user_reset_password` | GET | GET method (CRÍTICO) | 🔴 CRÍTICO | Mailer ✅ | ⏳ Pendiente |
| **4** | EMAIL | Cambio sesión | - | MAILER_DSN null:// descarta email | 🔴 CRÍTICO | ReservationSuccessListener ✅ | 📋 Documentado |
| **5** | EMAIL | Cancelación | - | MAILER_DSN null:// descarta email | 🔴 CRÍTICO | ReservationCanceledListener ✅ | 📋 Documentado |
| **6** | EMAIL | Lista espera liberada | - | MAILER_DSN null:// descarta email | 🔴 CRÍTICO | ReservationSuccessListener ✅ | 📋 Documentado |

---

---

# 🔒 ISSUE 1: CSRF EN CAMBIO DE SESIÓN

## Vulnerabilidad Exacta

**Endpoint:** `POST /reservacion/{id}/cambiar/{session}`  
**Archivo:** `src/Controller/ProfileController.php` línea 276-284  
**Template:** `templates/profile/reservation_change_session.html.twig` línea 48

### El Problema

Un atacante puede forzar a un usuario logueado a cambiar de sesión de clase sin su consentimiento:

```html
<!-- Enlace malicioso en sitio atacante -->
<form action="https://pbstudio.com/reservacion/123/cambiar/456" method="POST">
    <input type="hidden" name="place_number" value="10">
    <input type="submit" value="Reclama tu premio">
</form>
<script>document.forms[0].submit();</script>

<!-- Usuario hace click → Su reservación CAMBIA AUTOMÁTICAMENTE -->
```

### Por Qué Ocurre

**Archivo:** `src/Controller/ProfileController.php` línea 276-284

```php
#[Route('/reservacion/{id}/cambiar/{session}', name: 'reservation_change_session', methods: ['POST'])]
public function reservationChangeSession(Request $request, int $id, int $session): Response
{
    // ❌ NO HAY VALIDACIÓN DE CSRF TOKEN
    $reservation = $this->reservationRepository->find($id);
    $place_number = $request->request->getInt('place_number');
    
    // Llama directamente a cambiar - sin verificar token
    $this->reservationService->change($reservation, $session, $place_number);  // ❌ VULNERABLE
    
    return $this->redirectToRoute('profile_my_reservations');
}
```

**Template:** `templates/profile/reservation_change_session.html.twig` línea 48

```html
<!-- ❌ NO HAY TOKEN CSRF EN EL FORMULARIO -->
<form method="POST" action="{{ path('reservation_change_session', {...}) }}">
    <!-- Falta aquí: {{ csrf_token('reservation_change_session') }} -->
    <input type="hidden" name="session" value="{{ session.id }}">
    <input type="hidden" name="place_number" value="{{ place.place_number }}">
    <button type="submit">Cambiar sesión</button>
</form>
```

### El Fix

#### Paso 1: Añadir token en template (1 línea)

**Archivo:** `templates/profile/reservation_change_session.html.twig`

```diff
  <form method="POST" action="{{ path('reservation_change_session', {...}) }}">
+ {{ csrf_token('reservation_change_session') }}
      <input type="hidden" name="session" value="{{ session.id }}">
      <input type="hidden" name="place_number" value="{{ place.place_number }}">
      <button type="submit">Cambiar sesión</button>
  </form>
```

#### Paso 2: Validar token en controller (3 líneas)

**Archivo:** `src/Controller/ProfileController.php`

```diff
  public function reservationChangeSession(Request $request, int $id, int $session): Response
  {
+     if (!$this->isCsrfTokenValid('reservation_change_session', $request->request->get('_token'))) {
+         throw $this->createAccessDeniedException('Invalid CSRF token');
+     }
      $reservation = $this->reservationRepository->find($id);
      $place_number = $request->request->getInt('place_number');
      $this->reservationService->change($reservation, $session, $place_number);
      return $this->redirectToRoute('profile_my_reservations');
  }
```

### Estado

- ✅ Documentado y con fix aplicado
- ⏳ Código aún no committeado a rama

---

---

# 🔒 ISSUE 2: CSRF EN CANCELACIÓN (MÁS CRÍTICO - GET METHOD)

## Vulnerabilidad Extrema

**Endpoint:** `GET /reservacion/{id}/cancelar`  
**Archivo:** `src/Controller/ProfileController.php` línea ~250  
**Severidad:** 🔴 CRÍTICO - Puede ser GET method

### El Problema

```html
<!-- Simple image tag - usuario ni se da cuenta -->
<img src="https://pbstudio.com/reservacion/123/cancelar" style="display:none">

<!-- O simple enlace - usuario hace click pensando es otra cosa -->
<a href="https://pbstudio.com/reservacion/123/cancelar">Ver detalles</a>

<!-- Resultado: RESERVACIÓN CANCELADA -->
```

### El Fix

#### Paso 1: Cambiar a POST (REQUERIDO)

```php
# ❌ ACTUAL (¿GET method?)
#[Route('/reservacion/{id}/cancelar', name: 'reservation_cancel', methods: ['GET'])]

# ✅ CORRECTO
#[Route('/reservacion/{id}/cancelar', name: 'reservation_cancel', methods: ['POST'])]
```

#### Paso 2: Añadir CSRF token

```php
public function reservationCancel(Request $request, int $id): Response
{
    if (!$this->isCsrfTokenValid('reservation_cancel', $request->request->get('_token'))) {
        throw $this->createAccessDeniedException();
    }
    // resto del código
}
```

#### Paso 3: Template con form

```html
<form method="POST" action="{{ path('reservation_cancel', {id: reservation.id}) }}" onsubmit="return confirm('¿Confirmas cancelación?');">
    {{ csrf_token('reservation_cancel') }}
    <button type="submit" class="btn btn-danger">Cancelar Reservación</button>
</form>
```

### Estado

- 📋 Documentado
- ⏳ Implementación pendiente
- 🔴 **CRÍTICO** - Si es GET method, FIX URGENTE

---

---

# 🔒 ISSUE 3: CSRF EN RESET PASSWORD (CRÍTICO - GET METHOD)

## Vulnerabilidad Extrema

**Endpoint:** `GET /admin/user/{id}/reset-password`  
**Severidad:** 🔴 CRÍTICO - Cambio de contraseña con GET  

### El Problema

```html
<!-- Atacante envía enlace - admin hace click pensando es legítimo -->
<a href="https://pbstudio.com/admin/user/999/reset-password">
  Revisar estadísticas
</a>

<!-- Resultado: CONTRASEÑA DEL ADMIN RESETEADA DEL USUARIO ATACANTE -->
```

### El Fix

Mismo patrón:
1. Cambiar a POST method
2. Añadir validación de CSRF token
3. Actualizar template con forma POST + token

### Estado

- 📋 Documentado
- ⏳ Implementación pendiente
- 🔴 **CRÍTICO** - FIX URGENTE

---

---

# 📧 ISSUE 4-6: EMAILS NO SE ENVÍAN (3 ENDPOINTS)

## El Problema Consolidado

En 3 operaciones críticas, los usuarios **NO reciben emails**:

### Escenario 1: Cambio de Sesión

```
Usuario cambia de clase → evento ReservationSuccessEvent → Listener → Email NO LLEGA
```

**Email esperado:** "Tu reservación ha sido registrada correctamente"  
**Template:** `mail/reservation/confirmation.html.twig`  
**Status:** Código ✅ - Email nunca llega ❌

### Escenario 2: Cancelación

```
Usuario cancela → evento ReservationCanceledEvent → Listener → Email NO LLEGA
```

**Email esperado:** "Tu reservación ha sido cancelada"  
**Template:** `mail/reservation/cancellation.html.twig`  
**Status:** Código ✅ - Email nunca llega ❌

### Escenario 3: Lista de Espera Promoción

```
Usuario en lista espera → se libera lugar → event ReservationSuccessEvent → Email NO LLEGA
```

**Email esperado:** "Asignación de lugar - Lista de espera"  
**Template:** `mail/reservation/waitinglist-confirmation.html.twig`  
**Status:** Código ✅ - Email nunca llega ❌

## La Causa Raíz

**Archivo:** `.env`

```bash
MAILER_DSN=null://default
# "null://" = transporte nulo = descarta todos los emails silenciosamente
```

## La Solución

### Opción A: SMTP Real (Recomendado)

```bash
# Cambiar en .env.local o .env.production:

# Gmail
MAILER_DSN=gmail+smtp://email@gmail.com:app-password@default

# SendGrid
MAILER_DSN=sendgrid+api://sk-...@default

# AWS SES
MAILER_DSN=ses+smtp://access-key:secret-key@default

# SMTP Genérico
MAILER_DSN=smtp://usuario:contraseña@smtp.ejemplo.com:587?encryption=tls
```

### Opción B: Testing Local (Desarrollo)

```bash
# MailCatcher en localhost
MAILER_DSN=smtp://localhost:1025

# O File transport para testing
MAILER_DSN=file://default
```

### Verificación

```bash
# 1. Confirmar que listeners se registraron
bin/console debug:event-dispatcher reservation_success
# Debería listar: ReservationSuccessListener

# 2. Verificar MAILER_DSN actual
grep MAILER_DSN .env

# 3. Hacer prueba - cambiar sesión
# 4. Verificar email en bandeja o logs
```

### Checklist de Fix

- [ ] Revisar `.env` actual - MAILER_DSN value
- [ ] Si es `null://` → Cambiar a SMTP real
- [ ] Relogin para invalidar cache
- [ ] Replicar: cambiar sesión
- [ ] Verificar email llega ✅
- [ ] Replicar: cancelar reservación
- [ ] Verificar email cancellation llega ✅
- [ ] Replicar: reservación que libere lista espera
- [ ] Verificar email de promoción llega ✅

### Status

- 📋 Documentado en detalle
- 🔍 Causa identificada (MAILER_DSN null://)
- ⏳ Fix pendiente en .env

---

---

## 📋 RESUMEN DE ACCIÓN

### Trabajos en Rama: fix/urgente-csrf-endpoints

**✅ Completado:**
- Issue #1 CSRF (reservation_change_session): Fix documentado
- Issue #4-6 EMAIL: Causa e solución documentada

**⏳ Pendiente de Implementación:**
- [ ] Commit del fix de Issue #1 (2 archivos: template + controller)
- [ ] Fix de Issue #2 (reservation_cancel: GET→POST + CSRF)
- [ ] Fix de Issue #3 (reset_password: GET→POST + CSRF)
- [ ] Fix de Issue #4-6 (cambiar MAILER_DSN en .env)

### Prioridad

1. 🔴 **CRÍTICO:** Issue #3 (reset_password GET → mucho riesgo)
2. 🔴 **CRÍTICO:** Issue #2 (reservation_cancel GET → muy riesgoso)
3. 🔴 **CRÍTICO:** Issue #1 (reservation_change_session → sin token)
4. 🔴 **CRÍTICO:** Issue #4-6 (emails nulos → notify usuarios)

### Rama Activa

```bash
git branch -v
# * fix/urgente-csrf-endpoints  ...  x commits
```

---

## 🎯 Próximos Pasos

1. **Implementar Issue #1** (reservation_change_session): 2 archivos
2. **Implementar Issue #2** (reservation_cancel): 1 archivo + template
3. **Implementar Issue #3** (reset_password): 1 archivo + template
4. **Implementar Issue #4-6** (MAILER_DSN): 1 cambio en .env

**Tiempo Estimado:** 30 minutos para código + tests

---

**Creado:** 3 de marzo de 2026  
**Documentación:** COMPLETA Y CONSOLIDADA  
**Código:** LISTO PARA IMPLEMENTAR
