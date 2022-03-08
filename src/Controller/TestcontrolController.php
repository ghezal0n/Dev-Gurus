<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestcontrolController extends AbstractController
{
    /**
     * @Route("/", name="testcontrol")
     */
    public function index(): Response
    {
        return $this->render('frontend/testcontrol/index.html.twig', [
            'controller_name' => 'TestcontrolController',
        ]);
    }
}
