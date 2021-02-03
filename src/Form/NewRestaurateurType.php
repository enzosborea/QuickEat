<?php

namespace App\Form;

use App\Entity\Restaurant;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class NewRestaurateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'constraints' => [
                    new NotBlank(),
                    new Length(['min' => 2, 'max' => 50]),
                ],
            ])
            ->add('categories', ChoiceType::class, [
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
