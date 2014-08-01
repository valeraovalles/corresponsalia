<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia\EntityRepository;

use Doctrine\ORM\EntityRepository;
use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Bitacora;

/**
 * Description of BitacoraRepository
 *
 * @author ecastro
 */
class BitacoraRepository extends EntityRepository{
    
    public function registroBitacora($em, $equipo, $asignacion){
        $bitacora = new Bitacora(); 
        $bitacora->setIdEquipo($equipo->getId());
        $bitacora->setStatus($equipo->getStatus());
        $bitacora->setModelo($equipo->getModelo());
        $bitacora->setCondicion($equipo->getCondicion());
        $bitacora->setCategoria($equipo->getCategoria());
        $bitacora->setObservacionCondicion($equipo->getObservacionCondicion());        
        $bitacora->setSerialEquipo($equipo->getSerialEquipo());
        $bitacora->setDescripcion($equipo->getDescripcion());
        $bitacora->setCorresponsalia($asignacion->getCorresponsalia());
        $bitacora->setFechaAsignacion($asignacion->getFechaAsignacion());
        $bitacora->setFechaRetorno($asignacion->getFechaRetorno());
        $bitacora->setResponsable($asignacion->getResponsable());
        $em->persist($bitacora);
        $em->remove($asignacion);
        $em->flush();      
    }
    
    public function cierreAsignacion($em, $equipo_id, $fechaRetorno){
        $consulta = $em->createQuery('update CorresponsaliaBundle:Tecnologia\Asignacion a set a.fechaRetorno= :fecha WHERE a.id = :equipo_id');
        $consulta->setParameter('equipo_id', $equipo_id);
        $consulta->setParameter('fecha', $fechaRetorno);
        $consulta->execute();       
    }
    
}
//
//public function findByMarcaId($marca_id){
//        $query = $this->getEntityManager()->createQuery("
//            SELECT modelo
//            FROM CorresponsaliaBundle:Tecnologia\Modelo modelo
//            LEFT JOIN modelo.marca marca
//            WHERE marca.id = :marca_id
//        ")->setParameter('marca_id', $marca_id);
//
//        return $query->getArrayResult();
//    }