<?php
// src/Form/RegulationType.php
namespace App\Form;

use App\Entity\Regulation;
use App\Entity\RegulationItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class RegulationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder->add('items', CollectionType::class, array(
        'entry_type'   => RegulationItemType::class,
        'entry_options'=> array( 'label' => false, ),
        'allow_delete' => true,
        'allow_add'    => true,
        'label'        => false,
        'by_reference' => false,
      ));
      $builder->add('send', SubmitType::class, array(
        'label' => "Validate",
        'attr'  => array('class' => 'btn-base btn-confirm')
      ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Regulation::class,
        ));
    }
}
