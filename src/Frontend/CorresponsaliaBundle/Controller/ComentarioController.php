<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Comentario;
use Frontend\CorresponsaliaBundle\Form\ComentarioType;

/**
 * Comentario controller.
 *
 */
class ComentarioController extends Controller
{

    /**
     * Lists all Comentario entities.
     *
     */
    public function indexAction($corresponsalia)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Comentario')->findByCorresponsaliaId($corresponsalia);

        $cont = 0;
        $entities= array();
        $i = 0;
        foreach ($entity as $key) 
        {
            $id[$key->getId()]=$key->getId();
            $entities[$i]['id'] = $id[$key->getId()];

            $corres[$key->getId()]=$key->getFechaRegistro();
            $entities[$i]['fechaRegistro'] = $corres[$key->getId()];

            $corres[$key->getId()]=$key->getCorresponsaliaId();
            $entities[$i]['corresponsalia'] = $corres[$key->getId()];

            $comn[$key->getId()]=$key->getComentario();
            $entities[$i]['comentario'] = $comn[$key->getId()];

            $cont ++;
            $i++;
        }

        return $this->render('CorresponsaliaBundle:Comentario:index.html.twig', array(
            'entities'          => $entities,    
            'corresponsalia'    => $corresponsalia,
            'cont'              => $cont,
        ));
    }
    /**
     * Creates a new Comentario entity.
     *
     */
    public function createAction(Request $request, $corresponsalia)
    {
        $em = $this->getDoctrine()->getManager();

        $correspons = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($corresponsalia);
        $hoy = date_create_from_format('Y-m-d H:m:i', \date("Y-m-d H:m:i"));

        $entity = new Comentario();
        $form = $this->createCreateForm($entity, $corresponsalia);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setCorresponsaliaId($correspons);
            $entity->setFechaRegistro($hoy);

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('comentario_show', array(
                                                                    'id' => $entity->getId()
                                                                    )));
        }

        return $this->render('CorresponsaliaBundle:Comentario:new.html.twig', array(
            'entity' => $entity,
            'corresponsalia'    => $corresponsalia,
            'nombre_c'          => $correspons->getNombre(),
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Comentario entity.
    *
    * @param Comentario $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Comentario $entity, $corresponsalia)
    {
        $form = $this->createForm(new ComentarioType(), $entity, array(
            'action' => $this->generateUrl('comentario_create', array('corresponsalia' => $corresponsalia)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Comentario entity.
     *
     */
    public function newAction($corresponsalia)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = new Comentario();
        $form   = $this->createCreateForm($entity, $corresponsalia);

        $entitys = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($corresponsalia);
        $nombre_c = $entitys->getNombre();

        return $this->render('CorresponsaliaBundle:Comentario:new.html.twig', array(
            'entity' => $entity,
            'corresponsalia'    => $corresponsalia,
            'nombre_c'          => $nombre_c,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Comentario entity.
     *
     */
    public function showAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Comentario')->find($id);


        $corresponsalia= $entity->getCorresponsaliaId()->getId();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comentario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Comentario:show.html.twig', array(
            'entity'      => $entity,
            'corresponsalia'    => $corresponsalia,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Comentario entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Comentario')->find($id);
        $corresponsalia= $entity->getCorresponsaliaId()->getId();
        $nombre_c = $entity->getCorresponsaliaId()->getNombre();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comentario entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Comentario:edit.html.twig', array(
            'entity'      => $entity,
            'corresponsalia'    => $corresponsalia,
            'nombre_c'      => $nombre_c,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Comentario entity.
    *
    * @param Comentario $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Comentario $entity)
    {
        $form = $this->createForm(new ComentarioType(), $entity, array(
            'action' => $this->generateUrl('comentario_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Comentario entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Comentario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comentario entity.');
        }

        $corresp = $entity->getCorresponsaliaId()->getId();
        $fechaRegistro = $entity->getFechaRegistro();

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);

        $editForm->handleRequest($request);
        //traer fecha del registro y id de la corresponsalia para setearla 
        
    
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($corresp);

        if ($editForm->isValid()) {
    
            $entity->setFechaRegistro($fechaRegistro);
            $entity->setCorresponsaliaId($corresponsalia);

            $em->flush();

            return $this->redirect($this->generateUrl('comentario_show', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Comentario:edit.html.twig', array(
            'entity'      => $entity,
            'corresponsalia'    => $corresponsalia,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Comentario entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Comentario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Comentario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('comentario'));
    }

    /**
     * Creates a form to delete a Comentario entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comentario_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
