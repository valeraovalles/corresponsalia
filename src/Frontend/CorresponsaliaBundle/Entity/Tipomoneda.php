<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Relaciongasto
 *
 * @ORM\Table(name="tipomoneda")
 * @ORM\Entity
 */
class Tipomoneda
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipomoneda_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipomoneda", type="string", nullable=false)
     * @Assert\NotBlank(message="El campo tipo moneda no debe estar vacío.").
     */
    private $tipomoneda;




    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipomoneda
     *
     * @param integer $tipomoneda
     * @return Relaciongastos
     */
    public function setTipomoneda($tipomoneda)
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

   
    public function __toString()
    {
        return $this->getTipomoneda();
    }

}