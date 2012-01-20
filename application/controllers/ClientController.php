<?php

class ClientController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->_redirect('/client/list');
    }

    public function preDispatch() {
        $auth = Zend_Auth::getInstance();
        if(!$auth->hasIdentity()){
            $this->_redirect('/auth/login');
        }
        
    }
    
    public function createAction()
    {
        $clientForm = new Form_Client();
        
        if ($this->_request->isPost()) {
            if ($clientForm->isValid($_POST)) {
                
                //echo 'Values'.$clientForm->getValue('client_name').$clientForm->getValue('client_email').$clientForm->getValue('client_address');exit();
                //echo 'client name = '.$clientForm->getValue('client_name');exit();
                
                $clientModel = new Model_Client();
                $clientModel->createClient(
                        $clientForm->getValue('client_name'),
                        $clientForm->getValue('client_email'),
                        $clientForm->getValue('client_address')
                        );  
                return $this->_redirect('/client/list');
            }
        }
        
        $this->view->clientForm = $clientForm;
    }

    
    public function listAction()
    {
        $currentClients = Model_Client::getClients();
        
        if($currentClients->count() > 0){
            $this->view->clientList = $currentClients;
        } else {
            $this->view->clientList = NULL;
        }
        
    }


}





