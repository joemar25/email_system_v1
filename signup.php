<!DOCTYPE html>

<?php
  include("includes/functions.php");
  $random_pass = randomPassword();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Sign Up </title>
  </head>

  <body>
    <a href="index.php">Pornhub</a> Login System : Sign Up <hr>
    <form action="insert_user.php" method="post">

      <input type="text" placeholder="User Name" name="user_name" required>
      <input  id='copy-text' id='password' type='text' value="<?php echo $random_pass; ?>" name='u_pass' readonly>
      <button id="copy" type="button"> Copy <span class="done" aria-hidden="true"> <?php echo $random_pass; ?> </span></button>
      <textarea id="empty-field" placeholder="paste here" hidden></textarea> <br>
      <a title="Signin" href="signin.php"> Already have an account? </a><br>
      <button id="signup" name="sign_up">Sign Up</button>

    </form>

    <script>
      var toCopy  = document.getElementById( 'copy-text' ), btnCopy = document.getElementById( 'copy' ), paste   = document.getElementById( 'empty-field' );
      btnCopy.addEventListener( 'click', function(){
      toCopy.select();
      paste.value = '';
      if ( document.execCommand( 'copy' ) ) {
        btnCopy.classList.add( 'copied' );
        paste.focus();
        var temp = setInterval( function(){
          btnCopy.classList.remove( 'copied' );
          clearInterval(temp);
        }, 600 );
      } else { console.info( 'document.execCommand went wrong…' ) } return false; } );
    </script>

  </body>
</html>
