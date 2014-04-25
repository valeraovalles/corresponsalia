<?php

namespace Frontend\CorresponsaliaBundle\Entity\Reportes;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Estadofondo
 *
 */
class AuditoriaEstadofondo
{
    /**
     * @Assert\NotBlank(message="Debe seleccionar un año desde.")
     */
    private $aniodesde;

    /**
     * @Assert\NotBlank(message="Debe seleccionar un mes desde.")
     */
    private $mesdesde;
    
    /**
     * @Assert\NotBlank(message="Debe seleccionar un año hasta.")
     */
    private $aniohasta;

    /**
     * @Assert\NotBlank(message="Debe seleccionar un mes hasta.")
     */
    private $meshasta;
    
    /**
     * @Assert\NotBlank(message="Debe seleccionar una Corresponsalía.")
     */
    private $corresponsalia;

    /**
     * @Assert\NotBlank(message="Debe seleccionar un tipo de gasto.")
     */
    private $tipogasto;

   
    /*
     */
    private $cobertura;
    

    /**
     * @var \Descripciongasto
     *
     * @ORM\ManyToOne(targetEntity="Descripciongasto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="descripciongasto_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe seleccionar una descripción de gasto.")
     
     */
    private $descripciongasto;
    
    public function setAniodesde($aniodesde)
    {
        $this->aniodesde = $aniodesde;
    
        return $this;
    }

    public function getAniodesde()
    {
        return $this->aniodesde;
    }

    public function setMesdesde($mesdesde)
    {
        $this->mesdesde = $mesdesde;
    
        return $this;
    }

    public function getMesdesde()
    {
        return $this->mesdesde;
    }

    
    public function setAniohasta($aniohasta)
    {
        $this->aniohasta = $aniohasta;
    
        return $this;
    }

    public function getAniohasta()
    {
        return $this->aniohasta;
    }

    public function setMeshasta($meshasta)
    {
        $this->meshasta = $meshasta;
    
        return $this;
    }

    public function getMeshasta()
    {
        return $this->meshasta;
    }
    
    public function setCorresponsalia($corresponsalia)
    {
        $this->corresponsalia = $corresponsalia;
    
        return $this;
    }

    public function getCorresponsalia()
    {
        return $this->corresponsalia;
    }

    public function setTipogasto($tipogasto)
    {
        $this->tipogasto = $tipogasto;
    
        return $this;
    }

    public function getTipogasto()
    {
        return $this->tipogasto;
    }
    
    
    public function setCobertura($cobertura)
    {
        $this->cobertura = $cobertura;
    
        return $this;
    }

    public function getCobertura()
    {
        return $this->cobertura;
    }

    /**
     * Set descripciongasto
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Descripciongasto $descripciongasto
     * @return Relaciongastos
     */
    public function setDescripciongasto(\Frontend\CorresponsaliaBundle\Entity\Descripciongasto $descripciongasto = null)
    {
        $this->descripciongasto = $descripciongasto;
    
        return $this;
    }

    /**
     * Get descripciongasto
     *
     * @return \Frontend\CorresponsaliaBundle\Entity\Descripciongasto 
     */
    public function getDescripciongasto()
    {
        return $this->descripciongasto;
    }

}