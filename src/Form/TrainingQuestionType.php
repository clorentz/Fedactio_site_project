<?php
// src/Form/TrainingQuestionType.php
namespace App\Form;

use App\Entity\TrainingQuestion;
use App\Entity\TrainingAnswer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class TrainingQuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

      $builder->add('question', TextType::class);
      $builder->add('image', FileType::class, array(
        'label'     => 'Image (PNG file)',
        'required'  => false,
      ));
      $builder->add('difficulty', ChoiceType::class, array(
        'choices'  => array(
            '1 Star'   => 1,
            '2 Stars'  => 2,
            '3 Stars'  => 3,
            '4 Stars'  => 4,
            '5 Stars'  => 5,
        )
      ));
      $builder->add('answers', CollectionType::class, array(
        'entry_type'   => TrainingAnswerType::class,
        'allow_delete' => true,
        'allow_add'    => true,
        'label'        => false,
        'by_reference' => false,
      ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => TrainingQuestion::class,
        ));
    }
}
