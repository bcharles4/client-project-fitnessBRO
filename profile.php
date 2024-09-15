<?php
session_start();  // Start the session

// Check if the user is logged in
if (!isset($_SESSION['fName']) || !isset($_SESSION['userId'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
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

// Fetch the user data from the database using the userID stored in the session
$userID = $_SESSION['userId'];

$sql = "SELECT height, weight, body, exercise FROM userdata WHERE userID = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $userID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $userData = $result->fetch_assoc();
} else {
    $userData = null; // If no data found
}

$stmt->close();
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="./css/profile.css">
</head>
<body>
    <div class ="navBar">
        <ul>
            <li><a href="dashboard.php">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="activities.html">Activities</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="about.html">About Us</a></li>
        </ul>
        
        <div class="icons-con">
            <a href="logout.php">  
                <ion-icon name="log-out-sharp" id="icons" alt="Logout"></ion-icon>
            </a>
        </div>
    </div>

    <div class="containerBody">
        <br><br><br><br>
        <div class="fitness-profile">
            <h1>User Information</h1>
            <div class="userData">
                <p>Name: <span class="data"><?php echo htmlspecialchars($_SESSION['fName']); ?></span></p>
                <?php if ($userData): ?>
                    <p>Height: <span class="data"><?php echo htmlspecialchars($userData['height']); ?> cm</span></p>
                    <p>Weight: <span class="data"><?php echo htmlspecialchars($userData['weight']); ?> kg</span></p>
                    <p>Body Goal: <span class="data"><?php echo htmlspecialchars($userData['body']); ?></span></p>
                    <p>Mode of Exercise: <span class="data"><?php echo htmlspecialchars($userData['exercise']); ?></span></p>
                    <p>Status: <span class="data">Active</span></p>
                <?php else: ?>
                    <h3>No data available for this user.</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
