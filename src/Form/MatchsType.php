<?php

namespace App\Form;

use App\Entity\Matchs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatchsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('DateMatch', DateType::class, array(
                'required' => false,
                'widget' => 'single_text',
                
                'empty_data' => null,
                'attr' => array(
                    'placeholder' => 'Date Match mm/dd/yyyy'
                )))
            ->add('idTournois')
            ->add('EquipeHome')
            ->add('EquipeAway')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Matchs::class,
        ]);
    }
}
