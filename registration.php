<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password_confirm'];

    if ($password !== $passwordConfirm) {
        die('password do not match.');
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare('INSERT INTO users (username, password_hash) VALUES (?, ?)');
    if ($stmt) {
        $stmt->bind_param('ss', $username, $passwordHash);
        if ($stmt->execute()) {
            echo"Registration succesful <a href='login.php'>Login here</a";
    } else {
        echo"Error: " . $conn->error;
    }
    $stmt->close();
 } else {
    echo"Statement preparation failed";
 }
}
?>
<form method="post">
    <input type="text" name="username" placeholder="'username" required><br>
    <input type="password" name="password" placeholder="'password" required><br>
    <input type="password" name="password_confirm" placeholder="'Confirm Password" required><br>
    <button type="submit">Register</button>
</form>

