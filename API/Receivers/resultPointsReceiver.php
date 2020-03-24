<?php

session_start();
include_once("../Classes/databaseClass.php");
if(isset($_SERVER['REQUEST_METHOD'])) {

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST["power"])) {
            $database = new Database();
            
            $query="UPDATE user
            SET point = point+ :power
            WHERE Id= :id ;";

         $statement = $database->connection->prepare($query);
         $statement->bindParam(":power", $_POST["power"] );
         $statement->bindParam(":id", $_SESSION["id"]);
         $statement->execute();
          
   
          }else {
              throw new Exception('Can not save to the database', 405);
  
        }
      }
}
  