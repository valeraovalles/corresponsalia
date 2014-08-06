<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Asignacion
 *
 * @author ecastro
 *
 * @ORM\Table(name="tecnologia.bitacora")
 * @ORM\Entity(repositoryClass="Frontend\CorresponsaliaBundle\Entity\Tecnologia\EntityRepository\BitacoraRepository")
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
     * @ORM\Column(name="idequipo", type="integer", nullable=false)
     * 
     */
    private $idEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="serialequipo", type="string", nullable=false)
     * 
     */
    private $serialEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=false)
     * 
     */
    private $descripcion;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="observacioncondicion", type="text", nullable=true)
     */
    private $observacionCondicion;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaadquisicion", type="date", nullable=true)
     */
    private $fechaAdquisicion;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="categoria", type="text", nullable=true)
     */
    private $categoria;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="condicion", type="string", nullable=true)
     */
    private $condicion;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="modelo", type="string", nullable=true)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable", type="string", nullable=true)
     */
    private $responsable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaasignacion", type="date", nullable=true)
     */
    private $fechaAsignacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecharetorno", type="date", nullable=true)
     */
    private $fechaRetorno;

    /**
     * @var string
     * 
     * @ORM\Column(name="corresponsalia", type="string", nullable=true)
     */
    private $corresponsalia;
    
    /**
     * @var string
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;


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
     * Set serialEquipo
     *
     * @param string $serialEquipo
     * @return Bitacora
     */
    public function setSerialEquipo($serialEquipo)
    {
        $this->serialEquipo = $serialEquipo;
    
        return $this;
    }

    /**
     * Get serialEquipo
     *
     * @return string 
     */
    public function getSerialEquipo()
    {
        return $this->serialEquipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Bitacora
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set observacionCondicion
     *
     * @param string $observacionCondicion
     * @return Bitacora
     */
    public function setObservacionCondicion($observacionCondicion)
    {
        $this->observacionCondicion = $observacionCondicion;
    
        return $this;
    }

    /**
     * Get observacionCondicion
     *
     * @return string 
     */
    public function getObservacionCondicion()
    {
        return $this->observacionCondicion;
    }

    /**
     * Set fechaAdquisicion
     *
     * @param \DateTime $fechaAdquisicion
     * @return Bitacora
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
     * Set categoria
     *
     * @param string $categoria
     * @return Bitacora
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set condicion
     *
     * @param string $condicion
     * @return Bitacora
     */
    public function setCondicion($condicion)
    {
        $this->condicion = $condicion;
    
        return $this;
    }

    /**
     * Get condicion
     *
     * @return string 
     */
    public function getCondicion()
    {
        return $this->condicion;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return Bitacora
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    
        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
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
     * Set corresponsalia
     *
     * @param string $corresponsalia
     * @return Bitacora
     */
    public function setCorresponsalia($corresponsalia)
    {
        $this->corresponsalia = $corresponsalia;
    
        return $this;
    }

    /**
     * Get corresponsalia
     *
     * @return string 
     */
    public function getCorresponsalia()
    {
        return $this->corresponsalia;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Bitacora
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set idEquipo
     *
     * @param integer $idEquipo
     * @return Bitacora
     */
    public function setIdEquipo($idEquipo)
    {
        $this->idEquipo = $idEquipo;
    
        return $this;
    }

    /**
     * Get idEquipo
     *
     * @return integer 
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }

}