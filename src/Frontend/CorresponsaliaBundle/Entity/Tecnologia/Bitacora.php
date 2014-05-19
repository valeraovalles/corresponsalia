<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $equipoId;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_id", type="integer", nullable=false)
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
     * @ORM\Column(name="fecha_estima_retorno", type="date", nullable=true)
     */
    private $fechaEstimaRetorno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_retorno", type="date", nullable=true)
     */
    private $fechaRetorno;

    /**
     * @var integer
     *
     * @ORM\Column(name="corresponsalia_id", type="integer", nullable=true)
     */
    private $corresponsaliaId;

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
     * Set statusId
     *
     * @param integer $statusId
     * @return Bitacora
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;
    
        return $this;
    }

    /**
     * Get statusId
     *
     * @return integer 
     */
    public function getStatusId()
    {
        return $this->statusId;
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
     * Set fechaEstimaRetorno
     *
     * @param \DateTime $fechaEstimaRetorno
     * @return Bitacora
     */
    public function setFechaEstimaRetorno($fechaEstimaRetorno)
    {
        $this->fechaEstimaRetorno = $fechaEstimaRetorno;
    
        return $this;
    }

    /**
     * Get fechaEstimaRetorno
     *
     * @return \DateTime 
     */
    public function getFechaEstimaRetorno()
    {
        return $this->fechaEstimaRetorno;
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
     * Set corresponsaliaId
     *
     * @param integer $corresponsaliaId
     * @return Bitacora
     */
    public function setCorresponsaliaId($corresponsaliaId)
    {
        $this->corresponsaliaId = $corresponsaliaId;
    
        return $this;
    }

    /**
     * Get corresponsaliaId
     *
     * @return integer 
     */
    public function getCorresponsaliaId()
    {
        return $this->corresponsaliaId;
    }
}