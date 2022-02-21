<?php

namespace App\Entity;

use App\Repository\TournoisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TournoisRepository::class)
 */
class Tournois
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idTournois;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_tournois;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_eq;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;

    /**
     * @ORM\ManyToOne(targetEntity=Joueur::class, inversedBy="organiser")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_joueur;

    public function getIdTournois(): ?int
    {
        return $this->idTournois;
    }

    public function getNomTournois(): ?string
    {
        return $this->nom_tournois;
    }

    public function setNomTournois(string $nom_tournois): self
    {
        $this->nom_tournois = $nom_tournois;

        return $this;
    }

    public function getNbEq(): ?int
    {
        return $this->nb_eq;
    }

    public function setNbEq(int $nb_eq): self
    {
        $this->nb_eq = $nb_eq;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getIdJoueur(): ?Joueur
    {
        return $this->id_joueur;
    }

    public function setIdJoueur(?Joueur $id_joueur): self
    {
        $this->id_joueur = $id_joueur;

        return $this;
    }
}
