<?php

namespace App\Entity;

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
     * @ORM\OneToOne(targetEntity="App\Entity\TrainingAnswer", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $answer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TrainingQuestion")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;

    public function getId()
    {
        return $this->id;
    }

    public function getAnswer(): ?TrainingAnswer
    {
        return $this->answer;
    }

    public function setAnswer(TrainingAnswer $answer): self
    {
        $this->answer = $answer;

        return $this;
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
}
