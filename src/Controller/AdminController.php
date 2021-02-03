<?php

namespace App\Controller;

use App\Repository\CommandeRepository;
use App\Repository\RestaurantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     * @param RestaurantRepository $restaurantRepository
     * @param CommandeRepository $commandeRepository
     * @return Response
     */
    public function index(RestaurantRepository $restaurantRepository, CommandeRepository $commandeRepository): Response
    {
        $restaurant = count($restaurantRepository->findAll());
        $commandePasse = count($commandeRepository->findByCommande(1));
        $commandeEnCours = count($commandeRepository->findByCommande(0));

        return $this->render('admin/index.html.twig', [
            'restaurant' => $restaurant,
            'commandePasse' => $commandePasse,
            'commandeEnCours' => $commandeEnCours,
        ]);
    }
}
