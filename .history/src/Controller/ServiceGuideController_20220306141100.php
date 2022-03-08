<?php

namespace App\Controller;

use App\Entity\ServiceGuide;
use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Role;

use App\Form\ReservationType;
use App\Form\CoachType;
use App\Form\ServiceGuideType;
use App\Form\SearchFormType;



use App\Repository\ServiceGuideRepository;
use App\Repository\ReservationRepository;
use App\Repository\UserRepository;




use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

use Symfony\Component\HttpFoundation\JsonResponse;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

serviceguide/
  /**
     * @Route("/")
     */
class ServiceGuideController extends AbstractController
{

    /**
     * @Route("/", name="service_guide")
     */
    public function index(Request $request): Response
    {// recheche non fonct
        $formSearch= $this->createForm(SearchFormType::class);
        $search = $formSearch->handleRequest($request);
       
        //$form = $this->createForm(UserType::class, $user);
        $coach=new User();
        $role =$this->getDoctrine()->getRepository(Role::class)->findOneBy(
            ['id' => '3']);

          $idrole=$role->getId();
         // $role->get
         
            $coach->setRole($role);
           $coach->setNom("coach11");
           $coach->setPrenom("coach");
           $coach->setPseudo("coach");
           $coach->setEmail("coach");
           $coach->setMdp("coach");
           $coach->setPoints(123);
           $coach->setAddressLoc("coach");
           $coach->setNumTelf(1255);
           $coach->setLevel(1555);
           $coach->setMdp("coach");

           $entityManager = $this->getDoctrine()->getManager();
         $entityManager->persist($coach);
         $entityManager->flush();
  
        return $this->render('base.html.twig', [
            'controller_name' => 'ServiceGuideController',
            'formSearch' => $formSearch->CreateView(),
        ]);
    }

    /**
     * @Route("/serviceguide/ajouter", name="service_guideAjouter")
     */
    public function ajouter(Request $request): Response
    {

        $ServiceGuide = new ServiceGuide();
        $coach = new User();
        $ServiceGuide->setDateCreation(new \DateTime('now'));
    //  $coachid= $coach->getIduser;
       // $ServiceGuide->addIduser($coach);
          // $coach->getId();
        //  $role = new Role();
          $role =$this->getDoctrine()->getRepository(Role::class)->findOneBy(
            ['id' => '3']);

          $idrole=$role->getId();
         // $role->get
         
            $coach->setRole($role);
           $coach->setNom("coach");
           $coach->setPrenom("coach");
           $coach->setPseudo("coach");
           $coach->setEmail("coach");
           $coach->setMdp("coach");
           $coach->setPoints(123);
           $coach->setAddressLoc("coach");
           $coach->setNumTelf(1255);
           $coach->setLevel(1555);
           $coach->setMdp("coach");

           //$ServiceGuide->getIduser();

        $formServiceGuide = $this->createForm(ServiceGuideType::class, $ServiceGuide);
        $formServiceGuide->add('save',SubmitType::class ,[
             'attr'=>[
              'class'=>'nk-btn nk-btn-rounded nk-btn-color-main-1'
        ]
            ] );
        $formServiceGuide->handleRequest($request);
        $formSearch= $this->createForm(SearchFormType::class);
        $search = $formSearch->handleRequest($request);

        if ($formServiceGuide->isSubmitted() && $formServiceGuide->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ServiceGuide);
            $entityManager->persist($role);
            $entityManager->persist($coach);
            $entityManager->flush();
            return $this->redirectToRoute('listService');
        }
        return $this->render('service_guide/ServiceForm.html.twig', [
            'formService' => $formServiceGuide->createView(),
            'formSearch' => $formSearch->CreateView(),
        ]);

    }

    /**
     * @Route("listService", name="listService")
     */
    public function list(Request $request , ServiceGuideRepository $repoSG): Response
    {
        $formSearch= $this->createForm(SearchFormType::class);
        $search = $formSearch->handleRequest($request);
        $ServiceGuide =$this->getDoctrine()->getRepository(ServiceGuide::class)->findAll();

        $ServiceGuide2=$repoSG->findBySearch($search->get('q')->getData());
        return $this->render('service_guide/listService.html.twig', [
            'listService2' => $ServiceGuide2,
            'listService' => $ServiceGuide,
            'formSearch' => $formSearch->CreateView(),
        ]);

    }

/**
     * @Route("serviceguide/listServiceCoach", name="listServiceCoach")
     */
  
     public function listbyCoach(Request $request ,$idCoach, ServiceGuideRepository $repoSG ,UserRepository $repoU): Response
    {
        $formSearch= $this->createForm(SearchFormType::class);
        $search = $formSearch->handleRequest($request);

     //   $user=$repoU->find($idCoach);
      

        $ServiceGuide =$this->getDoctrine()->getRepository(ServiceGuide::class)->find($user);



        $ServiceGuide2=$repoSG->findBySearch($search->get('q')->getData());
        return $this->render('service_guide/listServiceCoach.html.twig', [
            'listService2' => $ServiceGuide2,
            'listService' => $ServiceGuide,
            'formSearch' => $formSearch->CreateView(),
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
        $formSearch= $this->createForm(SearchFormType::class);
        $search = $formSearch->handleRequest($request);

        $ServiceGuide = $this->getDoctrine()->getRepository(ServiceGuide::class)->find($id);
        $form = $this->createForm(ServiceGuideType::class, $ServiceGuide);
        $form->add('modifier',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listService');
        }
        return $this->render('service_guide/update.html.twig',array('form'=>$form->createView()
    ,
    'formSearch' => $formSearch->CreateView(),
));
    }
    /**
     * @Route("serviceguide/listService/coachingReq", name="coach")
     */
    public function ajouterCoach1(Request $request): Response
    {
        $formSearch= $this->createForm(SearchFormType::class);
        $search = $formSearch->handleRequest($request);
        //$coach =new User();
        //$coach.setBadge("Coach");

        $formcoach = $this->createForm(CoachType::class, $coach);
        $formcoach->handleRequest($request);

        if ($formcoach->isSubmitted() && $formcoach->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formcoach);
            $entityManager->flush();
            return $this->redirectToRoute('listService');
        }
        return $this->render('coach/index.html.twig', [
            'formDemandeC' => $formcoach->createView(),

            'formSearch' => $formSearch->CreateView(),        ]);

    }

    /**
     * @Route("serviceguide/listService/ajouterReservation/{id}", name="AjoutReservation")
     */
    public function ajouterReservationbyGuide(ServiceGuideRepository $repoG, ReservationRepository $repoR ,$id,Request $request): Response
    {
        $formSearch= $this->createForm(SearchFormType::class);
        $search = $formSearch->handleRequest($request);

        //$ServiceGuide =$repoG->find($id);
        $ServiceGuide = $this->getDoctrine()->getRepository(ServiceGuide::class)->find($id);
      //   $idCoach=$ServiceGuide->getIduser();
        
        $reservation = new Reservation();

        $date= new \DateTime('now');
        $dateRes=$reservation->getDateRes();
        $dateGuide=$ServiceGuide->getDateCreation();
        $roleJ =$this->getDoctrine()->getRepository(Role::class)->findOneBy(
            ['id' => '2']);

          $idrole=$roleJ->getId();

        $Joueur= new User();
    
        $idJ=$Joueur->getId()  ;
        $Joueur->setRole($roleJ);
        $Joueur->setNom("Joueur11");
        $Joueur->setPrenom("Joueur");
        $Joueur->setPseudo("Joueur");
        $Joueur->setEmail("Joueur");
        $Joueur->setMdp("Joueur");
        $Joueur->setPoints(123);
        $Joueur->setAddressLoc("Joueur");
        $Joueur->setNumTelf(1255);
        $Joueur->setLevel(1555);
        $Joueur->setMdp("Joueur");

        $coach= new User();
        $roleC =$this->getDoctrine()->getRepository(Role::class)->findOneBy(
            ['id' => '3']);

          $idrole=$roleC->getId();
         // $role->get
         
            $coach->setRole($roleC);
           $coach->setNom("coach");
           $coach->setPrenom("coach");
           $coach->setPseudo("coach");
           $coach->setEmail("coach");
           $coach->setMdp("coach");
           $coach->setPoints(123);
           $coach->setAddressLoc("coach");
           $coach->setNumTelf(1255);
           $coach->setLevel(1555);
           $coach->setMdp("coach");


              $formR = $this->createForm(ReservationType::class, $reservation);
        $formR->add('Reserver',SubmitType::class);

        $formR->handleRequest($request);

        if ($formR->isSubmitted() && $formR->isValid()) {
          
            $reservation->setGuide($ServiceGuide);
             $reservation->setIdjoueur($Joueur);
             $reservation->setIdCoach($coach);
            $nbhR= $reservation->getHeureDebut();
   //     if($date < $dateGuide && $nbhR >= 1){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservation);
            $entityManager->persist($Joueur);
            $entityManager->persist($coach);

            $entityManager->flush();
            return $this->redirectToRoute('sendEmailReservation');
//}
        }
        return $this->render('reservation/index.html.twig', [
            'formReservation' => $formR->createView(),
            'formSearch' => $formSearch->CreateView(),
        ]);

    }
    /**
     * @Route("/serviceguide/jsonobj", name="api", methods={"GET"})
     */
    public function api(ServiceGuideRepository $repoGr ,SerializerInterface $serializer ):Response
    {
     

        $resultas= $repoGr->findAll();

        /* $n = $normalizer->normalize($result, null, ['groups' => 'post:read']);
       $json = json_encode($n); */
        $json =$serializer->serialize($resultas,'json',['groups'=> "post:read"]);
        return new JsonResponse($json,200,[],true) ;

    }

/**
     * @Route("/AddServiceguide/json", name="addServiceGuide")
     */
    public function AddServiceGuideJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $ServiceGuide = new ServiceGuide();
        $ServiceGuide->setTitre($request->get('titre'));
        $ServiceGuide->setDescrp($request->get('descrp'));
        $ServiceGuide->setNbHeure($request->get('nb_heure'));
       // $ServiceGuide->setDateCreation($request->get('date_creation'));
        $ServiceGuide->setPrix($request->get('prix'));
        $em->persist($ServiceGuide);
        $em->flush();

        $jsonContent= $Normalizer->normalize($ServiceGuide,'json',['groups'=>"post:read"]);
        return new Response(json_encode($jsonContent));;
    }



    /**
     * @Route("/AfficheRes", name="AfficheRes")
     */

    public function AfficheRes(ReservationRepository $repo , Request $request) {

        $formSearch= $this->createForm(SearchFormType::class);
        $search = $formSearch->handleRequest($request);

        $reservation=$repo->findAll();
        return $this->render('reservation/listReservation.html.twig',
            ['listReservation'=>$reservation
        , 'formSearch' => $formSearch->CreateView(),
        ]);
    }


    /**
     * @Route("/g", name="games")
     */
    public function affichersearch(Request $request , ServiceGuideRepository $repSG): Response
    {

        $data=new SearchData();
        $form = $this->createForm(SearchType::class, $data);

        $ServiceGuide=$repSG->findSearch();
        return $this->render('service_guide/listService.html.twig', [
            'listService' => $ServiceGuide,
            'formSearch' => $form->createView(),
        ]);

        // On recherche les articles correspondant aux mots clés

        /*
         *$search = $form->handleRequest($request);
        $Article= $ArticleRepository->search(
            $search->get('titre')->getData()

        );
        */


    }



}
