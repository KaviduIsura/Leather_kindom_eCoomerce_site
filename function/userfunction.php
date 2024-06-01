<?php 
session_start();
include('config/dbcon.php');

function getAllActive($table)
{
  global $con;
  $query="SELECT * FROM $table WHERE status='0'";
  return $quer_run=mysqli_query($con,$query);

}
function getAll($table)
{
  global $con;
  $query="SELECT * FROM $table";
  return $quer_run=mysqli_query($con,$query);

}

function getAllTrending()
{
  global $con;
  $query="SELECT * FROM products WHERE trending ='1' ";
  return $quer_run=mysqli_query($con,$query);

}

function getSlugActive($table,$slug)
{
  global $con;
  $query="SELECT * FROM $table WHERE slug='$slug' AND status='0' LIMIT 1";
  return $quer_run=mysqli_query($con,$query);

}

function getProdByCategory($category_id)
{
  global $con;
  $query="SELECT * FROM products WHERE category_id='$category_id' AND status='0'";
  return $quer_run=mysqli_query($con,$query);
}

function getIdActive($table,$id)
{
  global $con;
  $query="SELECT * FROM $table WHERE id='$id' AND status='0' ";
  return $quer_run=mysqli_query($con,$query);

}

function getCartItems()
{
  global $con;
  $userID=$_SESSION['auth_user']['user_id'];
  $query="SELECT c.id as cid, c.prod_id, c.prod_qty, c.size, p.id as pid, p.name,p.image, p.selling_price FROM carts c,
  products p WHERE c.prod_id=p.id AND c.user_id='$userID' ORDER BY c.id DESC";
  return $quer_run=mysqli_query($con,$query);
}

function getOrders()
{
  global $con;
  $userID=$_SESSION['auth_user']['user_id'];
  $query="SELECT * FROM orders WHERE user_id='$userID' ORDER BY id DESC";
  return $quer_run=mysqli_query($con,$query);
}

function checkTrackingNoValid($trackingNO)
{
  global $con;
  $userID=$_SESSION['auth_user']['user_id'];
  $query= "SELECT * FROM orders WHERE tracking_no='$trackingNO' AND user_id='$userID'";
  return mysqli_query($con,$query);
}

function redirect($url,$message)
{
  $_SESSION['message']=$message;
  header('Location:'.$url);
  exit();
}

?>