<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', 'xsslab@example.com', 'labtest')";

    mysqli_query($conn, $sql);
}

$result = mysqli_query($conn, "SELECT username FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stored XSS Lab</title>
</head>
<body>

<h1>Stored XSS Lab</h1>

<form method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required>
    <input type="submit" value="Save">
</form>

<h2>Stored Users</h2>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<p>Username: " . $row["username"] . "</p>";
}
?>

</body>
</html>
