<?php

namespace App\Entity;

use App\Repository\LivreurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivreurRepository::class)
 */
class Livreur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_Livreur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mdp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address_loc;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_telf;

    public function getId_Livreur(): ?int
    {
        return $this->id_Livreur;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

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

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getAddressLoc(): ?string
    {
        return $this->address_loc;
    }

    public function setAddressLoc(string $address_loc): self
    {
        $this->address_loc = $address_loc;

        return $this;
    }

    public function getNumTelf(): ?int
    {
        return $this->num_telf;
    }

    public function setNumTelf(int $num_telf): self
    {
        $this->num_telf = $num_telf;

        return $this;
    }
}
