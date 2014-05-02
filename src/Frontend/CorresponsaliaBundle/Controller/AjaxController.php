<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Auditoriaestadofondo;
use Frontend\CorresponsaliaBundle\Form\AuditoriaestadofondoType;

use Frontend\CorresponsaliaBundle\Entity\Auditoriarendicion;
use Frontend\CorresponsaliaBundle\Form\AuditoriarendicionType;

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

    public function ajaxreporteauditoriaestadofondoAction($dato,$muestra){

        $entity = new AuditoriaEstadofondo();
        $form   = $this->createForm(new AuditoriaEstadofondoType($dato,$muestra), $entity);

        return $this->render('CorresponsaliaBundle:Ajax:ajaxreporteauditoriaestadofondo.html.twig', array(
            'form'=>$form->createView(),
            'muestra'=>$muestra,
            'dato'=>$dato
        ));
        die;
    }


    public function ajaxreporteauditoriarendicionAction($dato,$muestra){

        $entity = new Auditoriarendicion();
        $form   = $this->createForm(new AuditoriarendicionType($dato,$muestra), $entity);

        return $this->render('CorresponsaliaBundle:Ajax:ajaxreporteauditoriarendicion.html.twig', array(
            'form'=>$form->createView(),
            'muestra'=>$muestra,
            'dato'=>$dato
        ));
        die;
    }
            
}
