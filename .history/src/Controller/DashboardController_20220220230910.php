<?php

namespace App\Controller;
use App\Entity\ServiceGuide;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Annotation\Route;


class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(): Response
    {
        return $this->render('base2.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

     /**
     * @Route("/AfficheServiceAdmin", name="AfficheServiceAdmin")
     */
    public function AfficheServiceAdmin(): Response
    {
        $ServiceGuide =$this->getDoctrine()->getRepository(ServiceGuide::class)->findAll();
        return $this->render('Dashboard/ServiceGuide/index.html.twig', [
            'listService' => $ServiceGuide,
        ]);
    }
}
