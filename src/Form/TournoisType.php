<?php

namespace App\Form;

use App\Entity\Tournois;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TournoisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomTournois')
            ->add('nbEq')
            ->add('dateDeb', DateType::class, array(
                'required' => false,
                'widget' => 'single_text',
                'empty_data' => null,
                'attr' => array(
                    'placeholder' => 'Begin date(mm/dd/yyyy)'
                )))
                ->add('dateFin', DateType::class, array(
                    'required' => false,
                    'widget' => 'single_text',
                    'empty_data' => null,
                    'attr' => array(
                        'placeholder' => 'Date end(mm/dd/yyyy)'
                    )))
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tournois::class,
        ]);
    }
}
