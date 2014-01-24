<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Cambio;
use Frontend\CorresponsaliaBundle\Entity\Relaciongasto;
use Frontend\CorresponsaliaBundle\Form\RelaciongastoType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    public function cambio($idcor)
    {
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT c FROM CorresponsaliaBundle:Cambio c where c.corresponsalia= :idcorresponsalia order by c.id DESC";
        $query = $em->createQuery($dql);
        $query->setParameter('idcorresponsalia', $idcor);
        $cambio = $query->getResult(); 
        if(isset($cambio[0])) $cambio=$cambio[0];
        else $cambio=null;
        return $cambio;
    }
    
    public function principalAction()
    {   $idcor=4;
        $cambio=  $this->cambio($idcor);
        if($cambio==null){
             $this->get('session')->getFlashBag()->add('alert', 'DEBE INDICAR LA TASA DE CAMBIO DE SU MONEDA AL DÓLAR ANTES DE CONTINUAR.');
             return $this->redirect($this->generateUrl('cambio_new',array('idcor'=>$idcor)));
        }
        
        
        $em = $this->getDoctrine()->getManager();
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find(4);
        
        return $this->render('CorresponsaliaBundle:Default:principal.html.twig',
                array(
                    "cambio"=>$cambio,
                    "corresponsalia"=>$corresponsalia,
                ));
    }
    
    public function Estadofondo($cor,$anio,$mes)
    {
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT e FROM CorresponsaliaBundle:Estadofondo e where e.corresponsalia= :idcorresponsalia and e.anio= :anio and e.mes= :mes";
        $query = $em->createQuery($dql);
        $query->setParameter('idcorresponsalia', $cor);
        $query->setParameter('anio', $anio);
        $query->setParameter('mes', $mes);
        $estadofondo = $query->getResult(); 
        $estadofondo=$estadofondo[0];

        $em = $this->getDoctrine()->getManager();
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find(4);
        
        $datos['saldoinicial']=$estadofondo->getSaldoinicial();
        $datos['recursorecibido']=$estadofondo->getRecursorecibido();
        $datos['saldofinal']=$estadofondo->getSaldofinal();        
        $datos['pagos']=$estadofondo->getPagos();
           
        $datos['saldoinicial_mn']=$datos['saldoinicial']*$corresponsalia->getMontocambiodolar();
        $datos['recursorecibido_mn']=$datos['recursorecibido']*$corresponsalia->getMontocambiodolar();
        $datos['saldofinal_mn']=$datos['saldofinal']*$corresponsalia->getMontocambiodolar();    
        $datos['pagos_mn']=$datos['pagos']*$corresponsalia->getMontocambiodolar();  

        $datos['saldoinicial_bs']=$datos['saldoinicial']*6.30;
        $datos['recursorecibido_bs']=$datos['recursorecibido']*6.30;
        $datos['saldofinal_bs']=$datos['saldofinal']*6.30;   
        $datos['pagos_bs']=$datos['pagos']*6.30;
        
        
        foreach ($datos as $k => $v){
            $dato[$k]=  number_format($v,2,",",".");
        }
        return $dato;
    }
    
    public function Listadorendicion($cor,$anio,$mes){
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT r FROM CorresponsaliaBundle:Relaciongasto r where r.corresponsalia= :idcorresponsalia and r.anio= :anio and r.mes= :mes";
        $query = $em->createQuery($dql);
        $query->setParameter('idcorresponsalia', $cor);
        $query->setParameter('anio', $anio);
        $query->setParameter('mes', $mes);
        $rendicion = $query->getResult(); 
        return $rendicion;
    }
    
    public function Numerotiposgastos() {
        $rendicion = $this->Listadorendicion(4, 2014, 1);
        $sum[1]['num']=0;$sum[2]['num']=0;$sum[3]['num']=0;
        $sum[1]['total']=0;$sum[2]['total']=0;$sum[3]['total']=0;
        foreach ($rendicion as $v) {
            if($v->getTipogasto()->getId()==1){
                $sum[1]['num']=$sum[1]['num']+1;
                $sum[1]['total']=$sum[1]['total']+$v->getMontodolar();
            }
            else if($v->getTipogasto()->getId()==2){
                $sum[2]['num']=$sum[2]['num']+1;
                $sum[2]['total']=$sum[2]['total']+$v->getMontodolar();
            }
            else if($v->getTipogasto()->getId()==3){
                $sum[3]['num']=$sum[3]['num']+1;
                $sum[3]['total']=$sum[3]['total']+$v->getMontodolar();
            }
            
        }
        return $sum;
    }

        public function inicioAction()
    {
        $entity = new Relaciongasto();
        $form   = $this->createForm(new RelaciongastoType(), $entity);
        
        $em = $this->getDoctrine()->getManager();
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find(4);
        
        $estadofondo=$this->Estadofondo(4,2014,1);

        //variable para inicializar la descripcion de los items
        $dataselect=0;
        
        //verifico si hay rendicion para este mes
        $rendicionlista=$this->Listadorendicion(4,2014,1);
        
        //veo cuantas rendiciones hay por tipos de gastos
        $numerotipogasto=$this->Numerotiposgastos();

        return $this->render('CorresponsaliaBundle:Default:inicio.html.twig',
                array(
                    "form" => $form->createView(),
                    "dataselect"=>$dataselect,
                    "corresponsalia"=>$corresponsalia,
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    "numerotipogasto"=>$numerotipogasto
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
        
        $estadofondo=$this->Estadofondo(4,2014,1);
                
        //verifico si hay rendicion para este mes
        $rendicionlista=$this->Listadorendicion(4,2014,1);
        
        //veo cuantas rendiciones hay por tipos de gastos
        $numerotipogasto=$this->Numerotiposgastos();
        
        if ($form->isValid()) {
            $descgas = $em->getRepository('CorresponsaliaBundle:Descripciongasto')->find($dataselect);
            $entity->setDescripciongasto($descgas);
            $entity->setCorresponsalia($corresponsalia);
            $entity->setAnio(\date("Y"));
            $entity->setMes(\date("m"));
            $em->persist($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('notice', 'Registro guardado exitosamente');
            return $this->redirect($this->generateUrl('corresponsalia_inicio'));
        }
            
        return $this->render('CorresponsaliaBundle:Default:inicio.html.twig',
                array(
                    "form" => $form->createView(),
                    "dataselect"=>$dataselect,
                    "corresponsalia"=>$corresponsalia,
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    "numerotipogasto"=>$numerotipogasto
                ));
    }
}
