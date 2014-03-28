<?php

namespace Administracion\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Perfil
 *
 * @ORM\Table(name="usuarios.usercorresponsalia")
 * @ORM\Entity
 */
class Usercorresponsalia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="usuarios.usercorresponsalia_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \"user"
     *
     * @ORM\ManyToOne(targetEntity="Perfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe selecciona un usuario.")
     */
    private $usuario;

    /**
     * @var \Corresponsalia
     *
     * @ORM\ManyToOne(targetEntity="\Frontend\CorresponsaliaBundle\Entity\Corresponsalia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corresponsalia_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Debe selecciona una corresponsalía.")
     */
    private $corresponsalia;

   
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
     * Set usuario
     *
     * @param \Administracion\UsuarioBundle\Entity\usuario $usuario
     * @return Perfil
     */
    public function setUsuario(\Administracion\UsuarioBundle\Entity\Perfil $usuario = null)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Administracion\UsuarioBundle\Entity\usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
    
    /**
     * Set corresponsalia
     *
     * @param \Frontend\CorresponsaliaBundle\Entity\Corresponsalia $corresponsalia
     * @return Estadofondo
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