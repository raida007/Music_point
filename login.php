<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = ""; // Default password for XAMPP
$dbname = "music_point";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username exists in the database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the entered password with the hashed password in the database
       
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['username'] = $user['username'];
            echo "<script>
                alert('Login successful! Welcome, " . $user['fullname'] . ".');
                window.location.href = 'index.php';
            </script>";
        } else {
            echo "Invalid password. Please try again.";
        }
        
        
        
    } else {
        echo "No account found with that username.";
    }
}

$conn->close();
?>
