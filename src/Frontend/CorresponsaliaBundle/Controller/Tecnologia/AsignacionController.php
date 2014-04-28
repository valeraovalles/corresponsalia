<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Asignacion;
use Frontend\CorresponsaliaBundle\Form\Tecnologia\AsignacionType;
/**
 * Description of AsignacionController
 *
 * @author ecastro
 */
class AsignacionController extends Controller{
    //put your code here
    
    public function newAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $equipo = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);
        if (!$equipo) {
            throw $this->createNotFoundException("Entidad no encontrada..!");
        }
        $assign = new Asignacion();
        $assignForm = $this->createAssignForm($assign);
        return $this->render('CorresponsaliaBundle:Tecnologia\Asignacion:asignar.html.twig', array(
            'equipo'      => $equipo,
            'assign'      => $assign,
            'assign_form'   => $assignForm->createView(),
        ));
    }
    
   /**
    * Creates a form to create a Tecnologia\Equipo entity.
    *
    * @param Asignacion $assign The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createAssignForm(Asignacion $assign)
    {
        $form = $this->createForm(new AsignacionType(), $assign, array(
            'action' => $this->generateUrl('tecnoequipo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
    
    /**
    * Creates a form to create a Tecnologia\Equipo entity.
    *
    * @param Asignacion $assign The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEquipoFrom(Asignacion $assign)
    {
        $form = $this->createForm(new AsignacionType(), $assign);

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
    
}
