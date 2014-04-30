<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Descripciongasto;
use Frontend\CorresponsaliaBundle\Form\DescripciongastoType;

/**
 * Descripciongasto controller.
 *
 */
class DescripciongastoController extends Controller
{

    /**
     * Lists all Descripciongasto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Descripciongasto')->findAll();

        return $this->render('CorresponsaliaBundle:Descripciongasto:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Descripciongasto entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Descripciongasto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Registro creado exitosamente');
            return $this->redirect($this->generateUrl('descripciongasto_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Descripciongasto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Descripciongasto entity.
    *
    * @param Descripciongasto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Descripciongasto $entity)
    {
        $form = $this->createForm(new DescripciongastoType(), $entity, array(
            'action' => $this->generateUrl('descripciongasto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Descripciongasto entity.
     *
     */
    public function newAction()
    {
        $entity = new Descripciongasto();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Descripciongasto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Descripciongasto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Descripciongasto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Descripciongasto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Descripciongasto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Descripciongasto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Descripciongasto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Descripciongasto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Descripciongasto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Descripciongasto entity.
    *
    * @param Descripciongasto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Descripciongasto $entity)
    {
        $form = $this->createForm(new DescripciongastoType(), $entity, array(
            'action' => $this->generateUrl('descripciongasto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Descripciongasto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Descripciongasto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Descripciongasto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Registro actualizado exitosamente');
            return $this->redirect($this->generateUrl('descripciongasto_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Descripciongasto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Descripciongasto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $rg = $em->getRepository('CorresponsaliaBundle:Relaciongasto')->findBy(array('descripciongasto'=>$id));
            if($rg){
                $this->get('session')->getFlashBag()->add('alert', 'No se puede eliminar la descripción porque está asociada a una rendición');
                return $this->redirect($this->generateUrl('descripciongasto_show', array('id' => $id)));
            }

            $entity = $em->getRepository('CorresponsaliaBundle:Descripciongasto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Descripciongasto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        $this->get('session')->getFlashBag()->add('notice', 'Registro borrado exitosamente');
        return $this->redirect($this->generateUrl('descripciongasto'));
    }

    /**
     * Creates a form to delete a Descripciongasto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('descripciongasto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Borrar'))
            ->getForm()
        ;
    }
}
