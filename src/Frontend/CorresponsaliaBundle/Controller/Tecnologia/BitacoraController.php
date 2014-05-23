<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Tecnologia\Bitacora controller.
 *
 */
class BitacoraController extends Controller
{

    /**
     * Lists all Tecnologia\Bitacora entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $equipos = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->findAll();

        $bitacora = $em->getRepository('CorresponsaliaBundle:Tecnologia\Bitacora')->findAll();
        
        $listEquipo = array();
        $indice = 0;
        foreach ($bitacora as $asignacion) {
            $listEquipo[$indice]['id_bitacora'] = $asignacion->getId(); 
            $listEquipo[$indice]['corresponsalia'] = $asignacion->getCorresponsalia(); 
            $listEquipo[$indice]['responsable'] = $asignacion->getResponsable(); 
            $listEquipo[$indice]['fechaAsignacion'] = $asignacion->getFechaAsignacion(); 
            $listEquipo[$indice]['fechaEstimadaRetorno'] = $asignacion->getFechaEstimadaRetorno(); 
            $listEquipo[$indice]['fechaRetorno'] = $asignacion->getFechaRetorno(); 
            $listEquipo[$indice]['statusAsignacion'] = $asignacion->getStatusId();
            foreach ($equipos as $equipo) {
                if( $asignacion->getEquipoId() == $equipo->getId() ){
                    $listEquipo[$indice]['id'] = $equipo->getId(); 
                    $listEquipo[$indice]['serialEquipo'] = $equipo->getSerialEquipo(); 
                    $listEquipo[$indice]['descripcion'] = $equipo->getDescripcion(); 
                    $listEquipo[$indice]['status'] = $equipo->getStatus(); 
                    $listEquipo[$indice]['observacionCondicion'] = $equipo->getObservacionCondicion(); 
                    $listEquipo[$indice]['fechaAdquisicion'] = $equipo->getFechaAdquisicion(); 
                    $listEquipo[$indice]['categoria'] = $equipo->getCategoria(); 
                    $listEquipo[$indice]['condicion'] = $equipo->getCondicion(); 
                    $listEquipo[$indice]['modelo'] = $equipo->getModelo(); 
                }
            }
            $indice++;
        }
        
        return $this->render('CorresponsaliaBundle:Tecnologia/Bitacora:index.html.twig', array(
            'listEquipo' => $listEquipo,
        ));
    }

    /**
     * Finds and displays a Tecnologia\Bitacora entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

               
        $asignacion = $em->getRepository('CorresponsaliaBundle:Tecnologia\Bitacora')->find($id);
        
        if (!$asignacion) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Bitacora entity.');
        }
        
        $equipo = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($asignacion->getEquipoId());

        if (!$equipo){
            throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
        }
        
        return $this->render('CorresponsaliaBundle:Tecnologia/Bitacora:show.html.twig', array(
            'equipo'      => $equipo,
            'asignacion'  => $asignacion,
        ));
    }
}
