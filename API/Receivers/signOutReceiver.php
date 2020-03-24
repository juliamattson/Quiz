<?php

session_start();
//include("../Handlers/userHandler.php");

if(isset($_SERVER['REQUEST_METHOD'])) {

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["signOut"])) {

            unset($_POST["signOut"]);
            unset($_SESSION["userName"]);

          echo true;
   
          }else {
             unset($_POST["signup"]);
              throw new Exception('Can not register', 405);
  
        }
      }
}
   
?>