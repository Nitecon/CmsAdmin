<?php

/**
 * Copyright (c) 2013 Will Hattingh (https://github.com/Nitecon
 *
 * For the full copyright and license information, please view
 * the file LICENSE.txt that was distributed with this source code.
 * 
 * @author Will Hattingh <w.hattingh@nitecon.com>
 *
 * 
 */
namespace zCmsAdmin\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use Zend\Form\Annotation\AnnotationBuilder;

class AssetsController extends AbstractActionController{
    
    public function indexAction() {
        $view = new ViewModel();
        
        return $view;
    }
    public function addAction() {
        $view = new ViewModel();
        
        return $view;
    }
    public function editAction() {
        $view = new ViewModel();
        
        return $view;
    }
    public function removeAction() {
        $view = new ViewModel();
        
        return $view;
    }
    public function viewAction() {
        $view = new ViewModel();
        
        return $view;
    }
    
}