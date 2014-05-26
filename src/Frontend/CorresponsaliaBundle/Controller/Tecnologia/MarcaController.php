<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Marca;
use Frontend\CorresponsaliaBundle\Form\Tecnologia\MarcaType;

/**
 * Tecnologia\Marca controller.
 *
 */
class MarcaController extends Controller
{

    /**
     * Lists all Tecnologia\Marca entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Tecnologia\Marca')->findAll();

        return $this->render('CorresponsaliaBundle:Tecnologia/Marca:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Tecnologia\Marca entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Marca();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $entity->setNombre(strtoupper($entity->getNombre()));
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tecnomarca_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Marca:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Tecnologia\Marca entity.
    *
    * @param Marca $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Marca $entity)
    {
        $form = $this->createForm(new MarcaType(), $entity, array(
            'action' => $this->generateUrl('tecnomarca_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tecnologia\Marca entity.
     *
     */
    public function newAction()
    {
        $entity = new Marca();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Tecnologia/Marca:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tecnologia\Marca entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Marca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Marca entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tecnologia/Marca:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tecnologia\Marca entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Marca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Marca entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tecnologia/Marca:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tecnologia\Marca entity.
    *
    * @param Marca $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Marca $entity)
    {
        $form = $this->createForm(new MarcaType(), $entity, array(
            'action' => $this->generateUrl('tecnomarca_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tecnologia\Marca entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Marca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Marca entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setNombre(strtoupper($entity->getNombre()));
            $em->flush();

            return $this->redirect($this->generateUrl('tecnomarca_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Marca:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tecnologia\Marca entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Marca')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tecnologia\Marca entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tecnomarca'));
    }

    /**
     * Creates a form to delete a Tecnologia\Marca entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tecnomarca_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
