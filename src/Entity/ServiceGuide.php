<?php

namespace App\Entity;

use App\Repository\ServiceGuideRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServiceGuideRepository::class)
 */
class ServiceGuide
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_coach;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_heure;

    /**
     * @ORM\Column(type="date")
     */
    private $date_Creation;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCoach(): ?string
    {
        return $this->nom_coach;
    }

    public function setNomCoach(string $nom_coach): self
    {
        $this->nom_coach = $nom_coach;

        return $this;
    }

    public function getNbHeure(): ?int
    {
        return $this->nb_heure;
    }

    public function setNbHeure(int $nb_heure): self
    {
        $this->nb_heure = $nb_heure;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_Creation;
    }

    public function setDateCreation(\DateTimeInterface $date_Creation): self
    {
        $this->date_Creation = $date_Creation;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}
