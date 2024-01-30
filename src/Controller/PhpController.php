<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PhpController extends AbstractController
{
    #[Route('/php', name: 'app_php')]
    public function index(): Response
    {
        return $this->render('php/index.html.twig', [
            'controller_name' => 'PhpController',
        ]);
    }
}
