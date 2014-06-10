<?php

namespace Frontend\CorresponsaliaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadofondo
 *
 */
class Reporte
{
    private $aniodesde;

    private $mesdesde;
    
    private $aniohasta;

    private $meshasta;
    
    private $corresponsalia;

    private $tipogasto;

    private $cobertura;

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

    public function setDescripciongasto($descripciongasto)
    {
        $this->descripciongasto = $descripciongasto;
    
        return $this;
    }

    public function getDescripciongasto()
    {
        return $this->descripciongasto;
    }

}