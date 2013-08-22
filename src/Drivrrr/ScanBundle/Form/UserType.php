<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MONKEY D.LUFFY
 * Date: 6/10/13
 * Time: 3:45 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Drivrrr\ScanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('email', 'email');
        $builder->add('username', 'text');
        $builder->add('password', 'repeated', array(
                'first_name'  => 'password',
                'second_name' => 'confirm',
                'type'        => 'password',
            ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver){
        $resolver->setDefaults(array(
                'data_class' => 'Drivrrr\ScanBundle\Entity\UserAcc'
            ));
    }

    public function getName(){
        return 'user';
    }
}