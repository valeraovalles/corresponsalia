<?php

namespace Administracion\UsuarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsercorresponsaliaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usuario',null,array('empty_value'=>'Seleccione...'))
            ->add('corresponsalia',null,array('empty_value'=>'Seleccione...'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Administracion\UsuarioBundle\Entity\Usercorresponsalia'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'administracion_usuariobundle_usercorresponsalia';
    }
}
