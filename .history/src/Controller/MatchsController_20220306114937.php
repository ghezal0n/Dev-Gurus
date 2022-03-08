<?php

namespace App\Controller;
use App\Entity\User;

use App\Entity\Matchs;
use App\Entity\Tournois;
use App\Repository\TournoisRepository;
use App\Form\MatchsType;
use App\Repository\MatchsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/matchs")
 */
class MatchsController extends AbstractController
{

    /**
     * @Route("/", name="matchs_index", methods={"GET"})
     */
    public function index(Request $request, MatchsRepository $matchsRepository,PaginatorInterface $paginator): Response
    {
        $matchs = $paginator->paginate(
            $matchsRepository->findAll() ,
            $request->query->getInt('page', 1),
        3
    );
        return $this->render('matchs/back/index.html.twig', [
            'matchs' =>$matchs,
        ]);
    }

 


      /**
     * @Route("/frontmatch", name="matchs_F", methods={"GET"})
     */

    
    public function FrontIndex(MatchsRepository $matchsRepository): Response
    {
        return $this->render('matchs/Front/index.html.twig', [
            'matchs' => $matchsRepository->findAll(),
        ]);
    }
    /**
     * @Route("/new", name="matchs_new", methods={"GET", "POST"})
     */
    public function new(Request $request,EntityManagerInterface $entityManager,TournoisRepository $tournoisRepository): Response
    {
        $match = new Matchs();
        $form = $this->createForm(MatchsType::class, $match);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($match);
            $entityManager->flush();
            



            return $this->redirectToRoute('matchs_index', [], Response::HTTP_SEE_OTHER);
        }
        $tronement= new Tournois();
        $tronement=$tournoisRepository->findBy(['id'=>$match->getIdTournois()]);
        $user=new User();
       // $user = $tronement->getIduser();
         $emailuser=$user->getEmail();
      /*  $email = (new Email())
            ->from("")
            ->to($email)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Match ADD!')
            ->text('Match has Add!')
            ->html('<p>check the list of the matches!</p>');

        $mailer->send($email);*/
       

        return $this->render('matchs/back/new.html.twig', [
            'match' => $match,
            'form' => $form->createView(),
        ]);
    }

    public function getStatDate($matchs)
    {
        $res = array(0,0,0,0,0,0,0,0,0,0,0,0) ;
        foreach ($matchs as $match)
        {
            $index = $match->getDateMatch()->format('m')[1] - 1 ;
            $res[$index]++ ;
        }
        return $res ;
    }
   /**
        * @Route("/statsM", name="statsM", methods={"GET"})
        */
       public function statsMatchs(): Response
       {
           $matchsRepository = $this->getDoctrine()->getRepository(Matchs::class);
           $matchs= $matchsRepository->findAll();
   
      
           $statdate = $this->getStatDate($matchs) ;
           return $this->render('Matchs/back/stats.html.twig' ,
               [
                   
                   "statDate" => $statdate
               ]
   
           ) ;
   
       }
    /**
     * @Route("/{id}", name="matchs_show", methods={"GET"})
     */
    public function show(Matchs $match): Response
    {
        return $this->render('matchs/back/show.html.twig', [
            'match' => $match,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="matchs_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Matchs $match, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MatchsType::class, $match);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('matchs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('matchs/back/edit.html.twig', [
            'match' => $match,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="matchs_delete", methods={"POST"})
     */
    public function delete(Request $request, Matchs $match, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$match->getId(), $request->request->get('_token'))) {
            $entityManager->remove($match);
            $entityManager->flush();
        }

        return $this->redirectToRoute('matchs_index', [], Response::HTTP_SEE_OTHER);
    }



  


}
