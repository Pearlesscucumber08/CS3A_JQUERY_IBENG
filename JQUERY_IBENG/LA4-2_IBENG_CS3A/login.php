<?php
session_start(); 

if (!isset($_SESSION['user'])) {
    header("Location: register.php");
    exit();
}

$login_error = $pin_error = ""; 
$step = "login"; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['username'])) {
        if ($_POST['username'] === $_SESSION['user']['username'] && $_POST['password'] === $_SESSION['user']['password']) {
            $step = "pin"; 
        } else {
            $login_error = "Invalid username or password."; 
        }

    } elseif (isset($_POST['pinCode'])) {
        if ($_POST['pinCode'] === $_SESSION['user']['pinCode']) {
            $step = "done"; 
        } else {
            $pin_error = "Incorrect pin code."; 
            $step = "pin"; 
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        .container {
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
            color: #ec9bad;
        }

        form {
            display: flex;
            flex-direction: column;
            padding: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        label {
            margin-bottom: 6px;
            font-weight: 600;
            color: #333;
        }

        input {
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
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

        .error {
            color: red;
            margin-bottom: 15px;
            text-align: center;
        }

        .success {
            color: #081b5a;
            margin-bottom: 10px;
            text-align: center;
        }

        ul {
            list-style: none;
            padding-left: 0;
            padding: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        li {
            margin-bottom: 8px;
        }

        li strong {
            color: #444;
        }
    </style>
</head>
<body>
    <?php if ($step === "login"): ?>
        <h2>Login</h2>
        <form method="post">
            <?php if ($login_error) echo "<p>$login_error</p>"; ?>
            
            Username: <input type="text" name="username" required><br><br>
            
            Password: <input type="password" name="password" required><br><br>
            
            <button type="submit">Next</button>
        </form>

    <?php elseif ($step === "pin"): ?>
        <h2>Enter Pin Code</h2>
        <form method="post">
            <?php if ($pin_error) echo "<p style='color:red;'>$pin_error</p>"; ?>
            
            Pin Code: <input type="text" name="pinCode" required><br><br>
            
            <button type="submit">Login</button>
        </form>

    <?php else: ?>
        <h2>Login Successful!</h2>

        <ul>
            <p style="color: #081b5a;">Welcome, <?php echo $_SESSION['user']['firstName']; ?>! Here is your registered information:</p>
            
            <?php
            foreach ($_SESSION['user'] as $key => $value) {
                echo "<li><strong>" . ucfirst($key) . ":</strong> $value</li>";
            }
            ?>
        </ul>
    <?php endif; ?>
</body>
</html>
