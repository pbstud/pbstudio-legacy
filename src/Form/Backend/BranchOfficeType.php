<?php

declare(strict_types=1);

namespace App\Form\Backend;

use App\Entity\BranchOffice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BranchOfficeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'label' => 'label.name',
            ])
            ->add('public', null, [
                'label' => 'label.public',
                'block_prefix' => 'switch',
            ])
            ->add('place', null, [
                'label' => 'label.place',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BranchOffice::class,
        ]);
    }
}
