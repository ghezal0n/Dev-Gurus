<?php

namespace App\Entity;

use App\Repository\MatchsRepository;
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
     * @ORM\JoinColumn(nullable=false)
     */
    private $idTournois;

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
}
