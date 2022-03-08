<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ProduitController extends AbstractController
{
    /**
     * @Route("/prod", name="produit")
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
     * @Route("/details/{id}", name="affichep3")
     */
    public function affichep3(ProduitRepository $repo, $id) {
        $produit=$repo->find($id);
        return $this->render('produit/details.html.twig',
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
        $file =$produit->getImg();
        $uploads_directory = $this->getParameter('upload_directory');
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $file->move(
            $uploads_directory,
            $fileName
            );
        $produit->setImg(($fileName));
        
            
            $entityManager = $this->getDoctrine()->getManager(); 
            $entityManager->persist($produit); 
            $entityManager->flush(); 
            return $this->redirectToRoute('affichep');
            
        } 
        return $this->render('produit/ajouter_prod.html.twig',['form'=> $form->createView()]);
     }   

  /**
  *  
  * @Route("/modifier_prod/{id}", name="modifierp")
  * Method({"GET", "POST"})
  */ 
  public function modifierp(Request $request , $id) {
    $produit = new Produit();
    $produit= $this->getDoctrine()->getRepository(Produit::class)->find($id);
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
 * @Route("/produit/supprimerp/{id}",name="supprimerp")
 * Method({"DELETE"})
 */

  public function supprimerp(Request $request, $id){
     $produit = $this->getDoctrine()->getRepository(Produit::class)->find($id);
     $entityManager=$this->getDoctrine()->getManager();
    $entityManager->remove($produit);
    $entityManager->flush();
    $response=new Response();
    $response->send();
    return $this->redirectToRoute('affichep');
}

    /**
     * @route("/produit/SearchNSC", name="SearchNSC")
     */
    function Search(ProduitRepository $repo, Request $request){
        $nom=$request->get('Search');
        $produit=$repo->SearchNSC($nom);
        return $this->render('produit/afficher_prod.html.twig',
        ['produit'=>$produit]);
    }

}
