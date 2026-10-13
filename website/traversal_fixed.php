<?php
$allowed_files = [
    "welcome.txt",
    "info.txt"
];

$file = $_GET["file"] ?? "";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Fixed Directory Traversal Lab</title>
</head>
<body>

<h1>Secure File Access</h1>

<?php

if ($file == "") {
    echo "<p>Please select a file.</p>";
} elseif (!in_array($file, $allowed_files)) {
    echo "<p>Access denied.</p>";
} else {
    $content = file_get_contents($file);
    echo "<pre>" . htmlspecialchars($content) . "</pre>";
}

?>

</body>
</html>
