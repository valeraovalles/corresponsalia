<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Categoria
 *
 * @ORM\Table(name="tecnologia.categoria", uniqueConstraints={@ORM\UniqueConstraint(columns={"nombre"})})
 * @ORM\Entity
 * @UniqueEntity(fields={"nombre"}, message="La categoria ya se encuentra registrada.")
 * 
 */
class Categoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecnologia.categoria_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="El campo nombre de categoria no puede estar vacio.")
     * @Assert\Regex(
     *     pattern="/^[a-zñÑáéíóúÁÉÍÓÚA-Z ]+$/",
     *     message="El nombre de la categoria no puede contener numeros"
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
     * @return Categoria
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
    public function __toString() {
        return ucfirst($this->nombre);
    }

}
