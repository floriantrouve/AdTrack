<?php

namespace Volvo\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RequestType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user')
            ->add('babu', 'entity', array(
            		'class' => 'VolvoAdminBundle:BABU',
            		'property' => 'name'
            ))
            ->add('actionType', 'entity', array(
            		'class' => 'VolvoAdminBundle:ActionType',
            		'property' => 'name'
            ))
            ->add('requestType', 'entity', array(
            		'class' => 'VolvoAdminBundle:RequestType',
            		'property' => 'name'
            ))
            ->add('supplier', 'entity', array(
            		'class' => 'VolvoAdminBundle:Supplier',
            		'property' => 'name'
            ))
            ->add('platform', 'entity', array(
            		'class' => 'VolvoAdminBundle:Platform',
            		'property' => 'name'
            ))
            ->add('volvoUser', 'entity', array(
            		'class' => 'VolvoAdminBundle:VolvoUser',
            		'property' => 'login'
            ))
            ->add('timeSpent')
            ->add('startDate')
            ->add('endDate')
            ->add('comment')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Volvo\AdminBundle\Entity\Request'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'volvo_adminbundle_request';
    }
}
