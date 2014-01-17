<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Corresponsalia;
use Frontend\CorresponsaliaBundle\Form\CorresponsaliaType;

/**
 * Corresponsalia controller.
 *
 */
class CorresponsaliaController extends Controller
{

    /**
     * Lists all Corresponsalia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->findAll();

        return $this->render('CorresponsaliaBundle:Corresponsalia:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Corresponsalia entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Corresponsalia();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('corresponsalia_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Corresponsalia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Corresponsalia entity.
    *
    * @param Corresponsalia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Corresponsalia $entity)
    {
        $form = $this->createForm(new CorresponsaliaType(), $entity, array(
            'action' => $this->generateUrl('corresponsalia_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Corresponsalia entity.
     *
     */
    public function newAction()
    {
        $entity = new Corresponsalia();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Corresponsalia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Corresponsalia entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Corresponsalia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Corresponsalia:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Corresponsalia entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Corresponsalia entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Corresponsalia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Corresponsalia entity.
    *
    * @param Corresponsalia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Corresponsalia $entity)
    {
        $form = $this->createForm(new CorresponsaliaType(), $entity, array(
            'action' => $this->generateUrl('corresponsalia_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Corresponsalia entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Corresponsalia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('corresponsalia_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Corresponsalia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Corresponsalia entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Corresponsalia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('corresponsalia'));
    }

    /**
     * Creates a form to delete a Corresponsalia entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('corresponsalia_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
