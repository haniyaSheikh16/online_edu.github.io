<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Skranji&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="about.css">   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <link rel="stylesheet" href="stylee.css">
    <!-- Animate.css link -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  

    <title>Bootstrap & php web</title>
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


<!-- NAVBAR -->
<?php  include 'menu.php'?>


<!--  jumbotron section -->

<div class="container  mt-4">

<div class="jumbotron animate__animated  animate__tada ">
       <h1 class="display-4">Welcome to Online Education</h1>
          <p class="lead"><var>The idea that technology can revolutionize education is not new.
             However, the Internet, coupled with mobile, more affordable end-user gadgetry now lends itself as
              an enormously powerful digital medium to enhance the teaching and learning experience across the globe.
               Advances in information technology have enabled the “personalization” of the learning experience by providing 
            access to learning and assessment resources – anywhere, anytime.</var></p>
              
      </div>
</div>

<!-- ABOUT -->
<div class="container">
<div class="row">
    <div class="col-lg-6 col-md-6 col-12 mt-3 my-5 animate__animated  animate__backInLeft animate__delay-2s">
        <h1><var>E-learning</var></h1>
        <p><var><strong>E-learning</strong> refers to a learning system that we can obtain through the internet 
          using an electronic device. We also call it online learning or<strong> online education</strong>..
           “E-learning is training provided via a computer or other
           digital device, allowing technology to facilitate learning anytime, anywhere.”</var></p>
        </div>

        <div class="col-lg-6 col-md-6 col-12 animate__animated animate__backInRight animate__delay-2s">
        <video width="400" controls>
  <source src="E-learn.mp4" type="video/mp4">
  
  
</video>
        </div>
</div>
<hr class="my-4">

<!-- Progress bar -->


<div class="container">
  <section class="serviceoffers " id="servicediv">
     <div class="container heading text center mt-3 animate__animated animate__backInLeft animate__delay-3s">
       <center><h1><var>What do we offer</var> </h1>
        <p><var>Lorem ipsum madolor sit amet, consectetur adipisicing elit.</var></p></center>
</div>

               
                      <div class="names my-5 animate__animated animate__backInRight animate__delay-3s">
                        <h2><var>PHP</var></h2>
                        <div class="progress w-200%">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:95%">95%</div>
                      </div>
</div>


<div class="names my-5 animate__animated animate__backInLeft animate__delay-3s">
                        <h2><var>BOOTSTRAP</var></h2>
                        <div class="progress w-75%">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:82%">82%</div>
                      </div>
</div>




<div class="names my-5 animate__animated animate__backInRight animate__delay-3s">
                        <h2><var>HTML</var></h2>
                        <div class="progress w-75%">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:76%">76%</div>
                      </div>
</div>


<div class="names my-5 animate__animated animate__backInLeft animate__delay-3s">
                        <h2><var>CSS</var></h2>
                        <div class="progress w-75%">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:65%">65%</div>
                      </div>
</div>
                     
              </div>
      




<section>
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





