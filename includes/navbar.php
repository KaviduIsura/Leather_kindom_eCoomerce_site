<!--navigation-->
<style>
  .navigation{
  position: sticky;
  top: 0;
  margin: 0;
  width: 100%;
  padding: 8px 40px;
  backdrop-filter:blur(20px);
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 99;
  background: linear-gradient(to top, #08D0E6 , #fff);
  
  }
  .nav-item a{
  position: relative;
  font-size: 1.1em;
  color: #000;
  text-decoration: none;
  font-weight: 400;
  margin-left: 20px;
  font-weight: bold;
  cursor: pointer;
  
  }
  .nav-item a::after{
  content:'';
  position:absolute;
  left:0;
  bottom:-2px;
  width:100%;
  height:3px;
  background:#5F01D2;
  border-radius:5px;
  transform:scaleX(0);
  transform-origin:right;
  transition:transform.4s;
  

}
.nav-item a:hover::after{
  transform:scaleX(1);
  transform-origin:left;

}
.dropdown-menu{
  position: relative;
  font-size: 1.1em;
  color: #000;
  text-decoration: none;
  font-weight: 500;
  margin-left: 20px;
  background-color: #fff;
}

.icons i{
    margin: 0 6px;
    cursor: pointer;
    font-size: 18px;
    transition: 0.3s;
    color: black;
    display: inline-block;
  
}

.icons i:hover{
    color: #c72092;
}
.logo{
    font-size: 20px;
    color: #6c14d0;
    margin: 5px 0;
    cursor: pointer;
    position: relative;
    left: -4%;
    font-weight: 600;
}

.logo span{
    color: #c72092 ;
    text-decoration: underline;
}
.logoimg{
  margin-right: 70px;
  width: 80px;
  height: 50px;

}



</style>
<nav class="navbar navbar-expand-lg sticky-top navigation" >
  <div class="container">
    
    <img src="image/logoimgage.JPG" class="logoimg "  alt="">
    <a class="logo">Leather Kingdom</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="category.php">Collections</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php?category=<?= $item['slug']; ?>">Products</a>
        </li>
        <?php 
        if(isset($_SESSION['auth']))
        { 
          ?>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user me-1" aria-hidden="true"></i>
            My Profile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cart.php"><i class="fa fa-shopping-cart me-3" aria-hidden="true"></i>Cart</a></li>
            <li><a class="dropdown-item" href="my-orders.php"><i class="fa fa-list-alt me-3" aria-hidden="true"></i>Orders</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out me-3" aria-hidden="true"></i>Log out</a></li>
          </ul>
        </li>
        
        
        <?php  
        }
        else{
          ?>
           
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
       <?php
        }
        ?>
       
      </ul>
      
    </div>
    </div>
  </div>
 
</nav>