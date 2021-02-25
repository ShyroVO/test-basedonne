<?php

try {
    $server = 'localhost';
    $db = 'live';
    $user = 'root';
    $pass = ''; //pas de mdp

    $bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user , $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connectés";
}
catch (PDOException $exception) {
    echo $exception->getMessage();
}
