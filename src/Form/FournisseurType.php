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
            ->add('nomFourni',TextType::class,[
                'attr'=>['placeholder'=>"nomFourni",'class'=>"form-control"],
               
                    'label' => false
                ])

            ->add('email',TextType::class,[
                'attr'=>['placeholder'=>"email",'class'=>"form-control"],
               
                    'label' => false
                ])
            ->add('numTelf',TextType::class,[
                'attr'=>['placeholder'=>"numTelf",'class'=>"form-control"],
               
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
