<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FestivalRepository")
 */
class Festival
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomFestival;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ImageFestival;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFestival(): ?string
    {
        return $this->nomFestival;
    }

    public function setNomFestival(string $nomFestival): self
    {
        $this->nomFestival = $nomFestival;

        return $this;
    }

    public function getImageFestival(): ?string
    {
        return $this->ImageFestival;
    }

    public function setImageFestival(string $ImageFestival): self
    {
        $this->ImageFestival = $ImageFestival;

        return $this;
    }
}
