<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Cobertura;
use Frontend\CorresponsaliaBundle\Form\CoberturaType;

/**
 * Cobertura controller.
 *
 */
class CoberturaController extends Controller
{

    /**
     * Lists all Cobertura entities.
     *
     */
    public function indexAction($idperiodo)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Cobertura')->findAll();

        return $this->render('CorresponsaliaBundle:Cobertura:index.html.twig', array(
            'entities' => $entities,
            'idperiodo'=>$idperiodo
        ));
    }
    /**
     * Creates a new Cobertura entity.
     *
     */
    public function createAction(Request $request,$idperiodo)
    {
        $entity = new Cobertura();
        $form = $this->createCreateForm($entity,$idperiodo);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $entity->setFechaproceso(new \DateTime("now"));
            
            $periodo = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
            $entity->setPeriodorendicion($periodo);
            
            $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
            $usuario = $em->getRepository('UsuarioBundle:Perfil')->find($idusuario);
            $entity->setResponsable($usuario);

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cobertura_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Cobertura:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'idperiodo'=>$idperiodo
        ));
    }

    /**
    * Creates a form to create a Cobertura entity.
    *
    * @param Cobertura $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Cobertura $entity,$idperiodo)
    {
        $form = $this->createForm(new CoberturaType(), $entity, array(
            'action' => $this->generateUrl('cobertura_create',array('idperiodo'=>$idperiodo)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cobertura entity.
     *
     */
    public function newAction($idperiodo)
    {
        $entity = new Cobertura();
        $form   = $this->createCreateForm($entity,$idperiodo);

        return $this->render('CorresponsaliaBundle:Cobertura:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'idperiodo'=>$idperiodo
        ));
    }

    /**
     * Finds and displays a Cobertura entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Cobertura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cobertura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Cobertura:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Cobertura entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Cobertura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cobertura entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Cobertura:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Cobertura entity.
    *
    * @param Cobertura $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cobertura $entity)
    {
        $form = $this->createForm(new CoberturaType(), $entity, array(
            'action' => $this->generateUrl('cobertura_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cobertura entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Cobertura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cobertura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Registro editado exitosamente.');
            return $this->redirect($this->generateUrl('cobertura_show', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Cobertura:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Cobertura entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Cobertura')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cobertura entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cobertura'));
    }

    /**
     * Creates a form to delete a Cobertura entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cobertura_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'BORRAR'))
            ->getForm()
        ;
    }
}
