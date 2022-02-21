<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FournisseurRepository::class)
 */
class Fournisseur
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
    private $nomFourni;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $numTelf;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFourni(): ?string
    {
        return $this->nomFourni;
    }

    public function setNomFourni(string $nomFourni): self
    {
        $this->nomFourni = $nomFourni;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNumTelf(): ?int
    {
        return $this->numTelf;
    }

    public function setNumTelf(int $numTelf): self
    {
        $this->numTelf = $numTelf;

        return $this;
    }
}
