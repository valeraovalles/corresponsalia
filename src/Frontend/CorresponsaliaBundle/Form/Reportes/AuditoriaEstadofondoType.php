<?php

namespace Frontend\CorresponsaliaBundle\Form\Reportes;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class AuditoriaEstadofondoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
                
        $meses= array(''=>'Mes',1=>'Enero',2=>'Febrero',3=>'Marzo',4=>'Abril',5=>'Mayo',6=>'Junio',7=>'Julio',8=>'Agosto',9=>'Septiembre',10=>'Octubre',11=>'Noviembre',12=>'Diciembre');
        $anios= array(''=>'Año', date('Y') => date('Y'),date('Y')+1 => date('Y')+1);
        
        $estatus= array(1 => 'Abierto',2 => 'Enviado para revisión',3 => 'Devuelto para corrección',4 => 'Cerrado');
        
        $builder
            ->add('aniodesde','choice',array('choices'   => $anios,))
            ->add('mesdesde','choice',array('choices'   => $meses,))
                
            ->add('aniohasta','choice',array('choices'   => $anios,))
            ->add('meshasta','choice',array('choices'   => $meses,))
            
            ->add('corresponsalia', 'entity', array(
            'class' => 'CorresponsaliaBundle:Corresponsalia',
            'expanded'=>false, 
            'multiple'=>true,
                
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.nombre', 'ASC');
            }))
            
            ->add('tipogasto', 'entity', array(
            'class' => 'CorresponsaliaBundle:Tipogasto',
            'expanded'=>false, 
            'multiple'=>true,
            
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.descripcion', 'ASC');
            }))
            
            ->add('cobertura')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\CorresponsaliaBundle\Entity\Reportes\AuditoriaEstadofondo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'reporte';
    }
}
