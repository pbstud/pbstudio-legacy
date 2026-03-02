# 🛠️ Guía Técnica Expandida - PB STUDIO

**Fecha actualización:** 27/02/2026  
**Versión:** 2.0 - Expandida con ejemplos reales del proyecto  
**Enfoque:** Patterns reales, debugging profundo, ejemplos del código actual  

> **NOTA:** Este documento expande GUIA_TECNICA_DESARROLLO.md con secciones nuevas y ejemplos reales del proyecto

---

## 📚 SECCIONES NUEVAS AGREGADAS

### A. ENTITIES - Patrones Reales del Proyecto

#### A.1 Entity CORE: Reservation

```php
<?php
namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model\Timestampable\TimestampableTrait;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
#[ORM\Index(columns: ['place_number'], name: 'place_number_idx')]
class Reservation implements TimestampableInterface
{
    use TimestampableTrait;

    public const MAX_UNLIMITED_RESERVATIONS = 2;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // 🔑 RELACIÓN: FK a User (creada por)
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull]
    private ?User $user = null;

    // 🔑 RELACIÓN: FK a Session (para qué sesión)
    #[ORM\ManyToOne(targetEntity: Session::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull]
    private ?Session $session = null;

    // 🔑 RELACIÓN: FK a Transaction (pago asociado - NULLABLE)
    #[ORM\ManyToOne(targetEntity: Transaction::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Transaction $transaction = null;

    // 📊 ATRIBUTOS
    
    // ¿Puede asistir? (true si pagó o es gratis)
    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => true])]
    private ?bool $isAvailable = true;

    // Número de lugar (1 a N según room capacity)
    #[ORM\Column(type: Types::SMALLINT)]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?int $placeNumber = null;

    // Fecha de cancelación (null = no cancelada)
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cancellationAt = null;

    // ¿Asistió? (manual, marcado por admin)
    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => false])]
    private ?bool $attended = false;

    // Último cambio
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $changedAt = null;

    // 🧪 MÉTODOS LÓGICA DE NEGOCIO
    
    public function isCancelled(): bool
    {
        return $this->cancellationAt !== null;
    }
    
    public function canBeCancelled(): bool
    {
        // No se puede cancelar si ya asistió O ya está cancelada
        return !$this->attended && !$this->isCancelled();
    }
    
    public function getStatus(): string
    {
        if ($this->isAvailable) return 'CONFIRMED';
        if ($this->isCancelled()) return 'CANCELLED';
        return 'PENDING_PAYMENT';
    }

    // Getters/Setters autogenerados...
}
```

**Explicación de Traits y Interfaces:**
- `TimestampableTrait`: Agrega automáticamente `createdAt` y `updatedAt
- `TimestampableInterface`: Contrato que lo implementa
- Estas fechas se actualizan automáticamente en INSERT/UPDATE

#### A.2 Entity CORE: Transaction

```php
<?php
namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\TransactionRepository;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
#[ORM\Index(columns: ['status'], name: 'status_idx')]
#[ORM\Index(columns: ['charge_method'], name: 'charge_method_idx')]
class Transaction
{
    // 💰 CONSTANTES - Métodos de pago
    public const CHARGE_METHOD_FREE = 'payment.free';      // Gratis
    public const CHARGE_METHOD_CASH = 'payment.cash';      // Efectivo
    public const CHARGE_METHOD_CARD = 'payment.card';      // Tarjeta (Conekta)
    public const CHARGE_METHOD_POS = 'payment.pos';        // TPV

    // 💰 CONSTANTES - Estados
    public const STATUS_PENDING = 0;    // Esperando confirmación
    public const STATUS_PAID = 1;       // Pagado ✓
    public const STATUS_DENIED = -1;    // Rechazado ✗
    public const STATUS_CANCEL = 2;     // Cancelado

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: Package::class)]
    private ?Package $package = null;

    // Método de pago (ver constantes arriba)
    #[ORM\Column(length: 20)]
    private ?string $chargeMethod = null;

    // ID de la transacción en Conekta
    #[ORM\Column(length: 100, nullable: true)]
    private ?string $chargeId = null;

    // Código de autorización
    #[ORM\Column(length: 100, nullable: true)]
    private ?string $chargeAuthCode = null;

    // Datos de tarjeta (cifrados en producción idealmente)
    #[ORM\Column(length: 100, nullable: true)]
    private ?string $cardName = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $cardBrand = null;  // VISA, MASTERCARD, etc

    #[ORM\Column(length: 4, nullable: true)]
    private ?string $cardLast4 = null;  // Últimos 4 dígitos

    // Estado del pago
    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $status = self::STATUS_PENDING;

    // Información del paquete
    #[ORM\Column]
    private ?int $packageTotalClasses = null;  // Clases incluidas

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $packageAmount = null;

    #[ORM\Column]
    private ?int $packageDaysExpiry = null;

    // ¿Está expirado?
    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => false])]
    private ?bool $isExpired = false;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $expirationAt = null;

    // ¿Se completó? (todas las clases usadas)
    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => false])]
    private ?bool $isCompleted = false;

    // Notas
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    // 🔑 RELACIÓN: Una transacción puede tener múltiples reservas
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'transaction')]
    private Collection $reservations;

    public function isPaid(): bool
    {
        return $this->status === self::STATUS_PAID;
    }

    public function isDenied(): bool
    {
        return $this->status === self::STATUS_DENIED;
    }

    public function canUseClasses(): bool
    {
        return $this->isPaid() && !$this->isExpired && !$this->isCompleted;
    }

    // Getters/Setters
    // ...
}
```

---

### B. SERVICES - Patrones de Negocio

#### B.1 ReservationService (CORE)

```php
<?php
namespace App\Service\Reservation;

use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\User;
use App\Event\ReservationSuccessEvent;
use App\Event\ReservationCanceledEvent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Psr\Log\LoggerInterface;

class ReservationService
{
    public function __construct(
        private EntityManagerInterface $em,
        private EventDispatcherInterface $dispatcher,
        private LoggerInterface $logger,
    ) {}

    /**
     * Crear una reserva
     * 
     * @throws ReservationException si hay validaciones fallidas
     * @return Reservation
     */
    public function reservate(
        User $user,
        Session $session,
        int $placeNumber,
    ): Reservation {
        // 1️⃣ VALIDAR LUGAR
        if ($placeNumber < 1 || $placeNumber > $session->getExerciseRoomCapacity()) {
            throw new ReservationException('Lugar inválido');
        }

        // 2️⃣ VALIDAR DISPONIBILIDAD
        $totalReservations = $this->reservationRepository
            ->getTotalReservationsForSession($session) + 1;

        if ($totalReservations > $session->getAvailableCapacity()) {
            throw new ReservationException('Clase completa');
        }

        // 3️⃣ SI ESTÁ FULL, ACTUALIZAR STATE
        if ($totalReservations === $session->getAvailableCapacity()) {
            $session->setStatus(Session::STATUS_FULL);
        }

        // 4️⃣ CREAR RESERVACIÓN
        $reservation = new Reservation();
        $reservation->setUser($user);
        $reservation->setSession($session);
        $reservation->setPlaceNumber($placeNumber);
        $reservation->setIsAvailable(false);  // Espera pago
        $reservation->setCreatedAt(new \DateTime());

        $this->em->persist($reservation);
        $this->em->flush();

        // 5️⃣ DISPARAR EVENTO (listener)
        $this->dispatcher->dispatch(
            new ReservationSuccessEvent($reservation),
            ReservationSuccessEvent::NAME
        );

        $this->logger->info("Reserva creada: usuario={$user->getId()}, sesión={$session->getId()}");

        return $reservation;
    }

    /**
     * Cancelar una reserva
     * 
     * @throws ReservationException
     */
    public function cancel(Reservation $reservation): void
    {
        if (!$reservation->canBeCancelled()) {
            throw new ReservationException('No se puede cancelar esta reserva');
        }

        // 1️⃣ MARCAR COMO CANCELADA
        $reservation->setCancellationAt(new \DateTime());
        $reservation->setIsAvailable(false);

        // 2️⃣ LIBERAR LUGAR EN SESIÓN
        $session = $reservation->getSession();
        $totalReservations = $this->reservationRepository
            ->getTotalReservationsForSession($session);

        if ($totalReservations < $session->getAvailableCapacity()) {
            $session->setStatus(Session::STATUS_OPEN);
        }

        $this->em->flush();

        // 3️⃣ DISPARAR EVENTO
        $this->dispatcher->dispatch(
            new ReservationCanceledEvent($reservation),
            ReservationCanceledEvent::NAME
        );

        $this->logger->info("Reserva cancelada: id={$reservation->getId()}");
    }

    /**
     * Marcar asistencia
     */
    public function markAttendance(Reservation $reservation): void
    {
        if (!$reservation->isIsAvailable() || $reservation->isCancelled()) {
            throw new ReservationException('No se puede marcar asistencia');
        }

        $reservation->setAttended(true);
        $reservation->setChangedAt(new \DateTime());

        // Decrementar clases del paquete
        if ($transaction = $reservation->getTransaction()) {
            $transaction->setPackageTotalClasses(
                $transaction->getPackageTotalClasses() - 1
            );

            if ($transaction->getPackageTotalClasses() <= 0) {
                $transaction->setIsCompleted(true);
            }
        }

        $this->em->flush();
    }
}
```

---

### C. EXCEPCIONES PERSONALIZADAS

#### C.1 ReservationException

```php
<?php
namespace App\Service\Reservation;

use Exception;

class ReservationException extends Exception
{
    /**
     * Excepciones específicas del dominio de reservas
     * 
     * EJEMPLOS:
     * - "Clase completa"
     * - "Lugar inválido"
     * - "Usuario ya tiene reserva"
     * - "No puede cancelar"
     */
    public function __construct(string $message = '', int $code = 0)
    {
        parent::__construct($message, $code);
    }
}
```

**USO EN CONTROLLER:**
```php
try {
    $reservation = $reservationService->reservate($user, $session, $place);
} catch (ReservationException $e) {
    // Mostrar error al usuario
    $this->addFlash('error', $e->getMessage());
    return $this->redirectToRoute('reservation_calendar');
}
```

---

### D. EVENTOS Y LISTENERS

#### D.1 Evento de Reserva Exitosa

```php
<?php
namespace App\Event;

use App\Entity\Reservation;
use Symfony\Contracts\EventDispatcher\Event;

class ReservationSuccessEvent extends Event
{
    public const NAME = 'reservation.success';

    public function __construct(private Reservation $reservation)
    {}

    public function getReservation(): Reservation
    {
        return $this->reservation;
    }
}
```

#### D.2 Listener - Enviar Email

```php
<?php
namespace App\EventListener;

use App\Event\ReservationSuccessEvent;
use App\Service\Mailer\ReservationMailer;

class ReservationSuccessListener
{
    public function __construct(private ReservationMailer $mailer)
    {}

    public function onReservationSuccess(ReservationSuccessEvent $event): void
    {
        $reservation = $event->getReservation();
        
        // Enviar email automáticamente
        $this->mailer->sendConfirmation($reservation);
    }
}
```

**REGISTRAR EN services.yaml:**
```yaml
services:
  App\EventListener\ReservationSuccessListener:
    tags:
      - { name: 'kernel.event_listener', event: 'reservation.success', method: 'onReservationSuccess' }
```

---

### E. VALIDADORES PERSONALIZADOS

#### E.1 Validador: Sesión Abierta

```php
<?php
namespace App\Validator;

use App\Entity\Session;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class IsSessionOpenValidator extends ConstraintValidator
{
    public function validate(mixed $value, Constraint $constraint): void
    {
        if (!$value instanceof Session) {
            return;
        }

        if ($value->getStatus() !== Session::STATUS_OPEN) {
            $this->context->addViolation(
                'La sesión no está disponible para reservas'
            );
        }
    }
}

// Constraint
#[Attribute]
class IsSessionOpen extends Constraint
{
    public string $message = 'Session is not open for reservations';
}
```

**USAR EN ENTITY:**
```php
#[IsSessionOpen]
private ?Session $session = null;
```

---

### F. DEBUGGING PROFUNDO

#### F.1 Profiler y Queries

```bash
# Ver Symfony profiler web
# Acceder a: http://127.0.0.1:8000/_profiler

# Loguear queries SQL
# En config/packages/doctrine.yaml:
doctrine:
  dbal:
    logging: true  # Loguea todas las queries

# Ver logs
tail -f var/log/dev.log | grep SQL
```

#### F.2 Debugbar

```bash
composer require symfony/debug-bundle --dev

# Acceder a: http://127.0.0.1:8000/_profiler/latest
# Ver todas las queries, rutas, eventos, etc
```

#### F.3 Comando Debug Personalizado

```php
<?php
namespace App\Command;

use App\Service\Reservation\ReservationService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:debug:reservations', description: 'Debug reservations')]
class DebugReservationsCommand extends Command
{
    public function __construct(private ReservationService $service)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $reservations = $this->getRepository()->findAll();
        
        foreach ($reservations as $res) {
            $output->writeln(sprintf(
                'ID: %d, Usuario: %s, Sesión: %s, Estado: %s',
                $res->getId(),
                $res->getUser()->getName(),
                $res->getSession()->getDateStart()->format('Y-m-d'),
                $res->getStatus()
            ));
        }

        return Command::SUCCESS;
    }
}
```

**RUN:**
```bash
php bin/console app:debug:reservations
```

---

### G. MIGRACIONES AVANZADAS

#### G.1 Crear Migración Personalizada

```php
<?php
namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240427000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add index to reservation place_number';
    }

    public function up(Schema $schema): void
    {
        // CREATE INDEX cuando la migración se ejecuta hacia adelante
        $this->addSql('CREATE INDEX place_number_idx ON reservation (place_number)');
    }

    public function down(Schema $schema): void
    {
        // DROP INDEX cuando se revierte (rollback)
        $this->addSql('DROP INDEX place_number_idx ON reservation');
    }
}
```

**RUN:**
```bash
# Ejecutar nuevas migraciones
php bin/console doctrine:migrations:migrate

# Ver versión actual
php bin/console doctrine:migrations:status

# Revertir última migración
php bin/console doctrine:migrations:migrate --down
```

#### G.2 Poblar datos (Fixtures)

```php
<?php
namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Session;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Crear usuario de prueba
        $user = new User();
        $user->setName('Test User');
        $user->setEmail('test@example.com');
        $user->setPassword('hashed_password');
        
        $manager->persist($user);
        $manager->flush();
    }
}
```

**RUN:**
```bash
php bin/console doctrine:fixtures:load
```

---

### H. TESTING AVANZADO

#### H.1 Test Controller con BD

```php
<?php
namespace App\Tests\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\EntityManagerInterface;

class ReservationControllerTest extends WebTestCase
{
    private EntityManagerInterface $em;

    protected function setUp(): void
    {
        self::bootKernel();
        $this->em = self::getContainer()->get(EntityManagerInterface::class);
    }

    public function testCreateReservation(): void
    {
        $client = self::createClient();
        
        // Autenticar usuario
        $user = $this->em->getRepository(User::class)->findOneBy(['email' => 'test@example.com']);
        $client->loginUser($user);

        // POST a crear reserva
        $client->request('POST', '/reservar-clase', [
            'session_id' => 1,
            'place_number' => 5,
        ]);

        // Assertions
        $this->assertResponseRedirects('/carrito/checkout');
        
        // Verificar BD
        $reservations = $this->em->getRepository(Reservation::class)
            ->findBy(['user' => $user]);
        $this->assertCount(1, $reservations);
    }
}
```

---

### I. INTEGRACIÓN CONEKTA (Pasarela Pagos)

```php
<?php
namespace App\Service\Conekta;

use Conekta\Conekta;

class ConektaService
{
    public function __construct(
        private string $publicKey,
        private string $privateKey,
    ) {
        Conekta::setApiKey($this->privateKey);
    }

    /**
     * Crear cargo en Conekta
     */
    public function createCharge(
        float $amount,
        string $description,
        array $cardData
    ): array {
        try {
            $charge = \Conekta\Charge::create([
                'amount' => (int)($amount * 100),  // En centavos
                'currency' => 'MXN',
                'description' => $description,
                'payment_method' => [
                    'type' => 'card',
                    'token' => $cardData['token'],
                ],
            ]);

            return [
                'success' => true,
                'chargeId' => $charge->id,
                'authCode' => $charge->authorization_code,
                'status' => $charge->status,
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'error' => $e->getMessage(),
            ];
        }
    }

    /**
     * Webhook - Callback de Conekta
     */
    public function handleWebhook(array $payload): void
    {
        $type = $payload['type'];
        $data = $payload['data'];

        switch ($type) {
            case 'charge.paid':
                // Actualizar transacción
                $transaction = $this->transactionRepository->findOneBy(['chargeId' => $data['id']]);
                $transaction->setStatus(Transaction::STATUS_PAID);
                $this->em->flush();
                break;

            case 'charge.payment_declined':
                // Actualizar como rechazada
                $transaction = $this->transactionRepository->findOneBy(['chargeId' => $data['id']]);
                $transaction->setStatus(Transaction::STATUS_DENIED);
                $this->em->flush();
                break;
        }
    }
}
```

---

### J. QUERYS COMUNES Y OPTIMIZACIONES

```php
<?php
// Sesiones de la próxima semana
$sessions = $this->sessionRepository
    ->createQueryBuilder('s')
    ->where('s.dateStart >= :from')
    ->andWhere('s.dateStart <= :to')
    ->setParameter('from', new \DateTime())
    ->setParameter('to', (new \DateTime())->modify('+7 days'))
    ->innerJoin('s.instructor', 'i')
    ->addSelect('i')  // Eager load instructor
    ->orderBy('s.dateStart', 'ASC')
    ->getQuery()
    ->getResult();

// Transacciones expiradas
$expired = $this->transactionRepository
    ->createQueryBuilder('t')
    ->where('t.expirationAt < NOW()')
    ->andWhere('t.isExpired = false')
    ->getQuery()
    ->getResult();

// Usuarios con más de 5 reservas
$activeUsers = $this->userRepository
    ->createQueryBuilder('u')
    ->leftJoin('u.reservations', 'r')
    ->addSelect('COUNT(r.id) as reservation_count')
    ->groupBy('u.id')
    ->having('COUNT(r.id) > 5')
    ->getQuery()
    ->getResult();
```

---

## 📝 CHECKLIST DE DESARROLLO

```
✅ ANTES DE COMMIT:
  [ ] Código formateado (PSR-12)
  [ ] Tests pasan (php bin/phpunit)
  [ ] Sin warnings de Doctrine
  [ ] Sin excepciones sin capturar
  [ ] Validaciones en Entity + Controller
  [ ] Documentación de métodos públicos
  
✅ ANTES DE DEPLOYMENT:
  [ ] Variables de entorno configuradas (.env.prod)
  [ ] Migraciones ejecutadas
  [ ] Assets compilados (npm run build)
  [ ] Cache limpiado (php bin/console cache:clear --env=prod)
  [ ] CRON jobs configurados
  [ ] Logs con permisos (var/log)
  [ ] Base de datos backupped
  
✅ MONITOREO EN PRODUCCIÓN:
  [ ] Revisar logs diarios (var/log/*.log)
  [ ] Ejecutar comandos CRON (transaction check, session closing)
  [ ] Verificar salud de BD (tabla sizes, índices)
  [ ] Revisar transacciones fallidas (Conekta)
```

---

## 🔗 REFERENCIAS

- **Symfony Docs:** https://symfony.com/doc/current/index.html
- **Doctrine ORM:** https://www.doctrine-project.org/projects/doctrine-orm.html
- **MySQL 5.7 Reference:** https://dev.mysql.com/doc/refman/5.7/en/
- **Conekta API:** https://api.conekta.io/documentation

---

**Documentación expandida v2.0**  
**Última actualización:** 27/02/2026  
**Autor:** Technical Team  
**Estado:** ✅ Completa y detallada con ejemplos reales
