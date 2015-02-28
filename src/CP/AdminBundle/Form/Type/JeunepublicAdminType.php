<?php

namespace CP\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use CP\AdminBundle\Form\Type\JeunepublicImageAdminType;


class JeunepublicAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null)
            ->add('title_second', null)
            ->add('published', 'checkbox', array(
                'required'  => false,
            ))
            ->add('image', new MediaAdminType())
            ->add('agefrom', 'integer')
            ->add('ageto', 'integer')
            ->add('duration', 'integer')
            ->add('description_short', 'textarea', array('attr' => array('class' => 'ckeditor')))


            ->add('save', 'submit', array('label' => 'Ajouter'));
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