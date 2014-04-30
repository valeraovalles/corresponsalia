<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Doctrine\ORM\EntityRepository;

use Frontend\CorresponsaliaBundle\Resources\Misclases\htmlreporte;
use Frontend\CorresponsaliaBundle\Resources\Misclases\funciones;

use Frontend\CorresponsaliaBundle\Entity\Reportes\AuditoriaEstadofondo;
use Frontend\CorresponsaliaBundle\Form\Reportes\AuditoriaEstadofondoType;


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
        $error=null;

        $entity = new AuditoriaEstadofondo();
        $form   = $this->createForm(new AuditoriaEstadofondoType("","1"), $entity);
        return $this->render('CorresponsaliaBundle:Reporte:auditoriaestadofondo.html.twig', array(
            'form'=>$form->createView(),
            'error'=>$error
        ));
    }

    public function creareporteauestadofondoAction(Request $request)
    {    
        $error=null;

        $datos=$request->request->all();
        $datos=$datos['reporte'];
        print_r($datos);
        die;
        $entity = new AuditoriaEstadofondo();
        $form   = $this->createForm(new AuditoriaEstadofondoType(), $entity);

        $form->handleRequest($request);
   
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $dql=    "SELECT e FROM CorresponsaliaBundle:Estadofondo e join e.periodorendicion p where p.anio>= :aniodesde and p.anio<= :aniohasta and p.mes>= :mesdesde and p.mes<= :meshasta order by p.corresponsalia ASC";
            $query = $em->createQuery($dql);
            $query->setParameter('aniodesde', $datos['aniodesde']);
            $query->setParameter('aniohasta', $datos['aniohasta']);
            $query->setParameter('mesdesde', $datos['mesdesde']);
            $query->setParameter('meshasta', $datos['meshasta']);
            $entities = $query->getResult(); 



            return $this->render('CorresponsaliaBundle:Reporte:reporteestadofondoperiodos.html.twig',array('datos'=>$entities));
     
        }

        return $this->render('CorresponsaliaBundle:Reporte:auditoriaestadofondo.html.twig', array(
            'form'=>$form->createView(),
            'error'=>$error
        ));


                    //GENERO EL PDF
                include("libs/MPDF/mpdf.php");
                $mpdf=new \mPDF();
                //izq - der - arr - aba
                $mpdf->AddPage('L','','','','',10,10,0,0);
                //$mpdf->AddPage('L','','','','',25,25,55,45,18,12);
                $stylesheet = file_get_contents('bundles/distribucion/css/reporteinformativo.css');
                $mpdf->WriteHTML($stylesheet,1);    // The parameter 1 tells that this is css/style only and no body/html/text
         
                $mpdf->WriteHTML($html);
                $mpdf->Output("reporte".".pdf","D");
                exit;
    }

    public function reporteinfoAction(Request $request)
    {

        $task = new Reporte();
        $form = $this->createFormBuilder($task)

            ->add('Desde','date',array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                ))
            ->add('Hasta','date',array(
                  'widget' => 'single_text',
                  'format' => 'yyyy-MM-dd',))

            ->add('Formato','choice', array(
                            'expanded'=>false, 
                            'multiple'=>false,
                            'choices' => array(
                                                "0"=> "pdf"
                                                  )
                                        ))
            ->add('Botones', 'submit')
            ->getForm();

        return $this->render('FrontendVisitasBundle:Reporte:reporteinfo.html.twig', array(
            'task'=>$task,
            'form'=>$form->createView(),
            ));
    }


    public function finalreporteAction(Request $request)
    {
        $datos=$request->request->all();
        $datos=$datos['form'];

        $em = $this->getDoctrine()->getManager();

        $dql=    "SELECT v FROM FrontendVisitasBundle:Visita v join v.usuario u ";
        $query = $em->createQuery($dql);
        $entities = $query->getResult(); 

        $a=new htmlreporte;



        if($datos['formato']=='xls'){

            header("Content-type: application/octet-stream");
            //indicamos al navegador que se está devolviendo un archivo
            header("Content-Disposition: attachment; filename=informativo.xls");
            //con esto evitamos que el navegador lo grabe en su caché
            header("Pragma: no-cache");
            header("Expires: 0");
            //damos salida a la tabla
            echo $html;
            die;
        }

        else if($datos['formato']=='pdf'){

                //GENERO EL PDF
                include("libs/MPDF/mpdf.php");
                $mpdf=new \mPDF();
                //izq - der - arr - aba
                $mpdf->AddPage('L','','','','',10,10,0,0);
                //$mpdf->AddPage('L','','','','',25,25,55,45,18,12);
                $stylesheet = file_get_contents('bundles/distribucion/css/reporteinformativo.css');
                $mpdf->WriteHTML($stylesheet,1);    // The parameter 1 tells that this is css/style only and no body/html/text
         
                $mpdf->WriteHTML($html);
                $mpdf->Output("reporte".".pdf","D");
                exit;
        }


    }





}