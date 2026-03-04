# 📧 FEATURE: Correos en Lista de Espera (Registro + Asignación)

**Fecha de documentación:** 03/03/2026  
**Prioridad:** 🟠 IMPORTANTE  
**Impacto:** Conversión + Retención + Comunicación  
**Timeline estimado:** 2-4 horas  
**Estado:** 📋 DOCUMENTADO - PENDIENTE COMPLETAR DETALLES

---

## 📌 Resumen

Cuando un usuario se **registra en una lista de espera**:
1. ✅ PARCIAL: Ya existe `WaitingListMailer` y listeners
2. ⏳ PENDIENTE: Validar que todos los eventos se disparan correctamente
3. ⏳ PENDIENTE: Asegurar que los templates de correo están correctos
4. ⏳ PENDIENTE: Validar que los correos se envían en los casos edge (expiraciones, promociones)

---

## ✅ Qué YA Existe

- `WaitingListMailer` (servicio)
- `WaitingListSuccessListener` (evento de creación)
- `WaitingListExpiredListener` (evento de expiración)
- Eventos en `src/Event/`: `WaitingListSuccessEvent`, `WaitingListExpiredEvent`

## ⏳ Qué Falta

- [ ] Validar que `WaitingListPromotedEvent` existe y se dispara
- [ ] Verificar plantillas de correo en `/templates/email/`
- [ ] Testear flujo completo: registro → promoción → expiración
- [ ] Confirmar que los correos se envían (no solo se generan)
- [ ] Manejar errores si el SMTP falla

---

## 🎌 Estado Actual

- ✅ Código base: 80% hecho
- ⏳ Validación: Necesaria
- 🧪 Testing: Pendiente
