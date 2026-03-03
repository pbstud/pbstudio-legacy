# 🛠️ Guía Técnica de Desarrollo - PB STUDIO

**Última actualización:** 27/02/2026  
**Nivel:** Intermedio-Avanzado  
**Enfoque:** Ejemplos reales del proyecto  
**Stack:** Symfony 6.4, Doctrine ORM 2.x, MySQL 5.7, PHP 8.2

---

## 1. Setup del Entorno de Desarrollo

### 1.1 Requisitos Previos

**Software necesario (OBLIGATORIO):**
```bash
✓ PHP 8.2.30+ (CLI)                # Verificar: php -v
✓ MySQL 5.7+ (servicio MySQL57)    # Verificar: mysql --version
✓ Node.js 20.20.0+                 # Verificar: node -v
✓ npm 10.8.2+                      # Verificar: npm -v
✓ Composer 2.7+                    # Verificar: composer --version
✓ Git                              # Verificar: git --version
✓ VSCode (recomendado)             # Con extensiones: PHP Intelephense, Thunder Client
```

**Extensiones PHP CRÍTICAS:**
```bash
✓ pdo_mysql         # Conexión a MySQL (OBLIGATORIO)
✓ curl              # HTTP requests para Conekta
✓ openssl           # SSL/TLS para HTTPS
✓ zip               # Manejo de archivos comprimidos
✓ ctype, iconv      # Para validaciones Symfony
✓ simplexml, tokenizer  # Para Symfony core
```

**Verificar extensiones:**
```powershell
php -m | findstr /i "pdo_mysql curl openssl zip"
# Debe mostrar: pdo_mysql, curl, openssl, zip
```

### 1.2 Instalación Inicial PASO A PASO

```powershell
# Clonar o descargar proyecto
cd c:\pbstudio\PBStudio81

# Instalar dependencias PHP
php composer.phar install

# Instalar dependencias JavaScript
npm install

# Configurar .env
@'
APP_ENV=dev
APP_SECRET=MySecretKey123
DATABASE_URL="mysql://root:exael@127.0.0.1:3306/pbstudio"
MESSENGER_TRANSPORT_DSN=doctrine://default?queue_name=default
MAILER_DSN=smtp://localhost:1025
APP_DEBUG=true
'@ | Out-File -FilePath .env -Encoding ascii

# Preparar BD
php bin/console doctrine:database:create --if-not-exists
php bin/console doctrine:migrations:sync-metadata-storage

# Compilar assets (IMPORTANTE: sinc con cambios en .js/.css)
npm run watch  # Modo desarrollo - reconstruye automáticamente
# O para producción optimizado:
npm run build

# Verificar que todo compila correctamente
php bin/console cache:clear
php bin/console cache:warmup

# Iniciar servidor Symfony (en puerto 8000 con 512M de memoria)
php -d memory_limit=512M -S 127.0.0.1:8000 -t public
# Acceder a: http://127.0.0.1:8000

# VERIFICACIONES POST-SETUP
echo "✓ Base de datos: $(mysql -u root -pexael -e 'SELECT COUNT(*) FROM pbstudio.user;')"
echo "✓ Usuarios en BD: debe mostrar número > 0"
echo "✓ Backend accesible: http://127.0.0.1:8000/admin (login requerido)"
```

### 1.3 Solucionar Problemas Comunes de Setup

**Problema:** `ONLY_FULL_GROUP_BY` SQL error
```bash
# SOLUCIÓN:
mysql -u root -pexael -e "SET GLOBAL sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';"
```

**Problema:** Assets no cargan (404 en app.js, backend.js)
```bash
# SOLUCIÓN:
npm install  # Re-instalar dependencias
npm run build  # Compilar nuevamente
php bin/console cache:clear  # Limpiar caché
```

**Problema:** Base de datos dice "No tables in database"
```bash
# SOLUCIÓN:
php bin/console doctrine:database:create --if-not-exists
php bin/console doctrine:migrations:sync-metadata-storage
php bin/console doctrine:migrations:migrate
```

**Problema:** "PDOException: could not find driver"
```bash
# SOLUCIÓN: Habilitar extensión MySQL en php.ini:
# Buscar: extension=pdo_mysql
# Descomenta la línea (quita ;)
php -m | findstr pdo_mysql
```

---

## 2. Estructura de Carpetas y Convenciones

### 2.1 Controllers - Estructura y Ejemplos Reales

**Ubicación:** `src/Controller/` (13 controllers) + `src/Controller/Backend/` (7 para admin)

```
📁 FRONTEND (Públicos)
HomeController.php              // Homepage con instrucciones
ReservationController.php       // 🔑 Flujo de reservas - CORE
CheckoutController.php          // 🔑 Flujo de pago - CORE
PackageController.php           // Listado paquetes
CouponController.php            // Validar cupones
SecurityController.php          // Login/logout
RegistrationController.php      // Registro nuevos usuarios
ProfileController.php           // Mi perfil, mis datos
PageController.php              // Páginas estáticas (blog, etc)
ContactController.php           // Formulario contacto
SessionController.php           // Ver detalles sesión
ResettingController.php         // Recuperar contraseña
StaffController.php             // Perfil instructor

📁 BACKEND (Admin)
Backend/SessionController.php   // CRUD sesiones, marcar asistencia
Backend/SessionDayController.php // Sesiones por día
Backend/ReservationController.php // Admin CRUD reservaciones
Backend/TransactionController.php // Admin transacciones
Backend/UserController.php      // Admin usuarios
Backend/StaffController.php     // Admin personal
Backend/StatsController.php     // Dashboard/estadísticas
```

**EJEMPLO REAL - ReservationController (CORE):**
```php
// src/Controller/ReservationController.php
<?php
namespace App\Controller;

use App\Entity\Discipline;
use App\Entity\Session;
use App\Repository\SessionRepository;
use App\Service\Reservation\ReservationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ReservationController extends AbstractController
{
    #[Route('/reservar-clase/{slug}', name: 'reservation_calendar')]
    public function calendar(
        Request $request,
        SessionRepository $sessionRepository,
        ?string $slug = null,
    ): Response {
        // 1. Obtener sucursal por slug
        $branchOffice = $branchOfficeRepository->getOneBySlug($slug);
        
        // 2. Determinar período (semana actual)
        $period = $this->getPeriod(
            $request->query->getInt('year'),
            $request->query->getInt('weekno')
        );
        
        // 3. Obtener sesiones del período
        $sessions = $sessionRepository->getCalendar($period, $branchOffice);
        
        // 4. Renderizar vista
        return $this->render('reservation/calendar.html.twig', [
            'sessions' => $sessions,
            'period' => $period,
            'branchOffice' => $branchOffice,
        ]);
    }
    
    #[Route('/reservar-clase', name: 'reservation_create', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]  // Requiere autenticación
    public function create(
        Request $request,
        ReservationService $reservationService,
        SessionRepository $sessionRepository,
    ): Response {
        $user = $this->getUser();
        $sessionId = $request->request->getInt('session_id');
        $placeNumber = $request->request->getInt('place_number');
        
        $session = $sessionRepository->find($sessionId);
        
        try {
            // ReservationService maneja la lógica compleja
            $reservation = $reservationService->reservate(
                $user,
                $session,
                $placeNumber
            );
            
            $this->addFlash('success', 'Reserva creada exitosamente');
            return $this->redirectToRoute('checkout_index');
            
        } catch (ReservationException $e) {
            $this->addFlash('error', $e->getMessage());
            return $this->redirectToRoute('reservation_calendar');
        }
    }
}
```

**PATRÓN IMPORTANTE:** Los controllers delegan lógica compleja a Services

**Estructura típica de Controller (PATRÓN):**

```php
<?php
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Doctrine\ORM\EntityManagerInterface;

class MyController extends AbstractController
{
    // Inyección: El constructor autowirea dependencias
    public function __construct(
        private EntityManagerInterface $em,
        private MyService $myService,  // Servicios
    ) {}
    
    // Ruta GET - Mostrar formulario
    #[Route('/ruta', name: 'route_name', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]  // Requiere estar logueado
    public function index(): Response
    {
        // 1. Obtener datos del usuario
        $user = $this->getUser();
        
        // 2. Obtener datos de BD
        $data = $this->em->getRepository(MyEntity::class)->
            findBy(['user' => $user]);
        
        // 3. Renderizar template
        return $this->render('my/index.html.twig', [
            'data' => $data,
            'title' => 'Mi Página'
        ]);
    }
    
    // Ruta POST - Procesar formulario
    #[Route('/ruta', name: 'route_name_post', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function create(Request $request): Response
    {
        $user = $this->getUser();
        
        try {
            // Delegar a servicio (aquí va lógica compleja)
            $result = $this->myService->doSomething($user, $data);
            
            $this->addFlash('success', 'Operación exitosa');
            return $this->redirectToRoute('route_success');
            
        } catch (MyException $e) {
            $this->addFlash('error', $e->getMessage());
            return $this->redirectToRoute('route_name');
        }
    }
}
```

### 2.2 Entities (Modelos)

**Ubicación:** `src/Entity/`

**Estructura típica:**

```php
<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model\Timestampable\TimestampableTrait;

#[ORM\Entity(repositoryClass: MyRepository::class)]
class MyEntity
{
    use TimestampableTrait; // createdAt, updatedAt automático
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[ORM\Column(length: 255)]
    private ?string $name = null;
    
    #[ORM\ManyToOne(inversedBy: 'myEntities')]
    private ?OtherEntity $other = null;
    
    // Getters y setters...
}
```

**Convenciones Doctrine:**

- `#[ORM\Id]` - Primary key
- `#[ORM\GeneratedValue]` - AUTO_INCREMENT
- `#[ORM\Column(length: 255)]` - VARCHAR(255)
- `#[ORM\ManyToOne]` - FK (muchos a uno)
- `#[ORM\OneToMany]` - Colección (uno a muchos)
- `#[ORM\OneToOne]` - Relación uno a uno
- `inversedBy` - Lado opuesto de relación bidireccional

### 2.3 Repositories

**Ubicación:** `src/Repository/`

```php
<?php
namespace App\Repository;

use App\Entity\MyEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MyEntity::class);
    }
    
    // Métodos personalizados
    public function findActive()
    {
        return $this->createQueryBuilder('e')
            ->where('e.isActive = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getResult();
    }
}
```

**Métodos heredados de ServiceEntityRepository:**

- `find($id)` - Por ID
- `findBy(['field' => 'value'])` - Por criterios
- `findAll()` - Todos
- `findOneBy(['field' => 'value'])` - Uno

### 2.4 Services

**Ubicación:** `src/Service/`

```php
<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class MyService
{
    public function __construct(
        private EntityManagerInterface $em,
        private AnotherService $another,
    ) {}
    
    public function doSomething($entity)
    {
        // Lógica de negocio
        $this->em->persist($entity);
        $this->em->flush();
        
        return $entity;
    }
}
```

**Inyección de dependencias:**

```php
// En services.yaml - automático con Symfony 5.1+
// Se auto-wirea por el type-hint
```

### 2.5 Forms

**Ubicación:** `src/Form/`

```php
<?php
namespace App\Form;

use App\Entity\MyEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MyEntityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Nombre'])
            ->add('other', OtherEntityType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MyEntity::class,
        ]);
    }
}
```

### 2.6 Validación

**En Entities:**

```php
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Column]
#[Assert\NotBlank(message: 'Campo requerido')]
#[Assert\Length(min: 3, max: 50)]
private ?string $name = null;
```

**Validadores personalizados:**

```php
// En formulario o servicio
$errors = $this->validator->validate($entity);
if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo $error->getMessage();
    }
}
```

---

## 3. Ciclo de Desarrollo

### 3.1 Crear una Nueva Feature

**Paso 1: Entity**

```bash
php bin/console make:entity FeatureName
```

Responder preguntas sobre campos y relaciones.

**Paso 2: Migration**

```bash
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

**Paso 3: Repository**

```bash
php bin/console make:entity FeatureName
# Incluye --with-repository
```

**Paso 4: Controller**

```bash
php bin/console make:controller FeatureController
```

**Paso 5: Form**

```bash
php bin/console make:form FeatureType
```

### 3.2 Cambiar una Entity

```bash
# Editar src/Entity/MyEntity.php
# Cambiar propiedades, relaciones, validaciones

# Crear migración automática
php bin/console doctrine:migrations:diff

# Revisar archivo generado en migrations/

# Ejecutar migración
php bin/console doctrine:migrations:migrate
```

### 3.3 Queries Personalizadas

**Desde Repository:**

```php
public function findByDateRange(\DateTime $from, \DateTime $to)
{
    $qb = $this->createQueryBuilder('s');
    
    return $qb
        ->where('s.dateStart >= :from')
        ->andWhere('s.dateStart <= :to')
        ->setParameter('from', $from)
        ->setParameter('to', $to)
        ->orderBy('s.dateStart', 'ASC')
        ->getQuery()
        ->getResult();
}
```

**Desde Servlet:**

```php
$repository = $this->em->getRepository(MyEntity::class);
$results = $repository->findByDateRange($from, $to);
```

---

## 4. Templates Twig

### 4.1 Estructura Base

```twig
{# templates/layout.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <title>{% block title %}PB STUDIO{% endblock %}</title>
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
</head>
<body>
    {% block body %}
    {% endblock %}
    
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
</body>
</html>
```

### 4.2 Template de Feature

```twig
{% extends "layout.html.twig" %}

{% block title %}Mi Página{% endblock %}

{% block body %}
<div class="container">
    <h1>Bienvenido</h1>
    
    {% if user %}
        <p>Hola {{ user.name }}</p>
    {% else %}
        <p><a href="{{ path('login') }}">Iniciar sesión</a></p>
    {% endif %}
    
    {% for item in items %}
        <div>{{ item.name }}</div>
    {% endfor %}
</div>
{% endblock %}
```

### 4.3 Funciones Útiles

```twig
{# Rutas #}
<a href="{{ path('route_name', {'id': item.id}) }}">Link</a>

{# Generación de URLs #}
<a href="{{ url('route_name') }}">Absolute URL</a>

{# Assets #}
<img src="{{ asset('images/logo.png') }}" />

{# Assets versionados (Encore) #}
{{ encore_entry_link_tags('app') }}

{# Traducción #}
{{ 'translation.key'|trans }}

{# Formularios #}
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

{# Filtros #}
{{ user.createdAt|date('Y-m-d H:i') }}
{{ 'string'|upper }}
{{ items|length }}
{{ text|slice(0, 100) }}

{# Condicionales #}
{% if user and user.isActive %}
    ...
{% elseif user %}
    ...
{% else %}
    ...
{% endif %}

{# Loops #}
{% for item in items %}
    {{ item.name }} ({{ loop.index }} de {{ loop.length }})
{% endfor %}
```

---

## 5. JavaScript/Frontend

### 5.1 Importar Assets

En `assets/app.js`:

```javascript
// jQuery
import $ from 'jquery';

// Bootstrap
import 'bootstrap/dist/css/bootstrap.css';

// Custom CSS
import './styles/app.css';

// Plugins
import select2 from 'select2';
```

En template Twig:

```twig
{{ encore_entry_link_tags('app') }}     {# CSS #}
{{ encore_entry_script_tags('app') }}   {# JS #}
```

### 5.2 Escritura de JavaScript

```javascript
// assets/js/reservation.js
document.addEventListener('DOMContentLoaded', function() {
    const button = document.querySelector('.reserve-btn');
    
    button?.addEventListener('click', function(e) {
        e.preventDefault();
        
        fetch('/api/reservar', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({
                sessionId: this.dataset.sessionId,
                placeNumber: this.dataset.placeNumber
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Éxito:', data);
            alert('Reserva confirmada');
        })
        .catch(error => console.error('Error:', error));
    });
});
```

### 5.3 Webpack Encore

**webpack.config.js:**

```javascript
const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/app.js')
    .addEntry('backend', './assets/backend.js')
    .splitEntryChunks()
    .enableVersioning()
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction());

module.exports = Encore.getWebpackConfig();
```

**Compilar:**

```bash
npm run watch      # Modo desarrollo (watch)
npm run build      # Modo producción
npm run dev        # Una sola compilación dev
```

---

## 6. Flujos de Trabajo Comunes

### 6.1 Crear Nueva Ruta

**1. Controller:**

```php
#[Route('/mi-ruta', name: 'my_route')]
public function myRoute(): Response
{
    return $this->render('my_template.html.twig');
}
```

**2. Template:**

```twig
{% extends "layout.html.twig" %}
{% block body %}...{% endblock %}
```

### 6.2 Servir un JSON API

```php
#[Route('/api/data', methods: ['GET'])]
public function getApiData(): Response
{
    $data = ['id' => 1, 'name' => 'test'];
    return $this->json($data);
}
```

### 6.3 Form POST

**Controller:**

```php
#[Route('/form-action', methods: ['POST'])]
public function handleForm(Request $request): Response
{
    $entity = new MyEntity();
    $form = $this->createForm(MyEntityType::class, $entity);
    
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        $this->em->persist($entity);
        $this->em->flush();
        
        return $this->redirectToRoute('success_route');
    }
    
    return $this->render('form.html.twig', ['form' => $form]);
}
```

**Template:**

```twig
{{ form_start(form) }}
    {{ form_widget(form) }}
    <button type="submit">Enviar</button>
{{ form_end(form) }}
```

### 6.4 Paginación

```php
use Knp\Component\Pager\PaginatorInterface;

public function list(PaginatorInterface $paginator, Request $request): Response
{
    $query = $this->em->createQuery('SELECT * FROM ...');
    
    $page = $request->query->getInt('page', 1);
    $pagination = $paginator->paginate($query, $page, 20);
    
    return $this->render('list.html.twig', ['pagination' => $pagination]);
}
```

**Template:**

```twig
{% for item in pagination %}
    {{ item.name }}
{% endfor %}

<div class="pagination">
    {{ knp_pagination_render(pagination) }}
</div>
```

---

## 7. Debugging

### 7.1 Symfony Profiler

**Activar en .env:**

```env
APP_DEBUG=true
```

**Acceder:** `http://localhost:8000/_profiler`

**Ver queries SQL:**

```php
// Si APP_DEBUG=true, se muestra en profiler
// O en logs: var/log/dev.log
```

### 7.2 Dump de Variables

```php
use Symfony\Component\VarDumper\VarDumper;

// En código
dump($variable);

// Con salida de parada
dd($variable);  // dump and die
```

**en Twig:**

```twig
{{ dump(variable) }}
```

### 7.3 Logs

```php
// Inyectar logger
use Psr\Log\LoggerInterface;

public function __construct(private LoggerInterface $logger) {}

$this->logger->info('Mensaje informativo');
$this->logger->error('Error crítico', ['context' => $data]);
```

**Ver logs:**

```bash
tail -f var/log/dev.log
```

---

## 8. Testing

### 8.1 Tests Unitarios

```php
// tests/Entity/UserTest.php
namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserCanBeCreated(): void
    {
        $user = new User();
        $user->setName('John');
        
        $this->assertEquals('John', $user->getName());
    }
}
```

**Ejecutar:**

```bash
# Todos los tests
php bin/phpunit

# Una clase específica
php bin/phpunit tests/Entity/UserTest.php

# Un test específico
php bin/phpunit --filter testUserCanBeCreated
```

### 8.2 Tests de Aplicación

```php
// tests/Controller/HomeControllerTest.php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    public function testHomepage(): void
    {
        $client = static::createClient();
        $response = $client->request('GET', '/');
        
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Welcome');
    }
}
```

---

## 9. Performance

### 9.1 Optimización de Queries

**Usar select específico:**

```php
->select('u.id, u.name')  // Solo campos necesarios
->getQuery()
->getResult();
```

**Join cuando sea necesario:**

```php
->leftJoin('u.reservations', 'r')
->addSelect('r')
->getQuery()
->getResult();
```

**Evitar N+1:**

```php
// ❌ N+1 problem
foreach ($users as $user) {
    echo $user->getProfile()->getName(); // Query en cada loop
}

// ✅ Solución
->leftJoin('u.profile', 'p')
->addSelect('p')
```

### 9.2 Caché de Query

```php
$qb->getQuery()
    ->useQueryCache(true)
    ->useResultCache(true, 3600)  // 1 hora
    ->getResult();
```

### 9.3 Doctrine Query Cache

```php
$em->getConfiguration()
    ->setQueryCacheImpl(new FilesystemCache('./var/cache'))
    ->setMetadataCacheImpl(new FilesystemCache('./var/cache'));
```

---

## 10. Deployment

### 10.1 Ambiente Producción

**Variables de entorno (.env.prod):**

```env
APP_ENV=prod
APP_DEBUG=false
DATABASE_URL="mysql://user:pass@prod-db:3306/pbstudio"
APP_SECRET=your_super_secret_key
```

**Build:**

```bash
php composer.phar install --no-dev --optimize-autoloader
npm run build
php bin/console cache:clear --env=prod
php bin/console doctrine:migrations:migrate --no-interaction --env=prod
```

### 10.2 Nginx Configuration

```nginx
server {
    listen 80;
    server_name pbstudio.com www.pbstudio.com;
    
    root /var/www/pbstudio/public;
    index index.php;
    
    # Symfony rewrite rules
    location / {
        try_files $uri /index.php$is_args$args;
    }
    
    location ~ ^/index\.php(/|$) {
        fastcgi_pass php:9000;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
        fastcgi_param APP_ENV prod;
    }
}
```

### 10.3 CRON Jobs

```bash
# Expirar paquetes
0 0 * * * /usr/bin/php /var/www/pbstudio/bin/console app:transaction:checkexpiration --env=prod

# Auto-cerrar sesiones
*/15 * * * * /usr/bin/php /var/www/pbstudio/bin/console app:session:autoclosing --env=prod
```

---

## 11. Troubleshooting

| Problema | Causa | Solución |
|----------|-------|----------|
| "No class found" | Namespace incorrecto | Verificar `namespace` y `use` |
| Doctrine error | Schema no sincronizado | `php bin/console doctrine:migrations:diff` |
| Template not found | Ruta incorrecta | Verificar carpeta `templates/` |
| 404 en ruta | Route no registrada | Revisar `#[Route(...)]` en Controller |
| Form error CSRF | Token CSRF inválido | Verificar `form_end()` en template |
| Variable no definida | No pasada desde Controller | `$this->render(..., ['var' => $value])` |
| Asset no carga | Build problema | Ejecutar `npm run build` nuevamente |
| Performance lento | N+1 queries | Usar eager loading con joins |

---

## 12. Comandos Útiles

```bash
# Entity/DDL
php bin/console make:entity                    # Crear entity
php bin/console make:migration                 # Crear migración
php bin/console doctrine:migrations:migrate    # Ejecutar migraciones
php bin/console doctrine:schema:validate       # Validar schema

# Cache
php bin/console cache:clear                    # Limpiar caché

# Mantenimiento (ejecutar manualmente en desarrollo)
php bin/console app:session:autoclosing        # Cerrar sesiones pasadas
php bin/console app:transaction:checkexpiration # Verificar paquetes expirados

# Debug
php bin/console debug:router                   # Ver rutas
php bin/console debug:container                # Ver servicios
php bin/console debug:config framework         # Ver config

# Tests
php bin/phpunit                                # Ejecutar tests

# Assets
npm run watch                                  # Watch mode
npm run build                                  # Production build

# Limpieza
php bin/console doctrine:cache:clear-metadata
php bin/console doctrine:cache:clear-query
php bin/console doctrine:cache:clear-result
```

> **Nota importante:** Para que las "Clases tomadas" aparezcan en el panel de usuario, las sesiones deben estar cerradas (status=0). En desarrollo, ejecutar manualmente `php bin/console app:session:autoclosing`. En producción, configurar CRON para ejecutarlo cada 15 minutos.

---

**Documentación técnica v1.0**  
**Última actualización:** 27/02/2026  
**Compatible con:** Symfony 6.4, PHP 8.2+, MySQL 5.7+
