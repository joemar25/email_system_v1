<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title> Pornhub </title>
  </head>

  <body>
    Pornhub Login System
    <hr>
    <form method="post" action="">

        <button id="signup" name="signup">Sign up</button>
        <?php if (isset($_POST['signup'])) { echo "<script>window.open('signup.php','_self')</script>"; } ?>
        <button id="login" name="login">Login</button><br><br>
        <?php if (isset($_POST['login'])) { echo "<script>window.open('signin.php','_self')</script>"; } ?>

    </form>
  </body>

</html>
