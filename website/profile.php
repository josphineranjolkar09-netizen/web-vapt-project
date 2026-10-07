<?php
$username = $_GET["username"] ?? "";

$safe_username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile - Web VAPT Project</title>
</head>
<body>

    <h1>User Profile</h1>

    <p>Welcome, <?php echo $safe_username; ?></p>

    <br>
    <a href="index.php">Back to Home</a>

</body>
</html>
