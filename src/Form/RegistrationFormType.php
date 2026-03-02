<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\BranchOffice;
use App\Entity\User;
use App\Repository\BranchOfficeRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Registration Form Type.
 */
class RegistrationFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('lastname')
            ->add('phone')
            ->add('email')
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'attr' => [
                    'autocomplete' => 'new-password',
                ],
            ])
            ->add('branchOffice', EntityType::class, [
                'placeholder' => 'Sucursal preferida',
                'class' => BranchOffice::class,
                'query_builder' => static function (BranchOfficeRepository $branchOfficeRepository) {
                    return $branchOfficeRepository->queryPublic();
                },
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'validation_groups' => ['Registration', 'Default'],
        ]);
    }
}
