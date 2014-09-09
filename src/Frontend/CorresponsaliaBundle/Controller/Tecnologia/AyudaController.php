<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of AsynchronousController
 *
 * @author ecastro
 */
class AyudaController extends Controller 
{

    public function ayudaAction()
    {
        return $this->render('CorresponsaliaBundle:Tecnologia/Ayuda:index.html.twig'); 
    }

    public function ayudaCategoriaAction()
    {
        return $this->render('CorresponsaliaBundle:Tecnologia/Ayuda:categoria.html.twig'); 
    }

    public function ayudaBitacoraAction()
    {
        return $this->render('CorresponsaliaBundle:Tecnologia/Ayuda:bitacora.html.twig'); 
    }

    public function ayudaEquipoAction()
    {
        return $this->render('CorresponsaliaBundle:Tecnologia/Ayuda:equipo.html.twig'); 
    }

    public function ayudaMarcaAction()
    {
        return $this->render('CorresponsaliaBundle:Tecnologia/Ayuda:marca.html.twig'); 
    }

    public function ayudaModeloAction()
    {
        return $this->render('CorresponsaliaBundle:Tecnologia/Ayuda:modelo.html.twig'); 
    }
    
}

