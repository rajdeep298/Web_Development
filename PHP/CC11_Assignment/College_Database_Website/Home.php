<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .container img {
            max-height: 50px;
            height: auto;
            margin-top: 20px;
            transition: all 0.2s ease-in-out;
        }
        .container img:hover {
            transform: scale(1.1);
        }

        .welcome-message {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .login-link {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            font-weight: bold;
            color: #007bff;
        }

        .error-message {
            font-size: 18px;
            color: #ff0000;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    $userName = $_POST["username"];
    $password = $_POST["password"];
    if ($userName == "rajdeep298" && $password == "Rajdeep@2023") {
        $_SESSION["loggedIn"] = true;
        echo "<p class='welcome-message'>Welcome $userName</p>";
        echo "<p>You have successfully logged in</p>";
        echo "<a href='Database_Home.php?username=$userName&password=$password'><img src='Database.png' alt='Database'></a>";
    } else {
        echo "<p class='error-message'>Invalid username or password</p>";
        echo "<p>Please try again</p>";
        echo "<a class='login-link' href='Login.html'>Login</a>";
    }
    ?>
</div>
</body>
</html>
