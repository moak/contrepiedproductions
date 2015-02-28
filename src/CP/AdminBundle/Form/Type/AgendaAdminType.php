<?php

namespace CP\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class AgendaAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('place', null)
            ->add('date', 'datetime')
            ->add('address', null)
            ->add('spectacle', null)
            ->add('image', new MediaAdminType())
            ->add('reservation', null)
            ->add('prix', 'integer')
            ->add('save', 'submit', array('label' => 'Ajouter'));
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CP\CPBundle\Entity\Agenda',
        ));
    }


    public function getName()
    {
        return 'agenda';
    }
}