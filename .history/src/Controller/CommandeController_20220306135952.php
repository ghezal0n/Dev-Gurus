<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Commande;
use App\Form\CommandeType;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\CommandeRepository;


class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index(): Response
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }
    /**
     * @Route("/JSON", name="JSON_index", methods={"GET"})
     */
    public function JSONindex(CommandeRepository $CommandeRepository,SerializerInterface $serializer): Response
    {
        $result = $CommandeRepository->findAll();
        /* $n = $normalizer->normalize($result, null, ['groups' => 'commande:read']);
        $json = json_encode($n); */
        $json = $serializer->serialize($result, 'json', ['groups' => 'commande:read']);
        return new JsonResponse($json, 200, [], true);
    }
     /**
     
     * @Route("dashboard/AfficheC", name="AfficheC")
     */
    public function AfficheC() {
        $repo=$this->getDoctrine()->getRepository(Commande::class);
        $commande=$repo->findAll();
        return $this->render('commande/indexe.html.twig',
        ['commande'=>$commande]);
    }
/**
     
     * @Route("dashboard/AfficheCAdmin", name="AfficheCAdmin")
     */
    public function AfficheCAdmin() {
        $repo=$this->getDoctrine()->getRepository(Commande::class);
        $commande=$repo->findAll();
        return $this->render('commande/AfficheC.html.twig',
        ['commande'=>$commande]);
    }
/**
     
     * @Route("/AfficheCF", name="AfficheCF")
     */
    public function AfficheCF() {
    
        $repo=$this->getDoctrine()->getRepository(Commande::class);
        $commande=$repo->findAll();
        return $this->render('commande/commandeF/AfficheCF.html.twig',
        ['commande'=>$commande]);
    }

 /**
  *  
  * @Route("/AjoutC", name="AjoutC")
  * Method({"GET", "POST"})
  */ 
  public function AjoutC(Request $request) {
       $commande = new Commande();
       $form = $this->createForm(CommandeType::class,$commande);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()) 
       {

        $file =$commande->getImage();
        $uploads_directory = $this->getParameter('upload_directory');
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $file->move(
            $uploads_directory,
            $fileName
            );
        $commande->setImage(($fileName));

            $commande = $form->getData();
            $entityManager = $this->getDoctrine()->getManager(); 
            $entityManager->persist($commande); 
            $entityManager->flush(); 
        } 
        return $this->render('commande/AjoutC.html.twig',['form'=> $form->createView()]);
     }   

  /**
  *  
  * @Route("/ModifC/{id}", name="ModifC")
  * Method({"GET", "POST"})
  */ 
  public function ModifC(Request $request , $id) {
    $commande = new Commande();
    $commande= $this->getDoctrine()->getRepository(Commande::class)->find($id);
    $form = $this->createForm(CommandeType::class,$commande);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()) 
    {
         $commande = $form->getData();
         $entityManager = $this->getDoctrine()->getManager(); 
         $entityManager->flush(); 
     } 
     return $this->render('commande/ModifC.html.twig',['form'=> $form->createView()]);
  } 


  /**
 * @Route("/SuppC/{id}",name="SuppC")
 * Method({"DELETE"})
 */

  public function SuppC(Request $request, $id){
     $commande = $this->getDoctrine()->getRepository(Commande::class)->find($id);
     $entityManager=$this->getDoctrine()->getManager();
    $entityManager->remove($commande);
    $entityManager->flush();
    $response=new Response();
    $response->send();
    return$this->redirectToRoute('AfficheC');
}


}
