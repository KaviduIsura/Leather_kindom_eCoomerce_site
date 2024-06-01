<?php
 session_start();

 if(isset($_SESSION['auth'])){
  $_SESSION['message']="You already Logged In!";
  header('Location: index.php');
  exit();

 }
 include('includes/header.php') 

 ?>
 <link rel="stylesheet" href="assets/css/login.css">
  <div class="container">
    <div class="row justify-content-center">
      
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
      
        <div class="card" >
          <div class="card-header">
            <h4 class="hlogin">Login Form</h4>


          </div>
          <div class="card-body">
            <form action="function/authcode.php" method="POST">
            
              <div class="mb-3 input-box">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control iinput " id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter your Email">
                
              <div class="mb-3 input-box">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
              </div>
              <button type="submit" name="login_btn"class="btn btn-secondary btnlog">Login</button>
              <div id="info">
                <span>If you haven't account plase Register.</span>
              </div>

              <div class="btn btn-secondary btnlog">
                <a class="regbtn" href="register.php">Register</a>
              </div>
            
            </form>
              
              
              
         
              

          </div>
        
        

      </div>
    </div>
  </div>

</div>
<?php include('includes/footer.php') ?>



