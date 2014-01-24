<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Corresponsalia
 *
 * @ORM\Table(name="corresponsalia")
 * @ORM\Entity
 */
class Corresponsalia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="corresponsalia_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=false)
     * @Assert\NotBlank(message="El campo nombre no puede estar en blanco.").
     */
    private $nombre;

    /**
     * @var \Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar una país.").
     */
    private $pais;

    /**
     * @var \Tipocorresponsalia
     *
     * @ORM\ManyToOne(targetEntity="Tipocorresponsalia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipocorresponsalia_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar un tipo de corresponsalía").
     */
    private $tipocorresponsalia;


    /**
     * @var \Tipomoneda
     *
     * @ORM\ManyToOne(targetEntity="Tipomoneda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipomoneda_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar un tipo de moneda").
     */
    private $tipomoneda;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Corresponsalia
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set paisId
     *
     * @param integer $paisId
     * @return Corresponsalia
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get paisId
     *
     * @return integer 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set tipocorresponsalia
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Tipocorresponsalia $tipocorresponsalia
     * @return Corresponsalia
     */
    public function setTipocorresponsalia(\Frontend\CorresponsaliaBundle\Entity\Tipocorresponsalia $tipocorresponsalia = null)
    {
        $this->tipocorresponsalia = $tipocorresponsalia;
    
        return $this;
    }

    /**
     * Get tipocorresponsalia
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Tipocorresponsalia 
     */
    public function getTipocorresponsalia()
    {
        return $this->tipocorresponsalia;
    }
    
    /**
     * Set tipomoneda
     *
     * @param integer $tipomoneda
     * @return Relaciongastos
     */
    public function setTipomoneda(\Frontend\CorresponsaliaBundle\Entity\Tipomoneda $tipomoneda = null )
    {
        $this->tipomoneda = $tipomoneda;
    
        return $this;
    }

    /**
     * Get tipomoneda
     *
     * @return integer 
     */
    public function getTipomoneda()
    {
        return $this->tipomoneda;
    }

    
    public function __toString()
    {
        return $this->getNombre();
    }
}