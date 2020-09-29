<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Skranji&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="contact.css">
    <!-- Animate.css link -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    
    <title>Document</title>
</head>
<body>
    <!-- NAVBAR -->
<?php  include 'menu.php'?>

<!-- Contact us -->
<div class="container  ">

<section class=" contant ">
    <div class="py-0 animate__animated animate__backInLeft animate__delay-1s">
    
        <center><h2><var>Get in Touch</var></h2></center>
        <center><p><var>Feel free to drop us a line to contact us</var></p></center>
</div>

<div class="w-50 m-auto animate__animated animate__backInRight animate__delay-2s">
     <form  method="POST" action="userinfo.php">
          <div class="form-group">
              <label>Username</label>
              <input type="text" name="user" autocomplete="off" class="form-control" required>
</div> 

<div class="form-group animate__animated animate__backInLeft animate__delay-2s">
              <label>Email</label>
              <input type="text" name="email" autocomplete="off" class="form-control" required>
</div> 


<div class="form-group animate__animated animate__backInRight animate__delay-2s">
              <label>Mobile</label>
              <input type="number" name="mobile" autocomplete="off" class="form-control" required>
</div> 


<div class="form-group animate__animated animate__backInLeft animate__delay-2s">
              <label>Comment</label>
              <textarea class="form-control" name="comments" ></textarea>

</div> 
<button type="submit" class="btn ">Submit</button>

 
</form>

</div>
</section>
</div>

<!-- Footer -->

<section id="footer">
<div class="container">
<div class="row">


<div class="col-md-3">
<h1> <var>About E-learning</var></h1>

<p><var>E-learning refers to a learning system that
   we can obtain through the internet using an electronic device.
    We also call it online learning or online education.. 
  “E-learning is training provided via a computer or other
   digital device, allowing technology to facilitate learning anytime, anywhere.”</var></p>


</div>

<div class="col-md-3">
<h1><var>Contact Us</var></h1>
<p><i class="fa fa-envelope-square"></i><var>info@OnlineEducation.com</var></p>
<p><i class="fa fa-home"></i><var>abc Road, xyz complex</var> </p>
<p><i class="fa fa-phone-square"></i><var>+1234567890</var></p>
<p><i class="fa fa-map-marker"></i><var>Karachi</var></p>


</div>

<div class="col-md-3">
<h1><var>Follow us on</var> </h1>
<p><i class="fa fa-facebook-square"></i><var>Facebook</var></p>
<p><i class="fa fa-youtube-play"></i><var>YouTube </var></p>
<p><i class="fa fa-linkedin-square"></i><var>Linkedin</var></p>
<p><i class="fa fa-twitter-square"></i><var>Twitter</var></p>


</div>

<div class="col-md-3 footer-box">
<p><h5><var>Subscribe Newsletter</var></h5></p>
<input type="email" class="form-control"  placeholder="Your Email"  required >
<div class="subscribe">
        
       <script type="text/javascript">
          function Subscribe() {
              alert("Thank you for subscribe");
          }
        </script>
        <a href="#" onclick=" Subscribe()">Subscribe</a>
         

         


      </div>


</div>
</div> <hr>
<p class="Design"><var> Design by Haniya sheikh</var></p>
<p class="copyright"> <var>Copyright © 2020 ONLINE EDUCATION</var></p>
</div>
</section>

    <style>

        .btn
        {
        
        background-image: linear-gradient( #008080, #008080 );
        color:#fff;
        }
        body
{
    width: 100%;
    height: 100vh;
    background-image:linear-gradient(rgba(0,168,255,0.3),rgba(0,168,255,0.3)), url('images/123.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    position: relative;

}
.form-group
{
    color: #fff;
}
.contant
{
    color : #fff;
}
/* FOOTER */

#footer
  {
      margin-top: 80px;
      padding: 100px;
      background-image: linear-gradient(   #2d557d,#2d557d );
      color: #fff;
  }
  /* .footer-logo
  {
      width: 150px;
      margin-top: 25px;
      margin-bottom: 15px;
  } */
  #footer h1
  {
      font-size: 15px;
      text-align: left;
      margin-top: 25px;
      margin-bottom:  25px; 
      border-bottom: 5px solid #008080;
  }
  #footer p
  {
      font-size  : 12px ;
      text-align: left;
  }
  #footer .row .fa
  {
      font-size: 15px;
      padding-right: 20px;
  }
  .footer-box .form-control
  {
     box-shadow:none !important;
     border:none;
     border-radius: 0;
     margin-top : 50px;
     max-width :250px;

  }
  .footer-box .btn-primary
  {
    box-shadow:none !important;
     border:none;
     border-radius: 0;
     margin-top : 30px;
     background-image: linear-gradient(  #008080, #008080 );

  }
  
  .footer-box h5
  {
    margin-top : 20px;
    border-bottom: 5px solid #008080;
  }
  
.subscribe a
{
 width: 100px;
 display: block;
 color: #fff !important;
 background-image: linear-gradient(  #008080, #008080);
 text-decoration: none;
 margin-top : 30px;
 padding: 5px;
 text-align: center;
}
    
  #footer hr
  {
       margin-top: 10px;
  }
  #footer .copyright
  {
      margin-bottom: -80px;
      text-align: center;
      font-size: 15px;
  }
  
  
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>