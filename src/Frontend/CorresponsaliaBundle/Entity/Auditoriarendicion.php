<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Relaciongasto
 *
 * @ORM\Table(name="auditoria.relaciongasto")
 * @ORM\Entity
 */
class Auditoriarendicion
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="auditoria.relaciongasto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcorresponsalia", type="integer", nullable=false)
     */
    private $idcorresponsalia;

    /**
     * @var integer
     *
     * @ORM\Column(name="corresponsalia", type="string", nullable=false)
     */
    private $corresponsalia;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipogasto", type="integer", nullable=false)
     */
    private $idtipogasto;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipogasto", type="string", nullable=false)
     */
    private $tipogasto;

    /**
     * @var integer
     *
     * @ORM\Column(name="periododesc", type="string", nullable=false)
     */
    private $periododesc;


    /**
     * @var integer
     *
     * @ORM\Column(name="idperiodo", type="integer", nullable=false)
     */
    private $idperiodo;

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
     * @var integer
     *
     * @ORM\Column(name="iddescripciongasto", type="string", nullable=false)
     */

    private $iddescripciongasto;

    /**
     * @var integer
     *
     * @ORM\Column(name="descripciongasto", type="string", nullable=false)
     */

    private $descripciongasto;


    /**
     * @var \Perfil
     *
     * @ORM\ManyToOne(targetEntity="Administracion\UsuarioBundle\Entity\Perfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsable_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $responsable;


    /**
     * @var decimal
     *
     * @ORM\Column(name="numerocomprobante", type="string", nullable=false).
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
     * @var float
     *
     * @ORM\Column(name="cambio",  type="decimal", precision=20, scale= 2, nullable=true)
     */
    private $cambio;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="fechaproceso", type="date", nullable=false)
     */
    private $fechaproceso;

    /**
     * @var integer
     *
     * @ORM\Column(name="horaproceso", type="string", nullable=false)
     */
    private $horaproceso;

     /**
     * @var integer
     *
     * @ORM\Column(name="operacion", type="string", nullable=true)
     * @Assert\NotBlank(message="La obervación no puede estar en blanco.").
     */
    private $operacion;

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
     * Set corresponsalia
     *
     * @param float $corresponsalia
     * @return Estadofondo
     */
    public function setCorresponsalia($corresponsalia)
    {
        $this->corresponsalia = $corresponsalia;
    
        return $this;
    }

    /**
     * Get corresponsalia
     *
     * @return float 
     */
    public function getCorresponsalia()
    {
        return $this->corresponsalia;
    }

    /**
     * Set tipogasto
     *
     * @param float $tipogasto
     * @return Estadofondo
     */
    public function setTipogasto($tipogasto)
    {
        $this->tipogasto = $tipogasto;
    
        return $this;
    }

    /**
     * Get tipogasto
     *
     * @return float 
     */
    public function getTipogasto()
    {
        return $this->tipogasto;
    }

    /**
     * Set periododesc
     *
     * @param float $periododesc
     * @return Estadofondo
     */
    public function setPeriododesc($periododesc)
    {
        $this->periododesc = $periododesc;
    
        return $this;
    }

    /**
     * Get periododesc
     *
     * @return float 
     */
    public function getPeriododesc()
    {
        return $this->periododesc;
    }

 /**
     * Set anio
     *
     * @param float $anio
     * @return Estadofondo
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    
        return $this;
    }

    /**
     * Get anio
     *
     * @return float 
     */
    public function getAnio()
    {
        return $this->anio;
    }


    /**
     * Set mes
     *
     * @param float $mes
     * @return Estadofondo
     */
    public function setMes($mes)
    {
        $this->mes = $mes;
    
        return $this;
    }

    /**
     * Get mes
     *
     * @return float 
     */
    public function getMes()
    {
        return $this->mes;
    }


    /**
     * Set descripciongasto
     *
     * @param integer $descripciongasto
     * @return Relaciongastos
     */
    public function setDescripciongasto($descripciongasto)
    {
        $this->descripciongasto = $descripciongasto;
    
        return $this;
    }

    /**
     * Get descripciongasto
     *
     * @return integer 
     */
    public function getDescripciongasto()
    {
        return $this->descripciongasto;
    }

     /**
     * Set responsable
     *
     * @param \Administracion\UsuarioBundle\Entity\Perfil $responsable
     * @return Operador
     */
    public function setResponsable(\Administracion\UsuarioBundle\Entity\Perfil $responsable = null)
    {
        $this->responsable = $responsable;
    
        return $this;
    }

    /**
     * Get responsable
     *
     * @return \Administracion\UsuarioBundle\Entity\Perfil 
     */
    public function getResponsable()
    {
        return $this->responsable;
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
     * Set cambio
     *
     * @param float $cambio
     * @return Relaciongastos
     */
    public function setCambio($cambio)
    {
        $this->cambio = $cambio;
    
        return $this;
    }

    /**
     * Get cambio
     *
     * @return float 
     */
    public function getCambio()
    {
        return $this->cambio;
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
     * Set fechaproceso
     *
     * @param float $fechaproceso
     * @return Estadofondo
     */
    public function setFechaproceso($fechaproceso)
    {
        $this->fechaproceso = $fechaproceso;
    
        return $this;
    }

    /**
     * Get fechaproceso
     *
     * @return float 
     */
    public function getFechaproceso()
    {
        return $this->fechaproceso;
    }

   /**
     * Set horaproceso
     *
     * @param float $horaproceso
     * @return Estadofondo
     */
    public function setHoraproceso($horaproceso)
    {
        $this->horaproceso = $horaproceso;
    
        return $this;
    }

    /**
     * Get horaproceso
     *
     * @return float 
     */
    public function getHoraproceso()
    {
        return $this->horaproceso;
    }

 
   /**
     * Set horaproceso
     *
     * @param float $horaproceso
     * @return Estadofondo
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;
    
        return $this;
    }

    /**
     * Get horaproceso
     *
     * @return float 
     */
    public function getOperacion()
    {
        return $this->operacion;
    } 
}