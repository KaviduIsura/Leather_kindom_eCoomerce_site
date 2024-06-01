<?php
include('includes/header.php');
include('../middleware/adminmiddleware.php');
include('../function/myfunction.php');
?>

 <!-- EXTERNAL CSS LINK -->
 <link rel="stylesheet" href="./assets/css/add_product.css">

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card procard">
        <div class="card-header">
          <h4>Add Product </h4>
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
                        <option value="<?= $item['id'] ?>"> <?= $item['name'] ?> </option>

                    <?php
                      }
                    } else 
                    {
                      echo "No category avilable.";
                    }

                    ?>
                  </select>
                </div>

                <div class="col-md-6">
                  <label class="mb-2 lbl">Name</label>
                  <input type="text" required name="name" placeholder="Enter the name" class="form-control mb-2">
                </div>

                <div class="col-md-6">
                  <label class="mb-2 lbl">Slug</label>
                  <input type="text" required name="slug" placeholder="Enter slug" class="form-control mb-2">
                </div>
                
                <div class="col-md-12">
                  <label class="mb-2 lbl">Small Description</label>
                  <textarea required name="small_description" class="form-control mb-2" placeholder="Enter the Small Description" rows="3"></textarea>
                </div>

                <div class="col-md-12">
                  <label class="mb-2 lbl">Description</label>
                  <textarea required name="description" class="form-control mb-2" placeholder="Enter the Description" rows="3"></textarea>
                </div>

                <div class="col-md-6">
                  <label class="mb-2 lbl">Original Price</label>
                  <input type="number" required name="original_price" placeholder="Enter the Original Price" class="form-control mb-2">
                </div>

                <div class="col-md-6">
                  <label class="mb-2 lbl">Selling Price</label>
                  <input type="number" required name="selling_price" placeholder="Enter Selling Price" class="form-control mb-2">
                </div>

                <div class="col-md-12">
                  <label class="mb-2 lbl">Avilable Sizes</label>
                  <input type="text" required name="sizes" placeholder="Type avilable sizes" class="form-control mb-2">
                </div>


                <div class="col-md-12">
                  <label class="mb-2 lbl">Upload Image</label>
                  <input type="file" required name="image" placeholder="Choose Your Image" class="form-control mb-2">
                </div>

                <div class="row">
                <div class="col-md-6">
                  <label class="mb-2 lbl">Quantity</label>
                  <input type="number" required name="qty" placeholder="Enter the Quantity" class="form-control mb-2">
                </div>
                <div class="col-md-3">
                  <label class="mb-2 lbl">Status</label><br>
                  <input type="checkbox" name="status">
                </div>

                <div class="col-md-3">
                  <label class="mb-2 lbl">Trending</label><br>
                  <input type="checkbox" name="treneding">
                </div>
                </div>

                <div class="col-md-12">
                  <label class="mb-2 lbl">Meta-title</label>
                  <input type="text" required name="meta_title" placeholder="Enter the Meta-title" class="form-control mb-2">
                </div>

                <div class="col-md-12">
                  <label class="mb-2 lbl">Meta-Description</label>
                  <textarea required name="meta_description" class="form-control mb-2" placeholder="Enter the Meta Description" rows="3"></textarea>
                </div>

                <div class="col-md-12">
                  <label class="mb-2 lbl">Meta-Keywords</label>
                  <textarea required name="meta_keywords" class="form-control mb-2" placeholder="Enter the Meta keywords" rows="3"></textarea>
                </div>

                

                <div class="col-md-12">
                  <button type="submit" name="btn_add_product" class="btn submit_btn">Save</button>
                </div>

              </div>
            </form>


          </div>
        </div>
      </div>
    </div>


  </div>
</div>
<?php include('includes/footer.php'); ?>