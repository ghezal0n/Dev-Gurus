<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipeRepository::class)
 */
class Equipe
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
    private $nom_eq;

    /**
     * @ORM\Column(type="object")
     */
    private $leader;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbJoueur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEq(): ?string
    {
        return $this->nom_eq;
    }

    public function setNomEq(string $nom_eq): self
    {
        $this->nom_eq = $nom_eq;

        return $this;
    }

    public function getLeader()
    {
        return $this->leader;
    }

    public function setLeader($leader): self
    {
        $this->leader = $leader;

        return $this;
    }

    public function getNbJoueur(): ?int
    {
        return $this->nbJoueur;
    }

    public function setNbJoueur(int $nbJoueur): self
    {
        $this->nbJoueur = $nbJoueur;

        return $this;
    }
}
