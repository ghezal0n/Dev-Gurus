<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Symfony\Component\Serializer\Annotation\Groups;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @Groups("post:read")
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups("post:read")
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateRes;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservations")
     */
    private $idjoueur;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="coachReserv")
     */
    private $idCoach;

    /**
     * @ORM\ManyToOne(targetEntity=ServiceGuide::class, inversedBy="reservations")
     */
    private $Guide;

    /**
     * @Groups("post:read")
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $HeureDebut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRes(): ?\DateTimeInterface
    {
        return $this->dateRes;
    }

    public function setDateRes(?\DateTimeInterface $dateRes): self
    {
        $this->dateRes = $dateRes;

        return $this;
    }

    public function getIdjoueur(): ?User
    {
        return $this->idjoueur;
    }

    public function setIdjoueur(?User $idjoueur): self
    {
        $this->idjoueur = $idjoueur;

        return $this;
    }

    public function getIdCoach(): ?User
    {
        return $this->idCoach;
    }

    public function setIdCoach(?User $idCoach): self
    {
        $this->idCoach = $idCoach;

        return $this;
    }

    public function getGuide(): ?ServiceGuide
    {
        return $this->Guide;
    }

    public function setGuide(?ServiceGuide $Guide): self
    {
        $this->Guide = $Guide;

        return $this;
    }

    public function getHeureDebut(): ?string
    {
        return $this->HeureDebut;
    }

    public function setHeureDebut(?string $HeureDebut): self
    {
        $this->HeureDebut = $HeureDebut;

        return $this;
    }
    public function __toString()
    {
        return (string) $this->id;
    }

}
