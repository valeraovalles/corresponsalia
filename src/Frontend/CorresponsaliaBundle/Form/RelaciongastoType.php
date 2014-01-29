<?php

namespace Frontend\CorresponsaliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class RelaciongastoType extends AbstractType
{
    
    public function __construct($idgasto)
    {
        $this->idgasto = $idgasto;

    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $idgasto = $this->idgasto;
        
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
                'invalid_message' => 'EL campo monto debe ser sólo con números',
                'currency'=>null
                ))
            ->add('montodolar', 'money', array(
                'invalid_message' => 'EL campo dólares debe ser sólo con números',
                'currency'=>null
                ))
            ->add('anio')
            ->add('mes')
            ->add('descripciongasto', 'entity', array(
                    'class' => 'CorresponsaliaBundle:Descripciongasto',
                    'property' => 'descripcion',
                    'multiple' => false,
                    'empty_value'=>'Seleccione...',
                    'query_builder' => function(EntityRepository $er) use ($idgasto) {
                    return $er->createQueryBuilder('t')
                    ->where('t.tipogasto = :id')
                    ->setParameter('id', $idgasto)
                ;},
                ))
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
