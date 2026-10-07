<?php
session_start();

if (!isset($_SESSION["username"])) {
    die("Access denied. Please login first.");
}

$username = htmlspecialchars($_SESSION["username"], ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Web VAPT Project</title>
</head>
<body>

    <h1>Dashboard</h1>

    <p>Welcome, <?php echo $username; ?>!</p>

    <p>You are authenticated.</p>

</body>
</html>
