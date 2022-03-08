<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateCmd')
            ->add('image',FileType::class, [
                'label'=>'image',
                'attr'=>[
                    'placeholder'=>'image',
                    'class'=>'image' ]
                ])
                ->add('Statut',ChoiceType::class, [
                    'choices'  => [
                        'Veuillez choisir votre choix' => null,
                        'Livree' => 'Livree',
                        'Non livree ' => 'Non livree',
                        'En cours' => 'En cours',
                        'No' => false,

                    ],
                
            ])
            ->add('idUser',EntityType::class,[
                'class'=> User::class,
                'choice_label'=> 'id'
                 ])

            
         
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
