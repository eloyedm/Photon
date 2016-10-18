<?php
// src/PhotomBundle/Form/RegistrationType.php

namespace PhotomBundle\Form;

use Symfony\Component\Form\AbstractType;
use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombreusuario', null, array('attr' => array(
          'placeholder' => 'NOMBRE',
          'class' => 'style-name'
        )))
        ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle', 'attr' => array(
          'placeholder' => 'EMAIL',
          'class' => 'style-email'
        )))
        ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle', 'attr' => array(
          'placeholder' => 'USUARIO',
          'class' => 'style-username'
        )))
        ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
            'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
            'options' => array('translation_domain' => 'FOSUserBundle'),
            'first_options' => array( 'attr' => array(
              'class' => 'style-password',
              'placeholder' => 'CONTRASEÑA')),
            'second_options' => array(  'attr' => array(
              'class' => 'style-password',
              'placeholder' => 'CONTRASEÑA')),
            'invalid_message' => 'fos_user.password.mismatch',
        ))
    ;
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }


    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
