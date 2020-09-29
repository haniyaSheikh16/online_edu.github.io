<?php 

session_start();
header('location:login.php');


$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'user registration');

$name = $_POST['user'];
$password = $_POST['pass'];

// $s= "select * form  usertable where  name = '$name'  " ;


$result = mysqli_query($con,"select * FROM  usertable where name='$name'");

$num = mysqli_fetch_array($result);

// $name=$_POST['user'];
// $password=md5($_POST['pass']);
// $name = $_POST['user'];
// $password = $_POST['pass'];
// $ret=mysqli_query($con,"SELECT * FROM usertable WHERE name ='$name' ");
// $num=mysqli_fetch_array($ret);

if($num ==1)
{
  echo "Username Already Taken";
}
else
 {
    $reg ="insert into usertable(name, password) value ('$name','$password ')";
       mysqli_query($con, $reg);
       echo " Registration successfully";
}



?>






