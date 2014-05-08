<?php

namespace Frontend\CorresponsaliaBundle\Form\Tecnologia\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Doctrine\ORM\EntityRepository;
use Frontend\CorresponsaliaBundle\Form\Tecnologia\EventListener\AddMarcaFieldSubscriber;

class AddModeloFieldSubscriber implements EventSubscriberInterface
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

    private function addModeloForm($form, $marca_id)
    {
        $formOptions = array(
            'class'         => 'CorresponsaliaBundle:Tecnologia\Modelo',
            'empty_value'   => 'Seleccione',
            'label'         => 'Modelo',
            'attr'          => array(
                'class' => 'modelo_selector',
            ),
            'query_builder' => function (EntityRepository $repository) use ($marca_id) {
                $qb = $repository->createQueryBuilder('modelo')
                    ->innerJoin('modelo.marca', 'marca')
                    ->where('marca.id = :marca')
                    ->setParameter('marca', $marca_id)
                ;

                return $qb;
            }
        );

        $form->add($this->propertyPathToModelo, 'entity', $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $accessor    = PropertyAccess::createPropertyAccessor();

        $modelo       = $accessor->getValue($data, $this->propertyPathToModelo);
        $marca_id     = ($modelo) ? $modelo->getMarca()->getId() : null;

        $this->addModeloForm($form, $marca_id);
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        $marca_id = array_key_exists('marca', $data) ? $data['marca'] : null;

        $this->addModeloForm($form, $marca_id);
    }
}

