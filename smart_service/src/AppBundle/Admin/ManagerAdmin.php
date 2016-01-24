<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SvrCustMap
 *
 * @author ansurajk
 */
namespace AppBundle\Admin;

use AppBundle\Admin\BaseAdmin as BaseAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ManagerAdmin extends BaseAdmin
{
    // Fields too be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                 ->add('aid')
                ->add('fname')
                ->add('lname')
                ->add('passwd')
                ->add('email')
                ->add('hasAuth')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                 ->add('aid')
                ->add('fname')
                ->add('lname')
                ->add('passwd')
                ->add('email')
                ->add('hasAuth')
            ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->addIdentifier('aid')
                ->addIdentifier('fname')
                ->add('lname')
                ->add('passwd')
                ->add('email')
                ->add('hasAuth')
        ;
    }
}
