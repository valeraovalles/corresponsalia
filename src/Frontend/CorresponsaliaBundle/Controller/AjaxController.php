<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AjaxController extends Controller
{
    public function gasfunAction($datos)
    {
        echo "sss";
        die;
        return $this->render('CorresponsaliaBundle:Ajax:gasfun.html.twig');
    }
    
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
                'data'=>$data
        ))->getForm();
        
        return $this->render('CorresponsaliaBundle:Ajax:formdescripciongasto.html.twig',array('form'=>$form->createView()));
    }
            
}
