<?php

namespace GfctBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class confType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('param',TextType::class,array('label'=>'Parametro',
                                                 'label_attr'=>array('class' => 'etiqueta'),
                                                 'attr' => array('class' => 'etiqueta_elemento')))

            ->add('configuracion',TextType::class,array('label'=>'Configuracion',
                                                 'label_attr'=>array('class' => 'etiqueta'),
                                                 'attr' => array('class' => 'etiqueta_elemento')))

             ->add('guardar',SubmitType::class,array('label'=>'Salvar'))
             ->add('borrar',ResetType::class,array('label'=>'Borrar'))                                     

        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GfctBundle\Entity\conf'
        ));
    }
}
