<!DOCTYPE html>
<?php
  session_start();
  include("includes/functions.php");
  if ( !isset($_SESSION['user_name']) )
      header("location: index.php");
?>
<html>
  <head>
      <?php
        $user      =  $_SESSION['user_name'];
        $get_user  = "SELECT * FROM users WHERE user_name = '$user'";
        $run_user  =  mysqli_query($conn, $get_user);
        $row       =  mysqli_fetch_array($run_user);
        $user_name =  $row['user_name'];
        $pass      =  $row['user_pass'];
        $decrypt   =  base64_decode($pass);

        echo "<title> " . $user_name. " </title> ";
        ?>
    </head>

  <body>
    password is <b> <?php echo "Welcome to PORNHUB <b>" . $user_name . "!</b><hr>"; echo $decrypt; ?>
    <br> <br>
    <a href = "logout.php" onclick = "return confirm('Are you sure you want to Logout?')"> Logout </a>
  </body>

</html>
