<?php

class UserController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->_redirect('/user/list');
    }

    public function preDispatch() 
    {
        $auth = Zend_Auth::getInstance();
        if(!$auth->hasIdentity()){
            $this->_redirect('/auth/login');
        }
        
    }
    
    public function createAction()
    {
        $userForm = new Form_User();
        if ($this->_request->isPost()) {
            if ($userForm->isValid($_POST)) {
                $userModel = new Model_User();
                $userModel->createUser(
                $userForm->getValue('username'),
                $userForm->getValue('password'),
                $userForm->getValue('first_name'),
                $userForm->getValue('last_name'),
                $userForm->getValue('role')
                );
                return $this->_redirect('/user/list');
            }
        }
        
        $this->view->userForm = $userForm;
    }

    public function listAction() {
        $currentUsers = Model_User::getUsers();
        if($currentUsers->count() > 0)
            $this->view->currentUsers = $currentUsers;
        else
            $this->view->currentUsers = NULL;
    }

}


