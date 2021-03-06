<?php

namespace CP\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use CP\AdminBundle\Form\Type\ProduitAdminType;


class ProduitAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null)
            ->add('available', 'checkbox', array(
                'required'  => false,
            ))
            ->add('image', new MediaAdminType())
            ->add('price', 'integer')
            ->add('description',  'textarea', array('attr' => array('class' => 'ckeditor')))
            ->add('save', 'submit', array('label' => 'Sauvegarder'));
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CP\CPBundle\Entity\Produit',
        ));
    }


    public function getName()
    {
        return 'produit';
    }
}