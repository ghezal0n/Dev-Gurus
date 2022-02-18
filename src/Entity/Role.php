<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoleRepository::class)
 */
class Role
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
    private $libille;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibille(): ?string
    {
        return $this->libille;
    }

    public function setLibille(string $libille): self
    {
        $this->libille = $libille;

        return $this;
    }
}
