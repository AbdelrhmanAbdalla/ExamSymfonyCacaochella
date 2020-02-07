<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticipantRepository")
 */
class Participant
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
    private $typeParticipant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomParticipant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeParticipant(): ?string
    {
        return $this->typeParticipant;
    }

    public function setTypeParticipant(string $typeParticipant): self
    {
        $this->typeParticipant = $typeParticipant;

        return $this;
    }

    public function getNomParticipant(): ?string
    {
        return $this->nomParticipant;
    }

    public function setNomParticipant(string $nomParticipant): self
    {
        $this->nomParticipant = $nomParticipant;

        return $this;
    }
}
