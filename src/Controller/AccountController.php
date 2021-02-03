<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterFormType;
use App\Form\SettingAccountType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Gedmo\Sluggable\Util\Urlizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    /**
     * @Route("member/account", name="account")
     * @param UserRepository $userRepository
     * @return Response
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('account/account.html.twig', [
            'user' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("member/{id}/edit_account", name="account_edit", methods={"GET","POST"})
     * @param Request $request
     * @param User $register
     * @return Response
     */
    public function edit(Request $request, User $register, $id): Response
    {
        $form = $this->createForm(SettingAccountType::class, $register);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('account');
        }

        return $this->render('account/settings_account.html.twig', [
            'user' => $register,
            'formaccount' => $form->createView(),
        ]);
    }

}
