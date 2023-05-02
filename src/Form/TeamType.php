<?php

namespace App\Form;

use App\Entity\Team;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TeamType extends AbstractType
{

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Team::class,
            'countries' => ['USA', 'UK', 'Canada', 'Australia', 'France'],
        ]);
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $countries = array_combine($options['countries'], $options['countries']);
        $builder
            ->add('name')
            ->add('country', ChoiceType::class, [
                'choices' => $countries,
            ])
            ->add('budget')
            ->add('attachment', FileType::class, ['mapped' => false])
            // ->add('createdAt')
            // ->add('updatedAt')
        ;
    }
}
