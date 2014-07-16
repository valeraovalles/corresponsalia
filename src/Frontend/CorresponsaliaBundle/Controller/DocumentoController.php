<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Documento;
use Frontend\CorresponsaliaBundle\Form\DocumentoType;

/**
 * Documento controller.
 *
 */
class DocumentoController extends Controller
{
    public function indexAction($corresponsalia)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Documento')->findByCorresponsaliaId($corresponsalia);

        $cont = 0;
        $entities= array();
        $i = 0;
        foreach ($entity as $key) 
        {
            $id[$key->getId()]=$key->getId();
            $entities[$i]['id'] = $id[$key->getId()];

            $corres[$key->getId()]=$key->getCorresponsaliaId();
            $entities[$i]['corresponsalia'] = $corres[$key->getId()];

            $file[$key->getId()]=$key->getArchivo();
            $entities[$i]['file'] = $file[$key->getId()];

            $descripcion[$key->getId()]=$key->getDescripcion();
            $entities[$i]['descripcion'] = $descripcion[$key->getId()];

            $cont ++;
            $i++;
        }

        return $this->render('CorresponsaliaBundle:Documento:index.html.twig', array(
            'entities' => $entities,
            'corresponsalia'    => $corresponsalia,
        ));
    }
    /**
     * Creates a new Documento entity.
     *
     */
    public function createAction(Request $request,$corresponsalia)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = new Documento();

        $form = $this->createCreateForm($entity, $corresponsalia);
        $form->handleRequest($request);

        $entities = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($corresponsalia);
        $nombre_c = $entities->getNombre()." | ".$entities->getPais();

        if ($form->isValid()) {

            if($form['file']->getData())
            {

                $file=$form['file']->getData();

                $tamaño=number_format($file->getClientSize(),0, ',', '')/1000;
                $extension = $file->guessExtension();
                $nombre=$file->getClientOriginalName();
                $nombre=explode(".", $nombre);
                $nombre=$nombre[0];

                //valido tamaño
                if ($tamaño>2000) {
                    $this->get('session')->getFlashBag()->add('alert', 'El archivo no puede ser mayor a 2MB.');

                    return $this->render('CorresponsaliaBundle:Documento:new.html.twig', array(
                        'entity' => $entity,
                        'form'   => $form->createView(),
                    ));

                }
                $extensiones=array('jpg','jpeg','png','gif','doc','odt','xls','xlsx','docx','pdf');
                //valido las extensiones
                if (!array_search($extension,$extensiones)) {
                    $this->get('session')->getFlashBag()->add('alert', 'El formato de archivo que intenta subir no está permitido.');

                    return $this->render('CorresponsaliaBundle:Documento:new.html.twig', array(
                        'entity' => $entity,
                        'form'   => $form->createView(),
                    ));
                }
                
                $nombre=str_replace(array(" ","/",".","_","-"),array("","","","",""),trim($nombre));

                //GUARDO EL ARCHIVO
                if($file->move('uploads/consultoria/',$nombre.'_'.\date("Gis").'.'.$extension) )
                {
                     $entity->setArchivo($nombre.'_'.\date("Gis").'.'.$extension);
                }
            }

            $entity->setCorresponsaliaId($entities);

            $em->persist($entity);

            $em->flush();

            return $this->redirect($this->generateUrl('documento_show', array(
                                                                                'id' => $entity->getId(), 
                                                                                'corresponsalia'    => $corresponsalia,
                                                                                )));
        }

        return $this->render('CorresponsaliaBundle:Documento:new.html.twig', array(
            'entity' => $entity,
            'corresponsalia'    => $corresponsalia,
            'nombre_c'      => $nombre_c,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Documento entity.
    *
    * @param Documento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Documento $entity, $corresponsalia)
    {
        $form = $this->createForm(new DocumentoType(), $entity, array(
            'action' => $this->generateUrl('documento_create', array('corresponsalia' => $corresponsalia)),            
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Documento entity.
     *
     */
    public function newAction($corresponsalia)
    {   
        $entity = new Documento();
        $form   = $this->createCreateForm($entity, $corresponsalia);

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($corresponsalia);

        $nombre_c = $entities->getNombre()." | ".$entities->getPais();

        return $this->render('CorresponsaliaBundle:Documento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'corresponsalia'    => $corresponsalia,
            'nombre_c'          => $nombre_c,
        ));
    }

    /**
     * Finds and displays a Documento entity.
     *
     */
    public function showAction($id, $corresponsalia)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Documento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Documento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Documento:show.html.twig', array(
            'entity'      => $entity,
            'corresponsalia'    => $corresponsalia,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Documento entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('CorresponsaliaBundle:Documento')->find($id);
        $corresponsalia= $entity->getCorresponsaliaId()->getId();
        $nombre_c = $entity->getCorresponsaliaId()->getNombre();

        $archivo = $entity->getArchivo();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Documento entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorresponsaliaBundle:Documento:edit.html.twig', array(
            'entity'      => $entity,
            'corresponsalia'    => $corresponsalia,
            'nombre_c'      => $nombre_c,
            'archivo'       =>$archivo,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Documento entity.
    *
    * @param Documento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Documento $entity)
    {
        $form = $this->createForm(new DocumentoType(), $entity, array(
            'action' => $this->generateUrl('documento_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Documento entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorresponsaliaBundle:Documento')->find($id);

        $corresponsalia = $entity->getCorresponsaliaId()->getId();
        $archivo = $entity->getArchivo();

        $corres = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($corresponsalia);


        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Documento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $alert = 0;
        if ($editForm->isValid()) {
        
            $entity->setArchivo($archivo);
            $entity->setCorresponsaliaId($corres);
            $em->flush();
            return $this->redirect($this->generateUrl('documento_show', array('id' => $id,
                                                                              'corresponsalia'  => $corresponsalia,
                                                                                )));
            
        }
        return $this->render('CorresponsaliaBundle:Documento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Documento entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Documento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Documento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('documento'));
    }

    /**
     * Creates a form to delete a Documento entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('documento_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
