<?php
    // ! MySQLi 
    $conn = new mysqli($config['db']['db1']['host'], $config['db']['db1']['username'], $config['db']['db1']['password'], $config['db']['db1']['dbname']);        
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // ! PDO
    try {
        $conn = new PDO(
            "mysql:host=" . $config[ 'db' ][ 'db1' ][ 'host' ] . ";dbname=" . $config[ 'db' ][ 'db1' ][ 'dbname' ] . ";charset=utf8mb4",
            $config[ 'db' ][ 'db1' ][ 'username' ],
            $config[ 'db' ][ 'db1' ][ 'password' ]
        );
        $conn->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch( PDOException $ex ) {
        die( "Connection failed: " . $ex->getMessage() );
    }
?>