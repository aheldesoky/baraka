<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author ahmadeldesoky
 */
class Form_Client extends Zend_Form {
    public function init() {
        $this->setMethod('post');
        $id = $this->createElement('hidden', 'id');
        
        $clientName = $this->createElement('text', 'client_name');
        $clientName->setLabel('اسم العميل :');
        $clientName->setRequired(TRUE);
        $clientName->setAttrib('size', 40);
        $this->addElement($clientName);
        
        $clientEmail = $this->createElement('text', 'client_email');
        $clientEmail->setLabel('البريد الالكترونى :');
        $clientEmail->addValidator(new Zend_Validate_EmailAddress());
        $clientEmail->addFilters(array(new Zend_Filter_StringTrim(), new Zend_Filter_StringToLower()));
        $clientEmail->setAttrib('size', 40);
        $clientEmail->setRequired(TRUE);
        $this->addElement($clientEmail);
        
        
        $clientAddress = $this->createElement('textarea', 'client_address');
        $clientAddress->setLabel('عنوان العميل :');
        $clientAddress->setAttrib('rows', 5);
        $clientAddress->setAttrib('cols', 30);
        $this->addElement($clientAddress);
        
        $submit = $this->addElement('submit', 'submit', array('label' => 'اضافة'));
        
    }
}

?>
