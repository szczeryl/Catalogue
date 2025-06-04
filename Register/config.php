<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'login_db');
define('DB_USER', 'root');
define('DB_PASS', ''); // default for XAMPP

// Start session
session_start();

// Create database connection
try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
