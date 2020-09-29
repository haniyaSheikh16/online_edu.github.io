<?php 

session_start();



$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'user registration');

$name = $_POST['user'];
$password = $_POST['pass'];

// $s= "select * form  usertable where  name = '$name'  " ;


$result = mysqli_query($con,"select * FROM  usertable where name='$name' && password = '$password'");

$num = mysqli_fetch_array($result);

// $name=$_POST['user'];
// $password=md5($_POST['pass']);
// $name = $_POST['user'];
// $password = $_POST['pass'];
// $ret=mysqli_query($con,"SELECT * FROM usertable WHERE name ='$name' ");
// $num=mysqli_fetch_array($ret);

if($num ==1)
{
   $_SESSION['username'] = $name;
   header('location:home.php');
}
else
 {
    header('location:login.php');
} 




?>






