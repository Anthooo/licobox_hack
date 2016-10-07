<?php

namespace LicoboxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class LicorneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('eyes', EntityType::class, array(
                    // query choices from this entity
                    'class' => 'LicoboxBundle\Entity\Eyes',
                )
            )
            ->add('corne', EntityType::class, array(
                // query choices from this entity
                'class' => 'LicoboxBundle\Entity\Corne',
                )
            )
            ->add('pelage', EntityType::class, array(
                // query choices from this entity
                'class' => 'LicoboxBundle\Entity\Pelage',
                )
            )
            ->add('habitat', EntityType::class, array(
                'class' => 'LicoboxBundle\Entity\Habitat',
                )
            );
    }


    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LicoboxBundle\Entity\Licorne'
        ));
    }
}

