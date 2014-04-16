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

        $datosform = $request->request->all();
        $datosform = $datosform['form'];


        $contrato_elegido = $datosform['contratos'];

        $em = $this->getDoctrine()->getManager();

        $entity = new Personal();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {

            if($entity->getCargoId() == 'Representante Legal')
            { 
                
                $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->findAll($entity->getCorresponsaliaId());
                $cargo = $em->getRepository('CorresponsaliaBundle:Cargo')->findAll($entity->getCargoId());

                $nombre = $entity->getNombre();
                $sueldo = $entity->getSueldo();
                $pasaporte = $entity->getPasaporte();
                $fechaingreso = $entity->getFechaingreso();
                $correo = $entity->getCorreo();
                $telefono = $entity->getTelefono();
                $corresponsaliaId = $corresponsalia[0];
                $cargoId = $cargo[0];
                $personalId = $entity->getId();

                $entity1 = new Representante();

                $entity1->setNombre($nombre);
                $entity1->setSueldo($sueldo);
                $entity1->setPasaporte($pasaporte);
                $entity1->setFechaingreso($fechaingreso);
                $entity1->setCorreo($correo);
                $entity1->setTelefono($telefono);
                $entity1->setCorresponsaliaId($corresponsaliaId);
                $entity1->setCargoId($cargoId);
                $entity1->setContratoId($contrato_elegido);
                $entity1->setPersonalId($personalId);

                $em->persist($entity1);
            }

            $em = $this->getDoctrine()->getManager();
            $entity->setContratoId($contrato_elegido);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('personal_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Personal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
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

        $f=new funciones;
        $respuesta=$f->Contratoscodigo();

        $contratos = $respuesta[0];
        $cantidad = $respuesta[1];

        //se crea el formulario, mostrará solo unidades solicitantes
        $form1 = $this->createFormBuilder()
                    ->add('contratos', 'choice', array(
                        'choices'   => $contratos,
                    ))
        ->getForm();


        return $this->render('CorresponsaliaBundle:Personal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'form1'   => $form1->createView(),
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

        $f=new funciones;
        $respuesta=$f->Contratoscodigo();

        $contratos = $respuesta[0];
        $cantidad = $respuesta[1];

        //se crea el formulario, mostrará solo unidades solicitantes
        $form1 = $this->createFormBuilder()
                    ->add('contratos', 'choice', array(
                        'choices'   => $contratos,
                    ))
        ->getForm();

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
            'form1'   => $form1->createView(),
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
        $datosform = $request->request->all();
        $datosform = $datosform['form'];
        $contrato_elegido = $datosform['contratos'];

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
            $entity->setContratoId($contrato_elegido);
            $em->persist($entity);

            $em->flush();

            return $this->redirect($this->generateUrl('personal_edit', array('id' => $id)));
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
