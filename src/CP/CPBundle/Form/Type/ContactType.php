<?php

namespace CP\CPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Collection;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('attr' => array('placeholder' => 'Nom',), 'label' => 'Nom',))
            ->add('email', 'text', array('attr' => array('placeholder' => 'Email',), 'label' => 'Email',))
            ->add('phone', 'text', array('attr' => array('placeholder' => 'Téléphone',), 'label' => 'Téléphone',))
            ->add('message', 'textarea', array('attr' => array('placeholder' => 'Message',), 'label' => 'Message',))
            ->add('save', 'submit', array('label' => 'Envoyer'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => false,
        ));
    }

    public function getName()
    {
        return 'contact';
    }
}