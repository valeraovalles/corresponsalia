<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Asignacion
 *
 * @author ecastro
 * 
 * @ORM\Table(name="tecnologia.asignacion")
 * @ORM\Entity
 */
class Asignacion 
{
    /**
     * @var | Tecnologia.Equipo
     * 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $equipo_id;
    
    /**
     * @var | Rendicion.Corresponsalia
     * 
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Frontend\CorresponsaliaBundle\Entity\Corresponsalia")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="corresponsalia_id", referencedColumnName="id")
     * })
     */
    private $corresponsalia;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="responsable", type="text", nullable=true)
     */
    private $responsable;
    
    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaAsignacion", type="date")
     */
    private $fechaAsignacion;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaEstimadaRetorno", type="date")
     */
    private $fechaEstimadaRetorno;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaRetorno", type="date")
     */
    private $fechaRetorno;
    
    /**
     * @var | Tecnologia.StatusAsignacion
     * 
     * @ORM\ManyToOne(targetEntity="StatusAsignacion")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;   
    
    /**
     * Set fechaAdquisicion
     *
     * @param \DateTime $fechaAdquisicion
     * @return Equipo
     */
    public function setFechaAdquisicion($fechaAdquisicion)
    {
        $this->fechaAdquisicion = $fechaAdquisicion;
    
        return $this;
    }

    /**
     * Get fechaAdquisicion
     *
     * @return \DateTime 
     */
    public function getFechaAdquisicion()
    {
        return $this->fechaAdquisicion;
    }

    /**
     * Set fechaAsignacion
     *
     * @param \DateTime $fechaAsignacion
     * @return Equipo
     */
    public function setFechaAsignacion($fechaAsignacion)
    {
        $this->fechaAsignacion = $fechaAsignacion;
    
        return $this;
    }

    /**
     * Get fechaAsignacion
     *
     * @return \DateTime 
     */
    public function getFechaAsignacion()
    {
        return $this->fechaAsignacion;
    }

    /**
     * Set fechaEstimadaRetorno
     *
     * @param \DateTime $fechaEstimadaRetorno
     * @return Equipo
     */
    public function setFechaEstimadaRetorno($fechaEstimadaRetorno)
    {
        $this->fechaEstimadaRetorno = $fechaEstimadaRetorno;
    
        return $this;
    }

    /**
     * Get fechaEstimadaRetorno
     *
     * @return \DateTime 
     */
    public function getFechaEstimadaRetorno()
    {
        return $this->fechaEstimadaRetorno;
    }

    /**
     * Set fechaRetorno
     *
     * @param \DateTime $fechaRetorno
     * @return Equipo
     */
    public function setFechaRetorno($fechaRetorno)
    {
        $this->fechaRetorno = $fechaRetorno;
    
        return $this;
    }

    /**
     * Get fechaRetorno
     *
     * @return \Date
     */
    public function getFechaRetorno()
    {
        return $this->fechaRetorno;
    }
    
    public function getEquipo_id() {
        return $this->equipo_id;
    }

    public function getCorresponsalia() {
        return $this->corresponsalia;
    }

    public function getResponsable() {
        return $this->responsable;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setEquipo_id($equipo_id) {
        $this->equipo_id = $equipo_id;
        return $this;
    }

    public function setCorresponsalia($corresponsalia) {
        $this->corresponsalia = $corresponsalia;
        return $this;
    }

    public function setResponsable($responsable) {
        $this->responsable = $responsable;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }


}
