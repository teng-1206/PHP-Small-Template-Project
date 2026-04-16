<?php
/**
 * Global Configuration File
 * 
 * This file handles environment variable loading, path definitions,
 * and database credentials using global constants.
 */

// --- 1. SETTINGS & PATHS ---
// Define the absolute path to the root of the project
define('BASE_PATH', realpath(__DIR__ . '/../../'));

// --- 2. .ENV PARSER ---
// Load environment variables from the .env file if it exists
$envFile = BASE_PATH . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) continue;
        
        // Parse Name=Value pairs
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);
        
        // Set environment variables if not already set
        if (!getenv($name)) {
            putenv("$name=$value");
        }
    }
}

// --- 3. CORE CONSTANTS ---
// Database Credentials
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_NAME', getenv('DB_NAME') ?: 'database1');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');

// Application Info
define('APP_NAME',   getenv('APP_NAME') ?: 'PHP Template');
define('APP_ENV',    getenv('APP_ENV')  ?: 'production');
define('APP_DOMAIN', getenv('APP_DOMAIN') ?: 'localhost');
define('APP_FOLDER', getenv('APP_FOLDER') ?: '');

// --- 4. URL GENERATION ---
// Automatically build the base URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$baseUrl  = $protocol . APP_DOMAIN . '/' . (APP_FOLDER ? APP_FOLDER . '/' : '');
define('BASE_URL', $baseUrl);

// Asset URLs
define('URL_ASSETS',    BASE_URL . 'assets/');
define('URL_API',       URL_ASSETS . 'api/');
define('URL_CSS',       URL_ASSETS . 'css/');
define('URL_IMG',       URL_ASSETS . 'img/');
define('URL_JS',        URL_ASSETS . 'js/');
define('URL_PLUGINS',   URL_ASSETS . 'plugins/');
define('URL_UPLOADS',   URL_ASSETS . 'uploads/');

// --- 5. PATH DEFINITIONS ---
// Server Paths for includes
define('PATH_ASSETS',    BASE_PATH . '/assets');
define('PATH_API',       PATH_ASSETS . '/api');
define('PATH_CONFIG',    PATH_ASSETS . '/config');
define('PATH_MODULES',   PATH_ASSETS . '/modules');
define('PATH_TEMPLATES', PATH_ASSETS . '/templates');

// --- 6. INITIALIZATION ---
// Include database connection
include_once(PATH_CONFIG . '/conn.php');

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>