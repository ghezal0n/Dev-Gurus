<?php

namespace App\Controller;
use App\Entity\Reservation;
use App\Form\ReservationTypeA;
use App\Form\ReservationType;

use App\Entity\User;
use App\Entity\Role;

use App\Repository\ReservationRepository;
use App\Repository\UserRepository;
use App\Service\Mailer;


use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }


    /**
     * @Route("/Reservation/Ajouter", name="ReservationAjout")
     */
    // no neeeeeeeeeeeeeddddddddddddd
    public function ajouter(Request $request): Response
    {
        $Reservation = new Reservation();
        $Joueur= new User();
        $Coach= new User();
        $formReservation = $this->createForm(ReservationTypeA::class, $Reservation);
       
        $formReservation->add('Ajouter',SubmitType::class);
        $date= new \DateTime('now');
        $dateRes=$reservation->getDateRes();
      

        $formReservation->handleRequest($request);
          $Reservation.setIdjoueur(2);
        $Reservation.setIdCoach(3);
        if ($formReservation->isSubmitted() && $formReservation->isValid()) {
           
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Reservation);
        
            $entityManager->flush();
            return $this->redirectToRoute('Reservation');
        }
        return $this->render('reservation/index.html.twig', [
            'formReservation' => $formReservation->createView(),
        ]);

    }
    /**
     * @Route("dashboard/ReservationAdmin", name="ReservationAdd")
     */
    public function ajouterAdmin(Request $request): Response
    {
        $Reservation = new Reservation();
        $formReservation = $this->createForm(ReservationTypeA::class, $Reservation);
        $formReservation->add('Ajouter',SubmitType::class);
        $formReservation->handleRequest($request);
        if ($formReservation->isSubmitted() && $formReservation->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Reservation);
            $entityManager->flush();
            return $this->redirectToRoute('listReservation');
        }
        return $this->render('Dashboard/reservation/AjouterRes.html.twig', [
            'formReservation' => $formReservation->createView(),
        ]);

    }

     /**
     * @Route("/AfficheRF", name="AfficheRF")
     */
     
    public function AfficheRF(ReservationRepository $repo) {
       
        $reservation=$repo->findAll();
        return $this->render('reservation/listRes.html.twig',
        ['listReservation2'=>$reservation]);
    }
       
           /**
     * @Route("/AfficheRF/{idJoueur}", name="AfficheRFid")
     */
     
    public function AfficheRFById(ReservationRepository $repo, UserRepository $idJ) {
        // add user statiq 
        //
        $reservation=$repo->find($idJ);
        return $this->render('reservation/listRes.html.twig',
        ['listReservation2'=>$reservation]);
    }
     /**
     * @Route("/ImprimerRF/{id}", name="ImprimerRF")
     */
     
    public function ImprimerRF(ReservationRepository $repo,$id) {
        $reservation=$repo->find($id);
        return $this->render('reservation/facture.html.twig',
        ['listReservation2'=>$reservation]);
    }

    /**
     * @Route("dashboard/listReservation/", name="listReservation")
     */
    public function AfficheReservationById(): Response
    {
        $Reservation =$this->getDoctrine()->getRepository(Reservation::class)->findAll();
        return $this->render('Dashboard/reservation/AfficheRes.html.twig', [
            'listReservation' => $Reservation,
        ]);
    }


    /**
     * @Route("SupprimerReservation/{id}", name="SupprimerReservation")
     */
    public function SupprimerReservation($id):Response
    {

        $formReservation = $this->getDoctrine()->getRepository(Reservation::Class)->find($id);
        $em =$this->getDoctrine()->getManager();
        $em->remove($formReservation);
        $em->flush();
        return $this->redirectToRoute('listReservation');
    }

 /**
     * @Route("SupprimerReservationF/{id}", name="SupprimerReservationF")
     */
    public function SupprimerReservationf($id):Response
    {

        $formReservation = $this->getDoctrine()->getRepository(Reservation::Class)->find($id);
        $em =$this->getDoctrine()->getManager();
        $em->remove($formReservation);
        $em->flush();
        return $this->redirectToRoute('AfficheRF');
    }

    /**
     * @Route("ReservationModif/{id}", name="ReservationModif")
     */
    public function ModifierReservation(Request $request,$id)
    {
        $Res = $this->getDoctrine()->getRepository(Reservation::class)->find($id);
        $formR = $this->createForm(ReservationType::class, $Res);
        $formR->add('modifier',SubmitType::class);
        $formR->handleRequest($request);
        if ($formR->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficheRF');
        }
        return $this->render('reservation/ModifRes.html.twig',array('formReservationM'=>$formR->createView()));
    }

    /**
     * @Route("/reservation/jsonobj", name="Resapi", methods={"GET"})
     */
    public function apiReservation(ReservationRepository $repoRes ,SerializerInterface $serializer ):Response
    {
        $resultas= $repoRes->findAll();
        /* $n = $normalizer->normalize($result, null, ['groups' => 'post:read']);
       $json = json_encode($n); */
        $json =$serializer->serialize($resultas,'json',['groups'=> "post:read"]);
        return new JsonResponse($json,200,[],true) ;

    }
    /**
     * @route("/sendEmailReservation", name="sendEmailReservation")
     */

    public function sendEmailReservation(Mailer $mailer){

        $roleJ =$this->getDoctrine()->getRepository(Role::class)->findOneBy(
            ['id' => '2']);

          $idrole=$roleJ->getId();

        $Joueur= new User();
    
        $idJ=$Joueur->getId()  ;
        $Joueur->setRole($roleJ);
        $Joueur->setNom("raoua");
        $Joueur->setPrenom("blh");
        $Joueur->setPseudo("rou");
        $Joueur->setEmail("rawaa.blh@gmail.com");
        $Joueur->setMdp("rou");
        $Joueur->setPoints(123);
        $Joueur->setAddressLoc("Joueur");
        $Joueur->setNumTelf(1255);
        $Joueur->setLevel(1555);
        $mailer->sendEmailReservation($Joueur->getEmail());
        $this->addFlash("success", "Réservation effectuée avec succès! Merci de consulter votre email");
        return  $this->redirectToRoute('AfficheRF');
    }
}
