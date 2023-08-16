<?php

session_start();
if (!isset($_SESSION['user'])) {
    header("Location: /login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Awesome Website</title>
</head>

<body>

    <?php include_once('snippets/header.php') ?>

    <h1>User Dashboard</h1>
    <p>Welcome,
        <?php echo $_SESSION['user']['username']; ?>
    </p>
    <p>This is your secret page! You can only see it if you are logged in.</p>
    <a href="/logout.php">Logout</a>

</body>

</html>