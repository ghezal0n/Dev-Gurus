<?php

namespace App\Controller;

use App\Entity\Jeux;
use App\Form\JeuxType;
use App\Repository\JeuxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Gedmo\Sluggable\Util\Urlizer;

class JeuxController extends AbstractController
{
    /**
     * @Route("/dashboard/games", name="dashii")
     */
    public function index(): Response
    {
        return $this->render('backend/jeux.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }


        /**
     * @Route("/games/addgame", name="addgame")
     */
    public function Ajouterj(): Response
    {
        return $this->render('backend/jeux/addgame.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }




            /**
     * @Route("games/afficherjeux", name="afficherjeux")
     */
    public function afficherjeux(): Response
    {
        return $this->render('frontend/jeux/afficher.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }

        /**
     * @param Request $request
     * @Route("games/Add" , name="testing")
     */
    function Add(Request $request)
    {
        $jeux = new Jeux();
        $form=$this->createForm(JeuxType::class,$jeux);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
{
    $uploadedFile = $form['imageJeu']->getData();
    $pathupload = $this->getParameter('kernel.project_dir').'/public/uploads/images';
    $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
    $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
    $uploadedFile->move(
        $pathupload,
        $newFilename
    );
    $jeux->setImageJeu($newFilename);
    $em=$this->getDoctrine()->getManager();
    $em->persist($jeux);
    $em->flush();
    return $this->redirectToRoute('showgameplz');
}
    return $this->render('backend/jeux/ajouterGame.html.twig',[
        'jeux' => $jeux,
        'form'=>$form->createView()]);

    }

    /**
     * @param JeuxRepository $repository
     * @Route("games/show" , name="showgameplz")
     */
    public function Affiche(JeuxRepository $repository)
    {
        $jeux=$repository->findAll();
        return $this->render('backend/jeux/games.html.twig',['jeux'=>$jeux]);
    }

    /**
     * @param JeuxRepository $repository
     * @Route("games/showf" , name="showgameinfront")
     */
    public function Affichef(JeuxRepository $repository)
    {
        $jeux=$repository->findAll();
        return $this->render('frontend/jeux/afficherj.html.twig',['jeux'=>$jeux]);
    }





    /**
     * @Route("/Supprimerjeux/{id}",name="d")
     */
    function Delete($id,JeuxRepository $repository)
    { $jeux=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($jeux);
        $em->flush();
        return $this->redirectToRoute('showgameplz');

    }


    /**
     * @Route("/game/Update/{id}", name="Update")
     */
    public function update(int $id, Request $request, JeuxRepository $Rep): Response
    {
        $element = $Rep->find($id);
        $form = $this->createForm(JeuxType::class, $element);
        $form->handleRequest($request);
        if (($form->isSubmitted()) && ($form->isValid()))
        {
            $manager = $this->getDoctrine()->getManager();
            $manager->flush();
            return $this->redirectToRoute('showgameplz');
        }
        return $this->render('backend/jeux/update.html.twig', [
            'f' => $form->createView(),
        ]);
    }








}
