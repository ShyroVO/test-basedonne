<?php
class ClientsStatic {

    private PDO $db;

    public function getUtilisateurs() {
        $this->db = DbStatic::getLink();
    }

}