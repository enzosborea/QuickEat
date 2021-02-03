<?php

namespace App\Form;

use App\Entity\Restaurant;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RestaurantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('categories', ChoiceType::class, [
                'label' => 'Catégories',
                'choices' => [
                    'Fast Food' => 'Fast food',
                    'Pizzeria' => 'Pizzeria',
                    'Asiatique' => 'Asiatique',
                    'Indien' => 'Indien',
                    'Halal' => 'Halal',
                    'Francais' => 'Francais',
                    'Italien' => 'Italien',
                    'Vegan' => 'Vegan',                    
                ],
            ])
            ->add('localisation', LocalisationType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Restaurant::class,
        ]);
    }
}
