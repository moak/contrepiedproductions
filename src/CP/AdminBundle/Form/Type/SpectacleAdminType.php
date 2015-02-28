<?php

namespace CP\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class SpectacleAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null)
            ->add('title_second', null)
            ->add('published', 'checkbox', array(
                'required'  => false,
            ))
            ->add('prix', 'integer')
            ->add('description_short',  'textarea', array('attr' => array('class' => 'ckeditor')))
            ->add('image', new MediaAdminType())
            ->add('save', 'submit', array('label' => 'Ajouter'));
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CP\CPBundle\Entity\Spectacle',
        ));
    }


    public function getName()
    {
        return 'spectacle';
    }
}