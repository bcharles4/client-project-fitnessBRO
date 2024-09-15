document.addEventListener("DOMContentLoaded", function() {
    const buttons = [
        { id: 'output', resultsId: 'results1' },
        { id: 'output2', resultsId: 'results2' },
        { id: 'output3', resultsId: 'results3' }
    ];

    buttons.forEach(function(buttonObj) {
        const button = document.getElementById(buttonObj.id);
        const resultsDiv = document.getElementById(buttonObj.resultsId);

        if (button && resultsDiv) {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevents the default button behavior

                // Hide all buttons
                document.querySelectorAll('.btn_con button').forEach(function(btn) {
                    btn.style.display = 'none';
                });

                // Show the corresponding results div
                resultsDiv.style.display = 'block';
            });
        } else {
            console.error("Button or results not found for: " + buttonObj.id);
        }
    });
});


// document.addEventListener("DOMContentLoaded", function() {
//     const progress = document.getElementById("output");

//     progress.addEventListener('click', function(event) {
//         event.preventDefault(); // Prevents the default button behavior

//         document.getElementById("output").style.display = 'none';
//         document.querySelector(".results").style.display = 'block';
//     });
// });

// document.addEventListener("DOMContentLoaded", function() {
//     const progress = document.getElementById("output2");

//     progress.addEventListener('click', function(event) {
//         event.preventDefault(); // Prevents the default button behavior

//         document.getElementById("output2").style.display = 'none';
//         document.querySelector(".results").style.display = 'block';
//     });
// });


// document.addEventListener("DOMContentLoaded", function() {
//     const progress = document.getElementById("output3");

//     progress.addEventListener('click', function(event) {
//         event.preventDefault(); // Prevents the default button behavior

//         document.getElementById("output3").style.display = 'none';
//         document.querySelector(".results").style.display = 'block';
//     });
// });




// const start = document.getElementById("start-exe");
// const exerciseSelect = document.getElementById("exercise");
// const exerciseContent = document.getElementById("exerciseContent");

// // Hide all sections initially
// const hideAllSections = () => {
//     const sections = exerciseContent.querySelectorAll("div");
//     sections.forEach(section => {
//         section.style.display = 'none';
//     });
// };

// start.addEventListener("click", () => {
//     // Get the selected exercise type
//     const selectedExercise = exerciseSelect.value;

//     // Hide all sections initially
//     hideAllSections();

//     // Show the selected exercise section
//     if (selectedExercise === "Cardio") {
//         exerciseContent.querySelector('.act_head-cardio').style.display = 'block';
//     } else if (selectedExercise === "Balance") {
//         exerciseContent.querySelector('.act_head-balance').style.display = 'block';
//     } else if (selectedExercise === "Strength Training") {
//         exerciseContent.querySelector('.act_head-muscle').style.display = 'block';
//     }
// });




