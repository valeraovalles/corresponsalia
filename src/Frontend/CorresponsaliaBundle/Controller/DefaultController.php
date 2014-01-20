<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Frontend\CorresponsaliaBundle\Entity\Relaciongasto;
use Frontend\CorresponsaliaBundle\Form\RelaciongastoType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    public function Estadofondo($idcorresponsalia)
    {
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT e FROM CorresponsaliaBundle:Estadofondo e where e.corresponsalia= :idcorresponsalia and e.anio= :anio and e.mes= :mes";
        $query = $em->createQuery($dql);
        $query->setParameter('idcorresponsalia', 4);
        $query->setParameter('anio', \date("Y"));
        $query->setParameter('mes', \date("m"));
        $estadofondo = $query->getResult(); 
        $estadofondo=$estadofondo[0];

        $em = $this->getDoctrine()->getManager();
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find(4);
        
        $datos['saldoinicial']=$estadofondo->getSaldoinicial();
        $datos['recursorecibido']=$estadofondo->getRecursorecibido();
        $datos['saldofinal']=$estadofondo->getSaldofinal();        
        $datos['total']=($estadofondo->getSaldoinicial()+$estadofondo->getRecursorecibido())-$estadofondo->getSaldofinal();
           
        $datos['saldoinicial_mn']=$datos['saldoinicial']*$corresponsalia->getMontocambiodolar();
        $datos['recursorecibido_mn']=$datos['recursorecibido']*$corresponsalia->getMontocambiodolar();
        $datos['saldofinal_mn']=$datos['saldofinal']*$corresponsalia->getMontocambiodolar();    
        $datos['total_mn']=$datos['total']*$corresponsalia->getMontocambiodolar();  

        $datos['saldoinicial_bs']=$datos['saldoinicial']*6.30;
        $datos['recursorecibido_bs']=$datos['recursorecibido']*6.30;
        $datos['saldofinal_bs']=$datos['saldofinal']*6.30;   
        $datos['total_bs']=$datos['total']*6.30;
        
        
        foreach ($datos as $k => $v){
            $dato[$k]=  number_format($v,2,",",".");
        }
        return $dato;
    }
    public function inicioAction()
    {
        $entity = new Relaciongasto();
        $form   = $this->createForm(new RelaciongastoType(), $entity);
        
        $em = $this->getDoctrine()->getManager();
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find(4);
        
        $estadofondo=$this->Estadofondo(4);
        


        //variable para inicializar la descripcion de los items
        $dataselect=0;
        
        return $this->render('CorresponsaliaBundle:Default:inicio.html.twig',
                array(
                    "form" => $form->createView(),
                    "dataselect"=>$dataselect,
                    "corresponsalia"=>$corresponsalia,
                    "estadofondo"=>$estadofondo
                ));
    }
    
    public function guardatemprendicionAction(Request $request)
    {
        $datos=$request->request->all();
        $datos1=$datos['rendicion_relaciongasto'];
        
        if(isset($datos['form'])){
            $dataselect=$datos['form'];
            $dataselect=$dataselect['descripciongasto'];
            if($dataselect=='')$dataselect=0;
        }
        else $dataselect=0;

        $entity = new Relaciongasto();
        $form   = $this->createForm(new RelaciongastoType(), $entity);
        $form->bind($request);
        
        $em = $this->getDoctrine()->getManager();
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find(4);
        
        $estadofondo=$this->Estadofondo(4);
        
        if ($form->isValid()) {
            $descgas = $em->getRepository('CorresponsaliaBundle:Descripciongasto')->find($dataselect);
            $entity->setDescripciongasto($descgas);
            $entity->setCorresponsalia($corresponsalia);
            $entity->setAnio(\date("Y"));
            $entity->setMes(\date("m"));
            $em->persist($entity);
            $em->flush();
            
        }
            
        return $this->render('CorresponsaliaBundle:Default:inicio.html.twig',
                array(
                    "form" => $form->createView(),
                    "dataselect"=>$dataselect,
                    "corresponsalia"=>$corresponsalia,
                    "estadofondo"=>$estadofondo
                ));
    }
}
