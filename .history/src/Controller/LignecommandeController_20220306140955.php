<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Service\Mailer;
use App\Entity\Lignecommande;
use App\Form\LignecommandeType;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\LignecommandeRepository;

class LignecommandeController extends AbstractController
{
    /**
     * @Route("/lignecommande", name="lignecommande")
     */
    public function index(): Response
    {
        return $this->render('lignecommande/index.html.twig', [
            'controller_name' => 'LignecommandeController',
        ]);
    }
     /**
     
     * @Route("dashboard/AfficheLC", name="AfficheLC")
     */
    public function AfficheLC() {
        $repo=$this->getDoctrine()->getRepository(Lignecommande::class);
        $lignecommande=$repo->findAll();
        return $this->render('lignecommande/AfficheLC.html.twig',
        ['lignecommande'=>$lignecommande]);
    }

        /**
     
     * @Route("../AfficheLCF", name="AfficheLCF")
     */
    public function AfficheLCF() {
        $repo=$this->getDoctrine()->getRepository(Lignecommande::class);
        $lignecommande=$repo->findAll();
        return $this->render('lignecommande/AfficheLCF.html.twig',
        ['lignecommande'=>$lignecommande]);
    }

 /**
  *  
  * @Route("/AjoutLC", name="AjoutLC")
  * Method({"GET", "POST"})
  */ 
  public function AjoutLC(Request $request) {
       $lignecommande = new lignecommande();
       $form = $this->createForm(LignecommandeType::class,$lignecommande);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()) 
       {
            $lignecommande = $form->getData();
            $entityManager = $this->getDoctrine()->getManager(); 
            $entityManager->persist($lignecommande); 
            $entityManager->flush(); 
            return $this->redirectToRoute('mailing');
        } 
        return $this->render('lignecommande/AjoutLC.html.twig',['form'=> $form->createView()]);
     }   

  /**
  *  
  * @Route("/ModifLC/{id}", name="ModifLC")
  * Method({"GET", "POST"})
  */ 
  public function ModifLC(Request $request , $id) {
    $lignecommande = new Lignecommande();
    $lignecommande= $this->getDoctrine()->getRepository(Lignecommande::class)->find($id);
    $form = $this->createForm(LignecommandeType::class,$lignecommande);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()) 
    {
         $lignecommande = $form->getData();
         $entityManager = $this->getDoctrine()->getManager(); 
         $entityManager->flush(); 
     } 
     return $this->render('lignecommande/ModifLC.html.twig',['form'=> $form->createView()]);
  } 


  /**
 * @Route("/SuppLC/{id}",name="SuppLC")
 * Method({"DELETE"})
 */

  public function SuppLC(Request $request, $id){
     $lignecommande = $this->getDoctrine()->getRepository(lignecommande::class)->find($id);
     $entityManager=$this->getDoctrine()->getManager();
    $entityManager->remove($lignecommande);
    $entityManager->flush();
    $response=new Response();
    $response->send();
    return$this->redirectToRoute('AfficheLC');
}
 /**
     * @route("/mailing", name="mailing")
     */
    function mailing(Mailer $mailer){

        $mailer->mailing('benmbarek.khouloud@esprit.tn');
        $this->addFlash("success", "Réservation effectuée avec succès! Merci de consulter votre mail");
        return  $this->redirectToRoute('AfficheLCF');
    }
    /**
     * @Route("/ImprimerRF/{id}", name="ImprimerLC")
     */
     
    public function ImprimerLC(LignecommandeRepository $repo,$id) {
        $lignecommande=$repo->find($id);
        return $this->render('lignecommande/facture.html.twig',
        ['lignecommande'=>$lignecommande]);
    }
}
