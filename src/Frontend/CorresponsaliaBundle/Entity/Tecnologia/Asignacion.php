<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Asignacion
 *
 * @author ecastro
 * 
 * @ORM\Table(name="tecnologia.asignacion")
 * @ORM\Entity(repositoryClass="Frontend\CorresponsaliaBundle\Entity\Tecnologia\EntityRepository\AsignacionRepository")
 */
class Asignacion 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\OneToOne(targetEntity="Frontend\CorresponsaliaBundle\Entity\Tecnologia\Equipo")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     * @ORM\Id
     */
    private $id;
    
    /**
     * @var | Rendicion.Corresponsalia
     * 
     * @ORM\ManyToOne(targetEntity="Frontend\CorresponsaliaBundle\Entity\Corresponsalia")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="corresponsalia_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar una corresponsalia.")
     */
    private $corresponsalia;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="responsable", type="string", nullable=false)
     * @Assert\NotBlank(message="Debe ingresar el nombre completo del responsable del equipo.")
     */
    private $responsable;
    
    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaAsignacion", type="date", nullable=true)
     */
    private $fechaAsignacion;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaEstimadaRetorno", type="date", nullable=true)
     */
    private $fechaEstimadaRetorno;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaRetorno", type="date", nullable=true)
     */
    private $fechaRetorno;
    
    /**
     * @var | Tecnologia.StatusAsignacion
     * 
     * @ORM\ManyToOne(targetEntity="StatusAsignacion")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar un tipo de asignacion.")
     */
    private $status;   
    
    

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return Asignacion
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
     * @return Asignacion
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
     * @return Asignacion
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
     * @return Asignacion
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
     * @param \Frontend\CorresponsaliaBundle\Entity\Corresponsalia $corresponsalia
     * @return Asignacion
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
     * Set status
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Tecnologia\StatusAsignacion $status
     * @return Asignacion
     */
    public function setStatus(\Frontend\CorresponsaliaBundle\Entity\Tecnologia\StatusAsignacion $status = null)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Tecnologia\StatusAsignacion 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return Asignacion
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString() {
        return $this->responsable;
    }
}