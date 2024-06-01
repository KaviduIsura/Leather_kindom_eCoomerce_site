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
  align-items: center;
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
.card-body{
  backdrop-filter:blur(20px);
  box-shadow:0 0 30px #08D0E6;
  background:transparent;
  border:2px solid #08D0E6 ;
  border:2px solid #08D0E6 ;
}
.input-box{
  border: 2px solid #08D0E6;
}

.confirm{
  color: #fff;
  background-color: #08D0E6;
}
.confirm1{
  color: #fff;
  background-color: #181DDF;
}
.details{
  border: 2px solid #08D0E6;
}
hr{
  color: #C72091;
}
.btn-pay{

}

 </style>
 <div class="py-3 addressbar">
  <div class="container">
   <h6 class="addresses">
     <a class="address" href  ="index.php">Home /
     </a> 
     <a class="address" href  ="checkout.php">Checkout /
     </a> 
   </h6>
 </div>
</div>

    <div class="py-5">
      <div class="container">
        <div class="card">
          <div class="card-body ">
            <form action="function/placeorder.php" method="POST" >
                <div class="row">
                <div class="col-md-7">
                  <h5>Basic Details</h5>
                  <hr>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="fw-bold">Name</label>
                      <input type="text" name="name" required placeholder="Enter full your Name" class="form-control input-box" >
                    </div>

                    <div class="col-md-6 mb-3">
                      <label class="fw-bold">E-mail</label>
                      <input type="email" name="email" required placeholder="Enter your E-mail" class="form-control input-box" >
                    </div>

                    <div class="col-md-6 mb-3">
                      <label class="fw-bold">Phone</label>
                      <input type="text" name="phone" required placeholder="Enter your Phone No" class="form-control input-box" >
                    </div>

                    <div class="col-md-6 mb-3">
                      <label class="fw-bold">Postal Code</label>
                      <input type="text" name="pincode" required placeholder="Enter your Pin Code" class="form-control input-box" >
                    </div>

                    <div class="col-md-12 md-3">
                      <label class="fw-bold">Address</label>
                      <textarea name="address" required class="form-control input-box" rows="5"></textarea>
                    </div>
                  </div>
              </div>
                <div class="col-md-5">
                  <h5>Order Details</h5>
                  <hr>
                  <?php $items= getCartItems();
                  $totalPrice=0;

                      foreach($items as $citem)
                      {
                        ?>
                          <div class="mb-1 details">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="uploads/<?=$citem['image']?>"alt="Image" width="70px"  >
                                </div>

                                <div class="col-md-5">
                                  <label><?=$citem['name'] ?></label>
                                </div>

                                <div class="col-md-3">
                                  <label><?=$citem['selling_price'] ?></label>
                                </div>

                                <div class="col-md-2">
                                  <label>x <?=$citem['prod_qty'] ?></label>
                                </div>
                            </div>
                          </div>
                        <?php 
                        $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
                      }
                      ?>
                      <hr>
                      <h5>Total Price: <span class="float-end fw-bold" ><?= $totalPrice ?></span></h5>  
                      <div class="">
                        <input type="hidden" name="payment_mode" value="COD" >
                        <button type="submit" name="placeOrderBtn" class="btn w-100 confirm">Confirm and Place Order | COD</button>
                        <button type="submit" id="payhere-payment" class="btn w-100 confirm1 mt-3" onclick="paymentgateway()" >PayHere Pay</button>
                      </div>        
                              
                      
                      
                      
                            </div>
                </div>
            </form>
        </div>
      </div>
      </div>
    </div>
    <?php include('includes/footer.php')?>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    <script>
      function paymentgateway(){
        var xhttp =new XMLHttpRequest();
        xhttp.onreadystatechange =()=>{
          if(xhttp.readyState == 4 && xhttp.status==200){
            alert(xhttp.responseText);
            var obj = JSON.parse(xhttp.responseText);

              // Payment completed. It can be a successful failure.
        payhere.onCompleted = function onCompleted(orderId) {
            console.log("Payment completed. OrderID:" + orderId);
            // Note: validate the payment and show success or failure page to the customer
        };

        // Payment window closed
        payhere.onDismissed = function onDismissed() {
            // Note: Prompt user to pay again or show an error page
            console.log("Payment dismissed");
        };

        // Error occurred
        payhere.onError = function onError(error) {
            // Note: show an error page
            console.log("Error:"  + error);
        };

        // Put the payment variables here
        var payment = {
            "sandbox": true,
            "merchant_id": "1225297",    // Replace your Merchant ID
            "return_url": "http://localhost/FInal%20Project/checkout.php",     // Important
            "cancel_url": "http://localhost/FInal%20Project/checkout.php",     // Important
            "notify_url": "http://sample.com/notify",
            "order_id": obj["order_id"],
            "items": obj["item"],
            "amount": obj["amount"],
            "currency":obj["currancy"],
            "hash": obj["hash"], // *Replace with generated hash retrieved from backend
            "first_name": obj["first_name"],
            "last_name": obj["last_name"],
            "email": obj["email"],
            "phone": obj["phone"],
            "address": obj["address"],
            "city": obj["city"],
            "country": "Sri Lanka",
            "delivery_address": "No. 46, Galle road, Kalutara South",
            "delivery_city": "Kalutara",
            "delivery_country": "Sri Lanka",
            "custom_1": "",
            "custom_2": ""
        };
        payhere.startPayment(payment);
          }
        }
        xhttp.open("GET","payhereprocess.php",true);
        xhttp.send();

      }
    </script>
                          
                    

                    

            
        


      