<?php

require 'connect.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm'];
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }
    if ($password != $confirmpassword) {
        echo '<script>alert("not the same password");</script>';
    } else {
        $sql = "INSERT INTO `users`(`name`, `username`, `email`, `password`, `gender`) VALUES ('$name','$username','$email','$password','$gender');";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: login.php");
        } else {
            mysqli_error($conn);
        }
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
    <link rel="stylesheet" href="../css/signup.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>

<body>
    <main>
        <form action="" method="post" class="signup">
            <div id="title">
                <h1>Sign Up</h1>
            </div>
            <div class="field">
                <label for="name">Name<box-icon type='solid' name='pen' color="#F6F4F0" id="icon"></box-icon></label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="field">
                <label for="username">Username<box-icon name='id-card' type='solid' color="#F6F4F0"
                        id="icon"></box-icon></label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="field">
                <label for="email">Email<box-icon name='envelope' color="#F6F4F0" id="icon"></box-icon></label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="field">
                <label for="password">Password <box-icon name='lock-alt' color="#F6F4F0" id="icon"></box-icon></label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="field">
                <label for="confirm">Confirm password<box-icon name='lock-alt' color="#F6F4F0"
                        id="icon"></box-icon></label>
                <input type="password" name="confirm" id="confirm" required>
            </div>
            <p>Gender</p>
            <div id="gender">
                <div>
                    <input type="radio" name="gender" id="Male" value="Male">
                    <label for="Male">Male</label>
                </div>
                <div>
                    <input type="radio" name="gender" id="Female" value="Female">
                    <label for="Female">Female</label>
                </div>
                <div>
                    <input type="radio" name="gender" id="Prefer not to say" value="Prefer not to say">
                    <label for="Prefer not to say">Prefer Not To Say</label>
                </div>
            </div>
            <div class="field">
                <button type="submit" id="button" name="register">Signup</button>
            </div>
        </form>
    </main>

</body>

</html>