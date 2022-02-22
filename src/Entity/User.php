<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mdp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $points;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $addressLoc;

    /**
     * @ORM\Column(type="integer")
     */
    private $numTelf;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $level;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $Cv;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $badge;

    /**
     * @ORM\OneToOne(targetEntity=Role::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $role;

    /**
     * @ORM\OneToMany(targetEntity=Tournois::class, mappedBy="iduser")
     */
    private $idtournois;

    /**
     * @ORM\ManyToMany(targetEntity=ServiceGuide::class, inversedBy="iduser")
     */
    private $Planning;

    /**
     * @ORM\OneToOne(targetEntity=Panier::class, mappedBy="userid", cascade={"persist", "remove"})
     */
    private $panier;

    public function __construct()
    {
        $this->idtournois = new ArrayCollection();
        $this->Planning = new ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

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

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(?int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getAddressLoc(): ?string
    {
        return $this->addressLoc;
    }

    public function setAddressLoc(string $addressLoc): self
    {
        $this->addressLoc = $addressLoc;

        return $this;
    }

    public function getNumTelf(): ?int
    {
        return $this->numTelf;
    }

    public function setNumTelf(int $numTelf): self
    {
        $this->numTelf = $numTelf;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(?int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getCv()
    {
        return $this->Cv;
    }

    public function setCv($Cv): self
    {
        $this->Cv = $Cv;

        return $this;
    }

    public function getBadge()
    {
        return $this->badge;
    }

    public function setBadge($badge): self
    {
        $this->badge = $badge;

        return $this;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(Role $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return Collection<int, Tournois>
     */
    public function getIdtournois(): Collection
    {
        return $this->idtournois;
    }

    public function addIdtournoi(Tournois $idtournoi): self
    {
        if (!$this->idtournois->contains($idtournoi)) {
            $this->idtournois[] = $idtournoi;
            $idtournoi->setIduser($this);
        }

        return $this;
    }

    public function removeIdtournoi(Tournois $idtournoi): self
    {
        if ($this->idtournois->removeElement($idtournoi)) {
            // set the owning side to null (unless already changed)
            if ($idtournoi->getIduser() === $this) {
                $idtournoi->setIduser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ServiceGuide>
     */
    public function getPlanning(): Collection
    {
        return $this->Planning;
    }

    public function addPlanning(ServiceGuide $planning): self
    {
        if (!$this->Planning->contains($planning)) {
            $this->Planning[] = $planning;
        }

        return $this;
    }

    public function removePlanning(ServiceGuide $planning): self
    {
        $this->Planning->removeElement($planning);

        return $this;
    }

    public function getPanier(): ?Panier
    {
        return $this->panier;
    }

    public function setPanier(?Panier $panier): self
    {
        // unset the owning side of the relation if necessary
        if ($panier === null && $this->panier !== null) {
            $this->panier->setUserid(null);
        }

        // set the owning side of the relation if necessary
        if ($panier !== null && $panier->getUserid() !== $this) {
            $panier->setUserid($this);
        }

        $this->panier = $panier;

        return $this;
    }
}
