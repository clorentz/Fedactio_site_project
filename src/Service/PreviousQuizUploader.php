<?php

// src/Service/PreviousQuizUploader.php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class PreviousQuizUploader
{
    private $targetDirectory; // given in parameter in config/services.yaml

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
