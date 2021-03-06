<?php
/**
 * Created by PhpStorm.
 * User: Hoang Ngo
 * Date: 3/7/2017
 * Time: 9:10 PM
 */
namespace AppBundle\Form;

use ClassesWithParents\E;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('email', EmailType::class)
            ->add('plainPassword', RepeatedType::class,[
                'type' =>PasswordType::class,
                'first_options'=>['label'=>'Password'],
                'second_options'=>['label'=>'Confirm Password'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class'=>'AppBundle\Entity\User',
        ]);
    }
}