<?php

namespace App\Form;

use App\Entity\Jeux;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\File;

class JeuxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_jeux')
            ->add('imageJeu',FileType::class,array('data_class' => null),[
                    'mapped'=>false
                ])
            ->add('Save',SubmitType::class, ['label'=> 'sauvegarder jeu'])


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Jeux::class
        ]);
    }
}
