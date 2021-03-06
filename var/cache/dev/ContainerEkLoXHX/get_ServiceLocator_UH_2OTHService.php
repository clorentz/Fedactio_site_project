<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.uH.2OTH' shared service.

return $this->privates['.service_locator.uH.2OTH'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('answerUploader' => function (): \App\Service\AnswerImageUploader {
    return ($this->privates['App\Service\AnswerImageUploader'] ?? $this->privates['App\Service\AnswerImageUploader'] = new \App\Service\AnswerImageUploader(($this->targetDirs[3].'/public/uploads/answer_images')));
}, 'questionUploader' => function (): \App\Service\QuestionImageUploader {
    return ($this->privates['App\Service\QuestionImageUploader'] ?? $this->privates['App\Service\QuestionImageUploader'] = new \App\Service\QuestionImageUploader(($this->targetDirs[3].'/public/uploads/question_images')));
}, 'quiz' => function (): \App\Entity\TrainingQuiz {
    return ($this->privates['.errored..service_locator.uH.2OTH.App\Entity\TrainingQuiz'] ?? $this->load('getTrainingQuiz2Service.php'));
}));
