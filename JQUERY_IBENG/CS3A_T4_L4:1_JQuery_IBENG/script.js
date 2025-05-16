var credentials = [
  {
      username: "Department Head",
      password: "SiEsD3ptH34d"
  },
  {
    username: "Faculty",
    password:"SiEsF4cu1ty"
  },
  {
    username: "Student Officer",
    password:"#CCSOAko"
  },
  {
    username: "Student",
    password:"3SapatNa!"
  },

]

function getUserInfo() {
  var username = document.getElementById('username').value
  var password = document.getElementById('password').value

  for (var i = 0; i < credentials.length; i++) {
      if (username == credentials[i].username && password == credentials[i].password) {
          alert("Congratulation, You're Logged in.");
          userprompt(username);
          return;
      }
  }
  alert("Incorrect username or password");
}

function userprompt(username) {
  switch (username) {
    case "Department Head":
      alert("Welcome, Department Head");
      break;
    case "Faculty":
      console.log("Welcome, Faculty");
      break;
    case "Student Officer":
      console.log("Welcome, Student Officer");
      break;
    case "Student":
      console.log("Welcome, Student");
      break;
    default:
      console.warn("Access denied");
  }
}
