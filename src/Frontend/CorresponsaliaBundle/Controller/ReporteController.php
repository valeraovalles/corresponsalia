<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Doctrine\ORM\EntityRepository;

use Frontend\CorresponsaliaBundle\Resources\Misclases\htmlreporte;
use Frontend\CorresponsaliaBundle\Resources\Misclases\reportepersonal;
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

        if(!$lr){
            $this->get('session')->getFlashBag()->add('alert', 'No puede generar este excel porque el periodo fue cerrado sin rendiciones.');
            return $this->redirect($this->generateUrl('periodorendicion'));   
        }

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

    public function formulariorp()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->findAll();
        $todas= array('1'=> 'SELECCION');

        $form = $this->createFormBuilder()
                ->add('corresponsalia', 'choice', array(
                    'choices'   => $entities,
                    'expanded'=>false, 
                    'multiple'=>true,
                    'empty_value' => 'Todas',
                ))
               ->add('todas', 'choice', array( 
                     'choices'  => $todas, 
                     'expanded'=>true, 
                     'multiple'=>false,
                     'empty_value' => 'TODAS',
                ))
               ->getForm();
    return $form;
    }




    public function reportepersonalAction()
    {
        $form = $this->formulariorp();
        return $this->render('CorresponsaliaBundle:Reporte:personalindex.html.twig',array('form'=>$form->createView()));
    }

    public function generareportepersonalAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // obtengo los datos del formulario
        $datosform = $request->request->all();
        $datosform = $datosform['form'];

        $todas = $datosform['todas'];
        $entities = $em->getRepository('CorresponsaliaBundle:Corresponsalia')->findAll();
        $cont = 0;
        $alert=0;
        if($todas == 1)
        {   if(!empty($datosform['corresponsalia']))
            {
                foreach ($datosform['corresponsalia'] as $key) 
                {           
                    $corresponsalias[$cont] = $key;                
                    $cont ++;
                }
            }else
            {
                $alert = 1;
            }
            
        }else
        {
            foreach ($entities as $key => $value) {
                $corresponsalias[$cont] = $cont;
                $cont++; 
            }
        }
        if($alert == 0)
        {
            $cont1 = 0;
            for ($i=0; $i <$cont ; $i++) 
            { 
                $seleccionadas[$i]['id'] = $entities[$corresponsalias[$i]]->getId();            
                $seleccionadas[$i]['nombre'] = $entities[$corresponsalias[$i]]->getNombre()." | ".$entities[$corresponsalias[$i]]->getPais();
                
                $personass[$i] = $em->getRepository('CorresponsaliaBundle:Personal')->findByCorresponsaliaId($seleccionadas[$i]['id']);
                
                if(!empty($personass[$i]))
                {
                    $j = 0;
                    foreach ($personass[$i] as $key) 
                    {

                
                
                        $personal[$i][$j]['nombre']= $key->getNombre();
                        $personal[$i][$j]['pasaporte']= $key->getPasaporte();
                        $personal[$i][$j]['correo']= $key->getCorreo();
                        $personal[$i][$j]['telefono']= $key->getTelefono();
                        $personal[$i][$j]['cargo']= $key->getCargoId()->getDescripcion();
                        $personal[$i][$j]['sueldo']= $key->getSueldo();
                        $personal[$i][$j]['fechaingreso']= $key->getFechaingreso();


                        $j++;
                    }

                    //die;
                }else
                {
                    $personal[$i] = false;
                    $cont1++;
                }
                //echo "<br><br><br>";
            }   
            if($cont == $cont1)
            {
                $form = $this->formulariorp();                
                $this->get('session')->getFlashBag()->add('alert', 'No existen datos de personal en las corresponsalias seleccionadas');
                return $this->render('CorresponsaliaBundle:Reporte:personalindex.html.twig',array('form'=>$form->createView()));
            }else
            {
                $html=new reportepersonal;
                $html=$html->personal($em,$seleccionadas, $personal, $cont);

                $html=$html;
                $this->pdf($html,'v','reporterendicion');
            }
        }else
        {
            $form = $this->formulariorp();                
            $this->get('session')->getFlashBag()->add('alert', 'ERROR: Debe seleccionar como mínimo una corresponsalía');

            return $this->render('CorresponsaliaBundle:Reporte:personalindex.html.twig',array('form'=>$form->createView()));

        }
    }
}