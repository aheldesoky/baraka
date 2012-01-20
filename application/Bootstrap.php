<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initView() {
        // initialize view
        $view = new Zend_View();
        $view->doctype('XHTML1_STRICT');
        $view->headTitle('Baraka Transport CMS');
        $view->skin = 'blues';
        
        // add it to the view renderer
        $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
        $viewRenderer->setView($view);
        
        // return it, so that it can be stored by the bootstrap
        return $view;
    }
    
    protected function _initAutoLoad() {
        // Add AutoLoader empty namespace
        $autoloader = Zend_Loader_Autoloader::getInstance();
        $resourceLoader = new Zend_Loader_Autoloader_Resource(array(
            'basePath'      => APPLICATION_PATH,
            
            'namespace'     => '',
            
            'resourceTypes' => array(
                'form'  => array(
                    'path' => 'forms/',
                    'namespace' => 'Form_',
                ),
                'model' => array(
                    'path' => 'models/',
                    'namespace' => 'Model_',
                ),
            ),
        ));
        
        // Return it so that it can be stored by the bootstrap
        return $autoloader;
    }

}

