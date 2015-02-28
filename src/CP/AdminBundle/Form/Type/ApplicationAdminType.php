<?php

namespace CP\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ApplicationAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null)
            ->add('title_second', null)
            ->add('citation', null)
            ->add('spectacle', 'entity', array('class' => 'CPBundle:Spectacle'))
            ->add('jeunepublic', 'entity', array('class' => 'CPBundle:Jeunepublic'))
            ->add('save', 'submit', array('label' => 'Ajouter'));
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CP\CPBundle\Entity\Application',
        ));
    }


    public function getName()
    {
        return 'application';
    }
}