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
    
    public function managerBitacora($equipo_id, $fechaRetorno) {
        $em = $this->getDoctrine()->getManager();
        $managerBitacora = $this->get('corresponsalia.tecnologia.manager.bitacora');
        $updateAsignacion = $managerBitacora->cierreAsignacion($equipo_id, $fechaRetorno);
        try{
            if ($updateAsignacion) {
                try {
                    $asignacion = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($equipo_id);
                    if (!$asignacion) {
                        throw new \Exception('No se encontro la entidad asignacion', 500);
                    }
                    $equipo = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($equipo_id);
                    if (!$equipo) {
                        throw new \Exception('No se encontro la entidad equipo', 500);
                    }
                    $arrayBitacora = $em->getRepository('CorresponsaliaBundle:Tecnologia\Bitacora')->ultimaBitacoraIdEquipo($equipo_id);
                    $bitacora = $arrayBitacora[0];

                    $bitacora->setFechaRetorno($asignacion->getFechaRetorno());
                    $em->remove($asignacion);
                    $em->persist($bitacora);
                    $em->flush();
                    $response['rpt'] = 1;
                    $response['msj'] = 'Se guardaron los datos de retorno del equipo con exito..!';
                } catch (\LogicException $exc) {
                    $response['msj'] = $exc->getMessage();
                    $response['exc'] = $exc->getTraceAsString();
                }catch(\ErrorException $e){
                    $response['msj'] = $e->getMessage();
                    $response['exc'] = $exc->getTraceAsString();
                }
            }else {
                throw new \Exception('Error al Actualizar la asignacion', 500);
            }
        } catch (\Exception $ex) {
            $response['rpt'] = $ex->getCode();
            $response['msj'] = $ex->getMessage();
        }
        return $response;
    }
    
    public function fechaRetornoAction(Request $request)
    {        
        /* @var $array Contiene las distintas respuestas enviadas al cliente */
        $response = array('rpt'=>'','msj'=>'');
        $fechaRetorno = $request->request->get('fecha');
        $rpt = $this->get('corresponsalia.util.fecha')->validarFecha($fechaRetorno);
        try{
            if($rpt){
                list($dia, $mes, $anio) = explode("-", $fechaRetorno);
                if(checkdate($mes, $dia, $anio)){
                    $equipo_id = $request->request->get('id');
                    $response = $this->managerBitacora($equipo_id, $fechaRetorno);
                }else{
                    throw new \Exception('Fecha invalida', 500);
                }
            }else{
                throw new \Exception('Formato de fecha invalido', 500);
            }
        } catch (\Exception $ex) {
            $response['rpt'] = $ex->getCode();
            $response['msj'] = $ex->getMessage();
            $response['exc'] = $ex->getTraceAsString();
        }
        return new JsonResponse($response);
    }

    public function ayudaAction()
    {
        return $this->render('CorresponsaliaBundle:Tecnologia/Ayuda:index.html.twig'); 
    }
    
    
}

