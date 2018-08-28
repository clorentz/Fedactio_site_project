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
    private $imageDirectory;

    public function __construct($imageDirectory)
    {
        $this->imageDirectory = $imageDirectory;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder->addEventListener(FormEvents::POST_SET_DATA, function ($event) {
        $entity = $event->getData();
        $builder = $event->getForm();

        // After the data set, get the linked question's answers
        $items = $entity->getQuestion()->getAnswers();
        $choices = array();
        foreach ($items as $item) {
          $choices[$item->getAnswer()] = $item;
        }


        $builder->add('answers',  EntityType::class, array(
          'class'    => TrainingAnswer::class,
          'choice_label' => function ($trainingAnswer) {
            // Puts as a label the answer or the image if there is one uploaded
            if (is_null($trainingAnswer->getImage()))
              return $trainingAnswer->getAnswer();
            else {
              return "<img src=" . $this->imageDirectory . "/" . $trainingAnswer->getImage() . " alt='Question Image'>";
            }
            },
          'choices'  => $items, // Display the linked question's answers as choices
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
            'kernelDir'  => null,
        ));
    }
}
