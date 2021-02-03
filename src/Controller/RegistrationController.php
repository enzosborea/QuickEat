<?php

namespace App\Controller;

use App\Entity\Localisation;
use App\Entity\User;
use App\Form\RegisterFormType;
use App\Repository\UserRepository;
use Monolog\Handler\SwiftMailerHandler;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\MonologBundle\SwiftMailer\MessageFactory;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param \Swift_Mailer $Mailer
     * @return Response
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $Mailer): Response
    {
        $User = new User();
        $form = $this->createForm(RegisterFormType::class, $User);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $User->setPassword(
                $passwordEncoder->encodePassword(
                    $User,
                    $form->get('password')->getData()
                )
            );

            //generate token
            $User->setActivationToken(md5(uniqid()));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($User);
            $entityManager->flush();

            $message = (new \Swift_Message('Activation de votre compte'))
                ->setFrom('admin@admin.com')
                ->setTo($User->getEmail())
                ->setBody(
                    $this->renderView(
                        'email/activation.html.twig', ['token' => $User->getActivationToken()]
                    ),
                    'text/html'
                )
            ;

            $Mailer->send($message);

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'register_form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/activation/{token}", name="activation")
     * @param $token
     * @param UserRepository $userRepository
     * @return RedirectResponse
     */
    public function activation($token, UserRepository $userRepository)
    {
        $user = $userRepository->findOneBy(['activation_token' => $token]);

        if (!$user){
            throw $this->createAccessDeniedException('Cet utilisateur n\'existe pas');
        }

        //Supprime token
        $user->setActivationToken(null);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('message', 'Le compte est activé !');

        return $this->redirectToRoute('app_login');


    }
}
