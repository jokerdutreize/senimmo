<?php

namespace App\Form;

use App\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('project_img', FileType::class, [
                'label' => 'Image du projet'
            ])
            ->add('project_name', TextType::class, [
                'label' => 'Nom du projet'
            ])
            ->add('project_desc', TextareaType::class, [
                'label' => 'Description du projet'
            ])
            ->add('project_location', TextType::class, [
                'label' => 'Dans quelle ville se déroule le projet ?'
            ])
            ->add('project_funding', MoneyType::class, [
                'label' => 'Objectif financier',
                'currency' => 'CFA'
            ])
            ->add('project_funding_duration', IntegerType::class, [
                'label' => 'Durée de la levée de fonds en jours'
            ])
            ->add('project_social_impact', TextareaType::class, [
                'label' => 'Impact social'
            ])
            ->add('project_context', TextareaType::class, [
                'label' => 'Contexte du projet'
            ])
            ->add('project_presentation', TextareaType::class, [
                'label' => 'Présentation du projet'
            ])
            ->add('project_owner_presentation', TextareaType::class, [
                'label' => 'Présentation du porteur de projet'
            ])
            ->add('project_ip', NumberType::class, [
                'label' => "L'Indice de Profitabilité du projet (IP)"
            ])
            ->add('project_van', MoneyType::class, [
                'label' => 'Valeur Actuelle Nette du projet (VAN)',
                'currency' => 'CFA'
            ])
            ->add('project_drci', TextType::class, [
                'label' => 'Délai de Récupération du Capital Investi (DRCI)'
            ])
            ->add('project_bp', FileType::class, [
                'label' => 'Montage financier (format excel)'
            ])
            ->add('project_owner_status', TextType::class, [
                'label' => 'Statut du porteur de projet'
            ])
            ->add('project_owner_email', EmailType::class, [
                'label' => 'Email du porteur de projet'
            ])
            ->add('project_owner_phone', TelType::class, [
                'label' => 'Téléphone du porteur de projet'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Soumettre le projet',
                'attr' => [
                    'class' => 'btn btn-warning'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
