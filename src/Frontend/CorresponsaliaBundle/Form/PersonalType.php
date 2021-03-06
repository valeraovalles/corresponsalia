<?php

namespace Frontend\CorresponsaliaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonalType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('sueldo')
            ->add('pasaporte')
            ->add('fechaingreso', 'date',array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy'))
            ->add('correo')
            ->add('telefono')
            ->add('corresponsaliaId')
            ->add('cargoId')
            ->add('file','file')
            ->add('archivo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Frontend\CorresponsaliaBundle\Entity\Personal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frontend_corresponsaliabundle_personal';
    }
}
