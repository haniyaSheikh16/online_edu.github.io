<?php

$con = mysqli_connect ('localhost', 'root');

if ($con)
{
    //*echo "Connection Successful";
}
else
{
    echo " Not Connected ";
}

mysqli_select_db($con, 'e_learning');

$username = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comments'];



$query = "insert into   userinfodata (username, email, mobile, comment) 
value ('$username', '$email', '$mobile','$comment')";


             header('location:index.php');

mysqli_query($con,$query);


?>