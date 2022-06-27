<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class StatsController extends AbstractController
{
    // #[Route('/stats', name: 'app_stats')]
    public function get_stats(): Response
    {
        return $this->render('pages/admin/user-stats.html.twig', [
            'controller_name' => 'StatsController',
        ]);
    }
}
