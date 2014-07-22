<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Bitacora;
use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Asignacion;
use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Equipo;

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
        $asignacion = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($equipo_id);
        if (!$asignacion) {
            throw $this->createNotFoundException(
                'No asignacion found for id '.$equipo_id
            );
        }
        $equipo = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($equipo_id);
        if (!$equipo) {
            throw $this->createNotFoundException(
                'No equipo found for id '.$equipo_id
            );
        }
        $bitacora = new Bitacora();
        echo $asignacion->getCorresponsalia();
        $bitacora->setSerialEquipo($equipo->getSerialEquipo());
        $bitacora->setDescripcion($equipo->getDescripcion());
        $bitacora->setCorresponsalia($asignacion->getCorresponsalia());
        $bitacora->setFechaAsignacion($asignacion->getFechaAsignacion());
        $bitacora->setFechaRetorno($asignacion->getFechaRetorno());
        $bitacora->setResponsable($asignacion->getResponsable());
        
        $em->persist($bitacora);
        $em->remove($asignacion);
        $em->flush();
        
        return "listo";
    }
}

