<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("commande:read")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     * @Groups("commande:read")
     */
    private $dateCmd;

    /**
     * @ORM\OneToMany(targetEntity=Lignecommande::class, mappedBy="lignecmd")
     */
    private $idcmd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Statut;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="commandes")
     */
    private $idUser;

   

    public function __construct()
    {
        $this->idcmd = new ArrayCollection();
    }
    
   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCmd(): ?\DateTimeInterface
    {
        return $this->dateCmd;
    }

    public function setDateCmd(\DateTimeInterface $dateCmd): self
    {
        $this->dateCmd = $dateCmd;

        return $this;
    }

    /**
     * @return Collection<int, Lignecommande>
     */
    public function getIdcmd(): Collection
    {
        return $this->idcmd;
    }

    public function addIdcmd(Lignecommande $idcmd): self
    {
        if (!$this->idcmd->contains($idcmd)) {
            $this->idcmd[] = $idcmd;
            $idcmd->setLignecmd($this);
        }

        return $this;
    }

    public function removeIdcmd(Lignecommande $idcmd): self
    {
        if ($this->idcmd->removeElement($idcmd)) {
            // set the owning side to null (unless already changed)
            if ($idcmd->getLignecmd() === $this) {
                $idcmd->setLignecmd(null);
            }
        }

        return $this;
    }

    public function getImage()
    {
        return $this->Image;
    }

    public function setImage($Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->Statut;
    }

    public function setStatut(string $Statut): self
    {
        $this->Statut = $Statut;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }
    public function __toString()
    {
        return (string) $this->id;
    }

   

  
}
