<?php
session_start();  // Start the session

// Check if the user is logged in
if (!isset($_SESSION['fName'])) {
    // Redirect to login page if not logged in
    header("Location: dashboard.php");
    exit();
}

// Database connection details
$servername = 'localhost:3307';
$dbUsername = 'root';
$dbPassword = '';
$dbname = 'fitnessbro';

// Create a connection
$con = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $height = mysqli_real_escape_string($con, $_POST['height']);
    $weight = mysqli_real_escape_string($con, $_POST['weight']);
    $bodyGoal = mysqli_real_escape_string($con, $_POST['goal']);
    $exerciseGoal = mysqli_real_escape_string($con, $_POST['exercise']);

    // Assuming you have the user ID stored in session after login
    $userID = $_SESSION['userId']; // Make sure you set this during user login

    // Prepare SQL statement to insert data into the userdata table
    $stmt = $con->prepare("INSERT INTO userdata (userID, height, weight, body, exercise) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("iisss", $userID, $height, $weight, $bodyGoal, $exerciseGoal); // "iisss" means integer, integer, string, string, string

    // Execute the statement and check for success
if ($stmt->execute()) {
    // echo "<script>alert('Data successfully submitted!');</script>";

    // echo "<script>
    //     document.addEventListener('DOMContentLoaded', function() {
    //         const form_st = document.getElementById('form-st');
    
    //         form_st.addEventListener('click', function(event) {
    //             // Prevent the form from submitting (page reload)
    //             event.preventDefault();
    
    //             // Show the start section and hide the form
    //             document.querySelector('.start_con').style.display = 'block';
    //             document.querySelector('.fitness-form').style.display = 'none'; // Assuming 'fitness-form' is the class of the form
    //         });
    //     });
    // </script>";
    echo "<script>window.location.href = 'activities.html';</script>";

} else {
    echo "<script>alert('Error submitting data: " . htmlspecialchars($stmt->error) . "');</script>";
}

    $stmt->close();
}

$con->close(); // Close the database connection
?>