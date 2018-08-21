<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\Competition;
use App\Entity\Informations;
use App\Entity\Regulation;
use App\Entity\PreviousQuiz;
use App\Entity\GalleryImage;
use App\Entity\TrainingQuestion;
use App\Entity\TrainingQuiz;
use App\Entity\TrainingClientAnswer;
use App\Form\TrainingClientAnswerType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

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
    //  $inscriptionD = $competition->getInscriptionDate()->format('d/m/Y');
      $indivD = $competition->getIndividualDate()->format('d/m/Y');
      $competSD = $competition->getCompetitionStartDate()->format('d/m/Y');
      $competED = $competition->getCompetitionEndDate()->format('d/m/Y');
      $inscriptionStartDate = $competition->getCompetitionStartDate()->format('d/m/Y');
      $inscriptionEndDate = $competition->getInscriptionEndDate()->format('d/m/Y');

        return $this->render('homepage.html.twig', [
            'controller_name'      => 'PublicController',
            'competition'          => $competition,
            'indivD'               => $indivD,
            'competSD'             => $competSD,
            'competED'             => $competED,
            'inscriptionEndDate'   => $inscriptionEndDate,
            'inscriptionStartDate' => $inscriptionStartDate,
        ]);
    }

    /**
     * @Route("/aboutUs", name="aboutus")
     */
    public function aboutUs(){
      $manager = $this->getDoctrine()->getManager();
      $informations = $manager->getRepository(Informations::class)->findAll()[0];


      return $this->render('public/aboutUs.html.twig', [
        'informations' => $informations,
      ]);
    }

    /**
    * @Route("/enroll", name="enroll")
    */
    public function enroll() {

      return $this->render('public/enroll.html.twig', [

      ]);
    }

    /**
    * @Route("/keep_me_updated", name="updated")
    */
    public function keepMeUpdated() {

      return $this->render('public/updated.html.twig', [

      ]);
    }

    /**
     * @Route("/regulation", name="regulation")
     */
    public function regulation(){
      $manager = $this->getDoctrine()->getManager();
      $regulation = $manager->getRepository(Regulation::class)->findAll()[0];

      return $this->render('public/regulation.html.twig', [
        'regulation' => $regulation,
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
     * @Route("/img_gallery", name="img_gallery")
     */
    public function img_gallery(){
      $manager = $this->getDoctrine()->getManager();
      $images = $manager->getRepository(GalleryImage::class)->findAll();

      $years = array();
      foreach ($images as $image) {
        if (! in_array($image->getImageYear(), $years))
          $years[] = $image->getImageYear();
      }
      rsort($years);
      $count = count($years);
      $images_array = array();

      for ($i=0; $i < $count; $i++) {
        $tmp_array = array();
        foreach ($images as $image) {
          if ($image->getImageYear() == $years[$i])
            $tmp_array[] = $image;
        }
        $images_array[] = $tmp_array;
      }

      $max_index = $count - 1;
      return $this->render('public/img_gallery.html.twig', [
        'informations' => 'informations',
        'max_index'        => $max_index,
        'images_array' => $images_array,
        'years' => $years,
      ]);
    }


    /**
     * @Route("/quiz_gallery", name="quiz_gallery")
     */
    public function quiz_gallery(){
      $manager = $this->getDoctrine()->getManager();
      $p_quizs = $manager->getRepository(PreviousQuiz::class)->findAll();
      $school = array("Primaire", "Secondaire");
      $difficulty = array("1e/2e", "3e/4e", "5e/6e");
      $primary_quizs = array();
      $secondary_quizs = array();

      foreach ($p_quizs as $quiz) {
        if ($quiz->getSchool() == 1)
          $primary_quizs[] = $quiz;
        if ($quiz->getSchool() == 2)
          $secondary_quizs[] = $quiz;
      }

      return $this->render('public/quiz_gallery.html.twig', [
        'informations'       => 'informations',
        'primary_quizs'      => $primary_quizs,
        'secondary_quizs'   => $secondary_quizs,
        'school'             => $school,
        'difficulty'         => $difficulty,
      ]);
    }

    /**
     * @Route("/training", name="training_choice")
     */
    public function trainingChoice(){
      $manager = $this->getDoctrine()->getManager();

      $quizs = $manager->getRepository(TrainingQuiz::class)->findAll();
      $primary_quiz = array();
      $secondary_quiz = array();

      foreach ($quizs as $quiz) {
        $school_number = $quiz->getSchool();
          if ($school_number == 1) {
            $primary_quiz[] = $quiz;
          }
          elseif ($school_number == 2) {
            $secondary_quiz[] = $quiz;
          }
      }
      $difficulty = array("1e/2e", "3e/4e", "5e/6e");


      return $this->render('public/training_choice.html.twig', [
        'primary_quiz'   => $primary_quiz,
        'secondary_quiz' => $secondary_quiz,
        'difficulty'     => $difficulty,
      ]);
    }

    /**
     * @Route("/training/{id}", name="training")
     */
    public function training(Request $request, TrainingQuiz $quiz){
      $formFactory = $this->get('form.factory');
      $questions = $quiz->getQuestions();
      $clientAnswers = new ArrayCollection();

      foreach ($questions as $question) {
        $clientAnswer = new TrainingClientAnswer();
        $clientAnswer->setQuestion($question);
        $clientAnswers->add($clientAnswer);
      }

      $reponses = array(
        'client_answers'  => $clientAnswers,
      );


      $form = $formFactory
        ->createBuilder(FormType::class, $reponses)
        ->add('client_answers', CollectionType::class, array(
          'label'      => false,
          'entry_type' => TrainingClientAnswerType::class))
        ->add('send', SubmitType::class, array(
          'label' => "Envoyer",
          'attr' => array('class' => 'btn-base btn-confirm')
        ))
        ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

        }

      return $this->render('public/training.html.twig', [
        'quiz'  => $quiz,
        'form'  => $form->createView(),
        'client_answers' => $clientAnswers,
        'reponses' => $reponses,
      ]);
    }

}
