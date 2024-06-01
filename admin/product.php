<?php 
include('includes/header.php');
include('../middleware/adminmiddleware.php');

include('../function/myfunction.php');
 ?>
 <style>
   body{
    background-image: url('../assets/img/adminbg.jpeg');
  }
  .tablepto{
    border-radius: 5px;
    
  }
  .tablepro th{
    color: #1B237E;
    font-weight: 700;
    font-size: 18px;
  }
  
  .tablepro tr{
    background-color: #C7CBE8;
    text-align: center;
    color: #474747;
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
  .btnedit{
    background-color: #43A6F6;
    color: #fff;

  }
  .product_delete_btn{
    background-color: #1B76D1;
    color: #fff;
  }
 </style>
<div class="container">
 <div class="col-md-12">
  <div class="card procard">
    <div class="card-header">
      <h4>Products</h4>
    </div>
    <div class="card-body" id="product_table" >
      <table class="table tablepro ">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>

          </tr>
        </thead>
        <tbody>

        <?php
        $product=getAll("products");
          if(mysqli_num_rows($product) > 0){

            foreach($product as $item)
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
                    <a href="edit_product.php?id=<?= $item['id'];?>" class="btn btn-sm btnedit ">Edit</a>
                    
                  </td>
                  <td>
                  
                      
                    <button type="button" class="btn btn-sm product_delete_btn" value="<?= $item['id'];?>">Delete</button>
                    
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