<?php

namespace App\Form;

use App\Entity\Localisation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class LocalisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number', NumberType::class, [
                'label' => 'N° de l\'adresse',
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 1, 'max' => 4]),
                ],

            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse'
            ])
            ->add('postalCode', NumberType::class, [
                'label' => 'Code postal',
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 5, 'max' => 5]),
                ],
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 2, 'max' => 50]),
                ],
            ])
            ->add('country', CountryType::class, [
                'label' => 'Pays',
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 2, 'max' => 42]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Localisation::class,
        ]);
    }
}
