<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Competition;
use App\Entity\TrainingQuestion;

class PublicController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
      // Fetch of the competition entity
      $competition = $this->getDoctrine()->getRepository(Competition::class)->findAll()[0];

      // Changing the format of the date so it can be printed in the view
      $inscriptionD = $competition->getInscriptionDate()->format('d/m/Y');
      $indivD = $competition->getIndividualDate()->format('d/m/Y');
      $competSD = $competition->getCompetitionStartDate()->format('d/m/Y');
      $competED = $competition->getCompetitionEndDate()->format('d/m/Y');

        return $this->render('homepage.html.twig', [
            'controller_name' => 'PublicController',
            'competition'     => $competition,
            'inscriptionD'    => $inscriptionD,
            'indivD'          => $indivD,
            'competSD'        => $competSD,
            'competED'        => $competED,
        ]);
    }

    /**
     * @Route("/aboutUs", name="aboutus")
     */
    public function aboutUs(){

      return $this->render('public/aboutUs.html.twig', [
        'informations' => 'informations',
      ]);
    }

    /**
     * @Route("/regulation", name="regulation")
     */
    public function regulation(){


      return $this->render('public/regulation.html.twig', [
        'informations' => 'informations',
      ]);
    }

    /**
     * @Route("/gallery", name="gallery")
     */
    public function gallery(){


      return $this->render('public/gallery.html.twig', [
        'informations' => 'informations',
      ]);
    }

    /**
     * @Route("/training", name="training")
     */
    public function training(){

      return $this->render('public/training.html.twig', [
        'informations' => 'informations',
      ]);
    }
}
