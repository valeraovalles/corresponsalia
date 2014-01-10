<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Tipocorresponsalia;
use Frontend\CorresponsaliaBundle\Form\TipocorresponsaliaType;

/**
 * Tipocorresponsalia controller.
 *
 */
class TipocorresponsaliaController extends Controller
{

    /**
     * Lists all Tipocorresponsalia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Tipocorresponsalia')->findAll();

        return $this->render('CorresponsaliaBundle:Tipocorresponsalia:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Tipocorresponsalia entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Tipocorresponsalia();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipocorresponsalia_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Tipocorresponsalia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Tipocorresponsalia entity.
    *
    * @param Tipocorresponsalia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Tipocorresponsalia $entity)
    {
        $form = $this->createForm(new TipocorresponsaliaType(), $entity, array(
            'action' => $this->generateUrl('tipocorresponsalia_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tipocorresponsalia entity.
     *
     */
    public function newAction()
    {
        $entity = new Tipocorresponsalia();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Tipocorresponsalia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tipocorresponsalia entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tipocorresponsalia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tipocorresponsalia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tipocorresponsalia:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tipocorresponsalia entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tipocorresponsalia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tipocorresponsalia entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tipocorresponsalia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tipocorresponsalia entity.
    *
    * @param Tipocorresponsalia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Tipocorresponsalia $entity)
    {
        $form = $this->createForm(new TipocorresponsaliaType(), $entity, array(
            'action' => $this->generateUrl('tipocorresponsalia_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tipocorresponsalia entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tipocorresponsalia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tipocorresponsalia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipocorresponsalia_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Tipocorresponsalia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tipocorresponsalia entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Tipocorresponsalia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tipocorresponsalia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipocorresponsalia'));
    }

    /**
     * Creates a form to delete a Tipocorresponsalia entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipocorresponsalia_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
