<?php

include_once ('Db.php');


try
{
    $dirname = dirname(__FILE__);
    $db = new Db('sqlite:'.$dirname.'/databaseO.db');

    $meals = $db->getMeals();
    echo json_encode($meals);
}
catch (Exception $exception) {
    http_response_code(400);

    echo json_encode(['error'=> $exception->getMessage()]);
}
