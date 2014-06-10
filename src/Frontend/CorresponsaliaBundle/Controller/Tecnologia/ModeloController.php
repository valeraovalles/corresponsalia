<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Modelo;
use Frontend\CorresponsaliaBundle\Form\Tecnologia\ModeloType;

/**
 * Tecnologia\Modelo controller.
 *
 */
class ModeloController extends Controller
{

    /**
     * Lists all Tecnologia\Modelo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Tecnologia\Modelo')->findAll();

        return $this->render('CorresponsaliaBundle:Tecnologia/Modelo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Tecnologia\Modelo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Modelo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setNombre(strtoupper($entity->getNombre()));
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tecnomodelo_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Modelo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Tecnologia\Modelo entity.
    *
    * @param Modelo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Modelo $entity)
    {
        $form = $this->createForm(new ModeloType(), $entity, array(
            'action' => $this->generateUrl('tecnomodelo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tecnologia\Modelo entity.
     *
     */
    public function newAction()
    {
        $entity = new Modelo();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Tecnologia/Modelo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tecnologia\Modelo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Modelo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Modelo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tecnologia/Modelo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tecnologia\Modelo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Modelo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Modelo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tecnologia/Modelo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tecnologia\Modelo entity.
    *
    * @param Modelo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Modelo $entity)
    {
        $form = $this->createForm(new ModeloType(), $entity, array(
            'action' => $this->generateUrl('tecnomodelo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tecnologia\Modelo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Modelo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Modelo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setNombre(strtoupper($entity->getNombre()));
            $em->flush();

            return $this->redirect($this->generateUrl('tecnomodelo_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Modelo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tecnologia\Modelo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Modelo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tecnologia\Modelo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tecnomodelo'));
    }

    /**
     * Creates a form to delete a Tecnologia\Modelo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tecnomodelo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'ELIMINAR'))
            ->getForm()
        ;
    }
}
