<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title> Sign In </title>
  </head>

  <body>
    <a href="index.php">Pornhub</a> Login System : Login In <hr>
    <form action="login.php" method="post">

        <input type = "text" name = "username" placeholder = "Username" required> <br>
        <input type = "password" name = "pass" placeholder = "Password" required> <br>
        <a title = "Reset Password" href = "forgot_password.php"> Forgot? </a> <br>
        <a title = "Create Account!" href = "signup.php"> Don't have an account? </a> <br> <br>
        <button id = "signin" name = "login"> Login </button>

    </form>
  </body>

</html>
