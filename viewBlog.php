
<?php 
    session_start();
    include "include/loginValidation.php";
    include "include/logoutValidation.php";
    include "include/addPost.php";
?>
<!DOCTYPE HTML>

<html>

<head>
  <meta charset="UTF-8">
    <title> About Me</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable="yes">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>



<body>
  <?php 
  include "include/header.php";
  ?>
  <!-- same procedure used in the admin panel page -->
    <article class="panelBlogs">
    <?php foreach($query as $blogPost){?>
      <section class="individualPanel">
        <p class="time"><?php
          $oldFormat = $blogPost['blogDate']; 
          $newFormat = date("d-m-Y H:i", strtotime($oldFormat));
          echo $newFormat;
          ?>
        </p>
        <h2 class="title"><?php echo $blogPost['blogTitle']; ?></p>
        <p class="content"><?php echo $blogPost['blogContent']; ?></p>
      </section>
    
    
    <?php } ?>

  </article>

</body>


</html>


