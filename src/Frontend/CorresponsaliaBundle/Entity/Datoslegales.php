<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Datoslegales
 *
 * @ORM\Table(name="consultoria.datoslegales")
 * @ORM\Entity
 */
class Datoslegales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="consultoria.datoslegales_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;   

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="registro", type="string", nullable=true)
     */
    private $registro;

    /**
     * @var \Corresponsalia
     *
     * @ORM\ManyToOne(targetEntity="Corresponsalia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corresponsalia_id", referencedColumnName="id", nullable=false)
     * })
     * @Assert\NotBlank(message="Debe seleccionar una Corresponsalía.")
     */
    private $corresponsaliaId;

    /**
     * @var string
     *
     * @ORM\Column(name="representanteId", type="string", nullable=true)
     */
    private $representanteId;
    
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
     * Set direccion
     *
     * @param string $direccion
     * @return Datoslegales
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set registro
     *
     * @param string $registro
     * @return Datoslegales
     */
    public function setRegistro($registro)
    {
        $this->registro = $registro;
    
        return $this;
    }

    /**
     * Get registro
     *
     * @return string 
     */
    public function getRegistro()
    {
        return $this->registro;
    }

    /*
     * Set corresponsaliaId
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Corresponsalia $corresponsaliaId
     * @return Personal
     */
    public function setCorresponsaliaId(\Frontend\CorresponsaliaBundle\Entity\Corresponsalia $corresponsaliaId = null)
    {
        $this->corresponsaliaId = $corresponsaliaId;
    
        return $this;
    }

    /**
     * Get corresponsaliaId
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Corresponsalia 
     */
    public function getCorresponsaliaId()
    {
        return $this->corresponsaliaId;
    }

    /**
     * Set representanteId
     *
     * @param string $representanteId
     * @return Datoslegales
     */
    public function setRepresentanteId($representanteId)
    {
        $this->representanteId = $representanteId;
    
        return $this;
    }

    /**
     * Get representanteId
     *
     * @return string 
     */
    public function getRepresentanteId()
    {
        return $this->representanteId;
    }

    public function __toString()
    {
        return $this->getDireccion();
    }
}