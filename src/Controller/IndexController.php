<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Restaurant;
use App\Form\SearchType;
use App\Repository\PlatRepository;
use App\Repository\RestaurantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param RestaurantRepository $restaurantRepository
     * @param Request $request
     */
    public function index(RestaurantRepository $restaurantRepository, Request $request)
    {

        $data = new SearchData();
        $form = $this->createForm(SearchType::class, $data);
        $form->handleRequest($request);
        $restaurants = $restaurantRepository->findByFilter($data);

        return $this->render('index/index.html.twig', [
            'restaurants' => $restaurants,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/lerestaurant/{id}", name="lerestaurant")
     * @param Restaurant $restaurant
     * @param PlatRepository $platRepository
     * @return Response
     */
    public function restaurant(Restaurant $restaurant, PlatRepository $platRepository)
    {
        $entree = $platRepository->findByRestaurant($restaurant, 'Entrée');
        $plats = $platRepository->findByRestaurant($restaurant, 'plat');
        $dessert = $platRepository->findByRestaurant($restaurant, 'Dessert');
        $boisson = $platRepository->findByRestaurant($restaurant, 'Boisson');
        return $this->render('index/restaurant.html.twig', [
            'restaurant' => $restaurant,
            'entrees' => $entree,
            'plats' => $plats,
            'desserts' => $dessert,
            'boissons' => $boisson,
        ]);
    }

    /**
     * @Route("member/panier", name="panier")
     * @param SessionInterface $session
     * @param PlatRepository $platRepository
     * @return Response
     */
    public function panier(SessionInterface $session, PlatRepository $platRepository)
    {
        $panier = $session->get('panier', []);

        $panierWithData = [];

        foreach($panier as $id => $quantity) {
            $panierWithData[] = [
                'plat' => $platRepository->find($id),
                'quantity' => $quantity
            ];
        }

        $total = 0;
        $livraison = 2.5;

        foreach($panierWithData as $item) {
            $totalItem = $item['plat']->getPrice() * $item['quantity'];
            $total += $totalItem;
        }
        $total += $livraison;

        return $this->render('index/panier.html.twig', [
            'items' => $panierWithData,
            'total' => $total,
            'livraison' => $livraison
        ]);
    }

    /**
     * @Route("member/panier/add/{id}", name="panier_add")
     * @param $id
     * @param SessionInterface $session
     * @param PlatRepository $platRepository
     * @return RedirectResponse
     */
    public function add($id, SessionInterface $session, PlatRepository $platRepository)
    {
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])) {
            $panier[$id]++;
        } else{
            $panier[$id] = 1;
        }
        $session->set('panier', $panier);

        $array1 = $platRepository->findRestaurant($id);

        foreach ($array1 as $array2) {
            $restaurant = $array2->getRestaurant();
            $id_restaurant = $restaurant->getId();
        }

        return $this->redirect("/lerestaurant/" . $id_restaurant);
    }

    /**
     * @Route("member/panier/remove/{id}", name="panier_remove")
     * @param $id
     * @param SessionInterface $session
     * @return RedirectResponse
     */
    public function remove($id, SessionInterface $session)
    {
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute("panier");
    }

    /**
     * @Route("member/panier/commande/{id}", name="commande")
     */
    public function commande($id, SessionInterface $session)
    {
        return $this->redirectToRoute("resumecommande");
    }

    /**
     * @Route("member/resumecommande/", name="resumecommande")
     */
    public function resumecommande($id, SessionInterface $session)
    {
        
    }

}
