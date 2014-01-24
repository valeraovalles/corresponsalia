<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Cambio;
use Frontend\CorresponsaliaBundle\Form\CambioType;
use Administracion\UsuarioBundle\Entity\Perfil;

/**
 * Cambio controller.
 *
 */
class CambioController extends Controller
{

    /**
     * Lists all Cambio entities.
     *
     */
    public function indexAction($idcor)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Cambio')->findBy(array('corresponsalia'=>$idcor),array('id'=>'desc'));
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($idcor);

        return $this->render('CorresponsaliaBundle:Cambio:index.html.twig', array(
            'entities' => $entities,
            'idcor'=>$idcor,
            "corresponsalia"=>$corresponsalia
        ));
    }
    /**
     * Creates a new Cambio entity.
     *
     */
    public function createAction(Request $request,$idcor)
    {
        $entity = new Cambio();
        $form = $this->createCreateForm($entity,$idcor);
        $form->handleRequest($request);
     
        $em = $this->getDoctrine()->getManager();
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($idcor);

        if ($form->isValid()) {
            //$idusuario = $this->get('security.context')->getToken()->getUser()->getId();
            $usuario = $em->getRepository('UsuarioBundle:Perfil')->find(1);
            
            $em = $this->getDoctrine()->getManager();
            $entity->setCorresponsalia($corresponsalia);
            $entity->setFechahoraregistro(new \DateTime("now"));
            $entity->setResponsable($usuario);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cambio', array('idcor' => $idcor)));
        }

        return $this->render('CorresponsaliaBundle:Cambio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            "corresponsalia"=>$corresponsalia
        ));
    }

    /**
    * Creates a form to create a Cambio entity.
    *
    * @param Cambio $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Cambio $entity, $idcor)
    {
        $form = $this->createForm(new CambioType(), $entity, array(
            'action' => $this->generateUrl('cambio_create',array("idcor"=>$idcor)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cambio entity.
     *
     */
    public function newAction($idcor)
    {
        $entity = new Cambio();
        $form   = $this->createCreateForm($entity,$idcor);
        
        $em = $this->getDoctrine()->getManager();
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($idcor);
        return $this->render('CorresponsaliaBundle:Cambio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            "corresponsalia"=>$corresponsalia
        ));
        
    }

    /**
     * Finds and displays a Cambio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Cambio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cambio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Cambio:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Cambio entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Cambio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cambio entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Cambio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Cambio entity.
    *
    * @param Cambio $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cambio $entity)
    {
        $form = $this->createForm(new CambioType(), $entity, array(
            'action' => $this->generateUrl('cambio_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cambio entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Cambio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cambio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cambio_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Cambio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Cambio entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Cambio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cambio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cambio'));
    }

    /**
     * Creates a form to delete a Cambio entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cambio_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
