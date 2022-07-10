<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VerifyController extends AbstractController
{
    #[Route('/verify', name: 'app_verify')]
    public function index(): Response
    {
        return $this->render('verify/index.html.twig', [
            'controller_name' => 'VerifyController',
        ]);
    }
}
