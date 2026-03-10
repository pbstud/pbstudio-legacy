# ISSUE: Carga Masiva de Horarios - Error 403/404 despues de Guardar

Fecha de documentacion: 03/03/2026
Ultima actualizacion: 10/03/2026
Prioridad: Alta
Estado: Analisis consolidado y fix implementado en codigo local

---

## 1. Resumen ejecutivo

En produccion, al guardar clases desde Carga Masiva, el sistema podia mostrar pagina 403/404 al redirigir a la pantalla de edicion del dia.

El problema NO estaba en la definicion de rutas ni en permisos de admin. La causa raiz fue el parseo ambiguo del parametro `editDate` cuando Symfony intentaba convertir una fecha como `14-03-2026` sin formato explicito.

Se aplico fix en controller para forzar parseo estable con `MapDateTime(format: 'd-m-Y')`.

---

## 2. Sintoma reportado

Flujo reportado por staff en produccion:

1. Entrar a Carga Masiva por sucursal.
2. Crear varias clases y pulsar Guardar.
3. El sistema muestra pagina Forbidden/Not Found en vez de abrir edicion del dia.

Impacto:

- Interrumpe operacion diaria del backend.
- Obliga a repetir intentos sin certeza de si se guardo.
- Aumenta riesgo de datos inconsistentes por reintentos.

---

## 3. Validaciones realizadas (dev y prod)

### 3.1 Rutas

Se valido con consola Symfony:

- `php bin/console debug:router backend_session_day_edit`
- `php bin/console debug:router backend_session_day_edit --env=prod`
- `php bin/console router:match "/backend/session-day/edit/14-03-2026/1" --method=GET`
- `php bin/console router:match "/backend/session-day/edit/14-03-2026/1" --method=GET --env=prod`

Resultado:

- La ruta existe en ambos entornos.
- Path y placeholders son correctos: `/backend/session-day/edit/{editDate}/{branchOfficeId}`.
- La URL generada por redirect hace match correcto.

Conclusion: rutas descartadas como causa.

### 3.2 Permisos

Se instrumentaron logs en `RouteAccessVoter` y se confirmo:

- Usuario con `ROLE_ADMIN` recibe acceso concedido.
- No se observaron denegaciones de acceso en el flujo validado.

Conclusion: permisos descartados como causa principal para este caso.

### 3.3 Flujo funcional en dev

Con logs del flujo `SessionDay`:

- `newDay POST recibido`.
- Redirect a `editDay`.
- `editDay invocado` con `editDate` parseada correctamente.
- Sesiones encontradas en BD despues del guardado.

Conclusion: en dev el flujo completo responde correctamente con el fix aplicado.

---

## 4. Causa raiz confirmada

El redirect de `newDay()` envia fecha en formato `d-m-Y`:

```php
return $this->redirectToRoute('backend_session_day_edit', [
    'editDate' => $newDate->format('d-m-Y'),
    'branchOfficeId' => $branchOfficeId,
]);
```

Sin `MapDateTime`, Symfony usa el resolver por defecto que intenta parsear con `new DateTime($value)` cuando no hay formato explicito.

Para valores como `14-03-2026`, ese parseo puede variar segun version/config de PHP y producir:

- parseo invalido,
- `NotFoundHttpException`,
- respuesta final como 404 (o pagina generica equivalente en servidor).

Este comportamiento explica por que podia verse en produccion y no reproducirse igual en dev.

---

## 5. Fix aplicado en codigo

Archivo: `src/Controller/Backend/SessionDayController.php`

Cambios aplicados:

1. Import:

```php
use Symfony\Component\HttpKernel\Attribute\MapDateTime;
```

2. Parametro de accion `editDay()`:

```php
#[MapDateTime(format: 'd-m-Y')]
\DateTime $editDate,
```

Con esto, Symfony usa `createFromFormat('d-m-Y', ...)` de forma deterministica.

---

## 6. Estado actual

- Fix implementado y validado en entorno local.
- Logging tecnico agregado para seguir trazabilidad de flujo y permisos.
- Documentacion consolidada en este unico archivo para este error.

Pendiente operativo:

- Desplegar cambios a produccion.
- Limpiar/warm cache de prod.
- Confirmar en `prod.log` que no aparece `Invalid date given for parameter "editDate"`.

---

## 7. Pasos de despliegue recomendados

1. Publicar cambios:

```bash
git add src/Controller/Backend/SessionDayController.php src/Security/Voter/RouteAccessVoter.php DOCUMENTACION/FIXES_PENDIENTES/ISSUE_CARGA_MASIVA_HORARIOS.md DOCUMENTACION/FIXES_PENDIENTES/ANALISIS_ERROR_403_404_CARGA_MASIVA.md
git commit -m "fix(session-day): stabilize editDate parsing and consolidate incident docs"
git push
```

2. En servidor de produccion:

```bash
php bin/console cache:clear --env=prod --no-warmup
php bin/console cache:warmup --env=prod
php bin/console debug:router backend_session_day_edit --env=prod
```

3. Verificacion post deploy:

```bash
tail -200 var/log/prod.log | grep -E "SessionDay|RouteAccessVoter|Invalid date given|NotFoundHttpException"
```

---

## 8. Nota de unificacion documental

Este archivo queda como fuente unica del incidente 403/404 en Carga Masiva.

El archivo historico `ANALISIS_ERROR_403_404_CARGA_MASIVA.md` se mantiene solo como puntero de referencia para no romper enlaces existentes.
