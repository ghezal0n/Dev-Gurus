<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use App\Entity\Produit;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomProd',TextType::class,[
                'attr'=>['placeholder'=>"nomProd",'class'=>"form-control"],
               
                    'label' => false
                ])

            ->add('quantite',TextType::class,[
                'attr'=>['placeholder'=>"quantite",'class'=>"form-control"],
               
                    'label' => false
                ])

            ->add('prix',TextType::class,[
                'attr'=>['placeholder'=>"prix",'class'=>"form-control"],
               
                    'label' => false
                ])

            ->add('description',TextType::class,[
                'attr'=>['placeholder'=>"description",'class'=>"form-control"],
               
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
