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
     * @var \Estadofondo
     *
     * @ORM\ManyToOne(targetEntity="Estadofondo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtabla", referencedColumnName="id", nullable=false)
     * })
     */
    private $idtabla;

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
     *
     * @ORM\Column(name="fechaasignacion", type="datetime", nullable=false)
     */
    private $fechaasignacion;


    /**
     * @var float
     *
     * @ORM\Column(name="saldoinicial", type="decimal", precision=20, scale= 2, nullable=true)
     * @Assert\NotBlank(message="El saldo inicial no puede estar en blanco.").
     * 
     */
    private $saldoinicial;

    /**
     * @var float
     *
     * @ORM\Column(name="recursorecibido", type="decimal", precision=20, scale= 2, nullable=false)
     * @Assert\NotBlank(message="El recurso no puede estar en blanco.").
     */
    private $recursorecibido;


    /**
     * @var float
     *
     * @ORM\Column(name="recursoanterior", type="decimal", precision=20, scale= 2, nullable=false)
     * @Assert\NotBlank(message="El recurso no puede estar en blanco.").
     */
    private $recursoanterior;


    /**
     * @var float
     *
     * @ORM\Column(name="recursonuevo", type="decimal", precision=20, scale= 2, nullable=false)
     * @Assert\NotBlank(message="El recurso no puede estar en blanco.").
     */
    private $recursonuevo;


    /**
     * @var \Tipogasto
     *
     * @ORM\ManyToOne(targetEntity="Periodorendicion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="periodorendicion_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $periodorendicion;

     /**
     * @var integer
     *
     * @ORM\Column(name="observacion", type="string", nullable=true)
     * @Assert\NotBlank(message="La obervación no puede estar en blanco.").
     */
    private $observacion;


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
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idtabla
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Estadofondo $Estadofondo
     * @return Estadofondo
     */
    public function setIdtabla(\Frontend\CorresponsaliaBundle\Entity\Estadofondo $idtabla = null)
    {
        $this->idtabla = $idtabla;
    
        return $this;
    }

    /**
     * Get Estadofondo
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Estadofondo 
     */
    public function getIdtabla()
    {
        return $this->idtabla;
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
     * Set fechaasignacion
     *
     * @param integer $fechaasignacion
     * @return Estadofondo
     */
    public function setFechaasignacion($fechaasignacion)
    {
        $this->fechaasignacion = $fechaasignacion;
    
        return $this;
    }

    /**
     * Get fechaasignacion
     *
     * @return integer 
     */
    public function getFechaasignacion()
    {
        return $this->fechaasignacion;
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
     * Set periodorendicion
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Periodorendicion $periodorendicion
     * @return Relaciongastos
     */
    public function setPeriodorendicion(\Frontend\CorresponsaliaBundle\Entity\Periodorendicion $periodorendicion = null)
    {
        $this->periodorendicion = $periodorendicion;
    
        return $this;
    }

    /**
     * Get periodorendicion
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Periodorendicion 
     */
    public function getPeriodorendicion()
    {
        return $this->periodorendicion;
    }

    
   /**
     * Set observacion
     *
     * @param float $observacion
     * @return Estadofondo
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return float 
     */
    public function getObservacion()
    {
        return $this->observacion;
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