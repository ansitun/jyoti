<?php

/**
 * Base Admin file for AppBundle.
 *
 * @author
 *
 * @category Admin
 */
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;

class BaseAdmin extends Admin 
{
    protected $listModes = array(
        'list' => array(
            'class' => 'fa fa-list fa-fw',
        )
    );
}