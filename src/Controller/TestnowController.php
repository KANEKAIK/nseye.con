<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestnowController extends AbstractController
{
    #[Route('/testnow', name: 'app_testnow')]
    public function index(): Response
    {
        return $this->render('testnow/index.html.twig', [
            'controller_name' => 'TestnowController',
        ]);
    }
}
