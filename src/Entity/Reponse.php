<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReponseRepository")
 */
class Reponse
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
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $co2Impact;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $correspondance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCo2Impact(): ?int
    {
        return $this->co2Impact;
    }

    public function setCo2Impact(int $co2Impact): self
    {
        $this->co2Impact = $co2Impact;

        return $this;
    }

    public function getCorrespondance(): ?string
    {
        return $this->correspondance;
    }

    public function setCorrespondance(string $correspondance): self
    {
        $this->correspondance = $correspondance;

        return $this;
    }
}
