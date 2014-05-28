<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tipocorresponsalia
 *
 * @ORM\Table(name="rendicion.periodorendicion")
 * @ORM\Entity
 */
class Periodorendicion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rendicion.periodorendicion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio", type="integer", nullable=false)
     * @Assert\NotBlank(message="Debe seleccionar un año.")
     */
    private $anio;

    /**
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer", nullable=false)
     * @Assert\NotBlank(message="Debe seleccionar un mes.")
     */
    private $mes;
    
    /**
     * @var \Corresponsalia
     *
     * @ORM\ManyToOne(targetEntity="Corresponsalia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corresponsalia_id", referencedColumnName="id", nullable=false)
     * })
     * @Assert\NotBlank(message="Debe seleccionar una Corresponsalía.")
     */
    private $corresponsalia;

    /**
     * @var \Tipogasto
     *
     * @ORM\ManyToOne(targetEntity="Tipogasto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipogasto_id", referencedColumnName="id", nullable=false)
     * })
     * @Assert\NotBlank(message="Debe seleccionar un tipo de gasto.")
     */
    private $tipogasto;
    
    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", nullable=true)
     */
    private $observacion;

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
     * @ORM\Column(name="estatus", type="integer", nullable=false)
     * 1 nueva, 2 enviada para revision, 3 devuelta para corrección, 4 cerrada
     */
    private $estatus;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="descripcionperiodo", type="string", nullable=true)
     * @Assert\NotBlank(message="Debe colocar una descripcion del período.")
     */
    private $descripcionperiodo;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="fechaperoceso", type="datetime", nullable=false)
     */
    private $fechaproceso;

    /**
     * @var string
     *
     * @ORM\Column(name="justificadevolucion", type="string", nullable=true)
     */
    private $justificadevolucion;
    
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
    
    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Tipocorresponsalia
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set justificadevolucion
     *
     * @param string $justificadevolucion
     * @return Tipocorresponsalia
     */
    public function setJustificadevolucion($justificadevolucion)
    {
        $this->justificadevolucion = $justificadevolucion;
    
        return $this;
    }

    /**
     * Get justificadevolucion
     *
     * @return string 
     */
    public function getJustificadevolucion()
    {
        return $this->justificadevolucion;
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
    
    public function __toString()
    {
        return "sass";
    }
    /**
     * Set estatus
     *
     * @param integer $estatus
     * @return Relaciongastos
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;
    
        return $this;
    }

    /**
     * Get estatus
     *
     * @return integer 
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
    
    /**
     * Set descripcionperiodo
     *
     * @param integer $descripcionperiodo
     * @return Relaciongastos
     */
    public function setDescripcionperiodo($descripcionperiodo)
    {
        $this->descripcionperiodo = $descripcionperiodo;
    
        return $this;
    }

    /**
     * Get descripcionperiodo
     *
     * @return integer 
     */
    public function getDescripcionperiodo()
    {
        return $this->descripcionperiodo;
    }
    
    /**
     * Set fechaproceso
     *
     * @param integer $fechaproceso
     * @return Relaciongastos
     */
    public function setFechaproceso($fechaproceso)
    {
        $this->fechaproceso = $fechaproceso;
    
        return $this;
    }

    /**
     * Get fechaproceso
     *
     * @return integer 
     */
    public function getFechaproceso()
    {
        return $this->fechaproceso;
    }
}