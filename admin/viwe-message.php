<?php
 include('includes/header.php');
 include('../middleware/adminmiddleware.php');
 include('../function/myfunction.php');
 
if(isset($_GET['i']))
{
  $id= $_GET['i'];

  $messageData= checkIdNoValid($id);
  if(mysqli_num_rows($messageData)< 0)
  {
    ?>
      <h4>Something went wrong</h4>
    <?php
    die();
  }
}
else
{
  ?>
      <h4>Something went Wrong</h4>
  <?php
  die();
}

  $data= mysqli_fetch_array($messageData);
 ?> 
<section id="form-details">
      <form action="" method="POST" >
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button class="btn btn-outline-info" name="btn-message" >Submit</button>
      </form>


</section>
