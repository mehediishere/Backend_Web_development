<?php

class DB {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "demotest";

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception // the error mode isn't strictly necessary, but it is advised to add it. This way PDO will inform you of all MySQL errors by means of throwing the PDOException.
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // this will fetch data from database as array (something like that >.<)
        return $pdo;
    }
}

// dsn -> data source name 
// dbName -> database name 
// pwd -> password 