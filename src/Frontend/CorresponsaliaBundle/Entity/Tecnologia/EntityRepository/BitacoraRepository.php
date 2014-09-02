<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia\EntityRepository;

use Doctrine\ORM\EntityRepository;

/**
 * Description of BitacoraRepository
 *
 * @author ecastro
 */
class BitacoraRepository extends EntityRepository{
    
    public function actualizarBitacora($equipo_id, $fechaRetorno){
        $consulta = $this->getEntityManager()->createQuery('update CorresponsaliaBundle:Tecnologia\Asignacion a set a.fechaRetorno= :fecha WHERE a.id = :equipo_id');
        $consulta->setParameter('equipo_id', $equipo_id);
        $consulta->setParameter('fecha', $fechaRetorno);
        $consulta->execute();     
        return $consulta;
    }
    
    public function ultimaBitacoraIdEquipo($equipo_id){
        $query = $this->getEntityManager()->createQuery("
            SELECT bitacora
            FROM CorresponsaliaBundle:Tecnologia\Bitacora bitacora
            WHERE bitacora.idEquipo = :idequipo
            ORDER BY bitacora.id DESC
        ")->setParameter('idequipo', $equipo_id)
          ->setMaxResults(1);

        return $query->getResult();
    }
}