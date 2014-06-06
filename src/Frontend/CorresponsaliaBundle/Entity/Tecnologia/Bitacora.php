<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Asignacion
 *
 * @author ecastro
 *
 * @ORM\Table(name="tecnologia.bitacora")
 * @ORM\Entity
 */
class Bitacora 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecnologia.bitacora_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="equipo_id", type="integer", nullable=false)
     * @ORM\OneToOne(targetEntity="Frontend\CorresponsaliaBundle\Entity\Tecnologia\Equipo")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $equipoId;

    /**
     * @var | Tecnologia.StatusAsignacion
     * 
     * @ORM\ManyToOne(targetEntity="StatusAsignacion")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $statusId;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable", type="string", nullable=true)
     */
    private $responsable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_asignacion", type="date", nullable=true)
     */
    private $fechaAsignacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_estimada_retorno", type="date", nullable=true)
     */
    private $fechaEstimadaRetorno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_retorno", type="date", nullable=true)
     */
    private $fechaRetorno;

    /**
     * @var | Rendicion.Corresponsalia
     * 
     * @ORM\ManyToOne(targetEntity="Frontend\CorresponsaliaBundle\Entity\Corresponsalia")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="corresponsalia_id", referencedColumnName="id")
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
     * Set equipoId
     *
     * @param integer $equipoId
     * @return Bitacora
     */
    public function setEquipoId($equipoId)
    {
        $this->equipoId = $equipoId;
    
        return $this;
    }

    /**
     * Get equipoId
     *
     * @return integer 
     */
    public function getEquipoId()
    {
        return $this->equipoId;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return Bitacora
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    
        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set fechaAsignacion
     *
     * @param \DateTime $fechaAsignacion
     * @return Bitacora
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
     * @return Bitacora
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
     * @return Bitacora
     */
    public function setFechaRetorno($fechaRetorno)
    {
        $this->fechaRetorno = $fechaRetorno;
    
        return $this;
    }

    /**
     * Get fechaRetorno
     *
     * @return \DateTime 
     */
    public function getFechaRetorno()
    {
        return $this->fechaRetorno;
    }

    /**
     * Set statusId
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Tecnologia\StatusAsignacion $statusId
     * @return Bitacora
     */
    public function setStatusId(\Frontend\CorresponsaliaBundle\Entity\Tecnologia\StatusAsignacion $statusId = null)
    {
        $this->statusId = $statusId;
    
        return $this;
    }

    /**
     * Get statusId
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Tecnologia\StatusAsignacion 
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set corresponsalia
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Corresponsalia $corresponsalia
     * @return Bitacora
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