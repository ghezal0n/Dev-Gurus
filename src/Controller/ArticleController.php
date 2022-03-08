<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Comment;
use App\Form\ArticlesType;
use App\Form\CommentType;
use App\Repository\ArticlesRepository;
use App\Repository\CommentRepository;
use App\Repository\JeuxRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\DocBlock\Serializer;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Gedmo\Sluggable\Util\Urlizer;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class ArticleController extends AbstractController
{
    /**
     * @param ArticleController $repository
     * @Route("/front/article", name="article")
     */
    public function show(ArticlesRepository $repository): Response
    {
        $articles=$repository->findAll();
        return $this->render('frontend/article/article.html.twig',['articles'=>$articles]);
    }



    /**
     * @param ArticlesRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/front/article/singleArticle/{id}", name="singlearticle")
     */
    public function showsingleArticle(Request $request, $id,ArticlesRepository $repository, CommentRepository $rep): Response
    {
        $articles=$repository->find($id);
        $comments=$rep->findBy(
            ['id_article'=>$id]);
        $comment = new Comment();
        $form=$this->createForm(CommentType::class,$comment);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
            $comment->setIdArticle($articles);
            $em=$this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
        }
        return $this->render('frontend/article/singleArticle.html.twig',
            ['articles'=>$articles,
                'form'=>$form->createView(),
                'comments'=>$comments]);
    }




    /**
     * @param ArticleController $repository
     * @Route("dashboard/article" , name="article_d")
     */
    public function Affiche(ArticlesRepository $repository)
    {
        $articles=$repository->findAll();
        return $this->render('backend/articles/articles.html.twig',['articles'=>$articles]);
    }


    /**
     * @param Request $request
     * @Route("articles/Add" , name="article_Add")
     */
    function Add(Request $request)
    {
        $articles = new Articles();
        $form=$this->createForm(ArticlesType::class,$articles);
        $form->handleRequest($request);


        if($form->isSubmitted()&& $form->isValid())
        {
            $uploadedFile = $form['image']->getData();
            $pathupload = $this->getParameter('kernel.project_dir').'/public/uploads/images';
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
            $uploadedFile->move(
                $pathupload,
                $newFilename
            );
            $articles->setImage($newFilename);

            $em=$this->getDoctrine()->getManager();
            $em->persist($articles);
            $em->flush();
            return $this->redirectToRoute('article_d');
        }
        return $this->render('backend/articles/ajouter.html.twig',[
            'article' => $articles,
            'form'=>$form->createView()
        ]);

    }


    /**
     * @Route("/Supprimerarticle/{id}",name="delete")
     */
    function Delete($id,ArticlesRepository $repository)
    { $articles=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($articles);
        $em->flush();
        return $this->redirectToRoute('article_d');

    }

    /**
     * @Route("/articles/Update/{id}", name="Updatea")
     */
    public function update(int $id, Request $request, ArticlesRepository $Rep): Response
    {
        $element = $Rep->find($id);
        $form = $this->createForm(ArticlesType::class, $element);
        $form->handleRequest($request);
        if (($form->isSubmitted()) && ($form->isValid()))
        {
            $manager = $this->getDoctrine()->getManager();
            $manager->flush();
            return $this->redirectToRoute('article_d');
        }
        return $this->render('backend/articles/update.html.twig', [
            'f' => $form->createView(),
        ]);
    }

    /**
     * @Route("/list", name="listaaa")
     */
    public function list(ArticlesRepository $Rep,NormalizerInterface $normalizer)
    { $articles = $Rep->findAll();
        $json=$normalizer->normalize($articles,'json',['groups'=>'article']);
        return new Response(json_encode($json));
    }


    /**
     * @Route("/lista", name="listaaa")
     */
    public function lista(ArticlesRepository $Rep,SerializerInterface $serializer):Response
    { $articles = $Rep->findAll();
        $json=$serializer->serialize($articles,'json',['groups'=>"article:read"]);
        return new JsonResponse($json,200,[],true);
    }


    /**
     * @Route("/listadd", name="listadd")
     */
    public function addList(Request $request , NormalizerInterface $normalizer)
    {
        $em= $this->getDoctrine()->getManager();
        $article= new Articles(); 
        $article=setTitre($request->get('titre'));
        $article=setDescription($request->get('description'));
        $em->persist($article);
        $em->flush();
        $json= $normalizer->normalize($article, 'json',['groups'=>'article:read']);
        return new Response(json_encode($json));
    }

    /**
     * @Route("/SupprimerarticleJSON/{id}",name="deleteArticleJSON")
     */
    function DeleteArticleJson(ArticlesRepository $repository , Request $request , NormalizerInterface $normalizer,$id)
    { $articles=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($articles);
        $em->flush();
        $jsonContent = $normalizer->normalize($articles,'json',['groups'=>'Article']);
        return new Response("article was deleted succesfully".json_encode($jsonContent));
    }


    /**
     * @Route("/UpdateArticleJSON/{id}",name="UpdateArticleJSON")
     */
    function UpdateArticleJson( Request $request , NormalizerInterface $normalizer,$id)
    {   $em=$this->getDoctrine()->getManager();
        $articles = $em->getRepository(Articles::class)->find($id);
        $articles->setTitre($request->get('Titre'));
        $articles->setDescription($request->get('description'));
        $em->flush();
        $jsonContent = $normalizer->normalize($articles,'json',['groups'=>'Article']);
        return new Response("article was deleted succesfully".json_encode($jsonContent));
    }
















}
