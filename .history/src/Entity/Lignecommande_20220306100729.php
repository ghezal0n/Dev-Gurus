<?php

namespace App\Entity;

use App\Repository\LignecommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LignecommandeRepository::class)
 */
class Lignecommande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity=Commande::class, inversedBy="idcmd")
     */
    private $lignecmd;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class, inversedBy="idprod")
     */
    private $Produit;

   
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?float
    {
        return $this->quantite;
    }

    public function setQuantite(?float $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getLignecmd(): ?Commande
    {
        return $this->lignecmd;
    }

    public function setLignecmd(?Commande $lignecmd): self
    {
        $this->lignecmd = $lignecmd;

        return $this;
    }

    public function getProduit(): ?Produit
    {
        return $this->Produit;
    }

    public function setProduit(?Produit $Produit): self
    {
        $this->Produit = $Produit;

        return $this;
    }

    
   
}
