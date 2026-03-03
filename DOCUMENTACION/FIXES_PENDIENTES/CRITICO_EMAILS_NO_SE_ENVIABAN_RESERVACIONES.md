# ISSUE CRÍTICO: Emails No Se Envían en Operaciones de Reservación

**Fecha de detección:** 3 de marzo de 2026  
**Severidad:** 🔴 **CRÍTICO**  
**Estado:** 📋 Documentado - Pendiente Investigación  
**Tipo:** Sistema de Notificación Roto - 3 Endpoints Afectados  
**Impacto:** Usuarios NO reciben confirmaciones de operaciones críticas

---

## 📋 RESUMEN EJECUTIVO

El sistema de emails está **INACTIVO** en 3 operaciones críticas:

| Operación | Evento | Listener | Email | Estado |
|---|---|---|---|---|
| **Cambio de Sesión** | `ReservationSuccessEvent` | `ReservationSuccessListener` | ✅ Código OK | ❌ NO LLEGA |
| **Cancelación** | `ReservationCanceledEvent` | `ReservationCanceledListener` | ✅ Código OK | ❌ NO LLEGA |
| **Lista Espera Liberada** | `ReservationCanceledEvent` → `checkAndReserve()` | `ReservationSuccessListener` | ✅ Código OK | ❌ NO LLEGA |

**Causa Probable:** Configuración de `MAILER_DSN` en `.env` (valores por defecto null:// descarta emails en desarrollo)

---

## 🚨 PARTE 1: CAMBIO DE SESIÓN - EMAIL FALTANTE

### Flujo Esperado

```
Usuario hace POST /reservacion/{id}/cambiar/{sessionId}
  ↓
ProfileController::reservationChangeSession()
  ↓
ReservationService::change() [línea 228]
  ├─ Actualiza: session, place_number, changed_at
  ├─ Flush a BD
  ├─ Dispara evento: ReservationSuccessEvent ✅
  ↓
ReservationSuccessListener::__invoke() ✅
  ├─ Llama: ReservationMailer::sendConfirmationEmail()
  ├─ Template: mail/reservation/confirmation.html.twig
  ├─ Asunto: "Tu reservación ha sido registrada correctamente"
  ├─ Destino: $user->getEmail()
  ↓
❌ EMAIL NO LLEGA A USUARIO
```

### Código de Confirmación (Existe ✅)

**Archivo:** `src/Service/Mailer/ReservationMailer.php` línea 22

```php
public function sendConfirmationEmail(Reservation $reservation): void
{
    $this->send(
        'mail/reservation/confirmation.html.twig',
        'Tu reservación ha sido registrada correctamente',
        $reservation
    );
}

private function send(string $template, string $subject, Reservation $reservation): void
{
    // ... Prepara contexto ...
    try {
        $this->sendMessage($template, $context, $user->getEmail());
    } catch (TransportExceptionInterface $e) {
        $this->logger->error('Error sending email: '.$e->getMessage());
    }
}
```

**¿Por qué no llega?**
- El código está ahí ✅
- El listener está registrado ✅
- El evento se dispara ✅
- ❌ Pero el email NO se envía → **Problema en configuración MAILER_DSN**

---

## 🚨 PARTE 2: CANCELACIÓN - EMAIL FALTANTE

### Flujo Esperado

```
Usuario cancela reservación POST /reservacion/{id}/cancelar
  ↓
ProfileController::reservationCancel()
  ↓
ReservationService::cancel() [línea 151]
  ├─ Marca: is_available = false, cancellation_at = NOW
  ├─ Libera sesión: status = STATUS_OPEN
  ├─ Flush a BD
  ├─ Dispara evento: ReservationCanceledEvent ✅
  ↓
ReservationCanceledListener::__invoke() ✅
  ├─ Llama: ReservationMailer::sendCancellationMail()
  ├─ Template: mail/reservation/cancellation.html.twig
  ├─ Asunto: "Tu reservación ha sido cancelada"
  ├─ Destino: $user->getEmail()
  ├─ Además: Llama checkAndReserve() para promover lista espera
  ↓
❌ EMAIL NO LLEGA A USUARIO
```

### Código de Cancelación (Existe ✅)

**Archivo:** `src/Service/Mailer/ReservationMailer.php` línea 53

```php
public function sendCancellationMail(Reservation $reservation): void
{
    $this->send(
        'mail/reservation/cancellation.html.twig',
        'Tu reservación ha sido cancelada',
        $reservation
    );
}
```

**Listener que lo llama:**

**Archivo:** `src/EventListener/ReservationCanceledListener.php` línea 24

```php
public function __invoke(ReservationCanceledEvent $event): void
{
    $reservation = $event->getReservation();
    
    // Línea 27: Envía email de cancelación
    $this->mailer->sendCancellationMail($reservation);  // ✅ El código existe
    
    // Línea 28: Promueve siguiente de lista de espera
    $this->waitingListService->checkAndReserve(
        $reservation->getSession(), 
        $reservation->getPlaceNumber()
    );
}
```

**¿Por qué no llega?**
- El código está ahí ✅
- El listener está registrado ✅
- El evento se dispara ✅
- ❌ Pero el email NO se envía → **Problema en configuración MAILER_DSN**

---

## 🚨 PARTE 3: LISTA DE ESPERA LIBERADA - EMAIL FALTANTE

### Contexto: Cuando Se Libera Un Lugar

Cuando se cancela una reservación, el sistema intenta "promover" al siguiente usuario en la lista de espera:

```
ReservationCanceledListener::__invoke()
  ↓
WaitingListService::checkAndReserve() [línea 68]
  ├─ Obtiene primero en lista: getAvailableBySession()
  ├─ Trata de reservarlo: reservationService->reservate()
  │   ├─ Crea nueva Reservation
  │   ├─ Dispara evento: ReservationSuccessEvent ✅
  │   │   └─ Parámetro: $waitingList (indica que viene de lista espera)
  │   ↓
  │   ReservationSuccessListener::__invoke() ✅
  │   ├─ Detecta: if ($event->getWaitingList()) → true
  │   ├─ Llama: ReservationMailer::sendWaitingListConfirmationEmail()
  │   ├─ Template: mail/reservation/waitinglist-confirmation.html.twig
  │   ├─ Asunto: "Asignación de lugar - Lista de espera"
  │   ├─ Destino: $user->getEmail()
  │   ↓
  │   ❌ EMAIL NO LLEGA A USUARIO

  └─ Flush a BD (línea 77)
```

### Código para Promoción (Existe ✅)

**Archivo:** `src/Service/Mailer/ReservationMailer.php` línea 38

```php
public function sendWaitingListConfirmationEmail(Reservation $reservation): void
{
    $this->send(
        'mail/reservation/waitinglist-confirmation.html.twig',
        'Asignación de lugar - Lista de espera',
        $reservation
    );
}
```

**Listener que lo llama:**

**Archivo:** `src/EventListener/ReservationSuccessListener.php` línea 20

```php
public function __invoke(ReservationSuccessEvent $event): void
{
    // Detecta si viene de lista de espera vs reservación normal
    if ($event->getWaitingList()) {
        $this->mailer->sendWaitingListConfirmationEmail($event->getReservation());  // ✅ Código existe
        return;
    }

    $this->mailer->sendConfirmationEmail($event->getReservation());
}
```

**¿Por qué no llega?**
- El código está ahí ✅
- El listener está registrado ✅
- El evento se dispara ✅
- El mailer se llama ✅
- ❌ Pero el email NO se envía → **Problema en configuración MAILER_DSN**

---

## 🔍 PARTE 2: DIAGNÓSTICO - POR QUÉ NO SE ENVÍAN

### El Problema Raíz: MAILER_DSN

**Archivo:** `.env` (o `.env.local`)

```bash
# Configuración ACTUAL (probablemente):
MAILER_DSN=null://default

# ↑ "null://" = TRANSPORTE NULL (descarta todos los emails en desarrollo)
```

**Cómo funciona null:// :**
- Todo email que se "envía" es **descartado silenciosamente**
- No hay error, no hay excepción
- Solo desaparece
- Propósito: Evitar enviar emails reales durante desarrollo

### Confirmación

Para confirmar que los emails se llaman pero no se envían:

1. **Revisar logs:** `var/log/dev.log`
   - Buscar: "Tu reservación ha sido"
   - Buscar: "Error sending email"
   - Si NO está → Ni siquiera se ejecutó

2. **Revisar listener se registró:**
   ```bash
   bin/console debug:event-dispatcher reservation_success
   # Debería listar: ReservationSuccessListener
   ```

3. **Revisar MAILER_DSN:**
   ```bash
   cat .env | grep MAILER_DSN
   # Si tienes null:// → eso es el problema
   ```

---

## ✅ PARTE 3: LA SOLUCIÓN

### Opción 1: Usar SMTP Real (Producción)

**Archivo:** `.env.local` (o `.env.production`)

```bash
# Gmail (ejemplo)
MAILER_DSN=gmail+smtp://usuario@gmail.com:contraseña@default

# SendGrid
MAILER_DSN=sendgrid+api://tu-api-key@default

# Postmark
MAILER_DSN=postmark+smtp://token@default

# SMTP genérico
MAILER_DSN=smtp://usuario:contraseña@smtp.ejemplo.com:587?encryption=tls
```

### Opción 2: Usar Catch-All Local (Desarrollo/Testing)

```bash
# MailCatcher o similares (recibe emails en localhost:1080)
MAILER_DSN=smtp://localhost:1025

# O usar archivo local (no recomendado para validar realmente)
MAILER_DSN=sendmail://default
```

### Opción 3: Verificar en Desarrollo (null:// funciona)

Si está bien dejarlo como `null://` por ahora, se puede:
- Usar logging para verificar que se **intenta** enviar
- O usar MailKit/Mailtrap temporal

### Checklist de Fix

- [ ] Revisar `.env` para MAILER_DSN actual
- [ ] Si es `null://` → Cambiar a SMTP real o temporal
- [ ] Hacer `bin/console debug:event-dispatcher reservation_success` → Verificar listeners
- [ ] Replicar en navegador: Cambiar sesión
- [ ] Verificar email en bandeja (o logs si es null://)
- [ ] Replicar: Cancelar reservación
- [ ] Verificar email de cancelación recibido
- [ ] Crear reservación que libere lista de espera
- [ ] Verificar email de promoción de lista de espera

---

## 🎯 CONSOLIDACIÓN: 3 PROBLEMAS, 1 CAUSA

| Operación | Email Esperado | Listener | Mailer | Status |
|---|---|---|---|---|
| Cambio de sesión | Confirmación | ReservationSuccessListener ✅ | sendConfirmationEmail() ✅ | ❌ No llega |
| Cancelación | Cancelación | ReservationCanceledListener ✅ | sendCancellationMail() ✅ | ❌ No llega |
| Lista espera liberada | Asignación | ReservationSuccessListener ✅ | sendWaitingListConfirmationEmail() ✅ | ❌ No llega |

**CAUSA COMÚN:** `MAILER_DSN=null://default` en `.env`

**SOLUCIÓN:** Cambiar MAILER_DSN a SMTP válido

---

## 📊 Prioridad

- 🔴 **CRÍTICO** - Usuarios no reciben confirmaciones
- 🔴 Con cambio de sesión → Usuario no sabe si cambio fue exitoso
- 🔴 Con cancelación → Usuario no sabe si cancela fue exitosa
- 🔴 Con lista espera → Usuario no sabe si fue promocionado

---

**Estado:** Documentado  
**Próximo Paso:** Revisar configuración MAILER_DSN en .env + revisar logs
