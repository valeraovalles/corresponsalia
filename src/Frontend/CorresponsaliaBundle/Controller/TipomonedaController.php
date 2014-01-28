<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Tipomoneda;
use Frontend\CorresponsaliaBundle\Form\TipomonedaType;

/**
 * Tipomoneda controller.
 *
 */
class TipomonedaController extends Controller
{

    /**
     * Lists all Tipomoneda entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Tipomoneda')->findAll();

        return $this->render('CorresponsaliaBundle:Tipomoneda:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Tipomoneda entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Tipomoneda();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipomoneda_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Tipomoneda:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Tipomoneda entity.
    *
    * @param Tipomoneda $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Tipomoneda $entity)
    {
        $form = $this->createForm(new TipomonedaType(), $entity, array(
            'action' => $this->generateUrl('tipomoneda_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tipomoneda entity.
     *
     */
    public function newAction()
    {
        $entity = new Tipomoneda();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Tipomoneda:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tipomoneda entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tipomoneda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tipomoneda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tipomoneda:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tipomoneda entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tipomoneda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tipomoneda entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tipomoneda:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tipomoneda entity.
    *
    * @param Tipomoneda $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Tipomoneda $entity)
    {
        $form = $this->createForm(new TipomonedaType(), $entity, array(
            'action' => $this->generateUrl('tipomoneda_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tipomoneda entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tipomoneda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tipomoneda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Se ha editado el tipo de moneda exitosamente.');
            return $this->redirect($this->generateUrl('tipomoneda_show', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Tipomoneda:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tipomoneda entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Tipomoneda')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tipomoneda entity.');
            }

            $em->remove($entity);
            $em->flush();
        }
        $this->get('session')->getFlashBag()->add('notice', 'Se ha borrado el tipo de moneda '.strtoupper($entity->getTipomoneda()).' exitosamente.');
        return $this->redirect($this->generateUrl('tipomoneda'));
    }

    /**
     * Creates a form to delete a Tipomoneda entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipomoneda_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'BORRAR'))
            ->getForm()
        ;
    }
}
