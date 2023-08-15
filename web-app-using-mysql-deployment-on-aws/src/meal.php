<?php

include_once ('Db.php');


try
{
    # connect to db
    $db = new Db("mysql:host=db;port=3306;dbname=meal", "php_docker", "password");
    
    $meals = $db->getMeals();
    echo json_encode($meals);
}
catch (Exception $exception) {
    http_response_code(400);

    echo json_encode(['error'=> $exception->getMessage()]);
}
