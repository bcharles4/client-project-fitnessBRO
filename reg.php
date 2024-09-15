<?php
// Get user inputs from the form
$name = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$pw = $_POST['password'];

// Database connection parameters
$server = 'localhost:3307';
$user = 'root';
$password = '';
$database = 'fitnessbro';

// Create a new connection
$conn = new mysqli($server, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (fName, fUsername, fEmail, fPassword) VALUES (?, ?, ?, ?)");
    
    // Hash the password before storing it
    $hashedPassword = password_hash($pw, PASSWORD_DEFAULT);
    
    // Bind parameters
    $stmt->bind_param("ssss", $name, $username, $email, $hashedPassword);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Registered Successfully!');</script>";
        header ('Location: index.html');
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
