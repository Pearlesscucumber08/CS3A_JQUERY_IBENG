// Users array to hold user records in-memory
let users = JSON.parse(localStorage.getItem("users")) || [];

// Signup Form Logic
const signupForm = document.querySelector("#form");
if (window.location.pathname.includes("signUp.html") && signupForm) {
    signupForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.getElementById("nameInput").value;
        const nickname = document.getElementById("nickInput").value;
        const phone = document.getElementById("numberInput").value;
        const email = document.getElementById("emailInput").value;
        const password = document.getElementById("passwordInput").value;

        const newUser = { name, nickname, phone, email, password };
        users.push(newUser);
        localStorage.setItem("users", JSON.stringify(users));

        alert("Sign-up successful!");
        window.location.href = "loggedIn.html";
    });
}

// Login Form Logic
const loginForm = document.querySelector("#form");
if (window.location.pathname.includes("login.html") && loginForm) {
    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const email = document.getElementById("emailInput").value;
        const password = document.getElementById("passwordInput").value;

        const userFound = users.find(
            (user) => user.email === email && user.password === password
        );

        if (userFound) {
            alert("Login successful!");
            window.location.href = "loggedIn.html";
        } else {
            alert("Invalid credentials!");
        }
    });
}
