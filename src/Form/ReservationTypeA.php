<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\ServiceGuide;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ReservationTypeA extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Guide',EntityType::class, [
                'class'=>ServiceGuide::class,
                'choice_label'=>'titre'
            ])
            ->add('dateRes',DateType::class, [
                'label'=>'dateRes',
                'attr'=>[
                    'placeholder'=>'dateRes',
                    'class'=>'date'
                ]])
            ->add('HeureDebut',TextType::class)
            ->add('idjoueur',EntityType::class, [
                'class'=>User::class,
                'choice_label'=>'nom'
            ])
            ->add('idCoach',EntityType::class, [
                'class'=>User::class,
                'choice_label'=>'nom'
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
