<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER') == false) {
            // get the login error if there is one
            $error = $authenticationUtils->getLastAuthenticationError();

            $lastUsername = $authenticationUtils->getLastUsername();
            return $this->render('pages/login/login.html.twig', [
                'last_username' => $lastUsername,
                'error'         => $error,
            ]);
            
        } else {
            return $this->redirectToRoute('app_index');
        }
    }
}
