<?php
 include('function/userfunction.php'); 
 include('includes/header.php');
 include('authenticate.php');

if(isset($_GET['t']))
{
  $tracking_no= $_GET['t'];

  $orderData= checkTrackingNoValid($tracking_no);
  if(mysqli_num_rows($orderData)< 0)
  {
    ?>
      <h4>Something went wrong</h4>
    <?php
    die();
  }
}
else
{
  ?>
      <h4>Something went Wrong</h4>
  <?php
  die();
}

  $data= mysqli_fetch_array($orderData);
 ?> 

 <style>
body{
    background: url('assets/img/bgimg.jpg');
    background-size: cover; 
    background-position:center;
}

.addressbar{
  color:#000;
  background-color:#E7E8EA;
  height: 50px;
}
.addresses{
  text-decoration:none;
  color:#000;
  align-items: center;
}
.address{
  color: #000;
}
.tbheader{
  background-color: #08D0E6;
}
.table1{
  border-radius: 10px;
    border:2px solid #08D0E6 ;
    box-shadow:0 0 30px #08D0E6;
}
hr{
  color: #08D0E6;
}
.input-box{
  border: 2px solid #08D0E6;
  border-radius: 7px;
}

 </style>
 <div class="py-3 addressbar ">
  <div class="container">
   <h6 class="addresses">
     <a class="address" href  ="index.php">Home /
     </a> 
     <a class="address" href  ="my-orders.php">My Orders /
     </a> 
     <a class="address" href  ="viwe-order.php">Viwe Orders /
     </a> 
   </h6>
 </div>
</div>

<div class="py-5 ">
  <div class="container ">
    <div class="table1">
      <div class="row">
        <div class="col-md-12">

          <div class="card">
            <div class="card-header tbheader">
             <span class="text-white fs-3 ">Viwe Order</span> 
              <a href="my-orders.php" class="btn btn-warning float-end"> <i class="fa fa-reply"></i> Back</a>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <h4>Delevary Details</h4>
                  <hr>
                  <div class="row">

                    <div class="col-md-12 mb-2">
                    <label class="fw-bold" >Name</label>
                      <div class="p-1 input-box">
                          <?=$data['name'] ?>
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                    <label class="fw-bold">E-mail</label>
                      <div class="input-box p-1">
                          <?=$data['email'] ?>
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                    <label class="fw-bold">Phone</label>
                      <div class="input-box p-1">
                          <?=$data['phone'] ?>
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                    <label class="fw-bold">Tracking No</label>
                      <div class="input-box p-1">
                          <?=$data['tracking_no'] ?>
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                    <label class="fw-bold">Address</label>
                      <div class="input-box p-1">
                          <?=$data['address'] ?>
                      </div>
                    </div>

                    <div class="col-md-12 mb-2">
                    <label class="fw-bold">Pin Code</label>
                      <div class="input-box p-1">
                          <?=$data['pincode'] ?>
                      </div>
                    </div>



                  </div>

                </div>
                <div class="col-md-6">
                  <h4>Order Details</h4>
                  <hr>

                  <table class="table">
                    <thead>
                      <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    
                  <?php 

                      $userID=$_SESSION['auth_user']['user_id'];
                      $order_query="SELECT o.id as oid, o.tracking_no, o.user_id, oi.*, oi.qty as orderqty, p.* FROM orders o, order_items oi, products p
                      WHERE o.user_id='$userID' AND oi.order_id=o.id AND p.id=oi.prod_id AND o.tracking_no='$tracking_no'";

                      $order_query_run=mysqli_query($con, $order_query);

                      if(mysqli_num_rows($order_query_run)> 0)
                      {

                        foreach($order_query_run as $items)
                        {
                          ?>
                                <tr>
                                    <td class="align-middle" ><img src="uploads/<?= $items['image']; ?>" width="70px" height="70px" alt="<?= $items['name']; ?>">
                                    <?= $items['name']; ?>
                                    </td>
                                    <td class="align-middle" >
                                    <?= $items['price']; ?>
                                    </td>
                                    <td class="align-middle" >
                                    <?= $items['orderqty']; ?>
                                    </td>
                                </tr>
                          <?php
                        }
                      }
                      else
                      {

                      }


                  ?>
                  </tbody>
                  </table>

                  <hr>
                  <h5>Total Price : <span class="float-end fw-bold"><?= $data['total_price']; ?></span> </h5>
                  <hr>
                  <label class="fw-bold"> Payment Mode :</label>
                  <div class="input-box p-1 mb-3">
                    <?= $data['payment_mode']; ?>
                  </div>

                  <label class="fw-bold">Status :</label>
                  <div class="input-box p-1 mb-3">
                    <?php
                      if($data['status']==0){
                        echo "Under Processing";
                      }
                      else if($data["status"]== 1){
                        echo "Completed";
                      }
                      else if($data["status"]== 2){
                        echo "Canceled";
                      }  
                    
                    ?>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('includes/footer.php')?>
  
          
  
      
                  


        
     


   