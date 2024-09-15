const showPopupBtn = document.getElementById("login-button");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = document.querySelector(".form-popup .close-btn");
const loginSignupLink = document.querySelectorAll(".form-box .bottom-link a");

// it will show the login form popup
showPopupBtn.addEventListener("click", () => {
        // console.log("Button clicked");
    document.body.classList.toggle("show-popup");
    

});



// it will hide the login form popup
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

loginSignupLink.forEach(link => {
        link.addEventListener("click", (e) => {
                e.preventDefault();
                console.log(link.id);
               formPopup.classList[link.id === "signup-link" ? 'add' : 'remove'] ("show-signup");
        }); 
});

