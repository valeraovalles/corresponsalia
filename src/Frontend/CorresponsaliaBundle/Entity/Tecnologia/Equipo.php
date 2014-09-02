<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(name="serialequipo", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="El campo serial no puede estar vacio.")
     * @Assert\Length(min = "3", minMessage = "El serial debe tener al menos {{ limit }} caracteres de longitud")
     */
    private $serialEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=false)
     * @Assert\NotBlank(message="El campo descripcion no puede estar vacio.")
     * 
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
     * @ORM\Column(name="observacioncondicion", type="text", nullable=true)
     */
    private $observacionCondicion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaadquisicion", type="date", nullable=true)
     */
    private $fechaAdquisicion;
    
    /**
     * @var | Tecnologia.Categoria
     * 
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar una categoria.")
     */
    private $categoria;
    
    /**
     * @var | Tecnologia.Condicion
     * 
     * @ORM\ManyToOne(targetEntity="Condicion")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="condicion_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar la condicion del equipo.")
     */
    private $condicion;
    
    /**
     * @var | Tecnologia.Modelo
     * 
     * @ORM\ManyToOne(targetEntity="Modelo")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="modelo_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar el modelo del equipo.")
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
     * @return Equipo
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
     * Set status
     *
     * @param boolean $status
     * @return Equipo
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
     * Set observacionCondicion
     *
     * @param string $observacionCondicion
     * @return Equipo
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
     * Set categoria
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Tecnologia\Categoria $categoria
     * @return Equipo
     */
    public function setCategoria(\Frontend\CorresponsaliaBundle\Entity\Tecnologia\Categoria $categoria = null)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Tecnologia\Categoria 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set condicion
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Tecnologia\Condicion $condicion
     * @return Equipo
     */
    public function setCondicion(\Frontend\CorresponsaliaBundle\Entity\Tecnologia\Condicion $condicion = null)
    {
        $this->condicion = $condicion;
    
        return $this;
    }

    /**
     * Get condicion
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Tecnologia\Condicion 
     */
    public function getCondicion()
    {
        return $this->condicion;
    }

    /**
     * Set modelo
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Tecnologia\Modelo $modelo
     * @return Equipo
     */
    public function setModelo(\Frontend\CorresponsaliaBundle\Entity\Tecnologia\Modelo $modelo = null)
    {
        $this->modelo = $modelo;
    
        return $this;
    }

    /**
     * Get modelo
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Tecnologia\Modelo 
     */
    public function getModelo()
    {
        return $this->modelo;
    }
    
    public function __toString() {
        return $this->descripcion;
    }

}