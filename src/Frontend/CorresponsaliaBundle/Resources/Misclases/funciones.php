<?php

namespace Frontend\CorresponsaliaBundle\Resources\Misclases;

class funciones
{
    public function Estadofondo($idperiodo,$em)
    {
        $dql   = "SELECT e FROM CorresponsaliaBundle:Estadofondo e where e.periodorendicion= :idperiodo";
        $query = $em->createQuery($dql);
        $query->setParameter('idperiodo', $idperiodo);
        $estadofondo = $query->getResult(); 
        if(empty($estadofondo)) return null;
        $estadofondo=$estadofondo[0];

        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Cambio')->findBy(array('periodorendicion'=>$estadofondo->getPeriodorendicion()->getId()),array('id'=>'desc'));
        $corresponsalia=$corresponsalia[0];

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
    
    public function cambio($idperiodo,$em)
    {
        $dql   = "SELECT c FROM CorresponsaliaBundle:Cambio c where c.periodorendicion= :idperiodo order by c.id DESC";
        $query = $em->createQuery($dql);
        $query->setParameter('idperiodo', $idperiodo);
        $cambio = $query->getResult(); 
        if(isset($cambio[0])) $cambio=$cambio[0];
        else $cambio=null;
        return $cambio;
    }
    
    public function Listadorendicion($periodo,$em){

        if($periodo->getEstatus()!=3) // si el periodo esta abierto
        $dql   = "SELECT r FROM CorresponsaliaBundle:Relaciongasto r where r.periodorendicion= :idperiodo order by r.id DESC";
        
        else if($periodo->getEstatus()==3) // si fue devuelta para rendicion solo muestro lo seleccionado
        $dql   = "SELECT r FROM CorresponsaliaBundle:Relaciongasto r  where r.periodorendicion= :idperiodo and r.aprobada=false order by r.id DESC";

        $query = $em->createQuery($dql);
        $query->setParameter('idperiodo', $periodo->getId());
        $rendicion = $query->getResult(); 
        
        return $rendicion;
    }
}