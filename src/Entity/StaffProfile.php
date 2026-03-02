<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\StaffProfileRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Contract\Entity\TimestampableInterface;
use Knp\DoctrineBehaviors\Model\Timestampable\TimestampableTrait;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: StaffProfileRepository::class)]
#[Vich\Uploadable]
class StaffProfile implements TimestampableInterface
{
    use TimestampableTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'profile')]
    #[ORM\JoinColumn(name: 'staff_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private ?Staff $staff = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\NotBlank]
    private ?string $firstname = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\NotBlank]
    private ?string $paternalSurname = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\NotBlank]
    private ?string $maternalSurname = null;

    #[Vich\UploadableField(mapping: 'staff_profile', fileNameProperty: 'photo')]
    #[Assert\Image]
    private ?File $photoFile = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\NotBlank]
    private ?string $photo = null;

    #[ORM\Column(length: 50, nullable: true)]
    #[Assert\NotBlank]
    private ?string $telephone = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Assert\NotBlank]
    private ?string $address = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $admissionAt = null;

    public function __toString(): string
    {
        return sprintf('%s %s %s', $this->firstname, $this->paternalSurname, $this->maternalSurname);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStaff(): ?Staff
    {
        return $this->staff;
    }

    public function setStaff(?Staff $staff): static
    {
        $this->staff = $staff;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getPaternalSurname(): ?string
    {
        return $this->paternalSurname;
    }

    public function setPaternalSurname(?string $paternalSurname): static
    {
        $this->paternalSurname = $paternalSurname;

        return $this;
    }

    public function getMaternalSurname(): ?string
    {
        return $this->maternalSurname;
    }

    public function setMaternalSurname(?string $maternalSurname): static
    {
        $this->maternalSurname = $maternalSurname;

        return $this;
    }

    public function getPhotoFile(): ?File
    {
        return $this->photoFile;
    }

    public function setPhotoFile(?File $photoFile = null): static
    {
        $this->photoFile = $photoFile;

        if (null !== $photoFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getAdmissionAt(): ?\DateTimeInterface
    {
        return $this->admissionAt;
    }

    public function setAdmissionAt(?\DateTimeInterface $admissionAt): static
    {
        $this->admissionAt = $admissionAt;

        return $this;
    }
}
