<?php

// src/DataFixtures/TrainingQuizFixtures.php
namespace App\DataFixtures;

use App\Entity\TrainingQuiz;
use App\Entity\TrainingQuestion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TrainingQuizFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $questionRepo = $manager->getRepository(TrainingQuestion::class);
            $questions = $questionRepo->findAll();

            $trainingQuiz = new TrainingQuiz();
            $trainingQuiz->setDifficulty(1);

            foreach ($questions as $question) {
                $trainingQuiz->addQuestion($question);
              }

            $manager->persist($trainingQuiz);

        $manager->flush();
    }
}
