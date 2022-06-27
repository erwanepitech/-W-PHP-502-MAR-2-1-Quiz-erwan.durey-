<?php

namespace App\Controller;

use App\Entity\Score;
use App\Repository\CategorieRepository;
use App\Repository\ReponseRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


// #[Route('/score')]
class ScoreController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        // Avoid calling getUser() in the constructor: auth may not
        // be complete yet. Instead, store the entire Security object.
        $this->security = $security;
    }

    #[Route('/quiz/{id}/score', name: 'app_quizz_score')]
    public function index(int $id, CategorieRepository $categorie, EntityManagerInterface $entityManager, ReponseRepository $reponse, UserRepository $user): Response
    {
        if (!empty($_POST)) {
            $result = $_POST;
            $score = 0;

            foreach ($reponse->findBy(['id' => $_POST]) as $v) {
                if ($v->getReponseExpected() == true) {
                    $score++;
                }
            }

            $finalScore = $score . "/" . count($result);

            if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {
                $user = $this->security->getUser();
                if ($user->isVerified()) {
                    $scoreH = new Score();
                    $userId = $user->getId();
                    $category = $categorie->find($id);
                    $categorieName = $category->getName();

                    $scoreH->setUserId($userId);
                    $scoreH->setCategorieName($categorieName);
                    $scoreH->setScore($finalScore);
                    $scoreH->setDate(new \DateTime);

                    $entityManager->persist($scoreH);
                    $entityManager->flush();
                }
            }
            // ELSE STORAGE SCORE INTO SESSION

            return $this->render('pages/quiz/score.html.twig', [
                'result' => $finalScore,
            ]);
        } else {
            return $this->redirectToRoute('app_index');
        }
    }
}
