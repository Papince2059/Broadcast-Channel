<?php
// Database connection parameters
$servername = 'localhost'; // Change to your database server hostname
$username = 'root'; // Change to your database username
$password = ''; // Change to your database password
$database = 'ABC'; // Change to your database name

// Create connection
// $conn = new mysqli($servername, $username, $password, $database);
$conn=mysqli_connect($servername,$username,$password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
