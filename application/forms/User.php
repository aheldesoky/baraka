<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author ahmadeldesoky
 */
class Form_User extends Zend_Form {
        public function init() {
        $this->setMethod('post');
        // create new element
        $id = $this->createElement('hidden', 'id');
        // element options
        $id->setDecorators(array('ViewHelper'));
        // add the element to the form
        $this->addElement($id);
        //create the form elements
        
        $username = $this->createElement('text','username');
        $username->setLabel('اسم المستخدم: ');
        $username->setRequired('true');
        $username->addFilter('StripTags');
        $username->addErrorMessage('The username is required!');
        $this->addElement($username);
        
        $password = $this->createElement('password', 'password');
        $password->setLabel('كلمة المرور: ');
        $password->setRequired('true');
        $this->addElement($password);
        
        $firstName = $this->createElement('text','first_name');
        $firstName->setLabel('الاسم الاول: ');
        $firstName->setRequired('true');
        $firstName->addFilter('StripTags');
        $this->addElement($firstName);
        
        $lastName = $this->createElement('text','last_name');
        $lastName->setLabel('الاسم الاخير: ');
        $lastName->setRequired('true');
        $lastName->addFilter('StripTags');
        $this->addElement($lastName);
        
        $role = $this->createElement('select', 'role');
        $role->setLabel("اختر نوع المستخدم:");
        $role->addMultiOption('User', 'user');
        $role->addMultiOption('Super', 'super');
        $this->addElement($role);

        $submit = $this->addElement('submit', 'submit', array('label' => 'اضافة'));

    }
}

?>
