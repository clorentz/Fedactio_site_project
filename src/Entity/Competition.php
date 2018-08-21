<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompetitionRepository")
 */
class Competition
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     * @Assert\Range(
     *      min = "now -1 day",
     *      minMessage = "Please enter a date in the future",
     * )
     */
    private $inscriptionStartDate;

    /**
     * @ORM\Column(type="date")
     * @Assert\Range(
     *      min = "now",
     *      minMessage = "Please enter a date in the future",
     * )
     * @Assert\GreaterThan(propertyPath="inscriptionStartDate")
     */
    private $inscriptionEndDate;

    /**
     * @ORM\Column(type="date")
     * @Assert\Range(
     *      min = "now",
     *      minMessage = "Please enter a date in the future",
     * )
     */
    private $individualDate;

    /**
     * @ORM\Column(type="text")
     */
    private $individualLocation;

    /**
     * @ORM\Column(type="date")
     * @Assert\Range(
     *      min = "now",
     *      minMessage = "Please enter a date in the future",
     * )
     */
    private $competitionStartDate;

    /**
     * @ORM\Column(type="date")
     * @Assert\Range(
     *      min = "now",
     *      minMessage = "Please enter a date in the future",
     * )
     */
    private $competitionEndDate;

    public function getId()
    {
        return $this->id;
    }

    public function getInscriptionStartDate(): ?\DateTimeInterface
    {
      return $this->inscriptionStartDate;
    }

    public function setInscriptionStartDate(\DateTimeInterface $inscriptionStartDate): self
    {
      $this->inscriptionStartDate = $inscriptionStartDate;

      return $this;
    }

    public function getInscriptionEndDate(): ?\DateTimeInterface
    {
        return $this->inscriptionEndDate;
    }

    public function setInscriptionEndDate(\DateTimeInterface $inscriptionEndDate): self
    {
        $this->inscriptionEndDate = $inscriptionEndDate;

        return $this;
    }

    public function getIndividualDate(): ?\DateTimeInterface
    {
        return $this->individualDate;
    }

    public function setIndividualDate(\DateTimeInterface $individualDate): self
    {
        $this->individualDate = $individualDate;

        return $this;
    }

    public function getIndividualLocation(): ?string
    {
        return $this->individualLocation;
    }

    public function setIndividualLocation(string $individualLocation): self
    {
        $this->individualLocation = $individualLocation;

        return $this;
    }

    public function getCompetitionStartDate(): ?\DateTimeInterface
    {
        return $this->competitionStartDate;
    }

    public function setCompetitionStartDate(\DateTimeInterface $competitionStartDate): self
    {
        $this->competitionStartDate = $competitionStartDate;

        return $this;
    }

    public function getCompetitionEndDate(): ?\DateTimeInterface
    {
        return $this->competitionEndDate;
    }

    public function setCompetitionEndDate(\DateTimeInterface $competitionEndDate): self
    {
        $this->competitionEndDate = $competitionEndDate;

        return $this;
    }
}
