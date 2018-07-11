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

      $form = $formFactory->createBuilder(CompetitionType::class, $competition)->getForm();

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {

        $manager->flush();
        $this->addFlash("success", "Quiz modified.");
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
      $originalInformationsItems = new ArrayCollection();
      foreach ($informations->getItems() as $item) {
        $originalInformationsItems->add($item);
      }


      $form = $formFactory->createBuilder(InformationsType::class, $informations)->getForm();

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()){
        $modif = true;
        foreach ($originalInformationsItems as $item) {
          if (false === $informations->getItems()->contains($item)){
            $manager->remove($item);
            $this->addFlash("success", "Item successfuly deleted.");
            $manager->flush();
            $modif = false;
          }
        }

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
      $originalRegulationItems = new ArrayCollection();
      foreach ($regulation->getItems() as $item) {
        $originalRegulationItems->add($item);
      }

      $form = $formFactory->createBuilder(RegulationType::class, $regulation)->getForm();

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        foreach ($originalRegulationItems as $item) {
          if (false === $regulation->getItems()->contains($item)){
            $manager->remove($item);
            $this->addFlash("success", "Item successfuly deleted.");
            $manager->flush();
          }
        }

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

      $new_img = new GalleryImage();
      $img_form = $formFactory->createBuilder(GalleryImageType::class, $new_img, array(
        'add' => true,
      ))->getForm();

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
      $formFactory = $this->get('form.factory');
      $manager = $this->getDoctrine()->getManager();
      $bname = $quiz->getQuiz();

      // So the form will understand that the file is already there
      if ($quiz->getQuiz() != null)
        $quiz->setQuiz(
          new File($this->getParameter('previous_quiz_directory').'/'.basename($quiz->getQuiz()))
        );


      $quiz_form = $formFactory->createBuilder(PreviousQuizType::class, $quiz, array(
        'add'    => false,
      ))->getForm();

      // Form handling for the past quizs
      $quiz_form->handleRequest($request);
      if ($quiz_form->isSubmitted() && $quiz_form->isValid()) {

        $manager->flush();
        $this->addFlash("success", "Quiz informations modified.");
      }

      return $this->render('admin/admin_quiz.html.twig', [
          'quiz'  => $quiz,
          'form'  => $quiz_form->createView(),
          'bname' => $bname,
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

      // Form handling for the past quizs
      $image_form->handleRequest($request);
      if ($image_form->isSubmitted() && $image_form->isValid()) {

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
     * @Route("/admin/training", name="admin_training")
     */
    public function managementTraining(Request $request, QuestionImageUploader $fileUploader){
      $formFactory = $this->get('form.factory');
      $manager = $this->getDoctrine()->getManager();
      $questions = $manager->getRepository(TrainingQuestion::class)->findAll();
      $quiz = $manager->getRepository(TrainingQuiz::class)->findAll()[0];
      $originalQuestions = new ArrayCollection();
      $originalAnswers = new ArrayCollection();

      foreach ($questions as $question){
        $image_location = basename($question->getImage());
        $originalQuestions[] = $question;
        foreach ($question->getAnswers() as $answer) {
          $originalAnswers[] = $answer;
        }

        // So the form will understand that the image is already there if it is the case
        if ($question->getImage() != null)
          $question->setImage(
            new File($this->getParameter('question_images_directory').'/'.$image_location)
          );
      }

      $form = $formFactory->createBuilder(TrainingQuizType::class, $quiz)->getForm();


      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $modif = true;

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
            $fileName = $fileUploader->upload($file); // The uploader will hash the name so the file won't be used by third parties

            $question->setImage($fileName);
        }
      }

      if ($modif){        
        // $manager->persist($question);
        $manager->flush();
        $this->addFlash("success", "Quiz modified.");
      }

      }

    return $this->render('admin/admin_training.html.twig', [
      'informations'      => 'informations',
      'form'              => $form->createView(),
      'questions'         => $questions,
      'quiz'              => $quiz,
      'image_location'    => $image_location,
    ]);
  }
}
