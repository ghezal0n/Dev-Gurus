<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    /**
     * @ORM\Column(type="integer")
     */
    private $qte;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descrp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $catego;

    /**
     * @ORM\ManyToMany(targetEntity=Panier::class, inversedBy="Produits")
     */
    private $PanierProd;

    /**
     * @ORM\ManyToMany(targetEntity=Commande::class, mappedBy="ComProd")
     */
    private $commandes;

    public function __construct()
    {
        $this->PanierProd = new ArrayCollection();
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(int $qte): self
    {
        $this->qte = $qte;

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

    public function getDescrp(): ?string
    {
        return $this->descrp;
    }

    public function setDescrp(string $descrp): self
    {
        $this->descrp = $descrp;

        return $this;
    }

    public function getCatego(): ?string
    {
        return $this->catego;
    }

    public function setCatego(string $catego): self
    {
        $this->catego = $catego;

        return $this;
    }

    /**
     * @return Collection<int, Panier>
     */
    public function getPanierProd(): Collection
    {
        return $this->PanierProd;
    }

    public function addPanierProd(Panier $panierProd): self
    {
        if (!$this->PanierProd->contains($panierProd)) {
            $this->PanierProd[] = $panierProd;
        }

        return $this;
    }

    public function removePanierProd(Panier $panierProd): self
    {
        $this->PanierProd->removeElement($panierProd);

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->addComProd($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            $commande->removeComProd($this);
        }

        return $this;
    }
}
