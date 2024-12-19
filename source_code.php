<?php
// Vulnerable XSS Example
if (isset($_POST['name'])) {
    $name = $_POST['name']; // User input directly echoed without sanitization
    echo "<h1>Welcome, $name</h1>";
}

// Vulnerable Command Injection Example
if (isset($_GET['cmd'])) {
    $cmd = $_GET['cmd']; // User input directly passed to the system command
    system($cmd); // Executes the command
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vulnerable App</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Submit</button>
    </form>
    <p>For testing command injection, try visiting:</p>
    <code>?cmd=ls</code>
</body>
</html>
