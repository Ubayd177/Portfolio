<?php 
// connection made 
$conn = mysqli_connect("localhost","root","","portfolio");

// if there is a connection error
if (mysqli_connect_errno()){
  echo "Cannot connect to MySQL " . mysqli_connect_error();
  exit(); 
}

if(isset($_POST['logout'])){
  session_destroy();
  header("index.html");
}

?>