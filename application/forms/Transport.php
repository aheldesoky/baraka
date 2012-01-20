<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transport
 *
 * @author ahmadeldesoky
 */
class Form_Transport extends Zend_Form {
    public function init() {
        $this->setMethod('post');
        
        $container20 = new Zend_Form_Element_Checkbox('container_20');
        $container20->setAttrib('checked', FALSE);
        $this->addElement($container20);
        
        $numberOfContainer20 = new Zend_Form_Element_Text('number_of_container_20');
        $numberOfContainer20->setRequired(TRUE);
        $numberOfContainer20->setLabel('عدد الحاويات 20');
        $numberOfContainer20->setAttrib('size', 15);
        $this->addElement($numberOfContainer20);
        
        $container40 = new Zend_Form_Element_Checkbox('container_40');
        $container40->setAttrib('checked', FALSE);
        $this->addElement($container40);
        
        $numberOfContainer40 = new Zend_Form_Element_Text('number_of_container_40');
        $numberOfContainer40->setRequired(TRUE);
        $numberOfContainer40->setLabel('عدد الحاويات 40');
        $numberOfContainer40->setAttrib('size', 15);
        $this->addElement($numberOfContainer40);
        
        $truckType = new Zend_Form_Element_Select('truck_type');
        $truckType->setRequired(TRUE);
        $truckType->setLabel('نوع الشاحنه');
        
        $this->addElement($truckType);
        
    }
}

?>
