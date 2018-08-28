<?php
// src/EventListener/TrainingQuestionListener.php
namespace App\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use App\Entity\TrainingQuestion;
use Symfony\Component\Filesystem\Filesystem;

class TrainingQuestionListener
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

    // only act on some "TrainingQuestion" entity
    if (!$entity instanceof TrainingQuestion) {
      return;
    }

    if (! is_null($entity->getImage()) ){
      $fileSystem = new Filesystem();
      $entityManager = $args->getEntityManager();

      // On entity removal, remove the linked image from it's directory to not overload the uploads directory
      $fileSystem->remove($this->getTargetDirectory() . '/' . basename($entity->getImage()));
    }
  }
}
