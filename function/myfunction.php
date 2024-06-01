<?php 
session_start();
include('../config/dbcon.php');

function getAll($table)
{
  global $con;
  $query="SELECT * FROM $table";
  return $quer_run=mysqli_query($con,$query);

}
function getById($table,$id)
{
  global $con;
  $query="SELECT * FROM $table WHERE id='$id' ";
  return $quer_run=mysqli_query($con,$query);

}

function redirect($url,$message)
{
  $_SESSION['message']=$message;
  header('Location:'.$url);
  exit();
}
function getAllOrders()
{
  global $con;
  $query="SELECT * FROM orders WHERE status ='0'";
  return $quer_run=mysqli_query($con,$query);

}

function getOrdersHistory()
{
  global $con;
  $query="SELECT * FROM orders WHERE status!='0'";
  return $quer_run=mysqli_query($con,$query);

}
function checkTrackingNoValid($trackingNO)
{
  global $con;
  $query= "SELECT * FROM orders WHERE tracking_no='$trackingNO'";
  return mysqli_query($con,$query);
}
function getAllMessages()
{
  global $con;
  $query="SELECT * FROM message ";
  return $quer_run=mysqli_query($con,$query);

}
function getAllUsers()
{
  global $con;
  $query="SELECT * FROM users ";
  return $quer_run=mysqli_query($con,$query);

}
function checkIdNoValid($mId)
{
  global $con;
  $query= "SELECT * FROM message WHERE id='$mId'";
  return mysqli_query($con,$query);
}

?>