<?php

namespace CP\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use CP\AdminBundle\Form\Type\MediaAdminType;


class JeunepublicLongAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description_long', 'textarea')
            ->add('video1', null)
            ->add('video2', null)
            ->add('video3', null)

            ->add('save', 'submit', array('label' => 'Sauvegarder'));
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CP\CPBundle\Entity\Jeunepublic',
        ));
    }


    public function getName()
    {
        return 'jeunepublic';
    }
}