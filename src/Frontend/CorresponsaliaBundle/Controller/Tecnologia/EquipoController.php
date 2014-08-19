<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Equipo;
use Frontend\CorresponsaliaBundle\Form\Tecnologia\EquipoType;

use Frontend\CorresponsaliaBundle\Entity\Tecnologia\Asignacion;

/**
 * Tecnologia\Equipo controller.
 *
 */
class EquipoController extends Controller
{

    /**
     * Lists all Tecnologia\Equipo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $listEquipo = array();
        $indice = 0;
        if ($this->get('security.context')->isGranted('ROLE_TECNO_ADMIN')) {
            // el usuario tiene el role 'ROLE_TECNO_ADMIN'
            $equipos = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->findAll();
            $asignaciones = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->findAll();
            foreach ($equipos as $equipo) {
                $listEquipo[$indice]['id'] = $equipo->getId(); 
                $listEquipo[$indice]['serialEquipo'] = $equipo->getSerialEquipo(); 
                $listEquipo[$indice]['descripcion'] = $equipo->getDescripcion(); 
                $listEquipo[$indice]['status'] = $equipo->getStatus(); 
                $listEquipo[$indice]['observacionCondicion'] = $equipo->getObservacionCondicion(); 
                $listEquipo[$indice]['fechaAdquisicion'] = $equipo->getFechaAdquisicion(); 
                $listEquipo[$indice]['categoria'] = $equipo->getCategoria(); 
                $listEquipo[$indice]['condicion'] = $equipo->getCondicion(); 
                $listEquipo[$indice]['modelo'] = $equipo->getModelo(); 
                foreach ($asignaciones as $asignar) {
                    if( $asignar->getId() == $equipo->getId() ){
                        $listEquipo[$indice]['corresponsalia'] = $asignar->getCorresponsalia(); 
                        $listEquipo[$indice]['responsable'] = $asignar->getResponsable(); 
                        $listEquipo[$indice]['fechaAsignacion'] = $asignar->getFechaAsignacion(); 
                        $listEquipo[$indice]['fechaEstimadaRetorno'] = $asignar->getFechaEstimadaRetorno(); 
                        $listEquipo[$indice]['fechaRetorno'] = $asignar->getFechaRetorno(); 
                        $listEquipo[$indice]['statusAsignacion'] = $asignar->getStatus(); 
                    }
                }
                $indice++;
            }
        }
        elseif ($this->get('security.context')->isGranted('ROLE_TECNO_CORRESPONSALIA')) {
            // el usuario tiene el role 'ROLE_TECNO_CORRESPONSALIA'
            $usuario = $this->get('security.context')->getToken()->getUser();
            $userCorresp = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findOneByUsuario($usuario->getId());
            $equipos = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->findAll();
            $asignaciones = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->findByCorresponsalia($userCorresp->getCorresponsalia()->getId());
            
            
            foreach ($asignaciones as $asignar) {
                $listEquipo[$indice]['corresponsalia'] = $asignar->getCorresponsalia(); 
                $listEquipo[$indice]['responsable'] = $asignar->getResponsable(); 
                $listEquipo[$indice]['fechaAsignacion'] = $asignar->getFechaAsignacion(); 
                $listEquipo[$indice]['fechaEstimadaRetorno'] = $asignar->getFechaEstimadaRetorno(); 
                $listEquipo[$indice]['fechaRetorno'] = $asignar->getFechaRetorno(); 
                $listEquipo[$indice]['statusAsignacion'] = $asignar->getStatus(); 
                foreach ($equipos as $equipo) {
                    if( $equipo->getId() == $asignar->getId()){
                        $listEquipo[$indice]['id'] = $equipo->getId(); 
                        $listEquipo[$indice]['serialEquipo'] = $equipo->getSerialEquipo(); 
                        $listEquipo[$indice]['descripcion'] = $equipo->getDescripcion(); 
                        $listEquipo[$indice]['status'] = $equipo->getStatus(); 
                        $listEquipo[$indice]['observacionCondicion'] = $equipo->getObservacionCondicion(); 
                        $listEquipo[$indice]['fechaAdquisicion'] = $equipo->getFechaAdquisicion(); 
                        $listEquipo[$indice]['categoria'] = $equipo->getCategoria(); 
                        $listEquipo[$indice]['condicion'] = $equipo->getCondicion(); 
                        $listEquipo[$indice]['modelo'] = $equipo->getModelo(); 
                    }
                }
                $indice++;
            }
        }
        
        
        
        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:index.html.twig', array(
            'listEquipo' => $listEquipo,
        ));
    }
    /**
     * Creates a new Tecnologia\Equipo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Equipo();
        $form = $this->createCreateForm($entity);
        
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        
        $equipoResult = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->findOneBySerialEquipo($entity->getSerialEquipo());
      
        if (!$equipoResult) {
            if ($this->get('security.context')->isGranted('ROLE_TECNO_CORRESPONSALIA')) {
                $responsable = $request->request->get('responsable');
                $distintRole = ($responsable == '') ? FALSE : TRUE ;
            }else {
                $distintRole = TRUE;
            }
            if ($distintRole) {
                if ($form->isValid()) {
                    $condicion = $entity->getCondicion()->getNombre();
                    if($condicion == "MALO" or $condicion == "REGULAR"){
                        $entity->setStatus(FALSE);
                    }else {
                        $entity->setStatus(TRUE);
                    }
                    
                    $entity->setDescripcion(strtoupper($entity->getDescripcion()));
                    $entity->setSerialEquipo(strtoupper($entity->getSerialEquipo()));
                    $entity->setObservacionCondicion(strtoupper($entity->getObservacionCondicion()));
                    $entity->setDescripcion(strtoupper($entity->getDescripcion()));
                    $em->persist($entity);
                    $em->flush();
                    
                    if ($this->get('security.context')->isGranted('ROLE_TECNO_CORRESPONSALIA')) {
                        // el usuario tiene el role 'ROLE_TECNO_CORRESPONSALIA'
                        $asignacion = new Asignacion();
                        $usuario = $this->get('security.context')->getToken()->getUser();
                        $userCorresp = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findOneByUsuario($usuario->getId());
                        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($userCorresp->getCorresponsalia()->getId());
                        $asignacion->setCorresponsalia($corresponsalia);
                        $asignacion->setFechaAsignacion(new \DateTime);
                        $status = $em->getRepository('CorresponsaliaBundle:Tecnologia\StatusAsignacion')->findOneByNombre("Permanente");
                        $asignacion->setStatus($status);
                        $asignacion->setId($entity->getId());
                        $asignacion->setResponsable($responsable);
                        $em->persist($asignacion);
                        $em->flush();
                    }
                    
                    
                    $this->get('session')->getFlashBag()->set(
                        'success',
                        array(
                            'title' => 'Nuevo! ',
                            'message' => 'Equipo agregado.'
                        )
                    );
                    return $this->redirect($this->generateUrl('tecnoequipo_show', array('id' => $entity->getId())));
                }
            }
        }else {
            $this->get('session')->getFlashBag()->set(
                    'danger',
                    array(
                        'title' => 'Error! ',
                        'message' => 'Ya existe un equipo con el mismo serial.'
                    )
                );
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'error_responsable' => $distintRole,
        ));
    }

    /**
    * Creates a form to create a Tecnologia\Equipo entity.
    *
    * @param Equipo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Equipo $entity)
    {
        $form = $this->createForm(new EquipoType(), $entity, array(
            'action' => $this->generateUrl('tecnoequipo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tecnologia\Equipo entity.
     *
     */
    public function newAction()
    {
        $entity = new Equipo();
        $form   = $this->createCreateForm($entity);

        $retVal = FALSE ;
        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'error_responsable' => $retVal,
        ));
    }

    /**
     * Finds and displays a Tecnologia\Equipo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
        }
        
        $flag = FALSE;
        $asignacion = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($id);
        
        if ($asignacion) {
            $flag = TRUE;
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:show.html.twig', array(
            'entity'      => $entity,
            'asignacion'  => $flag,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Tecnologia\Equipo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        
        $flag = FALSE;
        $asignacion = $em->getRepository('CorresponsaliaBundle:Tecnologia\Asignacion')->find($id);
        
        if ($asignacion) {
            $flag = TRUE;
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:edit.html.twig', array(
            'entity'      => $entity,
            'asignacion'  => $flag,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tecnologia\Equipo entity.
    *
    * @param Equipo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Equipo $entity)
    {
        $form = $this->createForm(new EquipoType(), $entity, array(
            'action' => $this->generateUrl('tecnoequipo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tecnologia\Equipo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $condicion = $entity->getCondicion()->getNombre();
            if($condicion == "MALO" or $condicion == "REGULAR"){
                $entity->setStatus(FALSE);
            }else{
                $entity->setStatus(TRUE);
            }
            
            $entity->setDescripcion(strtoupper($entity->getDescripcion()));
            $entity->setSerialEquipo(strtoupper($entity->getSerialEquipo()));
            $entity->setObservacionCondicion(strtoupper($entity->getObservacionCondicion()));
            $entity->setDescripcion(strtoupper($entity->getDescripcion()));
            
            $em->flush();

            $this->get('session')->getFlashBag()->set(
                'success',
                array(
                    'title' => 'Editado!',
                    'message' => 'Equipo con exito.'
                )
            );
            return $this->redirect($this->generateUrl('tecnoequipo_edit', array('id' => $id)));
        }

        return $this->render('CorresponsaliaBundle:Tecnologia/Equipo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tecnologia\Equipo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Tecnologia\Equipo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tecnologia\Equipo entity.');
            }
            
            $descripcion = $entity->getDescripcion();
            $em->remove($entity);
            $em->flush();
        }

        $this->get('session')->getFlashBag()->set(
            'danger',
            array(
                'title' => 'Eliminado! ',
                'message' => 'Equipo '.$descripcion.'.'
            )
        );
        return $this->redirect($this->generateUrl('tecnoequipo'));
    }

    /**
     * Creates a form to delete a Tecnologia\Equipo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tecnoequipo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'ELIMINAR'))
            ->getForm()
        ;
    }
}
