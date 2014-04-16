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
}