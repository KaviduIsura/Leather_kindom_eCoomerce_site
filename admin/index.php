<?php 
include('includes/header.php');
include('../middleware/adminmiddleware.php');
include('../function/myfunction.php');


 ?>
 <style>
     body{
    background-image: url('../assets/img/adminbg.jpeg');
  }
  .tableorder{
    border-radius: 5px;
    min-width: max-content;
    margin-top: 10px;
    
  }
  .tableorder th{
    color: #1B237E;
    font-weight: 700;
    font-size: 18px;
    position: sticky;
  }
  
  .tableorder tr{
    background-color: #C7CBE8;
    text-align: center;
    color: #474747;
    
  }
  .ordercard{
    border-radius: 10px;
    border:2px solid #C7CBE8 ;
    box-shadow:0 0 30px #1B237E;
    background-color: #3F50B6;
   
  }
  .card-header{
    background-color: #1B237E;
  }
  .card-header h4{
    text-align: center;
    font-size: 36px;
    
  }
  .btn-history {
    background-color: #43A6F6;
    color: #fff;

  }
  .btn-viwe {
    background-color: #1B76D1;
    color: #fff;
  }
  .tbl-container{
    
    max-height: fit-content;
    max-width: max-content;
    margin-top: 10px;
  }
  .tbl-fixed{
    overflow-y: scroll;
    height: fit-content;
    max-height: 70vh;
    margin-top: 40px;
    
  }
  .main-text{
    text-align: center;
    color: #fff;
    
  }
  .cards{
    background-color: #1B76D1;
    height: 20vh;
  }
  .cards1{
    background-color: #1B237E;
    height: 20vh;
  }
  .cards h4{
    
    color: #fff;
    
    font-weight: 400;
  }
  .cards1 h4{
    
    color: #fff;
    
    font-weight: 400;
  }
 </style>

 <div class="row">
  <div class="col-xl-3 col-md-6 mt-3">
    <div class="card cards text-white mb-4">
      <div class="card-body">Total Users 
      <?php
      $user_query="SELECT * FROM users";
      $user_query_run=mysqli_query($con,$user_query);
      
      if($user_total = mysqli_num_rows($user_query_run))
      {
        echo '<h4 class ="mb-0">'.$user_total .'</h4>';
      }
      else{
        echo '<h4 class ="mb-0">No Data</h4>';
      }

      ?>
      </div>
      <div class="card-footer d-flex align-items-center justify-content-between">
        <a class="small text-white stretched-link" href="#">view details</a>
        <div class="small text-white"></div>
    </div>
  </div>
 </div>

 <div class="col-xl-3 col-md-6 mt-3">
    <div class="card cards1 text-white mb-4">
      <div class="card-body"> Total Products
      <?php
      $product_query="SELECT * FROM products";
      $product_query_run=mysqli_query($con,$product_query);
      
      if($product_total = mysqli_num_rows($product_query_run))
      {
        echo '<h4 class ="mb-0">'.$product_total .'</h4>';
      }
      else{
        echo '<h4 class ="mb-0">No Data</h4>';
      }

      ?>
      </div>
      
      <div class="card-footer d-flex align-items-center justify-content-between">
        <a class="small text-white stretched-link" href="product.php">view details</a>
        <div class="small text-white"></div>
    </div>
  </div>
 </div>

 <div class="col-xl-3 col-md-6 mt-3">
    <div class="card cards text-white mb-4">
      <div class="card-body"> Total Categories 
      <?php
      $category_query="SELECT * FROM categories";
      $category_query_run=mysqli_query($con,$category_query);
      
      if($category_total = mysqli_num_rows($category_query_run))
      {
        echo '<h4 class ="mb-0">'.$category_total .'</h4>';
      }
      else{
        echo '<h4 class ="mb-0">No Data</h4>';
      }

      ?>
      </div>
      <div class="card-footer d-flex align-items-center justify-content-between">
        <a class="small text-white stretched-link" href="category.php">view details</a>
        <div class="small text-white"></div>
    </div>
  </div>
 </div>

 <div class="col-xl-3 col-md-6 mt-3">
    <div class="card cards1 text-white mb-4">
      <div class="card-body"> Total orders 
      <?php
      $order_query="SELECT * FROM orders";
      $order_query_run=mysqli_query($con,$order_query);
      
      if($order_total = mysqli_num_rows($order_query_run))
      {
        echo '<h4 class ="mb-0">'.$order_total .'</h4>';
      }
      else{
        echo '<h4 class ="mb-0">No Data</h4>';
      }

      ?>
      </div>
      <div class="card-footer d-flex align-items-center justify-content-between">
        <a class="small text-white stretched-link" href="orders.php">view details</a>
        <div class="small text-white"></div>
    </div>
  </div>
 </div>
 </div>
      
 
      
      

<h2 class="main-text" > See your Recent Orders </h2>
<div class="container tbl-container">
  <div class="row tbl-fixed">
 <div class="col-md-12">
  <div class="card ordercard">
      <div class="card-header ">
        <h4 class="text-white" >Orders
          <a href="order-history.php" class="btn btn-history float-end">Order history</a>
        </h4>
      </div>
      <div class="card-body" id="" >
          <table class="table tableorder">
            <thead>
              <tr>
                <th>ID</th>
                <th>User</th>
                <th>Tracking No</th>
                <th>Price</th>
                <th>Date</th>
                <th>Viwe</th>
              </tr>
            </thead>
            <tbody>
            <?php 
          $orders =getAllOrders();

          if(mysqli_num_rows($orders)>0)
          {
           
            foreach($orders as $items)
            {
              ?>
                <tr>
                    <td><?= $items['id']; ?></td>
                    <td><?= $items['name']; ?></td>
                    <td><?= $items['tracking_no']; ?></td>
                    <td><?= $items['total_price']; ?></td>
                    <td><?= $items['created_at']; ?></td>
                    <td>
                      <a href="viwe-order.php?t=<?= $items['tracking_no']; ?>" class="btn btn-viwe btn-outline-secondary" >Viwe Table</a>
                    </td>
                </tr>

              <?php
            }
          }
          else
          {
            ?>
              <tr>
                    <td colspan="5" >No Orders Yet </td>
              </tr>
            <?php
                    
          }
          ?>
              
            </tbody>
          </table>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>

<h2 class="main-text mt-3" > See Your messages </h2>
<div class="container tbl-container">
  <div class="row tbl-fixed">
 <div class="col-md-12">
  <div class="card ordercard">
      <div class="card-header ">
        <h4 class="text-white" >Messages
          
        </h4>
      </div>
      <div class="card-body" id="" >
          <table class="table tableorder">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Subject</th>
                <th>Message</th>
              </tr>
            </thead>
            <tbody>
            <?php 
          $orders =getAllMessages();

          if(mysqli_num_rows($orders)>0)
          {
           
            foreach($orders as $items)
            {
              ?>
                <tr>
                    <td><?= $items['id']; ?></td>
                    <td><?= $items['name']; ?></td>
                    <td><?= $items['email']; ?></td>
                    <td><?= $items['subject']; ?></td>
                    <td><?= $items['message']; ?></td>
                </tr>

              <?php
            }
          }
          else
          {
            ?>
              <tr>
                    <td colspan="5" >No MessagesYet </td>
              </tr>
            <?php
                    
          }
          ?>
              
            </tbody>
          </table>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>



<?php include('includes/footer.php'); ?>