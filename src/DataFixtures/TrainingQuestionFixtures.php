<?php

// src/DataFixtures/TrainingQuestionFixtures.php
namespace App\DataFixtures;

use App\Entity\TrainingQuestion;
use App\Entity\TrainingAnswer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TrainingQuestionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $answerRepo = $manager->getRepository(TrainingAnswer::class);
            $answers = $answerRepo->findAll();

            $trainingQuestion1 = new TrainingQuestion();
            $trainingQuestion1->setQuestion('First Question');
            $trainingQuestion1->setDifficulty(1);

            $trainingQuestion2 = new TrainingQuestion();
            $trainingQuestion2->setQuestion('Second Question');
            $trainingQuestion2->setDifficulty(5);

            $cmpt = 0;
            foreach ($answers as $answer) {
              if ($cmpt < 4)
                $trainingQuestion1->addAnswer($answer);
              else
                $trainingQuestion2->addAnswer($answer);
              $cmpt ++;
              }

            $manager->persist($trainingQuestion1);
            $manager->persist($trainingQuestion2);

        $manager->flush();
    }
}
