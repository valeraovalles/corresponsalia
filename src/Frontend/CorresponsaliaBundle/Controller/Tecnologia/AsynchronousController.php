<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Bitacora;
use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Asignacion;

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
        
        print_r($equipo_id);
        $asignacion = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->findById($equipo_id);
        if (!$asignacion) {
            throw $this->createNotFoundException(
                'No asignacion found for id '.$equipo_id
            );
        }
        $bitacora = new Bitacora();
        echo $asignacion;
        $bitacora->setCorresponsalia($asignacion->getCorresponsalia());
        $bitacora->setFechaAsignacion($asignacion->getFechaAsignacion());
        $bitacora->setFechaEstimadaRetorno($asignacion->getFechaEstimadaRetorno());
        $bitacora->setFechaRetorno($asignacion->getFechaRetorno());
        $bitacora->setResponsable($asignacion->getResponsable());
        $bitacora->setStatus($asignacion->getStatus());
        
        $em->persist($bitacora);
        $em->remove($asignacion);
        $em->flush();
        
        return true;
    }
}

