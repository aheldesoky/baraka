<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoadSkin
 *
 * @author ahmadeldesoky
 */
class Zend_View_Helper_LoadSkin extends Zend_View_Helper_Abstract {
    public function loadSkin($skin) {
        $skinData = new Zend_Config_Xml('./skins/'.$skin.'/skin.xml');
        $stylesheets = $skinData->stylesheets->stylesheet->toArray();
        
        //append each stylesheet
        if(is_array($stylesheets)){
            foreach ($stylesheets as $stylesheet) {
                $this->view->headLink()->appendStylesheet('/baraka/public/skins/'.$skin.'/css/'.$stylesheet);
            }
        }
        
    }
}

?>
