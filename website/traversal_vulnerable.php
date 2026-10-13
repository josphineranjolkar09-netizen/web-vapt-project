<?php
$file = $_GET["file"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Directory Traversal Lab</title>
</head>
<body>

<h1>Directory Traversal Lab</h1>

<?php
if ($file != "") {
    echo "<h3>Requested File:</h3>";
    echo "<pre>";
    echo file_get_contents($file);
    echo "</pre>";
}
?>

</body>
</html>
