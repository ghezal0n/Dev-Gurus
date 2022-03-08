<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class Mailer {
    /**
     * @var MailerInterface
     */
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmailReservation($email)
    {
        $email = (new TemplatedEmail())
            ->from('blhroua@gmail.com')
            ->to($email)
            ->subject('Confrimation du Reservation des Service Guide ')

            // path of the Twig template to render
            ->htmlTemplate('emails/email.html.twig')


        ;

        $this->mailer->send($email);
    }
}