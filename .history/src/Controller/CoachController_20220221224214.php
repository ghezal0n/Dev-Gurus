<?php

namespace App\Controller;

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
        $coach = $this->get_current_user();
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
}
