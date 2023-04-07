<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controlbuy3Controller extends AbstractController
{
    #[Route('/controlbuy3', name: 'app_controlbuy3')]
    public function index(): Response
    {
        return $this->render('controlbuy3/index.html.twig', [
            'controller_name' => 'Controlbuy3Controller',
        ]);
    }
}
