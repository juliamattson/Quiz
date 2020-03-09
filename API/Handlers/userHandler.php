<?php
session_start();
include("../Classes/databaseClass.php");
//$database=new db;
function logIn($userName,$password){
$q = "SELECT userName FROM user WHERE userName= :userName AND password= :password ;";
          $query = $this->db->link->prepare($q);
          $query->bindParam(":email", $userName);
          $query->bindParam(":password", $password);
          
          
          $query->execute();
          $count=$query->rowCount();
          $data=$query->fetch(PDO::FETCH_OBJ);

         if ($count=0){
             return false;
         }

         else {
             $_SESSION["userName"]=$userName;
             return true;
}
}

?>