// array for users 
let users = JSON.parse(localStorage.getItem("users")) || [];

// Signup Form 
const signupForm = document.querySelector("#form");
if (window.location.pathname.includes("signUp.html") && signupForm) {
    signupForm.addEventListener("submit", function (e) {
        e.preventDefault();
        // get users info
        const name = document.getElementById("nameInput").value;
        const nickname = document.getElementById("nickInput").value;
        const phone = document.getElementById("numberInput").value;
        const email = document.getElementById("emailInput").value;
        const password = document.getElementById("passwordInput").value;
        const newUser = { name, nickname, phone, email, password };
        // push the information to the array "users"
        users.push(newUser);
        // update array using the JSON
        localStorage.setItem("users", JSON.stringify(users));
        // notify users
        alert("Sign-up successful!");
        window.location.href = "login.html";
    });
}

// Login Form 
const loginForm = document.querySelector("#form");
if (window.location.pathname.includes("login.html") && loginForm) {
    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();
        // get users ino
        const email = document.getElementById("emailInput").value;
        const password = document.getElementById("passwordInput").value;
        // check if users are in the array of registered users and checks if the users email and password is correct
        const userFound = users.find(
            (user) => user.email === email && user.password === password
        );

        if (userFound) {
            alert("Login successful!");
            window.location.href = "newsfeed.html";
        } else {
            alert("Invalid credentials!");
        }
    });
}
// Get modal and button elements
const logoutModal = document.getElementById('logoutModal');
const confirmLogout = document.getElementById('confirmLogout');
const cancelLogout = document.getElementById('cancelLogout');

// Function to open the logout modal
function showLogoutModal() {
  logoutModal.style.display = 'block';
}

// Function to hide the logout modal
function hideLogoutModal() {
  logoutModal.style.display = 'none';
}

// Confirm logout
confirmLogout.addEventListener('click', () => {
  // Redirect to logout logic or login page
  window.location.href = 'login.html'; // Replace with your actual logout process
});

// Cancel logout
cancelLogout.addEventListener('click', hideLogoutModal);

// Optional: Close modal if clicked outside of it
window.addEventListener('click', (event) => {
  if (event.target === logoutModal) {
    hideLogoutModal();
  }
});
