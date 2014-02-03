<?php

namespace Frontend\CorresponsaliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PeriodorendicionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                
        $meses= array(''=>'Seleccione un mes',1=>'Enero',2=>'Febrero',3=>'Marzo',4=>'Abril',5=>'Mayo',6=>'Junio',7=>'Julio',8=>'Agosto',9=>'Septiembre',10=>'Octubre',11=>'Noviembre',12=>'Diciembre');
        $anios= array(''=>'Seleccione un año', date('Y') => date('Y'),date('Y')+1 => date('Y')+1);
        
        $builder
            ->add('anio','choice',array('choices'   => $anios,))
            ->add('mes','choice',array('choices'   => $meses,))
            ->add('observacion','textarea')
            ->add('estatus')
            ->add('corresponsalia',null,array('empty_value'=>'Seleccione una corresponsalía...'))
            ->add('tipogasto',null,array('empty_value'=>'Seleccione un tipo de gasto...'))
            ->add('responsable')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\CorresponsaliaBundle\Entity\Periodorendicion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_corresponsaliabundle_periodorendicion';
    }
}
