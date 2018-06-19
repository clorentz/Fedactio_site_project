<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadFixture extends Fixture {
  public function load(ObjectManager $em)
  {
    $user = new UserFixtures();
    $user->load($em);
  }
}
