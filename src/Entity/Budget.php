<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BudgetRepository")
 */
class Budget
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
     * @ORM\Column(type="integer")
     */
    private $numero;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Engagement", mappedBy="budget")
     */
    private $engagements;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\NouvelleMesure", mappedBy="budget", orphanRemoval=true)
     */
    private $nouvelleMesures;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Reamenagement", mappedBy="budget")
     */
    private $reamenagements;

    public function __construct()
    {
        $this->engagements = new ArrayCollection();
        $this->nouvelleMesures = new ArrayCollection();
        $this->reamenagements = new ArrayCollection();
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

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

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
            $engagement->setBudget($this);
        }

        return $this;
    }

    public function removeEngagement(Engagement $engagement): self
    {
        if ($this->engagements->contains($engagement)) {
            $this->engagements->removeElement($engagement);
            // set the owning side to null (unless already changed)
            if ($engagement->getBudget() === $this) {
                $engagement->setBudget(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|NouvelleMesure[]
     */
    public function getNouvelleMesures(): Collection
    {
        return $this->nouvelleMesures;
    }

    public function addNouvelleMesure(NouvelleMesure $nouvelleMesure): self
    {
        if (!$this->nouvelleMesures->contains($nouvelleMesure)) {
            $this->nouvelleMesures[] = $nouvelleMesure;
            $nouvelleMesure->setBudget($this);
        }

        return $this;
    }

    public function removeNouvelleMesure(NouvelleMesure $nouvelleMesure): self
    {
        if ($this->nouvelleMesures->contains($nouvelleMesure)) {
            $this->nouvelleMesures->removeElement($nouvelleMesure);
            // set the owning side to null (unless already changed)
            if ($nouvelleMesure->getBudget() === $this) {
                $nouvelleMesure->setBudget(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Reamenagement[]
     */
    public function getReamenagements(): Collection
    {
        return $this->reamenagements;
    }

    public function addReamenagement(Reamenagement $reamenagement): self
    {
        if (!$this->reamenagements->contains($reamenagement)) {
            $this->reamenagements[] = $reamenagement;
            $reamenagement->addBudget($this);
        }

        return $this;
    }

    public function removeReamenagement(Reamenagement $reamenagement): self
    {
        if ($this->reamenagements->contains($reamenagement)) {
            $this->reamenagements->removeElement($reamenagement);
            $reamenagement->removeBudget($this);
        }

        return $this;
    }
  //public function __toString(){
        // to show the name of the Category in the select
    //    return $this->numero ?: '';
        // to show the id of the Category in the select
        // return $this->id;
    //}
    public function __toString(): string
    {
        return $this->getNumero();
    }
}
