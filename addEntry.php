<?php 
session_start();
if(!isset($_SESSION['userEmail'])){
  header("Location:Login.php");
}
include "include/addPost.php";
?>
<!DOCTYPE HTML>

<html>

<head>
  <meta charset="UTF-8">
    <title> Add Entry </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="yes">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>


<body>
  <!--NAVIGATION BAR-->
  <?php 
  include "include/header.php";
  ?>

<!--BLOG FORM-->

  <article class="blog-block">
    <form class="blog-form" method="POST">
      <h1>Blog</h1>
      <div class="fieldline">
        <input type="text" name="blogTitle" placeholder="Title" required>
      </div>
      <div class="fieldline"> 
        <input type="text" name="blogContent" placeholder="Enter text here" required>
      </div>
      <div = class="submit-buttons">
        <input type="submit" name="submit" value="submit" id="formSubmit">
        <!-- WHEN BUTTON IS CLICKED THE RETURN STATEMENT IS RETRIEVED FROM THE FUNCTION-->
        <input type="reset" name="clear" value="clear" onclick="return clearEntry();">
        <script>
          function clearEntry(){
            // checking if the confirm returns a false value
            return confirm("Do you want to clear the information in this blog?");
          }

        </script>
      </div>
      
    </form>

  </article>
</body>

</html>