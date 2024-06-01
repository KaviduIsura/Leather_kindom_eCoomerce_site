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
    width: 100%;
    height: min-content;
    
  }
  .tableorder th{
    color: #1B237E;
    font-weight: 700;
    font-size: 18px;
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
</style>

<div class="container">
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
<?php include('includes/footer.php')?>

         
  
      
                  


        
     


   