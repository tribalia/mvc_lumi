<?php

Class ContactsGateway{
    
  public function selectAll(){
      
      $dbres=mysql_query("SELECT * FROM contacts");
      
      $contacts = array();
      
      while ( ($obj = mysql_fetch_object($dbres)) !=  null){
          
          $contacts[]=$obj;
          
                  
      }
      return $contacts;
  }  
    
}




?>


        
      