<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Bitacora;

/**
 * Description of ModeloExtraController
 *
 * @author ecastro
 */
class AsynchronousController extends Controller {

    public function modeloAction(Request $request)
    {
        $marca_id = $request->request->get('marca_id');

        $em = $this->getDoctrine()->getManager();

        $modelo = $em->getRepository('CorresponsaliaBundle:Tecnologia\Modelo')->findByMarcaId($marca_id);

        return new JsonResponse($modelo);
    }
    
    public function fechaRetornoAction(Request $request)
    {
        $fechaRetorno = $request->request->get('fecha');
        $equipo_id = $request->request->get('id');
        $em = $this->getDoctrine()->getManager();

        $consulta = $em->createQuery('update CorresponsaliaBundle:Tecnologia\Asignacion a set a.fechaRetorno= :fecha WHERE a.id = :equipo_id');
        $consulta->setParameter('equipo_id', $equipo_id);
        $consulta->setParameter('fecha', $fechaRetorno);
        $consulta->execute();
        
        $equip_asignar = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($equipo_id);
        $bitacora = new Bitacora();
        $bitacora->setEquipoId($equipo_id);
        $bitacora->setCorresponsaliaId($equip_asignar->getId());
        $bitacora->setFechaAsignacion($equip_asignar->getFechaAsignacion());
        $bitacora->setFechaEstimaRetorno($equip_asignar->getFechaEstimadaRetorno());
        $bitacora->setFechaRetorno($equip_asignar->getFechaRetorno());
        $bitacora->setResponsable($equip_asignar->getResponsable());
        $bitacora->setStatusId($equip_asignar->getStatus()->getId());
        
        $em->persist($bitacora);
        $em->remove($equip_asignar);
        $em->flush();
        
        return true;
    }
}

