<?php

class dbh {
    protected function connect() {
        try {
            $user = "root";
            $pwd = "";
            $dbh = new PDO('mysql:host=localhost;dbname=demotest', $user, $pwd);
            return $dbh;
        } catch (PDOException $e) {
            echo "Error!: ". $e->getMessage() . "<br>";
            die();
        }
    }
}