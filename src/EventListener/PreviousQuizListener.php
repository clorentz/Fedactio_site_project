<?php
// src/EventListener/PreviousQuizListener.php
namespace App\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use App\Entity\PreviousQuiz;
use Symfony\Component\Filesystem\Filesystem;

class PreviousQuizListener
{
  private $targetDirectory;

  public function __construct($targetDirectory)
  {
      $this->targetDirectory = $targetDirectory;
  }

  public function getTargetDirectory()
  {
      return $this->targetDirectory;
  }

  public function preRemove(LifecycleEventArgs $args)
  {
    $entity = $args->getEntity();

    // only act on some "PreviousQuiz" entity
    if (!$entity instanceof PreviousQuiz) {
      return;
    }

    $fileSystem = new Filesystem();
    $entityManager = $args->getEntityManager();

    $fileSystem->remove($this->getTargetDirectory() . '/' . basename($entity->getQuiz()));  
  }
}
