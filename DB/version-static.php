<?php

class DB3 {

    private string $server = 'localhost';
    private string $db = 'live';
    private string $user = 'root';
    private string $pwd = '';

    private static ?PDO $dbInstance = null;

    // Conctructeur
    public function __construct(){
        try {
            self::$dbInstance = new PDO("mysql:host=$this->server;dbname=$this->db;charset=utf8", $this->user , $this->pwd);
            self::$dbInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public static function getInstance(): ?PDO {
        if (is_null(self::$dbInstance)) {
            new self();
        }
        return self::$dbInstance;
    }

    public function __clone() {}

}