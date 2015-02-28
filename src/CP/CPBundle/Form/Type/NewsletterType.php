<?php

namespace CP\CPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Collection;

class NewsletterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'text', array('attr' => array('placeholder' => 'Email',), 'label' => 'Email',))
            ->add('lname', 'text', array('attr' => array('placeholder' => 'Nom',), 'label' => 'Nom',))
            ->add('fname', 'text', array('attr' => array('placeholder' => 'Prénom',), 'label' => 'Prénom',))

            ->add('save', 'submit', array('label' => 'Souscrire'));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => false,
        ));
    }

    public function getName()
    {
        return 'newsletter';
    }
}