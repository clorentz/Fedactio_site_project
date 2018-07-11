<?php
// src/Form/TrainingAnswerType.php
namespace App\Form;

use App\Entity\TrainingAnswer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class TrainingAnswerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

      $builder->add('answer', TextType::class, array(
        'required' => true,
        'label'    => false,
      ));
      $builder->add('isTrue',  CheckboxType::class, array(
        'label'    => 'Is this question the correct one?',
        'required' => false,
      ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => TrainingAnswer::class,
        ));
    }
}
