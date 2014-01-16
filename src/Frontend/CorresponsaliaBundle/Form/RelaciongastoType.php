<?php

namespace Frontend\CorresponsaliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RelaciongastoType extends AbstractType
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
            ->add('nombrerazonsocial')
            ->add('identificacionfiscal')
            ->add('numerofactura')
            ->add('montomonnac', 'money', array(
                'divisor' => 100,
                'invalid_message' => 'EL campo monto debe ser sólo con números',
                'currency'=>null
                ))
            ->add('montodolar')
            ->add('anio')
            ->add('mes')
            ->add('descripciongasto')
            ->add('tipogasto',null, array(
                'multiple' => false,
                'expanded' => true,
                'empty_value'=>false))
            ->add('corresponsalia')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\CorresponsaliaBundle\Entity\Relaciongasto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rendicion_relaciongasto';
    }
}
