<?php 

session_start();

?>

<html>
<head>
<title>home page</title>

</head>
<body>


<a href="logout.php"> LOGOUT </a>
 <h1>WELCOME  <?php echo $_SESSION['username']; ?> </h1>

</body>







</html>