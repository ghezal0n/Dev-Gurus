<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\CommentType;
use App\Repository\ArticlesRepository;
use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @param CommentRepository $repository
     * @Route("/dashboard/comment", name="comment")
     */
    public function show(CommentRepository $repository): Response
    {
        $commentaire=$repository->findAll();
        return $this->render('backend/Comment/comment.html.twig',['comment'=>$commentaire]);
    }



    /**
     * @param CommentRepository $repository
     * @Route("/singlearticle/comment/{id_article}", name="singlearticlecomment")
     */
    public function showsinglearticleComment($id_article,CommentRepository $repository): Response
    {
        $comments=$repository->findBy(
            ['$id_article'=>$id_article]);
        return $this->render('frontend/article/singleArticle.html.twig',
            ['comments'=>$comments]);
    }



    /**
     * @Route("/Supprimercommentaire/{id}",name="deletecomment")
     */
    function Delete($id,CommentRepository $repository)
    { $commentaire=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($commentaire);
        $em->flush();
        return $this->redirectToRoute('comment');

    }






}
