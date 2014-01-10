<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="saldoinicial", type="decimal", nullable=false)
     */
    private $saldoinicial;

    /**
     * @var float
     *
     * @ORM\Column(name="recursorecibido", type="decimal", nullable=false)
     */
    private $recursorecibido;

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
     *
     * @ORM\Column(name="saldofinal", type="decimal", nullable=false)
     */
    private $saldofinal;

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
}