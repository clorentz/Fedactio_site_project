<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PreviousQuizRepository")
 */
class PreviousQuiz
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $difficulty;

    /**
     * @ORM\Column(type="integer")
     */
    private $yearOfQuiz;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Please, upload the file as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $quiz;

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

    public function getYearOfQuiz(): ?int
    {
        return $this->yearOfQuiz;
    }

    public function setYearOfQuiz(int $yearOfQuiz): self
    {
        $this->yearOfQuiz = $yearOfQuiz;

        return $this;
    }

    public function getQuiz()
    {
        return $this->quiz;
    }

    public function setQuiz($quiz)
    {
        $this->quiz = $quiz;

        return $this;
    }
}
