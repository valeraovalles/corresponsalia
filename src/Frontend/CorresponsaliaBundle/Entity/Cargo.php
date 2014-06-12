<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cargo
 *
 * @ORM\Table(name="nomina.cargo")
 * @ORM\Entity
 */
class Cargo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nomina.cargo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;   

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", nullable=false)
     * @Assert\NotBlank(message="El campo descripcion no puede estar en blanco.").
     */
    private $descripcion;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Cargo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function __toString()
    {
        return $this->getDescripcion();
    }
}