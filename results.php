<?php
session_start();
include('myconn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the height, weight, and body goal from the form submission
    $height = (float) $_POST['height'] / 100; // Convert height to meters
    $current_weight = (float) $_POST['weight']; // Get the current weight from the form
    $body_goal = $_POST['goal']; // Get the user's body goal

    // Set initial values (these can be fetched from the database)
    $initial_weight = 70; // kg (You can replace this with the actual initial weight from your DB)
    $goal_weight = ($body_goal === 'Weight Loss') ? 65 : (($body_goal === 'Muscle Gain') ? 75 : 70); // Adjust goal weight based on body goal

    // Calculate initial BMI
    $initial_bmi = $initial_weight / ($height * $height);

    // Calculate current BMI
    $current_bmi = $current_weight / ($height * $height);

    // Calculate weight change for "Weight Loss" and "Muscle Gain"
    $weight_change = $initial_weight - $current_weight;

    // Calculate progress based on the selected body goal
    if ($body_goal === 'Weight Loss') {
        // Progress for weight loss goal
        $total_goal = $initial_weight - $goal_weight;
        $progress = (($initial_weight - $current_weight) / $total_goal) * 100;

        // Check if the user has passed their goal
        if ($current_weight <= $goal_weight) {
            $status = "Congratulations! You've achieved your weight loss goal!";
        } else {
            $status = "You're on your way to achieving your weight loss goal.";
        }

    } elseif ($body_goal === 'Muscle Gain') {
        // Progress for muscle gain goal
        $total_goal = $goal_weight - $initial_weight;
        $progress = (($current_weight - $initial_weight) / $total_goal) * 100;

        // Check if the user has passed their goal
        if ($current_weight >= $goal_weight) {
            $status = "Congratulations! You've achieved your muscle gain goal!";
        } else {
            $status = "You're on your way to achieving your muscle gain goal.";
        }

    } elseif ($body_goal === 'Cardiovascular Health') {
        // Progress for cardiovascular health (simplified as BMI improvement)
        $progress = 100 - abs($initial_bmi - $current_bmi);

        // You can add custom logic for cardiovascular health goals (e.g., reaching a target BMI or other metrics)
        if (abs($initial_bmi - $current_bmi) < 1) {
            $status = "Congratulations! You've achieved your cardiovascular health goal!";
        } else {
            $status = "Youre making progress on your cardiovascular health goal.";
        }

    } else {
        $progress = 0; // Default if no valid goal is selected
        $status = "Please select a valid goal.";
    }

    // Display the progress and status
    echo "<script>
    alert('Your progress for the goal of " . htmlspecialchars($body_goal) . ": " . round($progress, 2) . "%\\n" .
    "Initial BMI: " . round($initial_bmi, 2) . "\\n" .
    "Current BMI: " . round($current_bmi, 2) . "\\n" .
    "Weight change: " . round($weight_change, 2) . " kg\\n" .
    htmlspecialchars($status) . "');

    window.location.href = 'dashboard.php';

</script>";
}
?>
