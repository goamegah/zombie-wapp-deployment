<?php
include_once ('Db.php');

try{
    $database = new Db("mysql:host=db;port=3306;dbname=meal", "php_docker", "password");

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
