<?php 
include('includes/header.php');
 include('../middleware/adminmiddleware.php');
 include('../function/myfunction.php');
 ?>
 
 <!-- EXTERNAL CSS LINK -->
 <link rel="stylesheet" href="./assets/css/category.css">

<div class="container">
 <div class="col-md-12">
  <div class="card catcard">
    <div class="card-header">
      <h4>Categories</h4>
    </div>
    <div class="card-body" id="category_table" >
      <table class="table tablecat">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>

        <?php
        $category=getAll("categories");
          if(mysqli_num_rows($category) > 0){

            foreach($category as $item)
            {
              ?>
               <tr>
                  <td><?= $item['id'];?></td>
                  <td><?= $item['name'];?></td>
                  <td>
                    <img src="../uploads/<?= $item['image'];?>"width="50px" height="50px" alt="<?= $item['image'];?>">
                  </td>
                  <td>
                    <?= $item['status'] == '0'?"visible":"Hidden" ?>
                  </td>
                  
                  <td>
                    <a href="edit_category.php?id=<?= $item['id'];?>" class="btn btn-sm btnedit">Edit</a>
                    <!--<form action="code.php" method="POST">
                      <input type="hidden" name="category_id" value="<?= $item['id'] ?>">
                    <button type="submit" class="btn btn-danger" name="btn_delete">Delete</button>
                    </form>-->
                    <button type="button" class="btn btn-sm category_delete_btn" value="<?= $item['id'];?>">Delete</button>

                  </td>
              </tr>


              <?php
            }


          }else
          {
            echo "No Records Found";
          }


        ?>
         
        </tbody>
      </table>
    </div>
  </div>
 </div>
</div>
<?php include('includes/footer.php'); ?>