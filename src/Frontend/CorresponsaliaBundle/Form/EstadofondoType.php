<?php

namespace Frontend\CorresponsaliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EstadofondoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('saldoinicial', 'money', array(
                'invalid_message' => 'El monto del saldo inicial debe ser numérico',
                'currency'=>"USD"))
            ->add('responsable')
            ->add('recursorecibido', 'money', array(
                'invalid_message' => 'El monto del recurso enviado debe ser numérico',
                'currency'=>"USD"
                ))
            ->add('observacion','textarea')
            ->add('fechaasignacion', 'date',array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd'))
            //->add('saldofinal')
            //->add('pagos')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\CorresponsaliaBundle\Entity\Estadofondo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_corresponsaliabundle_estadofondo';
    }
}
