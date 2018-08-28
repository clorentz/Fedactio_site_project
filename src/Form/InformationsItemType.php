<?php
// src/Form/InformationsItemType.php
namespace App\Form;

use App\Entity\InformationsItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InformationsItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

      $builder->add('title', TextType::class, array(
        'required' => true,
        'label'    => 'Titre',
      ));
      $builder->add('content',  TextareaType::class, array(
        'label'    => 'Contenu',
        'required' => true,
      ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => InformationsItem::class,
        ));
    }
}
