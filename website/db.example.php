<?php

$conn = mysqli_connect("localhost", "vaptuser", "YOUR_DATABASE_PASSWORD", "vapt_db");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
