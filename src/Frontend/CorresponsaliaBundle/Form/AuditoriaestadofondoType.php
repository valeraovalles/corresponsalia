<?php

namespace Frontend\CorresponsaliaBundle\Form;

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

        if($muestra==1 or $muestra=='t')

            $builder->add('corresponsalia', 'entity', array(
            'class' => 'CorresponsaliaBundle:Corresponsalia',
            'expanded'=>false, 
            'multiple'=>true,
            'empty_value' => 'Todas',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.nombre', 'ASC');
            }));

        if($muestra==2 or $muestra=='t')
            $builder->add('tipogasto', 'entity', array(
            'class' => 'CorresponsaliaBundle:Tipogasto',
            'expanded'=>false, 
            'multiple'=>true,
            'empty_value' => 'Todos',
            'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.descripcion', 'ASC');
            }));

        if($muestra==3 or $muestra=='t')
            $builder->add('aniodesde','choice',array('choices'   => $anios,));

        if($muestra==4 or $muestra=='t')
            $builder->add('aniohasta','choice',array('choices'   => $anios,));

        if($muestra==5 or $muestra=='t')
            $builder->add('mesdesde','choice',array('choices'   => $meses,));

        if($muestra==6 or $muestra=='t')
            $builder->add('meshasta','choice',array('choices'   => $meses,));

        if($muestra==7 or $muestra=='t' and isset($dato['cobertura'])){
            $dato=explode("::", $dato);
            //elimino las comas al separar el periodo de las corresponsalia
            $periodo=substr($dato[0], 0, -1);
            $corresponsalias=substr($dato[1],1);

            $corresponsalias=explode(",", $corresponsalias);
            $periodo=explode(",", $periodo);


            $builder->add('cobertura', 'entity', array(
            'class' => 'CorresponsaliaBundle:Periodorendicion',
            'expanded'=>false, 
            'multiple'=>true,
            'property' => 'cobertura',
            'empty_value' => 'Todas',
            'query_builder' => function(EntityRepository $er)  use ($corresponsalias,$periodo) {
                return $er->createQueryBuilder('x')
                    ->where('x.cobertura is not null and x.corresponsalia in (:idcor) and x.anio >= :aniod and x.anio<= :anioh and x.mes >= :mesd and x.mes <= :mesh')
                    ->setParameter('idcor', $corresponsalias)
                    ->setParameter('aniod', $periodo[0])
                    ->setParameter('anioh', $periodo[1])
                    ->setParameter('mesd', $periodo[2])
                    ->setParameter('mesh', $periodo[3]);
                    
                    
            }));
            

        }
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\CorresponsaliaBundle\Entity\Auditoriaestadofondo'
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
