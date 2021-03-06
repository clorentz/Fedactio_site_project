<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistry.php';

return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Form\\CompetitionType' => function () {
    return ($this->privates['App\Form\CompetitionType'] ?? $this->privates['App\Form\CompetitionType'] = new \App\Form\CompetitionType());
}, 'App\\Form\\GalleryImageType' => function () {
    return ($this->privates['App\Form\GalleryImageType'] ?? $this->privates['App\Form\GalleryImageType'] = new \App\Form\GalleryImageType());
}, 'App\\Form\\InformationsItemType' => function () {
    return ($this->privates['App\Form\InformationsItemType'] ?? $this->privates['App\Form\InformationsItemType'] = new \App\Form\InformationsItemType());
}, 'App\\Form\\InformationsType' => function () {
    return ($this->privates['App\Form\InformationsType'] ?? $this->privates['App\Form\InformationsType'] = new \App\Form\InformationsType());
}, 'App\\Form\\PreviousQuizType' => function () {
    return ($this->privates['App\Form\PreviousQuizType'] ?? $this->privates['App\Form\PreviousQuizType'] = new \App\Form\PreviousQuizType());
}, 'App\\Form\\RegulationItemType' => function () {
    return ($this->privates['App\Form\RegulationItemType'] ?? $this->privates['App\Form\RegulationItemType'] = new \App\Form\RegulationItemType());
}, 'App\\Form\\RegulationType' => function () {
    return ($this->privates['App\Form\RegulationType'] ?? $this->privates['App\Form\RegulationType'] = new \App\Form\RegulationType());
}, 'App\\Form\\TrainingAnswerType' => function () {
    return ($this->privates['App\Form\TrainingAnswerType'] ?? $this->privates['App\Form\TrainingAnswerType'] = new \App\Form\TrainingAnswerType());
}, 'App\\Form\\TrainingClientAnswerType' => function () {
    return ($this->privates['App\Form\TrainingClientAnswerType'] ?? $this->privates['App\Form\TrainingClientAnswerType'] = new \App\Form\TrainingClientAnswerType('/fedactio_pangea/public/uploads/answer_images'));
}, 'App\\Form\\TrainingQuestionType' => function () {
    return ($this->privates['App\Form\TrainingQuestionType'] ?? $this->privates['App\Form\TrainingQuestionType'] = new \App\Form\TrainingQuestionType());
}, 'App\\Form\\TrainingQuizType' => function () {
    return ($this->privates['App\Form\TrainingQuizType'] ?? $this->privates['App\Form\TrainingQuizType'] = new \App\Form\TrainingQuizType());
}, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
    return ($this->privates['form.type.entity'] ?? $this->load('getForm_Type_EntityService.php'));
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
    return ($this->privates['form.type.choice'] ?? $this->load('getForm_Type_ChoiceService.php'));
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
    return ($this->privates['form.type.form'] ?? $this->load('getForm_Type_FormService.php'));
})), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
    yield 1 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
    yield 2 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load('getForm_TypeExtension_Upload_ValidatorService.php'));
    yield 3 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
    yield 4 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->load('getForm_TypeExtension_Form_DataCollectorService.php'));
}, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? $this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension());
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? $this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension());
}, 1)), new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
    yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
}, 2))), ($this->privates['form.resolved_type_factory'] ?? $this->load('getForm_ResolvedTypeFactoryService.php')));
