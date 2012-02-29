<?php

namespace Jet\EventsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('surname')
            ->add('created_at')
            ->add('updated_at')
        ;
    }

    public function getName()
    {
        return 'jet_eventsbundle_usertype';
    }
}
