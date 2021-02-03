<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Entity\User;
use App\Form\NewRestaurateurType;
use App\Form\UploadFileType;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Gedmo\Sluggable\Util\Urlizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("restau/restaurateur")
 */
class RestaurateurController extends AbstractController
{
    /**
     * @Route("/", name="restaurateur", methods={"GET","POST"})
     * @param RestaurantRepository $restaurantRepository
     * @return Response
     */
    public function index(RestaurantRepository $restaurantRepository)
    {
        $user=$this->getUser();
        $Repository = $this->getDoctrine()->getRepository(User::class);
        $dataUser = $Repository->findOneBy(['id' => $user]);
        $restaurants = $restaurantRepository->findByRestaurateur($dataUser);
        return $this->render('restaurateur/index.html.twig', [
            'restaurants' => $restaurants
        ]);
    }
    
    /**
     * @Route("/new", name="new", methods={"GET","POST"})
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $restaurant = new Restaurant();
        $restaurant->setUser($this->getUser());
        $form = $this->createForm(NewRestaurateurType::class, $restaurant);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($restaurant);
            $em->flush();
            return $this->redirect("/restau/restaurateur/");
        }

        return $this->render('restaurateur/new.html.twig', [
            'new_restaurateur' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit_logo", name="edit_logo", methods={"GET","POST"})
     * @param Request $request
     * @param Restaurant $user
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function edit_logo(Request $request, Restaurant $user, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(UploadFileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            $destination = $this->getParameter('kernel.project_dir').'/public/uploads/resto_logo';
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
            $uploadedFile->move(
                $destination,
                $newFilename
            );
            $user->setImageFilename($newFilename);

            $em->persist($user);
            $em->flush();


            return $this->redirectToRoute('index');
        }

        return $this->render('restaurateur/setting_logo.html.twig', [
            'user' => $user,
            'formlogo' => $form->createView(),
        ]);
    }


}
