<?php
session_start();
include('function/userfunction.php'); 
include('includes/header.php');


 ?>

 <style>

.con{
  margin-top: 10px;
}
.products{
  width: 100%;
  height: 70vh;
  padding: 25px 0;
  margin-top: 1px;
  
}

.products1 h1{
  margin: 35px 0;
  font-size: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-transform: uppercase;
  background: linear-gradient(to right, #08D0E6,#7A0979);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;  
  
}

.products .box{
  width: 90%;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-gap: 25px 0;
  gap: 25px;
}

.products .box .card{
  width: 290px;
  height: 500px;
  box-shadow: 0 0 8px #08D0E6;
  border-radius: 5px;
  text-align: center;
  padding: 10px 20px;
  background: #f6f6f6;
  margin-top: 20px;
}

.products .box .card .small_card{
  display: flex;
  flex-flow: column;
  position: absolute;
  margin: 10px 0;
  transform: translateX(-20px);
  transition: 0.3s;
  opacity: 0;
}

.products .box .card:hover .small_card{
  transform: translateX(2px);
  cursor: pointer;
  opacity: 1;
}

.products .box .card .image{
  display: flex;
  align-items: center;
  justify-content: center;
}

.products .box .card .image img{
  width: 150px;
  margin: 15px 0;
  transition: 0.3s;
}

.products .box .card:hover .image img{
  transform: scale(1.1);
}

.products .box .card .small_card i{
  width: 45px;
  height: 45px;
  border-radius: 5px;
  font-size: 18px;
  margin: 2px 0;
  line-height: 40px;
  border: 2px solid #999999;
  transition: 0.2s;
}

.products .box .card .small_card i:hover{
  color: #08D0E6;
}

.products .box .card .products_text h2{
  font-size: 30px;
  margin-top: 15px;
  color: #000;
}

.products .box .card .products_text p{
  color: #91919191;
  line-height: 21px;
  margin: 8px 0;
  color: #000;
}

.products .box .card .products_text h3{
  margin: 7px 0;
  color: #000;
}

.products .box .card .products_text .products_star{
  color: orange;
  margin-bottom: 19px;
  cursor: pointer;
}

.products .box .card .products_text .btn{
  text-decoration: none;
  padding: 10px 20px;
  background: linear-gradient(to right, #08D0E6 , #6c14d0);
  color: white;
}
.addressbar{
  color: #000;
  background-color: #E7E8EA;
}
.addresses{
  text-decoration: none;
  color: 000;
}
.address{
  color: #000;
}
hr{
  color: #08D0E6;
  border: 2px solid #08D0E6;
}
 </style>

<div class="py-3 addressbar">
  <div class="container">
    <h5 class="addresses">
      <a class="address" href  ="index.php">Home /
      </a> 
      <a class="address" href  ="category.php">Collections /
    </a> 
      <?=$category['name'];?>

    </h5>
  </div>
</div>

</div>

  <div class="container ">
    <div class="products1" id="Products1">
    <div class="row ">
      <div class="col-md-12 ">
          <h1>All Products</h1>
          <hr>
          <div class="row">
          <?php 
          
          $products= getAll("products");

          if(mysqli_num_rows($products) >0)
          {
            foreach($products as $item)
            {
              ?>
                    <div class="col-md-3">
                        <div class="products" id="Products">
                            <div class="box">
                                <div class="card">
                                    <a href="product-viwe.php?product=<?= $item['slug'];?>">
                                        <div class="small_card">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        <i class="fa fa-share" aria-hidden="true"></i>
                                        </div>
                                        <div class="image">
                                            <img src="uploads/<?= $item['image']; ?>" alt="Product Photo" width="300px" height="200" >
                                        </div>
                                        <div class="products_text">
                                          <h2><?= $item['name']; ?></h2>
                                          <p><?= $item['small_description']; ?></p>
                                          <h3>Rs .<?= $item['selling_price']; ?>.00</h3>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          
                                            <div class="products_star">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                          
                                                <a href="product-viwe.php?product=<?= $item['slug'];?>" class="btn">Add To Cart</a>
                                  
                                              </div>
                                          </a>
                                    
                                    </div>
                                </div>
                            </div> 
                        </div>     
                    <?php
                       
            }


          }
          else
          {
            echo "No Records Found";
          }
          
          ?>
          </div>

      </div>
    </div>
  </div>
</div>
<?php


include('includes/footer.php')?>