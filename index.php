<?php
require 'version-objet.php';
require './Classes/Utilisateurs.php';
require './Classes/Clients.php';
require './Classes-static/Utilisateurs-static.php';
require './Classes-static/Clients-static.php';

// Creation de la connexion
$database = new DB('localhost', 'live', 'root', '');
$link = $database->getDbLink();

$utilisateurs = new Utilisateurs($link);
$clients = new Clients($link);


$utilisateursStatic = new UtilisateursStatic();
$clientsStatic = new ClientsStatic();
