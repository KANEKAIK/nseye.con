<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controlbuy2Controller extends AbstractController
{
    #[Route('/controlbuy2', name: 'app_controlbuy2')]
    public function index(): Response
    {
        return $this->render('controlbuy2/index.html.twig', [
            'controller_name' => 'Controlbuy2Controller',
        ]);
    }
}
