<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        
        .login-container label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .login-container input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .login-container .register {
            text-align: center;
            margin-top: 15px;
        }
        
        .login-container .register a {
            color: #4CAF50;
            text-decoration: none;
        }
        
        .login-container .register a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <?php
    echo '<div class="login-container">
        <h2>Login</h2>
        <form action="/login" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Login">
        </form>
        <div class="register">
            <p>Don\'t have an account? <a href="/register">Register here</a></p>
        </div>
    </div>';
    ?>
    
</body>
</html>
