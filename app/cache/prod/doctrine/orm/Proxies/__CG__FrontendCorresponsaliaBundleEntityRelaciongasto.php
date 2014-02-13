<?php

namespace Proxies\__CG__\Frontend\CorresponsaliaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Relaciongasto extends \Frontend\CorresponsaliaBundle\Entity\Relaciongasto implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNumerocomprobante($numerocomprobante)
    {
        $this->__load();
        return parent::setNumerocomprobante($numerocomprobante);
    }

    public function getNumerocomprobante()
    {
        $this->__load();
        return parent::getNumerocomprobante();
    }

    public function setFechafactura($fechafactura)
    {
        $this->__load();
        return parent::setFechafactura($fechafactura);
    }

    public function getFechafactura()
    {
        $this->__load();
        return parent::getFechafactura();
    }

    public function setDescripciongasto(\Frontend\CorresponsaliaBundle\Entity\Descripciongasto $descripciongasto = NULL)
    {
        $this->__load();
        return parent::setDescripciongasto($descripciongasto);
    }

    public function getDescripciongasto()
    {
        $this->__load();
        return parent::getDescripciongasto();
    }

    public function setNombrerazonsocial($nombrerazonsocial)
    {
        $this->__load();
        return parent::setNombrerazonsocial($nombrerazonsocial);
    }

    public function getNombrerazonsocial()
    {
        $this->__load();
        return parent::getNombrerazonsocial();
    }

    public function setIdentificacionfiscal($identificacionfiscal)
    {
        $this->__load();
        return parent::setIdentificacionfiscal($identificacionfiscal);
    }

    public function getIdentificacionfiscal()
    {
        $this->__load();
        return parent::getIdentificacionfiscal();
    }

    public function setNumerofactura($numerofactura)
    {
        $this->__load();
        return parent::setNumerofactura($numerofactura);
    }

    public function getNumerofactura()
    {
        $this->__load();
        return parent::getNumerofactura();
    }

    public function setMontomonnac($montomonnac)
    {
        $this->__load();
        return parent::setMontomonnac($montomonnac);
    }

    public function getMontomonnac()
    {
        $this->__load();
        return parent::getMontomonnac();
    }

    public function setMontodolar($montodolar)
    {
        $this->__load();
        return parent::setMontodolar($montodolar);
    }

    public function getMontodolar()
    {
        $this->__load();
        return parent::getMontodolar();
    }

    public function setCambio($cambio)
    {
        $this->__load();
        return parent::setCambio($cambio);
    }

    public function getCambio()
    {
        $this->__load();
        return parent::getCambio();
    }

    public function setPeriodorendicion(\Frontend\CorresponsaliaBundle\Entity\Periodorendicion $periodorendicion = NULL)
    {
        $this->__load();
        return parent::setPeriodorendicion($periodorendicion);
    }

    public function getPeriodorendicion()
    {
        $this->__load();
        return parent::getPeriodorendicion();
    }

    public function setResponsable(\Administracion\UsuarioBundle\Entity\Perfil $responsable = NULL)
    {
        $this->__load();
        return parent::setResponsable($responsable);
    }

    public function getResponsable()
    {
        $this->__load();
        return parent::getResponsable();
    }

    public function setAprobada($aprobada)
    {
        $this->__load();
        return parent::setAprobada($aprobada);
    }

    public function getAprobada()
    {
        $this->__load();
        return parent::getAprobada();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'numerocomprobante', 'fechafactura', 'nombrerazonsocial', 'identificacionfiscal', 'numerofactura', 'montomonnac', 'montodolar', 'cambio', 'aprobada', 'descripciongasto', 'periodorendicion', 'responsable');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}