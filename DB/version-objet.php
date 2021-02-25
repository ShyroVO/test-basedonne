<?php
class DB2 {

    private string $server;
    private string $db;
    private string $user;
    private string $pwd;
    private ?PDO $dbLink;

    public function __construct(string $serv, string $db, string $user, string $pwd){
        $this->server = $serv;
        $this->db = $db;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->dbLink = $this->connect();
    }

    private function connect() : ?PDO {
        try {
            $bdd = new PDO("mysql:host=$this->server;dbname=$this->db;charset=utf8", $this->user , $this->pwd);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $exception) {
            return null;
        }
        return $bdd;
    }

    public function getDbLink() {
        if (is_null($this->dbLink)) {
            $this->dbLink = $this->connect();
        }

        return $this->dbLink;
    }

}