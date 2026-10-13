<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $upload_dir = "uploads/";

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $filename = basename($_FILES["file"]["name"]);
    $target = $upload_dir . $filename;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target)) {
        $message = "File uploaded successfully: " . $filename;
    } else {
        $message = "Upload failed.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable File Upload Lab</title>
</head>
<body>

<h1>File Upload Lab</h1>

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
