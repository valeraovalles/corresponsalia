<?php

namespace Frontend\CorresponsaliaBundle\Form\Tecnologia;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Frontend\CorresponsaliaBundle\Form\Tecnologia\EventListener\AddModeloFieldSubscriber;
use Frontend\CorresponsaliaBundle\Form\Tecnologia\EventListener\AddMarcaFieldSubscriber;

class EquipoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $propertyPathToModelo = 'modelo';
        
        $builder
            ->addEventSubscriber(new AddModeloFieldSubscriber($propertyPathToModelo))
            ->addEventSubscriber(new AddMarcaFieldSubscriber($propertyPathToModelo))
        ;
        
        $builder
            ->add('serialEquipo')
            ->add('descripcion')
            ->add('modelo')
            ->add('status')
            ->add('observacionCondicion')
            ->add('fechaAdquisicion', 'date', array('widget' => 'single_text'))
            ->add('categoria', null, array('empty_value' => 'Seleccione',))
            ->add('condicion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\CorresponsaliaBundle\Entity\Tecnologia\Equipo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tecnologia_equipo';
    }
}
