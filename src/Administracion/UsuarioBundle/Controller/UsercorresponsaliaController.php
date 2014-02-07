<?php

namespace Administracion\UsuarioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Administracion\UsuarioBundle\Entity\Usercorresponsalia;
use Administracion\UsuarioBundle\Form\UsercorresponsaliaType;

/**
 * Usercorresponsalia controller.
 *
 */
class UsercorresponsaliaController extends Controller
{

    /**
     * Lists all Usercorresponsalia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findAll();

        return $this->render('UsuarioBundle:Usercorresponsalia:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Usercorresponsalia entity.
     *
     */
    public function createAction(Request $request)
    {

        $entity = new Usercorresponsalia();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $datos=$request->request->all();
            $datos=$datos['administracion_usuariobundle_usercorresponsalia'];
     
            //valido
            $em = $this->getDoctrine()->getManager();
            $usercorresponsalia = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findBy(array('usuario'=>$datos['usuario'],'corresponsalia'=>$datos['corresponsalia']));
            if(!empty($usercorresponsalia)){
                $this->get('session')->getFlashBag()->add('alert', 'El usuario "'.strtoupper($entity->getUsuario()->getPrimerNombre()).'" ya tiene asignada una corresponsalía.');
                return $this->redirect($this->generateUrl('usercorresponsalia'));
            }
            
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('usercorresponsalia_show', array('id' => $entity->getId())));
        }

        return $this->render('UsuarioBundle:Usercorresponsalia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Usercorresponsalia entity.
    *
    * @param Usercorresponsalia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Usercorresponsalia $entity)
    {
        $form = $this->createForm(new UsercorresponsaliaType(), $entity, array(
            'action' => $this->generateUrl('usercorresponsalia_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Usercorresponsalia entity.
     *
     */
    public function newAction()
    {
        $entity = new Usercorresponsalia();
        $form   = $this->createCreateForm($entity);

        return $this->render('UsuarioBundle:Usercorresponsalia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Usercorresponsalia entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UsuarioBundle:Usercorresponsalia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usercorresponsalia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UsuarioBundle:Usercorresponsalia:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Usercorresponsalia entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UsuarioBundle:Usercorresponsalia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usercorresponsalia entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UsuarioBundle:Usercorresponsalia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Usercorresponsalia entity.
    *
    * @param Usercorresponsalia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Usercorresponsalia $entity)
    {
        $form = $this->createForm(new UsercorresponsaliaType(), $entity, array(
            'action' => $this->generateUrl('usercorresponsalia_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Usercorresponsalia entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UsuarioBundle:Usercorresponsalia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Usercorresponsalia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $datos=$request->request->all();
            $datos=$datos['administracion_usuariobundle_usercorresponsalia'];
            //valido
            $em = $this->getDoctrine()->getManager();
            $usercorresponsalia = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findBy(array('usuario'=>$datos['usuario'],'corresponsalia'=>$datos['corresponsalia']));
            if(!empty($usercorresponsalia)){
                $this->get('session')->getFlashBag()->add('alert', 'El usuario "'.strtoupper($entity->getUsuario()->getPrimerNombre()).'" ya tiene asignada esa corresponsalía.');
                return $this->redirect($this->generateUrl('usercorresponsalia'));
            }
            
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Se ha editado exitosamente.');
            return $this->redirect($this->generateUrl('usercorresponsalia_show', array('id' => $id)));
        }

        return $this->render('UsuarioBundle:Usercorresponsalia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Usercorresponsalia entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UsuarioBundle:Usercorresponsalia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Usercorresponsalia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }
        $this->get('session')->getFlashBag()->add('notice', 'Se ha borrado el registro exitosamente.');
        return $this->redirect($this->generateUrl('usercorresponsalia'));
    }

    /**
     * Creates a form to delete a Usercorresponsalia entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usercorresponsalia_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'BORRAR'))
            ->getForm()
        ;
    }
}
