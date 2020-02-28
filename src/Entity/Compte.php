<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompteRepository")
 */
class Compte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero;

    /**
     * @ORM\Column(type="float")
     */
    private $versement;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Engagement", mappedBy="compte", orphanRemoval=true)
     */
    private $engagements;

    public function __construct()
    {
        $this->engagements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getVersement(): ?float
    {
        return $this->versement;
    }

    public function setVersement(float $versement): self
    {
        $this->versement = $versement;

        return $this;
    }

    /**
     * @return Collection|Engagement[]
     */
    public function getEngagements(): Collection
    {
        return $this->engagements;
    }

    public function addEngagement(Engagement $engagement): self
    {
        if (!$this->engagements->contains($engagement)) {
            $this->engagements[] = $engagement;
            $engagement->setCompte($this);
        }

        return $this;
    }

    public function removeEngagement(Engagement $engagement): self
    {
        if ($this->engagements->contains($engagement)) {
            $this->engagements->removeElement($engagement);
            // set the owning side to null (unless already changed)
            if ($engagement->getCompte() === $this) {
                $engagement->setCompte(null);
            }
        }

        return $this;
    }
    public function __toString(): string
    {
        return $this->getNumero();
    }
}
