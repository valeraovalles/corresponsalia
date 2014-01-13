<?php

namespace Frontend\CorresponsaliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RelaciongastosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numerocomprobante','text')
                
            ->add('fechafactura', 'date',array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd'))
                
            ->add('imputacionpresupuestaria')
            ->add('descripcion')
            ->add('nombrerazonsocial')
            ->add('identificacionfiscal')
            ->add('numerofactura')
            ->add('montomonnac')
            ->add('montodolar')
            ->add('anio')
            ->add('mes')
            ->add('corresponsalia')
            ->add('tipogasto')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\CorresponsaliaBundle\Entity\Relaciongastos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'relaciongastos';
    }
}
