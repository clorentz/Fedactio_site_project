<?php
// src/Form/RegulationItemType.php
namespace App\Form;

use App\Entity\RegulationItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegulationItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

      $builder->add('regulation', TextType::class, array(
        'required' => true,
        'label'    => false,
      ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => RegulationItem::class,
        ));
    }
}
