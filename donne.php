<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require './DB/version-static.php';
$db = DB3::getInstance();

$userRequest = "INSERT INTO live.user (email, username, password) VALUES ('test@example.com', 'moi', 'azer')";

if($db->exec($userRequest)) {
    $userId = $db->lastInsertId();
    $articleRequest = "INSERT INTO live.article (titre, contenu, user_fk) VALUES ('untitre', 'un contenue', $userId )";
    $db->exec($articleRequest);
};