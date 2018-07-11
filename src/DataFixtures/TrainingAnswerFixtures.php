<?php

// src/DataFixtures/TrainingAnswerFixtures.php
namespace App\DataFixtures;

use App\Entity\TrainingAnswer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TrainingAnswerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

            $trainingAnswer = new TrainingAnswer();
            $trainingAnswer->setAnswer('Answer A');
            $trainingAnswer->setIsTrue(false);
            $manager->persist($trainingAnswer);

            $trainingAnswer = new TrainingAnswer();
            $trainingAnswer->setAnswer('Answer B');
            $trainingAnswer->setIsTrue(true);
            $manager->persist($trainingAnswer);

            $trainingAnswer = new TrainingAnswer();
            $trainingAnswer->setAnswer('Answer C');
            $trainingAnswer->setIsTrue(false);
            $manager->persist($trainingAnswer);

            $trainingAnswer = new TrainingAnswer();
            $trainingAnswer->setAnswer('Answer D');
            $trainingAnswer->setIsTrue(false);
            $manager->persist($trainingAnswer);

            $trainingAnswer = new TrainingAnswer();
            $trainingAnswer->setAnswer('Answer E');
            $trainingAnswer->setIsTrue(false);
            $manager->persist($trainingAnswer);

            $trainingAnswer = new TrainingAnswer();
            $trainingAnswer->setAnswer('Answer F');
            $trainingAnswer->setIsTrue(false);
            $manager->persist($trainingAnswer);

            $trainingAnswer = new TrainingAnswer();
            $trainingAnswer->setAnswer('Answer G');
            $trainingAnswer->setIsTrue(false);
            $manager->persist($trainingAnswer);

            $trainingAnswer = new TrainingAnswer();
            $trainingAnswer->setAnswer('Answer H');
            $trainingAnswer->setIsTrue(false);
            $manager->persist($trainingAnswer);


        $manager->flush();
    }
}
