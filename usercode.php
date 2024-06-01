<?php 
include('./config/dbcon.php');
include('./function/userfunction');
session_start();

if (isset($_POST['btn-message'])) {

  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];

  $query= "INSERT INTO message (name ,email, subject, message) VALUES ('$name','$email','$subject','$message')";
  $query_run=mysqli_query($con, $query);

  if($query_run){
    header('Location: contact.php');
  }
  else{
    header('Location: contact.php');
    $_SESSION['Somthing went wrong!'];
  }
}

?>