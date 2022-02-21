<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Produit;
use App\Form\ProduitType;



class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
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


    /**
     
     * @Route("/afficher_prod2", name="affichep2")
     */
    public function affichep2() {
        $repo=$this->getDoctrine()->getRepository(Produit::class);
        $produit=$repo->findAll();
        return $this->render('produit/afficher_prod2.html.twig',
        ['produit'=>$produit]);
    }
   

 /**
  *  
  * @Route("/ajouter_prod", name="ajouterp")
  * Method({"GET", "POST"})
  */ 
  public function ajouterp(Request $request) {
       $produit = new Produit();
       $form = $this->createForm(ProduitType::class,$produit);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()) 
       {
            $produit = $form->getData();
            $entityManager = $this->getDoctrine()->getManager(); 
            $entityManager->persist($produit); 
            $entityManager->flush(); 
        } 
        return $this->render('produit/ajouter_prod.html.twig',['form'=> $form->createView()]);
     }   

  /**
  *  
  * @Route("/modifierp/{idProd}", name="modifierp")
  * Method({"GET", "POST"})
  */ 
  public function modifierp(Request $request , $idProd) {
    $produit = new Produit();
    $produit= $this->getDoctrine()->getRepository(Produit::class)->find($idProd);
    $form = $this->createForm(ProduitType::class,$produit);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()) 
    {
         $produit = $form->getData();
         $entityManager = $this->getDoctrine()->getManager(); 
         $entityManager->flush(); 
         return $this->redirectToRoute('affichep');
     } 
     return $this->render('produit/modifier_prod.html.twig',['form'=> $form->createView()]);
  } 


  /**
 * @Route("/produit/supprimerp/{idProd}",name="supprimerp")
 * Method({"DELETE"})
 */

  public function supprimerp(Request $request, $idProd){
     $produit = $this->getDoctrine()->getRepository(Produit::class)->find($idProd);
     $entityManager=$this->getDoctrine()->getManager();
    $entityManager->remove($produit);
    $entityManager->flush();
    $response=new Response();
    $response->send();
    return $this->redirectToRoute('affichep');
}

}
