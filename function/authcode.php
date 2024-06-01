<?php
session_start();
include('../config/dbcon.php');
// Register Button
  if(isset($_POST['register_btn'])){

    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
    
    //check the email registation
    $check_email="SELECT email FROM users WHERE email='$email'";
    $check_email_run=mysqli_query($con,$check_email);

    if(mysqli_num_rows($check_email_run)>0){ 
        $_SESSION['message']="Email has already Registerd!";
        header('Location: ../register.php');
     }else{

    
    // check the password matching
    if($password==$cpassword){

      $insert_query= "INSERT INTO users (name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
      $insert_query_run= mysqli_query($con,$insert_query);

      if($insert_query_run){
        $_SESSION['message']="Register Successfully!";
        header('Location: ../login.php');
      }
      else{
        $_SESSION['message']= "Something went Wrong";
        header('Location: ../register.php');
      }
    }
    else{
      $_SESSION['message']="password does not match";
      header('Location: ../register.php');
    }

  }
  }
 elseif(isset($_POST['login_btn'])){
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $password=mysqli_real_escape_string($con,$_POST['password']);

  $login_query="SELECT * FROM users WHERE email='$email' AND password='$password'";
  $login_query_run=mysqli_query($con,$login_query);

  if(mysqli_num_rows($login_query_run)>0){
    $_SESSION['auth']=true;

    $userdata=mysqli_fetch_array($login_query_run);
    
    $userid= $userdata['id'];
    $username= $userdata['name'];
    $useremail=$userdata['email'];
    $role_as=$userdata['role_as'];

    $_SESSION['auth_user'] =[
      'user_id'=> $userid,
      'name'=> $username,
      'email'=> $useremail
    ];
    $_SESSION['role_as']= $role_as;

    if($role_as==1){
      $_SESSION['message'] ="Welcome to Dashboard!";
      header('Location: ../admin/index.php');

    }else{
      $_SESSION['message'] ="Loged in Successfully!";
      header('Location: ../index.php');
    }

    

  }else{
    $_SESSION["message"]= "Invalid Inputs.";
    header('Location: ../login.php');
  }
 }
?>