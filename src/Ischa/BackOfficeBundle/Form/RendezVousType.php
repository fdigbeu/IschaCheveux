<?php

namespace Ischa\BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RendezVousType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', 'date')
            ->add('heure', 'time')
            ->add('message')
            ->add('codesecurite')
            ->add('statut')
            ->add('compte')
            ->add('lieu')
            ->add('coiffure')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ischa\BackOfficeBundle\Entity\RendezVous'
        ));
    }
}
