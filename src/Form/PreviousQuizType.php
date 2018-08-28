<?php
// src/Form/PreviousQuizType.php
namespace App\Form;

use App\Entity\PreviousQuiz;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PreviousQuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder->add('school', ChoiceType::class, array(
        'choices'  => array(
          'Primaire' => 1,
          'Secondaire' => 2,
        ),
        'label'    => 'École',
      ));
      $builder->add('difficulty', ChoiceType::class, array(
        'choices'  => array(
          '1e/2nd' => 1,
          '3e/4e'  => 2,
          '5e/6e'  => 3,
        ),
        'label'    => 'Difficulté',
      ));
      $builder->add('yearOfQuiz', IntegerType::class, array(
        'label'     => 'Année de publicationdu quiz'
      ));
      if ($options['add']) {
        $builder->add('quiz', FileType::class, array(
          'label'     => 'Fichier du quiz (fichier PDF)',
          'required'  => false,
        ));
      }
      $builder->add('send', SubmitType::class, array(
        'label' => "Enregistrer",
        'attr'  => array('class' => 'btn-base btn-confirm')
      ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'      => PreviousQuiz::class,
            'csrf_protection' => false,
        ));
        $resolver->setRequired(array(
          'add',
        ));
    }
}
