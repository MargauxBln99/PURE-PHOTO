<?php

class Db {
    private $hostname = "localhost";
    private $dbname = "test";
    private $username = "root";
    private $password = "";

    private function connect() { // méthode privée
        $db = new PDO("mysql:host=$this->hostname;dbname", $this->username, $this->password);
        return $db;
    }

    public function delete($table, $id) { // méthode publique
        $db = $this->connect();
        $deleteQuery = $db->prepare('DELETE FROM '.$table.' WHERE id = :id');
        return $deleteQuery->execute(['id' => $id]);
    }
}

$db = new Db();
// $db->delete('users', 1);
// $db->connect();

?>