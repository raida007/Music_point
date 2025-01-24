<?php
// Database configuration
$host = 'localhost'; // Database host (usually localhost)
$username = 'root';  // Database username (default for XAMPP)
$password = '';      // Database password (default is empty for XAMPP)
$database = 'music_point'; // Replace with your database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
