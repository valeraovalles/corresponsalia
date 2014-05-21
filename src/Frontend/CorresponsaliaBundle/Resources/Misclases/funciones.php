<?php

namespace Frontend\CorresponsaliaBundle\Resources\Misclases;
use Frontend\CorresponsaliaBundle\Resources\Misclases\conexion;

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

    public function Contratos()
    {
        $a=new conexion();
        $db=$a->postgresql_local();
        $query="select c.id, c.codigo, c.fecha_inicio, c.fecha_fin, c.duracion, c.monto_bs, c.monto_dolares, c.monto_euros from contratos.contratos c where c.personal = TRUE";
        
        $rs = pg_query($query) or die('La consulta fallo: ' . pg_last_error());    
        $row = pg_num_rows($rs);

        $i = 0;
        while ($line = pg_fetch_array($rs, null, PGSQL_ASSOC)) 
        {
            $registro[$i]['id'] = $line['id'];
            $registro[$i]['codigo'] = $line['codigo'];
            $registro[$i]['fecha_inicio'] = $line['fecha_inicio'];
            $registro[$i]['fecha_fin'] = $line['fecha_fin'];
            $registro[$i]['duracion'] = $line['duracion'];
            $registro[$i]['monto_bs'] = $line['monto_bs'];
            $registro[$i]['monto_dolares'] = $line['monto_dolares'];
            $registro[$i]['monto_euros'] = $line['monto_euros'];
            $i ++;
        }
       
        return array ($registro, $row);
    }

    public function Detallesdecontrato($id)
    {


        $a=new conexion();
        $db=$a->postgresql_local();
        $query="select c.id, c.codigo, c.fecha_inicio, c.fecha_fin, c.duracion, c.monto_bs, c.monto_dolares, c.monto_euros from contratos.contratos c where c.id ='".$id."'";
        
        $rs = pg_query($query) or die('La consulta fallo: ' . pg_last_error());    
        $row = pg_num_rows($rs);

        $i = 0;
        while ($line = pg_fetch_array($rs, null, PGSQL_ASSOC)) 
        {
            $registro[$i]['id'] = $line['id'];
            $registro[$i]['codigo'] = $line['codigo'];
            $registro[$i]['fecha_inicio'] = $line['fecha_inicio'];
            $registro[$i]['fecha_fin'] = $line['fecha_fin'];
            $registro[$i]['duracion'] = $line['duracion'];
            $registro[$i]['monto_bs'] = $line['monto_bs'];
            $registro[$i]['monto_dolares'] = $line['monto_dolares'];
            $registro[$i]['monto_euros'] = $line['monto_euros'];
            $i ++;
        }
        return array ($registro, $row);
    }

    public function Contratoscodigo()
    {
        $a=new conexion();
        $db=$a->postgresql_local();
        $query="select c.codigo from contratos.contratos c where c.personal = TRUE";
        
        $rs = pg_query($query) or die('La consulta fallo: ' . pg_last_error());    
        $row = pg_num_rows($rs);

   
        while ($line = pg_fetch_array($rs, null, PGSQL_ASSOC)) 
        {
            $registro[$line['codigo']] = $line['codigo'];
                
        }
        
        return array($registro, $row);
    }

    //actualiza saldos al cerrar una rendicion o cambiar montos de recursos enviados
    public function actualizasaldos($idperiodo,$em){

        $periodoactual = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        $anio=$periodoactual->getAnio();
        $mes=$periodoactual->getMes();
        $idco=$periodoactual->getCorresponsalia()->getId();
        $idtg=$periodoactual->getTipogasto()->getId();

        //busco el periodo siguiente
        $dql   = "SELECT p FROM CorresponsaliaBundle:Periodorendicion p where p.corresponsalia= :idco and p.tipogasto= :idtg  and p.id> :idp order by p.id ASC";
        $query = $em->createQuery($dql);
        $query->setParameter('idco', $idco);
        $query->setParameter('idtg', $idtg);
        $query->setParameter('idp', $idperiodo);
        $periodosig = $query->getResult(); 


        if($periodosig){
            
            $idperiodoant=$idperiodo;
            foreach ($periodosig as $p) {

                $efant = $em->getRepository('CorresponsaliaBundle:Estadofondo')->findByPeriodorendicion($idperiodoant);    
                $efnue = $em->getRepository('CorresponsaliaBundle:Estadofondo')->findByPeriodorendicion($p->getId());

                if($efnue){

                    $si=$efant[0]->getSaldofinal();
                    $sf=($efant[0]->getSaldofinal()+$efnue[0]->getRecursorecibido())-$efnue[0]->getPagos();

                    $efnue[0]->setSaldoinicial($si);
                    $efnue[0]->setSaldofinal($sf);
                    $em->flush();

                } 

                $idperiodoant=$p->getId();
            }
        }
    }

    //busca el saldo inicial al crear un fondo nuevo
    public function saldoinicial($idperiodo,$em){

        $periodoactual = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        $anio=$periodoactual->getAnio();
        $mes=$periodoactual->getMes();
        $idco=$periodoactual->getCorresponsalia()->getId();
        $idtg=$periodoactual->getTipogasto()->getId();

        $dql   = "SELECT p FROM CorresponsaliaBundle:Periodorendicion p where p.corresponsalia= :idco and p.tipogasto= :idtg  and p.id< :idp order by p.id DESC";
        $query = $em->createQuery($dql);
        $query->setParameter('idco', $idco);
        $query->setParameter('idtg', $idtg);
        $query->setParameter('idp', $idperiodo);
        $query->setMaxResults(1);
        $periodoant = $query->getResult(); 

        if($periodoant){
            $ef = $em->getRepository('CorresponsaliaBundle:Estadofondo')->findByPeriodorendicion($periodoant[0]->getId());
            if($ef) $saldoinicial=$ef[0]->getSaldofinal();
            else{
                $saldoinicial=null;
            }
        }else $saldoinicial='0';

        return $saldoinicial;
    }
}