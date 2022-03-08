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
     /**
     
     * @Route("/afficher_prod", name="affichep")
     */
    public function affichep() {
        $repo=$this->getDoctrine()->getRepository(Produit::class);
        $produit=$repo->findAll();
        return $this->render('produit/afficher_prod.html.twig',
        ['produit'=>$produit]);
    }


}
