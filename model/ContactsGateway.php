<?php

Class ContactsGateway{
    
  public function selectAll($conn){
      $sql = "SELECT * FROM contacts";
      $result = mysqli_query($conn, $sql);
      $contacts = array();
      
      while ( ($obj = mysqli_fetch_object($result)) !=  null){
          
          $contacts[]=$obj;
          
                  
      }
      return $contacts;
  }  
    
}




?>


        
      