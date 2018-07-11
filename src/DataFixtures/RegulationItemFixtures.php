<?php

// src/DataFixtures/RegulationItemFixtures.php
namespace App\DataFixtures;

use App\Entity\RegulationItem;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class RegulationItemFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("L’épreuve est individuelle.");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("Tout participant faisant une tentative de tricherie se verra déclassé du concours.");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("Il est formellement interdit de se munir d’une calculatrice, d’un GSM et de tout autre objet électronique ou document.");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("Manger et boire (excepté de l’eau) est interdit pendant l’épreuve.");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("Les retardataires de plus de 20 minutes ne peuvent pas participer au concours.");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("L’épreuve dure maximum 60 minutes.");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("Le quiz de mathématiques consiste en un questionnaire à choix multiples de 20-25 questions  lors de la demi-finale ; et de 10 questions lors de la finale .");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("Il n’y a qu’une seule bonne réponse par question.");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("Une question subsidiaire (question Bonus) départagera les élèves qui auront les mêmes points.");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("Les participants peuvent commencer à remettre leur feuille-réponse 20 minutes après le début de l’épreuve.");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("Les participants doivent signer la liste de présence lorsqu’ils remettent leur feuille de réponses.");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("Les participants ne peuvent pas garder leur questionnaire à la fin du concours car le même questionnaire sera utilisé pour le concours néerlandophone.");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("S’il s’avère que le questionnaire comporte une erreur, la question concernée sera annulée.");
            $manager->persist($regulationItem);

            $regulationItem = new RegulationItem();
            $regulationItem->setRegulation("En s’inscrivant, les participants acceptent que leur nom et photo soient utilisés sur les supports de Francolympiades et Fedactio.");
            $manager->persist($regulationItem);


        $manager->flush();
    }
}
