<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Asignacion;
use Frontend\CorresponsaliaBundle\Form\Tecnologia\AsignacionType;


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
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tecnoasignar_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Asignacion:new.html.twig', array(
            'entity' => $entity,
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

        return $this->render('CorresponsaliaBundle:Tecnologia/Asignacion:new.html.twig', array(
            'entity' => $entity,
            'equipo_id' => $id,
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

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tecnologia/Asignacion:edit.html.twig', array(
            'entity'      => $entity,
            'equipo_id'   => $id,
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

            return $this->redirect($this->generateUrl('tecnoasignar_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Asignacion:edit.html.twig', array(
            'entity'      => $entity,
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

            $em->remove($entity);
            $em->flush();
        }

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
}
