<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\PreviousQuizUploader' shared autowired service.

include_once $this->targetDirs[3].'/src/Service/PreviousQuizUploader.php';

return $this->privates['App\Service\PreviousQuizUploader'] = new \App\Service\PreviousQuizUploader(($this->targetDirs[3].'/public/uploads/previous_quiz'));