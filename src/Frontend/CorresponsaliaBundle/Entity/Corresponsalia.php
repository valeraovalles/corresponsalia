<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Corresponsalia
 *
 * @ORM\Table(name="rendicion.corresponsalia")
 * @ORM\Entity
 */
class Corresponsalia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rendicion.corresponsalia_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar una país.").
     */
    private $pais;

    /**
     * @var \Tipocorresponsalia
     *
     * @ORM\ManyToOne(targetEntity="Tipocorresponsalia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipocorresponsalia_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar un tipo de corresponsalía").
     */
    private $tipocorresponsalia;


    /**
     * @var \Tipomoneda
     *
     * @ORM\ManyToOne(targetEntity="Tipomoneda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipomoneda_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar un tipo de moneda").
     */
    private $tipomoneda;

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
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", nullable=true)
     * @Assert\NotBlank(message="El campo direccion no puede estar en blanco.").
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="registro", type="string", nullable=true)
     * @Assert\NotBlank(message="El campo registro no puede estar en blanco.").
     */
    private $registro;

    /**
     * @var string
     *
     * @ORM\Column(name="representanteId", type="string", nullable=true)
     */
    private $representanteId;

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
     * @return Corresponsalia
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
     * Set paisId
     *
     * @param integer $paisId
     * @return Corresponsalia
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get paisId
     *
     * @return integer 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set tipocorresponsalia
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Tipocorresponsalia $tipocorresponsalia
     * @return Corresponsalia
     */
    public function setTipocorresponsalia(\Frontend\CorresponsaliaBundle\Entity\Tipocorresponsalia $tipocorresponsalia = null)
    {
        $this->tipocorresponsalia = $tipocorresponsalia;
    
        return $this;
    }

    /**
     * Get tipocorresponsalia
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Tipocorresponsalia 
     */
    public function getTipocorresponsalia()
    {
        return $this->tipocorresponsalia;
    }
    
    /**
     * Set tipomoneda
     *
     * @param integer $tipomoneda
     * @return Relaciongastos
     */
    public function setTipomoneda(\Frontend\CorresponsaliaBundle\Entity\Tipomoneda $tipomoneda = null )
    {
        $this->tipomoneda = $tipomoneda;
    
        return $this;
    }

    /**
     * Get tipomoneda
     *
     * @return integer 
     */
    public function getTipomoneda()
    {
        return $this->tipomoneda;
    }

    
    /**
     * Set tipogasto
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Tipogasto $tipogasto
     * @return Relaciongastos
     */
    public function setTipogasto(\Frontend\CorresponsaliaBundle\Entity\Tipogasto $tipogasto = null)
    {
        $this->tipogasto = $tipogasto;
    
        return $this;
    }

    /**
     * Get tipogasto
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Tipogasto 
     */
    public function getTipogasto()
    {
        return $this->tipogasto;
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
    
    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Datoslegales
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set registro
     *
     * @param string $registro
     * @return Datoslegales
     */
    public function setRegistro($registro)
    {
        $this->registro = $registro;
    
        return $this;
    }

    /**
     * Get registro
     *
     * @return string 
     */
    public function getRegistro()
    {
        return $this->registro;
    }

    /**
     * Set representanteId
     *
     * @param string $representanteId
     * @return Corresponsalia
     */
    public function setRepresentanteId($representanteId)
    {
        $this->representanteId = $representanteId;
    
        return $this;
    }

    /**
     * Get representanteId
     *
     * @return string 
     */
    public function getRepresentanteId()
    {
        return $this->representanteId;
    }

    public function __toString()
    {
        return $this->getNombre().' | '.$this->getPais()->getPais();
    }
}