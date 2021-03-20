<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Forgot Password </title>
  </head>

  <body>

    <a href="index.php">Pornhub</a> Login System : Forgot Password <hr>

    <a href="signin.php">back</a>

    <form action="forgot_password_confirmation.php" method="post">

        <input type = "text"  name = "check_username" placeholder = "Username" required>  <br>
        <input type="password" name="new_pass" placeholder="New Password" required>        <br>
        <input type="password" name="re_pass" placeholder="Re-Type New Password" required> <br>
        <button name = "change_password" type="submit"> Change Password </button>

    </form>


  </body>
</html>
