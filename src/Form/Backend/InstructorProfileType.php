<?php

declare(strict_types=1);

namespace App\Form\Backend;

use App\Entity\StaffProfile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

/**
 * InstructorProfileType.
 */
class InstructorProfileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', null, [
                'label' => 'label.firstname',
            ])
            ->add('paternalSurname', null, [
                'label' => 'label.paternal_surname',
            ])
            ->add('maternalSurname', null, [
                'label' => 'label.maternal_surname',
            ])
            ->add('photoFile', VichImageType::class, [
                'label' => 'label.photo_file',
                'required' => false,
                'allow_delete' => false,
                'download_uri' => false,
                'image_uri' => false,
            ])
            ->add('telephone', null, [
                'label' => 'label.telephone',
            ])
            ->add('admissionAt', DateType::class, [
                'label' => 'label.admission_at',
                'format' => 'dd/MM/yyyy',
                'html5' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'datepicker'],
                'block_prefix' => 'datepicker',
            ])
            ->add('description', null, [
                'label' => 'label.description',
            ])
            ->add('address', null, [
                'label' => 'label.address',
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => StaffProfile::class]);
    }
}
