<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCmd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $refCmd;

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

    public function getRefCmd(): ?string
    {
        return $this->refCmd;
    }

    public function setRefCmd(string $refCmd): self
    {
        $this->refCmd = $refCmd;

        return $this;
    }
}
