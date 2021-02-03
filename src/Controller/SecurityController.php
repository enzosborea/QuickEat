<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ResetPassType;
use App\Repository\UserRepository;
use Psr\Container\ContainerInterface;
use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last Username entered by the User
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_Username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * @Route("/oubli-pass", name="app_forgotten_password")
     * @param Request $request
     * @param UserRepository $userRepository
     * @param TokenGeneratorInterface $tokenGenerator
     * @param Swift_Mailer $mailer
     * @return Response
     */
    public function forgottenPass(Request $request, UserRepository $userRepository,
        TokenGeneratorInterface $tokenGenerator, \Swift_Mailer $mailer){

        $form = $this->createForm(ResetPassType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $donnees = $form->getData();

            $email = $donnees['email'];

            $user = $userRepository->findOneBy(['email'=> $email]);

            if (!$user) {
                $this->addFlash('danger', 'Cette adresse n\'existe pas');

                return $this->redirectToRoute('app_login');
            }

            $token = $tokenGenerator->generateToken();

            try {
                $user->setResetToken($token);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
            } catch (\Exception $e) {
                $this->addFlash('warning', 'Une erreur est survenue : ' . $e->getMessage());
                return $this->redirectToRoute('app_login');
            }

            $url = $this->generateUrl('app_reset_password', ['token' => $token]);

            $message = (new \Swift_Message('Rénitialisation du mot de passe'))
                ->setFrom('admin@admin.com')
                ->setTo($user->getEmail())
                ->setBody(
                    "Cliquer sur ce lien pour rénitialiser ou changer votre mot de passe $url"
                )
            ;

            $mailer->send($message);

            $this->addFlash('message', 'Un message a été envoyé');

            return $this->redirectToRoute('app_login');

        }

        return $this->render('security/forgotten_password.html.twig', ['emailForm' => $form->createView()]);
    }

    /**
     * @Route("/reset-pass/{token}", name="app_reset_password")
     * @param $token
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     */
    public function resetPassword($token, Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['reset_token' => $token]);

        if (!$user){
            $this->addFlash('danger', 'Token inconnu');
            return $this->redirectToRoute('app_login');
        }

        if ($request->isMethod('POST')){
            $user->setResetToken(null);

            $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('password')));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('message', 'Mot de passe modifié avec succès');

            return $this->redirectToRoute('app_login');
        }else{
            return $this->render('security/reset_password.html.twig', ['token' => $token]);
        }

    }
}
