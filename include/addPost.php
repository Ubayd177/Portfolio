<?php 

$conn = mysqli_connect("localhost","root","","portfolio");

$sql = "SELECT * FROM blog";
$query = mysqli_query($conn,$sql);
// if there is a connection error
if (mysqli_connect_errno()){
  echo "Cannot connect to MySQL " . mysqli_connect_error();
  exit(); 
}

if(isset($_POST['submit'])){

  $blogTitle = $_POST['blogTitle'];
  $blogContent = $_POST['blogContent'];

  // now is to get current date
  $insert = "INSERT INTO blog (blogDate, blogTitle, blogContent) VALUES(now(),'$blogTitle','$blogContent')";

  if(mysqli_query($conn,$insert)){
    header("Location:adminPanel.php");
    exit();
  }
  else{
    echo "Error: " . $insert . "<br>" . mysqli_error($conn);
  }

}


?>