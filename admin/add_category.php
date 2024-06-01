<?php 
include('includes/header.php');
include('../middleware/adminmiddleware.php');
 ?>
 
 <!-- EXTERNAL CSS LINK -->
<link rel="stylesheet" href="./assets/css/add_category.css">


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card procard">
        <div class="card-header">
          <h4>Add Category</h4>
          <div class="card-body">

            <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  
                  <div class="col-md-6">
                  <label for=""   class="lbl" >Name</label>
                  <input type="text"name ="name" placeholder="Enter the name" class="form-control ">
                  </div>
                  
                  <div class="col-md-6">
                  <label for="" class="lbl"  >Slug</label>
                  <input type="text" name="slug" placeholder="Enter slug" class="form-control">
                  </div>
                  
                  <div class="col-md-12">
                  <label for="" class="lbl"  >Description</label>
                  <textarea name="description" class="form-control" placeholder="Enter the Description" rows="3"></textarea>
                  </div>

                  <div class="col-md-12">
                  <label for="" class="lbl"  >Upload Image</label>
                  <input type="file" name="image" placeholder="Choose Your Image" class="form-control">
                  </div>

                  <div class="col-md-12">
                  <label for="" class="lbl"  >Meta-title</label>
                  <input type="text" name="meta_title" placeholder="Enter the Meta-title" class="form-control">
                  </div>

                  <div class="col-md-12">
                  <label for="" class="lbl"  >Meta-Description</label>
                  <textarea name="meta_description" class="form-control" placeholder="Enter the Meta Description" rows="3"></textarea>
                  </div>

                  <div class="col-md-12">
                  <label for="" class="lbl"  >Meta-Keywords</label>
                  <textarea name="meta_keywords" class="form-control" placeholder="Enter the Meta keywords" rows="3"></textarea>
                  </div>

                  <div class="col-md-6">
                  <label for="" class="lbl"  >Status</label>
                  <input type="checkbox"name ="status">
                  </div>
                  
                  <div class="col-md-6">
                  <label for="" class="lbl"  >Popular</label>
                  <input type="checkbox" name="popular">
                  </div>

                  <div class="col-md-12">
                    <button type="submit" name="btn-category" class="btn submit_btn">Save</button>
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