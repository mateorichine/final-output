<?php
$Servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "ccit 06";

$conn = new mysqli($Servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connected failed: " . $conn->connect_error);
}
else "connected succesfully;"

?>