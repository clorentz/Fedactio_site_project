<?php
// src/EventListener/GalleryImageListener.php
namespace App\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use App\Entity\GalleryImage;
use Symfony\Component\Filesystem\Filesystem;

class GalleryImageListener
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

    // only act on some "GalleryImage" entity
    if (!$entity instanceof GalleryImage) {
      return;
    }

    $fileSystem = new Filesystem();
    $entityManager = $args->getEntityManager();

    // On entity removal, remove the linked image from it's directory to not overload the uploads directory
    $fileSystem->remove($this->getTargetDirectory() . '/' . basename($entity->getImage()));
  }
}
