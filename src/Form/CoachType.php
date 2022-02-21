<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoachType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           // ->add('nom')
            //->add('prenom')
            //->add('pseudo')
            //->add('email')
            //->add('mdp')
            //->add('points')
            //->add('addressLoc')
            //->add('numTelf')
            ->add('level')
            ->add('Cv')
            ->add('badge')
            //->add('role')
            //->add('Planning')
            //->add('panier')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
