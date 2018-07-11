<?php

namespace App\DataFixtures;

use App\Entity\InformationsItem;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class InformationsItemFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $info = new InformationsItem();
        $info->setTitle("Qui sommes nous?");
        $info->setContent("Ayant pour devise que « chaque jeune a un talent caché », Francolympiades, l’Association Francophone d’Olympiades, vise à faire découvrir et développer les talents des jeunes par le biais de divers concours et olympiades ouverts à tous et articulés autours de plusieurs domaines. Active depuis 2011, l’association organise annuellement un concours de mathématiques, un concours de dessin, des olympiades de sciences sociales, et un concours de nouvelles. Pour plus d’InformationsItem, veuillez consulter notre site web www.francolympiades.be.");
        $manager->persist($info);

        $info = new InformationsItem();
        $info->setTitle("Le quiz de math");
        $info->setContent("Pangea Mathquiz est un concours de mathématiques international destiné aux élèves du deuxième et troisième degrés de l’enseignement primaire et premier et deuxième degrés de l’enseignement secondaire. Il se réalise en deux étapes: La demi-finale: Il comporte 20 questions à choix multiple de difficulté croissante, proposées la même semaine dans tous les établissements scolaires. La finale: Les 30 finalistes de chaque degré sont invités à faire face à un nouveau quiz composé de 10 questions un peu plus difficile. Celle-ci aura lieu cette année le 3 mars 2018 et la remise des prix se tiendra le même jour.");
        $manager->persist($info);


        $manager->flush();
    }
}
