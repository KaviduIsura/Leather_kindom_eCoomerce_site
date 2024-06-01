<?php
include('includes/header.php');
include('../middleware/adminmiddleware.php');
include('../function/myfunction.php');
?>
<style>
   body{
    background-image: url('../assets/img/adminbg.jpeg');
  }
  .procard{
    border-radius: 10px;
    border:2px solid #C7CBE8 ;
    box-shadow:0 0 30px #1B237E;
    background-color: #3F50B6;
   
  }
  .card-header h4{
    text-align: center;
    font-size: 36px;
    color: #464646;
  }
  .lbl{
    color: #474747;
    font-weight: 500;
  }
  .btn-back{
    background-color: #43A6F6;
    color: #fff;

  }
  .btn-submit{
    background-color: #1B76D1;
    color: #fff;
  }
 </style>
<div class="container">
  <div class="row">
    <div class="col-md-12">

    <?php 
      if (isset($_GET['id']))
      {
          $id=$_GET['id'];
          $product=getById("products",$id);

          if(mysqli_num_rows($product)>0)
          {
            $data=mysqli_fetch_array($product);
            ?>
        <div class="card procard">
        <div class="card-header">
          <h4>Edit Product
          <a href="product.php" class="btn btn-back float-end" >Back</a>
         </h4>
          <div class="card-body">

            <form action="code.php" method="POST" enctype="multipart/form-data">
              <div class="row">

                <div class="col-md-12">
                  <label class="mb-2 lbl">Select Category</label>
                  <select class="form-select" name="category_id">
                    <option selected>Select Category</option>
                    <?php
                    $categories = getAll("categories");

                    if (mysqli_num_rows($categories) > 0) 
                    {
                      foreach ($categories as $item) {
                    ?>
                        <option value="<?= $item['id']; ?>" <?= $data['category_id']== $item['id']?'selected':'' ?>> <?= $item['name'] ?> </option>

                    <?php
                      }
                    } else 
                    {
                      echo "No category avilable.";
                    }

                    ?>
                  </select>
                </div>
                <input type="hidden" name="product_id" value="<?= $data['id'];?>" >

                <div class="col-md-6">
                  <label class="mb-2 lbl">Name</label>
                  <input type="text" required name="name" value="<?= $data['name'];?>" placeholder="Enter the name" class="form-control mb-2">
                </div>

                <div class="col-md-6">
                  <label class="mb-2 lbl">Slug</label>
                  <input type="text" required name="slug" value="<?= $data['slug'];?>" placeholder="Enter slug" class="form-control mb-2">
                </div>
                
                <div class="col-md-12">
                  <label class="mb-2 lbl">Small Description</label>
                  <textarea required name="small_description" class="form-control mb-2" placeholder="Enter the Small Description" rows="3"><?= $data['small_description'];?></textarea>
                </div>

                <div class="col-md-12">
                  <label class="mb-2 lbl">Description</label>
                  <textarea required name="description" class="form-control mb-2" placeholder="Enter the Description" rows="3"><?= $data['description'];?></textarea>
                </div>

                <div class="col-md-6">
                  <label class="mb-2 lbl">Original Price</label>
                  <input type="number" required name="original_price" value="<?= $data['original_price'];?>" placeholder="Enter the Original Price" class="form-control mb-2">
                </div>

                <div class="col-md-6">
                  <label class="mb-2 lbl">Selling Price</label>
                  <input type="number" required name="selling_price" value="<?= $data['selling_price'];?>" placeholder="Enter Selling Price" class="form-control mb-2">
                </div>

                <div class="col-md-12">
                  <label class="mb-2 lbl">Avilable Sizes</label>
                  <input type="text" required name="sizes" value="<?= $data['sizes'];?>" placeholder="Type avilable sizes" class="form-control mb-2">
                </div>

                <div class="col-md-12">
                  <label class="mb-2 lbl">Upload Image</label>
                  <input type="hidden" name="old_image" value="<?= $data['image'];?>">
                  <input type="file" name="image" placeholder="Choose Your Image" class="form-control mb-2">
                  <label class="mb-2 lbl">Current Image</label>
                  <img src="../uploads/<?= $data['image'];?>" alt="product image" width="70px" height="70px" >
                </div>

                <div class="row">
                <div class="col-md-6">
                  <label class="mb-2 lbl">Quantity</label>
                  <input type="number" required name="qty" value="<?= $data['qty'];?>" placeholder="Enter the Quantity" class="form-control mb-2">
                </div>
                <div class="col-md-3">
                  <label class="mb-2 lbl">Status</label><br>
                  <input type="checkbox" name="status" <?= $data['status'] ==0? '':'checked'?>>
                </div>

                <div class="col-md-3">
                  <label class="mb-2 lbl">Trending</label><br>
                  <input type="checkbox" name="trending" <?= $data['trending'] ==0? '':'checked'?>>
                </div>
                </div>

                <div class="col-md-12">
                  <label class="mb-2 lbl">Meta-title</label>
                  <input type="text" required name="meta_title" value="<?= $data['meta_title'];?>" placeholder="Enter the Meta-title" class="form-control mb-2">
                </div>

                <div class="col-md-12">
                  <label class="mb-2 lbl">Meta-Description</label>
                  <textarea required name="meta_description" class="form-control mb-2" placeholder="Enter the Meta Description" rows="3"><?= $data['meta_description'];?></textarea>
                </div>

                <div class="col-md-12">
                  <label class="mb-2 lbl">Meta-Keywords</label>
                  <textarea required name="meta_keywords" class="form-control mb-2" placeholder="Enter the Meta keywords" rows="3"><?= $data['meta_keywords'];?></textarea>
                </div>

                

                <div class="col-md-12">
                  <button type="submit" name="btn_edit_product" class="btn btn-submit">Update</button>
                </div>

              </div>
            </form>


          </div>
        </div>
                </div>
            <?php
          }
          else
          {
               echo "Product is not found";
          }
     }
        
      else
      {
        echo "Id missing from url";
      }
       ?>
    </div>


  </div>
</div>
<?php include('includes/footer.php'); ?>