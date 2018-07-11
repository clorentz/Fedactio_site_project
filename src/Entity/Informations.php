<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InformationsRepository")
 */
class Informations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\InformationsItem", mappedBy="informations", cascade={"persist"})
     */
    private $items;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Collection|InformationsItem[]
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(InformationsItem $item): self
    {
        if (!$this->items->contains($item)) {
            $this->items[] = $item;
            $item->setInformations($this);
        }

        return $this;
    }

    public function removeItem(InformationsItem $item): self
    {
        if ($this->items->contains($item)) {
            $this->items->removeElement($item);
            // set the owning side to null (unless already changed)
            if ($item->getInformations() === $this) {
                $item->setInformations(null);
            }
        }

        return $this;
    }
}
