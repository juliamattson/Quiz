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
try {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if($_POST['endpoint'] == 'add') {

            //här kan du lägga till post eller annan metod

        } else {
            throw new Exception('Not a valid endpoint', 501);
        }


    } else if($_SERVER['REQUEST_METHOD'] == 'GET') {

        if($_GET['endpoint'] == 'getAllUser') {

            include('./../Handlers/userHandler.php');
            $result = getAllUser();
            echo json_encode($result); 

        }else {
            throw new Exception('Not a valid endpoint', 501);
        }

    } else {
        throw new Exception('Not a valid request method', 405);
    }

} catch(Exception $e) {
    echo json_encode(array('Message' => $e->getMessage(), 'status' => $e->getCode()));
}

?>
