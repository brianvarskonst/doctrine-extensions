<?php

declare(strict_types=1);

namespace Bvsk\DoctrineExtension\Form;

use Bvsk\DoctrineExtension\Contract\Addressable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Intl\Countries;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;

class AddressType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'data_class' => Addressable::class,
                'country_choices' => '',
                'autocomplete_section' => '',
                'address_lines' => 2,
                'show_post_office_box' => false,
                'show_country' => true,
            ]
        );

        $resolver->addAllowedTypes('autocomplete_section', ['null', 'string']);
        $resolver->addAllowedValues('address_lines', [1, 2]);
        $resolver->addAllowedTypes('show_post_office_box', ['bool']);
        $resolver->addAllowedTypes('show_country', ['bool']);
        $resolver->addAllowedTypes('country_choices', ['null', 'array']);
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $autocompleteSection = $options['autocomplete_section'] ? $options['autocomplete_section'].' ' : '';

        $builder->add(
            'streetAddress',
            TextType::class,
            [
                'attr' => [
                    'autocomplete' => $autocompleteSection.(
                        $options['address_lines'] === 2 ? 'address-line1' : 'street-address'
                    ),
            ],
        ]);

        if ($options['address_lines'] === 2) {
            $builder->add(
                'extendedAddress',
                TextType::class,
                [
                    'attr' => [
                        'autocomplete' => "{$autocompleteSection}address-line2",
                    ],
                ]
            );
        }

        if ($options['show_post_office_box']) {
            $builder->add('postOfficeBox');
        }

        $builder->add(
            'postalCode',
            TextType::class,
            [
                'attr' => [
                    'autocomplete' => "{$autocompleteSection}postal-code",
                ],
            ]
        );

        $builder->add(
            'locality',
            TextType::class,
            [
                'attr' => [
                    'autocomplete' => "{$autocompleteSection}address-level2",
                ],
            ]
        );

        $builder->add(
            'region',
            TextType::class,
            [
                'attr' => [
                    'autocomplete' => "{$autocompleteSection}address-level1",
                ],
            ]
        );

        if ($options['show_country']) {
            $countryCodeOptions = [
                'attr' => [
                    'autocomplete' => $autocompleteSection.'country',
                ],
            ];

            if (is_array($options['country_choices']) && !empty($options['country_choices'])) {
                foreach ($options['country_choices'] as $countryCode) {
                    $countryCodeOptions['choices'][Countries::getNames()[$countryCode]] = $countryCode;
                }

                $countryCodeOptions['choice_loader'] = null;
            }

            $builder->add(
                'countryCode',
                CountryType::class,
                $countryCodeOptions
            );
        }
    }
}
