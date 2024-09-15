<?php
session_start();  // Start the session

// Check if the user is logged in
if (!isset($_SESSION['fName'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    <div class="navBar">
        <!-- <img src= "./img/ftlogo.png" alt="" /> -->
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="activities.html">Activities</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="about.html">About Us</a></li>
        </ul>
        
        <div class="icons-con">
            <a href="logout.php" style="color: orangered;">  
                <ion-icon name="log-out-sharp" id="icons" alt="Logout"></ion-icon>
            </a>
        </div>
    </div>

    <div class="containerBody">
        <br><br><br><br>

        <div class="fitness-form" >
            <div class="head-fitness">
                <h1><span id="user_name">Good Day,</span> <span style="color: orangered;"><?php echo htmlspecialchars($_SESSION['fName']); ?> !</span></h1>
                <p>Fill up the following:</p>
            </div>
          
            <form action="userdata.php" method="POST">
                <div class="form-group">
                    <label for="height">Height (in cm):</label>
                    <input type="number" id="height" name="height" required>
                </div>
            
                <div class="form-group">
                    <label for="weight">Weight (in kg):</label>
                    <input type="number" id="weight" name="weight" required>
                </div>

                <div class="form-group">
                    <label for="body">Body Goal:</label>
                    <input list="body-goals" name="goal" id="goal" placeholder="Select or type your goal">
                    <datalist id="body-goals">
                        <option value="Weight Loss">
                        <option value="Muscle Gain">
                        <option value="Cardiovascular Health">
                    
                    </datalist>
                </div>
            
                <div class="form-group">
                    <label for="exercise">Exercise Goal:</label>
                    <select id="exercise" name="exercise" required>
                        <option value="Cardio">Cardio</option>
                        <option value="Balance">Balance</option>
                        <option value="Strength">Strength Training</option>
                    </select>
                </div>

                <center><input id="form_start" type="submit" value="START"  ></center>
                </form>
        </div>

        <!-- <div class="start_con" style="display: none;">
            <div class="start">

                <form action="userdata.php" method="POST">
                <p> <b>Congratulations!</b> </p>
                <p>Your data was successfuly submitted! </p>
                <p>Let's start your <b>WORKOUT's</b>  with us!</p>
               <center><button id="start-exe">START YOUR EXERCISE</button></center> 
               </form>
            </div>
        </div>
    </div> -->


    <script>

document.addEventListener("DOMContentLoaded", function(){
    gsap.registerPlugin(ScrollTrigger,TextPlugin);
    gsap.to("#user_name", {
    duration: 8,
    delay: 0.8,
    text: "Welcome to FitnessBRO,",
    ease: "power3.inOut",
    repeat: -1,
    });

});
        
    // document.getElementById('fitness-form').addEventListener('submit', function(event) {
    //     event.preventDefault(); // Prevent form from submitting immediately
        
    //     // Show start section and hide fitness form
    //     document.querySelector('.start_con').style.display = 'block';
    //     document.querySelector('.fitness-form').style.display = 'none';

    //     // Now submit the form programmatically
    //     this.submit();
    // });



        const start = document.getElementById("form_start");
        const exerciseSelect = document.getElementById("exercise");

        start.addEventListener("click", () => {
            // Get the selected exercise type
            const selectedExercise = exerciseSelect.value;

            // Store the selected exercise in local storage
            localStorage.setItem('selectedExercise', selectedExercise);

            // Redirect to the activities page
            window.location.href = 'activities.html'; 
            alert(exerciseSelect.value);
        });

      

    //     document.addEventListener('DOMContentLoaded', function() {
    //     const form_st = document.getElementById("form-st");
    
    //     form_st.addEventListener("click", function(event) {
    //         // Prevent the form from submitting (page reload)
    //         event.preventDefault();
    
    //         // Show the start section and hide the form
    //         document.querySelector(".start_con").style.display = "block";
    //         document.querySelector(".fitness-form").style.display = "none"; // Assuming "fitness-form" is the class of the form

    //         this.submit();
    //     });
    // });



    </script>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
