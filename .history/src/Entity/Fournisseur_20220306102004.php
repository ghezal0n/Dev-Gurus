<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=FournisseurRepository::class)
 */
class Fournisseur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("fournisseur:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("fournisseur:read")
     * @Assert\Length(
     *    min = 3,
     *    max = 10,
     * minMessage = " Le nom d'un fournisseur comporter au moins {{ limit }} caractères",
     * maxMessage = " Le nom d'un fournisseur doit comporter au plus {{ limit }} caractères"
     *)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     * @Groups("fournisseur:read")
     * @Assert\Length(
     *    min = 8,
     * minMessage = " Le numero d'un fournisseur comporter au moins {{ limit }} caractères"
     *)
     */
    private $numTel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("fournisseur:read")
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity=Produit::class, mappedBy="fournisseur")
     */
    private $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
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

    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    public function setNumTel(int $numTel): self
    {
        $this->numTel = $numTel;

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

    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setFournisseur($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getFournisseur() === $this) {
                $produit->setFournisseur(null);
            }
        }

        return $this;
    }

   
}
