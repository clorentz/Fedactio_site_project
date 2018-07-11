<?php

// src/DataFixtures/UserFixtures.php
namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $user = new User();
            $user->setLogin('admin');
            $user->setName('User');
            $user->setSurname('Admin');
            $user->setEmail('admin@fedactio.be');
            $user->setAdmin(true);
            $manager->persist($user);


        $manager->flush();
    }
}
