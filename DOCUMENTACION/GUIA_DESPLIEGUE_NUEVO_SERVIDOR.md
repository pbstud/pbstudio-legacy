# Guía de Despliegue — Nuevo Servidor (Staging / Pruebas)

**Proyecto:** P&B Studio 81  
**Framework:** Symfony 6.4 LTS (PHP >= 8.2)  
**Fecha:** 11 de Marzo de 2026  
**Preparada por:** Análisis de estabilidad pre-despliegue

---

## Índice

1. [Resumen ejecutivo](#1-resumen-ejecutivo)
2. [Problemas críticos detectados](#2-problemas-críticos-detectados)
3. [Problemas importantes](#3-problemas-importantes)
4. [Aspectos menores a considerar](#4-aspectos-menores-a-considerar)
5. [Checklist completo de instalación paso a paso](#5-checklist-completo-de-instalación-paso-a-paso)
6. [Variables de entorno requeridas](#6-variables-de-entorno-requeridas)
7. [Comandos programados (Crons)](#7-comandos-programados-crons)
8. [Integración de Analytics — Tracking codes](#8-integración-de-analytics--tracking-codes)
9. [Configuración post-instalación desde el backend](#9-configuración-post-instalación-desde-el-backend)
10. [Verificaciones finales](#10-verificaciones-finales)
11. [Notas adicionales](#11-notas-adicionales)
12. [Runbook ejecutable (Servidor destino)](#12-runbook-ejecutable--servidor-destino-linux)
13. [Comandos exactos — instalación completa](#13-comandos-exactos--instalación-completa)

---

## 1. Resumen ejecutivo

Se realizó un análisis de estabilidad completo del código fuente antes del despliegue en servidor nuevo. El resultado es:

| Categoría | Cantidad | Impacto |
|---|---|---|
| Errores críticos | 4 | Provocan fallos funcionales en servidor limpio |
| Problemas importantes | 3 | Problemas de seguridad o funcionalidad parcial |
| Aspectos menores | 2 | Recomendaciones operativas |

**Estado del código:**
- Sin errores de sintaxis PHP en ningún archivo de `src/` (validado con `php -l`)
- Mapping de Doctrine OK — base de datos en sincronía con las entidades
- 6 migraciones aplicables, estado actual: `Version20260309000000` (última)
- Cache warmup: exitosa en `dev`; requiere repetirse en `prod`
- Routing: sin errores, sin rutas duplicadas
- Todos los servicios del contenedor compilables correctamente

### 1.1 Estado de estabilizacion actualizado (12-03-2026)

Se ejecuto una segunda validacion tecnica enfocada en readiness de pruebas de produccion (`--env=prod`). Resultado:

- `php -l` sobre `src/`: **143/143 archivos OK**
- `php bin/phpunit`: **OK (22 tests, 52 assertions)**
- `php bin/console doctrine:schema:validate --env=prod`: **OK**
- `php bin/console cache:warmup --env=prod`: **OK**
- `php bin/console lint:container --env=prod`: **OK**
- `php bin/console debug:router --env=prod`: **107 rutas cargadas**
- `php bin/console list app --env=prod`: **OK**

**Veredicto actual:** GO condicional.

**Bloqueos para GO final (antes de prueba productiva):**
1. Replicar en el servidor destino la habilitacion de extensiones requeridas por PHP (`gd`, `exif` y `intl`) y reiniciar el servicio web o PHP-FPM/IIS si usa una instancia distinta a la CLI validada.
2. Confirmar variables de produccion en `.env.prod.local` (`APP_ENV=prod`, `APP_DEBUG=0`, `APP_SECRET` unico por entorno, `RESETTING_RETRY_TTL=7200`).
3. Crear directorios faltantes de media en servidor limpio: `public/media/uploads/site` y `public/media/cache` (ademas de permisos de escritura).

**Acciones iniciadas en el repositorio (12-03-2026):**
- Activar `login_throttling` en firewalls `main` y `backend`.
- Agregar `RESETTING_RETRY_TTL=7200` en `.env` como valor base para evitar error 500 en flujo de recuperacion cuando falta override de entorno.

**Acciones ejecutadas en el entorno de validacion (12-03-2026):**
- Se habilitaron las extensiones `gd`, `exif` e `intl` en la instalacion activa de PHP 8.2.
- Se revalido el namespace `app` en `prod` sin errores de drivers de imagen.
- Se verifico `Environment=prod` y `Debug=false` con `php bin/console about --env=prod`.
- Se confirmo la tabla `messenger_messages` existente (`cnt=1`).
- Se confirmo la existencia local de `public/media/uploads/instructors`, `public/media/uploads/site` y `public/media/cache`.

---

## 2. Problemas críticos detectados

### 2.1 `APP_SECRET=ChangeMe` — CRÍTICO

**Archivo:** `.env`  
**Valor actual:** `APP_SECRET=ChangeMe`

**Por qué es crítico:**  
`APP_SECRET` es la clave maestra del framework Symfony. Se usa para:
- Firmar cookies de sesión
- Generar tokens CSRF de todos los formularios (login, cancelación, cambio de reservación, backend, etc.)
- Firmar el token `remember_me` de ambos firewalls (`main` y `backend`)
- Firmar URLs generadas (reset de contraseña, confirmaciones)

Con el valor `ChangeMe` cualquier persona que conozca el código fuente puede:
1. Falsificar tokens CSRF y enviar formularios maliciosos desde fuera del sitio.
2. Crear cookies de sesión o remember_me válidas sin haber iniciado sesión.

**Fix obligatorio antes de arrancar el servidor:**

```bash
# Generar un secret seguro (ejecutar en el servidor nuevo)
php -r "echo bin2hex(random_bytes(32));"
# Ejemplo: cbb62e461df273932f50604101b52b88d13c2289c011b62ce321169471135eba
```

En el `.env` o `.env.prod.local` del nuevo servidor:
```ini
APP_SECRET=<valor_generado_con_el_comando_anterior>
```

> **Importante:** Cada servidor (staging, producción) debe tener su propio secret único. Nunca compartir el mismo entre entornos.

---

### 2.2 `RESETTING_RETRY_TTL` no definida en entorno de servidor limpio — CRÍTICO

**Archivo:** `.env` y `.env.prod.local`, `config/services.yaml` (referencia existente)

**Estado actualizado (12-03-2026):**
- Repositorio base: `RESETTING_RETRY_TTL=7200` agregado en `.env`.
- Servidor nuevo: debe definirse en `.env.prod.local` para no depender de defaults.

**Por qué es crítico:**  
`services.yaml` declara el parámetro:
```yaml
parameters:
    resetting_retry_ttl: "%env(int:RESETTING_RETRY_TTL)%"
```

Y `ResettingController` lo usa en tres métodos: `checkEmail()`, `validatePasswordExpired()` y `reset()`.

En un servidor limpio donde la variable no está definida en variables de entorno activas, **cualquier acceso al flujo de recuperación de contraseña puede lanzar una excepción** (`EnvNotFoundException`). El usuario ve un error 500, y la función de recuperación de contraseña queda completamente inutilizable.

El flujo afectado es:
- `/restablecer/solicitud` → no falla aquí
- `/restablecer/send-email` → falla al validar (llama a `validatePasswordExpired`)
- `/restablecer/check-email` → falla al obtener el parámetro
- `/restablecer/{token}` → falla al obtener el parámetro

**Fix obligatorio en servidor:**

En `.env.prod.local` del nuevo servidor agregar:
```ini
RESETTING_RETRY_TTL=7200
```

El valor `7200` representa 7,200 segundos = 2 horas. Es el tiempo de vida del token de recuperación de contraseña. Ajustar según política del negocio.

---

### 2.3 `APP_ENV=dev` y `debug=true` — CRÍTICO en staging/producción

**Archivo:** `.env`  
**Valor actual:** `APP_ENV=dev`

**Por qué es crítico:**  
Con `APP_ENV=dev` y debug activo:

1. **Stack traces expuestos públicamente:** Cualquier error muestra la traza completa del código PHP, incluyendo rutas de archivos, variables de entorno y datos de la petición. Esto facilita exploits dirigidos.

2. **Web Profiler accesible:** La barra de debug de Symfony (`/_profiler`) expone queries SQL, variables de sesión, tokens de seguridad, parámetros de request y configuración del contenedor a cualquier visitante.

3. **Cache sin optimizar:** Los proxies de Doctrine se generan en tiempo real (no compilados), la query cache está desactivada y no hay result cache. El rendimiento es significativamente inferior.

4. **Logs en nivel debug:** Se registra absolutamente todo, incluyendo queries SQL con datos de usuarios, parámetros de sesión, y requests completos. Los logs pueden volverse enormes y contener datos personales.

5. **La ruta `_preview_error` queda accesible:** Permite renderizar páginas de error arbitrarias.

**Fix obligatorio:**

```ini
# .env del nuevo servidor
APP_ENV=prod
APP_DEBUG=0
```

Después de esto es obligatorio ejecutar:
```bash
composer install --no-dev --optimize-autoloader
php bin/console cache:clear --env=prod
php bin/console cache:warmup --env=prod
```

---

### 2.4 Tabla `messenger_messages` no existe en servidor nuevo — CRÍTICO

**Configuración afectada:** `config/packages/messenger.yaml`

**Por qué es crítico:**  
El transporte de Messenger está configurado como:
```yaml
transports:
    async:
        dsn: '%env(MESSENGER_TRANSPORT_DSN)%'
        options:
            use_notify: true
        # ...
    failed: 'doctrine://default?queue_name=failed'
```

Con `MESSENGER_TRANSPORT_DSN=doctrine://default?auto_setup=0`, la opción `auto_setup=0` significa que las tablas `messenger_messages` **no se crean automáticamente**. En un servidor nuevo, la tabla no existe.

Aunque en este proyecto los emails no están enrutados por el bus asíncrono (están comentados en el routing), el transporte `failed` sí usa Doctrine, y cualquier mensaje que falle durante el proceso intentará guardarse en esa tabla — provocando una segunda excepción que oscurece el error original.

**Fix antes de arrancar:**

```bash
php bin/console messenger:setup-transports
```

Esto crea las tablas necesarias (`messenger_messages`) en la base de datos.

---

## 3. Problemas importantes

### 3.1 Brute force en login de usuarios (mitigado en repo, pendiente despliegue)

**Archivo:** `config/packages/security.yaml`  
**Firewall:** `main` (usuarios front-end)

**Situación detectada originalmente:**
```yaml
main:
    # ...
    login_throttling: null   # <-- desactiva explícitamente la protección
```

El firewall `backend` tampoco tenía `login_throttling` configurado.

**Estado actualizado (12-03-2026):**
Ya se activó `login_throttling` en `main` y `backend` dentro del repositorio. Falta desplegar esta version en servidor para que la mitigacion quede activa en entorno de pruebas/produccion.

**Consecuencia:**  
No hay límite de intentos de login. Un atacante puede realizar fuerza bruta sobre correos y contraseñas de usuarios sin ninguna restricción de velocidad.

> El paquete `symfony/rate-limiter` ya está instalado como dependencia, por lo que activarlo no requiere instalación adicional.

**Recomendación para staging/producción:**
```yaml
# security.yaml — firewall main
main:
    login_throttling:
        max_attempts: 5
        interval: '15 minutes'

# firewall backend
backend:
    login_throttling:
        max_attempts: 5
        interval: '15 minutes'
```

---

### 3.2 Directorios de uploads y cache de imágenes no existen en servidor nuevo

**Configuración:** `config/packages/vich_uploader.yaml`, `config/packages/liip_imagine.yaml`

**Directorios requeridos:**

| Directorio | Uso | ¿Existe en repo? |
|---|---|---|
| `public/media/uploads/instructors/` | Fotos de instructores (VichUploader) | No (`.gitignore`) |
| `public/media/uploads/site/` | Imágenes de configuración del sitio (VichUploader) | No (`.gitignore`) |
| `public/media/cache/` | Cache de thumbails de Liip Imagine | No (`.gitignore`) |

Si los directorios no existen al intentar subir una imagen, PHP lanza un error de escritura. Si `public/media/cache/` no existe, Liip Imagine falla al intentar servir imágenes redimensionadas.

**Estado local actualizado (12-03-2026):**
En este workspace ya se crearon `public/media/uploads/site` y `public/media/cache` para pruebas locales. En servidor nuevo deben crearse manualmente en el proceso de despliegue.

**Fix:**
```bash
mkdir -p public/media/uploads/instructors
mkdir -p public/media/uploads/site
mkdir -p public/media/cache
chmod -R 775 public/media/
chown -R www-data:www-data public/media/   # Linux/Apache
```

En Windows/IIS ajustar permisos del usuario del pool de aplicaciones sobre esa ruta.

---

### 3.3 Conekta (pagos) — Datos ya en la BD de producción, solo copiarlos

**Archivos:** `src/Service/Conekta/ConektaBase.php`, entidad `Configuration`

**Situación:**  
Las API keys de Conekta (sandbox y producción) se almacenan en la tabla `configuration` de la base de datos, no en variables de entorno. `ConektaBase::init()` las lee desde `ConfigurationRepository` al instanciarse.

En un servidor nuevo limpio, la tabla `configuration` estará vacía. Sin los datos de Conekta, **todo flujo de pago fallará** con error de tipo `null` o array vacío al intentar obtener las keys.

Flujos afectados:
- Compra de paquetes (usuarios)
- Registro de transacciones manuales (backend)
- Verificación de estado de pago

**Acción requerida post-instalación:**  
No es necesario crear nuevas keys. Los datos de Conekta ya están en la BD de producción. Después de cargar el backup (ver [Paso 12 — Cargar backup con datos de prueba](#paso-12--opcional-cargar-backup-con-datos-de-prueba)), la configuración de Conekta estará disponible automáticamente. Si no se carga el backup, acceder al panel `/backend` y copiar manualmente los valores de sandbox/producción en la sección de Configuración → Conekta.

---

## 4. Aspectos menores a considerar

### 4.1 Emails — Revisar en test de producción

**Archivo:** `.env`  
**Valor actual:** `MAILER_DSN=null://null`

Con `null://null`, todos los emails se descartan sin error ni warning. Funcionalmente el sistema no falla, pero el flujo de envío de correos no se prueba.

**Para staging/pruebas:**  
Los emails (bienvenida de usuario nuevo, recuperación de contraseña, confirmación de reservación, etc.) se descartan silenciosamente. Es de bajo impacto porque el flujo de datos y lógica de negocio ya está validado. Configurar un MAILER_DSN real es recomendado pero **puede posponerse para el test de producción**.

**Opciones disponibles cuando se necesite:**

| Opción | DSN | Nota |
|---|---|---|
| Mailpit (local, recomendado) | `smtp://localhost:1025` | Captura mails sin enviarlos, interfaz web |
| null (actual) | `null://null` | Descarta mails silenciosamente |
| Mailtrap | `smtp://user:pass@sandbox.smtp.mailtrap.io:2525` | Servicio online |
| SendGrid | `sendgrid+api://KEY@default` | Instalado como dependencia |

---

### 4.2 `default_uri` no configurado para comandos de consola

**Archivo:** `config/packages/routing.yaml`

```yaml
framework:
    router:
        # default_uri: http://localhost  # <-- comentado
```

**Consecuencia:**  
Los comandos de consola que generan URLs (por ejemplo, el comando de emails de confirmación de reservación) usarán `http://localhost` como base por defecto. En staging puede no ser el dominio correcto.

**Fix recomendado para el servidor de staging:**
```yaml
when@prod:
    framework:
        router:
            default_uri: 'https://staging.pbstudio.mx'  # ajustar al dominio real
```

O configurarlo con una variable de entorno:
```ini
# .env.prod.local
SITE_URL=https://staging.pbstudio.mx
```

---

## 5. Checklist completo de instalación paso a paso

### Prerrequisitos del servidor

- [ ] PHP >= 8.2 con extensiones: `ctype`, `iconv`, `fileinfo`, `pdo_mysql`, `gd`, `exif`, `intl`, `mbstring`, `openssl`
- [ ] MySQL >= 5.7 / MariaDB >= 10.3
- [ ] Composer >= 2.x
- [ ] Node.js >= 16 + npm >= 8
- [ ] Git
- [ ] Servidor web: Apache 2.4+ o Nginx con PHP-FPM

### Pasos de instalación

#### Paso 1 — Clonar el repositorio

```bash
git clone https://github.com/pbstud/pbstudio-legacy.git pbstudio81
cd pbstudio81
git checkout main
```

#### Paso 2 — Crear base de datos

```sql
CREATE DATABASE pbstudio CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'pbstudio_user'@'localhost' IDENTIFIED BY 'contraseña_segura';
GRANT ALL PRIVILEGES ON pbstudio.* TO 'pbstudio_user'@'localhost';
FLUSH PRIVILEGES;
```

#### Paso 3 — Configurar variables de entorno

Crear el archivo `.env.prod.local` en la raíz del proyecto (este archivo NO se sube al repositorio):

```ini
APP_ENV=prod
APP_DEBUG=0
APP_SECRET=<generar con: php -r "echo bin2hex(random_bytes(32));"> 

DATABASE_URL="mysql://pbstudio_user:contraseña_segura@127.0.0.1:3306/pbstudio"

MESSENGER_TRANSPORT_DSN=doctrine://default?auto_setup=0

MAILER_DSN=smtp://localhost:1025
# o: MAILER_DSN=null://null  (si no se necesitan emails en las pruebas)

RESETTING_RETRY_TTL=7200
```

> **Importante:** `.env` contiene los valores por defecto del repositorio. Las sobreescrituras del servidor van siempre en `.env.prod.local`, que está en `.gitignore` y nunca debe subirse.

#### Paso 4 — Instalar dependencias PHP

```bash
composer install --no-dev --optimize-autoloader
```

La flag `--no-dev` excluye herramientas de desarrollo (maker bundle, phpunit, etc.) que no deben estar en un servidor.

#### Paso 5 — Instalar y compilar assets JS/CSS

```bash
npm install
npm run build
```

Esto compila los archivos de `assets/` hacia `public/build/` usando Webpack Encore.

#### Paso 6 — Ejecutar migraciones de base de datos

```bash
php bin/console doctrine:migrations:migrate --no-interaction --env=prod
```

Esto aplica las 6 migraciones en orden:
1. `Version20240316044313` — estructura base
2. `Version20240322035845`
3. `Version20240411074858`
4. `Version20240421165740`
5. `Version20240920214042`
6. `Version20260309000000` — tabla `session_audit` (SCRUM-81)

#### Paso 7 — Crear tablas de Messenger

```bash
php bin/console messenger:setup-transports --env=prod
```

Crea la tabla `messenger_messages` en la base de datos. Requerido por el transporte `failed`.

#### Paso 8 — Crear directorios de media

```bash
mkdir -p public/media/uploads/instructors
mkdir -p public/media/uploads/site
mkdir -p public/media/cache
chmod -R 775 public/media/
chown -R www-data:www-data public/media/   # Linux — ajustar usuario según servidor
```

#### Paso 9 — Warmup del cache de producción

```bash
php bin/console cache:clear --env=prod
php bin/console cache:warmup --env=prod
```

Esto compila los proxies de Doctrine, precarga la configuración del contenedor y los templates Twig. Es obligatorio después de cualquier cambio de código o configuración.

Verificar que `var/cache/prod/` tenga los permisos correctos para el usuario del servidor web:
```bash
chmod -R 775 var/cache/ var/log/
chown -R www-data:www-data var/
```

#### Paso 10 — Crear el usuario administrador

```bash
php bin/console app:staff:create
```

Este comando interactivo crea el primer usuario de staff (administrador del backend). Sin este paso, no hay acceso al panel.

#### Paso 11 — Verificar el contenedor y el esquema

```bash
php bin/console doctrine:schema:validate --env=prod
```

Debe mostrar:
```
[OK] The mapping files are correct.
[OK] The database schema is in sync with the mapping files.
```

#### Paso 12 — (OPCIONAL) Cargar backup con datos de prueba

**Archivos de backup disponibles:**  
En el repositorio hay backups SQL que contienen datos de prueba (usuarios, sesiones, paquetes, configuración de Conekta, etc.). Cargar uno de estos backups acelera la validación completa del sistema y permite probar end-to-end.

**Cuándo usar:**
- Después de ejecutar todas las migraciones (paso 6) y verificaciones (paso 11).
- **Antes** de crear el usuario administrador (paso 10 se puede saltear si el backup incluye staff).
- **Antes** de activar los crons (para evitar procesos automáticos sobre datos parciales).

**Ubicación de backups:**
```
Especificaciones/pbstudio_back.sql           # Backup general con datos de prueba
Especificaciones/pbstudio_15ene2026_back.sql # Versión específica de enero 2026
```

**Procedimiento de importación:**

Opción A — Directamente con mysql (más rápido):
```bash
mysql -u pbstudio_user -p pbstudio < Especificaciones/pbstudio_back.sql
```

Opción B — Si usas cliente gráfico (phpMyAdmin, DBeaver, etc.):
1. Abrir herramienta → conectar a BD `pbstudio`
2. Ir a menú Importar/Restore → Seleccionar `Especificaciones/pbstudio_back.sql`
3. Ejecutar
4. Esperar a que complete (puede tomar 1-5 minutos dependiendo del tamaño)

**Qué incluye el backup:**
- Estructura de todas las tablas (igual que las migraciones, redundante pero seguro)
- Datos de prueba: usuarios, sesiones, paquetes, disciplinas, instructores, sucursales
- **Configuración de Conekta** (sandbox keys) — evita configurar manualmente en backend
- Datos históricos de transacciones y reservaciones para validar flujos
- Configuración del sitio (branding, horarios, sucursales activas, etc.)

**Validaciones a ejecutar después del backup:**

1. **Verificar integridad de datos:**
   ```bash
   php bin/console doctrine:schema:validate
   # Debe mostrar: "✓ The schema is in sync with the current mapping."
   ```

2. **Contar registros (sanity check):**
   ```bash
   mysql -u pbstudio_user -p pbstudio <<'EOF'
   SELECT 'Users' as tabla, COUNT(*) as total FROM user
   UNION ALL SELECT 'Sessions', COUNT(*) FROM session
   UNION ALL SELECT 'Reservations', COUNT(*) FROM reservation
   UNION ALL SELECT 'Instructors', COUNT(*) FROM instructor
   UNION ALL SELECT 'Clientes', COUNT(*) FROM client
   ORDER BY tabla;
   EOF
   ```

3. **Probar autenticación:**
   - Acceder al frontend `/` — ¿Carga correctamente?
   - Loguear con usuario de prueba (credenciales en el backup o en documentación del equipo)
   - Acceder al panel `/backend` — ¿Funciona?

4. **Validar fechas de sesiones:**
   - Verificar que las sesiones futuras tienen `session_datetime > NOW()`
   - Las sesiones pasadas deben tener `session_datetime < NOW()`
   ```bash
   mysql -u pbstudio_user -p pbstudio -e "
   SELECT COUNT(*) as 'Sesiones futuras'
   FROM session WHERE session_datetime > NOW();"
   ```

5. **Validar Conekta (si está incluido en el backup):**
   - Ir a `/backend` → Configuración → Sección de Conekta
   - Verificar que están presentes los API keys (sandbox)
   - NO modificar — se usarán como están

**Después del backup:**
- Limpiar caché: `php bin/console cache:clear`
- Ejecutar `composer dump-autoload` si hay cambios en namespaces
- **NO volver a ejecutar** `doctrine:migrations:migrate` (schema ya actualizado)
- Proceder a configurar crons (paso siguiente)

---

#### Paso 13 — Configurar el servidor web

**Apache** — crear VirtualHost apuntando a `public/`:
```apache
<VirtualHost *:80>
    ServerName staging.pbstudio.mx
    DocumentRoot /var/www/pbstudio81/public

    <Directory /var/www/pbstudio81/public>
        AllowOverride All
        Require all granted
    </Directory>

    # Redirigir todo a index.php (Symfony front controller)
    FallbackResource /index.php
</VirtualHost>
```

**Nginx:**
```nginx
server {
    listen 80;
    server_name staging.pbstudio.mx;
    root /var/www/pbstudio81/public;

    location / {
        try_files $uri /index.php$is_args$args;
    }

    location ~ ^/index\.php(/|$) {
        fastcgi_pass unix:/run/php/php8.2-fpm.sock;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
        internal;
    }
}
```

---

#### Paso 14 — Agregar código de tracking: Facebook Pixel y Google Analytics

Antes de publicar el sitio, agregar los códigos de seguimiento de marketing en la template base. Estos códigos se deben insertar **justo antes de cerrar el tag `</head>`**.

**Ubicación:** `templates/base.html.twig` (template base que heredan todas las páginas)

**Facebook Pixel** — se inyecta como `<script>` en el `<head>`:
```html
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2898250380397094');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2898250380397094&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
```

**Google Analytics** — código antiguo UA (Legacy):
```html
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100207892-1', 'auto');
  ga('send', 'pageview');
</script>
```

> **Nota:** El código de Google Analytics (UA-100207892-1) es legacy. Si la BD de producción tiene una propiedad Google Analytics más moderna (GA4), usar su ID en lugar de este.

**En la template:**
```twig
{# templates/base.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{% block title %}P&B Studio{% endblock %}</title>
    
    {# ... other meta tags and stylesheets ... #}

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '2898250380397094');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=2898250380397094&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-100207892-1', 'auto');
      ga('send', 'pageview');
    </script>

</head>
<body>
    {# body content #}
</body>
</html>
```

Este paso puede hacerse **después del despliegue inicial** si es necesario validar primer el funcionamiento técnico sin tracking.

---

## 6. Variables de entorno requeridas

Lista completa de variables que deben existir en el servidor. Las marcadas con ⚠️ son las que NO están en el `.env` actual del repositorio o tienen valores inseguros por defecto.

| Variable | Descripción | Valor de ejemplo / Notas |
|---|---|---|
| `APP_ENV` | Entorno de la aplicación | `prod` (staging o prod) |
| `APP_DEBUG` | Debug mode | `0` |
| `APP_SECRET` ⚠️ | Clave secreta del framework | `php -r "echo bin2hex(random_bytes(32));"` — **generar uno único** |
| `DATABASE_URL` | URL de conexión a MySQL | `mysql://user:pass@127.0.0.1:3306/dbname` |
| `MESSENGER_TRANSPORT_DSN` | Transporte del bus de mensajes | `doctrine://default?auto_setup=0` |
| `MAILER_DSN` | Configuración de envío de correo | `null://null` o DSN real |
| `RESETTING_RETRY_TTL` | TTL del token de recuperación de contraseña (segundos) | `7200` (2 horas) — valor base en `.env` desde 12-03-2026 |

---

## 7. Comandos programados (Crons)

El sistema requiere 3 comandos ejecutados periódicamente. Sin ellos, las sesiones no se cierran, las transacciones no expiran y la lista de espera no se libera.

| Comando | Función | Frecuencia recomendada |
|---|---|---|
| `app:transaction:checkexpiration` | Marca como expiradas las transacciones de paquetes vencidas y dispara el evento de expiración | Diario a medianoche |
| `app:session:autoclosing` | Cierra automáticamente las sesiones cuyo horario ya pasó | Cada 15 minutos |
| `app:waiting-list:expire` | Expira las listas de espera que ya no son válidas | Cada hora |

**Configuración de cron (Linux crontab):**
```cron
# Transacciones — diario a medianoche
0 0 * * * www-data /usr/bin/php /var/www/pbstudio81/bin/console app:transaction:checkexpiration --env=prod >> /var/log/pbstudio/cron.log 2>&1

# Cierre de sesiones — cada 15 minutos
*/15 * * * * www-data /usr/bin/php /var/www/pbstudio81/bin/console app:session:autoclosing --env=prod >> /var/log/pbstudio/cron.log 2>&1

# Lista de espera — cada hora
0 * * * * www-data /usr/bin/php /var/www/pbstudio81/bin/console app:waiting-list:expire --env=prod >> /var/log/pbstudio/cron.log 2>&1
```

Crear el directorio de logs si no existe:
```bash
mkdir -p /var/log/pbstudio
chown www-data:www-data /var/log/pbstudio
```

---

## 8. Integración de Analytics — Tracking codes

Antes de lanzar a producción, se deben agregar los códigos de rastreo de analytics al template base. Estos se incluyen en el `<head>` del HTML para recopilar datos de uso y conversión.

### Ubicación y procedimiento

1. **Archivo:** `templates/layout.html.twig`
2. **Ubicación exacta:** Justo antes de la etiqueta de cierre `</head>` (línea final de la sección head)
3. **Cómo agregar:**
   - Abrir el archivo `templates/layout.html.twig`
   - Localizar la línea `</head>`
   - Insertar los códigos **antes** de esa línea (dejar una línea en blanco)

### Códigos a insertar

#### Facebook Pixel
```html
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1234567890123456'); // ← REEMPLAZAR CON EL ID DE PRODUCCIÓN
  fbq('track', 'PageView');
</script>
<noscript>
  <img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1234567890123456&ev=PageView&noscript=1"/> <!-- ← REEMPLAZAR ID -->
</noscript>
<!-- End Facebook Pixel -->
```

#### Google Analytics
```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script> <!-- ← REEMPLAZAR CON ID DE PRODUCCIÓN -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XXXXXXXXXX'); // ← REEMPLAZAR ID
</script>
<!-- End Google Analytics -->
```

### Importante — IDs de producción vs. staging

- **Para staging/test:** Usar IDs de testing (no contaminar analytics de producción)
- **Para producción:** Reemplazar `1234567890123456` (Facebook) y `G-XXXXXXXXXX` (Google) con los valores reales
- **Recomendación:** Guardar los IDs en variables de entorno (`.env`) si quieres que sean dinámicos:

```bash
# .env
FACEBOOK_PIXEL_ID=1234567890123456
GOOGLE_ANALYTICS_ID=G-XXXXXXXXXX
```

Luego en `layout.html.twig`:
```twig
fbq('init', '{{ env("FACEBOOK_PIXEL_ID") }}');
gtag('config', '{{ env("GOOGLE_ANALYTICS_ID") }}');
```

---

## 9. Configuración post-instalación desde el backend

Una vez el servidor arranca correctamente, estos parámetros deben configurarse desde el panel `/backend` antes de habilitar el sitio al público.

### 9.1 Conekta (Pagos)

Ruta: Panel Backend → Configuración → Conekta

Parámetros necesarios:
- **Modo:** Sandbox (pruebas) o Producción
- **Public Key Sandbox:** `key_xxxxxxxxxxxxxxxx`
- **Secret Key Sandbox:** `key_xxxxxxxxxxxxxxxx`
- **Public Key Producción:** `key_xxxxxxxxxxxxxxxx`
- **Secret Key Producción:** `key_xxxxxxxxxxxxxxxx`

Sin esta configuración, el flujo de compra de paquetes falla con error 500.

### 9.2 Configuración general del sitio

Verificar en el backend:
- Sucursales activas y visibles
- Paquetes publicados
- Disciplinas activas
- Horario de cancelación configurado (horas antes para grupos e individuales)

### 9.3 Primera sesión de prueba

Crear al menos una sesión de clase para verificar el flujo completo:
1. Crear sesión desde backend
2. Registrar un usuario desde el front
3. Comprar un paquete (modo sandbox de Conekta)
4. Reservar una clase
5. Probar cambio de reservación
6. Probar cancelación

---

## 10. Verificaciones finales

Ejecutar estos comandos después del setup para confirmar que todo está en orden:

```bash
# 1. Sin errores en schema
php bin/console doctrine:schema:validate --env=prod

# 2. Cache compilada correctamente
php bin/console debug:container --env=prod 2>&1 | tail -5

# 3. Rutas cargadas
php bin/console debug:router --env=prod 2>&1 | wc -l

# 4. Todos los servicios inyectables
php bin/console cache:warmup --env=prod

# 5. Test rápido de crons
php bin/console app:session:autoclosing --env=prod
php bin/console app:transaction:checkexpiration --env=prod
php bin/console app:waiting-list:expire --env=prod
```

**Checklist de rutas a probar manualmente:**

| Ruta | URL | Verificar |
|---|---|---|
| Home | `/` | Carga sin error |
| Reservar clase | `/reservar-clase/{slug}` | Calendario visible con sesiones |
| Login usuario | `/login` | Formulario, CSRF activo |
| Registro | `/register` (modal) | Formulario, guarda usuario |
| Restablecer contraseña | `/restablecer/solicitud` | Sin error 500 (`RESETTING_RETRY_TTL`) |
| Perfil usuario | `/mi-cuenta` | Requiere login, muestra reservaciones |
| Cambiar reservación | `/mi-cuenta/reservacion/{id}/cambiar` | Vista de calendario semanal |
| Backend login | `/backend/login` | Sin error |
| Backend dashboard | `/backend` | Requiere autenticación de staff |
| Compra de paquete | `/backend/paquetes` (frontend) | Flujo Conekta sandbox |

---

## 11. Notas adicionales

### Sobre `beberlei/doctrineextensions`

Esta dependencia usa `dev-master` (sin versión fija):
```json
"beberlei/doctrineextensions": "dev-master"
```
En un despliegue con `composer install` esto instalará el último commit de la rama master en el momento. En producción es preferible fijar una versión estable para garantizar reproducibilidad.

### Sobre OPcache

En el análisis se detectó que OPcache está desactivado en el entorno de desarrollo (`OPcache: false`). Para el servidor de staging/producción, activar OPcache en `php.ini` mejora significativamente el rendimiento de Symfony:

```ini
; php.ini
opcache.enable=1
opcache.memory_consumption=256
opcache.max_accelerated_files=20000
opcache.validate_timestamps=0  ; 1 en staging (actualiza el cache automáticamente)
```

### Sobre logs en producción

Los logs se guardan en `var/log/prod.log` en formato JSON (configuración de monolog). Rotar los logs con `logrotate` para evitar que crezcan indefinidamente:

```bash
# /etc/logrotate.d/pbstudio
/var/www/pbstudio81/var/log/*.log {
    daily
    missingok
    rotate 14
    compress
    notifempty
    create 664 www-data www-data
}
```







---

## 12. Runbook ejecutable — Servidor destino (Linux)

Este bloque es para ejecutar en servidor limpio de staging o pre-produccion, desde shell Linux, con permisos de despliegue y sudo.

Script automatizado disponible:

`DOCUMENTACION/scripts/runbook_servidor_destino_linux.sh`

Uso rapido:

```bash
chmod +x DOCUMENTACION/scripts/runbook_servidor_destino_linux.sh
APP_PATH=/var/www/pbstudio81 \
DB_NAME=pbstudio \
DB_USER=pbstudio_user \
DB_PASS='CAMBIAR_PASSWORD' \
SITE_URL='https://staging.pbstudio.mx' \
bash DOCUMENTACION/scripts/runbook_servidor_destino_linux.sh
```

### 12.1 Variables que debes ajustar antes de ejecutar

```bash
export APP_PATH="/var/www/pbstudio81"
export DB_NAME="pbstudio"
export DB_USER="pbstudio_user"
export DB_PASS="CAMBIAR_PASSWORD"
export DB_HOST="127.0.0.1"
export DB_PORT="3306"
export SITE_URL="https://staging.pbstudio.mx"
```

### 12.2 Preflight de servidor

```bash
set -euo pipefail

sudo apt update
sudo apt install -y git unzip npm composer \
  php8.2 php8.2-cli php8.2-fpm php8.2-mysql php8.2-curl php8.2-xml php8.2-zip php8.2-mbstring \
  php8.2-gd php8.2-exif php8.2-intl

php -v
php -m | egrep "gd|exif|intl|pdo_mysql|mbstring"
```

### 12.3 Checkout de código

```bash
sudo mkdir -p "$APP_PATH"
sudo chown -R "$USER":"$USER" "$APP_PATH"

if [ ! -d "$APP_PATH/.git" ]; then
  git clone https://github.com/pbstud/pbstudio-legacy.git "$APP_PATH"
fi

cd "$APP_PATH"
git fetch --all
git checkout main
git pull --ff-only
```

### 12.4 Configurar entorno de producción

```bash
SECRET_VALUE="$(php -r 'echo bin2hex(random_bytes(32));')"

cat > .env.prod.local <<EOF
APP_ENV=prod
APP_DEBUG=0
APP_SECRET=${SECRET_VALUE}
DATABASE_URL="mysql://${DB_USER}:${DB_PASS}@${DB_HOST}:${DB_PORT}/${DB_NAME}"
MESSENGER_TRANSPORT_DSN=doctrine://default?auto_setup=0
MAILER_DSN=null://null
RESETTING_RETRY_TTL=7200
SITE_URL=${SITE_URL}
EOF

chmod 600 .env.prod.local
```

### 12.5 Build de aplicación

```bash
composer install --no-dev --optimize-autoloader
npm install
npm run build

php bin/console doctrine:migrations:migrate --no-interaction --env=prod
php bin/console messenger:setup-transports --env=prod

mkdir -p public/media/uploads/instructors public/media/uploads/site public/media/cache
sudo chown -R www-data:www-data public/media var
sudo chmod -R 775 public/media var

php bin/console cache:clear --env=prod
php bin/console cache:warmup --env=prod
```

### 12.6 Smoke checks (GO / NO-GO)

```bash
php bin/console about --env=prod | egrep "Environment|Debug"
php bin/console doctrine:schema:validate --env=prod
php bin/console lint:container --env=prod
php bin/console debug:router --env=prod | wc -l
php bin/console list app --env=prod
+
php bin/console app:session:autoclosing --env=prod
php bin/console app:transaction:checkexpiration --env=prod
php bin/console app:waiting-list:expire --env=prod
```

Resultado esperado:
- `Environment` en `prod`
- `Debug` en `false`
- `schema:validate` en `OK`
- `lint:container` en `OK`
- Comandos `app:*` sin excepciones

### 12.7 Crons finales

```cron
0 0 * * * www-data /usr/bin/php /var/www/pbstudio81/bin/console app:transaction:checkexpiration --no-debug --env=prod >> /var/log/pbstudio/transaction.checkexpiration.log 2>&1
*/15 * * * * www-data /usr/bin/php /var/www/pbstudio81/bin/console app:session:autoclosing --no-debug --env=prod >> /var/log/pbstudio/session.autoclosing.log 2>&1
0 * * * * www-data /usr/bin/php /var/www/pbstudio81/bin/console app:waiting-list:expire --no-debug --env=prod >> /var/log/pbstudio/waiting-list.log 2>&1
```

---

## 13. Comandos exactos — instalación completa

Ejecutar en orden desde la carpeta raíz del proyecto en el servidor. Ajustar las variables del bloque 1 antes de comenzar.

### Bloque 1 — Variables (editar antes de ejecutar)

```bash
export APP_PATH="/var/www/pbstudio81"
export DB_NAME="pbstudio"
export DB_USER="pbstudio_user"
export DB_PASS="CAMBIAR_PASSWORD"
export DB_HOST="127.0.0.1"
export DB_PORT="3306"
export SITE_URL="https://staging.pbstudio.mx"
```

### Bloque 2 — Paquetes del sistema y extensiones PHP

```bash
sudo apt update
sudo apt install -y git unzip npm \
  php8.2 php8.2-cli php8.2-fpm php8.2-mysql php8.2-curl \
  php8.2-xml php8.2-zip php8.2-mbstring php8.2-gd php8.2-intl

php -v
php -m | grep -E "gd|intl|pdo_mysql|mbstring"
```

### Bloque 3 — Clonar o actualizar repositorio

```bash
sudo mkdir -p "$APP_PATH"
sudo chown -R "$USER":"$USER" "$APP_PATH"

git clone https://github.com/pbstud/pbstudio-legacy.git "$APP_PATH"
cd "$APP_PATH"
git checkout main
```

### Bloque 4 — Base de datos

```sql
CREATE DATABASE pbstudio CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'pbstudio_user'@'localhost' IDENTIFIED BY 'CAMBIAR_PASSWORD';
GRANT ALL PRIVILEGES ON pbstudio.* TO 'pbstudio_user'@'localhost';
FLUSH PRIVILEGES;
```

### Bloque 5 — Archivo de entorno

```bash
SECRET_VALUE="$(php -r 'echo bin2hex(random_bytes(32));')"

cat > .env.prod.local <<EOF
APP_ENV=prod
APP_DEBUG=0
APP_SECRET=${SECRET_VALUE}
DATABASE_URL="mysql://${DB_USER}:${DB_PASS}@${DB_HOST}:${DB_PORT}/${DB_NAME}"
MESSENGER_TRANSPORT_DSN=doctrine://default?auto_setup=0
MAILER_DSN=null://null
RESETTING_RETRY_TTL=7200
SITE_URL=${SITE_URL}
EOF

chmod 600 .env.prod.local
```

### Bloque 6 — Dependencias y assets

```bash
composer install --no-dev --optimize-autoloader
npm install
npm run build
```

### Bloque 7 — Base de datos: migraciones y messenger

```bash
php bin/console doctrine:migrations:migrate --no-interaction --env=prod
php bin/console messenger:setup-transports --env=prod
```

### Bloque 8 — Directorios de media y permisos

```bash
mkdir -p public/media/uploads/instructors
mkdir -p public/media/uploads/site
mkdir -p public/media/cache
sudo chown -R www-data:www-data public/media var
sudo chmod -R 775 public/media var
```

### Bloque 9 — Cache de producción

```bash
php bin/console cache:clear --env=prod
php bin/console cache:warmup --env=prod
```

### Bloque 10 — (Opcional) Cargar backup de datos

```bash
# Ejecutar SI se quiere cargar datos de prueba existentes
mysql -u "$DB_USER" -p "$DB_NAME" < Especificaciones/pbstudio_back.sql

# Validar integridad tras la importación
php bin/console doctrine:schema:validate --env=prod
```

### Bloque 11 — Usuario administrador

```bash
# Ejecutar SOLO si el backup no incluye usuario de staff
php bin/console app:staff:create --env=prod
```

### Bloque 12 — Smoke checks (GO / NO-GO)

```bash
php bin/console about --env=prod | grep -E "Environment|Debug"
php bin/console doctrine:schema:validate --env=prod
php bin/console lint:container --env=prod
php bin/console debug:router --env=prod | wc -l
php bin/console list app --env=prod
php bin/console app:session:autoclosing --env=prod
php bin/console app:transaction:checkexpiration --env=prod
php bin/console app:waiting-list:expire --env=prod
```

### Bloque 13 — Servidor web (Nginx)

```bash
sudo nano /etc/nginx/sites-available/pbstudio81
```

```nginx
server {
    listen 80;
    server_name staging.pbstudio.mx;
    root /var/www/pbstudio81/public;

    location / {
        try_files $uri /index.php$is_args$args;
    }

    location ~ ^/index\.php(/|$) {
        fastcgi_pass unix:/run/php/php8.2-fpm.sock;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
        internal;
    }
}
```

```bash
sudo ln -s /etc/nginx/sites-available/pbstudio81 /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl reload nginx
```

### Bloque 14 — Crons

```bash
mkdir -p /var/log/pbstudio
sudo chown www-data:www-data /var/log/pbstudio

sudo crontab -u www-data -e
```

Agregar estas líneas:

```cron
0 0 * * * /usr/bin/php /var/www/pbstudio81/bin/console app:transaction:checkexpiration --no-debug --env=prod >> /var/log/pbstudio/transaction.log 2>&1
*/15 * * * * /usr/bin/php /var/www/pbstudio81/bin/console app:session:autoclosing --no-debug --env=prod >> /var/log/pbstudio/session.log 2>&1
0 * * * * /usr/bin/php /var/www/pbstudio81/bin/console app:waiting-list:expire --no-debug --env=prod >> /var/log/pbstudio/waitinglist.log 2>&1
```
