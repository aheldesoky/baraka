<?php

class Model_Client extends Zend_Db_Table_Abstract {
    protected $_name = 'client';
    
    public function createClient($clientName, $clientEmail, $clientAddress) {
        ///echo 'Valuues = '.$clientName.$clientAddress.$clientEmail;exit();
        //$this->insert(array($clientName, $clientAddress, $clientEmail));
        $rowClient = $this->createRow();
        if($rowClient){
            
            $rowClient->client_name = $clientName;
            $rowClient->client_email = $clientEmail;
            $rowClient->client_address = $clientAddress;
            
            $rowClient->save();
            
            return $rowClient;
        } else {
            throw new Zend_Exception('لم يتم اضافة العميل');
        }
    }
    
    public static function getClients() {
        $clientModel = new self();
        $select = $clientModel->select();
        $select->order(array('client_id'));
        
        return $clientModel->fetchAll($select);
    }
    
    public function getClientById($clientId){
        $clientModel = new self();
        $select = $clientModel->select();
        $select->where("client_id=$clientId");
        
        return $clientModel->fetchRow($select);
    }
}

