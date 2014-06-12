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
        
        if(isset($usercorresponsalia[0]) and $this->get('security.context')->isGranted('ROLE_RENDICION_CORRESPONSALIA')){
            $idcor=$usercorresponsalia[0]->getCorresponsalia()->getId();
            $entities = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->findByCorresponsalia($idcor);
        }
        
        else if(!isset($usercorresponsalia[0]) and $this->get('security.context')->isGranted('ROLE_RENDICION_ADMIN')){
            $entities = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->findAll();
        }
        
        else{
             $this->get('session')->getFlashBag()->add('alert', 'No tiene los permisos necesario para asignar fondos.');
             return $this->redirect($this->generateUrl('corresponsalia_inicio'));
        }

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
        $error=null;
        
        $em = $this->getDoctrine()->getManager();
        
        $entity = new Periodorendicion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        
        $data=$form->getData();
        
        if($data->getTipogasto()->getId()==2 and $data->getCobertura()==null){
            $error[0]="La cobertura no debe estar en blanco";
        }

        if ($form->isValid() and $error==null) {
            
            //validar que no cree un mismo periodo
            $datos=$request->request->all();
            $datos=$datos['frontend_corresponsaliabundle_periodorendicion'];              
            
            if($data->getTipogasto()->getId()==2)
                $where=array('corresponsalia'=>$data->getCorresponsalia()->getId(),'tipogasto'=>$data->getTipogasto()->getId(),'anio'=>$data->getAnio(),'mes'=>$data->getMes(),'cobertura'=>$data->getCobertura());
            else
                $where=array('corresponsalia'=>$data->getCorresponsalia()->getId(),'tipogasto'=>$data->getTipogasto()->getId(),'anio'=>$data->getAnio(),'mes'=>$data->getMes());
            
            $periodorendicion= $em->getRepository('CorresponsaliaBundle:Periodorendicion')->findBy($where);
            if(!empty($periodorendicion)){
                $this->get('session')->getFlashBag()->add('alert', 'Ya existe un periodo con los mismos parámetros.');
                return $this->redirect($this->generateUrl('periodorendicion_show',array('id'=>$periodorendicion[0]->getId())));
            }           
            
            $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
            $usuario = $em->getRepository('UsuarioBundle:Perfil')->find($idusuario);
            $entity->setResponsable($usuario);
            
            $entity->setEstatus(1);

            $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($datos['corresponsalia']);
            $entity->setCorresponsalia($corresponsalia);
            
            $entity->setFechaproceso(new \DateTime("now"));
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('periodorendicion_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Periodorendicion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'error' => $error
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
        $error=null;
        
        $entity = new Periodorendicion();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Periodorendicion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'error' => null
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
        $error=null;
        $em = $this->getDoctrine()->getManager();

        $ef = $em->getRepository('CorresponsaliaBundle:Estadofondo')->findByPeriodorendicion($id);
        
        if(!empty($ef)){
            $this->get('session')->getFlashBag()->add('alert', 'No se puede editar el período porque ya tiene un fondo asignado para los parámetros seleccionados.');
            return $this->redirect($this->generateUrl('periodorendicion_show', array('id' => $id)));
        }
        
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
            'error'=>$error
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
        $error=null;
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Periodorendicion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $data=$editForm->getData();
        if($data->getTipogasto()->getId()==2 and $data->getCobertura()==null){
            $error[0]="La cobertura no debe estar en blanco";
        }
        
        if ($editForm->isValid() and $error==null) {
            $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
            $usuario = $em->getRepository('UsuarioBundle:Perfil')->find($idusuario);
            $entity->setResponsable($usuario);
            $entity->setFechaproceso(new \DateTime("now"));
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Se ha actualizado el período exitosamente.');
            return $this->redirect($this->generateUrl('periodorendicion_show', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Periodorendicion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'error'=>$error
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
             $this->get('session')->getFlashBag()->add('alert', 'No se puede borrar el período porque tiene un fondo asignado.');
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
