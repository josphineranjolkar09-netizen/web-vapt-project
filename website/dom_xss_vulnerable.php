<!DOCTYPE html>
<html>
<head>
    <title>DOM XSS Lab</title>
</head>
<body>

<h1>DOM XSS Lab</h1>

<p id="output"></p>

<script>

const input = decodeURIComponent(location.hash.substring(1));

    document.getElementById("output").innerHTML = input;
</script>

</body>
</html>
