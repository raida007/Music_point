<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Music Point</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">Music Point</div>
        <nav>
            <ul>
                <li><a href="shop.php" class="active">Shop</a></li>
                <li>
                    <!-- Profile Link -->
                   <?php if (isset($_SESSION['username'])): ?>
                        <a href="profile.php">Profile</a>
                        <?php else: ?>
                        <a href="login-register.html">Profile</a>
                    <?php endif; ?> 
                   
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Welcome to the Shop</h1>
        <p>Browse our collection of music and albums.</p>
    </main>
    <footer>
        <p>&copy; 2024 Music Point. All rights reserved.</p>
    </footer>
</body>
</html>
