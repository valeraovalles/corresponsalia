<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Frontend\CorresponsaliaBundle\Entity\Cambio;
use Frontend\CorresponsaliaBundle\Entity\Relaciongasto;
use Frontend\CorresponsaliaBundle\Form\RelaciongastoType;
use Administracion\UsuarioBundle\Entity\Usercorresponsalia;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function Listadorendicion($cor,$anio,$mes,$tipogasto){
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT r FROM CorresponsaliaBundle:Relaciongasto r where r.corresponsalia= :idcorresponsalia and r.anio= :anio and r.mes= :mes and r.tipogasto= :tipogasto";
        $query = $em->createQuery($dql);
        $query->setParameter('idcorresponsalia', $cor);
        $query->setParameter('anio', $anio);
        $query->setParameter('mes', $mes);
        $query->setParameter('tipogasto', $tipogasto);
        $rendicion = $query->getResult(); 
        return $rendicion;
    }

    public function Estadofondo($cor,$anio,$mes,$tipogasto)
    {
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT e FROM CorresponsaliaBundle:Estadofondo e where e.corresponsalia= :idcorresponsalia and e.anio= :anio and e.mes= :mes and e.tipogasto= :tipogasto";
        $query = $em->createQuery($dql);
        $query->setParameter('idcorresponsalia', $cor);
        $query->setParameter('anio', $anio);
        $query->setParameter('mes', $mes);
        $query->setParameter('tipogasto', $tipogasto);
        $estadofondo = $query->getResult(); 
        if(empty($estadofondo)) return null;
        $estadofondo=$estadofondo[0];

        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Cambio')->findBy(array('corresponsalia'=>$cor),array('id'=>'desc'));
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
    
    public function rendirgastofunhonAction($idtipogasto,$anio,$mes)
    {
        $em = $this->getDoctrine()->getManager();
        //id de corresponsalia
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $usercorresponsalia = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findByUsuario($idusuario);
        $idcor=$usercorresponsalia[0]->getCorresponsalia()->getId();
        
        //valido si ya fue asignada una tasa de cambio
        $cambio=  $this->cambio($idcor);
        if($cambio==null){
             $this->get('session')->getFlashBag()->add('alert', 'DEBE INDICAR LA TASA DE CAMBIO DE SU MONEDA AL DÓLAR ANTES DE CONTINUAR.');
             return $this->redirect($this->generateUrl('cambio_new',array('idcor'=>$idcor)));
        }
        
        //consulto si tiene fondo asignado
        $estadofondo=$this->Estadofondo($idcor,$anio,$mes,$idtipogasto);
        if($estadofondo==null){
            $this->get('session')->getFlashBag()->add('alert', 'Aún no tiene asignado un fondo para los parámetros seleccionados.');
            return $this->redirect($this->generateUrl('corresponsalia_inicio'));                
        }

        //consulto corresponsalía
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($idcor);
        $tipogasto = $em->getRepository('CorresponsaliaBundle:Tipogasto')->find($idtipogasto);
        
        //genero form de relacion gasto
        $entity = new Relaciongasto();
        $form   = $this->createForm(new RelaciongastoType($idtipogasto), $entity);
       
        
        ##########
        //verifico si hay rendicion para este mes
        $rendicionlista=$this->Listadorendicion($idcor,$anio,$mes,$idtipogasto);

        return $this->render('CorresponsaliaBundle:Default:rendirgasto.html.twig',
                array(
                    "form" => $form->createView(),
                    "corresponsalia"=>$corresponsalia,
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    'tipogasto'=>$tipogasto,
                    'anio'=>$anio,
                    'mes'=>$mes,
                    "cambio"=>$cambio
                ));
        
    }
    
    public function rendirgastoAction($idtipogasto,$anio,$mes)
    {
        if($idtipogasto==1 or $idtipogasto==3){
            return $this->forward('CorresponsaliaBundle:Default:rendirgastofunhon',array(
                'idtipogasto'=>$idtipogasto,
                'anio'=>$anio,
                'mes'=>$mes,
            ));
        }
    }
        public function inicioAction()
    {
        //consulto el id corresponsalia
        $em = $this->getDoctrine()->getManager();
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $usercorresponsalia = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findByUsuario($idusuario);
        $idcor=$usercorresponsalia[0]->getCorresponsalia()->getId();
        $entities = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($idcor);
        
        $meses= array(''=>'Seleccione un mes','01'=>'Enero','02'=>'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo','06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre');
        $anios= array(''=>'Seleccione un año', date('Y') => date('Y'),date('Y')+1 => date('Y')+1);
        
        $form = $this->createFormBuilder()
        ->add('mes', 'choice', array(
            'choices'   => $meses,
        ))
        ->add('anio', 'choice', array(
                'choices'   => $anios,
        ))
        ->add('tipogasto', 'entity', array(
                'class' => 'CorresponsaliaBundle:Tipogasto',
                'property' => 'descripcion',
                'empty_value'=>'Seleccione un tipo de gasto...'
        ))
        ->getForm();

        return $this->render('CorresponsaliaBundle:Default:inicio.html.twig', array(
            'corresponsalia' => $entities,
            'form'=>$form->createView()
        ));               
      
    }
    
    public function guardarendicionAction(Request $request,$idtipogasto,$anio,$mes)
    {
        //consulto el id corresponsalia
        $em = $this->getDoctrine()->getManager();
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $usercorresponsalia = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findByUsuario($idusuario);
        $idcor=$usercorresponsalia[0]->getCorresponsalia()->getId();
        
        $entity = new Relaciongasto();
        $form   = $this->createForm(new RelaciongastoType($idtipogasto), $entity);
        $form->bind($request);

        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($idcor);
        $tipogasto = $em->getRepository('CorresponsaliaBundle:Tipogasto')->find($idtipogasto);
        
        //consulto el fondo asigando
        $estadofondo=$this->Estadofondo($idcor,$anio,$mes,$tipogasto);
                
        //verifico si hay rendicion para este mes
        $rendicionlista=$this->Listadorendicion($idcor,$anio,$mes,$tipogasto);
        
        $cambio=  $this->cambio($idcor);
        
        if ($form->isValid()) {
            $descgas = $em->getRepository('CorresponsaliaBundle:Descripciongasto')->find($idtipogasto);
            $entity->setDescripciongasto($descgas);
            $entity->setCorresponsalia($corresponsalia);
            $em->persist($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('notice', 'Registro guardado exitosamente. Puede veridficar el listado de la rendición.');
            return $this->redirect($this->generateUrl('corresponsalia_rendirgasto',array(
                'idtipogasto'=>$idtipogasto,
                'anio'=>$anio,
                'mes'=>$mes
            ))); 
            
            /*return $this->forward('CorresponsaliaBundle:Default:rendirgasto', array(
                    'idcor'  => $idcor,
            ));*/
        }
        return $this->render('CorresponsaliaBundle:Default:rendirgasto.html.twig',
                array(
                    "form" => $form->createView(),
                    "corresponsalia"=>$corresponsalia,
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    'tipogasto'=>$tipogasto,
                    'anio'=>$anio,
                    'mes'=>$mes,
                    "cambio"=>$cambio
                ));
    }
    
    public function editarendicionAction($idrendicion,$idtipogasto,$anio,$mes)
    {
        $em = $this->getDoctrine()->getManager();
        
        $rendicion = $em->getRepository('CorresponsaliaBundle:Relaciongasto')->find($idrendicion);
        $form = $this->createEditForm($rendicion,$idtipogasto);
        $deleteForm = $this->createDeleteForm($idrendicion,$idtipogasto,$anio,$mes);
        
        
        //id de corresponsalia
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $usercorresponsalia = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findByUsuario($idusuario);
        $idcor=$usercorresponsalia[0]->getCorresponsalia()->getId();
        
        //valido si ya fue asignada una tasa de cambio
        $cambio=  $this->cambio($idcor);
        
        //consulto si tiene fondo asignado
        $estadofondo=$this->Estadofondo($idcor,$anio,$mes,$idtipogasto);
        
        //consulto corresponsalía
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($idcor);
        $tipogasto = $em->getRepository('CorresponsaliaBundle:Tipogasto')->find($idtipogasto);
        
        //genero form de relacion gasto
        /*$entity = new Relaciongasto();
        $form   = $this->createForm(new RelaciongastoType($idtipogasto), $entity);*/
       
        
        ##########
        //verifico si hay rendicion para este mes
        $rendicionlista=$this->Listadorendicion($idcor,$anio,$mes,$idtipogasto);

        return $this->render('CorresponsaliaBundle:Default:editarendicion.html.twig',
                array(
                    'form'   => $form->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'rendicion'=>$rendicion,
                    
                    "corresponsalia"=>$corresponsalia,
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    'tipogasto'=>$tipogasto,
                    'anio'=>$anio,
                    'mes'=>$mes,
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
    
    public function actualizarendicionAction(Request $request, $idrendicion,$idtipogasto,$anio,$mes)
    {
        $em = $this->getDoctrine()->getManager();
        $rendicion = $em->getRepository('CorresponsaliaBundle:Relaciongasto')->find($idrendicion);

        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $usercorresponsalia = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findByUsuario($idusuario);
        $idcor=$usercorresponsalia[0]->getCorresponsalia()->getId();
        
        if (!$rendicion) {
            throw $this->createNotFoundException('Unable to find Relaciongasto entity.');
        }
        
        $form = $this->createEditForm($rendicion,$idtipogasto);
        $deleteForm = $this->createDeleteForm($idrendicion,$idtipogasto,$anio,$mes);
        $form->handleRequest($request);
        
        //consulto corresponsalía
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($idcor);
        $tipogasto = $em->getRepository('CorresponsaliaBundle:Tipogasto')->find($idtipogasto);
        $estadofondo=$this->Estadofondo($idcor,$anio,$mes,$idtipogasto);
        $rendicionlista=$this->Listadorendicion($idcor,$anio,$mes,$idtipogasto);
        $cambio=  $this->cambio($idcor);
        
        
        if ($form->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Se ha editado la rendicion exitosamente.');
            return $this->redirect($this->generateUrl('corresponsalia_editarendicion', array('idrendicion' => $idrendicion,'idtipogasto'=>$idtipogasto,'anio'=>$anio,'mes'=>$mes)));
        }

        return $this->render('CorresponsaliaBundle:Default:editarendicion.html.twig',
                array(
                    'form'   => $form->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'rendicion'=>$rendicion,
                    
                    "corresponsalia"=>$corresponsalia,
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    'tipogasto'=>$tipogasto,
                    'anio'=>$anio,
                    'mes'=>$mes,
                    "cambio"=>$cambio
                ));
    }
    
    public function borrarrendicionAction(Request $request, $idrendicion,$idtipogasto,$anio,$mes)
    {
        $form = $this->createDeleteForm($idrendicion,$idtipogasto,$anio,$mes);
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
        return $this->redirect($this->generateUrl('corresponsalia_rendirgasto',array(
                'idtipogasto'=>$idtipogasto,
                'anio'=>$anio,
                'mes'=>$mes
            ))); 
    }
    
    
    private function createDeleteForm($idrendicion,$idtipogasto,$anio,$mes)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('corresponsalia_borrarrendicion',array(
                'idrendicion'=>$idrendicion,
                'idtipogasto'=>$idtipogasto,
                'anio'=>$anio,
                'mes'=>$mes,)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'BORRAR'))
            ->getForm()
        ;
    }
 }
