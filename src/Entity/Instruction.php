<?php

namespace App\Entity;

use App\Repository\InstructionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InstructionRepository::class)
 */
class Instruction
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
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $instructionRank;

    /**
     * @ORM\ManyToOne(targetEntity=meal::class, inversedBy="instructions")
     */
    private $makeMeal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getInstructionRank(): ?int
    {
        return $this->instructionRank;
    }

    public function setInstructionRank(int $instructionRank): self
    {
        $this->instructionRank = $instructionRank;

        return $this;
    }

    public function getMakeMeal(): ?meal
    {
        return $this->makeMeal;
    }

    public function setMakeMeal(?meal $makeMeal): self
    {
        $this->makeMeal = $makeMeal;

        return $this;
    }
}
