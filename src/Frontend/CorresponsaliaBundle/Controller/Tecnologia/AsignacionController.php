<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Asignacion;
use Frontend\CorresponsaliaBundle\Form\Tecnologia\AsignacionType;

use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Bitacora;

/**
 * Tecnologia\Asignacion controller.
 *
 */
class AsignacionController extends Controller
{

    /**
     * Lists all Tecnologia\Asignacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->findAll();

        return $this->render('CorresponsaliaBundle:Tecnologia/Asignacion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Tecnologia\Asignacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Asignacion(); 
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        
        if ($form->isValid()) {
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->set(
                'success',
                array(
                    'title' => 'Nueva! ',
                    'message' => 'Asignacion Agregada.'
                )
            );
            return $this->redirect($this->generateUrl('tecnoasignar_show', array('id' => $entity->getId())));
        }

        $equipo = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($entity->getId());

        if (!$equipo) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
        }
        
        return $this->render('CorresponsaliaBundle:Tecnologia/Asignacion:new.html.twig', array(
            'entity' => $entity,
            'equipo' => $equipo,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Tecnologia\Asignacion entity.
    *
    * @param Asignacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Asignacion $entity)
    {
        $form = $this->createForm(new AsignacionType(), $entity, array(
            'action' => $this->generateUrl('tecnoasignar_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tecnologia\Asignacion entity.
     *
     */
    public function newAction($id)
    {
        $entity = new Asignacion();
        $form   = $this->createCreateForm($entity);
        $em = $this->getDoctrine()->getManager();
        $equipo = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);

        if (!$equipo) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
        }
        
        return $this->render('CorresponsaliaBundle:Tecnologia/Asignacion:new.html.twig', array(
            'entity' => $entity,
            'equipo' => $equipo,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tecnologia\Asignacion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Asignacion entity.');
        }
        
        $equipo = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);
        if (!$equipo) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
        }
        
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tecnologia/Asignacion:show.html.twig', array(
            'entity'      => $entity,
            'equipo'      => $equipo,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tecnologia\Asignacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Asignacion entity.');
        }

        $equipo = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);

        if (!$equipo) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
        }
        
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tecnologia/Asignacion:edit.html.twig', array(
            'entity'      => $entity,
            'equipo'   => $equipo,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tecnologia\Asignacion entity.
    *
    * @param Asignacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Asignacion $entity)
    {
        $form = $this->createForm(new AsignacionType(), $entity, array(
            'action' => $this->generateUrl('tecnoasignar_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tecnologia\Asignacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Asignacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->set(
                'success',
                array(
                    'title' => 'Editada!',
                    'message' => 'Re-Asignacion con exito.'
                )
            );
            return $this->redirect($this->generateUrl('tecnoasignar_edit', array('id' => $id)));
        }

        $equipo = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($entity->getId());

        if (!$equipo) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
        }
        
        return $this->render('CorresponsaliaBundle:Tecnologia/Asignacion:edit.html.twig', array(
            'entity'      => $entity,
            'equipo'   => $equipo,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tecnologia\Asignacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tecnologia\Asignacion entity.');
            }

            $nombre = $entity->getCorresponsalia();
            $em->remove($entity);
            $em->flush();
        }

        $this->get('session')->getFlashBag()->set(
            'danger',
            array(
                'title' => 'Eliminada! ',
                'message' => 'Asignación del equipo a la corresponsalia '.$nombre.'.'
            )
        );
        return $this->redirect($this->generateUrl('tecnoequipo'));
    }

    /**
     * Creates a form to delete a Tecnologia\Asignacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tecnoasignar_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'ELIMINAR ASIGNACION'))
            ->getForm()
        ;
    }
    
    
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
//-----------------------REASIGNAR EQUIPO A CORRESPONSALIA------------------------------
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------    
    /**
     * Displays a form to create a new Tecnologia\Asignacion entity.
     *
     */
    public function reasignarAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $asignar_actual = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($id);
        if (!$asignar_actual) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Asignacion entity.');
        }
        
        $equipo = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);
        if (!$equipo) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Asignacion entity.');
        }

        $asignar_nuevo = new Asignacion();
        $form   = $this->reasignarCreateForm($asignar_nuevo);

        return $this->render('CorresponsaliaBundle:Tecnologia/Asignacion:reasignar.html.twig', array(
            'entity' => $asignar_nuevo,
            'asignar_actual' => $asignar_actual,
            'equipo' => $equipo,
            'form'   => $form->createView(),
        ));
    }
    
    /**
    * Creates a form to create a Tecnologia\Asignacion entity.
    *
    * @param Asignacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function reasignarCreateForm(Asignacion $entity)
    {
        $form = $this->createForm(new AsignacionType(), $entity, array(
            'action' => $this->generateUrl('tecnoasignar_Rcreate'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'REASIGNAR'));

        return $form;
    }
    
    /**
     * Creates a new Tecnologia\Asignacion entity.
     *
     */
    public function RcreateAction(Request $request)
    {
        $asignacion_nueva = new Asignacion(); 
        $form = $this->createCreateForm($asignacion_nueva);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        
        $equipo = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($asignacion_nueva->getId());
        if (!$equipo) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Asignacion entity.');
        }
        /*
         * REFENCIAR EL EQUIPO_ID = $ENTITY->getID()
         * BUSCAR LA ENTIDAD ASIGNACION ACTUAL
         * GUARDAR ASIGNACION ACTUAL EN BITACORA
         * ELIMINAR ASIGNACION ACTUAL EN ASIGNACION
         * GUARDAR NUEVA ASIGNACION EN ASIGNACION
         * 
         */

        $asignar_actual = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($asignacion_nueva->getId());
        $bitacora = new Bitacora();
        $bitacora->setEquipoId($asignacion_nueva->getId());
        $bitacora->setCorresponsalia($asignar_actual->getCorresponsalia());
        $bitacora->setFechaAsignacion($asignar_actual->getFechaAsignacion());
        $bitacora->setFechaEstimadaRetorno($asignar_actual->getFechaEstimadaRetorno());
        $bitacora->setFechaRetorno($asignar_actual->getFechaRetorno());
        $bitacora->setResponsable($asignar_actual->getResponsable());
        $bitacora->setStatus($asignar_actual->getStatus());            
            
        if ($form->isValid()) {
            $em->remove($asignar_actual);
            $em->persist($bitacora);
            $em->flush();
            $em->persist($asignacion_nueva);
            $em->flush();
            
            $this->get('session')->getFlashBag()->set(
                'success',
                array(
                    'title' => 'Nueva!',
                    'message' => 'Re-Asignacion agregada.'
                )
            );
            return $this->redirect($this->generateUrl('tecnoasignar_show', array('id' => $asignacion_nueva->getId())));
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Asignacion:reasignar.html.twig', array(
            'entity' => $asignacion_nueva,
            'asignar_actual' => $asignar_actual,
            'equipo' => $equipo,
            'form'   => $form->createView(),
        ));
    }
    
}
