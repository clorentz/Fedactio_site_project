<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.J1QHskN' shared service.

return $this->privates['.service_locator.J1QHskN'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('quiz' => function (): \App\Entity\PreviousQuiz {
    return ($this->privates['.errored..service_locator.J1QHskN.App\Entity\PreviousQuiz'] ?? $this->load('getPreviousQuizService.php'));
}));
