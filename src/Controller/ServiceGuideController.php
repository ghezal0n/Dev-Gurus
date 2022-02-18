<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceGuideController extends AbstractController
{
    /**
     * @Route("/service/guide", name="service_guide")
     */
    public function index(): Response
    {
        return $this->render('service_guide/index.html.twig', [
            'controller_name' => 'ServiceGuideController',
        ]);
    }
}
