<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ContactType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Controller\Swift_Mailer;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request,\Swift_Mailer $mailer)
    {
        $form=$this->createForm(ContactType::class);
        $form->add('envoyer', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $contact= $form->getData();

            $message =(new \Swift_Message('nouveau contact'))
            ->setFrom($contact['email'])
            ->setTo('Clutch.GG2@outlook.com')
            ->setBody(
                $this->renderView(
                    'emails/contact.html.twig', compact('contact')
                ),
                'text/html'
                )
                ;
            $mailer->send($message);
            $this->addFlash('message','le message a bien été envoyé');
            return $this->redirectToRoute('home'); 
        }
     
    
        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createview()
        ]);
    }
}
