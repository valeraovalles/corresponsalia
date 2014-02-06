<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;



/**
 * Descripciongasto
 *
 * @ORM\Table(name="rendicion.descripciongasto")
 * @ORM\Entity
 */
class Descripciongasto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rendicion.descripciongasto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", nullable=false)
     * @Assert\NotBlank(message="Debe escribir la descripción.")
     */
    private $descripcion;

    /**
     * @var \Tipogasto
     *
     * @ORM\ManyToOne(targetEntity="Tipogasto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipogasto_id", referencedColumnName="id")
     * })
     */
    private $tipogasto;

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
     * @return Descripciongasto
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
    
    /**
     * Set tipogasto
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Tipogasto $tipogasto
     * @return Relaciongastos
     */
    public function setTipogasto(\Frontend\CorresponsaliaBundle\Entity\Tipogasto $tipogasto = null)
    {
        $this->tipogasto = $tipogasto;
    
        return $this;
    }

    /**
     * Get tipogasto
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Tipogasto 
     */
    public function getTipogasto()
    {
        return $this->tipogasto;
    }
    
    public function __toString(){
        return $this->getDescripcion().' '.$this->getTipogasto()->getId();
    }
}
