<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['user'] = [
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'course' => $_POST['course'],
        'yearLevel' => $_POST['yearLevel'],
        'section' => $_POST['section'],
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'pinCode' => $_POST['pinCode']
    ];
    
    header("Location: registered.php");
    exit(); 
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        form {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 14px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #ec9bad; /* Light pink accent */
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #444;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.2s;
        }

        input:focus {
            border-color: #ec9bad;
            outline: none;
            box-shadow: 0 0 0 2px rgba(236, 155, 173, 0.2);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #ec9bad;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e4879f;
        }
    </style>
</head>
<body>
    <h2>User Registration</h2>

    <form method="post">
        <div>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
        </div><br>

        <div>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
        </div><br>

        <div>
            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required>
        </div><br>

        <div>
            <label for="yearLevel">Year Level:</label>
            <input type="text" id="yearLevel" name="yearLevel" required>
        </div><br>

        <div>
            <label for="section">Section:</label>
            <input type="text" id="section" name="section" required>
        </div><br>

        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div><br>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div><br>

        <div>
            <label for="pinCode">Pin Code (max 8 digits):</label>
            <input type="text" id="pincode" name="pinCode" pattern="\d{1,8}" maxlength="8" inputmode="numeric" required>
        </div><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>