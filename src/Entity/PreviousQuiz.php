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
     * @Assert\Range(
     *      min = 1,
     *      max = 3,
     *      minMessage = "You must set the difficulty for at least the {{ limit }}st grade",
     *      maxMessage = "You must set the difficulty for at most the {{ limit }}rd grade"
     * )
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
