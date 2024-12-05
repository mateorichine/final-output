<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT id, password_hash FROM users WHERE username = ?');
    if ($stmt) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $passwordHash);
            $stmt->fetch();
            if (password_verify($password,$passwordHash)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username;
               header("Location: ./dashboard.php");
               exit;
            } else{
                echo "Invalid credentails.";
            }
        } else {
            echo "User not found.";
        }
        $stmt->close();
    } else {
        echo "Statement preperation failed!"; 
    }
}
?>
<form method="post">
    <input type="text" name="username" placeholder="username" required><br>
    <input type="password" name="password" placeholder="password" required><br>
    <button type="submit">login</button>
</form>