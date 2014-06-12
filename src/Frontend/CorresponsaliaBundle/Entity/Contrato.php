<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contrato
 *
 * @ORM\Table(name="consultoria.contrato")
 * @ORM\Entity
 */
class Contrato
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="consultoria.contrato_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;   

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", nullable=true)
     */
    private $codigo;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechainicio", type="date", nullable=false)
     */
    private $fechainicio;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechafin", type="date", nullable=false)
     */
    private $fechafin;

    /**
     * @var string
     *
     * @ORM\Column(name="duracion", type="string", nullable=true)
     */
    private $duracion;

    /**
     * @var float
     *
     * @ORM\Column(name="montobs", type="decimal", precision=20, scale= 2, nullable=true)
     * 
     */
    private $montobs;

    /**
     * @var float
     *
     * @ORM\Column(name="montome", type="decimal", precision=20, scale= 2, nullable=true)
     * 
     */
    private $montome;


    /**
     * @var string
     *
     * @ORM\Column(name="archivo", type="string", length=500, nullable=true)
     */
    private $archivo;

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
     * Set codigo
     *
     * @param string $codigo
     * @return Personal
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Personal
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;
    
        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return Personal
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;
    
        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set duracion
     *
     * @param string $duracion
     * @return Personal
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    
        return $this;
    }

    /**
     * Get duracion
     *
     * @return string 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set montobs
     *
     * @param float $montobs
     * @return Personal
     */
    public function setMontobs($montobs)
    {
        $this->montobs = $montobs;
    
        return $this;
    }

    /**
     * Get montobs
     *
     * @return float 
     */
    public function getMontobs()
    {
        return $this->montobs;
    }

    /**
     * Set montome
     *
     * @param float $montome
     * @return Personal
     */
    public function setMontome($montome)
    {
        $this->montome = $montome;
    
        return $this;
    }

    /**
     * Get montome
     *
     * @return float 
     */
    public function getMontome()
    {
        return $this->montome;
    }

    

    /**
     * Set archivo
     *
     * @param string $archivo
     * @return Contrato
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;
    
        return $this;
    }

    /**
     * Get archivo
     *
     * @return string 
     */
    public function getArchivo()
    {
        return $this->archivo;
    }


    public function __toString()
    {
        return $this->getCodigo();
    }

}