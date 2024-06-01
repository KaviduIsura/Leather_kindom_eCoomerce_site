<?php
 session_start();

 if(isset($_SESSION['auth'])){
  $_SESSION['message']="You already Logged In!";
  header('Location: index.php');
  exit();

 }

 include('includes/header.php') 
 ?>
<link rel="stylesheet" href="assets/css/register.css">
<div class="mt-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <?php 
        if(isset($_SESSION['message']))
        {
          ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> <?= $_SESSION['message']?>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php 
          unset($_SESSION['message']);
      } 
      ?>
        <div class="card">
          <div class="card-header">
            <h4 class="hRegister">Registation Form</h4>


          </div>
          <div class="card-body">
            <form action="function/authcode.php" method="POST">
            <div class="mb-3 input-box">
                <label  class="form-label">Name</label>
                <input type="text" name="name" class="form-control"placeholder="Enter your Name">
                
              </div>
              <div class="mb-3 input-box">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter your Email">
                 
              </div>
              <div class="mb-3 input-box">
                <label  class="form-label">Phone</label>
                <input type="number" name="phone" class="form-control"placeholder="Enter your Phone">
                
              </div>
              <div class="mb-3 input-box">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
              </div>
              <div class="mb-3 input-box">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Confirm your Password">
              </div>

         
              <button type="submit" name="register_btn"class="btn btn-secondary btnregister">Register</button>
            </form>

          </div>
        </div>


      </div>
    </div>
  </div>

</div>


<?php include('includes/footer.php') ?>