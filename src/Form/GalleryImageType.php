<?php
// src/Form/GalleryImageType.php
namespace App\Form;

use App\Entity\GalleryImage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class GalleryImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      if ($options['add']) {
        $builder->add('image', FileType::class, array(
          'label'     => 'Image (PNG file)',
          'required'  => false,
        ));
      }
      $builder->add('ImageYear', IntegerType::class, array(
        'label'     => 'Year of image publication'
      ));
      $builder->add('description', TextType::class, array(
        'required' => false,
        'attr'     =>  array('class' => 'tinymce'),
      ));
      $builder->add('send', SubmitType::class, array(
        'label' => "Validate",
        'attr'  => array('class' => 'btn-base btn-confirm')
      ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'      => GalleryImage::class,
            'csrf_protection' => false,
        ));
        $resolver->setRequired(array(
          'add',
        ));
    }
}
