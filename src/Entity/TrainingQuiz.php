<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingQuizRepository")
 */
class TrainingQuiz
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 1,
     *      max = 3,
     *      minMessage = "You must set the difficulty for at least the {{ limit }}st grade",
     *      maxMessage = "You must set the difficulty for at most the {{ limit }}rd grade"
     * )
     */
    private $difficulty;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TrainingQuestion", mappedBy="trainingQuiz", cascade={"persist"})
     */
    private $questions;

    /**
     * @ORM\Column(type="smallint")
     * @Assert\Range(
     *      min = 1,
     *      max = 2,
     *      minMessage = "You must set the school for at least the Primary School",
     *      maxMessage = "You must set the difficulty for at most the Secondary school"
     * )
     */
    private $school;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDifficulty(): ?int
    {
        return $this->difficulty;
    }

    public function setDifficulty(int $difficulty): self
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * @return Collection|TrainingQuestion[]
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(TrainingQuestion $question): self
    {
        if (!$this->questions->contains($question)) {
            $question->setTrainingQuiz($this);
            $this->questions[] = $question;
        }

        return $this;
    }

    public function removeQuestion(TrainingQuestion $question): self
    {
        if ($this->questions->contains($question)) {
            $this->questions->removeElement($question);
            // set the owning side to null (unless already changed)
            if ($question->getTrainingQuiz() === $this) {
                $question->setTrainingQuiz(null);
            }
        }

        return $this;
    }

    public function getSchool(): ?int
    {
        return $this->school;
    }

    public function setSchool(int $school): self
    {
        $this->school = $school;

        return $this;
    }
}
