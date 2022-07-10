<?php

namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Category;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $categories = $entityManager
            ->getRepository(Category::class)
            ->findAll();
        $user = $this->getUser();


        return $this->render('main/index.html.twig', [
            'categories' => $categories,
            'user' => $user
        ]);
    }
}