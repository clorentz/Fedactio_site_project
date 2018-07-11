<?php

// src/DataFixtures/RegulationFixtures.php
namespace App\DataFixtures;

use App\Entity\Regulation;
use App\Entity\RegulationItem;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class RegulationFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
      $items = $manager->getRepository(RegulationItem::class)->findAll();

      $regulation = new Regulation();

      foreach ($items as $item) {
        $regulation->addItem($item);
      }
      $manager->persist($regulation);


      $manager->flush();
    }

    public function getDependencies()
   {
       return array(
           RegulationItemFixtures::class,
       );
   }
}
