<?php

// src/DataFixtures/CompetitionFixtures.php
namespace App\DataFixtures;

use App\Entity\Competition;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CompetitionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $competition = new Competition();
            $competition->setInscriptionDate(new \DateTime('now'));
            $competition->setIndividualDate(new \DateTime('now'));
            $competition->setIndividualLocation('Paleizenstraat 27, 1030 Bruxelles, Belgium ');
            $competition->setCompetitionStartDate(new \DateTime('now'));
            $competition->setCompetitionEndDate(new \DateTime('now'));
            $manager->persist($competition);


        $manager->flush();
    }
}
