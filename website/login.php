<?php


session_start();

include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepared statement to prevent SQL Injection
    $stmt = $conn->prepare(
        "SELECT * FROM users WHERE username = ? AND password = ?"
    );

    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();

    $result = $stmt->get_result();


if ($result->num_rows > 0) {
    $_SESSION["username"] = $username;
    $message = "Login successful!";
}


else {
        $message = "Invalid username or password.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Web VAPT Project</title>
</head>
<body>

    <h1>Login</h1>

    <?php
    if ($message != "") {
        echo "<p>$message</p>";
    }
    ?>

    <form method="POST" action="">

        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">

    </form>

    <br>

    <a href="index.php">Back to Home</a><br>
    <a href="register.php">Create an Account</a>

</body>
</html>
