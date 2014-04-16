<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Contrato;
use Frontend\CorresponsaliaBundle\Form\ContratoType;

use Frontend\CorresponsaliaBundle\Resources\Misclases\funciones;

/**
 * Contrato controller.
 *
 */
class ContratoController extends Controller
{

    /**
     * Lists all Contrato entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $f=new funciones;
        $respuesta=$f->Contratos();

        $contratos_personal = $respuesta[0];
  
        return $this->render('CorresponsaliaBundle:Contrato:index.html.twig', array(
            'entities' => $contratos_personal,
        ));
    }
    /**
     * Creates a new Contrato entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Contrato();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contrato_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Contrato:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Contrato entity.
    *
    * @param Contrato $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Contrato $entity)
    {
        $form = $this->createForm(new ContratoType(), $entity, array(
            'action' => $this->generateUrl('contrato_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Contrato entity.
     *
     */
    public function newAction()
    {
        $entity = new Contrato();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Contrato:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Contrato entity.
     *
     */
    public function showAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $f=new funciones;
        $respuesta=$f->Detallesdecontrato($id);

        $contratos_detalle = $respuesta[0];

        return $this->render('CorresponsaliaBundle:Contrato:show.html.twig', array(
            'entity'      => $contratos_detalle,       ));
    }

    /**
     * Displays a form to edit an existing Contrato entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Contrato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contrato entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Contrato:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Contrato entity.
    *
    * @param Contrato $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Contrato $entity)
    {
        $form = $this->createForm(new ContratoType(), $entity, array(
            'action' => $this->generateUrl('contrato_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Contrato entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Contrato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contrato entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('contrato_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Contrato:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Contrato entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Contrato')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contrato entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contrato'));
    }

    /**
     * Creates a form to delete a Contrato entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contrato_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
