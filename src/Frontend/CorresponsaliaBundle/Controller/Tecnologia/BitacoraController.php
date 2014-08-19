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
        
        $bitacora = $em->getRepository('CorresponsaliaBundle:Tecnologia\Bitacora')->findAll();
               
        return $this->render('CorresponsaliaBundle:Tecnologia/Bitacora:index.html.twig', array(
            'entities' => $bitacora,
        ));
    }

    /**
     * Finds and displays a Tecnologia\Bitacora entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

               
        $bitacora = $em->getRepository('CorresponsaliaBundle:Tecnologia\Bitacora')->find($id);
        
        if (!$bitacora) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Bitacora entity.');
        }
        
        return $this->render('CorresponsaliaBundle:Tecnologia/Bitacora:show.html.twig', array(
            'entity'  => $bitacora,
        ));
    }
}
