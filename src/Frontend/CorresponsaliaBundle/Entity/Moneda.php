<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relaciongasto
 *
 * @ORM\Table(name="moneda")
 * @ORM\Entity
 */
class Moneda
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="moneda_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="monedanacional", type="string", nullable=false)
     */
    private $monedanacional;

     /**
     * @var integer
     *
     * @ORM\Column(name="valormonedanacional", type="decimal", nullable=false)
     */
    private $valormonedanacional;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="montocambiodolar", type="decimal", nullable=false)
     */
    private $montocambiodolar;
    
    /**
     * @var \Corresponsalia
     *
     * @ORM\ManyToOne(targetEntity="Corresponsalia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corresponsalia_id", referencedColumnName="id")
     * })
     */
    private $corresponsalia;


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
     * Set monedanacional
     *
     * @param integer $monedanacional
     * @return Relaciongastos
     */
    public function setMonedanacional($monedanacional)
    {
        $this->monedanacional = $monedanacional;
    
        return $this;
    }

    /**
     * Get monedanacional
     *
     * @return integer 
     */
    public function getMonedanacional()
    {
        return $this->monedanacional;
    }

    /**
     * Set valormonedanacional
     *
     * @param \DateTime $valormonedanacional
     * @return Relaciongastos
     */
    public function setValormonedanacional($valormonedanacional)
    {
        $this->valormonedanacional = $valormonedanacional;
    
        return $this;
    }

    /**
     * Get valormonedanacional
     *
     * @return \DateTime 
     */
    public function getValormonedanacional()
    {
        return $this->valormonedanacional;
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
     * Set corresponsalia
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Corresponsalia $corresponsalia
     * @return Relaciongastos
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


}