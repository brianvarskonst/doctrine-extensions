<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Form;

use Bvsk\DoctrineExtension\Contract\HCardable;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HCardType extends HAddressType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(
            [
                'data_class' => HCardable::class,
            ]
        );
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $autocompleteSection = $options['autocomplete_section'] ? $options['autocomplete_section'].' ' : '';

        $builder->add(
            'name',
            TextType::class,
            [
                'attr' => [
                    'autocomplete' => $autocompleteSection.'given-name',
                ],
            ]
        );

        $builder->add(
            'surname',
            TextType::class,
            [
                'attr' => [
                    'autocomplete' => $autocompleteSection.'family-name',
                ],
            ]
        );

        $builder->add(
            'tel',
            TelType::class,
            [
                'attr' => [
                    'autocomplete' => $autocompleteSection.'tel',
                ],
            ]
        );

        parent::buildForm($builder, $options);
    }
}