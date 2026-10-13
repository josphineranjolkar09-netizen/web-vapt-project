<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $upload_dir = "safe_uploads/";

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    $allowed_extensions = ["jpg", "jpeg", "png", "txt"];

    $original_name = $_FILES["file"]["name"];
    $extension = strtolower(pathinfo($original_name, PATHINFO_EXTENSION));

    if (!in_array($extension, $allowed_extensions)) {
        $message = "File type not allowed.";
    } else {

        $safe_name = bin2hex(random_bytes(16)) . "." . $extension;
        $target = $upload_dir . $safe_name;

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target)) {
            $message = "File uploaded successfully.";
        } else {
            $message = "Upload failed.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fixed File Upload Lab</title>
</head>
<body>

<h1>Secure File Upload</h1>

<?php
if ($message != "") {
    echo "<p>" . htmlspecialchars($message) . "</p>";
}
?>

<form method="POST" enctype="multipart/form-data">

    <label>Select file:</label><br>
    <input type="file" name="file" required><br><br>

    <input type="submit" value="Upload">

</form>

</body>
</html>
