<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingAnswerRepository")
 */
class TrainingAnswer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $answer;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isTrue;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TrainingQuestion", inversedBy="answers")
     */
    private $question;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TrainingClientAnswer", inversedBy="answers")
     */
    private $trainingClientAnswer;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @Assert\NotBlank(message="Please, upload the image as a PNG file.")
     * @Assert\File(mimeTypes={ "image/png" })
     */
    private $image;

    public function getId()
    {
        return $this->id;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getIsTrue(): ?bool
    {
        return $this->isTrue;
    }

    public function setIsTrue(bool $isTrue): self
    {
        $this->isTrue = $isTrue;

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

    public function getTrainingClientAnswer(): ?TrainingClientAnswer
    {
        return $this->trainingClientAnswer;
    }

    public function setTrainingClientAnswer(?TrainingClientAnswer $trainingClientAnswer): self
    {
        $this->trainingClientAnswer = $trainingClientAnswer;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }
}
