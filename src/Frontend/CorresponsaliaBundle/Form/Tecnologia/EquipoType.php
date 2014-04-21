<?php

namespace Frontend\CorresponsaliaBundle\Form\Tecnologia;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EquipoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('serialEquipo')
            ->add('descripcion')
            ->add('modelo')
            ->add('status')
            ->add('observacionCondicion')
            ->add('fechaAdquisicion')
            ->add('categoria')
            ->add('condicion')
            ->add('marca')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\CorresponsaliaBundle\Entity\Tecnologia\Equipo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_corresponsaliabundle_tecnologia_equipo';
    }
}
