<?php

class TransportController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function listAction()
    {
        $transportForm = 'List';
        
        $this->view->transportForm = $transportForm;
    }

    public function createAction()
    {
        // action body
        $clientId = $this->_request->getParam('clientId');
        
        $clientModel = new Model_Client();
        $clientRow = $clientModel->getClientById($clientId);
        $clientName = $clientRow['client_name'];
        $this->view->clientName = $clientName;
        
        $transportForm = new Form_Transport();
        $this->view->transportForm = $transportForm;
        
    }


}



