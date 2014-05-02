<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Doctrine\ORM\EntityRepository;

use Frontend\CorresponsaliaBundle\Resources\Misclases\htmlreporte;
use Frontend\CorresponsaliaBundle\Resources\Misclases\funciones;

use Frontend\CorresponsaliaBundle\Entity\Auditoriaestadofondo;
use Frontend\CorresponsaliaBundle\Form\AuditoriaestadofondoType;

use Frontend\CorresponsaliaBundle\Entity\Auditoriarendicion;
use Frontend\CorresponsaliaBundle\Form\AuditoriarendicionType;

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
        
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $usuario = $em->getRepository('UsuarioBundle:Perfil')->find($idusuario);
        
        $dc=new funciones();
        $ef=$dc->Estadofondo($idperiodo,$em);
        $c=$dc->cambio($idperiodo,$em);
        $lr=$dc->Listadorendicion($periodo,$em);

        $mc=new htmlreporte();
        $info=$mc->excelrendicion($periodo,$ef,$c,$lr,$usuario,$parametros);
        
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
    
    public function reporteauestadofondoAction()
    {    
        $entity = new AuditoriaEstadofondo();
        $form   = $this->createForm(new AuditoriaEstadofondoType("","1"), $entity);
        return $this->render('CorresponsaliaBundle:Reporte:auditoriaestadofondo.html.twig', array(
            'form'=>$form->createView(),
        ));
    }

    public function creareporteauestadofondoAction(Request $request)
    {    
        $post=$request->request->all();
        $datos=$post['reporte'];


        //INSTANCIO LA CLASE PARA GENERAR EL HTML DEL REPORTE
        $em = $this->getDoctrine()->getManager();
        $html=new htmlreporte;
        $html=$html->auditoriaestadofondo($em, $datos);
        $html=$html;

        //GENERO EL PDF
        include("libs/MPDF/mpdf.php");
        $mpdf=new \mPDF();
        //izq - der - arr - aba
        //$mpdf->AddPage('L','','','','',10,10,0,0);
        //$mpdf->AddPage('L','','','','',25,25,55,45,18,12);
        $stylesheet = file_get_contents('bundles/corresponsalia/css/auditoriaestadofondo.css');
        $mpdf->WriteHTML($stylesheet,1);    // The parameter 1 tells that this is css/style only and no body/html/text

        $mpdf->WriteHTML($html);
        $mpdf->Output("reporte".".pdf","D");
        exit;
    }

    public function reporteaurendicionAction()
    {    
        $entity = new Auditoriarendicion();
        $form   = $this->createForm(new AuditoriarendicionType("","1"), $entity);
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

        //GENERO EL PDF
        include("libs/MPDF/mpdf.php");
        $mpdf=new \mPDF();
        //izq - der - arr - aba
        //$mpdf->AddPage('L','','','','',10,10,0,0);
        //$mpdf->AddPage('L','','','','',25,25,55,45,18,12);
        $stylesheet = file_get_contents('bundles/corresponsalia/css/auditoriarendicion.css');
        $mpdf->WriteHTML($stylesheet,1);    // The parameter 1 tells that this is css/style only and no body/html/text

        $mpdf->WriteHTML($html);
        $mpdf->Output("reporte".".pdf","D");
        exit;
    }
}