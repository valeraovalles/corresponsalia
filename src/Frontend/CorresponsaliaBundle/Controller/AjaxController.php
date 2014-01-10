<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AjaxController extends Controller
{
    public function gasfunAction($datos)
    {
        return $this->render('CorresponsaliaBundle:Default:inicio.html.twig');
    }
}
