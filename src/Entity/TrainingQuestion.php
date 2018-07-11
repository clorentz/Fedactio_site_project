<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingQuestionRepository")
 */
class TrainingQuestion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=512)
     */
    private $question;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TrainingAnswer", mappedBy="question", cascade={"persist"})
     */
    private $answers;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @Assert\NotBlank(message="Please, upload the image as a PNG file.")
     * @Assert\File(mimeTypes={ "image/png" })
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TrainingQuiz", inversedBy="questions")
     */
    private $trainingQuiz;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 1,
     *      max = 5,
     *      minMessage = "You must set the difficulty to at least {{ limit }} star",
     *      maxMessage = "You must set the difficulty to at most {{ limit }} star"
     *  )
     */
    private $difficulty;


    public function __construct()
    {
        $this->answers = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
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
            $answer->setQuestion($this);
            $this->answers[] = $answer;
        }

        return $this;
    }

    public function removeAnswer(TrainingAnswer $answer): self
    {
        if ($this->answers->contains($answer)) {
            $this->answers->removeElement($answer);
            // set the owning side to null (unless already changed)
            if ($answer->getQuestion() === $this) {
                $answer->setQuestion(null);
            }
        }

        return $this;
    }

    public function getImage()
    {
      return $this->image;
    }

    public function setImage($image)
    {
      $this->image = $image;

      return $this;
    }

    public function getTrainingQuiz(): ?TrainingQuiz
    {
        return $this->trainingQuiz;
    }

    public function setTrainingQuiz(?TrainingQuiz $trainingQuiz): self
    {
        $this->trainingQuiz = $trainingQuiz;

        return $this;
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
}
