<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controlbuy1Controller extends AbstractController
{
    #[Route('/controlbuy1', name: 'app_controlbuy1')]
    public function index(): Response
    {
        return $this->render('controlbuy1/index.html.twig', [
            'controller_name' => 'Controlbuy1Controller',
        ]);
    }
}
