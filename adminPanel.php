<?php 
//If the user is not logged in it will relocate to login page by checking the session for the email
session_start();
if(!isset($_SESSION['userEmail'])){
  header("Location:Login.php");
}
else{
  include "include/logoutValidation.php";
  include "include/addPost.php";
  include "include/header.php";
}
?>


<!DOCTYPE HTML>

<html>

<head>
  <meta charset="UTF-8">
    <title> Admin Panel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="yes">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <article class="panelView">
    <div class="userCheck">
      <!-- Users email is echoed with a welcome message if logged in-->
      <p>Welcome <?php echo $_SESSION['userEmail']?></p>
      <form class="logout-form" method="POST">
      <input type="submit" name="logout" value="logout">
      <!-- the logout button will be used in the logoutValidation page -->
      </form>
    </div>
    <div class="entryButton">
      <a href="addEntry.php" class="entryDirect"> Add Entry </a>
    </div>
  
  </article>

  <article class="panelBlogs">
  <?php if(isset) ?>
    <!-- check every instance of where the query of the connection of the database and all info from the table blog is valid-->
    <?php foreach($query as $blogPost){?>
      <section class="individualPanel">
        <p class="time"><?php
          $oldFormat = $blogPost['blogDate']; 
          // this converts the datetime in mysql to the format of day: month : year,   hours : mins
          $newFormat = date("d-m-Y H:i", strtotime($oldFormat));
          echo $newFormat;
          // it is then printed to screen
          ?>
        </p>
        <h2 class="title"><?php echo $blogPost['blogTitle']; ?></p>
        <p class="content"><?php echo $blogPost['blogContent']; ?></p>
      </section>
    
    
    <?php } ?>

  </article>
</body>


</html>