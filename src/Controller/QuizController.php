<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\QuestionRepository;
use App\Repository\ReponseRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class QuizController extends AbstractController
{

    #[Route('/quiz/{id_quiz}', name: 'app_quiz_show')]
    public function show(int $id_quiz, CategorieRepository $categorie, QuestionRepository $question, ReponseRepository $reponse): Response
    {
        $reponses = $reponse->findBy(['question' => $question->findBy(['categorie' => $id_quiz])]);
        shuffle($reponses);

        return $this->render('pages/quiz/show.html.twig', [
            'categories' => $categorie->find($id_quiz),
            'questions' => $question->findBy(['categorie' => $id_quiz]),
            'reponses' => $reponses,
        ]);
    }
}
