<?php
//session_start();
function logIn($userName,$password){
    include_once("../Classes/databaseClass.php");
$database = new Database();
$query = "SELECT userName, password FROM user WHERE userName= :userName AND password= :password ;";
           $statement = $database->connection->prepare($query);
           $statement->bindParam(":userName", $userName);
          $statement->bindParam(":password", $password);
          

    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_OBJ);

    if (empty($result)) {
        throw new exception('No user found', 404);
        exit;
    }
    $_SESSION["userName"]= $result->$userName;
    return $result; 
}

function signUp($userName,$password){
 include_once("../Classes/databaseClass.php");
    $database = new Database();
    $query = "INSERT INTO user (userName, password, point) VALUES ('$userName','$password',0) ;";
    // $statement = $database->connection->prepare($query);
     //$statement->execute([$userName,$password]);
     $statement = $database->connection->exec($query);
      echo $statement;
 if (!$statement) {
            throw new exception('can not register user', 405);
            exit;
        }
        $_SESSION["userName"]= $userName;
        return $statement; 
}
?>