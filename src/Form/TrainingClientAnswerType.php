<?php
// src/Form/TrainingClientAnswerType.php
namespace App\Form;

use App\Entity\TrainingClientAnswer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


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


        $builder->add('answer',  ChoiceType::class, array(
          'required' => true,
         'choices'  => $choices,
        //  'multiple' => true,
          'expanded' => true,
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
