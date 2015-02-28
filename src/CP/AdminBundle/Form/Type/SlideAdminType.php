<?php

namespace CP\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class SlideAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('image', new MediaAdminType())
            ->add('published', 'checkbox', array(
                'required'  => false,
            ))
            ->add('save', 'submit', array('label' => 'Ajouter'));
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CP\CPBundle\Entity\Slide',
        ));
    }


    public function getName()
    {
        return 'slide';
    }
}