<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Equipo;
use Frontend\CorresponsaliaBundle\Form\Tecnologia\EquipoType;

/**
 * Tecnologia\Equipo controller.
 *
 */
class EquipoController extends Controller
{

    /**
     * Lists all Tecnologia\Equipo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->findAll();

        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Tecnologia\Equipo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Equipo();
        $form = $this->createCreateForm($entity);
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tecnoequipo_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Tecnologia\Equipo entity.
    *
    * @param Equipo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Equipo $entity)
    {
        $form = $this->createForm(new EquipoType(), $entity, array(
            'action' => $this->generateUrl('tecnoequipo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tecnologia\Equipo entity.
     *
     */
    public function newAction()
    {
        $entity = new Equipo();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tecnologia\Equipo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tecnologia\Equipo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tecnologia\Equipo entity.
    *
    * @param Equipo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Equipo $entity)
    {
        $form = $this->createForm(new EquipoType(), $entity, array(
            'action' => $this->generateUrl('tecnoequipo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tecnologia\Equipo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tecnoequipo_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tecnologia\Equipo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tecnoequipo'));
    }

    /**
     * Creates a form to delete a Tecnologia\Equipo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tecnoequipo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
