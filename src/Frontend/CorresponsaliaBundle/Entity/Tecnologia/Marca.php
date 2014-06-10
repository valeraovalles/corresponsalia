<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Marca
 *
 * @ORM\Table(name="tecnologia.marca", uniqueConstraints={@ORM\UniqueConstraint(columns={"nombre"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"nombre"}, message="La Marca ya se encuentra registrada.")
 * 
 * 
 */
class Marca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecnologia.marca_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="El campo nombre de marca no puede estar vacio.")
     * @Assert\Regex(
     *     pattern="/^[a-zñÑáéíóúÁÉÍÓÚA-Z ]+$/",
     *     message="El nombre de la marca no puede contener numeros"
     * )
     * 
     */
    private $nombre;


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
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return ucfirst($this->nombre);
    }
    
    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Marca
     */
    public function setNombre($nombre)
    {
        $this->nombre = strtolower($nombre);
    
        return $this;
    }
    
    /**
     * __toString nombre
     *
     * @return string 
     */
    public function __toString() {
        return ucfirst($this->nombre);
    }

    
}
