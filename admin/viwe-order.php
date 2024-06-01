<?php
 include('includes/header.php');
 include('../middleware/adminmiddleware.php');
 include('../function/myfunction.php');
 
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
    background-image: url('../assets/img/adminbg.jpeg');
  }
  .viwe-oreder-card{
    border-radius: 10px;
    border:2px solid #C7CBE8 ;
    box-shadow:0 0 30px #1B237E;
    
   
  }
  .card-header{
    background-color: #1B237E;
  }
  .card-header span{
    text-align: center;
    font-size: 36px;
    color: #fff;
    
  }
  .txtinput{
    border: 2px solid #C7CBE8;
  }
  .lbl{
    color: #474747;
    font-weight: 500;
  }
  .update_btn{
    background-color: #1B76D1;
    color: #fff;
  }
  .btn-back {
    background-color: #43A6F6;
    color: #fff;

  }
 </style>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="card viwe-oreder-card">
              <div class="card-header ">
                <span class="">Viwe Order</span> 
                <a href="orders.php" class="btn btn-back float-end"> <i class="fa fa-reply"></i> Back</a>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <h4>Delivary Details</h4>
                      
                    <div class="row">

                      <div class="col-md-12 mb-2">
                      <label class="fw-bold lbl" >Name</label>
                        <div class="border p-1 form-control">
                            <?=$data['name'] ?>
                        </div>
                      </div>
                      

                      <div class="col-md-12 mb-2">
                      <label class="fw-bold lbl">E-mail</label>
                        <div class="border p-1 form-control">
                            <?=$data['email'] ?>
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                      <label class="fw-bold lbl">Phone</label>
                        <div class="border p-1 form-control">
                            <?=$data['phone'] ?>
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                      <label class="fw-bold lbl">Tracking No</label>
                        <div class="border p-1 form-control">
                            <?=$data['tracking_no'] ?>
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                      <label class="fw-bold lbl">Address</label>
                        <div class="border p-1 form-control">
                            <?=$data['address'] ?>
                        </div>
                      </div>

                      <div class="col-md-12 mb-2">
                      <label class="fw-bold lbl">Zip Code</label>
                        <div class="border p-1 form-control">
                            <?=$data['pincode'] ?>
                        </div>
                      </div>



                    </div>

                  </div>
                  <div class="col-md-6">
                      <h4>Order Details</h4>
                        
                      <table class="table table-striped  text-center">

                      <thead>
                        <tr>
                          <th class="lbl">Product</th>
                          <th class="lbl">Price</th>
                          <th class="lbl">Quantity</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      
                    <?php 

                        
                        $order_query="SELECT o.id as oid, o.tracking_no, o.user_id, oi.*, oi.qty as orderqty, p.* FROM orders o, order_items oi, products p
                        WHERE oi.order_id=o.id AND p.id=oi.prod_id AND o.tracking_no='$tracking_no'";

                        $order_query_run=mysqli_query($con, $order_query);

                        if(mysqli_num_rows($order_query_run)> 0)
                        {

                          foreach($order_query_run as $items)
                          {
                            ?>
                                  <tr>
                                      <td class="align-middle" ><img src="../uploads/<?= $items['image']; ?>" width="70px" height="70px" alt="<?= $items['name']; ?>">
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

                    <div class=""></div>
                    <h5>Total Price : <span class="float-end fw-bold"><?= $data['total_price']; ?></span> </h5>
                    <hr>
                    <label class="fw-bold lbl"> Payment Mode :</label>
                    <div class="border p-1 form-control mb-3">
                      <?= $data['payment_mode']; ?>
                    </div>

                    <label class="fw-bold lbl">Status :</label>
                    <div class="mb-3">
                      <form action="code.php" method="POST">
                        <input type="hidden" name="tracking_no" value="<?= $data['tracking_no']?>" >
                          <select name="order_status" id="" class="form-select">
                            <option value="0"<?= $data['status']==0? "selected":"" ?>>Under Process</option>
                            <option value="1"<?= $data['status']==1? "selected":"" ?>>Complete</option>
                            <option value="2"<?= $data['status']==2? "selected":"" ?>>Canceled</option>
                          </select>
                          <button type="submit" name="update_order_btn" class="btn update_btn mt-3">Update Status</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
   
  <?php include('includes/footer.php')?>


   


           


 



     

      