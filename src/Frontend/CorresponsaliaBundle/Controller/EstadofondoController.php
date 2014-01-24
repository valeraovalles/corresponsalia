<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Estadofondo;
use Frontend\CorresponsaliaBundle\Form\EstadofondoType;

/**
 * Estadofondo controller.
 *
 */
class EstadofondoController extends Controller
{
    
    public function estadofondoaniomesAction()
    {
       
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Estadofondo')->findAll();
        
        $meses= array(''=>'Seleccione un mes','01'=>'Enero','02'=>'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo','06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre');
        $anios=array(''=>'Seleccione un año', date('Y') => date('Y'),date('Y')+1 => date('Y')+1);
        
        $form = $this->createFormBuilder()
        ->add('mes', 'choice', array(
            'choices'   => $meses,
        ))
        ->add('anio', 'choice', array(
                'choices'   => $anios,
        ))
        ->add('corresponsalia', 'entity', array(
                'class' => 'CorresponsaliaBundle:Corresponsalia',
                'property' => 'nombre',
                'empty_value'=>'Seleccione una corresponsalía...'
        ))
        ->getForm();

        return $this->render('CorresponsaliaBundle:Estadofondo:estadofondoaniomes.html.twig', array(
            'entities' => $entities,
            'form'=>$form->createView()
        ));        
    }

    /**
     * Lists all Estadofondo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Estadofondo')->findAll();

        return $this->render('CorresponsaliaBundle:Estadofondo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Estadofondo entity.
     *
     */
    public function createAction(Request $request)
    {
        $datos=$request->request->all();
        $datos=$datos['form'];
        
        $entity = new Estadofondo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $usuario = $em->getRepository('UsuarioBundle:Perfil')->find(1);
            
            $entity->setSaldofinal($entity->getSaldoinicial()+$entity->getRecursorecibido());
            $entity->setFechaasignacion(new \DateTime("now"));
            $entity->setAnio($datos['anio']);
            $entity->setMes($datos['mes']);
            
            //consulto datos de corresponsalia
            $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($datos['corresponsalia']);
            $entity->setCorresponsalia($corresponsalia);
            
            $entity->setResponsable($usuario);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('estadofondo_show', array('id' => $entity->getId())));
        }

        return $this->render('CorresponsaliaBundle:Estadofondo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'datos'=>$datos
        ));
    }

    /**
    * Creates a form to create a Estadofondo entity.
    *
    * @param Estadofondo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Estadofondo $entity)
    {
        $form = $this->createForm(new EstadofondoType(), $entity, array(
            'action' => $this->generateUrl('estadofondo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Estadofondo entity.
     *
     */
    public function newAction(Request $request)
    {
        $datos=$request->request->all();
        if(!isset($datos['form']))
            return $this->redirect($this->generateUrl('estadofondo_aniomes'));
        $datos=$datos['form'];
        
        $em = $this->getDoctrine()->getManager();
        
        //valido si la corresponsalia tiene ya un fondo asignado
        $dql   = "SELECT ef FROM CorresponsaliaBundle:Estadofondo ef where ef.corresponsalia= :idcorresponsalia and ef.anio= :anio and ef.mes= :mes";
        $query = $em->createQuery($dql);
        $query->setParameter('idcorresponsalia', $datos['corresponsalia']);
        $query->setParameter('anio', $datos['anio']);
        $query->setParameter('mes', $datos['mes']);
        $ef = $query->getResult(); 
        if(!empty($ef)){
            $this->get('session')->getFlashBag()->add('alert', 'Esta corresponsalía ya tiene un fondo asignado para el año y mes seleccionado.');
            return $this->redirect($this->generateUrl('estadofondo_show',array('id'=>$ef[0]->getId())));
        }
        
        //consulto datos de corresponsalia
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($datos['corresponsalia']);
        
        $entity = new Estadofondo();
        $form   = $this->createCreateForm($entity);

        return $this->render('CorresponsaliaBundle:Estadofondo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'datos'=>$datos,
            'corresponsalia'=>$corresponsalia
        ));
    }

    /**
     * Finds and displays a Estadofondo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Estadofondo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estadofondo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Estadofondo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Estadofondo entity.
     *
     */
    public function editAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Estadofondo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estadofondo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Estadofondo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Estadofondo entity.
    *
    * @param Estadofondo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Estadofondo $entity)
    {
        $form = $this->createForm(new EstadofondoType(), $entity, array(
            'action' => $this->generateUrl('estadofondo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Estadofondo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Estadofondo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Estadofondo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $usuario=$em->getRepository('UsuarioBundle:Perfil')->find(1);
            $entity->setResponsable($usuario);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Registro actualizado exitosamente');
            return $this->redirect($this->generateUrl('estadofondo_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Estadofondo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Estadofondo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Estadofondo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Estadofondo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('estadofondo'));
    }

    /**
     * Creates a form to delete a Estadofondo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estadofondo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'BORRAR'))
            ->getForm()
        ;
    }
}
