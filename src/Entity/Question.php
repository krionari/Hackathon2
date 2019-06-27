<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
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
    private $directive;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $solution;

    public function getSolution(): ?string
    {
        return $this->solution;
    }
    public function setSolution(string $solution): self
    {
        $this->solution = $solution;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDirective(): ?string
    {
        return $this->directive;
    }

    public function setDirective(string $directive): self
    {
        $this->directive = $directive;

        return $this;
    }
}
