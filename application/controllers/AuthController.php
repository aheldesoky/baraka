<?php

class AuthController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->_redirect('/baraka/public/auth/login/');
    }

    public function loginAction()
    {
        
        $authentication = Zend_Auth::getInstance();
        //echo $authentication->hasIdentity(); exit();
        if($authentication->hasIdentity()){
            $this->_redirect('/');
        } else {
            $loginForm = new Form_User();
            $loginForm->setAction('/baraka/public/auth/login');
            $loginForm->setMethod('post');
            $loginForm->removeElement('first_name');
            $loginForm->removeElement('last_name');
            $loginForm->removeElement('role');
            $loginForm->removeElement('submit');
            $loginForm->addElement('submit', 'submit', array('label' => 'ادخل'));
                
        
            if($this->_request->isPost() && $loginForm->isValid($_POST)){
                $data = $loginForm->getValues();
            
                //set up the auth adapter
                $db = Zend_Db_Table::getDefaultAdapter();
                $authAdapter = new Zend_Auth_Adapter_DbTable($db, 'user', 'username', 'password');
                $authAdapter->setIdentity($data['username']);
                $authAdapter->setCredential(md5($data['password']));
                $result = $authAdapter->authenticate();
                if($result->isValid()){
                    //store Username, Firstname, Lastname of the user
                    $auth = Zend_Auth::getInstance();
                    $storage = $auth->getStorage();
                    $storage->write($authAdapter->getResultRowObject(array('username', 'first_name', 'last_name')));
                    return $this->_redirect('/');       
                } else {
                    $this->view->loginErrorMessage = 'اسم المستخدم أو كلمة المرور غير صحيحتين';
                }
            }
            $this->view->loginForm = $loginForm;
        }
    }

    public function logoutAction()
    {
        $auth = Zend_Auth::getInstance();
        $auth->clearIdentity();
        $this->view->logoutMessage = 'تم تسجيل الخروج بنجاح';
    }


}
