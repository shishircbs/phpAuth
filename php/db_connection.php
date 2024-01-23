<?php

// db_connection.php

$host = 'localhost';
$user = 'root';
$password = 'your_password';
$database = 'my_database';

// Create a connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}