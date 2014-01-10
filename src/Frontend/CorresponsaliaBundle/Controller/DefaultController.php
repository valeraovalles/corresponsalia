<?php

namespace Frontend\CorresponsaliaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Frontend\CorresponsaliaBundle\Entity\Relaciongastos;
use Frontend\CorresponsaliaBundle\Form\RelaciongastosType;

class DefaultController extends Controller
{
    public function inicioAction()
    {

        $entity = new Relaciongastos();
        $form   = $this->createForm(new RelaciongastosType(), $entity);
            
        return $this->render('CorresponsaliaBundle:Default:inicio.html.twig',
                array(
                    "form" => $form->createView()
                ));
    }
}
