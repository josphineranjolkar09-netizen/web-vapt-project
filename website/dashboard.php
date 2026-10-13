<?php
session_set_cookie_params([
    'httponly' => true,
    'samesite' => 'Lax',
    'secure' => true,
    'path' => '/'
]);

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

<p>Welcome, testuser!</p>

<p>You are authenticated.</p>

<p><a href="logout.php">Logout</a></p>




</body>
</html>
