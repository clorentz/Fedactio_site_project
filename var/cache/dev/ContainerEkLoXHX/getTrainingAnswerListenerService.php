<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\EventListener\TrainingAnswerListener' shared autowired service.

include_once $this->targetDirs[3].'/src/EventListener/TrainingAnswerListener.php';

return $this->services['App\EventListener\TrainingAnswerListener'] = new \App\EventListener\TrainingAnswerListener(($this->targetDirs[3].'/public/uploads/answer_images'));
