<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Fournisseur;
use App\Form\FournisseurType;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\FournisseurRepository;




class FournisseurController extends AbstractController
{
    /**
     * @Route("/fournisseur", name="fournisseur")
     */
    public function index(): Response
    {
        return $this->render('fournisseur/index.html.twig', [
            'controller_name' => 'FournisseurController',
        ]);
    }
    /**
     
     * @Route("/afficher_fourni", name="affichef")
     */
    public function affiche() {
        $repo=$this->getDoctrine()->getRepository(Fournisseur::class);
        $fournisseur=$repo->findAll();
        return $this->render('fournisseur/afficher_fourni.html.twig',
        ['fournisseur'=>$fournisseur]);
    }

 /**
  *  
  * @Route("/ajouter_fourni", name="ajouterf")
  * Method({"GET", "POST"})
  */ 
  public function ajouterf(Request $request) {
       $fournisseur = new Fournisseur();
       $form = $this->createForm(FournisseurType::class,$fournisseur);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()) 
       {
            $fournisseur = $form->getData();
            $entityManager = $this->getDoctrine()->getManager(); 
            $entityManager->persist($fournisseur); 
            $entityManager->flush(); 
            return $this->redirectToRoute('affichef');
        } 
        return $this->render('fournisseur/ajouter_fourni.html.twig',['form'=> $form->createView()]);
     }   

  /**
  *  
  * @Route("/modifierf/{id}", name="modiferf")
  * Method({"GET", "POST"})
  */ 
  public function modifierf(Request $request , $id) {
    $fournisseur = new Fournisseur();
    $fournisseur= $this->getDoctrine()->getRepository(Fournisseur::class)->find($id);
    $form = $this->createForm(FournisseurType::class,$fournisseur);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()) 
    {
         $fournisseur = $form->getData();
         $entityManager = $this->getDoctrine()->getManager(); 
         $entityManager->flush();
         return $this->redirectToRoute('affichef'); 
     } 
     return $this->render('fournisseur/modifier_fourni.html.twig',['form'=> $form->createView()]);
  } 


  /**
 * @Route("/fournisseur/supprimerf/{id}",name="supprimerf")
 * Method({"DELETE"})
 */

  public function supprimerf(Request $request, $id){
     $fournisseur = $this->getDoctrine()->getRepository(Fournisseur::class)->find($id);
     $entityManager=$this->getDoctrine()->getManager();
    $entityManager->remove($fournisseur);
    $entityManager->flush();
    $response=new Response();
    $response->send();
    return$this->redirectToRoute('affichef');
}

/**
     * @Route("/JSON", name="JSON_index", methods={"GET"})
     */
    public function JSONindex(FournisseurRepository $FournisseurRepository,SerializerInterface $serializer): Response
    {
        $result = $FournisseurRepository->findAll();
        /* $n = $normalizer->normalize($result, null, ['groups' => 'livreur:read']);
        $json = json_encode($n); */
        $json = $serializer->serialize($result, 'json', ['groups' => 'fournisseur:read']);
        return new JsonResponse($json, 200, [], true);
    }

}
