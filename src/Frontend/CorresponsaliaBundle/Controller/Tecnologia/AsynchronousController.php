<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Description of AsynchronousController
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
        /* @var $array Contiene las distintas respuestas enviadas al cliente */
        $response = array();
        $fechaRetorno = $request->request->get('fecha');
        $rpt = $this->get('corresponsalia.util.fecha')->validarFecha($fechaRetorno);
        if($rpt){
            list($dia, $mes, $anio) = explode("-", $fechaRetorno);
            if(checkdate($mes, $dia, $anio)){
                $equipo_id = $request->request->get('id');
                $this->managerBitacora($equipo_id, $fechaRetorno);
            }else{
                $response['rpt'] = 0;
                $response['msj'] = 'Fecha invalida';
            }
        }else{
            $response['rpt'] = 0;
            $response['msj'] = 'Formato de fecha invalido';
        }
        return new JsonResponse($response);
    }
    
    public function managerBitacora($equipo_id, $fechaRetorno) {
        $managerBitacora = $this->get('corresponsalia.tecnologia.manager.bitacora');
        $updateAsignacion = $managerBitacora->cierreAsignacion($equipo_id, $fechaRetorno);
        if ($updateAsignacion) {
            try {
                $asignacion = $this->em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($equipo_id);
                if (!$asignacion) {
                    throw new \Exception('Unable to find Tecnologia\Asignacion entity.');
                }
                $equipo = $this->em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($equipo_id);
                if (!$equipo) {
                    throw new \Exception('Unable to find Tecnologia\Equipo entity.');
                }
                $this->get('corresponsalia.tecnologia.manager.bitacora')->registroBitacora($asignacion, $equipo);
                $this->em->remove($this->asignacion);
                $this->em->flush();
                $response['rpt'] = 0;
                $response['msj'] = 'Se guardaron los datos de retorno del equipo con exito..!';
            } catch (\LogicException $exc) {
                $response['msj'] = $exc->getMessage();
                $response['exc'] = $exc->getTraceAsString();
            }catch(\ErrorException $e){
                $response['msj'] = $e->getMessage();
                $response['exc'] = $exc->getTraceAsString();
            }
        }else {
            $response['rpt'] = 0;
            $response['msj'] = 'Error al Actualizar la asignacion';
        }
    }
}

