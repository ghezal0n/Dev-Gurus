<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Panier;
use App\Form\PanierType;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(): Response
    {
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }
     /**
     
     * @Route("/AfficheP", name="AfficheP")
     */
    public function AfficheP() {
        $repo=$this->getDoctrine()->getRepository(Panier::class);
        $panier=$repo->findAll();
        return $this->render('panier/AfficheP.html.twig',
        ['panier'=>$panier]);
    }

 /**
  *  
  * @Route("/AjoutP", name="AjoutP")
  * Method({"GET", "POST"})
  */ 
  public function AjoutP(Request $request) {
       $panier = new panier();
       $form = $this->createForm(PanierType::class,$panier);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()) 
       {
            $panier = $form->getData();
            $entityManager = $this->getDoctrine()->getManager(); 
            $entityManager->persist($panier); 
            $entityManager->flush(); 
        } 
        return $this->render('panier/AjoutP.html.twig',['form'=> $form->createView()]);
     }   

  /**
  *  
  * @Route("/ModifP/{id}", name="ModifP")
  * Method({"GET", "POST"})
  */ 
  public function ModifP(Request $request , $id) {
    $panier = new Panier();
    $panier= $this->getDoctrine()->getRepository(Panier::class)->find($id);
    $form = $this->createForm(PanierType::class,$panier);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()) 
    {
         $panier = $form->getData();
         $entityManager = $this->getDoctrine()->getManager(); 
         $entityManager->flush(); 
     } 
     return $this->render('panier/ModifP.html.twig',['form'=> $form->createView()]);
  } 


  /**
 * @Route("/SuppP/{id}",name="SuppP")
 * Method({"DELETE"})
 */

  public function SuppP(Request $request, $id){
     $panier = $this->getDoctrine()->getRepository(panier::class)->find($id);
     $entityManager=$this->getDoctrine()->getManager();
    $entityManager->remove($panier);
    $entityManager->flush();
    $response=new Response();
    $response->send();
    return$this->redirectToRoute('AfficheP');
}

}
