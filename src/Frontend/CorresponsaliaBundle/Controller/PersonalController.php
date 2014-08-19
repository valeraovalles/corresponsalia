<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File;

use Frontend\CorresponsaliaBundle\Entity\Personal;
use Frontend\CorresponsaliaBundle\Entity\Representante;
use Frontend\CorresponsaliaBundle\Entity\Corresponsalia;
use Frontend\CorresponsaliaBundle\Entity\Cargo;
use Frontend\CorresponsaliaBundle\Entity\Contrato;

use Frontend\CorresponsaliaBundle\Form\PersonalType;

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

        $archivo = $entity->getArchivo();

        if($archivo != NULL)
        {
            $filee = explode('.', $archivo);
            $extension = $filee[1];
            $nombre1 = $filee[0];        

            $archivo = $nombre1;
            $ruta = "/corresponsalia/web/uploads/personal/".$archivo.".".$extension;  

            return $this->render('CorresponsaliaBundle:Personal:show.html.twig', array(
                'entity'      => $entity,
                'extension'   => $extension,
                'archivo'     => $archivo,
                'ruta'        => $ruta,
                'delete_form' => $deleteForm->createView(),        ));
        }else
        {
            return $this->render('CorresponsaliaBundle:Personal:show.html.twig', array(
                'entity'      => $entity,
                'delete_form' => $deleteForm->createView(),        ));
        }

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
        $archivo = $entity->getArchivo();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);


        if ($editForm->isValid()) {
            $entity->setArchivo($archivo);
            //die;
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

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Personal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Personal entity.');
        }

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

            $editForm = $this->createEditForm($entity);
            $deleteForm = $this->createDeleteForm($id);

            return $this->render('CorresponsaliaBundle:Personal:pasaporte.html.twig', array(
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),                
                'delete_form' => $deleteForm->createView(),
                'nombre'      => $nombre,
                'pasaporte'   => $pasaporte,
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
        
        if (!$entity) 
        {
            throw $this->createNotFoundException('Unable to find Personal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        
        $nombre_c = $entity->getNombre();
        $pasaporte = $entity->getPasaporte();

        if($editForm['file']->getData())
        {
            $file=$editForm['file']->getData();

            $tamaño=number_format($file->getClientSize(),0, ',', '')/1000;
            $extension = $file->guessExtension();
            $nombre=$file->getClientOriginalName();
            $nombre=explode(".", $nombre);
            $nombre1=$nombre[0];

            //valido tamaño
            if ($tamaño>2000) 
            {
                $this->get('session')->getFlashBag()->add('alert', 'El archivo no puede ser mayor a 2MB.');

                return $this->render('CorresponsaliaBundle:Personal:pasaporte.html.twig', array(
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),                
                'delete_form' => $deleteForm->createView(),
                'nombre'      => $nombre_c,
                'pasaporte'   => $pasaporte,
                ));
            }
            $extensiones=array('jpg','jpeg','png','gif','doc','odt','xls','xlsx','docx','pdf');
            
            //valido las extensiones
            if (!array_search($extension,$extensiones)) 
            {
                $this->get('session')->getFlashBag()->add('alert', 'El formato de archivo que intenta subir no está permitido.');

                return $this->render('CorresponsaliaBundle:Personal:pasaporte.html.twig', array(
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),                
                'delete_form' => $deleteForm->createView(),
                'nombre'      => $nombre_c,
                'pasaporte'   => $pasaporte,
            )); 
            }

            $nombre=str_replace(array(" ","/",".","_","-"),array("","","","",""),trim($nombre1));

            if($file->move('uploads/personal/',$id.'_'.\date("Gis").'.'.$extension) )
            {
                $entity->setArchivo($id.'_'.\date("Gis").'.'.$extension);
            }
            $em->persist($entity);
            $em->flush(); 

            
            $archivo = $id.'_'.\date("Gis");
            $ruta = "/corresponsalia/web/uploads/personal/".$id.'_'.\date("Gis").".".$extension;    
       
            return $this->render('CorresponsaliaBundle:Personal:show.html.twig', array(
                'entity'      => $entity,
                'extension'   => $extension,
                'archivo'     => $archivo,
                'ruta'        => $ruta,
                'delete_form' => $deleteForm->createView(),        ));

        }else
        { 
            return $this->render('CorresponsaliaBundle:Personal:pasaporte.html.twig', array(
                'entity'      => $entity,
                'edit_form'   => $editForm->createView(),                
                'delete_form' => $deleteForm->createView(),
                'nombre'      => $nombre_c,
                'pasaporte'   => $pasaporte,
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
