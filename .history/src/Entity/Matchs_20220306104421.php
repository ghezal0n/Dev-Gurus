<?php

namespace App\Entity;
use App\Entity\Tournois;
use App\Repository\MatchsRepository;
use Symfony\Component\Validator\Constraints as Assert;



use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MatchsRepository::class)
 */
class Matchs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Tournois::class, inversedBy="idmatch")
     * @ORM\JoinColumn(onDelete="CASCADE")

     * @Assert\NotBlank
     * 
     */
    private $idTournois;

    /**
     * @ORM\OneToOne(targetEntity=Equipe::class, inversedBy="matchs",  cascade={"persist", "remove"})
   
     */
    private $EquipeHome;

    /**
     * @ORM\OneToOne(targetEntity=Equipe::class,  cascade={"persist", "remove"})
     */
    private $EquipeAway;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @Assert\Date
     *  @Assert\Expression(
   *     "this.getIdTournois().getDateDeb() >= this.getDateMatch()",
   *     message="La date match ne doit pas être antérieure à la date début de tournois"
   * )
   * *  @Assert\Expression(
   *     "this.getIdTournois().getDateFin() < this.getDateMatch()",
   *     message="La date match ne doit pas être antérieure à la date début de tournois"
   * )
     * @Assert\NotBlank
     * 
     */
    private $DateMatch;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTournois(): ?Tournois
    {
        return $this->idTournois;
    }

    public function setIdTournois(?Tournois $idTournois): self
    {
        $this->idTournois = $idTournois;

        return $this;
    }

    public function getEquipeHome(): ?Equipe
    {
        return $this->EquipeHome;
    }

    public function setEquipeHome(?Equipe $EquipeHome): self
    {
        $this->EquipeHome = $EquipeHome;

        return $this;
    }

    public function getEquipeAway(): ?Equipe
    {
        return $this->EquipeAway;
    }

    public function setEquipeAway(?Equipe $EquipeAway): self
    {
        $this->EquipeAway = $EquipeAway;

        return $this;
    }

    public function getDateMatch(): ?\DateTimeInterface
    {
        return $this->DateMatch;
    }

    public function setDateMatch(\DateTimeInterface $DateMatch): self
    {
        $this->DateMatch = $DateMatch;

        return $this;
    }
   

}
