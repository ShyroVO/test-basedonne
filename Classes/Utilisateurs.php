<?php
class Utilisateurs {

    private PDO $database;

    public  function __construct(PDO $database) {
        $this->database = $database;
    }

    public function getUtilisateurs() {

    }

}