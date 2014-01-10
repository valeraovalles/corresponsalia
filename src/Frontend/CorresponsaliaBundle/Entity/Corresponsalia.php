<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corresponsalia
 *
 * @ORM\Table(name="corresponsalia")
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
     * @ORM\SequenceGenerator(sequenceName="corresponsalia_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=false)
     */
    private $nombre;

    /**
     * @var \Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     * })
     */
    private $pais;

    /**
     * @var \Tipocorresponsalia
     *
     * @ORM\ManyToOne(targetEntity="Tipocorresponsalia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipocorresponsalia_id", referencedColumnName="id")
     * })
     */
    private $tipocorresponsalia;



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
    public function setPaisId($paisId)
    {
        $this->paisId = $paisId;
    
        return $this;
    }

    /**
     * Get paisId
     *
     * @return integer 
     */
    public function getPaisId()
    {
        return $this->paisId;
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
}