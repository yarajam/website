<?php
session_start();
require("connect.php");
$username = $_SESSION["currentUser"];
$sql="DELETE FROM `users` WHERE username='$username';";
$result=mysqli_query($conn,$sql);

unset($_SESSION['currentUser']);

session_destroy();

header("Location:../index.php");
?>