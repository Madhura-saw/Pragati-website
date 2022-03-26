<?php
$servername = "localhost";
$username = "admin";
$password = "pass@123";
$dbname = "admin";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>