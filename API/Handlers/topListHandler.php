<?php

function getTopList() {

    include_once('./../Classes/databaseClass.php');
    $database = new Database();

    $query = <<<EOD
    SELECT userName, point FROM user ORDER BY point DESC LIMIT 5;
    EOD;

    $statement = $database->connection->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (empty($result)) {
        throw new exception('No toplist found', 404);
        exit;
    }
    return $result; 
}

?>