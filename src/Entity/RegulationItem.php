<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RegulationItemRepository")
 */
class RegulationItem
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $regulation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Regulation", inversedBy="items")
     */
    private $link;

    public function getId()
    {
        return $this->id;
    }

    public function getRegulation(): ?string
    {
        return $this->regulation;
    }

    public function setRegulation(string $regulation): self
    {
        $this->regulation = $regulation;

        return $this;
    }

    public function getLink(): ?Regulation
    {
        return $this->link;
    }

    public function setLink(?Regulation $link): self
    {
        $this->link = $link;

        return $this;
    }
}
