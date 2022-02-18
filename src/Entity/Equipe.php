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
    private $nomEq;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $leader;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomMbr;

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
        return $this->nomEq;
    }

    public function setNomEq(string $nomEq): self
    {
        $this->nomEq = $nomEq;

        return $this;
    }

    public function getLeader(): ?string
    {
        return $this->leader;
    }

    public function setLeader(string $leader): self
    {
        $this->leader = $leader;

        return $this;
    }

    public function getNomMbr(): ?string
    {
        return $this->nomMbr;
    }

    public function setNomMbr(string $nomMbr): self
    {
        $this->nomMbr = $nomMbr;

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
