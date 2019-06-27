<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\OneToMany(targetEntity="App\Entity\Reponse", mappedBy="question")
     */
    private $Reponse;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Solution", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Solution;

    public function __construct()
    {
        $this->Reponse = new ArrayCollection();
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

    /**
     * @return Collection|Reponse[]
     */
    public function getReponse(): Collection
    {
        return $this->Reponse;
    }

    public function addReponse(Reponse $reponse): self
    {
        if (!$this->Reponse->contains($reponse)) {
            $this->Reponse[] = $reponse;
            $reponse->setQuestion($this);
        }

        return $this;
    }

    public function removeReponse(Reponse $reponse): self
    {
        if ($this->Reponse->contains($reponse)) {
            $this->Reponse->removeElement($reponse);
            // set the owning side to null (unless already changed)
            if ($reponse->getQuestion() === $this) {
                $reponse->setQuestion(null);
            }
        }

        return $this;
    }

    public function getSolution(): ?Solution
    {
        return $this->Solution;
    }

    public function setSolution(Solution $Solution): self
    {
        $this->Solution = $Solution;

        return $this;
    }

}
