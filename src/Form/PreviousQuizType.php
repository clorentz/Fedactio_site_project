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
      $builder->add('difficulty', ChoiceType::class, array(
        'choices'  => array(
          '1st Grade' => 1,
          '2nd Grade' => 2,
          '3rd Grade' => 3,
        )
      ));
      $builder->add('yearOfQuiz', IntegerType::class, array(
        'label'     => 'Year of Quiz publication'
      ));
      if ($options['add']) {
        $builder->add('quiz', FileType::class, array(
          'label'     => 'Quiz file (PDF file)',
          'required'  => false,
        ));
      }
      $builder->add('send', SubmitType::class, array(
        'label' => "Validate",
        'attr'  => array('class' => 'btn-base btn-confirm')
      ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'      => PreviousQuiz::class,
          //  'csrf_protection' => false,
        ));
        $resolver->setRequired(array(
          'add',
        ));
    }
}
