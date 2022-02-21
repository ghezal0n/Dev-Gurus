<?php

namespace App\Controller;
use App\Entity\ServiceGuide;
use App\Form\ServiceGuideType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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

      /**
     * @Route("/AjouterSGAdmin", name="AjouterSGAdmin")
     */
    public function ajouter(Request $request): Response
    {
        $ServiceGuide = new ServiceGuide();
        $formServiceGuide = $this->createForm(ServiceGuideType::class, $ServiceGuide);
        $formServiceGuide->handleRequest($request);

        if ($formServiceGuide->isSubmitted() && $formServiceGuide->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ServiceGuide);
            $entityManager->flush();
            return $this->redirectToRoute('listService');
        }
            return $this->render('service_guide/ServiceForm.html.twig', [
                'formService' => $formServiceGuide->createView(),
            ]);

    }

  

    /** 
    * @Route("SupprimerServiceAdmin/{id}", name="SupprimerServiceAdmin")
    */
   public function SupprimerService($id):Response 
   {

     $ServiceGuide = $this->getDoctrine()->getRepository(ServiceGuide::Class)->find($id);
     $em =$this->getDoctrine()->getManager();
     $em->remove($ServiceGuide);
     $em->flush();
     return $this->redirectToRoute('listService');
   }

   /**
     * @Route("ModifierServiceAdmin/{id}", name="ModifierServiceAdmin")
     */
    public function ModifierService(Request $request,$id)
    {
        $ServiceGuide = $this->getDoctrine()->getRepository(ServiceGuide::class)->find($id);
        $form = $this->createForm(ServiceGuideType::class, $ServiceGuide);
        $form->add('modifier',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listService');
        }
        return $this->render('Dashboard/ModifSG.html.twig',array('form'=>$form->createView()));
    }
}
