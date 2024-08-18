<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
        
        .register-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        
        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        
        .register-container label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        
        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        .register-container input[type="submit"] {
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
        
        .register-container input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .register-container .login {
            text-align: center;
            margin-top: 15px;
        }
        
        .register-container .login a {
            color: #4CAF50;
            text-decoration: none;
        }
        
        .register-container .login a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <?php
    echo '<div class="register-container">
        <h2>Register</h2>
        <form action="/register" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm_password" required>
            
            <input type="submit" value="Register">
        </form>
        <div class="login">
            <p>Already have an account? <a href="/login">Login here</a></p>
        </div>
    </div>';
    ?>
    
</body>
</html>
