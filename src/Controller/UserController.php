<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\LogUserRepository;
use App\Security\EmailVerifier;
use App\Repository\ScoreRepository;
use Symfony\Component\Mime\Address;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;

#[Route('/user')]
class UserController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/send/email', name: 'send_email')]
    public function send_email(): Response
    {
        $user = $this->getUser();

        if (!$user->isVerified() && $this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {

            $this->emailVerifier->sendEmailConfirmation(
                'app_verify_email',
                $user,
                (new TemplatedEmail())
                    ->from(new Address('mailer@quiz.com', 'Quiz authentification mail bot'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('emails/confirmation_email.html.twig')
            );

            return $this->render('pages/user/show.html.twig', [
                'user' => $user,
                'error' => ""
            ]);
        } else {
            return $this->redirectToRoute('app_index');
        }
    }

    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager
            ->getRepository(User::class)
            ->findAll();

        return $this->render('pages/user/show.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            return $this->render('pages/user/show.html.twig', [
                'user' => $user,
                'error' => ""
            ]);
        } else {
            return $this->redirectToRoute('app_index');
        }
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if (!$this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('app_index');
        } elseif ($user->isVerified()) {
            $form = $this->createForm(UserType::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->flush();

                return $this->render('pages/user/show.html.twig', [
                    'user' => $user,
                    'error' => ""
                ]);
            }

            return $this->render('pages/user/edit.html.twig', [
                'user' => $user,
                'form' => $form->createView(),
            ]);
        } else {
            $error = "You need to confirm your email first. you didn't received it ?";
            return $this->render('pages/user/show.html.twig', [
                'user' => $user,
                'error' => $error,
                'link' => "/user/send/email"
            ]);
        }
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($user->isVerified()) {

            if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {

                $qb = $entityManager->createQueryBuilder();
                $query = $qb->delete('App\Entity\LogUser', 'u')
                    ->where('u.log_user = :id')
                    ->setParameter('id', $user->getId())
                    ->getQuery();
                $query->execute();
                $entityManager->remove($user);
                $entityManager->flush();
                $session = new Session();
                $session->invalidate();
            }

            return $this->redirectToRoute('app_index');
        } else {
            $error = "You need to confirm your email first. you dind't recieved it ?";
            return $this->render('pages/user/show.html.twig', [
                'user' => $user,
                'error' => $error,
            ]);
        }
    }

    #[Route('/{id}/historical', name: 'app_user_historical', methods: ['GET'])]
    public function historical(int $id, ManagerRegistry $manager, PaginatorInterface $paginator, Request $request): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            $scored = new ScoreRepository($manager);
            $result = $scored->historical($id);

            $result = $paginator->paginate(
                $result = $scored->historical($id),
                $request->query->getInt('page', 1), /*page number*/
                9 /*limit per page*/
            );

            return $this->render('pages/user/historical.html.twig', [
                'results' => $result,
            ]);
        } else {
            return $this->redirectToRoute('app_index');
        }
    }
}
