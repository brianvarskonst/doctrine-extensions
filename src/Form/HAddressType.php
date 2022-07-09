<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Form;

use Bvsk\DoctrineExtension\Contract\HAddressable;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HAddressType extends AddressType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(
            [
                'data_class' => HAddressable::class,
            ]
        );
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        parent::buildForm($builder, $options);
    }
}
