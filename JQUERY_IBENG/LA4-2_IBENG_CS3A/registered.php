<!DOCTYPE html>
<html>
<head>
    <title>Registered</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 14px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #ec9bad;
            margin-bottom: 20px;
        }

        p {
            color: #333;
            margin: 10px 0;
        }

        .link-container {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        .link-container a {
            text-decoration: none;
            background-color: #ec9bad;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        form {
            display: flex;
            flex-direction: column;
            padding: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .link-container a:hover {
            background-color: #e4879f;
        }
    </style>
</head>
<body>
    <h2>Registration Successful!</h2>

    <form method="GET" action="login.php">
        <p>Congratulations! You have successfully registered.</p>

        <p>Do you want to log in?</p>

        <div class="link-container">
            <a href="index.php">No</a>     
            <a href="login.php">Yes</a>    
        </div>
    </form>
</body>
</html>
