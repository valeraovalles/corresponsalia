<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Representante;
use Frontend\CorresponsaliaBundle\Entity\Personal;
use Frontend\CorresponsaliaBundle\Form\RepresentanteType;

/**
 * Representante controller.
 *
 */
class RepresentanteController extends Controller
{

    /**
     * Lists all Representante entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $id_cargo = 31;
        $dql = 'select p from CorresponsaliaBundle:Personal p 
                where p.cargoId = :id_cargo ';
        $consulta = $em->createQuery($dql)->setParameter('id_cargo', $id_cargo);
        $entities = $consulta->getResult();

        return $this->render('CorresponsaliaBundle:Representante:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Representante entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Representante();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('representante_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Representante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Representante entity.
    *
    * @param Representante $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Representante $entity)
    {
        $form = $this->createForm(new RepresentanteType(), $entity, array(
            'action' => $this->generateUrl('representante_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Representante entity.
     *
     */
    public function newAction()
    {
        $entity = new Representante();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Representante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Representante entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Personal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Representante entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Representante:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Representante entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Representante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Representante entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Representante:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Representante entity.
    *
    * @param Representante $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Representante $entity)
    {
        $form = $this->createForm(new RepresentanteType(), $entity, array(
            'action' => $this->generateUrl('representante_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Representante entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Representante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Representante entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('representante_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Representante:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Representante entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Representante')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Representante entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('representante'));
    }

    /**
     * Creates a form to delete a Representante entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('representante_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
