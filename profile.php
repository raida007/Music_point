<?php
session_start();
require 'db.php';

if (!isset($_SESSION['username'])) {
    // Redirect to login if the user is not logged in
    echo "<script>
        alert('Please log in to access your profile.');
        window.location.href = 'login-register.html';
    </script>";
    exit();
}

// Fetch user data from the database
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "<script>
        alert('User not found.');
        window.location.href = 'login-register.html';
    </script>";
    exit();
}
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Music Point</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        header .logo {
    font-size: 1.8rem;
    font-weight: bold;
    color: White; /* Black text for the title */
    position: absolute;
    left: 50%;
    transform: translateX(-50%); /* Center the logo */
}
        header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color:rgb(86, 23, 77);
}
nav ul li a:hover {
    color:rgb(220, 233, 234);
}
        body {
            background-image: url("gradient_bg.png");
            background-repeat: repeat-x;
            background-size: cover; /* Ensures the background scales properly */
            background-color: lightpink; /* Fallback color */
        }
        footer {
    text-align: center;
    padding: 20px;
    background-color:lightpink; /* Dark blue */
    color: #fff; /* White text */
    font-size: 0.9rem;
    margin-top: 20px;
    box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow above footer */
}

    </style>
</head>
<body>
    <header>
        <div class="logo">Music Point</div>
       
    </header>
    <main>
        <section class="profile">
            <h1>Welcome, <?php echo htmlspecialchars($user['fullname']); ?>!</h1>
            <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        </section>
        <div class="user-icon">
            <a href="logout.php" aria-label="Logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Music Point. All rights reserved.</p>
    </footer>
</body>
</html>
