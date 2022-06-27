<?php

namespace App\Entity;

use App\Repository\LogUserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LogUserRepository::class)]
class LogUser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $log_connexion;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'logUsers')]
    private $log_user;

    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogConnexion(): ?\DateTimeInterface
    {
        return $this->log_connexion;
    }

    public function setLogConnexion(?\DateTimeInterface $log_connexion): self
    {
        $this->log_connexion = $log_connexion;

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->removeElement($user)) {
            if ($user->getLogUser() === $this) {
                $user->setLogUser(null);
            }
        }

        return $this;
    }

    public function getLogUser(): ?User
    {
        return $this->log_user;
    }

    public function setLogUser(?User $log_user): self
    {
        $this->log_user = $log_user;

        return $this;
    }

    public function __toString()
    {
        return $this->id;
    }
}
