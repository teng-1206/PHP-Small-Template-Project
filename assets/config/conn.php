<?php
/**
 * Database Connection
 * 
 * This file establishes a connection to the database using the 
 * constants defined in config.php.
 */

// --- 1. MySQLi CONNECTION (Optional) ---
$conn_mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);        

if ($conn_mysqli->connect_error) {
    // In production, you might want to log this instead of dying
    error_log("MySQLi Connection failed: " . $conn_mysqli->connect_error);
}

// --- 2. PDO CONNECTION (Recommended) ---
try {
    $conn = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS
    );
    
    // Set error mode and default fetch mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch(PDOException $ex) {
    // Handle connection error safely
    die("Database connection failed. Please check your configuration.");
}
?>