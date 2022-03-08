<?php

namespace App\Entity;

use App\Repository\JeuxRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JeuxRepository::class)
 * @UniqueEntity(fields={"nom_jeux"}, message="There is already a game holding that name")
 */
class Jeux
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("article:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="game name is required")
     * @Groups("article:read")
     */
    private $nom_jeux;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="image is required")
     */
    private $imageJeu;

    /**
     * @ORM\OneToMany(targetEntity=Articles::class, mappedBy="nom_jeux")
     */
    private $articles;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
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
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Articles $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setNomJeux($this);

        }

        return $this;
    }

    public function removeArticle(Articles $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getNomJeux() === $this) {
                $article->setNomJeux(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return (string) $this->nom_jeux;
    }
}
