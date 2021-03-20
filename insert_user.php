<?php

include("includes/connection.php");

if (isset($_POST['sign_up'])) {

    $user_name = htmlentities(mysqli_real_escape_string($conn, $_POST['user_name']));
    $user_pass = htmlentities(mysqli_real_escape_string($conn, $_POST['u_pass']));

    $check_username_query = "select user_name from users where user_email = '$user_name'";
    $run_username = mysqli_query($conn, $check_username_query);

    if (strlen($user_pass) < 8) {
        echo"<script>alert('Password should be minimum 8 characters!')</script>";
        exit();
    }

    $select = mysqli_query($conn, "SELECT `user_name` FROM `users` WHERE `user_name` = '".$_POST['user_name']."'") or exit(mysqli_error($conn));
    if(mysqli_num_rows($select)) {
      echo "<script>alert('User $user_name already exist, Please try using another User Name')</script>";
      echo "<script>window.open('signup.php', '_self')</script>";
      exit();
    }

    $encrypt = base64_encode($user_pass);
    $insert = "insert into users (user_name, user_pass) values ('$user_name', '$encrypt')";
    $query = mysqli_query($conn, $insert);

    if ($query) {
        echo "<script>alert('Well Done $user_name, welcome to Pornhub!')</script>";
        echo "<script>window.open('signin.php', '_self')</script>";
        echo "<script>window.print(mysql_errno($link))</script>";
    } else {
        echo "<script>window.open('signup.php', '_self')</script>";
    }
}
?>
