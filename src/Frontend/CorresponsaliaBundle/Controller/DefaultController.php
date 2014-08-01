<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Cambio;
use Frontend\CorresponsaliaBundle\Entity\Relaciongasto;
use Frontend\CorresponsaliaBundle\Entity\Cobertura;
use Frontend\CorresponsaliaBundle\Form\RelaciongastoType;
use Administracion\UsuarioBundle\Entity\Usercorresponsalia;
use Symfony\Component\HttpFoundation\Request;

use Frontend\CorresponsaliaBundle\Resources\Misclases\funciones;

class DefaultController extends Controller
{

    public function Listadorendicion($periodo){

        $em = $this->getDoctrine()->getManager();
        
        if($periodo->getEstatus()!=3) // si el periodo esta abierto
        $dql   = "SELECT r FROM CorresponsaliaBundle:Relaciongasto r where r.periodorendicion= :idperiodo order by r.id DESC";
        
        else if($periodo->getEstatus()==3) // si fue devuelta para rendicion solo muestro lo seleccionado
        $dql   = "SELECT r FROM CorresponsaliaBundle:Relaciongasto r  where r.periodorendicion= :idperiodo and r.aprobada=false order by r.id DESC";

        $query = $em->createQuery($dql);
        $query->setParameter('idperiodo', $periodo->getId());
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

        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Cambio')->findBy(array('periodorendicion'=>$estadofondo->getPeriodorendicion()->getId()),array('id'=>'desc'));
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
    
    public function cambio($idperiodo)
    {
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT c FROM CorresponsaliaBundle:Cambio c where c.periodorendicion= :idperiodo order by c.id DESC";
        $query = $em->createQuery($dql);
        $query->setParameter('idperiodo', $idperiodo);
        $cambio = $query->getResult(); 
        if(isset($cambio[0])) $cambio=$cambio[0];
        else $cambio=null;
        return $cambio;
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
   
        $consulta = $em->createQuery("update CorresponsaliaBundle:Relaciongasto r set r.aprobada= true, r.justificadevolucion=null WHERE r.periodorendicion = :periodo and r.aprobada=false");
        $consulta->setParameter('periodo', $idperiodo);
        $consulta->execute();    

        $datos=$request->request->all();
        print_r($datos);
        if(isset($datos['rendiciones'])){
            $justificacion=$datos['justificacion'];
            $datos=$datos['rendiciones'];
            
            foreach ($datos as $v) {
                $consulta = $em->createQuery('update CorresponsaliaBundle:Relaciongasto r set r.aprobada= false, r.justificadevolucion= :jd WHERE r.id = :id');
                $consulta->setParameter('id', $v);
                $consulta->setParameter('jd', $justificacion[$v]);
                $consulta->execute();            
            }
        }

        $this->get('session')->getFlashBag()->add('notice', 'Se ha actualizado el estatus de las rendiciones correctamente.');
        return $this->redirect($this->generateUrl('corresponsalia_revisionrendicion',array('idperiodo'=>$idperiodo)));
        
    }
    public function estatusrendicionAction(Request $request, $idperiodo,$estatus)
    {  
        #1 nuevo, 2 enviado revisión, 3 devuelto corrección y 4 cerrado
        
        //ACTUALIZO AL ESTATUS NUEVO
        $em = $this->getDoctrine()->getManager();
        $consulta = $em->createQuery('update CorresponsaliaBundle:Periodorendicion p set p.estatus= :estatus WHERE p.id = :id');
        $consulta->setParameter('id', $idperiodo);
        $consulta->setParameter('estatus', $estatus);
        $consulta->execute();

        //ARMO LA LISTA DE CORREO
        $periodo = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        $idcor=$periodo->getCorresponsalia()->getId();
        $correo=array('slozada@telesurtv.net','obruno@telesurtv.net','jvalera@telesurtv.net');

        //usuario actual
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $usuario = $em->getRepository('UsuarioBundle:Perfil')->find($idusuario);
        
        

        //ENVIADO PARA REVISIÓN
        if($estatus==2){
            
            if($idcor==2) #MEXICO
                $correo[]='yrodriguez@telesurtv.net';

            else if($idcor==4) #PERÚ
                $correo[]='yotero@telesurtv.net';

            else if($idcor==5) #WASHINTON
                $correo[]='amolina@telesurtv.net';
        
            $message = \Swift_Message::newInstance()   
            ->setSubject('Corresponsalia-Revision')  
            ->setFrom("aplicaciones@telesurtv.net")     // we configure the sender
            ->setTo($correo)   
            ->setBody( $this->renderView(
                    'CorresponsaliaBundle:Default:correoestatus.html.twig',
                    array('estatus' => $estatus,'periodo' => $periodo,'usuario'=>$usuario)
                ), 'text/html');

            $this->get('mailer')->send($message);   
        }

        //devuelto para correción
        if($estatus==3){
            
            if($idcor==2){ #MEXICO
                $correo[]='agarcia@telesurtv.net'; $correo[]='lili.telesur.mexico@hotmail.com';}

            else if($idcor==4){ #PERÚ
                $correo[]='visausti@telesurtv.net';}

            else if($idcor==5){ #WASHINTON
                $correo[]='jorge.gestoso@gtnnews.com';$correo[]='caroline.guichard@gtnnews.com';}
            
            $datos=$request->request->all();
            $consulta = $em->createQuery('update CorresponsaliaBundle:Periodorendicion p set p.justificadevolucion= :justificadev WHERE p.id = :id');
            $consulta->setParameter('id', $idperiodo);
            $consulta->setParameter('justificadev', $datos['justificadev']);
            $consulta->execute();
            
            $message = \Swift_Message::newInstance()   
            ->setSubject('Corresponsalia-Correccion')  
            ->setFrom("aplicaciones@telesurtv.net")     // we configure the sender
            ->setTo($correo)   
            ->setBody( $this->renderView(
                    'CorresponsaliaBundle:Default:correoestatus.html.twig',
                    array('estatus' => $estatus,'periodo' => $periodo,'usuario'=>$usuario)
                ), 'text/html');

            $this->get('mailer')->send($message);   
        }

        //CERRADO //asigno el saldo final al periodo siguiente
        if($estatus==4){
            $f=new Funciones;
            $f->actualizasaldos($idperiodo,$em);
        }
               
        
        $this->get('session')->getFlashBag()->add('notice', 'El periodo se ha cambiado su estatus.');
        return $this->redirect($this->generateUrl('periodorendicion_show',array('id'=>$idperiodo)));
    }
    public function rendirgastoAction($idperiodo)
    {    

        $em = $this->getDoctrine()->getManager();
        $periodo = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        
        $idtipogasto=$periodo->getTipogasto()->getId();
        $anio=$periodo->getAnio();
        $mes=$periodo->getMes();
        $idcor=$periodo->getCorresponsalia()->getId();
        
        //valido si ya fue asignada una tasa de cambio
        $cambio=  $this->cambio($idperiodo);
        if($cambio==null){

            $ef = $em->getRepository('CorresponsaliaBundle:Estadofondo')->findByPeriodorendicion($idperiodo);
            if(!$ef){
                $this->get('session')->getFlashBag()->add('alert', 'No existe un fondo asignado para este periodo.');
                return $this->redirect($this->generateUrl('periodorendicion'));
            }

             $this->get('session')->getFlashBag()->add('alert', 'DEBE INDICAR LA TASA DE CAMBIO QUE UTILIZARÁ PARA ESTA RENDICIÓN ANTES DE CONTINUAR.');
             return $this->redirect($this->generateUrl('cambio_new',array('idperiodo'=>$idperiodo)));
        }
        //fin

        //consulto si tiene fondo asignado
        $estadofondo=$this->Estadofondo($idperiodo);
        if($estadofondo==null){
            $this->get('session')->getFlashBag()->add('alert', 'Aún no tiene asignado un fondo para este período.');
            return $this->redirect($this->generateUrl('periodorendicion'));                
        }
        //fin
        //

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
    
  
    public function inicioAction()
    {
        $em = $this->getDoctrine()->getManager();
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $usuario = $em->getRepository('UsuarioBundle:Perfil')->find($idusuario);
                     
    	$em = $this->getDoctrine()->getManager();
        $dql = "select distinct p.id, p.pais, p.latitud, p.longitud, o.nombre from CorresponsaliaBundle:Corresponsalia o join o.pais p";
        $consulta = $em->createQuery($dql);
        $paises = $consulta->getResult();

        return $this->render('CorresponsaliaBundle:Default:inicio.html.twig',array('usuario'=>$usuario,'cor'=>$paises));  
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
        $rendicionlista=$this->Listadorendicion($periodo);
        //
        
        $cambio=  $this->cambio($idperiodo);
        
        if ($form->isValid()) {
            $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
            $usuario = $em->getRepository('UsuarioBundle:Perfil')->find($idusuario);
            $entity->setResponsable($usuario);
            $em->persist($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('notice', 'Registro guardado exitosamente. Puede veridficar el listado de la rendición.');
            return $this->redirect($this->generateUrl('corresponsalia_rendirgasto',array('idperiodo'=>$periodo->getId()))); 
        }
        
            return $this->render('CorresponsaliaBundle:Default:rendirgasto.html.twig',
                array(
                    "form" => $form->createView(),
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    'periodo'=>$periodo,
                    "cambio"=>$cambio
            ));
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
        $cambio=  $this->cambio($idperiodo);
        
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
        
        if (!$rendicion) {
            throw $this->createNotFoundException('Unable to find Relaciongasto entity.');
        }
        
        $form = $this->createEditForm($rendicion,$idtipogasto);
        $deleteForm = $this->createDeleteForm($idrendicion,$idtipogasto,$anio,$mes);
        $form->handleRequest($request);
        
        //consulto corresponsalía
        $estadofondo=$this->Estadofondo($idperiodo);
        $rendicionlista=$this->Listadorendicion($periodo);
        $cambio=  $this->cambio($periodo);
        
        
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
        return $this->redirect($this->generateUrl('corresponsalia_rendirgasto',array('idperiodo'=>$idperiodo))); 
            
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
