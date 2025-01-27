<?php
session_start();
require 'connect.php';
$username=$_SESSION['currentUser'];

if (isset($_POST['updateName'])) {

    $name = $_POST["name"];
    $sql = "UPDATE users SET name='$name' WHERE username='$username';";

    $result = mysqli_query($conn,$sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/myProfile.css">

</head>

<body>
    <?php
    require("nav.php");
    ?>
    <main>
        <section class="title-profile">
            <h1>My profile</h1>
            <box-icon name='id-card' type='solid' color="#2E5077"></box-icon>
        </section>

        <section class="profile-info">
            <img src="../assets/profile-black.png" alt="My profile"></a>
            <div>
                <p><?php 
                require("connect.php");
                $username = $_SESSION['currentUser'];
                $sql="SELECT name,username FROM users WHERE username='$username';";
                $result=mysqli_query($conn,$sql);
                $user=mysqli_fetch_assoc($result);
                $name=$user['name'];
                echo''.$name.'';
                ?></p>
                <p><?php
                echo''.$username.'';
                ?></p>
            </div>
        </section>
        <section class="profile-action">

            <article class="action" id="time">
                <div class="action-title">
                    <box-icon name='time-five' color="#2E5077"></box-icon>
                    <h3>Prayer time</h3>
                </div>
                <iframe
                    src="https://timesprayer.com/widgets.php?frame=2&amp;lang=en&amp;name=amman&amp;avachang=true&amp;fcolor=4DA1A9&amp;scolor=F6F4F0&amp;tcolor=79D7BE&amp;frcolor=2E5077"
                    style="border: none; overflow: hidden; width: 100%; height: 278px;"></iframe>
            </article>

            <article class="action" id="edit">
                <div class="action-title">
                    <box-icon name='edit' type='solid' color="#2E5077"></box-icon>
                    <h3>Edit Profile</h3>
                </div>

                <form action="" method="post">
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value=<?php echo'"'.$name.'"';?> >
                    </div>
                    <!-- <div>
                        <label for="Username">Username</label>
                        <input type="text" name="Username" id="Username" value=<?php echo'"'.$username.'"';?>>
                    </div> -->
                    <button type="submit" name="updateName">Save</button>
                </form>
            </article>

            <article class="action" id="sign-out">
                <div class="action-title">
                    <box-icon name='power-off' color="#2E5077"></box-icon>
                    <a href="signout.php">Sign out</a>
                </div>

            </article>

            <article class="action" id="change">
                <div class="action-title">
                    <box-icon type='solid' name='lock-alt' color="#2E5077"></box-icon>
                    <h3>Change password</h3>
                </div>

                <form action="" method="post">
                    <div>
                        <label for="Current">Current password</label>
                        <input type="password" name="Current" id="Current">
                    </div>
                    <div>
                        <label for="New">New password</label>
                        <input type="password" name="New" id="New">
                    </div>
                    <div>
                        <label for="Confirm">Confirm password</label>
                        <input type="password" name="Confirm" id="Confirm">
                    </div>
                    <button type="submit">Save</button>
                </form>
            </article>

            <article class="action" id="delete">
                <div class="action-title">
                    <box-icon type='solid' name='minus-circle' color="#2E5077"></box-icon>
                    <a href="deleteUser.php">Delete account</a>
                </div>

            </article>

        </section>
       
    </main>
    <?php
    require("footer.php");
  ?>
     <script src="../js/all.js"></script>
</body>

</html>