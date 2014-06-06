<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Reporte;
use Frontend\CorresponsaliaBundle\Form\ReporteType;

use Frontend\CorresponsaliaBundle\Entity\Reporteauditoriarendicion;
use Frontend\CorresponsaliaBundle\Form\ReporteauditoriarendicionType;

class AjaxController extends Controller
{
     public function formdescripciongastoAction($idtipo,$data)
    {   
        $em = $this->getDoctrine()->getManager();
         
        $dql = "select d from CorresponsaliaBundle:Descripciongasto d where d.tipogasto= :idtipogasto order by d.descripcion ASC";
        $query = $em->createQuery($dql);
        $query->setParameter('idtipogasto',$idtipo);
        $descripciongasto = $query->getResult();
             
        foreach ($descripciongasto as $value) {
            $arraydescripciongasto[$value->getId()]=$value->getDescripcion();
        }

        $form = $this->createFormBuilder()
            ->add('descripciongasto', 'choice', array(
                'choices'   => $arraydescripciongasto,
                'empty_value' => "Seleccione",
                'data'=>$data,
        ))->getForm();
        
        return $this->render('CorresponsaliaBundle:Ajax:formdescripciongasto.html.twig',array('form'=>$form->createView()));
    }

    public function ajaxreporteauefAction($dato,$muestra){

        $entity = new Reporte();
        $form   = $this->createForm(new ReporteType($dato,$muestra), $entity);


        return $this->render('CorresponsaliaBundle:Ajax:ajaxreporteauef.html.twig', array(
            'form'=>$form->createView(),
            'muestra'=>$muestra,
            'dato'=>$dato
        ));
        die;
    }

    public function ajaxreporterendicionAction($dato,$muestra){

        $entity = new Reporte();
        $form   = $this->createForm(new ReporteType($dato,$muestra), $entity);

        return $this->render('CorresponsaliaBundle:Ajax:ajaxreporterendicion.html.twig', array(
            'form'=>$form->createView(),
            'muestra'=>$muestra,
            'dato'=>$dato
        ));
        die;
    }

}
