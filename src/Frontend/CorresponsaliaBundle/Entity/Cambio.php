<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Corresponsalia
 *
 * @ORM\Table(name="rendicion.cambio")
 * @ORM\Entity
 */
class Cambio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rendicion.cambio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

     /**
     * @var integer
     *
     * @ORM\Column(name="montocambiodolar", type="decimal", precision=20, scale= 3, nullable=false)
     * @Assert\NotBlank(message="El monto no debe estar vacío.")
     */
    private $montocambiodolar;

        /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahoraresgistro", type="datetime", nullable=false)
     */
    private $fechahoraregistro;
    

    /**
     * @var \Perfil
     *
     * @ORM\ManyToOne(targetEntity="Administracion\UsuarioBundle\Entity\Perfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsable_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $responsable;
    
    /**
     * @var \Tipogasto
     *
     * @ORM\ManyToOne(targetEntity="Periodorendicion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="periodorendicion_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $periodorendicion;
    
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
     * Set montocambiodolar
     *
     * @param string $montocambiodolar
     * @return Relaciongastos
     */
    public function setMontocambiodolar($montocambiodolar)
    {
        $this->montocambiodolar = $montocambiodolar;
    
        return $this;
    }

    /**
     * Get montocambiodolar
     *
     * @return string 
     */
    public function getMontocambiodolar()
    {
        return $this->montocambiodolar;
    }

    
    /**
     * Set fechahoraregistro
     *
     * @param \DateTime $fechahoraregistro
     * @return Ticket
     */
    public function setFechahoraregistro($fechahoraregistro)
    {
        $this->fechahoraregistro = $fechahoraregistro;
    
        return $this;
    }

    /**
     * Get fechahoraregistro
     *
     * @return \DateTime 
     */
    public function getFechahoraregistro()
    {
        return $this->fechahoraregistro;
    }
    
     /**
     * Set responsable
     *
     * @param \Administracion\UsuarioBundle\Entity\Perfil $responsable
     * @return Operador
     */
    public function setResponsable(\Administracion\UsuarioBundle\Entity\Perfil $responsable = null)
    {
        $this->responsable = $responsable;
    
        return $this;
    }

    /**
     * Get responsable
     *
     * @return \Administracion\UsuarioBundle\Entity\Perfil 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
    
    public function __toString()
    {
        return $this->getMonto();
    }
    
    /**
     * Set periodorendicion
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Periodorendicion $periodorendicion
     * @return Relaciongastos
     */
    public function setPeriodorendicion(\Frontend\CorresponsaliaBundle\Entity\Periodorendicion $periodorendicion = null)
    {
        $this->periodorendicion = $periodorendicion;
    
        return $this;
    }

    /**
     * Get periodorendicion
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Periodorendicion 
     */
    public function getPeriodorendicion()
    {
        return $this->periodorendicion;
    }
}