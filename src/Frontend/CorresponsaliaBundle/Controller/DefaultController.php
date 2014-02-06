<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Cambio;
use Frontend\CorresponsaliaBundle\Entity\Relaciongasto;
use Frontend\CorresponsaliaBundle\Entity\Cobertura;
use Frontend\CorresponsaliaBundle\Form\RelaciongastoType;
use Administracion\UsuarioBundle\Entity\Usercorresponsalia;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function Listadorendicion($idperiodo){
        $em = $this->getDoctrine()->getManager();
        $periodo = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        
        if($periodo->getEstatus()!=3) // si el periodo esta abierto
        $dql   = "SELECT r FROM CorresponsaliaBundle:Relaciongasto r where r.periodorendicion= :idperiodo order by r.id DESC";
        
        else if($periodo->getEstatus()==3) // si fue devuelta para rendicion solo muestro lo seleccionado
        $dql   = "SELECT r FROM CorresponsaliaBundle:Relaciongasto r  where r.periodorendicion= :idperiodo and r.aprobada=false order by r.id DESC";
        
        
        $query = $em->createQuery($dql);
        $query->setParameter('idperiodo', $idperiodo);
        $rendicion = $query->getResult(); 
        return $rendicion;
    }

    public function Estadofondo($idperiodo)
    {
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT e FROM CorresponsaliaBundle:Estadofondo e where e.periodorendicion= :idperiodo";
        $query = $em->createQuery($dql);
        $query->setParameter('idperiodo', $idperiodo);
        $estadofondo = $query->getResult(); 
        if(empty($estadofondo)) return null;
        $estadofondo=$estadofondo[0];

        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Cambio')->findBy(array('corresponsalia'=>$estadofondo->getPeriodorendicion()->getCorresponsalia()->getId()),array('id'=>'desc'));
        $corresponsalia=$corresponsalia[0];

        $datos['saldoinicial']=$estadofondo->getSaldoinicial();
        $datos['recursorecibido']=$estadofondo->getRecursorecibido();
        $datos['saldofinal']=$estadofondo->getSaldofinal();        
        $datos['pagos']=$estadofondo->getPagos();
           
        $datos['saldoinicial_mn']=$datos['saldoinicial']*$corresponsalia->getMontocambiodolar();
        $datos['recursorecibido_mn']=$datos['recursorecibido']*$corresponsalia->getMontocambiodolar();
        $datos['saldofinal_mn']=$datos['saldofinal']*$corresponsalia->getMontocambiodolar();    
        $datos['pagos_mn']=$datos['pagos']*$corresponsalia->getMontocambiodolar();  

        $datos['saldoinicial_bs']=$datos['saldoinicial']*6.30;
        $datos['recursorecibido_bs']=$datos['recursorecibido']*6.30;
        $datos['saldofinal_bs']=$datos['saldofinal']*6.30;   
        $datos['pagos_bs']=$datos['pagos']*6.30;
        
        
        foreach ($datos as $k => $v){
            $dato[$k]=  number_format($v,2,",",".");
        }
        return $dato;
    }
    
    public function cambio($idcor)
    {
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT c FROM CorresponsaliaBundle:Cambio c where c.corresponsalia= :idcorresponsalia order by c.id DESC";
        $query = $em->createQuery($dql);
        $query->setParameter('idcorresponsalia', $idcor);
        $cambio = $query->getResult(); 
        if(isset($cambio[0])) $cambio=$cambio[0];
        else $cambio=null;
        return $cambio;
    }
    
    public function tasacambioAction()
    {
        $em = $this->getDoctrine()->getManager();
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $usercorresponsalia = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findByUsuario($idusuario);
        $idcor=$usercorresponsalia[0]->getCorresponsalia()->getId();

        $cambio=  $this->cambio($idcor);
        if($cambio==null){
             $this->get('session')->getFlashBag()->add('alert', 'DEBE INDICAR LA TASA DE CAMBIO DE SU MONEDA AL DÓLAR ANTES DE CONTINUAR.');
             return $this->redirect($this->generateUrl('cambio_new',array('idcor'=>$idcor)));
        }
        
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($idcor);
        
        return $this->render('CorresponsaliaBundle:Default:tasacambio.html.twig',
                array(
                    "cambio"=>$cambio,
                    "corresponsalia"=>$corresponsalia,
                ));
    }
  
    
    public function revisionrendicionAction($idperiodo)
    {  
        
        $em = $this->getDoctrine()->getManager();
        $periodo = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        
        //consulto si tiene fondo asignado
        $estadofondo=$this->Estadofondo($idperiodo);
        if($estadofondo==null){
            $this->get('session')->getFlashBag()->add('alert', 'Aún no tiene asignado un fondo para este período.');
            return $this->redirect($this->generateUrl('periodorendicion'));                
        }
        //fin
        
        //verifico si hay rendicion para mostrar el listado con modal
        $rendicionlista=$this->Listadorendicion($periodo);
        //fin

        return $this->render('CorresponsaliaBundle:Default:revisionrendicion.html.twig',
            array(
                "estadofondo"=>$estadofondo,
                "rendicionlista"=>$rendicionlista,
                'periodo'=>$periodo,
        ));
    }
    
    public function guardarevisionrendicionAction(Request $request,$idperiodo)
    {  
        $em = $this->getDoctrine()->getManager();
   
        $consulta = $em->createQuery('update CorresponsaliaBundle:Relaciongasto r set r.aprobada= true WHERE r.periodorendicion = :periodo and r.aprobada=false');
        $consulta->setParameter('periodo', $idperiodo);
        $consulta->execute();    
        
        $datos=$request->request->all();
        if(isset($datos['rendiciones'])){
            $datos=$datos['rendiciones'];
            
            foreach ($datos as $v) {
                $consulta = $em->createQuery('update CorresponsaliaBundle:Relaciongasto r set r.aprobada= false WHERE r.id = :id');
                $consulta->setParameter('id', $v);
                $consulta->execute();            
            }
        }

        $this->get('session')->getFlashBag()->add('notice', 'Se ha actualizado el estatus de las rendiciones correctamente.');
        return $this->redirect($this->generateUrl('corresponsalia_revisionrendicion',array('idperiodo'=>$idperiodo)));
        
    }
    public function estatusrendicionAction($idperiodo,$estatus)
    {  
        $em = $this->getDoctrine()->getManager();
        $consulta = $em->createQuery('update CorresponsaliaBundle:Periodorendicion p set p.estatus= :estatus WHERE p.id = :id');
        $consulta->setParameter('id', $idperiodo);
        $consulta->setParameter('estatus', $estatus);
        $consulta->execute();

        //cambio los estatus de las rendiciones a aprobadas si no han sido cambiadas
        if($estatus==4){
            $consulta = $em->createQuery('update CorresponsaliaBundle:Relaciongasto r set r.aprobada= true WHERE r.periodorendicion = :periodo and r.aprobada=false');
            $consulta->setParameter('periodo', $idperiodo);
            $consulta->execute();    
        }
               
        
        $this->get('session')->getFlashBag()->add('notice', 'El periodo se ha cambiado su estatus.');
        return $this->redirect($this->generateUrl('periodorendicion_show',array('id'=>$idperiodo)));
    }
    public function rendirgastofunhonAction($idperiodo)
    {    

        $em = $this->getDoctrine()->getManager();
        $periodo = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        
        $idtipogasto=$periodo->getTipogasto()->getId();
        $anio=$periodo->getAnio();
        $mes=$periodo->getMes();
        $idcor=$periodo->getCorresponsalia()->getId();
        
        //valido si ya fue asignada una tasa de cambio
        $cambio=  $this->cambio($idcor);
        if($cambio==null){
             $this->get('session')->getFlashBag()->add('alert', 'DEBE INDICAR LA TASA DE CAMBIO DE SU MONEDA AL DÓLAR ANTES DE CONTINUAR.');
             return $this->redirect($this->generateUrl('cambio_new',array('idcor'=>$idcor)));
        }
        //fin
        
        //consulto si tiene fondo asignado
        $estadofondo=$this->Estadofondo($idperiodo);
        if($estadofondo==null){
            $this->get('session')->getFlashBag()->add('alert', 'Aún no tiene asignado un fondo para este período.');
            return $this->redirect($this->generateUrl('periodorendicion'));                
        }
        //fin

        //genero form de relacion gasto
        $entity = new Relaciongasto();
        $form   = $this->createForm(new RelaciongastoType($idtipogasto), $entity);
        //fin
       
        //verifico si hay rendicion para mostrar el listado con modal
        $rendicionlista=$this->Listadorendicion($periodo);
        //fin

        return $this->render('CorresponsaliaBundle:Default:rendirgasto.html.twig',
                array(
                    "form" => $form->createView(),
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    'periodo'=>$periodo,
                    "cambio"=>$cambio
                ));
    }
    
   public function rendirgastocobAction($idcobertura)
    {    

        $em = $this->getDoctrine()->getManager();
        $cobertura = $em->getRepository('CorresponsaliaBundle:Cobertura')->find($idcobertura);
        
        $idperiodo=$cobertura->getPeriodorendicion()->getId();
        
        $periodo = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        
        $idtipogasto=$periodo->getTipogasto()->getId();
        $anio=$periodo->getAnio();
        $mes=$periodo->getMes();
        $idcor=$periodo->getCorresponsalia()->getId();
        
        //valido si ya fue asignada una tasa de cambio
        $cambio=  $this->cambio($idcor);
        if($cambio==null){
             $this->get('session')->getFlashBag()->add('alert', 'DEBE INDICAR LA TASA DE CAMBIO DE SU MONEDA AL DÓLAR ANTES DE CONTINUAR.');
             return $this->redirect($this->generateUrl('cambio_new',array('idcor'=>$idcor)));
        }
        //fin
        
        //consulto si tiene fondo asignado
        $estadofondo=$this->Estadofondo($idperiodo);
        if($estadofondo==null){
            $this->get('session')->getFlashBag()->add('alert', 'Aún no tiene asignado un fondo para este período.');
            return $this->redirect($this->generateUrl('periodorendicion'));                
        }
        //fin

        //genero form de relacion gasto
        $entity = new Relaciongasto();
        $form   = $this->createForm(new RelaciongastoType($idtipogasto), $entity);
        //fin
       
        //verifico si hay rendicion para mostrar el listado con modal
        $rendicionlista=$this->Listadorendicion($periodo);
        //fin

        return $this->render('CorresponsaliaBundle:Default:rendirgastocob.html.twig',
                array(
                    "form" => $form->createView(),
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    'periodo'=>$periodo,
                    "cambio"=>$cambio,
                    'cobertura'=>$cobertura
                ));
    }
    
  
    public function rendirgastoAction($idperiodo)
    {
        $em = $this->getDoctrine()->getManager();
        $periodo = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        
        if($periodo->getTipogasto()->getId()==1 or $periodo->getTipogasto()->getId()==3){
            return $this->forward('CorresponsaliaBundle:Default:rendirgastofunhon',array(
                'idperiodo'=>$idperiodo,
            ));
        }
    }
        public function inicioAction()
    {
            
       return $this->render('CorresponsaliaBundle:Default:inicio.html.twig');               
      
    }
    
    public function guardarendicionAction(Request $request,$idperiodo)
    {

        $datos=$request->request->all();
        $datos=$datos['rendicion_relaciongasto'];

        $em = $this->getDoctrine()->getManager();
        $periodo = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        
        $idtipogasto=$periodo->getTipogasto()->getId();
        $anio=$periodo->getAnio();
        $mes=$periodo->getMes();
        $idcor=$periodo->getCorresponsalia()->getId();
        
        //genero form de rendicion con su validacion
        $entity = new Relaciongasto();
        $form   = $this->createForm(new RelaciongastoType($idtipogasto), $entity);
        $form->bind($request);
        //fin

        
        //consulto el fondo asigando
        $estadofondo=$this->Estadofondo($idperiodo);
        //
                
        //verifico si hay rendicion para este mes
        $rendicionlista=$this->Listadorendicion($idperiodo);
        //
        
        $cambio=  $this->cambio($idcor);
        
        if ($form->isValid()) {
            $descgas = $em->getRepository('CorresponsaliaBundle:Descripciongasto')->find($idtipogasto);
            $entity->setDescripciongasto($descgas);
            $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
            $usuario = $em->getRepository('UsuarioBundle:Perfil')->find($idusuario);
            $entity->setResponsable($usuario);
            $em->persist($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('notice', 'Registro guardado exitosamente. Puede veridficar el listado de la rendición.');
            
            if($idtipogasto!=2)
            return $this->redirect($this->generateUrl('corresponsalia_rendirgasto',array('idperiodo'=>$periodo->getId()))); 
            else
            return $this->redirect($this->generateUrl('corresponsalia_rendirgastocob',array('idcobertura'=>$datos['cobertura']))); 
            
            /*return $this->forward('CorresponsaliaBundle:Default:rendirgasto', array(
                    'idcor'  => $idcor,
            ));*/
        }
        
        if($idtipogasto==1 or $idtipogasto==3)
            return $this->render('CorresponsaliaBundle:Default:rendirgasto.html.twig',
                array(
                    "form" => $form->createView(),
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    'periodo'=>$periodo,
                    "cambio"=>$cambio
            ));
        else if($idtipogasto==2){
            $cobertura = $em->getRepository('CorresponsaliaBundle:Cobertura')->find($datos['cobertura']);
            
            return $this->render('CorresponsaliaBundle:Default:rendirgastocob.html.twig',
                array(
                    "form" => $form->createView(),
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    'periodo'=>$periodo,
                    "cambio"=>$cambio,
                    "cobertura"=>$cobertura
            ));
            
        }
        
    }    
    public function editarendicionAction($idrendicion,$idperiodo)
    {
        $em = $this->getDoctrine()->getManager();
        $periodo = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        
        $idtipogasto=$periodo->getTipogasto()->getId();
        $anio=$periodo->getAnio();
        $mes=$periodo->getMes();
        $idcor=$periodo->getCorresponsalia()->getId();
        
        //genero formularios para editar y borrar
        $rendicion = $em->getRepository('CorresponsaliaBundle:Relaciongasto')->find($idrendicion);
        $form = $this->createEditForm($rendicion,$idtipogasto);
        $deleteForm = $this->createDeleteForm($idrendicion,$idperiodo);
        //fin
        
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        
        //valido si ya fue asignada una tasa de cambio
        $cambio=  $this->cambio($idcor);
        
        //consulto si tiene fondo asignado
        $estadofondo=$this->Estadofondo($idperiodo);
        
        //consulto tipo gasto
        $tipogasto = $em->getRepository('CorresponsaliaBundle:Tipogasto')->find($idtipogasto);
        //fin
        
        //verifico si hay rendicion para este mes
        $rendicionlista=$this->Listadorendicion($periodo);
        //fin

        return $this->render('CorresponsaliaBundle:Default:editarendicion.html.twig',
                array(
                    'form'   => $form->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'rendicion'=>$rendicion,
                    
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    'periodo'=>$periodo,
                    "cambio"=>$cambio
                ));
    }
    private function createEditForm(Relaciongasto $entity,$idtipogasto)
    {
        $form = $this->createForm(new RelaciongastoType($idtipogasto), $entity, array(
            'action' => $this->generateUrl('tipomoneda_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'EDITAR'));

        return $form;
    }
    
    public function actualizarendicionAction(Request $request, $idrendicion,$idperiodo)
    {
        $em = $this->getDoctrine()->getManager();
        $periodo = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        
        $idtipogasto=$periodo->getTipogasto()->getId();
        $anio=$periodo->getAnio();
        $mes=$periodo->getMes();
        $idcor=$periodo->getCorresponsalia()->getId();
        
        $rendicion = $em->getRepository('CorresponsaliaBundle:Relaciongasto')->find($idrendicion);

        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        
        if (!$rendicion) {
            throw $this->createNotFoundException('Unable to find Relaciongasto entity.');
        }
        
        $form = $this->createEditForm($rendicion,$idtipogasto);
        $deleteForm = $this->createDeleteForm($idrendicion,$idtipogasto,$anio,$mes);
        $form->handleRequest($request);
        
        //consulto corresponsalía
        $estadofondo=$this->Estadofondo($idperiodo);
        $rendicionlista=$this->Listadorendicion($idperiodo);
        $cambio=  $this->cambio($idcor);
        
        
        if ($form->isValid()) {
            $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
            $usuario = $em->getRepository('UsuarioBundle:Perfil')->find($idusuario);
            $rendicion->setResponsable($usuario);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Se ha editado la rendicion exitosamente.');
            return $this->redirect($this->generateUrl('corresponsalia_editarendicion', array('idrendicion' => $idrendicion,'idperiodo'=>$periodo->getId())));
        }

        return $this->render('CorresponsaliaBundle:Default:editarendicion.html.twig',
                array(
                    'form'   => $form->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'rendicion'=>$rendicion,
                    
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    'periodo'=>$periodo,
                    "cambio"=>$cambio
                ));
    }
    
    public function borrarrendicionAction(Request $request, $idrendicion,$idperiodo)
    {
        $form = $this->createDeleteForm($idrendicion,$idperiodo);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorresponsaliaBundle:Relaciongasto')->find($idrendicion);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Relariongasto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }
        

        $this->get('session')->getFlashBag()->add('notice', 'Se ha borrado la rendicion exitosamente.');
        
            if($entity->getPeriodorendicion()->getTipogasto()->getId()!=2)
                return $this->redirect($this->generateUrl('corresponsalia_rendirgasto',array('idperiodo'=>$idperiodo))); 
            else
                return $this->redirect($this->generateUrl('corresponsalia_rendirgastocob',array('idcobertura'=>$entity->getCobertura()->getId()))); 
            
    }
    
    private function createDeleteForm($idrendicion,$idperiodo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('corresponsalia_borrarrendicion',array(
                'idrendicion'=>$idrendicion,
                'idperiodo'=>$idperiodo,
                )))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'BORRAR'))
            ->getForm()
        ;
    }
 }
