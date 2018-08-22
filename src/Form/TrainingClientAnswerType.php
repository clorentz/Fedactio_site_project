<?php
// src/Form/TrainingClientAnswerType.php
namespace App\Form;

use App\Entity\TrainingClientAnswer;
use App\Entity\TrainingAnswer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class TrainingClientAnswerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder->addEventListener(FormEvents::POST_SET_DATA, function ($event) {
        $entity = $event->getData();
        $builder = $event->getForm();

        $items = $entity->getQuestion()->getAnswers();
        $choices = array();
        foreach ($items as $item) {
          $choices[$item->getAnswer()] = $item;
        }


        $builder->add('answers',  EntityType::class, array(
          'class'    => TrainingAnswer::class,
          'choice_label' => function ($trainingAnswer) {
            return $trainingAnswer->getAnswer();
            },
          'choices'  => $items,
          'multiple' => true,
          'expanded' => true,
          'required' => true,
          'label'    => false
        ));
      });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => TrainingClientAnswer::class,
        ));
    }
}
