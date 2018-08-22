<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingClientAnswerRepository")
 */
class TrainingClientAnswer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TrainingQuestion")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TrainingAnswer", mappedBy="trainingClientAnswer")
     */
    private $answers;

    public function __construct()
    {
        $this->answers = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuestion(): ?TrainingQuestion
    {
        return $this->question;
    }

    public function setQuestion(?TrainingQuestion $question): self
    {
        $this->question = $question;

        return $this;
    }

    /**
     * @return Collection|TrainingAnswer[]
     */
    public function getAnswers(): Collection
    {
        return $this->answers;
    }

    public function addAnswer(TrainingAnswer $answer): self
    {
        if (!$this->answers->contains($answer)) {
            $this->answers[] = $answer;
            $answer->setTrainingClientAnswer($this);
        }

        return $this;
    }

    public function removeAnswer(TrainingAnswer $answer): self
    {
        if ($this->answers->contains($answer)) {
            $this->answers->removeElement($answer);
            // set the owning side to null (unless already changed)
            if ($answer->getTrainingClientAnswer() === $this) {
                $answer->setTrainingClientAnswer(null);
            }
        }

        return $this;
    }
}
