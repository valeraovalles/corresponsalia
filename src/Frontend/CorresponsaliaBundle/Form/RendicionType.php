<?php

namespace Frontend\CorresponsaliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RendicionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('anio')
            ->add('mes')
            ->add('observacion')
            ->add('estatus')
            ->add('corresponsalia')
            ->add('tipogasto')
            ->add('responsable')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\CorresponsaliaBundle\Entity\Rendicion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_corresponsaliabundle_rendicion';
    }
}
