<?php

namespace App\DataFixtures;

use App\Entity\Localisation;
use App\Entity\Plat;
use App\Entity\Restaurant;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use PhpParser\Node\Expr\New_;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // ---------- user ---------------
        $Localisation = new Localisation();
        $Localisation
            ->setNumber(2)
            ->setAddress('rue de vichy')
            ->setPostalCode(69004)
            ->setCity("lyon")
            ->setCountry("France");
        $manager->persist($Localisation);

        $admin = new User();
        $admin
            ->setEmail('admin@admin.com')
            ->setRoles(["ROLE_ADMIN"])
            ->setName('admin')
            ->setFirstname('admin')
            ->setPhoneNumber('0123456789')
            ->setPassword($this->passwordEncoder->encodePassword($admin, 'admin'))
            ->setLocalisation($Localisation);
        $manager->persist($admin);


        $Localisation2 = new Localisation();
        $Localisation2
            ->setNumber(2)
            ->setAddress('rue de vichy')
            ->setPostalCode(69004)
            ->setCity("lyon")
            ->setCountry("France");
        $manager->persist($Localisation2);

        $resto = new User();
        $resto->setEmail('resto@resto.com')
            ->setRoles(["ROLE_RESTAURATEUR"])
            ->setName('resto')
            ->setFirstname('resto')
            ->setPhoneNumber('0123456789')
            ->setPassword($this->passwordEncoder->encodePassword($resto, 'resto'))
            ->setLocalisation($Localisation2);
        $manager->persist($resto);

            
        $Localisation3 = new Localisation();
        $Localisation3
            ->setNumber(2)
            ->setAddress('rue de vichy')
            ->setPostalCode(69004)
            ->setCity("lyon")
            ->setCountry("France");
        $manager->persist($Localisation3);

        $user = new User();
        $user->setEmail('user@user.com')
            ->setRoles(["ROLE_USER"])
            ->setName('user')
            ->setFirstname('user')
            ->setPhoneNumber('0123456789')
            ->setPassword($this->passwordEncoder->encodePassword($user, 'user'))
            ->setLocalisation($Localisation3);
        $manager->persist($user);

        // ---------- fin user ---------------


        // ---------- restaurant 1 ---------------

        $Localisation4 = new Localisation();
        $Localisation4
            ->setNumber(2)
            ->setAddress('rue de vichy')
            ->setPostalCode(69004)
            ->setCity("lyon")
            ->setCountry("France");

        $manager->persist($Localisation4);

        $restaurant1 = New Restaurant();
        $restaurant1
            ->setLocalisation($Localisation4)
            ->setName("Burger King")
            ->setCategories("Fast food")
            ->setUser($resto)
            ->setImageFilename("bk.jpg");
        
        $manager->persist($restaurant1);

        $plat1 = New Plat();
        $plat1
            ->setRestaurant($restaurant1)
            ->setName("burger")
            ->settype("Plat")
            ->setPrice("12");
        $manager->persist($plat1);

        $plat2 = New Plat();
        $plat2
            ->setRestaurant($restaurant1)
            ->setName("salade")
            ->settype("Entrée")
            ->setPrice("6");
        $manager->persist($plat2);

        $plat3 = New Plat();
        $plat3
            ->setRestaurant($restaurant1)
            ->setName("coca")
            ->settype("Boisson")
            ->setPrice("2");
        $manager->persist($plat3);

        $plat4 = New Plat();
        $plat4
            ->setRestaurant($restaurant1)
            ->setName("Sunday")
            ->settype("Dessert")
            ->setPrice("4");
        $manager->persist($plat4);

        // ---------- fin restaurant 1 ---------------

        // ---------- restaurant 2 ---------------

        $Localisation5 = new Localisation();
        $Localisation5
            ->setNumber(2)
            ->setAddress('rue de vichy')
            ->setPostalCode(69004)
            ->setCity("lyon")
            ->setCountry("France");

        $manager->persist($Localisation5);

        $restaurant2 = New Restaurant();
        $restaurant2
            ->setLocalisation($Localisation5)
            ->setName("Pizzeria")
            ->setCategories("Pizzeria")
            ->setUser($resto)
            ->setImageFilename("Pizzeria.jpg");
        
        $manager->persist($restaurant2);

        $plat5 = New Plat();
        $plat5
            ->setRestaurant($restaurant2)
            ->setName("pizza saumon")
            ->settype("Plat")
            ->setPrice("12");
        $manager->persist($plat5);

        $plat6 = New Plat();
        $plat6
            ->setRestaurant($restaurant2)
            ->setName("salade")
            ->settype("Entrée")
            ->setPrice("6");
        $manager->persist($plat6);

        $plat7 = New Plat();
        $plat7
            ->setRestaurant($restaurant2)
            ->setName("oasis")
            ->settype("Boisson")
            ->setPrice("2");
        $manager->persist($plat7);

        $plat8 = New Plat();
        $plat8
            ->setRestaurant($restaurant2)
            ->setName("Sunday")
            ->settype("Dessert")
            ->setPrice("4");
        $manager->persist($plat8);

        // ---------- fin restaurant 2 ---------------


        $manager->flush();
    }
}
