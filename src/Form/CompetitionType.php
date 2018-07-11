<?php
// src/Form/CompetitionType.php
namespace App\Form;

use App\Entity\Competition;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CompetitionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

      $builder->add('inscriptionDate', DateType::class, array(
        'widget'       => 'choice',
      ));
      $builder->add('individualDate', DateType::class, array(
        'widget'       => 'choice',
      ));
      $builder->add('individualLocation', TextType::class, array(
        'label'=> 'Individual Location',
        'attr' => array('class' => 'tinymce'),
      ));
      $builder->add('competitionStartDate', DateType::class, array(
        'widget'       => 'choice',
      ));
      $builder->add('competitionEndDate', DateType::class, array(
        'widget'       => 'choice',
      ));
      $builder->add('send', SubmitType::class, array(
        'label' => "Validate",
        'attr'  => array('class' => 'btn-base btn-confirm')
      ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Competition::class,
        ));
    }
}
