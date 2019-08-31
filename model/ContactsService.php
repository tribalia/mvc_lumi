<?php
require_once "model/ContactsGateway.php";

class contactsService {
    private $contactsGateway = null;
    
    
    public function openDb(){
     mysql_connect('localhost','root','dan');
     mysql_select_db('contacts');
 }
    
    
    public function __construct(){
    $this->contactsGateway = new ContactsGateway();
    }
 public function getAllContacts(){
     $this->openDb();
     $res = $this->contactsGateway->selectAll();
     return $res;
 }   
 
    
}

?>