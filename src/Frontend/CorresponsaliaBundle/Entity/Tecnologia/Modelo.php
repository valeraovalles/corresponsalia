<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Modelo
 *
 * @ORM\Table(name="tecnologia.modelo")
 * @ORM\Entity(repositoryClass="Frontend\CorresponsaliaBundle\Entity\Tecnologia\EntityRepository\ModeloRepository")
 */
class Modelo {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecnologia.modelo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;
    
    /**
     * @var | Tecnologia.Marca
     * 
     * @ORM\ManyToOne(targetEntity="Marca")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="marca_id", referencedColumnName="id")
     * })
     */
    private $marca;

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
     * @return Modelo
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
     * Get Marca
     *
     * @return integer 
     */
    public function getMarca()
    {
        return $this->marca;
    }
    
    /**
     * Set nombre
     *
     * @param string $marca
     * @return Marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
        return $this;
    }
    
    public function __toString() {
        return $this->nombre;
    }

}