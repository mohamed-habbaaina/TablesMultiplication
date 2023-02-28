<?php
    // la connexion à la DB.

    $servername = 'localhost';
    $username_b = 'root';
    $password_b = '';
    $database = 'multiplication';

    try {
        $db = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", "$username_b", "$password_b");
    }
    catch(PDOException $e){
         echo 'ERROR: ' . $e->getMessage();
    }