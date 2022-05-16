<?php 
    $host = 'localhost';
    $dbname = 'phpproject';
    $user = 'root';
    $pass = '';

    try {
        $conn = new mysqli($host, $user, $pass, $dbname);
    } catch (\mysqli_sql_exception $e) {
        throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
    }
	// OR
	// Check connection
	/*if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}*/
	
    unset($host, $dbname, $user, $pass);