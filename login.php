<?php 
session_start();
include "include/loginValidation.php";
?>
<!DOCTYPE HTML>

<html>
  

<head>
  <meta charset="UTF-8">
    <title> Login </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="yes">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>


<body>
<?php 
  include "include/header.php";
?>

<!--LOGIN FORM-->

  <article class="login-block">
    <form class="login-form"  method="POST" id="loginForm">
      <h1>Login</h1>
      <div class="fieldline">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter Email" pattern="^[A-Za-z0-9_@.+-]+@[a-z0-9-.]+\.[a-z]{2,4}$" title="Email must be in this format: example@hotmail.com" required>
        <!-- REGEX IS CHARACTERS FOLLOWED BY AN @ FOLLOWED BY LOWERCASE/NUMBERS/./- FOLLOWED BY  A DOT FOLLOWED BY LOWERCASE OF LENGTH 2 TO 4-->
      </div>
      <div class="fieldline"> 
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Enter Password" pattern="^(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[@.#_-]).{7,}" title="Password must contain at least 7 characters; /n at least one number, one lowercase letter, one uppercase letter, and one special character (@ . # _ -)" required>
      </div>
      <?php if (isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <div = class="submit-buttons">
        <input type="submit" name="login" value="Login">
        <input type="reset" name="clear" onclick="return clearLogin();" value="Clear">
      </div>
      <script>
          function clearLogin(){
            return confirm("Do you want to clear the information in this form?");
          }
        </script>
    </form>
  </article>
</body>

</html>