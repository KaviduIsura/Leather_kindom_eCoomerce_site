<?php
session_start();
include('function/userfunction.php'); 
include('function/handlecart.php');
include('includes/header.php');
if(isset($_GET['product']))
{
  $product_slug = $_GET['product'];
  $product_data= getSlugActive("products", $product_slug);
  $product= mysqli_fetch_array($product_data);

  if($product)
  {
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
.form-select{
    border: 2px solid #9EA9DA !important;
    padding: 8px 10px;
  }

    </style>
  <div class="py-3 addressbar">
    <div class="container">
      <h6 class="addresses">
        <a class="address" href  ="index.php">Home /
        </a> 
        <a class="address" href  ="category.php">Collections /
        </a> 
    <?=$product['name'];?>
      </h6>
    </div>
  </div>
  <div class="bg-light py-4">

    
    <div class="container product_data mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="shadow">
          <img src="uploads/<?= $product['image']; ?>" alt="Product image" class="w-100" >
          </div>
        </div>
        <div class="col-md-8">
          <h4 class="fw-bold" ><?= $product['name']; ?>
          <span class="float-end text-danger" ><?php if($product['trending']){echo"Trending";} ?></span>
        </h4>
          <hr>
          <p><?= $product['small_description']; ?></p>
            <div class="row">
                <div class="col-md-6">
                <h5> <span class="text-success fw-bold" > Rs. <?=$product['selling_price']; ?></span></h5>
                </div>
                <div class="col-md-6">
                <h5>Rs. <s class="text-danger" ><?=$product['original_price']; ?></s></h5>
            </div>

          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="input-group mb-3" style="width: 170px;">
                <button class="input-group-text decrement-btn">-</button>
                <input type="text" class="form-control bg-white input-qty text-center" value="1" disabled >
                <button class="input-group-text increment-btn">+</button>
              </div>
            </div>
            <div>
            <h5>Avilable Sizes</h5>
            <span class="fw-bold" ><?= $product['sizes']; ?></span>
            <div class="col-md-6">
            <input type="text" class="form-control mt-3" id="shoesize" placeholder="Type your size" name="size">
            </div>
            </div>
            
      

          <div class="row">
            <div class="col-md-6 mt-3">
              <button class="btn btn-primary px-4 addToCartbtn" value="<?=$product['id']; ?>" ><i class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
            </div>
            <div class="col-md-6 mt-3">
              <button class="btn btn-danger px-4" ><i class="fa fa-heart me-2"></i>Add to Wishlist</button>
            </div>
          </div>
          <hr>
          <h6> Product Description</h6>
          


        
        

          <p><?= $product['description']; ?></p>
        </div>
      </div>
    </div>
  </div>

    <?php
  }
  else
  {
    echo "Product not found!"; 
  }

}
else
{
  echo "somthing went wrong";
}
include('includes/footer.php')?>