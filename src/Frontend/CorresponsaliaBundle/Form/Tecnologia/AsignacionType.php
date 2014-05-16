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
            ->add('fechaAsignacion', 'date', array('widget' => 'single_text', 'format' => 'dd-MM-y'))
            ->add('fechaEstimadaRetorno', 'date', array('widget' => 'single_text', 'format' => 'dd-MM-y'))
            ->add('fechaRetorno', 'date', array('widget' => 'single_text', 'format' => 'dd-MM-y'))
            ->add('id','hidden')
            ->add('corresponsalia', null, array('empty_value' => 'Seleccione'))
            ->add('status', null, array('empty_value' => 'Seleccione'))
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
        return 'tecnologia_asignacion';
    }
}
