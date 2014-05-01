<?php

namespace Frontend\CorresponsaliaBundle\Form\Tecnologia\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddMarcaFieldSubscriber implements EventSubscriberInterface
{
    private $propertyPathToModelo;

    public function __construct($propertyPathToModelo)
    {
        $this->propertyPathToModelo = $propertyPathToModelo;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT   => 'preSubmit'
        );
    }

    private function addMarcaForm($form, $marca = null)
    {
        $formOptions = array(
            'class'         => 'CorresponsaliaBundle:Tecnologia\Marca',
            'mapped'        => false,
            'label'         => 'Marca',
            'empty_value'   => 'Seleccione',
            'attr'          => array(
                'class' => 'marca_selector',
            ),
        );

        if ($marca) {
            $formOptions['data'] = $marca;
        }

        $form->add('marca', 'entity', $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $accessor = PropertyAccess::getPropertyAccessor();

        $modelo    = $accessor->getValue($data, $this->propertyPathToModelo);
        $marca = ($modelo) ? $modelo->getModelo()->getMarca() : null;

        $this->addMarcaForm($form, $marca);
    }

    public function preSubmit(FormEvent $event)
    {
        $form = $event->getForm();

        $this->addMarcaForm($form);
    }
}