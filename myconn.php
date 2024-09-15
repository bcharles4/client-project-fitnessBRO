<?php
$server = 'localhost:3307';
$user = 'root';
$password = '';
$database = 'fitnessbro';

// Create a new connection
$conn = new mysqli($server, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>