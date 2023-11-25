<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoxController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('box/index.html.twig', [
            'controller_name' => 'BoxController',
        ]);
    }
}
