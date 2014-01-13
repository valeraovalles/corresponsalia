<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AjaxController extends Controller
{
    public function gasfunAction($datos)
    {
        echo "sss";
        die;
        return $this->render('CorresponsaliaBundle:Ajax:gasfun.html.twig');
    }
}
