<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $url = $_POST["url"] ?? "";

    if (filter_var($url, FILTER_VALIDATE_URL)) {
        $context = stream_context_create([
            "http" => ["timeout" => 3],
            "https" => ["timeout" => 3]
        ]);

        $response = @file_get_contents($url, false, $context);

        if ($response === false) {
            $message = "Request failed.";
        } else {
            $message = htmlspecialchars(
                substr($response, 0, 500),
                ENT_QUOTES,
                "UTF-8"
            );
        }
    } else {
        $message = "Please enter a valid URL.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SSRF Lab</title>
</head>
<body>
    <h1>SSRF Vulnerability Demonstration</h1>
    <p>Enter a URL for the server to request.</p>

    <form method="POST">
        <label>URL:
            <input type="url" name="url" required>
        </label>
        <button type="submit">Fetch URL</button>
    </form>

    <pre><?= $message ?></pre>
</body>
</html>
