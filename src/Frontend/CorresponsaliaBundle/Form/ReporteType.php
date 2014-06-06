<?php

namespace Frontend\CorresponsaliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ReporteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function __construct($dato,$muestra)
    {
        $this->dato = $dato;
        $this->muestra = $muestra;

    }

    public function buildForm(FormBuilderInterface $builder, array $options){

        $dato = $this->dato;
        $muestra = $this->muestra;

        $meses= array(''=>'Mes',1=>'Enero',2=>'Febrero',3=>'Marzo',4=>'Abril',5=>'Mayo',6=>'Junio',7=>'Julio',8=>'Agosto',9=>'Septiembre',10=>'Octubre',11=>'Noviembre',12=>'Diciembre');
        $anios= array(''=>'Año', date('Y') => date('Y'),date('Y')+1 => date('Y')+1);

        if($muestra==1)

            $builder->add('corresponsalia', 'entity', array(
            'class' => 'CorresponsaliaBundle:Corresponsalia',
            'expanded'=>false, 
            'multiple'=>true,
            'empty_value' => 'Todas',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.nombre', 'ASC');
            }));

        if($muestra==2)
            $builder->add('tipogasto', 'entity', array(
            'class' => 'CorresponsaliaBundle:Tipogasto',
            'expanded'=>false, 
            'multiple'=>true,
            'empty_value' => 'Todos',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.descripcion', 'ASC');
            }));


        if($muestra==3)
            $builder->add('aniodesde','choice',array('choices'   => $anios,));

        if($muestra==4)
            $builder->add('aniohasta','choice',array('choices'   => $anios,));

        if($muestra==5)
            $builder->add('mesdesde','choice',array('choices'   => $meses,));

        if($muestra==6)
            $builder->add('meshasta','choice',array('choices'   => $meses,));


        if($muestra==7){
            //consulto las descripciones de periodos

            //las variables enviadasd son ad,ah,md,mh,tg,cor

            $dato=explode(",", $dato);

            $builder->add('descripcionperiodo', 'entity', array(
            'class' => 'CorresponsaliaBundle:Periodorendicion',
            'expanded'=>false, 
            'multiple'=>true,
            'property'=>'descripcionperiodo',
            'empty_value' => 'Todas',
            'query_builder' => function(EntityRepository $er)  use ($dato) {
                return $er->createQueryBuilder('x')
                    ->where('x.descripcionperiodo is not null and x.corresponsalia in (:idcor) and x.anio >= :aniod and x.mes >= :mesd and x.anio<= :anioh and x.mes <= :mesh and x.tipogasto= :tg')
                    ->setParameter('aniod', $dato[0])
                    ->setParameter('anioh', $dato[1])
                    ->setParameter('mesd', $dato[2])
                    ->setParameter('mesh', $dato[3])
                    ->setParameter('idcor', $dato[4])
                    ->setParameter('tg', $dato[5]);
                    
                    
            }));
        }
        if($muestra==3.3){
            $dato=explode(",", $dato);
            $builder->add('descripciongasto', 'entity', array(
            'class' => 'CorresponsaliaBundle:Descripciongasto',
            'expanded'=>false, 
            'multiple'=>true,
            'empty_value' => 'Todas',
            'query_builder' => function(EntityRepository $er)  use ($dato) {
                return $er->createQueryBuilder('x')
                    ->where('x.tipogasto in (:idtipogasto)')
                    ->setParameter('idtipogasto', $dato);
            }));
        }
    
    }
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\CorresponsaliaBundle\Entity\Reporte'
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
