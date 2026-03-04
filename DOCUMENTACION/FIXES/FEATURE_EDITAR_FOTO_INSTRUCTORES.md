# 📷 FEATURE: Editar Foto de Instructores en Backend

**Fecha de documentación:** 03/03/2026 (actualizado 04/03/2026)  
**Prioridad:** 🟠 IMPORTANTE  
**Impacto:** Perfil de instructores + Presentación visual  
**Timeline estimado:** 2-3 horas  
**Estado:** ✅ COMPLETADO - DEPLOYADO (Commit: 786a5e54)

---

## 📌 Resumen

Los instructores necesitan poder actualizar su foto de perfil desde el backend admin. Actualmente, esto no funciona o la actualización no se persiste correctamente.

---

## ❌ Problema Actual

1. Admin entra a editar instructor
2. Ve campo de foto
3. Carga una nueva imagen
4. Hace clic "Guardar"
5. ❌ Una de:
   - Foto no se actualiza
   - Upload falla sin error claro
   - Foto se guarda pero no se ve en frontend
   - Directorio de upload incorrecto

### Impacto

- 👥 Instructores con fotos viejas o faltantes
- 😞 Presentación unprofessional
- 📞 Admin tiene que subir fotos manualmente al servidor

---

## ✅ Solución

### Flujo Deseado

1. Admin va a `/backend/instructor/{id}/edit`
2. Ve el formulario con:
   - Foto actual (si existe)
   - Input de archivo "Cambiar foto"
   - Botón "Eliminar foto anterior"
3. Selecciona nueva imagen
4. Hace clic "Guardar"
5. ✅ Sistema:
   - Valida tipo (JPG, PNG)
   - Valida tamaño (máx 5 MB)
   - Elimina foto anterior
   - Guarda nueva en `/public/media/uploads/instructors/`
   - Muestra en perfil del instructor

### En Perfil de Instructor (frontend)

```
┌─ Instructor Profile ──────────────┐
│                                   │
│  [   📷 FOTO   ]                  │
│                                   │
│  MARÍA LEÓN                       │
│  Instructora de Yoga              │
│  ✓ 250+ clases dictadas           │
│                                   │
│  "Disfruto enseñar con pasión..." │
└───────────────────────────────────┘
```

### En Backend Admin

```
┌─ Editar Instructor ────────────────────────────┐
│                                                │
│ Nombre: María León                             │
│ Email: maria@pbstudio.com                      │
│                                                │
│ Foto de Perfil:                                │
│ [Foto actual: instructor_123.jpg]              │
│                                                │
│ Cambiar foto: [Seleccionar archivo...]         │
│               (JPG, PNG - máx 5 MB)            │
│                                                │
│ [Eliminar foto]  [Guardar cambios]             │
└────────────────────────────────────────────────┘
```

---

## 🔧 Implementación

### 1️⃣ Revisar Entidad StaffProfile

- Verificar que tenga propiedad para foto (ej: `photo`, `profileImage`)
- Verificar que use VichUploaderBundle correctamente
- Si no existe, agregar atributo

### 2️⃣ Revisar Formulario (Backend\InstructorProfileType)

- Agregar campo File/VichImage
- Validaciones: tipos permitidos, tamaño máximo
- Opción para eliminar

### 3️⃣ Configuración de VichUploader

- Verificar directorio de destino: `/public/media/uploads/instructors/`
- Verificar URL pública: `/media/uploads/instructors/{filename}`
- Crear directorio si no existe

### 4️⃣ Template de Mostrar

- En profile del instructor: mostrar `<img src="{{instructor.photo}}">`
- En backend: mostrar foto actual + botón cambiar

### 5️⃣ Validaciones

- ✓ Solo JPG/PNG
- ✓ Máximo 5 MB
- ✓ Redimensionar a 300x300px (opcional pero recomendado)
- ✓ Mantener foto anterior como backup

---

## 📅 Timeline

- Diagnóstico: 20 min
- Fix formulario: 20 min
- Validaciones: 20 min
- Testing: 30 min

**Total:** 1.5-2 horas

---

## 🎌 Estado

- ✅ Diagnóstico completado
- ✅ Error reproducido y corregido
- ✅ Testing manual exitoso
- ✅ Persistencia en BD validada
- ✅ Render en backend y frontend validado

---

## 🧪 Bitácora de Ejecución Real (03/03/2026)

### 1) Síntoma detectado

Al subir foto desde `/backend/instructor/{id}/edit`, la app respondía con HTTP 500.

Error principal:

`Unable to guess the MIME type as no guessers are available (have you enabled the php_fileinfo extension?).`

### 2) Causa raíz

La extensión de PHP `fileinfo` estaba deshabilitada en el entorno local.

- `php --ini` → `Loaded Configuration File: C:\php82\php.ini`
- `php -m` (antes) → **no** mostraba `fileinfo`

### 3) Corrección aplicada

1. Se habilitó `fileinfo` en `C:\php82\php.ini`:
   - de `;extension=fileinfo`
   - a `extension=fileinfo`
2. Se validó carga del módulo:
   - `php -m` (después) → sí muestra `fileinfo`
3. Se validó existencia del directorio de uploads:
   - `public/media/uploads/instructors/` (creado/verificado)

### 4) Testing manual

Se repitió la prueba manual de subida de imagen y el flujo fue exitoso.

Verificaciones realizadas:

- ✅ No hay nuevos `request.CRITICAL` por MIME/fileinfo en `var/log/dev.log`
- ✅ Archivo creado en disco:
  - `public/media/uploads/instructors/instructor-69a77b04e57b2478633135.jpg`
- ✅ Registro persistido en base de datos (instructor ID 13):
  - `staff_profile.photo = instructor-69a77b04e57b2478633135.jpg`
  - `updated_at = 2026-03-03 18:21:24`

### 5) Referencias donde se usa la foto

- Backend perfil instructor:
  - `templates/backend/instructor/profile.html.twig` (usa `vich_uploader_asset(instructor.profile)`)
- Formulario de edición:
  - `templates/backend/instructor/_general_data_form.html.twig` (campo `form.profile.photoFile`)
- Frontend listado de instructores:
  - `templates/staff/index.html.twig` (renderiza imagen si `instructor.profile.photo`)
- Configuración de subida:
  - `config/packages/vich_uploader.yaml` (mapping `staff_profile`)

### 6) Estado final del issue

Issue funcionalmente resuelto en local. Queda listo para formalizar en rama y subir cambios del repositorio.

---

## 🏗️ Requisitos de Servidor para Producción

### Extensión fileinfo - OBLIGATORIA

La extensión `fileinfo` es requerida para que VichUploader pueda detectar el tipo MIME de los archivos cargados. Sin ella, cualquier intento de subir una foto generará un error:

```
Symfony\Component\Mime\Exception\LogicException:
Unable to guess the MIME type as no guessers are available
(have you enabled the php_fileinfo extension?).
```

### Verificación en composer.json

Ya está agregado al archivo `composer.json`:

```json
"require": {
    "php": ">=8.2",
    "ext-ctype": "*",
    "ext-iconv": "*",
    "ext-fileinfo": "*",  ← NUEVO REQUISITO
    ...
}
```

### Cómo habilitar fileinfo en diferentes entornos

#### 🪟 Windows (php.ini)

```ini
; Buscar la línea:
;extension=fileinfo

; Cambiar a:
extension=fileinfo
```

**Ubicación típica:**
- XAMPP: `C:\xampp\php\php.ini`
- WampServer: `C:\wamp64\bin\php\php8.2.x\php.ini`
- Windows con PHP directo: `C:\php82\php.ini`

#### 🐧 Linux/Mac (Ubuntu/Debian)

```bash
# Verificar si está instalado
php -m | grep fileinfo

# Si no aparece, instalar:
sudo apt install php8.2-fileinfo

# En sistemas con múltiples versiones PHP:
sudo apt install php8.2-fileinfo  # para PHP 8.2
sudo apt install php8.1-fileinfo  # para PHP 8.1
```

#### 🐳 Docker

En el `Dockerfile`, asegurar que fileinfo esté en la imagen:

```dockerfile
FROM php:8.2-fpm

# Extensión via paquete del sistema
RUN apt-get update && apt-get install -y \
    libmagic-dev \
    && docker-php-ext-install fileinfo
```

#### 🌐 Hosting Web (ej: cPanel, Plesk)

1. **cPanel:**
   - MultiPHP Manager → Seleccionar PHP 8.2 → Extensions
   - Buscar `fileinfo` → Click para habilitar

2. **Plesk:**
   - Extensions for PHP → fileinfo → Enable

3. **Contacta soporte:**
   - "¿Puede habilitar la extensión fileinfo para PHP 8.2?"
   - "Necesitamos VichUploadBundle para cargar imágenes"

### Verificación POST-DEPLOY

```bash
# En el servidor de producción, ejecutar:
php -m | grep fileinfo

# Salida esperada:
fileinfo

# Si NO aparece, el comando no retorna nada → REQUIERE ACCIÓN
```

#### Con Symfony console (dentro del proyecto)

```bash
# Esto mandará error si fileinfo no está disponible
php bin/console about

# Si sale error sobre fileinfo, hay problema
```

### Checklist de Deployment

Antes de deployar a producción, verificar:

- [ ] `composer.json` contiene `"ext-fileinfo": "*"` en require
- [ ] PHP 8.2+ instalado en servidor de producción
- [ ] Comando `php -m | grep fileinfo` retorna `fileinfo`
- [ ] Directorio `/public/media/uploads/instructors/` existe y es writable
- [ ] Permisos de directorio: `755` o `775` (writable por servidor web)
- [ ] Ejecutar `composer install --no-dev` en producción
- [ ] Ejecutar `php bin/console cache:clear` y `cache:warmup`
- [ ] Test manual: subir foto de instructor y verificar en frontend

### En Caso de Error en Producción

Si después del deploy sale el error de fileinfo:

1. **Verificar extensión:** `php -m | grep fileinfo`
2. **Si no está:**
   - Contactar soporte hosting / DevOps
   - Pedir que habiliten extensión fileinfo para PHP 8.2
   - Esperar confirmación
3. **Limpiar caché:** `php bin/console cache:clear`
4. **Reintentar:** Cargar foto de instructor de nuevo

### Referencias Técnicas

- [VichUploaderBundle - Docs](https://symfony.com/doc/current/bundles/VichUploaderBundle/index.html)
- [Symfony Mime - MIME Type Detection](https://symfony.com/doc/current/components/mime.html)
- [PHP fileinfo extension](https://www.php.net/manual/en/book.fileinfo.php)
- Config del proyecto: [vich_uploader.yaml](../../../../config/packages/vich_uploader.yaml)
