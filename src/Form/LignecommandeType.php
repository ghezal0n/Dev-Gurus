<?php

namespace App\Form;

use App\Entity\Lignecommande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Produit;



class LignecommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantite')
            ->add('lignecmd')
            ->add('Produit',EntityType::class,[
            'class'=> Produit::class,
            'choice_label'=> 'nom'
             ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lignecommande::class,
        ]);
    }
}
