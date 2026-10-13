<?php
$username = $_POST["username"] ?? "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($username !== "") {
        $message = "Login request received securely.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fixed Cryptographic Failures Lab</title>
</head>
<body>

<h1>Secure Login Lab</h1>

<?php
if ($message !== "") {
    echo "<p>" . htmlspecialchars($message) . "</p>";
}
?>

<form method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>

</body>
</html>
