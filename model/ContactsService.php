<?php
require_once "model/ContactsGateway.php";

class contactsService {
    private $contactsGateway = null;
    public $conn;
    
    public function openDb(){
     //mysql_connect('localhost','root','xxxxxxxx');
     //mysql_select_db('contacts');
    $this->conn = mysqli_connect("localhost","root","xxxxxxxx","contacts");
 }
    
    
    public function __construct(){
    $this->contactsGateway = new ContactsGateway();
    }
 public function getAllContacts(){
     $this->openDb();
     $res = $this->contactsGateway->selectAll($this->conn);
     return $res;
 }   
 
    
}

?>
