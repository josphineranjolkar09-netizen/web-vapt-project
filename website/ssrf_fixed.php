<?php
$message = "";

$allowed_url = "http://127.0.0.1/";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $url = trim($_POST["url"] ?? "");

    if ($url !== $allowed_url) {
        $message = "Blocked: URL is not on the approved allowlist.";
    } else {
        $context = stream_context_create([
            "http" => ["timeout" => 3]
        ]);

        $response = @file_get_contents($allowed_url, false, $context);

        if ($response === false) {
            $message = "Request failed.";
        } else {
            $message = htmlspecialchars(
                substr($response, 0, 500),
                ENT_QUOTES,
                "UTF-8"
            );
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fixed SSRF Lab</title>
</head>
<body>
    <h1>SSRF Fixed Demonstration</h1>
    <p>Only the exact approved URL is allowed.</p>

    <form method="POST">
        <label>URL:
            <input type="url" name="url" required>
        </label>
        <button type="submit">Fetch URL</button>
    </form>

    <pre><?= $message ?></pre>
</body>
</html>
