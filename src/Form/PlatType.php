<?php

namespace App\Form;

use App\Entity\Plat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class PlatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
            'label' => 'Nom',
            'constraints' => [
                new NotBlank(),
                new Length(['min' => 2, 'max' => 42]),
            ]
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Entrée' => 'Entrée',
                    'Plat' => 'Plat',
                    'Dessert' => 'Dessert',
                    'Boisson' => 'Boisson',                
                ]
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Image',
                'mapped' => false
            ])
            ->add('price', NumberType::class, [
                'label' => 'Prix'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Plat::class,
        ]);
    }
}
