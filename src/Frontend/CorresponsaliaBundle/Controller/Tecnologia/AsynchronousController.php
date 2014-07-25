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
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('CorresponsaliaBundle:Tecnologia\Bitacora');
        $fechaRetorno = $request->request->get('fecha');
        $equipo_id = $request->request->get('id');
        $repository->cierreAsignacion($em, $equipo_id, $fechaRetorno);
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
        
        try {
            $repository->registroBitacora($em, $equipo, $asignacion);
            $msj = "Valor";
        } catch(\ErrorException $e){
            $msj = $e->getMessage();
       }
       return $msj;
    }
}

