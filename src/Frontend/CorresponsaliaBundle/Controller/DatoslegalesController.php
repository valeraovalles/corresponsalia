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
    /*
        public function createAction(Request $request)
        {
            $entity = new Datoslegales();
            $form = $this->createCreateForm($entity);
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('datoslegales_show', array('id' => $entity->getId())));
            }

            return $this->render('CorresponsaliaBundle:Datoslegales:new.html.twig', array(
                'entity' => $entity,
                'form'   => $form->createView(),
            ));
        }
    */
    /**
    * Creates a form to create a Corresponsalia entity.
    *
    * @param Corresponsalia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    /*private function createCreateForm(Corresponsalia $entity)
    {
        $form = $this->createForm(new CorresponsaliaType(), $entity, array(
            'action' => $this->generateUrl('datoslegales_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
*/
    /**
     * Displays a form to create a new Datoslegales entity.
     *
     */

    /* 
        public function newAction()
        {
            $entity = new Corresponsalia();
            $form   = $this->createCreateForm($entity);

            return $this->render('CorresponsaliaBundle:Datoslegales:new.html.twig', array(
                'entity' => $entity,
                'form'   => $form->createView(),
            ));
        }
    */
    /**
     * Finds and displays a Datoslegales entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($id);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Datoslegales:show.html.twig', array(
            'entity'              => $entity,
            'delete_form'         => $deleteForm->createView(),        
            ));
    }

    /**
     * Displays a form to edit an existing Datoslegales entity.
     *
     */
    public function editAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $id_cargo = 31;
        $dql = 'select p.nombre from CorresponsaliaBundle:Personal p 
                where p.cargoId = :id_cargo ';
        $consulta = $em->createQuery($dql)->setParameter('id_cargo', $id_cargo);
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


        $entity = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($id);
       
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('CorresponsaliaBundle:Datoslegales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'form1'       => $form1->createView(),
        ));
    }

    /**
    * Creates a form to edit a Datoslegales entity.
    *
    * @param Datoslegales $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Corresponsalia $entity)
    {
        $form = $this->createForm(new CorresponsaliaType(), $entity, array(
            'action' => $this->generateUrl('datoslegales_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    
    /**
     * Edits an existing Corresponsalia entity.
     *
     */
    public function updateAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $datosform = $request->request->all();
        $datosform = $datosform['form'];


        $representante = $datosform['representante'];

        $entity = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($id);

        $nombre = $entity->getNombre();
        $pais = $entity->getPais();
        $tipocorresponsalia = $entity->getTipocorresponsalia();
        $tipomoneda = $entity->getTipomoneda();
        $responsable = $entity->getResponsable();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Corresponsalia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $direccion = $entity->getDireccion();
        $registro = $entity->getRegistro();
        if ($representante != NULL or $direccion != NULL or $registro != NULL ) {


            $entity->setNombre($nombre);
            $entity->setPais($pais);
            $entity->setTipocorresponsalia($tipocorresponsalia);
            $entity->setTipomoneda($tipomoneda);
            $entity->setResponsable($responsable);
            $entity->setRepresentanteId($representante);
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'DATOS LEGALES REGISTRADOS');
            return $this->redirect($this->generateUrl('datoslegales_show', array('id' => $id)));
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
