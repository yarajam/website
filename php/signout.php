<?php
session_start();

unset($_SESSION['currentUser']);

session_destroy();

header("Location:../index.php");
?>