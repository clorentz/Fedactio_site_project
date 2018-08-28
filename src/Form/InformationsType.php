<?php
// src/Form/InformationsType.php
namespace App\Form;

use App\Entity\Informations;
use App\Entity\InformationsItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class InformationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder->add('items', CollectionType::class, array(
        'entry_type'   => InformationsItemType::class,
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
            'data_class' => Informations::class,
        ));
    }
}
