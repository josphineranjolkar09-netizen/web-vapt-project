<?php
$username = $_GET["username"] ?? "";
$password = $_GET["password"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cryptographic Failures Lab</title>
</head>
<body>

<h1>Cryptographic Failures Lab</h1>

<p>Username: <?php echo $username; ?></p>
<p>Password: <?php echo $password; ?></p>

</body>
</html>
