<?php

namespace App\Entity;

use App\Repository\TournoisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TournoisRepository::class)
 */
class Tournois
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
    private $nomTournois;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbEq;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDeb;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;

    /**
     * @ORM\OneToMany(targetEntity=Matchs::class, mappedBy="idTournois")
     */
    private $idmatch;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="idtournois")
     * @ORM\JoinColumn(nullable=false)
     */
    private $iduser;

    public function __construct()
    {
        $this->idmatch = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTournois(): ?string
    {
        return $this->nomTournois;
    }

    public function setNomTournois(string $nomTournois): self
    {
        $this->nomTournois = $nomTournois;

        return $this;
    }

    public function getNbEq(): ?int
    {
        return $this->nbEq;
    }

    public function setNbEq(int $nbEq): self
    {
        $this->nbEq = $nbEq;

        return $this;
    }

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->dateDeb;
    }

    public function setDateDeb(\DateTimeInterface $dateDeb): self
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * @return Collection<int, Matchs>
     */
    public function getIdmatch(): Collection
    {
        return $this->idmatch;
    }

    public function addIdmatch(Matchs $idmatch): self
    {
        if (!$this->idmatch->contains($idmatch)) {
            $this->idmatch[] = $idmatch;
            $idmatch->setIdTournois($this);
        }

        return $this;
    }

    public function removeIdmatch(Matchs $idmatch): self
    {
        if ($this->idmatch->removeElement($idmatch)) {
            // set the owning side to null (unless already changed)
            if ($idmatch->getIdTournois() === $this) {
                $idmatch->setIdTournois(null);
            }
        }

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }
}
