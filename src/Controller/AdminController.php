<?php

namespace App\Controller;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entity\TrainingQuestion;
use App\Entity\Informations;
use App\Entity\Competition;
use App\Entity\TrainingQuiz;
use App\Entity\GalleryImage;
use App\Entity\PreviousQuiz;
use App\Entity\Regulation;
use App\Form\TrainingQuizType;
use App\Form\CompetitionType;
use App\Form\GalleryImageType;
use App\Form\PreviousQuizType;
use App\Form\RegulationType;
use App\Form\InformationsType;
use App\Service\QuestionImageUploader;
use App\Service\AnswerImageUploader;
use App\Service\GalleryImageUploader;
use App\Service\PreviousQuizUploader;

class AdminController extends Controller
{
  /**
   * @Route("/admin/", name="admin_homepage")
   */
  public function adminHomepage(){

    return $this->render('admin_homepage.html.twig', [

    ]);
  }


    /**
     * @Route("/admin/competition", name="admin_competition")
     */
    public function managementCompetition(Request $request)
    {
      $formFactory = $this->get('form.factory');
      $manager = $this->getDoctrine()->getManager();
      $competition = $manager->getRepository(Competition::class)->findAll()[0];

      // Form creation for the Competition
      $form = $formFactory->createBuilder(CompetitionType::class, $competition)->getForm();

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {

        // Persist the changes to the database if the form is valid, and adds a message
        $manager->flush();
        $this->addFlash("success", "Quiz modifié.");
      }

        return $this->render('admin/admin_competition.html.twig', [
            'form'   => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/aboutUs", name="admin_aboutus")
     */
    public function managementAboutUs(Request $request){
      $manager = $this->getDoctrine()->getManager();
      $formFactory = $this->get('form.factory');
      $informations = $manager->getRepository(Informations::class)->findAll()[0];


      // Save of the items before form validation (for removal purposes)
      $originalInformationsItems = new ArrayCollection();
      foreach ($informations->getItems() as $item) {
        $originalInformationsItems->add($item);
      }

      // Form creation for the informations
      $form = $formFactory->createBuilder(InformationsType::class, $informations)->getForm();

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()){
        $modif = true;
        foreach ($originalInformationsItems as $item) {
          // Tests an item has been removed by the Javascript and removes it if so, after adding a success message
          if (false === $informations->getItems()->contains($item)){
            $manager->remove($item);
            $this->addFlash("success", "Item successfuly deleted.");
            $manager->flush();
            $modif = false;
          }
        }

        // If there has been a modification (except from the remove), add a success message
        if ($modif){
          $this->addFlash("success", "Modifications saved.");
          $manager->flush();
        }
      }

      return $this->render('admin/admin_aboutUs.html.twig', [
        'informations' => 'informations',
        'form'         => $form->createView(),
      ]);
    }

    /**
     * @Route("/admin/regulation", name="admin_regulation")
     */
    public function managementRegulation(Request $request){
      $manager = $this->getDoctrine()->getManager();
      $formFactory = $this->get('form.factory');

      $regulation = $manager->getRepository(Regulation::class)->findAll()[0];

      // Save of the original items for deletion purposes
      $originalRegulationItems = new ArrayCollection();
      foreach ($regulation->getItems() as $item) {
        $originalRegulationItems->add($item);
      }

      // Creation of the Regulation form
      $form = $formFactory->createBuilder(RegulationType::class, $regulation)->getForm();

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {

        foreach ($originalRegulationItems as $item) {
          // Tests an item has been removed by the Javascript and removes it if so, after adding a success message
          if (false === $regulation->getItems()->contains($item)){
            $manager->remove($item);
            $this->addFlash("success", "Item successfuly deleted.");
            $manager->flush();
          }
        }

        // If there has been a modification (except from the remove), add a success message
        $this->addFlash("success", "Modifications saved.");
        $manager->flush();
      }

      return $this->render('admin/admin_regulation.html.twig', [
        'regulation'   => $regulation,
        'form'         => $form->createView(),
      ]);
    }

    /**
     * @Route("/admin/gallery", name="admin_gallery")
     */
    public function managementGallery(Request $request, GalleryImageUploader $img_uploader, PreviousQuizUploader $quiz_uploader){
      $formFactory = $this->get('form.factory');
      $manager = $this->getDoctrine()->getManager();

      // Creating a form to add a new image if wanted to
      $new_img = new GalleryImage();
      $img_form = $formFactory->createBuilder(GalleryImageType::class, $new_img, array(
        'add' => true,
      ))->getForm();

      // Creating a form to add a new quiz if wanted to
      $new_quiz = new PreviousQuiz();
      $quiz_form = $formFactory->createBuilder(PreviousQuizType::class, $new_quiz, array(
        'add'    => true,
      ))->getForm();

      $img_form->handleRequest($request);
      // Form handling for the gallery images
      if ($img_form->isSubmitted() && $img_form->isValid()) {

        // File uploading part
        $file = $new_img->getImage();
        if ($file != null) {
          $new_img->setName($file->getClientOriginalName());
          $fileName = $img_uploader->upload($file); // The uploader will hash the name so the file won't be used by third parties

          $new_img->setImage($fileName);
        }


        $manager->persist($new_img); // Persisting of the entity in the database
        $manager->flush();
        $this->addFlash("success", "Image added.");
      }



      // Form handling for the past quizs
      $quiz_form->handleRequest($request);
      if ($quiz_form->isSubmitted() && $quiz_form->isValid()) {

        // File uploading part
        $file = $new_quiz->getQuiz();
        if ($file != null) {
          $fileName = $quiz_uploader->upload($file); // The uploader will hash the name so the file won't be used by third parties

          $new_quiz->setQuiz($fileName);
        }

        $manager->persist($new_quiz); // Persisting of the entity in the database
        $manager->flush();
        $this->addFlash("success", "Quiz added.");
      }

      $images = $manager->getRepository(GalleryImage::class)->findAll();
      $p_quiz = $manager->getRepository(PreviousQuiz::class)->findAll();

      return $this->render('admin/admin_gallery.html.twig', [
        'images'     => $images,
        'p_quiz'     => $p_quiz,
        'img_form'   => $img_form->createView(),
        'quiz_form'  => $quiz_form->createView(),
      ]);
    }

    /**
    * @Route("/admin/quiz/{id}", name="admin_quiz")
    */
    public function showQuiz(PreviousQuiz $quiz, Request $request){
      // this method will be to modify or delete a quiz
      $formFactory = $this->get('form.factory');
      $manager = $this->getDoctrine()->getManager();
      $bname = $quiz->getQuiz();

      // So the form will understand that the file is already there
      if ($quiz->getQuiz() != null)
        $quiz->setQuiz(
          new File($this->getParameter('previous_quiz_directory').'/'.basename($quiz->getQuiz()))
        );

      // Creation of the modify form for the quiz
      $quiz_form = $formFactory->createBuilder(PreviousQuizType::class, $quiz, array(
        'add'    => false,
      ))->getForm();

      // Form handling
      $quiz_form->handleRequest($request);
      if ($quiz_form->isSubmitted() && $quiz_form->isValid()) {

        // If the form is valid, persist the changes to the database and add a message
        $manager->flush();
        $this->addFlash("success", "Quiz informations modified.");
      }

      // difficulty array to get the correct level of difficulty instead of an integer
      $difficulty = array("1e/2e", "3e/4e", "5e/6e");

      return $this->render('admin/admin_quiz.html.twig', [
          'quiz'       => $quiz,
          'form'       => $quiz_form->createView(),
          'bname'      => $bname,
          'difficulty' => $difficulty,
      ]);
    }

    /**
    * @Route("/admin/quiz_delete/{id}", name="admin_quiz_delete")
    */
    public function deleteQuiz(PreviousQuiz $quiz){
      $manager = $this->getDoctrine()->getManager();

      // This method deletes the quiz entity and redirects to the gallery without rendering any page
      // The file uploaded is deleted in the PreviousQuizListener
      $manager->remove($quiz);
      $manager->flush();
      $this->addFlash("success", "Quiz deleted.");

      return $this->redirectToRoute('admin_gallery');
    }


    /**
    * @Route("/admin/gallery_image/{id}", name="admin_gallery_image")
    */
    public function showImage(GalleryImage $image, Request $request){
      $formFactory = $this->get('form.factory');
      $manager = $this->getDoctrine()->getManager();
      $bname = $image->getImage();

      // So the form will understand that the file is already there
      if ($image->getImage() != null)
        $image->setImage(
          new File($this->getParameter('gallery_images_directory').'/'.basename($image->getImage()))
        );


      $image_form = $formFactory->createBuilder(GalleryImageType::class, $image, array(
        'add'    => false,
      ))->getForm();

      // Form handling for the image modification
      $image_form->handleRequest($request);
      if ($image_form->isSubmitted() && $image_form->isValid()) {

        // If the form is valid, persist the changes to the database and add a message
        $manager->flush();
        $this->addFlash("success", "Image informations modified.");
      }

      return $this->render('admin/admin_gallery_image.html.twig', [
          'image'  => $image,
          'form'  => $image_form->createView(),
          'bname' => $bname,
      ]);
    }

    /**
    * @Route("/admin/gallery_image_delete/{id}", name="admin_gallery_image_delete")
    */
    public function deleteImage(GalleryImage $image){
      $manager = $this->getDoctrine()->getManager();

      // This method deletes the quiz entity and redirects to the gallery without rendering any page
      // The file uploaded is deleted in the GalleryImageListener
      $manager->remove($image);
      $manager->flush();
      $this->addFlash("success", "Image deleted.");

      return $this->redirectToRoute('admin_gallery');
    }

    /**
    * @Route("admin/training_choice", name="admin_training_choice")
    */
    public function choiceTraining(){
      $manager = $this->getDoctrine()->getManager();

      // Selects all the quizs in the database
      $quizs = $manager->getRepository(TrainingQuiz::class)->findAll();
      $primary_quiz = array();
      $secondary_quiz = array();

      // Adds the quiz to an array depending on the school
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

      return $this->render('admin/admin_training_choice.html.twig', [
        'primary_quiz'   => $primary_quiz,
        'secondary_quiz' => $secondary_quiz,
        'difficulty'     => $difficulty,
      ]);

    }

    /**
    * @Route("admin/training", name="admin_new_training")
    */
    public function createTraining()
    {
      // This function will just create a new training with basic values, persist it to the databse then redirect to the quiz modification page
      $manager = $this->getDoctrine()->getManager();
      $new_quiz = new TrainingQuiz();
      $new_quiz->setDifficulty(1);
      $new_quiz->setSchool(1);
      $manager->persist($new_quiz);
      $manager->flush();
      $this->addFlash("success", "Quiz successfuly added.");

      return $this->redirectToRoute('admin_training', array('id' => $new_quiz->getId()));
    }

    /**
    * @Route("admin/training_delete/{id}", name="admin_delete_training")
    */
    public function deleteTraining(TrainingQuiz $quiz)
    {
      // This function will delete the quiz and redirect to the training choice page
      $manager = $this->getDoctrine()->getManager();
      $manager->remove($quiz);
      $manager->flush();
      $this->addFlash("success", "Quiz successfuly deleted.");

      return $this->redirectToRoute('admin_training_choice');
    }

    /**
     * @Route("/admin/training/{id}", name="admin_training")
     */
    public function managementTraining(TrainingQuiz $quiz, Request $request, QuestionImageUploader $questionUploader, AnswerImageUploader $answerUploader){
      $formFactory = $this->get('form.factory');
      $manager = $this->getDoctrine()->getManager();
      $questions = $quiz->getQuestions();
      $originalQuestions = new ArrayCollection();
      $originalAnswers = new ArrayCollection();
      $image_locations = array();

      foreach ($questions as $question){
        $image_location = basename($question->getImage()); // to make sure to have just the name and no path
        // Save the questions in case one is deleted by the JS
        $originalQuestions[] = $question;

        foreach ($question->getAnswers() as $answer) {
          // Save the answers in case one is deleted by the JS
          $originalAnswers[] = $answer;

          // So the form will understand that the image is already there if it is the case
          if ($answer->getImage() != null){
            $bname = basename($answer->getImage());
            $answer->setImage(
              new File($this->getParameter('answer_images_directory').'/'.$bname)
            );
          }
        }

        // So the form will understand that the image is already there if it is the case
        if ($question->getImage() != null)
          $question->setImage(
            new File($this->getParameter('question_images_directory').'/'.$image_location)
          );

        $image_locations[] = $image_location;
      }

      // Creation of the quiz form
      $form = $formFactory->createBuilder(TrainingQuizType::class, $quiz)->getForm();

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $modif = true;

        // Deletion in the databse of the entitities deleted by the user and removed by the JS
        foreach ($originalQuestions as $question) {
          if (false === $quiz->getQuestions()->contains($question)){
            $manager->remove($question);
            $this->addFlash("success", "Question successfuly deleted.");
            $manager->flush();
            $modif = false;
          }
        }

        $newAnswers = new ArrayCollection();
        foreach ($quiz->getQuestions() as $question) {
          foreach ($question->getAnswers() as $answer) {
            $newAnswers[] = $answer;
          }
        }
        foreach ($originalAnswers as $answer) {
            if (false === $newAnswers->contains($answer) ){
              $manager->remove($answer);
              $this->addFlash("success", "Answer successfuly deleted.");
              $manager->flush();
              $modif = false;
          }
        }
        foreach ($questions as $question) {

          // File uploading part
          $file = $question->getImage();
          if ($file != null) {
            $fileName = $questionUploader->upload($file); // The uploader will hash the name so the file won't be used by third parties

            $question->setImage($fileName);
        }
        foreach ($question->getAnswers() as $answer) {
          // File uploading part
          $answer_file = $answer->getImage();

          if ($answer_file != null) {
            $fileName = $answerUploader->upload($answer_file); // The uploader will hash the name so the file won't be used by third parties
            $answer->setImage($fileName);
          }
        }
      }

      // If there was no deletion, the modification message will be printed
      if ($modif){
        $manager->persist($question);
        $manager->flush();
        $this->addFlash("success", "Quiz modified.");
      }

      }

    return $this->render('admin/admin_training.html.twig', [
      'informations'      => 'informations',
      'form'              => $form->createView(),
      'questions'         => $questions,
      'quiz'              => $quiz,
      'image_locations'    => $image_locations,
    ]);
  }
}
