<?php

namespace App\Form;

use App\Entity\Engagement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EngagementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('montant')
          //  ->add('date')
            ->add('numeroOrdrePaiement')
            ->add('commande')
            ->add('budget')
            ->add('compte')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Engagement::class,
        ]);
    }
}
