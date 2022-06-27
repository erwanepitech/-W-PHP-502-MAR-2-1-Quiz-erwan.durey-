<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\LogUser;
use App\Entity\Reponse;
use Doctrine\DBAL\Schema\View;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('email'),
            TextField::new('password')->onlyOnForms(),
            ChoiceField::new('roles')
                ->allowMultipleChoices()
                ->autocomplete()
                ->setChoices(
                    [
                        'User' => 'ROLE_USER',
                        'Admin' => 'ROLE_ADMIN'
                    ]
                ),
            BooleanField::new('is_verified'),
            AssociationField::new('logUsers')->renderAsNativeWidget()->onlyOnDetail()
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        $send_remember_email = Action::new('send remember email')
            ->linkToCrudAction('send_remember_email');

        $send_quiz_result_email = Action::new('send quiz result email')
            ->linkToCrudAction('send_quiz_result_email');

        $send_quiz_discover_email = Action::new('send discover quiz email')
            ->linkToCrudAction('send_quiz_discover_email');

        return $actions
            ->add(Crud::PAGE_INDEX, $send_remember_email)
            ->add(Crud::PAGE_INDEX, $send_quiz_result_email)
            ->add(Crud::PAGE_INDEX, $send_quiz_discover_email)
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

    public function get_log(AdminContext $Context, ManagerRegistry $doctrine, EntityManagerInterface $em)
    {
        $user = $Context->getEntity()->getInstance();
        $qb = $em->createQueryBuilder();
        dd(
            $user->getLogUsers($user)
        );
        $log = new LogUser();
        $user->getLogUsers($user);

        return;
    }

    public function send_remember_email(AdminContext $Context, MailerInterface $mailer)
    {
        $user = $Context->getEntity()->getInstance();
        $email = (new TemplatedEmail())
            ->from('mailer@quiz.com')
            ->to($user->getEmail())
            ->subject('Come back to quiz !')
            ->text('You havent be on quiz since few time come back for see all our new quiz !')
            ->htmlTemplate('emails/remember_email.html.twig');

        $mailer->send($email);
        return $this->redirectToRoute('admin');
    }

    public function send_quiz_result_email(AdminContext $Context, MailerInterface $mailer)
    {
        $user = $Context->getEntity()->getInstance();
        $email = (new TemplatedEmail())
            ->from('mailer@quiz.com')
            ->to($user->getEmail())
            ->subject('Come back to quiz !')
            ->text('You havent be on quiz since few time come back for see all our new quiz !')
            ->htmlTemplate('emails/remember_email.html.twig');

        $mailer->send($email);
        return $this->redirectToRoute('admin');
    }

    public function send_quiz_discover_email(AdminContext $Context, MailerInterface $mailer)
    {
        $user = $Context->getEntity()->getInstance();
        $email = (new TemplatedEmail())
            ->from('mailer@quiz.com')
            ->to($user->getEmail())
            ->subject('Come back to quiz !')
            ->text('Discover our new quiz !')
            ->htmlTemplate('emails/discover.html.twig');

        $mailer->send($email);
        return $this->redirectToRoute('admin');
    }
}
