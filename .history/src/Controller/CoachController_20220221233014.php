<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoachController extends AbstractController
{
    /**
     * @Route("/coachingReq", name="coach")
     */
    public function ajouterCoach(Request $request): Response
    {
        $coach = $this->getDoctrine()->getRepository(User::class)->find($id);
        $formcoach = $this->createForm(CoachType::class, $coach);
        $formcoach->handleRequest($request);

        if ($formcoach->isSubmitted() && $formcoach->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formcoach);
            $entityManager->flush();
            return $this->redirectToRoute('listcoach');
        }
            return $this->render('coach/CoachForm.html.twig', [
                'formCoach' => $formcoach->createView(),
            ]);

    }

     /**
     * @Route("ModifierCoach/{id}", name="ModifierCoach")
     */
    public function ModifierCoach(Request $request,$id)
    {
        $coach = $this->getDoctrine()->getRepository(Coach::class)->findCoach();
        $form = $this->createForm(CoachType::class, $coach);
        $form->add('modifier',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listcoach');
        }
        return $this->render('user/.html.twig',array('s'=>$form->createView()));
    }

}
