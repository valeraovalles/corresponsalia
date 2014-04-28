<?php

namespace Frontend\CorresponsaliaBundle\Form\Tecnologia;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AsignacionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('responsable')
            ->add('fechaAsignacion')
            ->add('fechaEstimadaRetorno')
            ->add('fechaRetorno')
            ->add('status')
            ->add('equipo')
            ->add('corresponsalia')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\CorresponsaliaBundle\Entity\Tecnologia\Asignacion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_corresponsaliabundle_tecnologia_asignacion';
    }
}