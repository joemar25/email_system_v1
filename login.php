<?php

session_start();

include("includes/connection.php");

if (isset($_POST['login'])) {
    $username = htmlentities(mysqli_real_escape_string($conn, $_POST['username']));
    $pass  = htmlentities(mysqli_real_escape_string($conn, $_POST['pass']));
    $encrypt = base64_encode($pass);

    $select_user = "select * from users where user_name='$username' AND user_pass='$encrypt'";
    $query = mysqli_query($conn, $select_user);
    $check_user = mysqli_num_rows($query);

    if ($check_user == 1) {
        $_SESSION['user_name'] = $username;
        echo"<script>alert('Welcome to Pornhub Philippines PHP for short')</script>";
        echo "<script>window.open('home.php', '_self')</script>";
    } else {
        echo"<script>alert('Your Username or Password is incorrect')</script>";
        echo "<script>window.open('signin.php', '_self')</script>";
    }
}

?>
