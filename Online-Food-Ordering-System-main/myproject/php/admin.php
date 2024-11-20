<?php


session_start();


if (!isset($_SESSION['user_id']) || !isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header('Location: login.php');
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
        <nav>
            <a href="../index.html">Home</a>
            <a href="admin-orders.php">Admin Orders</a>
            <a href="admin-menu.php">Admin Menu</a>
            <a href="admin-users.php">Admin Users</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <main>
        <h2>Welcome, Admin</h2>
        <p>Manage the site from here.</p>

    </main>
    <script src="../js/scripts.js"></script>
</body>
</html>
