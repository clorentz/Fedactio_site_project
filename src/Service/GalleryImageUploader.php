<?php

// src/Service/GalleryImageUploader.php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class GalleryImageUploader
{
    private $targetDirectory;// given in parameter in config/services.yaml

    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }

    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($this->getTargetDirectory(), $fileName);

        return $fileName;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}
