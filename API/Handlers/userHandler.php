<?php

function getAllUser() {

    include_once('./../Classes/databaseClass.php');
    $database = new Database();

    $query = <<<EOD
    SELECT * FROM user;
    EOD;

    $statement = $database->connection->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (empty($result)) {
        throw new exception('No user found', 404);
        exit;
    }
    return $result; 
}

?>