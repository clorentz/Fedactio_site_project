<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RegulationRepository")
 */
class Regulation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RegulationItem", mappedBy="link", cascade={"persist"})
     */
    private $items;

    /**
     * @ORM\Column(type="integer")
     */
    private $regulationYear;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Collection|RegulationItem[]
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(RegulationItem $item): self
    {
        if (!$this->items->contains($item)) {
            $this->items[] = $item;
            $item->setLink($this);
        }

        return $this;
    }

    public function removeItem(RegulationItem $item): self
    {
        if ($this->items->contains($item)) {
            $this->items->removeElement($item);
            // set the owning side to null (unless already changed)
            if ($item->getLink() === $this) {
                $item->setLink(null);
            }
        }

        return $this;
    }

    public function getRegulationYear(): ?int
    {
        return $this->regulationYear;
    }

    public function setRegulationYear(int $regulationYear): self
    {
        $this->regulationYear = $regulationYear;

        return $this;
    }
}
