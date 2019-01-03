<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class UserType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',     TextType::class)
            ->add('codePostal',     IntegerType::class)
            ->add('ville',     TextType::class)
            ->add('numeroTel',     IntegerType::class)
            ->add('fax',    IntegerType::class)
            ->add('email',     EmailType::class)
            //->add('responsable',     TextType::class)
            ->add('password',   PasswordType::class)
            ->add('save',      SubmitType::class)
        ;
    }

}