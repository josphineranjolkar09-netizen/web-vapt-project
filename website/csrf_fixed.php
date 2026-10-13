<?php
session_start();
include "db.php";

if (!isset($_SESSION["user_id"])) {
    die("Please log in first.");
}

$user_id = $_SESSION["user_id"];

if (empty($_SESSION["csrf_token"])) {
    $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        !isset($_POST["csrf_token"]) ||
        !hash_equals($_SESSION["csrf_token"], $_POST["csrf_token"])
    ) {
        die("CSRF validation failed.");
    }

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
    <title>CSRF Fixed Lab</title>
</head>
<body>

<h1>Change Email</h1>

<?php
if (isset($message)) {
    echo "<p><?php echo htmlspecialchars($message); ?></p>";
}
?>

<form method="POST">

    <input type="hidden"
           name="csrf_token"
           value="<?php echo htmlspecialchars($_SESSION["csrf_token"]); ?>">

    <label>New Email:</label><br>
    <input type="email" name="email" required><br><br>

    <input type="submit" value="Change Email">

</form>

</body>
</html>
