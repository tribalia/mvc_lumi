 <?php
 error_reporting(E_ALL);
 ini_set('display_errors', 0);
        require_once'controller/ContactsController.php';
        $controller = new ContactsController();
        $controller->handleRequest();
?>




 