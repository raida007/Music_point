<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover Music Point - your one-stop shop for all things music.">
    <meta name="keywords" content="Music, Instruments, Shop, Accessories">
    <title>Music Point</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Reset and base styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
        }

        /* Header and navigation bar styles */
        header {
            background-color: #111;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #0f0; /* Green color */
        }

        nav {
            background-color: #111;
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            color: #0f0; /* Green color */
            text-decoration: none;
            font-size: 1.2rem;
            padding: 10px 15px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover,
        nav ul li a.active {
            background-color: #222;
            border-radius: 5px;
        }

        .user-icon {
            color: #0f0;
            font-size: 1.2rem;
        }

        .user-icon a {
            color: #0f0;
            text-decoration: none;
            margin-left: 10px;
        }

        .user-icon span {
            font-weight: bold;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #111;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Music Point</div>
        <div class="user-icon">
            <?php if (isset($_SESSION['username'])): ?>
                <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                <a href="profile.php" aria-label="Go to Profile"><i class="fas fa-user"></i></a>
                <a href="logout.php" aria-label="Logout"><i class="fas fa-sign-out-alt"></i></a>
            <?php else: ?>
                <a href="login-register.html" aria-label="Login or Register"><i class="fas fa-user"></i></a>
            <?php endif; ?>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <main>
    <section class="hero">
            <div class="hero-content">
                <div class="hero-images">
                    
                    <a href="shop.html"><button aria-label="Shop now at Music Point">Shop Now</button></a>
                    <img src="music.jpg" alt="Keyboard promotional image" class="hero-image">
                </div>
                <div class="hero-text">
        <h1>Welcome to Music Point</h1>
        <p>Explore the world of music with our exclusive collection.</p>
    </main>
    
</body>
</html>
