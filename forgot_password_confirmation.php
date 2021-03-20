<?php

include("includes/connection.php");

$check_username    = $_POST['check_username'];
$new_pass       = $_POST['new_pass'];
$re_pass        = $_POST['re_pass'];

$slect_password = "SELECT * FROM users WHERE user_name ='$check_username'";
$chk_pwd        =  mysqli_query($conn, $slect_password);
$check_user = mysqli_num_rows($chk_pwd);

if ($check_user == 1) {
  if ( !(strlen($new_pass) < 8) && !(strlen($re_pass) < 8)) {
    if($new_pass == $re_pass){
      $encrypt = base64_encode($re_pass);
      $run  = "update users set user_pass='$encrypt' where user_name='$check_username'";
      $run_pwd  =  mysqli_query($conn, $run);
      echo "<script>alert('Update Sucessfully'); window.location='signin.php'</script>";
    } else {
      echo "<script>alert('Your new and Retype Password is not match'); window.location='forgot_password.php'</script>";
    }
  } else {
    echo "<script>alert('Your new and Retype Password should be minimum 8 characters!'); window.location='forgot_password.php'</script>";
  }
} else {
  echo"<script>alert('Your User Name did not exist')</script>";
}

?>
