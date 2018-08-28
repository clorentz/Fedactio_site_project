<?php
// src/Form/TrainingQuizType.php
namespace App\Form;

use App\Entity\TrainingQuiz;
use App\Entity\TrainingQuestion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TrainingQuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

      $builder->add('difficulty', ChoiceType::class, array(
        'choices'  => array(
          '1e/2nd' => 1,
          '3e/4e' => 2,
          '5e/6e' => 3,
        )
      ));
      $builder->add('school', ChoiceType::class, array(
          'choices' => array(
            'Primaire'   => 1,
            'Secondaire' => 2,
          )
      ));
      $builder->add('questions', CollectionType::class, array(
        'entry_type'   => TrainingQuestionType::class,
        'entry_options'=> array( 'label' => false, ),
        'allow_delete' => true,
        'allow_add'    => true,
        'label'        => false,
        'by_reference' => false,
      ));
      $builder->add('send', SubmitType::class, array(
        'label' => "Enregistrer",
        'attr'  => array('class' => 'btn-base btn-confirm')
      ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => TrainingQuiz::class,
        ));
    }
}
