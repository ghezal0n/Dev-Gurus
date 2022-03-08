<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use App\Entity\Fournisseur;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'attr'=>['placeholder'=>"nom",'class'=>"form-control"],
               
                    'label' => false
                ])

            ->add('numTel',TextType::class,[
                'attr'=>['placeholder'=>"numTel",'class'=>"form-control"],
               
                    'label' => false    
                ])

            ->add('email',TextType::class,[
                'attr'=>['placeholder'=>"email",'class'=>"form-control"],
                   
                    'label' => false
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
