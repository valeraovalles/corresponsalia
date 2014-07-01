<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Estadofondo
 *
 * @ORM\Table(name="auditoria.estadofondo")
 * @ORM\Entity
 */
class Auditoriaestadofondo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="auditoria.estadofondo_id_seq", allocationSize=1, initialValue=1)
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
     * @var float
     * @ORM\Column(name="saldoinicial", type="decimal", precision=20, scale= 2, nullable=true)
     * @Assert\NotBlank(message="El saldo inicial no puede estar en blanco.").
     * 
     */
    private $saldoinicial;

    /**
     * @var float
     * @ORM\Column(name="recursorecibido", type="decimal", precision=20, scale= 2, nullable=false)
     * @Assert\NotBlank(message="El recurso no puede estar en blanco.").
     */
    private $recursorecibido;


    /**
     * @var float
     * @ORM\Column(name="recursoanterior", type="decimal", precision=20, scale= 2, nullable=false)
     * @Assert\NotBlank(message="El recurso no puede estar en blanco.").
     */
    private $recursoanterior;


    /**
     * @var float
     * @ORM\Column(name="recursonuevo", type="decimal", precision=20, scale= 2, nullable=false)
     * @Assert\NotBlank(message="El recurso no puede estar en blanco.").
     */
    private $recursonuevo;

    /**
     * @var integer
     * @ORM\Column(name="fechaproceso", type="date", nullable=false)
     */
    private $fechaproceso;

    /**
     * @var integer
     * @ORM\Column(name="horaproceso", type="string", nullable=false)
     */
    private $horaproceso;
   
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
     * @var integer
     * @ORM\Column(name="operacion", type="string", nullable=true)
     * @Assert\NotBlank(message="La obervación no puede estar en blanco.").
     */
    private $operacion;
   
    /**
     * @var integer
     *
     * @ORM\Column(name="estadofondoobs", type="string", nullable=false)
     */
    private $estadofondoobs;



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
     * Set estadofondodesc
     *
     * @param float $estadofondodesc
     * @return Estadofondo
     */
    public function setEstadofondoobs($estadofondoobs)
    {
        $this->estadofondoobs = $estadofondoobs;
    
        return $this;
    }

    /**
     * Get estadofondodesc
     *
     * @return float 
     */
    public function getEstadofondoobs()
    {
        return $this->estadofondoobs;
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
     * Set saldoinicial
     *
     * @param float $saldoinicial
     * @return Estadofondo
     */
    public function setSaldoinicial($saldoinicial)
    {
        $this->saldoinicial = $saldoinicial;
    
        return $this;
    }

    /**
     * Get saldoinicial
     *
     * @return float 
     */
    public function getSaldoinicial()
    {
        return $this->saldoinicial;
    }

    /**
     * Set recursorecibido
     *
     * @param float $recursorecibido
     * @return Estadofondo
     */
    public function setRecursorecibido($recursorecibido)
    {
        $this->recursorecibido = $recursorecibido;
    
        return $this;
    }

    /**
     * Get recursorecibido
     *
     * @return float 
     */
    public function getRecursorecibido()
    {
        return $this->recursorecibido;
    }



    /**
     * Set recursoanterior
     *
     * @param float $recursoanterior
     * @return Estadofondo
     */
    public function setRecursoanterior($recursoanterior)
    {
        $this->recursoanterior = $recursoanterior;
    
        return $this;
    }

    /**
     * Get recursoanterior
     *
     * @return float 
     */
    public function getRecursoanterior()
    {
        return $this->recursoanterior;
    }



    /**
     * Set recursoanterior
     *
     * @param float $recursoanterior
     * @return Estadofondo
     */
    public function setRecursonuevo($recursonuevo)
    {
        $this->recursonuevo = $recursonuevo;
    
        return $this;
    }

    /**
     * Get recursoanterior
     *
     * @return float 
     */
    public function getRecursonuevo()
    {
        return $this->recursonuevo;
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