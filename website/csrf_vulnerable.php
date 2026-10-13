<?php
session_start();
include "db.php";

if (!isset($_SESSION["user_id"])) {
    die("Please log in first.");
}

$user_id = $_SESSION["user_id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];

    $stmt = $conn->prepare(
        "UPDATE users SET email = ? WHERE id = ?"
    );

    $stmt->bind_param("si", $email, $user_id);
    $stmt->execute();

    $message = "Email updated successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CSRF Vulnerable Lab</title>
</head>
<body>

<h1>Change Email</h1>

<?php
if (isset($message)) {
    echo "<p>$message</p>";
}
?>

<form method="POST">

    <label>New Email:</label><br>
    <input type="email" name="email" required><br><br>

    <input type="submit" value="Change Email">

</form>

</body>
</html>
