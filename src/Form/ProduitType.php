<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use App\Entity\Produit;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use App\Entity\Fournisseur;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'attr'=>['placeholder'=>"Nom du produit",'class'=>"form-control"],
               
                    'label' => false
                ])

            ->add('img',FileType::class, [
                'label'=>'img',
                'attr'=>[
                    'placeholder'=>'img',
                    'class'=>'img' ]
                ])

            ->add('qte',TextType::class,[
                'attr'=>['placeholder'=>"Quantité",'class'=>"form-control"],
               
                    'label' => false
                ])

            ->add('prix',TextType::class,[
                'attr'=>['placeholder'=>"prix",'class'=>"form-control"],
               
                    'label' => false
                ])

            ->add('descrp',TextType::class,[
                'attr'=>['placeholder'=>"Description du produit",'class'=>"form-control"],
               
                    'label' => false
                ])
            ->add('catego',ChoiceType::class, [
                    'choices'  => [
                        'Veuillez choisir votre choix' => null,
                        'Accessoire' => 'Accessoire',
                        'T-Shirt' => 'T-Shirt',
                        'Pull' => 'Pull',
                        'Casquette' => 'Casquette',
                        'No' => false,
                    ],
                
            ])
            ->add('fournisseur',EntityType::class,[
               'class'=> Fournisseur::class,
               'choice_label'=> 'nom'
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
