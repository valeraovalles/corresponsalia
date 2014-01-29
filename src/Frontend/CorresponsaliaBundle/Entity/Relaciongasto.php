<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Relaciongasto
 *
 * @ORM\Table(name="relaciongasto")
 * @ORM\Entity
 */
class Relaciongasto
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="relaciongasto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="numerocomprobante", type="decimal", nullable=false).
     * @Assert\NotBlank(message="Debe escribir el número de comprobante.").
     * @Assert\Type(type="digit", message="El numero conprobante no puede contener letras.").
     */
    private $numerocomprobante;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafactura", type="date", nullable=false)
     * @Assert\NotBlank(message="Debe colocar la fecha de la factura.")
     * @Assert\Date()
     */
    private $fechafactura;

    /**
     * @var string
     *
     * @ORM\Column(name="imputacionpresupuestaria", type="string", nullable=false)
     */
    private $imputacionpresupuestaria;

    /**
     * @var \Descripciongasto
     *
     * @ORM\ManyToOne(targetEntity="Descripciongasto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="descripciongasto_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar una descripción de gasto.")
     */
    private $descripciongasto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrerazonsocial", type="string", nullable=false)
     * @Assert\NotBlank(message="Debe colocar la razon social.")
     */
    private $nombrerazonsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="identificacionfiscal", type="string", nullable=false)
     * @Assert\NotBlank(message="Debe colocar la identificación fiscal.")
     */
    private $identificacionfiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="numerofactura", type="string", nullable=false)
     * @Assert\NotBlank(message="Debe colocar el numero de la factura.")
     */
    private $numerofactura;

    /**
     * @var float
     *
     * @ORM\Column(name="montomonnac", type="decimal", precision=20, scale= 2, nullable=false)
     * @Assert\NotBlank(message="Debe colocar el monto de la moneda nacional.")
     */
    private $montomonnac;

    /**
     * @var float
     *
     * @ORM\Column(name="montodolar",  type="decimal", precision=20, scale= 2, nullable=false)
     */
    private $montodolar;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio", type="integer", nullable=false)
     */
    private $anio;

    /**
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer", nullable=false)
     */
    private $mes;

    /**
     * @var \Corresponsalia
     *
     * @ORM\ManyToOne(targetEntity="Corresponsalia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corresponsalia_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $corresponsalia;

    /**
     * @var \Tipogasto
     *
     * @ORM\ManyToOne(targetEntity="Tipogasto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipogasto_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $tipogasto;



    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numerocomprobante
     *
     * @param integer $numerocomprobante
     * @return Relaciongastos
     */
    public function setNumerocomprobante($numerocomprobante)
    {
        $this->numerocomprobante = $numerocomprobante;
    
        return $this;
    }

    /**
     * Get numerocomprobante
     *
     * @return integer 
     */
    public function getNumerocomprobante()
    {
        return $this->numerocomprobante;
    }

    /**
     * Set fechafactura
     *
     * @param \DateTime $fechafactura
     * @return Relaciongastos
     */
    public function setFechafactura($fechafactura)
    {
        $this->fechafactura = $fechafactura;
    
        return $this;
    }

    /**
     * Get fechafactura
     *
     * @return \DateTime 
     */
    public function getFechafactura()
    {
        return $this->fechafactura;
    }

    /**
     * Set imputacionpresupuestaria
     *
     * @param string $imputacionpresupuestaria
     * @return Relaciongastos
     */
    public function setImputacionpresupuestaria($imputacionpresupuestaria)
    {
        $this->imputacionpresupuestaria = $imputacionpresupuestaria;
    
        return $this;
    }

    /**
     * Get imputacionpresupuestaria
     *
     * @return string 
     */
    public function getImputacionpresupuestaria()
    {
        return $this->imputacionpresupuestaria;
    }

    /**
     * Set descripciongasto
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Descripciongasto $descripciongasto
     * @return Relaciongastos
     */
    public function setDescripciongasto(\Frontend\CorresponsaliaBundle\Entity\Descripciongasto $descripciongasto = null)
    {
        $this->descripciongasto = $descripciongasto;
    
        return $this;
    }

    /**
     * Get descripciongasto
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Descripciongasto 
     */
    public function getDescripciongasto()
    {
        return $this->descripciongasto;
    }


    /**
     * Set nombrerazonsocial
     *
     * @param string $nombrerazonsocial
     * @return Relaciongastos
     */
    public function setNombrerazonsocial($nombrerazonsocial)
    {
        $this->nombrerazonsocial = $nombrerazonsocial;
    
        return $this;
    }

    /**
     * Get nombrerazonsocial
     *
     * @return string 
     */
    public function getNombrerazonsocial()
    {
        return $this->nombrerazonsocial;
    }

    /**
     * Set identificacionfiscal
     *
     * @param string $identificacionfiscal
     * @return Relaciongastos
     */
    public function setIdentificacionfiscal($identificacionfiscal)
    {
        $this->identificacionfiscal = $identificacionfiscal;
    
        return $this;
    }

    /**
     * Get identificacionfiscal
     *
     * @return string 
     */
    public function getIdentificacionfiscal()
    {
        return $this->identificacionfiscal;
    }

    /**
     * Set numerofactura
     *
     * @param string $numerofactura
     * @return Relaciongastos
     */
    public function setNumerofactura($numerofactura)
    {
        $this->numerofactura = $numerofactura;
    
        return $this;
    }

    /**
     * Get numerofactura
     *
     * @return string 
     */
    public function getNumerofactura()
    {
        return $this->numerofactura;
    }

    /**
     * Set montomonnac
     *
     * @param float $montomonnac
     * @return Relaciongastos
     */
    public function setMontomonnac($montomonnac)
    {
        $this->montomonnac = $montomonnac;
    
        return $this;
    }

    /**
     * Get montomonnac
     *
     * @return float 
     */
    public function getMontomonnac()
    {
        return $this->montomonnac;
    }

    /**
     * Set montodolar
     *
     * @param float $montodolar
     * @return Relaciongastos
     */
    public function setMontodolar($montodolar)
    {
        $this->montodolar = $montodolar;
    
        return $this;
    }

    /**
     * Get montodolar
     *
     * @return float 
     */
    public function getMontodolar()
    {
        return $this->montodolar;
    }

    /**
     * Set anio
     *
     * @param integer $anio
     * @return Relaciongastos
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    
        return $this;
    }

    /**
     * Get anio
     *
     * @return integer 
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return Relaciongastos
     */
    public function setMes($mes)
    {
        $this->mes = $mes;
    
        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set corresponsalia
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Corresponsalia $corresponsalia
     * @return Relaciongastos
     */
    public function setCorresponsalia(\Frontend\CorresponsaliaBundle\Entity\Corresponsalia $corresponsalia = null)
    {
        $this->corresponsalia = $corresponsalia;
    
        return $this;
    }

    /**
     * Get corresponsalia
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Corresponsalia 
     */
    public function getCorresponsalia()
    {
        return $this->corresponsalia;
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
}