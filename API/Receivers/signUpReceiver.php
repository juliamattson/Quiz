<?php

session_start();
include("../Handlers/userHandler.php");

if(isset($_SERVER['REQUEST_METHOD'])) {

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["signup"])) {
  
          $userName = $_POST["userName"];
          $password = $_POST["password"];
          $result=signUp($userName,$password);
          echo json_encode($result); 
   
          }else {
             unset($_POST["signup"]);
              throw new Exception('Can not register', 405);
  
        }
      }
}
   
?>