<?php

namespace App\Entity;

use App\Repository\SessionAuditRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SessionAuditRepository::class)]
#[ORM\Table(name: 'session_audit')]
#[ORM\Index(columns: ['session_id'], name: 'idx_session')]
#[ORM\Index(columns: ['created_at'], name: 'idx_created')]
class SessionAudit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Session $session = null;

    #[ORM\Column(length: 255)]
    private ?string $adminUserIdentifier = null;  // Username/ID del admin que realizó la acción

    #[ORM\Column(length: 50)]
    private ?string $auditType = null;  // 'place_disabled', 'place_enabled', etc

    #[ORM\Column(type: Types::TEXT)]
    private ?string $reason = null;  // Motivo del cambio

    #[ORM\Column(type: Types::JSON)]
    private array $disabledPlaces = [];  // [1, 3, 5]

    #[ORM\Column(type: Types::JSON)]
    private array $affectedUsers = [];  // [{id: 1, name: 'Juan', email: 'juan@...', place: 3}, ...]

    #[ORM\Column]
    private ?int $affectedReservationsCount = 0;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSession(): ?Session
    {
        return $this->session;
    }

    public function setSession(?Session $session): static
    {
        $this->session = $session;

        return $this;
    }

    public function getAdminUserIdentifier(): ?string
    {
        return $this->adminUserIdentifier;
    }

    public function setAdminUserIdentifier(?string $adminUserIdentifier): static
    {
        $this->adminUserIdentifier = $adminUserIdentifier;

        return $this;
    }

    public function getAuditType(): ?string
    {
        return $this->auditType;
    }

    public function setAuditType(string $auditType): static
    {
        $this->auditType = $auditType;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): static
    {
        $this->reason = $reason;

        return $this;
    }

    public function getDisabledPlaces(): array
    {
        return $this->disabledPlaces;
    }

    public function setDisabledPlaces(array $disabledPlaces): static
    {
        $this->disabledPlaces = $disabledPlaces;

        return $this;
    }

    public function getAffectedUsers(): array
    {
        return $this->affectedUsers;
    }

    public function setAffectedUsers(array $affectedUsers): static
    {
        $this->affectedUsers = $affectedUsers;

        return $this;
    }

    public function getAffectedReservationsCount(): ?int
    {
        return $this->affectedReservationsCount;
    }

    public function setAffectedReservationsCount(int $affectedReservationsCount): static
    {
        $this->affectedReservationsCount = $affectedReservationsCount;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
