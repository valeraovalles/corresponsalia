<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Estadofondo;
use Frontend\CorresponsaliaBundle\Form\EstadofondoType;

/**
 * Estadofondo controller.
 *
 */
class EstadofondoController extends Controller
{

    /**
     * Lists all Estadofondo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Estadofondo')->findAll();

        return $this->render('CorresponsaliaBundle:Estadofondo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Estadofondo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Estadofondo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $entity->setSaldofinal($entity->getSaldoinicial()+$entity->getRecursorecibido());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('estadofondo_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Estadofondo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Estadofondo entity.
    *
    * @param Estadofondo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Estadofondo $entity)
    {
        $form = $this->createForm(new EstadofondoType(), $entity, array(
            'action' => $this->generateUrl('estadofondo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Estadofondo entity.
     *
     */
    public function newAction()
    {
        $entity = new Estadofondo();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Estadofondo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Estadofondo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Estadofondo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estadofondo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Estadofondo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Estadofondo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Estadofondo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estadofondo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Estadofondo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Estadofondo entity.
    *
    * @param Estadofondo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Estadofondo $entity)
    {
        $form = $this->createForm(new EstadofondoType(), $entity, array(
            'action' => $this->generateUrl('estadofondo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Estadofondo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Estadofondo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estadofondo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('estadofondo_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Estadofondo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Estadofondo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Estadofondo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Estadofondo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('estadofondo'));
    }

    /**
     * Creates a form to delete a Estadofondo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estadofondo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
