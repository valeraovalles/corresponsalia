<?php

namespace Proxies\__CG__\Administracion\UsuarioBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Perfil extends \Administracion\UsuarioBundle\Entity\Perfil implements \Doctrine\ORM\Proxy\Proxy
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

    public function setPrimerNombre($primerNombre)
    {
        $this->__load();
        return parent::setPrimerNombre($primerNombre);
    }

    public function getPrimerNombre()
    {
        $this->__load();
        return parent::getPrimerNombre();
    }

    public function setSegundoNombre($segundoNombre)
    {
        $this->__load();
        return parent::setSegundoNombre($segundoNombre);
    }

    public function getSegundoNombre()
    {
        $this->__load();
        return parent::getSegundoNombre();
    }

    public function setPrimerApellido($primerApellido)
    {
        $this->__load();
        return parent::setPrimerApellido($primerApellido);
    }

    public function getPrimerApellido()
    {
        $this->__load();
        return parent::getPrimerApellido();
    }

    public function setSegundoApellido($segundoApellido)
    {
        $this->__load();
        return parent::setSegundoApellido($segundoApellido);
    }

    public function getSegundoApellido()
    {
        $this->__load();
        return parent::getSegundoApellido();
    }

    public function setUser(\Administracion\UsuarioBundle\Entity\User $user = NULL)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'primerNombre', 'segundoNombre', 'primerApellido', 'segundoApellido', 'user');
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