<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Doctrine\ORM\EntityRepository;

use Frontend\CorresponsaliaBundle\Resources\Misclases\htmlreporte;
use Frontend\CorresponsaliaBundle\Resources\Misclases\funciones;

use Frontend\CorresponsaliaBundle\Entity\Reporte;
use Frontend\CorresponsaliaBundle\Form\ReporteType;

use Frontend\CorresponsaliaBundle\Entity\Reporteauditoriarendicion;
use Frontend\CorresponsaliaBundle\Form\ReporteauditoriarendicionType;

/**
 * Reporte controller.
 *
 */
class ReporteController extends Controller
{

    public function excelrendicionAction($idperiodo)
    {
        $em = $this->getDoctrine()->getManager();
        $periodo = $em->getRepository('CorresponsaliaBundle:Periodorendicion')->find($idperiodo);
        
        $parametros['unidadapoyologistico']=$this->container->getParameter('unidadapoyologistico');
        $parametros['asignaciones']=$this->container->getParameter('asignaciones');
        $parametros['dirgeneralinformacion']=$this->container->getParameter('dirgeneralinformacion');
        
        $dc=new funciones();
        $ef=$dc->Estadofondo($idperiodo,$em);
        $c=$dc->cambio($idperiodo,$em);
        $lr=$dc->Listadorendicion($periodo,$em);

        $mc=new htmlreporte();
        $info=$mc->excelrendicion($periodo,$ef,$c,$lr,$parametros);
        
        //print_r($info);
        //die;
        header("Content-type: application/octet-stream");
        //indicamos al navegador que se está devolviendo un archivo
        header("Content-Disposition: attachment; filename=informativo.xls");
        //con esto evitamos que el navegador lo grabe en su caché
        header("Pragma: no-cache");
        header("Expires: 0");
        //damos salida a la tabla
        echo $info;
        die;
    } 
    

    //reporte estado fondo
    public function reporteeftotalAction()
    {    

        $entity = new Reporte();
        $form   = $this->createForm(new ReporteType("","1"), $entity);
        return $this->render('CorresponsaliaBundle:Reporte:totalestadofondo.html.twig', array(
            'form'=>$form->createView(),
        ));
    }

    public function creaeftotalAction(Request $request)
    {    
        $post=$request->request->all();
        $datos=$post['reporte'];

        //INSTANCIO LA CLASE PARA GENERAR EL HTML DEL REPORTE
        $em = $this->getDoctrine()->getManager();
        $html=new htmlreporte;
        $html=$html->totalestadofondo($em, $datos);
        $html=$html;

        $this->pdf($html,'h','auditoriaestadofondo');
    }


    //reporte estado fondo
    public function reporteauefAction()
    {    
        $entity = new Reporte();
        $form   = $this->createForm(new ReporteType("","1"), $entity);
        return $this->render('CorresponsaliaBundle:Reporte:auditoriaestadofondo.html.twig', array(
            'form'=>$form->createView(),
        ));
    }



    public function creareporteauefAction(Request $request)
    {    
        $post=$request->request->all();
        $datos=$post['reporte'];

        //INSTANCIO LA CLASE PARA GENERAR EL HTML DEL REPORTE
        $em = $this->getDoctrine()->getManager();
        $html=new htmlreporte;
        $html=$html->auditoriaestadofondo($em, $datos);
        $html=$html;

        $this->pdf($html,'h','auditoriaestadofondo');
    }

    //REPORTE RENDICION
    public function reporterendicionAction()
    {    
        $entity = new Reporte();
        $form   = $this->createForm(new ReporteType("","1"), $entity);

        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $usercorresponsalia = $em->getRepository('UsuarioBundle:Usercorresponsalia')->findByUsuario($idusuario);
        $cor=0;
        if($usercorresponsalia){
            $cor=$usercorresponsalia[0];
            
            
        }

        return $this->render('CorresponsaliaBundle:Reporte:rendicion.html.twig', array(
            'form'=>$form->createView(),
            'cor'=>$cor
        ));
    }

    public function creareporterendicionAction(Request $request)
    {    
        $post=$request->request->all();
        $datos=$post['reporte'];

        //INSTANCIO LA CLASE PARA GENERAR EL HTML DEL REPORTE
        $em = $this->getDoctrine()->getManager();
        $html=new htmlreporte;
        $html=$html->rendicion($em, $datos);
        $html=$html;

        //echo $html;
        //die;
        $this->pdf($html,'h','reporterendicion');
    }

    public function reporteaurendicionAction()
    {    
        $entity = new Reporte();
        $form   = $this->createForm(new ReporteType("","1"), $entity);
        return $this->render('CorresponsaliaBundle:Reporte:auditoriarendicion.html.twig', array(
            'form'=>$form->createView(),
        ));
    }

    public function creareporteaurendicionAction(Request $request)
    {    
        $post=$request->request->all();
        $datos=$post['reporte'];

        //INSTANCIO LA CLASE PARA GENERAR EL HTML DEL REPORTE
        $em = $this->getDoctrine()->getManager();
        $html=new htmlreporte;
        $html=$html->auditoriarendicion($em, $datos);
        $html=$html;
        //echo $html;
        //die;
        $this->pdf($html,'h','reporterendicion');
    }

    public function pdf($html,$orientacion,$hojacss){

        //GENERO EL PDF
        include("libs/MPDF/mpdf.php");
        $mpdf=new \mPDF();
        //izq - der - arr - aba
        //$mpdf->AddPage('L','','','','',10,10,0,0);
        if($orientacion=='h')
            $mpdf->AddPage('L','','','','',10,10,10,10,18,12);
        else
            $mpdf->AddPage('P','','','','',10,10,10,10,18,12);


        $stylesheet = file_get_contents('bundles/corresponsalia/css/'.$hojacss.'.css');
        $mpdf->WriteHTML($stylesheet,1);    // The parameter 1 tells that this is css/style only and no body/html/text

        $mpdf->WriteHTML($html);
        $mpdf->Output("reporte".".pdf","D");
        exit;   
    }
}