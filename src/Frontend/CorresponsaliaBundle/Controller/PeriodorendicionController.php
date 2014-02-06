<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Periodorendicion;
use Frontend\CorresponsaliaBundle\Entity\Corresponsalia;
use Frontend\CorresponsaliaBundle\Form\PeriodorendicionType;

/**
 * Periodorendicion controller.
 *
 */
class PeriodorendicionController extends Controller
{
    
    public function revisionperiodorendicionAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->findByEstatus(2);

        return $this->render('CorresponsaliaBundle:Periodorendicion:revisionperiodorendicion.html.twig', array(
            'entities' => $entities,
            
        ));
    }

    /**
     * Lists all Periodorendicion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        //consulto id de corresponsalia
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $usercorresponsalia = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findByUsuario($idusuario);
        $idcor=$usercorresponsalia[0]->getCorresponsalia()->getId();
        //fin

        $entities = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->findByCorresponsalia($idcor);

        return $this->render('CorresponsaliaBundle:Periodorendicion:index.html.twig', array(
            'entities' => $entities,
            
        ));
    }
    /**
     * Creates a new Periodorendicion entity.
     *
     */
    public function createAction(Request $request)
    {
        //validar que no cree un mismo periodo
        $datos=$request->request->all();
        $datos=$datos['frontend_corresponsaliabundle_periodorendicion'];     

        $em = $this->getDoctrine()->getManager();
        //consulto id de corresponsalia
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $usercorresponsalia = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findByUsuario($idusuario);
        $idcor=$usercorresponsalia[0]->getCorresponsalia()->getId();
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($idcor);
        //fin
            
        $periodorendicion= $em->getRepository('CorresponsaliaBundle:Periodorendicion')->findBy(array('corresponsalia'=>$corresponsalia,'tipogasto'=>$datos['tipogasto'],'anio'=>$datos['anio'],'mes'=>$datos['mes']));
        if(!empty($periodorendicion)){
             $this->get('session')->getFlashBag()->add('alert', 'Ya existe un periodo con los mismos parámetros.');
             return $this->redirect($this->generateUrl('periodorendicion_show',array('id'=>$periodorendicion[0]->getId())));
        }
        
        $entity = new Periodorendicion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
            $usuario = $em->getRepository('UsuarioBundle:Perfil')->find($idusuario);
            $entity->setResponsable($usuario);
            $entity->setEstatus(1);

            
            $entity->setCorresponsalia($corresponsalia);
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('periodorendicion_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Periodorendicion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Periodorendicion entity.
    *
    * @param Periodorendicion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Periodorendicion $entity)
    {
        $form = $this->createForm(new PeriodorendicionType(), $entity, array(
            'action' => $this->generateUrl('periodorendicion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Periodorendicion entity.
     *
     */
    public function newAction()
    {
        $entity = new Periodorendicion();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Periodorendicion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Periodorendicion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Periodorendicion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Periodorendicion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Periodorendicion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Periodorendicion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Periodorendicion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Periodorendicion entity.
    *
    * @param Periodorendicion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Periodorendicion $entity)
    {
        $form = $this->createForm(new PeriodorendicionType(), $entity, array(
            'action' => $this->generateUrl('periodorendicion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Periodorendicion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Periodorendicion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
            $usuario = $em->getRepository('UsuarioBundle:Perfil')->find($idusuario);
            $entity->setResponsable($usuario);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Se ha actualizado el período exitosamente.');
            return $this->redirect($this->generateUrl('periodorendicion_show', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Periodorendicion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Periodorendicion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $ef = $em->getRepository('CorresponsaliaBundle:Estadofondo')->findByPeriodorendicion($id);
        
        if(!empty($ef)){
             $this->get('session')->getFlashBag()->add('alert', 'No se puede borrar el período porque tiene fondos asociados.');
             return $this->redirect($this->generateUrl('periodorendicion_show', array('id' => $id)));            
        }
        
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Periodorendicion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }
        $this->get('session')->getFlashBag()->add('notice', 'Se ha borrado el período exitosamente.');
        return $this->redirect($this->generateUrl('periodorendicion'));
    }

    /**
     * Creates a form to delete a Periodorendicion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('periodorendicion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'BORRAR'))
            ->getForm()
        ;
    }
}
