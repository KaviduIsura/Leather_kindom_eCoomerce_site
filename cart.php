<?php
 include('function/userfunction.php'); 
 include('includes/header.php');
include('authenticate.php');
 ?> 
 <style>

.addressbar{
  color:#000;
  background-color:#E7E8EA;
  height: 50px;
}
.addresses{
  text-decoration:none;
  color:#000;
}
.address{
  color: #000;
}
body{
  justify-content:center;
  align-items:center;
  height:100vh;
  background-image: url('assets/img/body2.jpg');
  background-size: cover; 
  background-position: center; 
}
.btnNomal{
font-size: 14px;
  font-weight: 500;
  padding:15px 30px;
  color:#fff;
  background-color:#D2557F;
  border-radius: 4px;
  cursor: pointer;
  border:none;
  outline: none;
  transition:0.2s;
}
.details{
  border: 2px solid #08D0E6;
}
 </style>
 <div class="py-3 addressbar">
  <div class="container">
   <h6 class="addresses">
     <a class="address" href  ="index.php">Home /
     </a> 
     <a class="address" href  ="cart.php">Cart /
     </a> 
   </h6>
 </div>
</div>


<div class="py-5">
  <div class="container">
    <div class="">
      
      <div class="row">

      <div class="col-md-12">
        <div id="mycart">
        <?php $items= getCartItems();
              if(mysqli_num_rows($items)>0){  
              ?>
                  <div class="row align-items-center mb-3">
                  
                  <div class="col-md-4">
                    <h5>Product</h5>
                  </div>
                  <div class="col-md-2">
                    <h5>Price</h5>
                  </div>
                  <div class="col-md-2">
                  <h5>Quantity</h5>
                  </div>
                  <div class="col-md-2">
                  <h5>Size</h5>
                  </div>
                  <div class="col-md-2">
                    <h5>Remove</h5>
                  </div>

                  </div>
                <div id="">
              <?php
                  foreach($items as $citem)
                  {
                    ?>
                      <div class="card product_data mb-3 details">
                        <div class="row align-items-center">
                          <div class="col-md-2">
                            <img src="uploads/<?=$citem['image']?>"alt="Image" width="100px" height="80px" >
                          </div>
                          <div class="col-md-2">
                            <h5><?=$citem['name'] ?></h5>
                          </div>
                          <div class="col-md-2">
                          <h5>Rs.<?=$citem['selling_price'] ?></h5>
                          </div>
                          <div class="col-md-2">
                            <input type="hidden" class="prodId" value="<?= $citem['prod_id']?>" >
                          <div class="input-group mb-3" style="width: 170px;">
                              <button class="input-group-text decrement-btn updateQty">-</button>
                              <input type="text" class="form-control bg-white input-qty text-center" value="<?=$citem['prod_qty']; ?>" disabled >
                              <button class="input-group-text increment-btn updateQty">+</button>
                            </div>
                            </div>
                            <div class="col-md-2">
                            <h5><?=$citem['size'] ?></h5>
                            </div>
                          
                          <div class="col-md-2">
                            <button class="btn btn-danger btn-sm deleteItem" value="<?= $citem['cid']?>" >
                            <i class="fa fa-trash me-2"></i>  
                            Remove</button>
                          </div>


                        </div>
                      </div>
                    <?php 
                      
                    


                    
                  }
              ?>
                  </div>
                  <div class="float-end">
                    <a href="checkout.php" class="btn btnNomal" > Proceed to checkout</a>
                  </div>
                <?php
              }else
              {
                ?>
                  <div class="card card-body text-center shadow">
                    <h4 class="py-3">Your Cart is Empty</h4>
                  </div>
                <?php

              }
                ?>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <?php include('includes/footer.php')?>
                   
                  
                
                

                

        
     


   