<?php

namespace Proxies\__CG__\Timsa\ControlFletesBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Socio extends \Timsa\ControlFletesBundle\Entity\Socio implements \Doctrine\ORM\Proxy\Proxy
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

    public function setNombre($nombre)
    {
        $this->__load();
        return parent::setNombre($nombre);
    }

    public function getNombre()
    {
        $this->__load();
        return parent::getNombre();
    }

    public function setTelefono($telefono)
    {
        $this->__load();
        return parent::setTelefono($telefono);
    }

    public function getTelefono()
    {
        $this->__load();
        return parent::getTelefono();
    }

    public function setStatusA($statusA)
    {
        $this->__load();
        return parent::setStatusA($statusA);
    }

    public function getStatusA()
    {
        $this->__load();
        return parent::getStatusA();
    }

    public function setFechaIngreso($fechaIngreso)
    {
        $this->__load();
        return parent::setFechaIngreso($fechaIngreso);
    }

    public function getFechaIngreso()
    {
        $this->__load();
        return parent::getFechaIngreso();
    }

    public function setFechaDeprecated($fechaDeprecated)
    {
        $this->__load();
        return parent::setFechaDeprecated($fechaDeprecated);
    }

    public function getFechaDeprecated()
    {
        $this->__load();
        return parent::getFechaDeprecated();
    }

    public function setImagen($imagen)
    {
        $this->__load();
        return parent::setImagen($imagen);
    }

    public function getImagen()
    {
        $this->__load();
        return parent::getImagen();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nombre', 'telefono', 'statusA', 'fechaIngreso', 'fechaDeprecated', 'imagen', 'relacion');
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