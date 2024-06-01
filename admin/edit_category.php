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
  .txtinput{
    border: 2px solid #C7CBE8;
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
      if(isset($_GET['id']))
      {
        $id=$_GET['id'];
        $category= getById("categories",$id);

        if(mysqli_num_rows($category) >0)
        { 
          $data=mysqli_fetch_array($category);
          ?>
              <div class="card">
            <div class="card-header">
              <h4>Edit Category
                <a href="category.php" class="btn btn-back float-end" >Back</a>
              </h4>
              <div class="card-body">

                <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-6">
                      <input type="hidden" name="$category_id" value="<?= $data['id'] ?>" >
                      <label for="" class="lbl" >Name</label>
                      <input type="text"name ="name" value="<?= $data['name'] ?>" placeholder="Enter the name" class="form-control">
                      </div>
                      
                      <div class="col-md-6">
                      <label for="" class="lbl" >Slug</label>
                      <input type="text" name="slug" value="<?= $data['slug'] ?>" placeholder="Enter slug" class="form-control">
                      </div>
                      
                      <div class="col-md-12">
                      <label for="" class="lbl" >Description</label>
                      <textarea name="description" class="form-control" placeholder="Enter the Description" rows="3" ><?= $data['description'] ?></textarea>
                      </div>

                      <div class="col-md-12">
                      <label for="" class="lbl" >Upload Image</label>
                      <input type="file" name="image" placeholder="Choose Your Image" class="form-control">
                      <label for="" class="lbl" >Current Image  </label>
                      <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                      <img src="../uploads/<?= $data['image'] ?>" width="70px" height="70px" alt="">
                      </div>

                      <div class="col-md-12">
                      <label for="" class="lbl" >Meta-title</label>
                      <input type="text" name="meta_title" value="<?= $data['meta_title'] ?>" placeholder="Enter the Meta-title" class="form-control">
                      </div>

                      <div class="col-md-12">
                      <label for="" class="lbl" >Meta-Description</label>
                      <textarea name="meta_description" class="form-control" placeholder="Enter the Meta Description" rows="3" ><?= $data['meta_description']?></textarea>
                      </div>

                      <div class="col-md-12">
                      <label for="" class="lbl" >Meta-Keywords</label>
                      <textarea name="meta_keywords" class="form-control" placeholder="Enter the Meta keywords" rows="3" ><?= $data['meta_keywords'] ?></textarea>
                      </div>

                      <div class="col-md-6">
                      <label for="" class="lbl" >Status</label>
                      <input type="checkbox"name ="status" <?= $data['status']? "checked":"" ?>>
                      </div>
                      
                      <div class="col-md-6">
                      <label for="" class="lbl" >Popular</label>
                      <input type="checkbox" name="popular" <?= $data['popular']? "checked":"" ?>>
                      </div>

                      <div class="col-md-12">
                        <button type="submit" name="btn-update" class="btn btn-submit">Update</button>
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
          echo "Category not found";
        }
      }else
      {
        echo "Id missing from url";
      }

      ?>
      
    </div>
      
    
  </div>
</div>
<?php include('includes/footer.php'); ?>