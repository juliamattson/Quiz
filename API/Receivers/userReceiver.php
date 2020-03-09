<?php

session_start();
include("../Handlers/userHandler.php");

if(isset($_SERVER['REQUEST_METHOD'])) {

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

      if(isset($_POST["lognin"])) {

        $userName = $_POST["userName"];
        $password = $_POST["password"];

         //echo logIn($userName,$password);
         echo 1;


      }
    }
}
    ?>