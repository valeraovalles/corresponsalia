<?php

namespace Administracion\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Doctrine\ORM\Mapping as ORM;
use Administracion\UsuarioBundle\Resources\Misclases\Funcion;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        //VERIFICAR SI EL USUARIO ESTA LOGUEADO
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
          throw new AccessDeniedException();
        }

        $IdUsuario = $this->get('security.context')->getToken()->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AdministracionBundle:Perfil')->find($IdUsuario);

        return $this->render('AdministracionBundle:Default:index.html.twig', array('usuario'=>$entity)
        );
    }
    public function loginAction()
    {
        $navegador=$this->ObtenerNavegador($_SERVER['HTTP_USER_AGENT']);
        $navegador=explode(" ", $navegador);

        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $error = $peticion->attributes->get(
        SecurityContext::AUTHENTICATION_ERROR,
        $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
        );
        
        
        return $this->render('UsuarioBundle:Default:login.html.twig', array(
        'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
        'error'=> $error,
        'mensaje'=>'',
        'navegador'=>$navegador[0]
        ));
    }

    public function sincronizacionAction()
    {
        return $this->render('UsuarioBundle:Default:sincronizacion.html.twig');
    }

    function ObtenerNavegador($user_agent) {
         $navegadores = array(
              'Opera' => 'Opera',
              'Mozilla Firefox'=> '(Firebird)|(Firefox)',
              'Galeon' => 'Galeon',
              'Mozilla'=>'Gecko',
              'MyIE'=>'MyIE',
              'Lynx' => 'Lynx',
              'Netscape' => '(Mozilla/4\.75)|(Netscape6)|(Mozilla/4\.08)|(Mozilla/4\.5)|(Mozilla/4\.6)|(Mozilla/4\.79)',
              'Konqueror'=>'Konqueror',
              'IExplorer 8' => '(MSIE 8\.[0-9]+)',
              'IExplorer 7' => '(MSIE 7\.[0-9]+)',
              'IExplorer 6' => '(MSIE 6\.[0-9]+)',
              'IExplorer 5' => '(MSIE 5\.[0-9]+)',
              'IExplorer 4' => '(MSIE 4\.[0-9]+)',
    );

    foreach($navegadores as $navegador=>$pattern){
           if (eregi($pattern, $user_agent))
           return $navegador;
        }
    return 'Desconocido';
    }
}
