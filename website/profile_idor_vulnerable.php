<?php
include "db.php";

$id = $_GET["id"] ?? "";

$result = mysqli_query($conn, "SELECT id, username, email FROM users WHERE id = $id");

$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>IDOR Lab</title>
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
