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
        
        $array = array(
            "flags" => "<div class='alert alert-{status} fade in'>"
                    . "<button class='close' type='button' data-dismiss='alert'>×</button>"
                    . "<strong>{resaltado}</strong>{mensaje}"
                    . "</div>",
            "bar" => "foo",
        );
        
        try {
            $repository->registroBitacora($em, $equipo, $asignacion);
            $this->get('session')->getFlashBag()->set(
                'success',
                array(
                    'title' => 'Exito ! ',
                    'message' => '........'
                )
            );
            
        } catch(\Exception $e){
            $this->get('session')->getFlashBag()->set(
                'danger',
                array(
                    'title' => 'Lo siento error! ',
                    'message' => 'Contacte a la Unidad de Aplicaciones '.$e->getMessage().'.'
                )
            );
       }
    }
}

