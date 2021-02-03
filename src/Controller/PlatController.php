<?php

namespace App\Controller;

use App\Entity\Plat;
use App\Form\PlatType;
use App\Repository\PlatRepository;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Gedmo\Sluggable\Util\Urlizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/restau/{resto}/plat")
 */
class PlatController extends AbstractController
{
    /**
     * @Route("/", name="plat_index", methods={"GET","POST"})
     * @param PlatRepository $platRepository
     * @param $resto
     * @return Response
     */
    public function index(PlatRepository $platRepository, $resto): Response
    {
        $plats = $platRepository->findByRestaurant($resto, '');
        return $this->render('plat/index.html.twig', [
            'plats' => $plats,
            'resto' => $resto
        ]);
    }

    /**
     * @Route("/new/", name="plat_new", methods={"GET","POST"})
     * @param Request $request
     * @param $resto
     * @param RestaurantRepository $restaurantRepository
     * @return Response
     */
    public function new(Request $request, $resto, RestaurantRepository $restaurantRepository): Response
    {
        $plat = new Plat();
        $restaurant = $restaurantRepository->findById($resto);
        $plat->setRestaurant($restaurant[0]);
        $form = $this->createForm(PlatType::class, $plat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            $destination = $this->getParameter('kernel.project_dir').'/public/uploads/plats_logo';
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
            $uploadedFile->move(
                $destination,
                $newFilename
            );
            $plat->setImageFilename($newFilename);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($plat);
            $entityManager->flush();

            return $this->redirectToRoute('plat_index', [
                'resto' => $resto
            ]);
        }

        return $this->render('plat/new.html.twig', [
            'plat' => $plat,
            'form' => $form->createView(),
            'resto' => $resto
        ]);
    }

    /**
     * @Route("/show/{id}", name="plat_show", methods={"GET"})
     * @param Plat $plat
     * @param $resto
     * @return Response
     */
    public function show(Plat $plat, $resto): Response
    {
        return $this->render('plat/show.html.twig', [
            'plat' => $plat,
            'resto' => $resto
        ]);
    }

    /**
     * @Route("/{id}/edit", name="plat_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Plat $plat
     * @param $resto
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function edit(Request $request, Plat $plat, $resto, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(PlatType::class, $plat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            $destination = $this->getParameter('kernel.project_dir').'/public/uploads/plats_logo';
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
            $uploadedFile->move(
                $destination,
                $newFilename
            );
            $plat->setImageFilename($newFilename);

            $em->persist($plat);
            $em->flush();
            $this->getDoctrine()->getManager()->flush();


            return $this->redirectToRoute('plat_index', [
                'resto' => $resto
            ]);
        }

        return $this->render('plat/edit.html.twig', [
            'plat' => $plat,
            'form' => $form->createView(),
            'resto' => $resto
        ]);
    }

    /**
     * @Route("/{id}", name="plat_delete", methods={"DELETE"})
     * @param Request $request
     * @param Plat $plat
     * @param $resto
     * @return Response
     */
    public function delete(Request $request, Plat $plat, $resto): Response
    {
        if ($this->isCsrfTokenValid('delete'.$plat->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($plat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('plat_index', [
            'resto' => $resto
        ]);
    }
}
