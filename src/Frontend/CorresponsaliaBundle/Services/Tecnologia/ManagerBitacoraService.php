<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Frontend\CorresponsaliaBundle\Services\Tecnologia;


/**
 * Description of BitacoraService
 *
 * @author ecastro
 */
class ManagerBitacoraService {
    
    private $bitacora;
    private $equipo;
    private $asignacion;
    private $em;
    private $response;


    public function __construct($bitacora, $em, $equipo, $asignacion) {
        $this->bitacora = $bitacora;
        $this->equipo = $equipo;
        $this->asignacion = $asignacion;
        $this->em = $em;
    }
    
    public function registroBitacora($equipo_id){
        $this->asignacion = $this->em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($equipo_id);
        if (!$this->asignacion) {
            throw new \Exception('Unable to find Tecnologia\Asignacion entity.');
        }
        $this->equipo = $this->em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($equipo_id);
        if (!$this->equipo) {
            throw new \Exception('Unable to find Tecnologia\Equipo entity.');
        }
        $this->configRegitraBitacora();
        $this->em->remove($this->asignacion);
        $this->em->flush();
    }
    
    public function cierreAsignacion($equipo_id, $fechaRetorno) {
        try {
            $this->em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->actualizarAsignacion($equipo_id, $fechaRetorno);
            $this->response = true;
        } catch (\LogicException $ex) {
            $this->response = false;
        echo $ex->getMessage();
        }
        return $this->response;
    }
    
    public function configRegitraBitacora() {
        $this->bitacora->setIdEquipo($this->equipo->getId());
        $this->bitacora->setStatus($this->equipo->getStatus());
        $this->bitacora->setModelo($this->equipo->getModelo());
        $this->bitacora->setCondicion($this->equipo->getCondicion());
        $this->bitacora->setCategoria($this->equipo->getCategoria());
        $this->bitacora->setObservacionCondicion($this->equipo->getObservacionCondicion());        
        $this->bitacora->setSerialEquipo($this->equipo->getSerialEquipo());
        $this->bitacora->setDescripcion($this->equipo->getDescripcion());
        $this->bitacora->setCorresponsalia($this->asignacion->getCorresponsalia());
        $this->bitacora->setFechaAsignacion($this->asignacion->getFechaAsignacion());
        $this->bitacora->setFechaRetorno($this->asignacion->getFechaRetorno());
        $this->bitacora->setResponsable($this->asignacion->getResponsable());
        $this->em->persist($this->bitacora);
    }
    
}
