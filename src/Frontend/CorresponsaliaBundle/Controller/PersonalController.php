<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Personal;
use Frontend\CorresponsaliaBundle\Entity\Representante;
use Frontend\CorresponsaliaBundle\Entity\Corresponsalia;
use Frontend\CorresponsaliaBundle\Entity\Cargo;
use Frontend\CorresponsaliaBundle\Entity\Contrato;

use Frontend\CorresponsaliaBundle\Form\PersonalType;

use Frontend\CorresponsaliaBundle\Resources\Misclases\funciones;


/**
 * Personal controller.
 *
 */
class PersonalController extends Controller
{

    /**
     * Lists all Personal entities.
     *
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Personal')->findAll();
        return $this->render('CorresponsaliaBundle:Personal:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Personal entity.
     *
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = new Personal();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('personal_show', array('id' => $entity->getId())));
        }else
        {
            //$this->get('session')->getFlashBag()->add('alert', 'Debe llenar los campos obligatorios');
            return $this->render('CorresponsaliaBundle:Personal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
        }
        
    }

    /**
    * Creates a form to create a Personal entity.
    *
    * @param Personal $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Personal $entity)
    {
        $form = $this->createForm(new PersonalType(), $entity, array(
            'action' => $this->generateUrl('personal_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Personal entity.
     *
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entity = new Personal();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Personal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Personal entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Personal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Personal:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Personal entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Personal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personal entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Personal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Personal entity.
    *
    * @param Personal $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Personal $entity)
    {
        $form = $this->createForm(new PersonalType(), $entity, array(
            'action' => $this->generateUrl('personal_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Personal entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Personal')->find($id);

        $cargo_anterior = $entity->getCargoId();
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);


        if ($editForm->isValid()) {
            $em->persist($entity);

            $em->flush();

            return $this->redirect($this->generateUrl('personal_show', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Personal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Personal entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Personal')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Personal entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('personal'));
    }

    /**
    * FUNCION PARA CARGAR LOS PASAPORTES AL PERSONAL (FORMULARIO)
    */
    public function pasaporteAction($id)
    {
        //se crea el formulario, mostrará los representantes
        $form1 = $this->createFormBuilder()
                    ->add('file', 'file')
        ->getForm();

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Personal')->find($id);

        if($entity->getArchivo() != NULL)
        {
            $entities = $em->getRepository('CorresponsaliaBundle:Personal')->findAll();
            return $this->render('CorresponsaliaBundle:Personal:index.html.twig', array(
                'entities' => $entities,
            ));
        }else
        {
            $nombre = $entity->getNombre();
            $pasaporte = $entity->getPasaporte();
            return $this->render('CorresponsaliaBundle:Personal:pasaporte.html.twig', array(
                'entity'      => $entity,
                'nombre'      => $nombre,
                'pasaporte'   => $pasaporte,
                'form1'       => $form1->createView(),
            ));
        }
 
    }

    /**
    * FUNCION PARA CARGAR LOS PASAPORTES AL PERSONAL
    */
    public function pasaportecargaAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CorresponsaliaBundle:Personal')->find($id);

        $datosform = $request->request->all();
        $datosform = $datosform['form'];

        $file = $datosform['file'];

        if($file != NULL)
        {
            $entity->setArchivo($file);
            $em->persist($entity);
            $em->flush(); 

            $deleteForm = $this->createDeleteForm($id);

            return $this->render('CorresponsaliaBundle:Personal:show.html.twig', array(
                'entity'      => $entity,
                'delete_form' => $deleteForm->createView(),        ));

        }else
        {
            $nombre = $entity->getNombre();
            $pasaporte = $entity->getPasaporte();

            //se crea el formulario, mostrará los representantes
            $form1 = $this->createFormBuilder()
                        ->add('file', 'file')
            ->getForm();

            return $this->render('CorresponsaliaBundle:Personal:pasaporte.html.twig', array(
                'entity'      => $entity,
                'nombre'      => $nombre,
                'pasaporte'   => $pasaporte,
                'form1'       => $form1->createView(),
            ));
        }
    }

    /**
     * Creates a form to delete a Personal entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('personal_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
