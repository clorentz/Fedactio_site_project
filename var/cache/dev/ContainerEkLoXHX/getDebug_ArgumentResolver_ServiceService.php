<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\AdminController::deleteImage' => function () {
    return ($this->privates['.service_locator.Ks9o1Ek'] ?? $this->load('get_ServiceLocator_Ks9o1EkService.php'));
}, 'App\\Controller\\AdminController::deleteQuiz' => function () {
    return ($this->privates['.service_locator.J1QHskN'] ?? $this->load('get_ServiceLocator_J1QHskNService.php'));
}, 'App\\Controller\\AdminController::deleteTraining' => function () {
    return ($this->privates['.service_locator.spgHdID'] ?? $this->load('get_ServiceLocator_SpgHdIDService.php'));
}, 'App\\Controller\\AdminController::managementGallery' => function () {
    return ($this->privates['.service_locator.RQ2iiYW'] ?? $this->load('get_ServiceLocator_RQ2iiYWService.php'));
}, 'App\\Controller\\AdminController::managementTraining' => function () {
    return ($this->privates['.service_locator.uH.2OTH'] ?? $this->load('get_ServiceLocator_UH_2OTHService.php'));
}, 'App\\Controller\\AdminController::showImage' => function () {
    return ($this->privates['.service_locator.Ks9o1Ek'] ?? $this->load('get_ServiceLocator_Ks9o1EkService.php'));
}, 'App\\Controller\\AdminController::showQuiz' => function () {
    return ($this->privates['.service_locator.J1QHskN'] ?? $this->load('get_ServiceLocator_J1QHskNService.php'));
}, 'App\\Controller\\PublicController::keepMeUpdated' => function () {
    return ($this->privates['.service_locator.3FFBWiy'] ?? $this->load('get_ServiceLocator_3FFBWiyService.php'));
}, 'App\\Controller\\PublicController::training' => function () {
    return ($this->privates['.service_locator.spgHdID'] ?? $this->load('get_ServiceLocator_SpgHdIDService.php'));
}, 'App\\Controller\\PublicController::trainingCorrection' => function () {
    return ($this->privates['.service_locator.spgHdID'] ?? $this->load('get_ServiceLocator_SpgHdIDService.php'));
}, 'App\\Controller\\SecurityController::login' => function () {
    return ($this->privates['.service_locator.ypl2DZZ'] ?? $this->load('get_ServiceLocator_Ypl2DZZService.php'));
}, 'App\\Controller\\AdminController:deleteImage' => function () {
    return ($this->privates['.service_locator.Ks9o1Ek'] ?? $this->load('get_ServiceLocator_Ks9o1EkService.php'));
}, 'App\\Controller\\AdminController:deleteQuiz' => function () {
    return ($this->privates['.service_locator.J1QHskN'] ?? $this->load('get_ServiceLocator_J1QHskNService.php'));
}, 'App\\Controller\\AdminController:deleteTraining' => function () {
    return ($this->privates['.service_locator.spgHdID'] ?? $this->load('get_ServiceLocator_SpgHdIDService.php'));
}, 'App\\Controller\\AdminController:managementGallery' => function () {
    return ($this->privates['.service_locator.RQ2iiYW'] ?? $this->load('get_ServiceLocator_RQ2iiYWService.php'));
}, 'App\\Controller\\AdminController:managementTraining' => function () {
    return ($this->privates['.service_locator.uH.2OTH'] ?? $this->load('get_ServiceLocator_UH_2OTHService.php'));
}, 'App\\Controller\\AdminController:showImage' => function () {
    return ($this->privates['.service_locator.Ks9o1Ek'] ?? $this->load('get_ServiceLocator_Ks9o1EkService.php'));
}, 'App\\Controller\\AdminController:showQuiz' => function () {
    return ($this->privates['.service_locator.J1QHskN'] ?? $this->load('get_ServiceLocator_J1QHskNService.php'));
}, 'App\\Controller\\PublicController:keepMeUpdated' => function () {
    return ($this->privates['.service_locator.3FFBWiy'] ?? $this->load('get_ServiceLocator_3FFBWiyService.php'));
}, 'App\\Controller\\PublicController:training' => function () {
    return ($this->privates['.service_locator.spgHdID'] ?? $this->load('get_ServiceLocator_SpgHdIDService.php'));
}, 'App\\Controller\\PublicController:trainingCorrection' => function () {
    return ($this->privates['.service_locator.spgHdID'] ?? $this->load('get_ServiceLocator_SpgHdIDService.php'));
}, 'App\\Controller\\SecurityController:login' => function () {
    return ($this->privates['.service_locator.ypl2DZZ'] ?? $this->load('get_ServiceLocator_Ypl2DZZService.php'));
}))), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
