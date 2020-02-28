<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReamenagementRepository")
 */
class Reamenagement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $montant;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Budget", inversedBy="reamenagements")
     */
    private $budget;

    public function __construct()
    {
        $this->budget = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection|Budget[]
     */
    public function getBudget(): Collection
    {
        return $this->budget;
    }

    public function addBudget(Budget $budget): self
    {
        if (!$this->budget->contains($budget)) {
            $this->budget[] = $budget;
        }

        return $this;
    }

    public function removeBudget(Budget $budget): self
    {
        if ($this->budget->contains($budget)) {
            $this->budget->removeElement($budget);
        }

        return $this;
    }
}
