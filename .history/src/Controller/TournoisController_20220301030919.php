<?php

namespace App\Controller;
use App\Entity\Matchs;
use App\Entity\Tournois;
use App\Form\TournoisType;
use App\Repository\MatchsRepository;

use App\Repository\TournoisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tournois")
 */
class TournoisController extends AbstractController
{
    /**
     * @Route("/", name="tournois_index", methods={"GET"})
     */
    public function index(TournoisRepository $tournoisRepository,MatchsRepository $matchsRepository): Response
    {
        return $this->render('tournois/back/index.html.twig', [
            'tournois' => $tournoisRepository->findAll(),
           
            
        ]);
    }
    /**
     * @Route("/tfront", name="front_index",methods={"GET"})
     */
    public function FrontIndex(TournoisRepository $tournoisRepository,MatchsRepository $matchsRepository): Response
    {





        return $this->render('tournois/front/index.html.twig', [
            'tournois' => $tournoisRepository->findAll(),
            'MatchL' => $matchsRepository->getLatestMatchs(),
            'MatchsCom' => $matchsRepository->getUpcomingMatchs()
        ]);
    }

    /**
     * @Route("/new", name="tournois_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $tournoi = new Tournois();
        $form = $this->createForm(TournoisType::class, $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tournoi);
            $entityManager->flush();

            return $this->redirectToRoute('tournois_index', [], Response::HTTP_SEE_OTHER);
        }


        
        return $this->render('tournois/back/new.html.twig', [
            'tournoi' => $tournoi,
            'form' => $form->createView(),
        ]);
    }
     /**
     * @Route("/newF", name="tournois_newF", methods={"GET", "POST"})
     */
    public function newF(Request $request, EntityManagerInterface $entityManager): Response
    {
        $tournoi = new Tournois();
        $form = $this->createForm(TournoisType::class, $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tournoi);
            $entityManager->flush();

            return $this->redirectToRoute('front_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tournois/front/create.html.twig', [
            'tournoi' => $tournoi,
            'form' => $form->createView(),
        ]);
    }
    public function getStatDate($tournois)
    {
        $res = array(0,0,0,0,0,0,0,0,0,0,0,0) ;
        foreach ($tournois as $tournoi)
        {
            $index = $tournoi->getDateDeb()->format('m')[1] - 1 ;
            $res[$index]++ ;
        }
        return $res ;
    }
   /**
        * @Route("/statsT", name="statsT", methods={"GET"})
        */
       public function statT(): Response
       {
           $tournoisRepository = $this->getDoctrine()->getRepository(Tournois::class);
           $tournois= $tournoisRepository->findAll();
   
      
           $statdate = $this->getStatDate($tournois) ;
           return $this->render('tournois/back/stats.html.twig' ,
               [
                   
                   "statDate" => $statdate
               ]
   
           ) ;
   
       }

    /**
     * @Route("/{id}", name="tournois_show", methods={"GET"})
     */
    public function show(Tournois $tournoi): Response
    {
        return $this->render('tournois/back/show.html.twig', [
            'tournoi' => $tournoi,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tournois_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Tournois $tournoi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TournoisType::class, $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('tournois_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tournois/back/edit.html.twig', [
            'tournoi' => $tournoi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tournois_delete", methods={"POST"})
     */
    public function delete(Request $request, Tournois $tournoi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tournoi->getId(), $request->request->get('_token'))) {
            $entityManager->remove($tournoi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tournois_index', [], Response::HTTP_SEE_OTHER);
    }
 /**
  * @Route("/{id}/showmatchs", name="tmatchs", methods={"GET"})
  */
 public function Tmatchs(Request $request,Tournois $tournoi, MatchsRepository $matchsRepository): Response
 {
     $matchs=$matchsRepository->findBy(['idTournois'=>$tournoi]);


     return $this->render('tournois\front\matchs.html.twig', [
         'matchs'=>$matchs,
     ]);
 }
 
}
