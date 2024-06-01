 <?php
include ('includes/header.php');

 ?>
<style>
#page-header{
  background-image: url("assets/img/b2.jpg");
  width:100%;
  height: 40vh;
  background-size:cover;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  flex-direction: column;
  padding: 14px;

}
#page-header h2,
#page-header p{
  color: #fff;
}
/*cotact details*/
#contact-details{
  display:flex;
  align-items:center;
  justify-content: space-between;
  padding: 40px 80px;
}
#contact-details .details{
  width: 40%;
}
#contact-details .details span,
#form-details form span{
  font-size: 12px;
}
#contact-details .details h2,
#form-details form h2{
  font-size: 26px;
  line-height: 35px;
  padding: 20px 0;

}
#contact-details .details h3{
  font-size: 16px;
  padding-bottom: 15px;
 
}
#contact-details .details li{
  list-style: none;
  display: flex;
  padding: 10px 0;
}
#contact-details .details li i{
  font-size: 14px;
  padding-right: 22px;
}
#contact-details .details li p{
  margin: 0;
  font-size: 14px;
}
#contact-details .map{
  width: 55%;
  height: 400px;
}
#contact-details .map iframe{
  width: 100%;
  height: 100%;
}
#form-details{
  display: flex;
  justify-content: space-between;
  margin: 30px;
  padding: 80px;
  border: 1px solid #e1e1e1;
  
}
#form-details form{
  width: 65%;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  box-shadow: 2px solid #08D0E6;
}
#form-details form input,
#form-details form textarea{
  width: 100%;
  padding:12px 15px;
  outline: none;
  margin-bottom: 20px;
  border:1px solid #e1e1e1;
}
#form-details form button{
  background-color: #08D0E6;
  color: #fff;
}
#form-details .people div{
  padding-bottom: 25px;
  display: flex;
  align-items: flex-start;

}
#form-details .people div img{
  width: 65px;
  height: 65px;
  object-fit: cover;
  margin-right: 15px;

}
#form-details .people div p{
  margin:0;
  font-size: 13px;
  line-height: 25px;
}
#form-details .people div p span{
  display: block;
  font-size: 16px;
  font-weight: 600;
  color: #000;
}

</style>
 <!-------------------------Header Section------------------->
 <section id="page-header" class="about-header">
      <h2>#let's_talk</h2>

      <p>LEAVE A MESSAGE.We love to hear for you!</p>

    </section>

    <!-------------------------contact details Section------------------->
    <section id="contact-details" >
      <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of your agency location 
          or contact us today</h2>
          <h3>Head Office</h3>
          <div>
            <li>
              <i class="fa-solid fa-map"></i>
              <p>484 Peradeniya Rd, Kandy 20000.</p>
            </li>

            <li>
              <i class="fa-regular fa-envelope"></i>
              <p>abdulhannan@gmail.com </p>
            </li>

            <li>
              <i class="fa-regular fa-phone"></i>
              <p>Fawzerhannan@gmail.com </p>
            </li>

            <li>
              <i class="fa-regular fa-clock"></i>
              <p>Monday to Saturday : 9:00a.m to 16:00p.m</p>
            </li>
          </div>
      </div>
      <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6295905422307!2d80.6198260743014!3d7.282917713874221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae36896ee749dcf%3A0xf6787210398b655f!2sLeather%20Kingdom!5e0!3m2!1sen!2slk!4v1702828414658!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>

    <section id="form-details">
      <form action="usercode.php" method="POST" >
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button class="btn btn-outline-info" name="btn-message" >Submit</button>
      </form>

      <div class="people">
        <div>
          <img src="image/peopleicon.svg" alt="">
          <p><span>Fawzer Hannan</span>Director/Owner <br>Phone : 0773555355 <br>
          Email : Fawzerhannan@gmail.com</p>
        </div>

        <div>
          <img src="image/peopleicon.svg" alt="">
          <p><span>Abdul Hannan</span> Manager<br>Phone :0773547583 <br>
          Email :abdulhannan@gmail.com </p>
        </div>

        
      </div>
    </section>



  <?php 
  include ('includes/footer.php');
  ?>