<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Frontend\CorresponsaliaBundle\Entity\Relaciongasto;
use Frontend\CorresponsaliaBundle\Form\RelaciongastoType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function inicioAction()
    {
        $entity = new Relaciongasto();
        $form   = $this->createForm(new RelaciongastoType(), $entity);

        //variable para inicializar la descripcion de los items
        $dataselect=0;
        
        return $this->render('CorresponsaliaBundle:Default:inicio.html.twig',
                array(
                    "form" => $form->createView(),
                    "dataselect"=>$dataselect
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
        
        if ($form->isValid()) {
            
        }
            
        return $this->render('CorresponsaliaBundle:Default:inicio.html.twig',
                array(
                    "form" => $form->createView(),
                    "dataselect"=>$dataselect
                ));
    }
}
