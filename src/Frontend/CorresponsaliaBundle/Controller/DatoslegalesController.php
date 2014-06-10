<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Datoslegales;
use Frontend\CorresponsaliaBundle\Entity\Corresponsalia;
use Frontend\CorresponsaliaBundle\Form\DatoslegalesType;
use Frontend\CorresponsaliaBundle\Form\CorresponsaliaType;

use Frontend\CorresponsaliaBundle\Resources\Misclases\funciones;
/**
 * Datoslegales controller.
 *
 */
class DatoslegalesController extends Controller
{

    /**
     * Lists all Datoslegales entities.
     *
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->findAll();
        return $this->render('CorresponsaliaBundle:Datoslegales:index.html.twig', array(
            'entities' => $entities,

        ));
    }
    /**
     * Creates a new Datoslegales entity.
     *
     */
    
        public function createAction(Request $request, $corresponsalia)
        {
            $em = $this->getDoctrine()->getManager();

            $entity = new Datoslegales();
            $form = $this->createCreateForm($entity, $corresponsalia);
            $form->handleRequest($request);

            $datosform = $request->request->all();
            $datosform = $datosform['form'];

            $representante = $datosform['representante'];
            
            $corresp = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($corresponsalia);
            
            if ($entity->getRegistro() != NULL or $entity->getDireccion() != NULL or $representante != NULL )
            {
                $entity->setRepresentanteId($representante);
                $entity->setCorresponsaliaId($corresp);
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('datoslegales_show', array('id' => $corresponsalia)));
            
            }
            
            return $this->render('CorresponsaliaBundle:Datoslegales:new.html.twig', array(
                'entity' => $entity,
                'corresponsalia'    => $corresp,
                'form'   => $form->createView(),
            ));
        }
    
    /**
    * Creates a form to create a Datoslegales entity.
    *
    * @param Datoslegales $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Datoslegales $entity, $corresponsalia)
    {
        $form = $this->createForm(new DatoslegalesType(), $entity, array(
            'action' => $this->generateUrl('datoslegales_create', array('corresponsalia' => $corresponsalia)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Datoslegales entity.
     *
     */
    public function newAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($id);

        $entity = new Datoslegales();
        $form   = $this->createCreateForm($entity, $corresponsalia);     

        $cargo = 'REPRESENTANTE LEGAL';
        $dql = 'select p.nombre from CorresponsaliaBundle:Personal p, CorresponsaliaBundle:Cargo c
                where c.id = p.cargoId and c.descripcion = :cargo ';
        $consulta = $em->createQuery($dql)->setParameter('cargo', $cargo);
        $representantes = $consulta->getResult();
        
        foreach ($representantes as $key) {
            $representante[$key['nombre']] = $key['nombre'];
            
        }

        //se crea el formulario, mostrará los representantes
        $form1 = $this->createFormBuilder()
                    ->add('representante', 'choice', array(
                        'choices'   => $representante,
                    ))
        ->getForm();





        return $this->render('CorresponsaliaBundle:Datoslegales:new.html.twig', array(
            'entity'              => $entity,
            'corresponsalia'      => $corresponsalia,
            'form'                => $form->createView(),
            'form1'               => $form1->createView(),
        ));
    }
    
    /**
     * Finds and displays a Datoslegales entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Datoslegales')->findBycorresponsaliaId($id);

        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($id);

        $cont = 0;
        foreach ($entity as $key) 
        {
            $entity['id'][$key->getId()]=$key->getId();
            $id_datoslegales = $entity['id'][$key->getId()];
            $cont ++;
        }

        if($cont != 0)
        {
            $entity = $em->getRepository('CorresponsaliaBundle:Datoslegales')->find($id_datoslegales);
            $deleteForm = $this->createDeleteForm($id);

            return $this->render('CorresponsaliaBundle:Datoslegales:show.html.twig', array(
                'entity'              => $entity,
                'corresponsalia'      => $corresponsalia,
                'delete_form'         => $deleteForm->createView(),  
                'cont'                => $cont,      
                ));
        }else
        {
            return $this->render('CorresponsaliaBundle:Datoslegales:show.html.twig', array(
                'corresponsalia'      => $corresponsalia,
                'cont'                => $cont,       
                ));
        }      
    }

    /**
     * Displays a form to edit an existing Datoslegales entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $cargo = 'REPRESENTANTE LEGAL';
        $dql = 'select p.nombre from CorresponsaliaBundle:Personal p, CorresponsaliaBundle:Cargo c
                where c.id = p.cargoId and c.descripcion = :cargo ';
        $consulta = $em->createQuery($dql)->setParameter('cargo', $cargo);
        $representantes = $consulta->getResult();
        
        foreach ($representantes as $key) {
            $representante[$key['nombre']] = $key['nombre'];
            
        }

        //se crea el formulario, mostrará los representantes
        $form1 = $this->createFormBuilder()
                    ->add('representante', 'choice', array(
                        'choices'   => $representante,
                    ))
        ->getForm();

        $datos = $em->getRepository('CorresponsaliaBundle:Datoslegales')->findBycorresponsaliaId($id);

        foreach ($datos as $key) 
        {
            $dato['id'][$key->getId()]=$key->getId();
            $id_datoslegales = $dato['id'][$key->getId()];
        }
        $entity = $em->getRepository('CorresponsaliaBundle:Datoslegales')->find($id_datoslegales);

        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($id);
        $correspon = $id;
        $editForm = $this->createEditForm($entity, $correspon);
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('CorresponsaliaBundle:Datoslegales:edit.html.twig', array(
            'entity'            => $entity,
            'edit_form'         => $editForm->createView(),
            'delete_form'       => $deleteForm->createView(),
            'form1'             => $form1->createView(),
            'corresponsalia'    => $corresponsalia,
        ));
    }

    /**
    * Creates a form to edit a Datoslegales entity.
    *
    * @param Datoslegales $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Datoslegales $entity, $correspon)
    {
        $form = $this->createForm(new DatoslegalesType(), $entity, array(
            'action' => $this->generateUrl('datoslegales_update', array('id' => $entity->getId(), 'correspon' => $correspon)),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    
    /**
     * Edits an existing Corresponsalia entity.
     *
     */
    public function updateAction(Request $request, $id, $correspon)
    {
        $em = $this->getDoctrine()->getManager();

        $datosform = $request->request->all();
        $datosform = $datosform['form'];

        $representante = $datosform['representante'];

        $entity = $em->getRepository('CorresponsaliaBundle:Datoslegales')->find($id);
        $corresponsalia = $entity->getCorresponsaliaId();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Datoslegales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity, $correspon);
        $editForm->handleRequest($request);

        $direccion = $entity->getDireccion();
        $registro = $entity->getRegistro();
        if ($representante != NULL or $direccion != NULL or $registro != NULL ) {

            $entity->setRepresentanteId($representante);
            $entity->setCorresponsaliaId($corresponsalia);
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'DATOS LEGALES REGISTRADOS');
            return $this->redirect($this->generateUrl('datoslegales_show', array('id' => $correspon)));
        }
        $this->get('session')->getFlashBag()->add('alert', 'DEBE INGRESAR DATOS LEGALES');
        return $this->render('CorresponsaliaBundle:Datoslegales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Deletes a Datoslegales entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Datoslegales')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Datoslegales entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('datoslegales'));
    }

    /**
     * Creates a form to delete a Datoslegales entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('datoslegales_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
