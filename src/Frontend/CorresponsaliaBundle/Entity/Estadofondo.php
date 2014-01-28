<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Estadofondo
 *
 * @ORM\Table(name="estadofondo")
 * @ORM\Entity
 */
class Estadofondo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="estadofondo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="saldoinicial", type="decimal", precision=20, scale= 2, nullable=true)
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
     * @var integer
     *
     * @ORM\Column(name="fechaasignacion", type="date", nullable=false)
     */
    private $fechaasignacion;


    /**
     * @var float
     *
     * @ORM\Column(name="saldofinal", type="decimal", precision=20, length=200, scale= 2, nullable=true)
     */
    private $saldofinal;

    /**
     * @var float
     *
     * @ORM\Column(name="pagos", type="decimal", precision=20, scale= 2, nullable=true)
     */
    private $pagos=0;    
    
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
     *   @ORM\JoinColumn(name="tipogasto_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $tipogasto;

     /**
     * @var integer
     *
     * @ORM\Column(name="observacion", type="string", nullable=true)
     */
    private $observacion;
    
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
     * @var \Perfil
     *
     * @ORM\ManyToOne(targetEntity="Administracion\UsuarioBundle\Entity\Perfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsable_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $responsable;
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
     * Set saldofinal
     *
     * @param float $saldofinal
     * @return Estadofondo
     */
    public function setSaldofinal($saldofinal)
    {
        $this->saldofinal = $saldofinal;
    
        return $this;
    }

    /**
     * Get saldofinal
     *
     * @return float 
     */
    public function getSaldofinal()
    {
        return $this->saldofinal;
    }

      /**
     * Set pagos
     *
     * @param float $pagos
     * @return Estadofondo
     */
    public function setPagos($pagos)
    {
        $this->pagos = $pagos;
    
        return $this;
    }

    /**
     * Get pagos
     *
     * @return float 
     */
    public function getPagos()
    {
        return $this->pagos;
    }
    /**
     * Set corresponsalia
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Corresponsalia $corresponsalia
     * @return Estadofondo
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
     * Set anio
     *
     * @param integer $anio
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
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
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
    
}