<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Personal
 *
 * @ORM\Table(name="nomina.personal")
 * @ORM\Entity
 */
class Personal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nomina.personal_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;   

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=false)
     * @Assert\NotBlank(message="El campo nombre no puede estar en blanco.").
     */
    private $nombre;
    
    /**
     * @var float
     *
     * @ORM\Column(name="sueldo", type="decimal", precision=20, scale= 2, nullable=false)
     * @Assert\NotBlank(message="El campo sueldo no puede estar en blanco.").
     */
    private $sueldo;

    /**
     * @var string
     *
     * @ORM\Column(name="pasaporte", type="string", nullable=false)
     * @Assert\NotBlank(message="El campo pasaporte no puede estar en blanco.").
     */
    private $pasaporte;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", nullable=false)
     * @Assert\NotBlank(message="El campo correo no puede estar en blanco.").
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", nullable=false)
     * @Assert\NotBlank(message="El campo telefono no puede estar en blanco.").
     */
    private $telefono;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaingreso", type="date", nullable=false)
     * @Assert\NotBlank(message="El campo fecha de ingreso no puede estar en blanco.").
     */
    private $fechaingreso;

    /**
     * @var \Corresponsalia
     *
     * @ORM\ManyToOne(targetEntity="Corresponsalia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corresponsalia_id", referencedColumnName="id", nullable=false)
     * })
     * @Assert\NotBlank(message="Debe seleccionar una Corresponsalía.")
     */
    private $corresponsaliaId;

    /**
     * @var \Cargo
     *
     * @ORM\ManyToOne(targetEntity="Cargo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cargo_id", referencedColumnName="id", nullable=false)
     * })
     * @Assert\NotBlank(message="Debe seleccionar una Cargo.")
     */
    private $cargoId;

    /**
     * @Assert\File(maxSize="5000000", maxSizeMessage="El archivo que intenta subir es demasiado grande.")
     *  
     */
    private $file;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Cargo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set sueldo
     *
     * @param float $sueldo
     * @return Personal
     */
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    
        return $this;
    }

    /**
     * Get sueldo
     *
     * @return float 
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * Set pasaporte
     *
     * @param string $pasaporte
     * @return Personal
     */
    public function setPasaporte($pasaporte)
    {
        $this->pasaporte = $pasaporte;
    
        return $this;
    }

    /**
     * Get pasaporte
     *
     * @return string 
     */
    public function getPasaporte()
    {
        return $this->pasaporte;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Personal
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    
        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Personal
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fechaingreso
     *
     * @param \DateTime $fechaingreso
     * @return Personal
     */
    public function setFechaingreso($fechaingreso)
    {
        $this->fechaingreso = $fechaingreso;
    
        return $this;
    }

    /**
     * Get fechaingreso
     *
     * @return \DateTime 
     */
    public function getFechaingreso()
    {
        return $this->fechaingreso;
    }

    /*
     * Set corresponsaliaId
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Corresponsalia $corresponsaliaId
     * @return Personal
     */
    public function setCorresponsaliaId(\Frontend\CorresponsaliaBundle\Entity\Corresponsalia $corresponsaliaId = null)
    {
        $this->corresponsaliaId = $corresponsaliaId;
    
        return $this;
    }

    /**
     * Get corresponsaliaId
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Corresponsalia 
     */
    public function getCorresponsaliaId()
    {
        return $this->corresponsaliaId;
    }

    /*
     * Set cargoId
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Cargo $cargoId
     * @return Personal
     */
    public function setCargoId(\Frontend\CorresponsaliaBundle\Entity\Cargo $cargoId = null)
    {
        $this->cargoId = $cargoId;
    
        return $this;
    }

    /**
     * Get cargoId
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Cargo 
     */
    public function getCargoId()
    {
        return $this->cargoId;
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile($file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set archivo
     *
     * @param string $archivo
     * @return Ticket
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
        return $this->getNombre();
    }
}