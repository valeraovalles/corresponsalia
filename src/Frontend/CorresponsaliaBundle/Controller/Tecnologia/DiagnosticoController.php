<?php

namespace Frontend\CorresponsaliaBundle\Controller\Tecnologia;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of DiagnosticoController
 *
 * @author ecastro
 */
class DiagnosticoController extends Controller{
    
    public function errorAction() {
        return $this->render('CorresponsaliaBundle:Tecnologia/Diagnostico:error.html.twig');
    }
    
}
