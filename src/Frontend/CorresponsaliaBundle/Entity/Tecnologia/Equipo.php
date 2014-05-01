<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipo
 *
 * @ORM\Table(name="tecnologia.equipo")
 * @ORM\Entity(repositoryClass="Frontend\CorresponsaliaBundle\Entity\Tecnologia\EntityRepository\EquipoRepository")
 */
class Equipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecnologia.equipo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="serialEquipo", type="string", length=255, nullable=false)
     */
    private $serialEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=false)
     */
    private $descripcion;
    
    /**
     * @var boolean
     * 
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="observacionCondicion", type="text", nullable=true)
     */
    private $observacionCondicion;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaAdquisicion", type="date")
     */
    private $fechaAdquisicion;
    
    /**
     * @var | Tecnologia.Categoria
     * 
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     */
    private $categoria;
    
    /**
     * @var | Tecnologia.Condicion
     * 
     * @ORM\ManyToOne(targetEntity="Condicion")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="condicion_id", referencedColumnName="id")
     * })
     */
    private $condicion;
    
    /**
     * @var | Tecnologia.Modelo
     * 
     * @ORM\ManyToOne(targetEntity="Modelo")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="modelo_id", referencedColumnName="id")
     * })
     */
    private $modelo;

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
     * Get categoria
     *
     * @return string
     */
    public function getCategoria() {
        return $this->categoria;
    }
    
    /**
     * Set categoria
     *
     * @param string $categoria
     * @return Equipo
     */
    public function setCategoria($categoria) 
    {
        $this->categoria = $categoria;
        return $this;
    }
    
    /**
     * Get condicion
     *
     * @return string
     */
    public function getCondicion() {
        return $this->condicion;
    }
    
    /**
     * Set condicion
     *
     * @param string $condicion
     * @return Equipo
     */
    public function setCondicion($condicion) {
        $this->condicion = $condicion;
        
        return $this;
    }
    
    /**
     * Get observacion_condicion
     *
     * @return string
     */
    public function getObservacionCondicion() {
        return $this->observacionCondicion;
    }
    
    /**
     * Set observacionCondicion
     *
     * @param string $observacionCondicion
     * @return Equipo
     */
    public function setObservacionCondicion($observacionCondicion) {
        $this->observacionCondicion = $observacionCondicion;
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
     * Set serialEquipo
     *
     * @param string $serialEquipo
     * @return Equipo
     */
    public function setSerialEquipo($serialEquipo)
    {
        $this->serialEquipo = $serialEquipo;
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Equipo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * Get fechaAdquisicion
     *
     * @return date
     */
    public function getFechaAdquisicion() {
        return $this->fechaAdquisicion;
    }

    /**
     * Set fechaAdquisicion
     *
     * @param date $fechaAdquisicion
     * @return Equipo
     */
    public function setFechaAdquisicion(\DateTime $fechaAdquisicion) {
        $this->fechaAdquisicion = $fechaAdquisicion;
        return $this; 
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo() {
        return $this->modelo;
    }

    /**
     * Set modelo
     *
     * @param date $modelo
     * @return Equipo
     */
    public function setModelo($modelo) {
        $this->modelo = $modelo;
        return $this;
    }
    
    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus() {
        return $this->status;
    }
    
    /**
     * Set boolean
     *
     * @param boolean $status
     * @return Equipo
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }
    
    public function __toString() {
        return $this->serialEquipo. $this->descripcion;
    }

}
