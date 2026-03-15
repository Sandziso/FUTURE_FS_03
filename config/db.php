<?php
// config/db.php - Database configuration for Grass Cutting Services

// ===== DATABASE CONFIGURATION =====
// Update these values to match your hosting environment
$db_host = 'localhost';      // Usually 'localhost' for local development
$db_user = 'root';           // Your database username (default for XAMPP/WAMP is 'root')
$db_pass = '';               // Your database password (default for XAMPP/WAMP is empty)
$db_name = 'grass_cutting';  // The name of the database you create for this website

// ===== CREATE CONNECTION =====
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// ===== CHECK CONNECTION =====
if ($conn->connect_error) {
    // If connection fails, show error and stop script execution
    die("Database connection failed: " . $conn->connect_error);
}

// ===== SET CHARACTER SET =====
// Ensures proper handling of special characters
$conn->set_charset("utf8");