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

        $asignaciones = $em->getRepository('CorresponsaliaBundle:Tecnologia\Bitacora')->findAll();
        
        $listEquipo = array();
        $indice = 0;
        foreach ($equipos as $equipo) {
            $listEquipo[$indice]['id'] = $equipo->getId(); 
            $listEquipo[$indice]['serialEquipo'] = $equipo->getSerialEquipo(); 
            $listEquipo[$indice]['descripcion'] = $equipo->getDescripcion(); 
            $listEquipo[$indice]['status'] = $equipo->getStatus(); 
            $listEquipo[$indice]['observacionCondicion'] = $equipo->getObservacionCondicion(); 
            $listEquipo[$indice]['fechaAdquisicion'] = $equipo->getFechaAdquisicion(); 
            $listEquipo[$indice]['categoria'] = $equipo->getCategoria(); 
            $listEquipo[$indice]['condicion'] = $equipo->getCondicion(); 
            $listEquipo[$indice]['modelo'] = $equipo->getModelo(); 
            foreach ($asignaciones as $asignar) {
                if( $asignar->getId() == $equipo->getId() ){
                    $listEquipo[$indice]['corresponsalia'] = $asignar->getCorresponsalia(); 
                    $listEquipo[$indice]['responsable'] = $asignar->getResponsable(); 
                    $listEquipo[$indice]['fechaAsignacion'] = $asignar->getFechaAsignacion(); 
                    $listEquipo[$indice]['fechaEstimadaRetorno'] = $asignar->getFechaEstimadaRetorno(); 
                    $listEquipo[$indice]['fechaRetorno'] = $asignar->getFechaRetorno(); 
                    $listEquipo[$indice]['statusAsignacion'] = $asignar->getStatus(); 
                }
            }
            $indice++;
        }
        
        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:index.html.twig', array(
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

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Bitacora')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Bitacora entity.');
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Bitacora:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
