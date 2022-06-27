<?php

namespace App\Entity;

use App\Entity\Reponse;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\QuestionRepository;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
class Question
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $question;

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'questions')]
    #[ORM\JoinColumn(nullable: false)]
    private $categorie;

    #[ORM\OneToOne(mappedBy: 'question', targetEntity: Reponse::class, cascade: ['persist', 'remove'])]
    private $reponse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getReponse(): ?Reponse
    {
        return $this->reponse;
    }

    public function setReponse(Reponse $reponse): self
    {
        // set the owning side of the relation if necessary
        if ($reponse->getQuestion() !== $this) {
            $reponse->setQuestion($this);
        }

        $this->reponse = $reponse;

        return $this;
    }

    public function __toString()
    {
        return $this->question;
    }
}
