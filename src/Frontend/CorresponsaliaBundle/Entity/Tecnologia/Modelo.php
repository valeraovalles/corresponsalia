<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Description of Modelo
 *
 * @ORM\Table(name="tecnologia.modelo", uniqueConstraints={@ORM\UniqueConstraint(columns={"nombre"})})
 * @ORM\Entity(repositoryClass="Frontend\CorresponsaliaBundle\Entity\Tecnologia\EntityRepository\ModeloRepository")
 * @UniqueEntity(fields={"nombre"}, message="El modelo ya se encuentra registrada.")
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
     * @Assert\NotBlank(message="El campo nombre del modelo no puede estar vacio.")
     * @Assert\Regex(
     *     pattern="/^[a-zñÑáéíóúÁÉÍÓÚA-Z1-9- ]+$/",
     *     message="El nombre del modelo no puede contener numeros"
     * )
     * 
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

    public function __toString() {
        return ucfirst($this->nombre);
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

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Modelo
     */
    public function setNombre($nombre)
    {
        $this->nombre = strtolower($nombre);
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return ucfirst($this->nombre);
    }

    /**
     * Set marca
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Tecnologia\Marca $marca
     * @return Modelo
     */
    public function setMarca(\Frontend\CorresponsaliaBundle\Entity\Tecnologia\Marca $marca = null)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Tecnologia\Marca 
     */
    public function getMarca()
    {
        return $this->marca;
    }
}