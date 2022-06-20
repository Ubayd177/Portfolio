<?php 


$conn = mysqli_connect("localhost","root","","portfolio");
//if connection error occurs
if (mysqli_connect_errno()){
  echo "Cannot connect to MySQL " . mysqli_connect_error();
  exit(); 
}

if(isset($_SESSION['userEmail'])){
  header("Location:adminPanel.php");
}


// IF THE LOGIN BUTTON IS PRESSED 
if (isset($_POST['login'])){ 
  $userEmail = $_POST['email'];
  $userPassword = $_POST['password'];

  // select where the password and email match to database
  $select = mysqli_query($conn, "SELECT * FROM admin WHERE userEmail = '$userEmail' AND userPassword = '$userPassword'");
  $row = mysqli_num_rows($select);

  // if one match is found in array session happens
  if($row == 1){
    $_SESSION['userEmail'] = $userEmail;
    $_SESSION['userPassword'] = $userPassword;
    header("Location:adminPanel.php");
  }

  else{
    header("Location: login.php");
  }

}

