<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * *@Assert\Length(
     *    min = 3,
     *    max = 10,
    *minMessage = " Le nom d'un produit comporter au moins {{ limit }} caractères",
    *maxMessage = " Le nom d'un produit doit comporter au plus {{ limit }} caractères"
     *)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Categorie is required")
     * @Assert\NotEqualTo(
     *     value = 0,
     *     message = " La quantité d'un produit ne doit pas étre égale à 0 "
     * )
     */
    private $qte;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Categorie is required")
     * @Assert\NotEqualTo(
     *     value = 0,
     *     message = " Le prix d'un produit ne doit pas étre égale à 0 "
     * )
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *    min = 7,
     *    max = 20,
     * minMessage =" La description d'un produit doit comporter au moins {{ limit }} caractères",
     * maxMessage="La description d'un produit doit comporter au plus {{ limit }} caractères"
     *)
     */
    private $descrp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $catego;

    /**
     * @ORM\ManyToMany(targetEntity=Panier::class, inversedBy="produits")
     */
    private $PanierProd;

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseur::class, inversedBy="produits")
     */
    private $fournisseur;
    /**
     * @ORM\ManyToMany(targetEntity=Commande::class, mappedBy="ComProd")
     */
    private $commandes;

    /**
     * @ORM\OneToMany(targetEntity=Lignecommande::class, mappedBy="Produit")
     */
    private $idprod;

    public function __construct()
    {
        $this->idprod = new ArrayCollection();
    }


    public function __construct()
    {
        $this->PanierProd = new ArrayCollection();
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

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img): self
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

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }
}
