<?php
include('includes/header.php');
?>
<style>
  #about-head {
    display: flex;
    align-items: center;
    padding: 40px 80px;
  }

  #about-head img {
    width: 50%;

  }

  #about-head div {
    padding-left: 40px;

  }

  #about-app h1 {
    text-align: center;

  }

  #about-app .video {
    width: 70%;
    height: 100%;
    margin: 30px auto 0 auto;
  }

  #about-app .video video {
    width: 100%;
    height: 100%;
    border-radius: 20px;
  }

  #page-header {
    background-image: url("assets/img/b2.jpg");
    width: 100%;
    height: 40vh;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
    padding: 14px;

  }

  #page-header h2,
  #page-header p {
    color: #fff;
  }
  .member{
    text-align: center;
    color: gray;
  }
  .members{
    background-color: beige;
    font-size: 18px;
    border: 2px solid green;
    box-shadow:0 0 30px greenyellow;
    padding-top: 10px;
  }
  .contact{
    text-align: right;
  }
</style>

<section id="page-header" class="about-header">
  <h2>#knowus</h2>

  <p>Welcome to Leather Kingdom, a regal haven for footwear enthusiasts in the heart of Kandy.</p>
</section>


<section id="about-head">
  <img src="assets/img/aboutmain.jpg" alt="about" />
  <div>
    <h2>Who We Are?</h2>
    <p>
      Welcome to Leather Kingdom, a regal haven for footwear enthusiasts in the heart of Kandy. Established with a
      passion for timeless style and unparalleled craftsmanship, Leather Kingdom is your go-to destination for an
      exquisite collection of leather shoes. As you step into our realm, be prepared to be enchanted by a curated
      selection that seamlessly blends sophistication with comfort. Each pair in our kingdom tells a story of quality
      materials, expert artisanship, and a commitment to elevating your every step. Whether you're seeking the allure of
      classic leather styles or the latest trends in contemporary footwear, Leather Kingdom reigns supreme in offering a
      personalized shopping experience that transcends fashion to create a kingdom where footwear dreams come true.
      Visit us at 484 Peradeniya Rd, Kandy 20000, and discover the epitome of elegance at Leather Kingdom
    </p>
    
    <br><br>
    <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Welcome to Leather Kingdom, a regal haven for footwear enthusiasts in the heart of Kandy
      </marquee>
  </div>
</div>
</section>
<div>
    <h2 class="member">People who involved in this Group project are</h2>
    <hr></hr>
    <div class="container members mt-5">
      <p>KADSE222F-063 - Mr Wijethunga S M K I </p>
      <p>KADSE222F-052 - Mr Wicramasinghe W M S I B</p>
      <p>KADSE222F-030 - Ms Siriwardhana S M M D</p>
      <p>KADSE222F-041 - Mr Somarathna K V B M</p>
      <p>KADSE222F-027 - Mr Karunarathne K W G C D B </p>

      <p class="contact" >CONTACT NO. 0776479026</p>
    </div>
</div>
<?php
include('includes/footer.php');
?>