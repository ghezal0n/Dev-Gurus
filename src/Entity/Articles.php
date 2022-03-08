<?php

namespace App\Entity;

use App\Repository\ArticlesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ArticlesRepository::class)
 * @UniqueEntity(fields={"titre"}, message="There is already an article holding that name")
 */
class Articles
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
     * @Assert\NotBlank(message="title is required")
     * @Groups("article:read")
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Description is required")
     * @Groups("article:read")
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="Date is required")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="image is required is required")
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=Jeux::class, inversedBy="articles")
     * @Assert\NotBlank(message="title is required")
     * @Groups("article:read")
     */
    private $nom_jeux;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="id_article")
     */
    private $comments;
    public function __toString1()
    {
        return (string) $this->id_article;
    }

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getNomJeux(): ?Jeux
    {
        return $this->nom_jeux;
    }

    public function setNomJeux(?Jeux $nom_jeux): self
    {
        $this->nom_jeux = $nom_jeux;

        return $this;
    }
    public function __toString()
    {
        return (string) $this->nom_jeux;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setIdArticle($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getIdArticle() === $this) {
                $comment->setIdArticle(null);
            }
        }

        return $this;
    }
}
