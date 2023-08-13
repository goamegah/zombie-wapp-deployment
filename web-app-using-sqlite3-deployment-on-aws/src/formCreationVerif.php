<?php

echo $dirname = dirname(__FILE__);
include_once ('Db.php');

try{
    $dirname = dirname(__FILE__);
    $database = new Db('sqlite:'.$dirname.'/databaseO.db');

    $username   = htmlspecialchars($_POST['username']);
    $email      = htmlspecialchars($_POST['email']);
    $title      = htmlspecialchars($_POST['title']);
    // $picture    = htmlspecialchars($_POST['image']);
    $descript   = htmlspecialchars($_POST['description']);

    $database->insertRecette($username, $email, $title, /*$picture,*/ $descript);

    header('Location:/');/* on reste sur la meme page */
}
catch(Exception $e){
    echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
    die();
}
