<?php
session_start();
include('function/userfunction.php'); 
include('includes/header.php');

 

 ?>
 <link rel="stylesheet" href="assets/css/category.css">


 <div class="py-3 addressbar">
  <div class="container ">
    <h5 class="addresses">
      <a class="address" href  ="index.php">Home /
      </a>
      <a  class="address" href  ="category.php"> Collections
      </a>  
      </h5>
  </div>
</div>

</div>

  <div class="container">
      <div class="row">
      <div class="products1" id="Products1">
        <h1>Our Collections </h1>
          <div class="col-md-12">
            <div class="row">
                <?php 
                $categories= getAllActive("categories");

                if(mysqli_num_rows($categories) >0)
                {
                  foreach($categories as $item)
                  {
                    ?>
                      <div class="col-md-3">
                          <div class="products" id="products" >
                            <div class="box">
                              <div class="card">
                                <a href="products.php?category=<?= $item['slug']; ?>">
                                <div class="image">
                                  <img src="uploads/<?= $item['image']; ?>" alt="Category Photo" width="300px" height="200" >
                                </div>
                                <div class="products_text">
                                      <h2><?= $item['name']; ?></h2>
                                      <p><?= $item['description']; ?></p>
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
</div>
<?php include('includes/footer.php')?>