<!-- NAVBAR -->


<style>
  .navbar 
  {
    background-image: linear-gradient(   #2d557d,#2d557d );
    color: #fff;
  }
  .dropdown-menu
  {
    background-image: linear-gradient(   #2d557d,#2d557d );
    
  }
  .dropdown-item
  {
    color: #fff;
  }
  .logo
{
    width: 40%;
    color: #fff;
    margin-top:10px;
    padding-left :100px;
    box-sizing: border-box;
}
/* .logo h4
{
 text-transform: uppercase;
 font-size: 1.6rem;
 animation: aagepiche 2s linear infinite;
animation-direction: alternate;
}
@keyframes aagepiche{
    from { padding-left: 40px;}
    to { padding-right: 40px;}
} */
  </style>
 <div class="header" id="topheader">
<nav class="navbar navbar-expand-lg navbar-dark ">
<div class="container text-uppercase p-2">



  <a class="navbar-brand animate__animated animate__backInLeft  logo" href="#"><var><strong><h4>ONLINE EDUCATION</h4></strong></var></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link  animate__animated animate__backInRight" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
<!-- Dropdown -->
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle animate__animated animate__backInRight" href="#" id="navbarDropdown" role="button" 
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="php.php">PHP</a>
          <a class="dropdown-item" href="html.php">HTML & CSS</a>
          <a class="dropdown-item" href="Bootstrap.php">BOOTSTRAP</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php">Logout</a>
        </div>
      </li>

      
      <li class="nav-item active">
        <a class="nav-link animate__animated animate__backInRight" href="about.php">About Us <span class="sr-only">(current)</span></a>
      </li>

      

      <li class="nav-item active">
        <a class="nav-link animate__animated animate__backInRight" href="Contact.php">Contact <span class="sr-only">(current)</span></a>
      </li>
      </div>
</div>
    </ul>
    
  </div>
</nav>



