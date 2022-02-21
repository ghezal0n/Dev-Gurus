<?php

namespace App\Entity;

use App\Repository\ServiceGuideRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServiceGuideRepository::class)
 */
class ServiceGuide
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(meessage ="")
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * 
     */
    private $descrp;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     */
    private $NbHeure;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank
     */
    private $DateCreation;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     */
    private $prix;

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

    public function getDescrp(): ?string
    {
        return $this->descrp;
    }

    public function setDescrp(string $descrp): self
    {
        $this->descrp = $descrp;

        return $this;
    }

    public function getNbHeure(): ?int
    {
        return $this->NbHeure;
    }

    public function setNbHeure(int $NbHeure): self
    {
        $this->NbHeure = $NbHeure;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->DateCreation;
    }

    public function setDateCreation(\DateTimeInterface $DateCreation): self
    {
        $this->DateCreation = $DateCreation;

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

    /**
     * @return Collection<int, User>
     */
    public function getIduser(): Collection
    {
        return $this->iduser;
    }

    public function addIduser(User $iduser): self
    {
        if (!$this->iduser->contains($iduser)) {
            $this->iduser[] = $iduser;
            $iduser->addPlanning($this);
        }

        return $this;
    }

    public function removeIduser(User $iduser): self
    {
        if ($this->iduser->removeElement($iduser)) {
            $iduser->removePlanning($this);
        }

        return $this;
    }
}
