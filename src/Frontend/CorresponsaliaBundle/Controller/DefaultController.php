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
    
    public function montototalgasto($cor,$anio,$mes,$tipogasto) {
        $rendicion = $this->Listadorendicion($cor,$anio,$mes,$tipogasto);
        $sum['dolar']=0;
        $sum['mn']=0;
        foreach ($rendicion as $v) {
                $sum['dolar']=$sum['dolar']+$v->getMontodolar();
                $sum['mn']=$sum['mn']+$v->getMontomonnac();
        }
        $sum['dolar']=number_format($sum['dolar'],2,",",".");
        $sum['mn']=number_format($sum['mn'],2,",",".");
        return $sum;
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
    
    public function rendirgastofunhonAction(Request $request,$idcor)
    {
        $em = $this->getDoctrine()->getManager();
        $datos=$request->request->all();

        //si los datos vienen del controlador inicio
        if(isset($datos['form']))
        $datos=$datos['form'];  
        
        //valido si ya fue asignada una tasa de cambio
        $cambio=  $this->cambio($idcor);
        if($cambio==null){
             $this->get('session')->getFlashBag()->add('alert', 'DEBE INDICAR LA TASA DE CAMBIO DE SU MONEDA AL DÓLAR ANTES DE CONTINUAR.');
             return $this->redirect($this->generateUrl('cambio_new',array('idcor'=>$idcor)));
        }
        
        //consulto si tiene fondo asignado
        $estadofondo=$this->Estadofondo($idcor,$datos['anio'],$datos['mes'],$datos['tipogasto']);
        if($estadofondo==null){
            $this->get('session')->getFlashBag()->add('alert', 'Aún no tiene asignado un fondo para los parámetros seleccionados.');
            return $this->redirect($this->generateUrl('corresponsalia_inicio'));                
        }

        //consulto corresponsalía
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($idcor);
        $tipogasto = $em->getRepository('CorresponsaliaBundle:Tipogasto')->find($datos['tipogasto']);
        
        //genero form de relacion gasto
        $entity = new Relaciongasto();
        $form   = $this->createForm(new RelaciongastoType($datos['tipogasto']), $entity);
       
        
        ##########
        //verifico si hay rendicion para este mes
        $rendicionlista=$this->Listadorendicion($idcor,$datos['anio'],$datos['mes'],$datos['tipogasto']);
        //veo cuantas rendiciones hay por tipos de gastos
        $montototalgasto=$this->montototalgasto($idcor,$datos['anio'],$datos['mes'],$datos['tipogasto']);

        return $this->render('CorresponsaliaBundle:Default:rendirgasto.html.twig',
                array(
                    "form" => $form->createView(),
                    "corresponsalia"=>$corresponsalia,
                    "estadofondo"=>$estadofondo,
                    "rendicionlista"=>$rendicionlista,
                    "montototalgasto"=>$montototalgasto,
                    'tipogasto'=>$tipogasto,
                    'anio'=>$datos['anio'],
                    'mes'=>$datos['mes'],
                    "cambio"=>$cambio
                ));
        
    }
    
    public function rendirgastoAction(Request $request,$idcor)
    {
        $em = $this->getDoctrine()->getManager();
        $datos=$request->request->all();

        //si los datos vienen del controlador inicio
        if(isset($datos['form']))
        $datos=$datos['form'];

        if($datos['tipogasto']==1 or $datos['tipogasto']==3){
            return $this->forward('CorresponsaliaBundle:Default:rendirgastofunhon', array(
                    'idcor'  => $idcor,
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
    
    public function guardarendicionAction(Request $request)
    {
        $datos=$request->request->all();
        $datos=$datos['rendicion_relaciongasto'];

        $idtipogasto=$datos['tipogasto'];
        $idcor=$datos['corresponsalia'];
        $anio=$datos['anio'];
        $mes=$datos['mes'];

        $entity = new Relaciongasto();
        $form   = $this->createForm(new RelaciongastoType($idtipogasto), $entity);
        $form->bind($request);

        $em = $this->getDoctrine()->getManager();
        $corresponsalia = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->find($idcor);
        $tipogasto = $em->getRepository('CorresponsaliaBundle:Tipogasto')->find($idtipogasto);
        
        //consulto el fondo asigando
        $estadofondo=$this->Estadofondo($idcor,$anio,$mes,$tipogasto);
                
        //verifico si hay rendicion para este mes
        $rendicionlista=$this->Listadorendicion($idcor,$anio,$mes,$tipogasto);
        
        //veo cuantas rendiciones hay por tipos de gastos
        $montototalgasto=$this->montototalgasto($idcor,$datos['anio'],$datos['mes'],$datos['tipogasto']);
        
        $cambio=  $this->cambio($idcor);
        
        if ($form->isValid()) {
            $descgas = $em->getRepository('CorresponsaliaBundle:Descripciongasto')->find($datos['descripciongasto']);
            $entity->setDescripciongasto($descgas);
            $entity->setCorresponsalia($corresponsalia);
            $em->persist($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('notice', 'Registro guardado exitosamente');
            return $this->redirect($this->generateUrl('corresponsalia_inicio')); 
            
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
                    "montototalgasto"=>$montototalgasto,
                    'tipogasto'=>$tipogasto,
                    'anio'=>$datos['anio'],
                    'mes'=>$datos['mes'],
                    "cambio"=>$cambio
                ));
    }
}
