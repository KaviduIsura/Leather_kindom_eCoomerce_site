<style>
 footer{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  background-color: #DFDFDF;
  height: 400px;
  
}
footer .col{
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  flex-wrap: wrap;
  margin-bottom: 20px;
  margin-left: 50px;
  margin-top: 30px;
  margin-right: 50px;
}
footer .logo{
  margin-bottom: 30px;
}
footer h4{
  font-size: 14px;
  padding-bottom: 20px;

}
footer p{
  font-size: 13px;
  margin: 0 0 8px;
  
}
footer a{
  font-size: 13px;
  text-decoration: none;
  color: #222;
  margin-bottom: 10px;
  
}

footer .follow{
  margin-top: 20px;
}
footer .follow i{
  color: #465b52;
  padding-right: 4px;
  cursor: pointer;

}
footer .install .row img{
  border: 1px solid #08D0E6 ;
  border-radius: 6px;
  width:150px;
  display: flex;
  justify-content: space-between;
}
footer .install img{
  margin: 10px 0 15px 0;
}
footer .follow i:hover,
footer a:hover{
  color: #08D0E6 ;
}
.copyright{
  width: 100%;
  text-align: center;
  background-color: #DFDFDF;
}

#newsletter{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  align-items: center;
  background-image: url("assets/img/b14.png");
  background-repeat: no-repeat;
  background-position:20% 30%;
  background-color: #245E7A;
  margin-top: 50px;
  height: 100px;
  

}
#newsletter .form{
  display: flex;
  width: 40%;
  margin-right: 20px;
}
#newsletter h4{
  font-size: 22px;
  font-weight: 700;
  color: #fff;

}
#newsletter p{
  font-size: 14px;
  font-weight: 600;
  color: #818ea0;

}

#newsletter p span{
  color: #ffbd27;

}
#newsletter input{
  height: 3.125rem;
  padding: 0 1.25rem;
  font-size: 14px;
  width: 100%;
  border-radius: 4px;
  border:1px solid transparent;
  outline: none;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
#newsletter button{
  background-color: #6FE5EF;
  white-space: nowrap;
  border-radius: 4px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  font-size: 14px;
  font-weight: 500;
  padding:15px 30px;
  color:#000;
  cursor: pointer;
  border:none;
  outline: none;
  
  

}
.logoimg{
  width: 80px;
  height: 50px;

}
</style>

 <!-------------------------NewsLetter section------------------->

 <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>
          Get E-mail updatesabout our latest shop and
          <span>special offers.</span>
        </p>
      </div>
      <div class="form">
        <input type="text" placeholder="Your email Address" />
        <button class="nomal">SignUp</button>
      </div>
    </section>


<div class="footer">
<footer class="section-p1">
      <div class="col">
        <h2 class="logo" ><img src="image/logoimgage.JPG" class="logoimg" width="50px" height="50px" alt="">
        <h4>Contact</h4>
        <p><strong>Address : </strong>484 Peradeniya Rd, Kandy 20000.</p>
        <p><strong>Phone : </strong>055-1234567 , 077-765734</p>
        <p><strong>Hours : </strong>8:00 a.m - 10:00p.m sunday close</p>
        <div class="follow">
          <h4>Follow us</h4>
          <div class="icon">
          <a href="https://l.instagram.com/?u=https%3A%2F%2Fwww.facebook.com%2Fleatherkingdomkandy%2F&e=AT3JxmXzLflNZfn6tg_b3QJ_taTiLDzxVU_nGylOM8hIrxuyLfclkiBh9yJoWaF1GEEZN6Xj_J9qBi0oQQiiPN6hwjuopo6e"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/leather_kingdom_kandy?igshid=OGQ5ZDc2ODk2ZA=="> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="about.php">About us</a>
        <a href="#">Delivary Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="contact.php">Contact us</a>
      </div>

      <div class="col">
        <h4>My Account</h4>
        <a href="register.php">Sign In</a>
        <a href="cart.php">Viwe Cart</a>
        <a href=" #">My Wishlist</a>
        <a href="#">Help</a>
        
      </div>

      <div class="col install">
        <h4>Install App</h4>
        <p>From Apps Store Google Play</p>
        <div class="row">
          <img src="assets/img/app.jpg" alt="" />
          <img src="assets/img/play.jpg" alt="" />
        </div>
        <p>Secure Payment Gateways</p>
        <img src="assets/img/pay.png" alt="" />
      </div>
    </footer>
  
    </div>
    
    
    <!-------------------------JsConnections section------------------->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script src="js/main.js"></script>
  </body>
</html>
    
    
    
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
     <!-- AlertJS javascript -->
 <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
 
 <script>
    
    alertify.set('notifier','position', 'bottom-right');
  <?php 

    if(isset($_SESSION['message']))
    {
      ?>
        alertify.success('<?= $_SESSION['message']?>');
        
      <?php
      unset($_SESSION['message']);
    }
    ?>
 
    
  
 </script>

  </body>
</html>