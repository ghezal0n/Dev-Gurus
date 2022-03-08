<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProdController extends AbstractController
{
    /**
     * @Route("/prod", name="app_prod")
     */
    public function index(): Response
    {
        return $this->render('prod/index.html.twig', [
            'controller_name' => 'ProdController',
        ]);
    }
}
