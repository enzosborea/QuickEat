<?php

namespace App\Form;

use App\Data\SearchData;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('city', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Villes',
                    'class' => 'form-control search-slt' 
                ]
            ])
            ->add('name', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Nom du restaurant',
                    'class' => 'form-control search-slt' 
                ]
            ])
            ->add('categories', ChoiceType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-control search-slt' 
                ],
                'choices' => [
                    'Type de restaurant' => '',
                    'Fast Food' => 'Fast food',
                    'Pizzeria' => 'Pizzeria',
                    'Asiatique' => 'Asiatique',
                    'Indien' => 'Indien',
                    'Halal' => 'Halal',
                    'Francais' => 'Francais',
                    'Italien' => 'Italien',
                    'Vegan' => 'Vegan',                 
                ]
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
            'method' => 'POST',
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
