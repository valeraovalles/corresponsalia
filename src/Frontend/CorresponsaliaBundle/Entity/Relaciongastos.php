<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relaciongastos
 *
 * @ORM\Table(name="relaciongastos")
 * @ORM\Entity
 */
class Relaciongastos
{
    /**
     * @var string
     *
     * @ORM\Column(name="idx", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="relaciongastos_idx_seq", allocationSize=1, initialValue=1)
     */
    private $idx;

    /**
     * @var integer
     *
     * @ORM\Column(name="numerocomprobante", type="integer", nullable=false)
     */
    private $numerocomprobante;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafactura", type="date", nullable=false)
     */
    private $fechafactura;

    /**
     * @var string
     *
     * @ORM\Column(name="imputacionpresupuestaria", type="string", nullable=false)
     */
    private $imputacionpresupuestaria;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrerazonsocial", type="string", nullable=false)
     */
    private $nombrerazonsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="identificacionfiscal", type="string", nullable=false)
     */
    private $identificacionfiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="numerofactura", type="string", nullable=false)
     */
    private $numerofactura;

    /**
     * @var float
     *
     * @ORM\Column(name="montomonnac", type="decimal", nullable=false)
     */
    private $montomonnac;

    /**
     * @var float
     *
     * @ORM\Column(name="montodolar", type="decimal", nullable=false)
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
     *   @ORM\JoinColumn(name="corresponsalia_id", referencedColumnName="id")
     * })
     */
    private $corresponsalia;

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
     * Get idx
     *
     * @return string 
     */
    public function getIdx()
    {
        return $this->idx;
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Relaciongastos
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