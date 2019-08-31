<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "model/ContactsService.php";

class ContactsController {
    
    private $contactsService = null;
    
    public function __construct(){
        $this->contactsService = new contactsService();
      //  se gseste in model
    }
    public function handleRequest(){
    
    $op = $_GET['op'];
    
    if(!$op){
        $this->listContacts();
    }
    if($op == 'show'){
      $this->showContact();
    }
    
        }
     public function showContact(){
       $id = $_GET['id']; 
     }

    public function listContacts(){
        
     $contacts=$this->contactsService->getAllContacts();
      include 'view/contacts.php';
    }
}

?>