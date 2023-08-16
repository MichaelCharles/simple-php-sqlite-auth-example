<?php
session_start();
$db = new PDO('sqlite:../database.db');
$db->exec("CREATE TABLE IF NOT EXISTS users (
                id INTEGER PRIMARY KEY, 
                username TEXT UNIQUE, 
                password TEXT)");
?>

<header>
    <nav>
        <h1>Awesome Website</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php if (isset($_SESSION['user'])): ?>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<hr />