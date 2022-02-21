<?php

namespace App\Entity;

use App\Repository\JeuxRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JeuxRepository::class)
 */
class Jeux
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
    private $nom_jeux;

    /**
     * @ORM\Column(type="blob")
     */
    private $imageJeu;

    /**
     * @ORM\OneToMany(targetEntity=Articles::class, mappedBy="id_jeux", orphanRemoval=true)
     */
    private $avoir;

    public function __construct()
    {
        $this->avoir = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomJeux(): ?string
    {
        return $this->nom_jeux;
    }

    public function setNomJeux(string $nom_jeux): self
    {
        $this->nom_jeux = $nom_jeux;

        return $this;
    }

    public function getImageJeu()
    {
        return $this->imageJeu;
    }

    public function setImageJeu($imageJeu): self
    {
        $this->imageJeu = $imageJeu;

        return $this;
    }

    /**
     * @return Collection|Articles[]
     */
    public function getAvoir(): Collection
    {
        return $this->avoir;
    }

    public function addAvoir(Articles $avoir): self
    {
        if (!$this->avoir->contains($avoir)) {
            $this->avoir[] = $avoir;
            $avoir->setIdJeux($this);
        }

        return $this;
    }

    public function removeAvoir(Articles $avoir): self
    {
        if ($this->avoir->removeElement($avoir)) {
            // set the owning side to null (unless already changed)
            if ($avoir->getIdJeux() === $this) {
                $avoir->setIdJeux(null);
            }
        }

        return $this;
    }
}
