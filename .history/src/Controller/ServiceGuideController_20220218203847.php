<?php

namespace App\Controller;

use App\Entity\ServiceGuide;
use App\Form\ServiceGuideType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ServiceGuideController extends AbstractController
{
    
    /**
     * @Route("/", name="service_guide")
     */
    public function index(): Response
    {
        return $this->render('service_guide/index.html.twig', [
            'controller_name' => 'ServiceGuideController',
        ]);
    }

     /**
     * @Route("/serviceguide/ajouter", name="service_guideAjouter")
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
            return $this->render('service_guide/Service.html.twig', [
                'formService' => $formServiceGuide->createView(),
            ]);

    }

     /**
     * @Route("serviceguide/listService", name="listService")
     */
    public function list(): Response
    {
        $ServiceGuide =$this->getDoctrine()->getRepository(ServiceGuide::class)->findAll();
        return $this->render('service_guide/listService.html.twig', [
            'listService' => $ServiceGuide,
        ]);
    }

    /** 
    * @Route("SupprimerService/{id}", name="SupprimerService")
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
     * @Route("ModifierService/{id}", name="ModifierService")
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
        return $this->render('service_guide/update.html.twig',array('form'=>$form->createView()));
    }


}
