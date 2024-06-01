<?php
 include('function/userfunction.php'); 
 include('includes/header.php');
include('authenticate.php');
 ?> 
 <style>
  .addressbar{
  color:#000;
  background-color:#E7E8EA;
}
.addresses{
  text-decoration:none;
  color:#000;
}
.address{
  color: #000;
}
body{
    background: url('assets/img/body3.jpg');
    background-size: cover; 
    background-position:center;
}
table{
    border-radius: 5px;
    border:2px solid #c72092 ;
    box-shadow:0 0 30px #08D0E6;
}
  
 </style>
 <div class="py-3 addressbar">
  <div class="container">
   <h6 class="addresses">
     <a class="address" href  ="index.php">Home /
     </a> 
     <a class="address" href  ="my-orders.php">My Orders /
     </a> 
   </h6>
 </div>
</div>

<div class="py-5">
  <div class="container">
    <div class="">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tracking No</th>
                <th>Price</th>
                <th>Date</th>
                <th>Viwe</th>
              </tr>
            </thead>
            <tbody>
            <?php 
          $orders =getOrders();

          if(mysqli_num_rows($orders)>0)
          {
           
            foreach($orders as $items)
            {
              ?>
                <tr>
                    <td><?= $items['id']; ?></td>
                    <td><?= $items['tracking_no']; ?></td>
                    <td><?= $items['total_price']; ?></td>
                    <td><?= $items['created_at']; ?></td>
                    <td>
                      <a href="viwe-order.php?t=<?= $items['tracking_no']; ?>" type="button" class="btn btn-outline-info">Viwe Table</a>
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
    <?php include('includes/footer.php')?>
    
  
      
                  


        
     


   