<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\LogUser;
use App\Entity\Reponse;
use App\Entity\Question;
use App\Entity\Categorie;
use App\Repository\LogUserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private AdminUrlGenerator $adminUrlGenerator
    ) {
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN') == true) {
            $url = $this->adminUrlGenerator->setController(UserCrudController::class)
                ->generateUrl();
            return $this->redirect($url);
        } else {
            return $this->redirectToRoute('app_index');
        }
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Admin System');
    }

    public function configureMenuItems(): iterable
    {

        yield MenuItem::linkToUrl('Back to website', 'fa fa-undo', '/');
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::subMenu('Users', 'fa fa-bars')->setSubItems([
            MenuItem::linkToCrud('Show Users', 'fa fa-eye', User::class),
            MenuItem::linkToCrud('Add User', 'fa fa-plus', User::class)->setAction(Crud::PAGE_NEW),
        ]);

        yield MenuItem::subMenu('Quiz details', 'fa fa-bars')->setSubItems([
            MenuItem::linkToCrud('Show Catégorie', 'fa fa-eye', Categorie::class),
            MenuItem::linkToCrud('Show Question', 'fa fa-eye', Question::class),
            MenuItem::linkToCrud('Show reponse', 'fa fa-eye', Reponse::class),
        ]);

        yield MenuItem::subMenu('Quiz edit', 'fa fa-bars')->setSubItems([
            MenuItem::linkToCrud('Add Catégorie', 'fa fa-plus', Categorie::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Add Question', 'fa fa-plus', Question::class)->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('Add reponse', 'fa fa-plus', Reponse::class)->setAction(Crud::PAGE_NEW),
        ]);

        yield MenuItem::subMenu('Log', 'fa fa-bars')->setSubItems([
            MenuItem::linkToCrud('Log users', 'fa fa-eye', LogUser::class)->setAction(Crud::PAGE_INDEX),
        ]);

        yield MenuItem::linkToUrl('Stats', 'fa fa-bar-chart', '/stats');

        return [
            MenuItem::linkToLogout('Logout', 'fa fa-exit'),
        ];
    }


    #[Route('/stats', name: 'app_stats')]
    public function unique_visitor(ManagerRegistry $registry)
    {
        $log = new LogUserRepository($registry);
        $data = $log->get_unique_visitor();
        return $this->render('admin/user-stats.html.twig', [
            'data' => $data[0],
        ]);
    }
}
