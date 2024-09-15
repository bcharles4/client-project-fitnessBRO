<?php
session_start();  // Start the session

// Include database connection
include('myconn.php');

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Query to fetch user information, including the userID
$query = "SELECT * FROM users WHERE fUsername = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    
    // Verify the password using password_verify (assuming passwords are hashed)
    if (password_verify($password, $data['fPassword'])) {
        // Store the userID and other user information in session variables
        $_SESSION['userId'] = $data['ID'];  // Store userID in session
        $_SESSION['fName'] = $data['fName'];    // Store user's name in session for display
        $_SESSION['fUsername'] = $data['fUsername']; // Store username if needed

        // Redirect to dashboard
        header('Location: dashboard.php');
        exit();
    } else {
        // Incorrect password
        echo "<script>alert('Incorrect Username or Password');</script>";
        header('Location: login.php');
    }
} else {
    // User not found
    echo "<script>alert('User not found');</script>";
    header('Location: login.php');
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
