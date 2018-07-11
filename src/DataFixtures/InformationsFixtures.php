<?php

// src/DataFixtures/InformationsFixtures.php
namespace App\DataFixtures;

use App\Entity\Informations;
use App\Entity\InformationsItem;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class InformationsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
      $items = $manager->getRepository(InformationsItem::class)->findAll();

      $informations = new Informations();

      foreach ($items as $item) {
        $informations->addItem($item);
      }
      $manager->persist($informations);


      $manager->flush();
    }

    public function getDependencies()
   {
       return array(
           InformationsItemFixtures::class,
       );
   }
}
