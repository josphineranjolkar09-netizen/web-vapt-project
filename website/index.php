
<?php
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: geolocation=(), microphone=(), camera=()");
header("Content-Security-Policy: default-src 'self'; script-src 'self'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Web VAPT Project</title>
</head>
<body>

    <h1>Web VAPT Project</h1>

    <p>Welcome to our Web Vulnerability Assessment Project.</p>

    <h2>Website</h2>

    <a href="login.php">Login</a><br><br>
    <a href="register.php">Register</a>

</body>
</html>
