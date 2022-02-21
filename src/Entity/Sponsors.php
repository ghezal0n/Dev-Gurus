<?php

namespace App\Entity;

use App\Repository\SponsorsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SponsorsRepository::class)
 */
class Sponsors
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $idSpons;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomSponsor;

    /**
     * @ORM\Column(type="blob")
     */
    private $image;

    public function getIdSpons(): ?int
    {
        return $this->idSpons;
    }

    public function getNomSponsor(): ?string
    {
        return $this->nomSponsor;
    }

    public function setNomSponsor(string $nomSponsor): self
    {
        $this->nomSponsor = $nomSponsor;

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
}
