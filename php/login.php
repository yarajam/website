<?php

require 'connect.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password';";

    $result = mysqli_query($conn, $sql);

    $loggedInUser = mysqli_fetch_assoc($result);

    if ($loggedInUser) {
        $_SESSION['currentUser'] = $username;
        header("Location: ../index.php");

    } else {
        echo "invalid username or password";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div>
        <main>
            <form action="" method="post" id="login">
                <h1>Login</h1>
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <div id="remember">
                    <input type="checkbox" name="remember me" id="remember_me">
                    <label for="remember_me">Remember me</label>
                    <p>Forgot password?</p>
                </div>
                <button type="submit" id="button" name="login">Log in</button>
                <p>Don't have an account? <a href="signup.php">Register</a></p>
            </form>
            
        </main>
        
    </div>
</body>
</html>