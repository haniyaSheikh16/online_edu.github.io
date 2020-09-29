<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Skranji&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!-- Animate.css link -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  
        <link rel="stylesheet" href="stylee.css">
        <link rel="stylesheet" href="Php.css">
        
</head>
<body>
<style>
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

<!-- Navbaar -->
<?php  include 'menu.php'?>

<!-- Text on image -->




<!-- OVER VIEW -->
<div class="container">
  
<div class="my-5   animate__animated animate__bounceInDown animate__delay-2s">
    
    <center><h2><var>OVERVIEW</var></h2></center>

</div>
        
<div class="text_animat   animate__animated  animate__fadeInTopLeft animate__delay-2s">
  <h4><var>Why Learn PHP?</var></h4>
  
<p><var>PHP is a widely used server-side programming language that’s become increasingly fast and powerful over the years. PHP works well with HTML and databases, making it a great language for anyone interested in building dynamic web applications.</var></p>

<h4><var>Take-Away Skills</var></h4>
<p><var>In this course, you’ll be exposed to fundamental programming concepts in PHP.</var></p>

<h4><var>Note on Prerequisites:</var></h4>
<p><var>Some basic HTML is helpful before taking this course.</var></p>
</div>
</div>

<!-- jumbotron -->
<div class="jumbotron  animate__animated animate__flipInY  animate__delay-3s">
  <center>
  <h4><var>"I know from first-hand experience <br>that you can go in knowing zero,<br> nothing, and just get a grasp on <br>everything as you go and start <br>building right away."</var></h4><br>

<h3><var>— MADELYN, PINTEREST</h3></var>
  </center>
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




   








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>