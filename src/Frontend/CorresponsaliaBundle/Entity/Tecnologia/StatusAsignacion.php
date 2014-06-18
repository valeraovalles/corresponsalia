<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Status
 *
 * @ORM\Table(name="tecnologia.statusasignacion")
 * @ORM\Entity
 */
class StatusAsignacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tecnologia.statusasignacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="El campo nombre de categoria no puede estar vacio.")
     * @Assert\Type(type="alpha", message="El nombre {{ value }} es invalido. Introduzca solo letras.")
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
        return $this->nombre;
    }
    
    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Status
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }
    
    /**
     * __toString name
     *
     * @return string 
     */
    public function __toString() {
        return $this->nombre;
    }
}