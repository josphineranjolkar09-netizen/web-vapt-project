<?php
session_start();
include "db.php";

/*
 * For this lab, the logged-in user's ID is stored in the session.
 * In a real application, this would be set after successful login.
 */
$current_user_id = $_SESSION["user_id"] ?? null;

if (!$current_user_id) {
    die("Access denied. Please log in.");
}

$result = mysqli_query(
    $conn,
    "SELECT id, username, email FROM users WHERE id = " . (int)$current_user_id
);

$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fixed IDOR Lab</title>
</head>
<body>

<h1>User Profile</h1>

<?php if ($user): ?>

    <p>User ID: <?php echo htmlspecialchars($user["id"]); ?></p>
    <p>Username: <?php echo htmlspecialchars($user["username"]); ?></p>
    <p>Email: <?php echo htmlspecialchars($user["email"]); ?></p>

<?php else: ?>

    <p>User not found.</p>

<?php endif; ?>

</body>
</html>
