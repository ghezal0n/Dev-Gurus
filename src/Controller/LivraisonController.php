<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Livraison;
use App\Form\LivraisonType;

class LivraisonController extends AbstractController
{
    /**
     * @Route("/livraison", name="livraison")
     */
    public function index(): Response
    {
        return $this->render('livraison/index.html.twig', [
            'controller_name' => 'LivraisonController',
        ]);
    }
     /**
     
     * @Route("/AfficheL", name="AfficheL")
     */
    public function AfficheL() {
        $repo=$this->getDoctrine()->getRepository(Livraison::class);
        $livraison=$repo->findAll();
        return $this->render('livraison/AfficheL.html.twig',
        ['livraison'=>$livraison]);
    }

 /**
  *  
  * @Route("/AjoutL", name="AjoutL")
  * Method({"GET", "POST"})
  */ 
  public function AjoutL(Request $request) {
       $livraison = new livraison();
       $form = $this->createForm(LivraisonType::class,$livraison);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()) 
       {
            $livraison = $form->getData();
            $entityManager = $this->getDoctrine()->getManager(); 
            $entityManager->persist($livraison); 
            $entityManager->flush(); 
        } 
        return $this->render('livraison/AjoutL.html.twig',['form'=> $form->createView()]);
     }   

  /**
  *  
  * @Route("/ModifL/{id}", name="ModifL")
  * Method({"GET", "POST"})
  */ 
  public function ModifL(Request $request , $id) {
    $livraison = new Livraison();
    $livraison= $this->getDoctrine()->getRepository(Liraison::class)->find($id);
    $form = $this->createForm(LivraisonType::class,$livraison);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()) 
    {
         $livraison = $form->getData();
         $entityManager = $this->getDoctrine()->getManager(); 
         $entityManager->flush(); 
     } 
     return $this->render('livraison/ModifL.html.twig',['form'=> $form->createView()]);
  } 


  /**
 * @Route("/SuppL/{id}",name="SuppL")
 * Method({"DELETE"})
 */

  public function SuppL(Request $request, $id){
     $livraison = $this->getDoctrine()->getRepository(livraison::class)->find($id);
     $entityManager=$this->getDoctrine()->getManager();
    $entityManager->remove($livraison);
    $entityManager->flush();
    $response=new Response();
    $response->send();
    return$this->redirectToRoute('AfficheL');
}


}
