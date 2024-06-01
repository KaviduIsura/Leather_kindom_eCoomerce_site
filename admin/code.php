<?php 
include('../config/dbcon.php');
include('../function/myfunction.php');


if(isset($_POST['btn-category']))
{
  $name =$_POST['name'];
  $slug =$_POST['slug'];
  $description=$_POST['description'];
  $meta_title=$_POST['meta_title'];
  $meta_description=$_POST['meta_description'];
  $meta_keywords=$_POST['meta_keywords'];
  $status=$_POST['status'] ? '1':'0';
  $popular=$_POST['popular'] ? '1':'0';

  $image=$_FILES['image']['name'];

  $path= "../uploads";

  $image_ext=pathinfo($image,PATHINFO_EXTENSION);
  $filename=time().'.'.$image_ext;

  $query="INSERT INTO categories
  (name,slug,description,meta_title,meta_description,meta_keywords,status,popular,image)
  VALUES('$name','$slug','$description','$meta_title','$meta_description','$meta_keywords','$status',
  '$popular','$filename')";

  $query_run=mysqli_query($con,$query); 

  if($query_run)
  {
    move_uploaded_file($_FILES['image']['tmp_name'], $path. '/'.$filename);

      redirect("add_category.php","Category Added Successfully!");
  }
  else
  {
    redirect("add_category.php","Somthing went wrong!");
  }


}
elseif(isset($_POST['btn-update']))
{
  $category_id=$_POST['$category_id'];
  $name =$_POST['name'];
  $slug =$_POST['slug'];
  $description=$_POST['description'];
  $meta_title=$_POST['meta_title'];
  $meta_description=$_POST['meta_description'];
  $meta_keywords=$_POST['meta_keywords'];
  $status=$_POST['status'] ? '1':'0';
  $popular=$_POST['popular'] ? '1':'0';

  $new_image=$_FILES['image']['name'];
  $old_image=$_POST['old_image'];

  

  if($new_image !="")
  {
    //$update_filename= $new_image;
    $image_ext=pathinfo($new_image,PATHINFO_EXTENSION);
    $update_filename=time().'.'.$image_ext;

  }
  else
  {
    $update_filename= $old_image;
  }
  $path= "../uploads";

  $update_query="UPDATE categories SET name='$name', slug='$slug', description='$description',
  meta_title='$meta_title', meta_description='$meta_description',meta_keywords='$meta_keywords',
  status='$status', popular='$popular', image='$update_filename' WHERE id='$category_id'";

  $update_query_run=mysqli_query($con,$update_query);

  if($update_query_run)
  {
    if($_FILES['image']['name'] != "")
    {
      move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);
      if(file_exists("../uploads/".$old_image))
      {
        unlink("../uploads/".$old_image);
      }
    }
    redirect("edit_category.php?id= $category_id","Category update successfully!");
  }
  else
  {
    redirect("edit_category.php?id= $category_id","Something went wrong!");
  }

}
else if(isset($_POST['category_delete_btn']))
{
  $category_id=mysqli_real_escape_string($con,$_POST['category_id']);

  $category_query="SELECT * FROM categories WHERE id='$category_id'";
  $category_query_run=mysqli_query($con,$category_query);
  $category_data=mysqli_fetch_array($category_query_run);
  $image=$category_data['image'];

  $delete_query="DELETE FROM categories WHERE id ='$category_id'";
  $delete_query_run=mysqli_query($con,$delete_query);

  if($delete_query_run)
  {
    if(file_exists("../uploads/".$image))
    {
      unlink("../uploads/".$image);
    }
    //redirect("category.php","Category Deleted Successfully!"); 
    echo 200;
  }
  else
  {
    //redirect("category.php","Something went wrong!");
    echo 500;
  }

}
else if(isset($_POST['btn_add_product']))
{
  $category_id=$_POST['category_id'];

  $name =$_POST['name'];
  $slug =$_POST['slug'];
  $small_description=$_POST['small_description'];
  $description=$_POST['description'];
  $original_price=$_POST['original_price'];
  $selling_price=$_POST['selling_price'];
  $qty=$_POST['qty'];
  $sizes=$_POST['sizes'];
  $meta_title=$_POST['meta_title'];
  $meta_description=$_POST['meta_description'];
  $meta_keywords=$_POST['meta_keywords'];
  $status=$_POST['status'] ? '1':'0';
  $trending=$_POST['trending'] ? '1':'0';

  $image=$_FILES['image']['name'];

  $path= "../uploads";

  $image_ext=pathinfo($image,PATHINFO_EXTENSION);
  $filename=time().'.'.$image_ext;

  if($name !="" && $slug != "" && $small_description!= "" && $description != "")
  {

    $product_query = "INSERT INTO products (category_id, name, slug, small_description, description, original_price,
    selling_price, qty, sizes, meta_title, meta_description, meta_keywords, status, trending, image) 
    VALUES ('$category_id', '$name', '$slug', '$small_description', '$description', 
    '$original_price', '$selling_price', '$qty','$sizes', '$meta_title', '$meta_description', 
    '$meta_keywords', '$status', '$trending', '$filename')";


      $product_query_run=mysqli_query($con,$product_query);

      if($product_query_run)
      {
        move_uploaded_file($_FILES['image']['tmp_name'], $path. '/'.$filename);

        redirect("add_product.php","product Added Successfully!");
      }
        else
      {
        redirect("add_product.php","Something went wrong!");

      }
  }
  else
  {
    redirect("add_product.php","All fields Manditary!");

  }

}
else if(isset($_POST['btn_edit_product']))
{
  $product_id=$_POST['product_id'];
  $category_id=$_POST['category_id'];

  $name =$_POST['name'];
  $slug =$_POST['slug'];
  $small_description=$_POST['small_description'];
  $description=$_POST['description'];
  $original_price=$_POST['original_price'];
  $selling_price=$_POST['selling_price'];
  $sizes=$_POST['sizes'];
  $qty=$_POST['qty'];
  $meta_title=$_POST['meta_title'];
  $meta_description=$_POST['meta_description'];
  $meta_keywords=$_POST['meta_keywords'];
  $status=$_POST['status'] ? '1':'0';
  $trending=$_POST['trending'] ? '1':'0';


  $path= "../uploads";

  $new_image=$_FILES['image']['name'];
  $old_image=$_POST['old_image'];

  

  if($new_image !="")
  {
    //$update_filename= $new_image;
    $image_ext=pathinfo($new_image,PATHINFO_EXTENSION);
    $update_filename=time().'.'.$image_ext;

  }
  else
  {
    $update_filename= $old_image;
  }
  $update_product_query="UPDATE products SET name='$name', slug='$slug', small_description='$small_description', description='$description',
  original_price='$original_price', selling_price='$selling_price', sizes='$sizes', qty='$qty', meta_title='$meta_title',
  meta_description='$meta_description', meta_keywords='$meta_keywords', status='$status', trending='$trending', image='$update_filename'
  WHERE id='$product_id' "; 

 $update_product_query_run=mysqli_query($con,$update_product_query);

 if($update_product_query_run)
  {
    if($_FILES['image']['name'] != "")
    {
      move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);
      if(file_exists("../uploads/".$old_image))
      {
        unlink("../uploads/".$old_image);
      }
    }
    redirect("edit_product.php?id= $product_id","Product update successfully!");
  }
  else
  {
    redirect("edit_product.php?id= $product_id","Something went wrong!");
  }

}
else if(isset($_POST['product_delete_btn']))
{
  $product_id=mysqli_real_escape_string($con,$_POST['product_id']);

  $product_query="SELECT * FROM products WHERE id='$product_id'";
  $product_query_run=mysqli_query($con,$product_query);
  $product_data=mysqli_fetch_array($product_query_run);
  $image=$product_data['image'];

  $delete_query="DELETE FROM products WHERE id ='$product_id'";
  $delete_query_run=mysqli_query($con,$delete_query);

  if($delete_query_run)
  {
    if(file_exists("../uploads/".$image))
    {
      unlink("../uploads/".$image);
    }
    //redirect("product.php","Product Deleted Successfully!"); 
    echo 200;
  }
  else
  {
    //redirect("product.php","Something went wrong!");
    echo 500;
  }
}
else if(isset($_POST['update_order_btn']))
{
  $track_no= $_POST['tracking_no'];
  $order_status=$_POST['order_status'];

  $update_query ="UPDATE orders SET status='$order_status' WHERE tracking_no='$track_no' ";
  $update_query_run=mysqli_query($con,$update_query);

  redirect("orders.php?t= $track_no","Order Status update successfully");

}
else
{
  header('Location: ../index.php');
}
?>