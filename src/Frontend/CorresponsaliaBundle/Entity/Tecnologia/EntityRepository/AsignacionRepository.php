<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia\EntityRepository;

use Doctrine\ORM\EntityRepository;
/**
 * Description of AsignacionRepository
 *
 * @author ecastro
 */
class AsignacionRepository extends EntityRepository{

    public function actualizarAsignacion($equipo_id, $fechaRetorno){
        $consulta = $this->getEntityManager()->createQuery('update CorresponsaliaBundle:Tecnologia\Asignacion a set a.fechaRetorno= :fecha WHERE a.id = :equipo_id');
        $consulta->setParameter('equipo_id', $equipo_id);
        $consulta->setParameter('fecha', $fechaRetorno);
        $consulta->execute();     
        return $consulta;
    }
    
}
